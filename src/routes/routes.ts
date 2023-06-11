import { Router } from "express";
import { UserController } from "../controllers/UserController";
import cors from "cors";
import { CarsController } from "../controllers/CarsController";

const routes = Router();
import upload from "../middlewares/uploadImage";

routes.use(cors());

routes.post("/logUser", new UserController().logUser);
routes.post("/createUser", new UserController().createUser);
routes.post(
  "/createCar",
  upload.single("image"),
  new CarsController().createCar
);

export default routes;
