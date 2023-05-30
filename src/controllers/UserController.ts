import { Request, Response } from "express";
import mongoose from "mongoose";
import bcrypt from "bcrypt";
import jwt from "jsonwebtoken";

// Define o esquema para os usuários
const userWolksSchema = new mongoose.Schema({
  name: String,
  username: String,
  password: String,
});

export const UserWolks = mongoose.model("UserWolks", userWolksSchema);

export class UserController {
  async createUser(req: Request, res: Response) {
    const { name, username, password } = req.body;

    //Busca o usuário no banco de dados
    const checkUser = await UserWolks.findOne({ username: username });
    if (checkUser) {
      return res.status(400).json({ error: "username já utilizado" });
    }

    const hashedPassword = await bcrypt.hash(password, 10);

    const newUser = new UserWolks({ name, username, password: hashedPassword });

    await newUser.save();

    return res
      .status(201)
      .json({ message: "Usuário criado com sucesso", newUser });
  }

  async logUser(req: Request, res: Response) {
    const { email, password } = req.body;

    //Busca o usuário no banco de dados
    const user = await UserWolks.findOne({ email: email });
    if (!user) {
      return res.status(400).json({ error: "Usuário ou senha incorreto" });
    }

    //Verifica se a senha está correta
    if (user?.password) {
      const passwordMatch = await bcrypt.compare(password, user?.password);
      if (!passwordMatch) {
        return res.status(400).json({ error: "Usuário ou senha incorreto" });
      }
    }

    //Gera o token
    const jwtSecret = process.env.JWT_SECRET || "";
    const token = jwt.sign({ id: user._id }, jwtSecret, {
      expiresIn: "1d",
    });

    const { name, username, _id } = user;

    return res
      .status(200)
      .json({
        message: "Usuário logado",
        token,
        user: { name, username, _id },
      });
  }
}
