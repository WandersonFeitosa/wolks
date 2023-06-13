import { Request } from "express";
import multer from "multer";

const storage = multer.diskStorage({
  destination(req, file, cb) {
    cb(null, "public/uploads");
  },
  filename(req, file, cb) {
    function generateFileName(file: any) {
      const fileType = file.mimetype.split("/");
      const fileName = Date.now() + "" + Math.round(Math.random() * 1e9);
      return `${fileName}.${fileType[1]}`;
    }
    const fileName = generateFileName(file);
    cb(null, fileName);
  },
});

const fileFilter = (req: Request, file: any, cb: any) => {
  if (
    file.mimetype === "image/png" ||
    file.mimetype === "image/jpeg" ||
    file.mimetype === "image/jpg"
  ) {
    cb(null, true);
  } else {
    cb(null, false);
  }
};

const limits = {
  fileSize: 4024 * 3024 * 5,
};

const upload = multer({ storage, fileFilter, limits });

export default upload;
