import { Request, Response } from "express";
import mongoose from "mongoose";

const carWolksSchema = new mongoose.Schema({
  user_id: String,
  model: String,
  year: String,
  stock: String,
  price: String,
  info: String,
  image_url: String,
});

export const CarWolks = mongoose.model("CarsWolks", carWolksSchema);

export class CarsController {
  async createCar(req: Request, res: Response) {
    const { user_id, model, year, stock, price, info } = req.body;
    const image_url = "/uploads/" + req.file?.filename;

    try {
      const newCar = new CarWolks({
        user_id,
        model,
        year,
        stock,
        price,
        info,
        image_url,
      });

      await newCar.save();
    } catch (err) {
      return res.status(400).json({ message: "Erro ao criar carro" });
    }
    //get the ID of the new car
    const newCar = await CarWolks.findOne({
      user_id,
      image_url,
    });
    const newCarId = newCar?._id;

    return res.status(201).json({ newCarId });
  }
}
