import jwt from 'jsonwebtoken';
import asyncHandler from 'express-async-handler';
import User from '../models/User.js';
import { AppError } from '../middleware/errorHandler.js';
import logger from '../utils/logger.js';

export const register = asyncHandler(async (req, res) => {
  const { email, password, name } = req.body;
  
  if (User.findByEmail(email)) {
    throw new AppError('Email already exists', 400);
  }

  const user = User.create({ email, password, name });
  const token = jwt.sign({ id: user.lastInsertRowid }, process.env.JWT_SECRET);

  logger.info(`New user registered: ${email}`);
  res.status(201).json({ token });
});

export const login = asyncHandler(async (req, res) => {
  const { email, password } = req.body;
  const user = User.findByEmail(email);

  if (!user || !User.validatePassword(user, password)) {
    throw new AppError('Invalid credentials', 401);
  }

  const token = jwt.sign({ id: user.id }, process.env.JWT_SECRET);
  logger.info(`User logged in: ${email}`);
  res.json({ token });
});

export const getUsers = asyncHandler(async (req, res) => {
  const users = User.getAll();
  res.json(users);
});