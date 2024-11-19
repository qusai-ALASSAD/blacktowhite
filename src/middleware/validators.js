import { body, validationResult } from 'express-validator';

export const validateRegister = [
  body('email').isEmail().normalizeEmail(),
  body('password').isLength({ min: 6 }),
  body('name').trim().isLength({ min: 2 }),
  validateResults
];

export const validateLogin = [
  body('email').isEmail().normalizeEmail(),
  body('password').exists(),
  validateResults
];

function validateResults(req, res, next) {
  const errors = validationResult(req);
  if (!errors.isEmpty()) {
    return res.status(400).json({ errors: errors.array() });
  }
  next();
}