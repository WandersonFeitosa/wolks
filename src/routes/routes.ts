import { Router } from "express";
import { UserController } from "../controllers/UserController";

const routes = Router();

routes.post("/logUser", new UserController().logUser);
routes.post("/createUser", new UserController().createUser);

export default routes;
