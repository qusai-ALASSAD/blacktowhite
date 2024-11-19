import Database from 'better-sqlite3';
import logger from '../utils/logger.js';

const db = new Database('users.db', {
  verbose: (message) => logger.debug(message)
});

// Enable foreign keys
db.pragma('foreign_keys = ON');

export default db;