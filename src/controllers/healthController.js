import { freemem, totalmem, uptime } from 'os';

export const getHealth = (req, res) => {
  const health = {
    status: 'healthy',
    timestamp: new Date().toISOString(),
    uptime: process.uptime(),
    memory: {
      free: freemem(),
      total: totalmem(),
      usage: `${((1 - freemem() / totalmem()) * 100).toFixed(2)}%`
    },
    system: {
      uptime: uptime()
    }
  };

  res.status(200).json(health);
};