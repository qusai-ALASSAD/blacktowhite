import 'dotenv/config';
import app from './app.js';
import logger from './utils/logger.js';

const host = process.env.HOST || '0.0.0.0';
const port = process.env.PORT || 3000;

app.listen(port, host, () => {
  logger.info(`Server is running on http://${host}:${port}`);
});