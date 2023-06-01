import { Router } from "express";
import { UserController } from "../controllers/UserController";
import cors from "cors";

const routes = Router();

routes.use(cors());

routes.post("/logUser", new UserController().logUser);
routes.post("/createUser", new UserController().createUser);

export default routes;