import { Router } from 'express';
import { register, login, getUsers } from '../controllers/userController.js';
import { validateRegister, validateLogin } from '../middleware/validators.js';
import { auth } from '../middleware/auth.js';

const router = Router();

router.post('/register', validateRegister, register);
router.post('/login', validateLogin, login);
router.get('/', auth, getUsers);

export default router;