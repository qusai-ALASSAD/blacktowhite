import db from '../config/database.js';
import bcrypt from 'bcryptjs';
import logger from '../utils/logger.js';

// Initialize users table
try {
  db.exec(`
    CREATE TABLE IF NOT EXISTS users (
      id INTEGER PRIMARY KEY AUTOINCREMENT,
      email TEXT UNIQUE NOT NULL,
      password TEXT NOT NULL,
      name TEXT NOT NULL,
      created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )
  `);
  logger.info('Users table initialized');
} catch (error) {
  logger.error('Error initializing users table:', error);
}

class User {
  static create({ email, password, name }) {
    const hashedPassword = bcrypt.hashSync(password, 10);
    const stmt = db.prepare('INSERT INTO users (email, password, name) VALUES (?, ?, ?)');
    return stmt.run(email, hashedPassword, name);
  }

  static findByEmail(email) {
    const stmt = db.prepare('SELECT * FROM users WHERE email = ?');
    return stmt.get(email);
  }

  static validatePassword(user, password) {
    return bcrypt.compareSync(password, user.password);
  }

  static getAll() {
    const stmt = db.prepare('SELECT id, email, name, created_at FROM users');
    return stmt.all();
  }
}

export default User;