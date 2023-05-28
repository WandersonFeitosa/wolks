import express from "express";
import routes from "./routes/routes";
import mongoose from "mongoose";
import dotenv from "dotenv";

dotenv.config();

const dbUrl = process.env.MONGODB_URI || "";
let port = process.env.PORT ? Number(process.env.PORT) : 3000;

const app = express();

app.use(express.json());
app.use(express.static("./public"));
app.use(routes);

function startServer() {
  try {
    app.listen({
      host: "0.0.0.0",
      port,
    });
  } catch (err) {
    console.error(err);
  }
  console.log(`Servidor iniciado em http://localhost:${port}`);
}

mongoose
  .connect(dbUrl)
  .then(() => {
    console.log("Conectado ao banco de dados");
    startServer();
  })
  .catch((err) => {
    console.log(err);
  });
