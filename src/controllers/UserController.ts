import { Request, Response } from "express";
import mongoose from "mongoose";
import bcrypt from "bcrypt";
import jwt from "jsonwebtoken";

// Define o esquema para os usuários
const userWolksSchema = new mongoose.Schema({
  username: String,
  email: String,
  password: String,
  name: String,
});

export const UserWolks = mongoose.model("UserWolks", userWolksSchema);

export class UserController {
  async createUser(req: Request, res: Response) {
    const { name, username, email, password } = req.body;

    //Busca o username no banco de dados
    const checkUsername = await UserWolks.findOne({ username: username });
    if (checkUsername) {
      return res.status(400).json({ error: "Nome de usuário já utilizado" });
    }

    //Busca o email no banco de dados
    const checkEmail = await UserWolks.findOne({ email: email });
    if (checkEmail) {
      return res.status(400).json({ error: "Email já utilizado" });
    }

    const hashedPassword = await bcrypt.hash(password, 10);

    const newUser = new UserWolks({
      name,
      username,
      email,
      password: hashedPassword,
    });

    await newUser.save();

    return res.status(201).json({ message: "Usuário criado com sucesso" });
  }

  async logUser(req: Request, res: Response) {
    const { username, password } = req.body;

    //Busca o usuário no banco de dados
    const user = await UserWolks.findOne({ username: username });
    if (!user) {
      return res.status(200).json({ error: "Usuário ou senha incorreto" });
    }

    //Verifica se a senha está correta
    if (user?.password) {
      const passwordMatch = await bcrypt.compare(password, user?.password);
      if (!passwordMatch) {
        return res.status(200).json({ error: "Usuário ou senha incorreto" });
      }
    }

    //Gera o token
    const jwtSecret = process.env.JWT_SECRET || "";
    const token = jwt.sign({ id: user._id }, jwtSecret, {
      expiresIn: "1d",
    });

    const userInfo = {
      name: user.name,
      username: user.username,
      email: user.email,
      id: user._id,
    };

    return res.status(200).json({
      message: "Usuário logado",
      token,
      userInfo,
    });
  }

  async changePassword(req: Request, res: Response) {
    const { id, password, newPassword } = req.body;
    try {
      //Busca o usuário no banco de dados
      const user = await UserWolks.findOne({ _id: id });
      if (!user) {
        return res.status(200).json({ error: "Usuário ou senha incorreto" });
      }

      //Verifica se a senha está correta
      if (user?.password) {
        const passwordMatch = await bcrypt.compare(password, user?.password);
        if (!passwordMatch) {
          return res.status(200).json({ error: "Senha incorreta" });
        }
      }

      const hashedPassword = await bcrypt.hash(newPassword, 10);

      await UserWolks.updateOne({ _id: id }, { password: hashedPassword });
    } catch (err) {
      console.log(err);
      return res.status(400).json({ error: "Erro ao alterar senha", err });
    }
    return res.status(200).json({ message: "Senha alterada com sucesso" });
  }
}
