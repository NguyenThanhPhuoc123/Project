import express from "express";
import {
    getUser,
    getUserById,
    createUser,
    updateUser,
    deleteUser
} from "../controllers/UserController.js";

const router = express.Router();

router.get('/sanpham',getUser);
router.get('/sanpham/:id',getUserById);
router.post('/sanpham', createUser);
router.patch('/sanpham/:id', updateUser);
router.delete('/sanpham/:id', deleteUser);
export default router;