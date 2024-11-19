import { motion } from 'framer-motion';

function Logo() {
  return (
    <motion.div 
      className="relative flex items-center"
      initial={{ opacity: 0 }}
      animate={{ opacity: 1 }}
      transition={{ duration: 0.5 }}
    >
      <div className="relative overflow-visible">
        <h1 className="text-3xl font-bold tracking-tight flex items-center">
          {/* Black */}
          <motion.span 
            className="text-white relative inline-block"
            initial={{ y: 20, opacity: 0 }}
            animate={{ y: 0, opacity: 1 }}
            transition={{ duration: 0.5 }}
          >
            Black
            {/* Bubbles for "Black" */}
            {[...Array(12)].map((_, i) => (
              <motion.div
                key={`black-${i}`}
                className="absolute rounded-full bg-white/60 blur-[0.5px]"
                style={{
                  width: `${Math.random() * 3 + 2}px`,
                  height: `${Math.random() * 3 + 2}px`,
                  left: `${(i * 8)}%`,
                  top: `-${Math.random() * 5 + 2}px`,
                }}
                animate={{
                  y: [0, -15],
                  x: [0, (Math.random() - 0.5) * 5],
                  opacity: [0.6, 0],
                  scale: [1, 0.8]
                }}
                transition={{
                  duration: 0.8 + Math.random() * 0.4,
                  repeat: Infinity,
                  delay: Math.random() * 0.3,
                  ease: "easeOut"
                }}
              />
            ))}
          </motion.span>

          {/* to */}
          <motion.span 
            className="text-gray-400 mx-2"
            animate={{ 
              scale: [1, 1.05, 1],
              opacity: [0.8, 1, 0.8]
            }}
            transition={{ 
              duration: 2,
              repeat: Infinity,
              ease: "easeInOut"
            }}
          >
            to
          </motion.span>

          {/* White */}
          <motion.span 
            className="text-white relative inline-block"
            initial={{ y: -20, opacity: 0 }}
            animate={{ y: 0, opacity: 1 }}
            transition={{ duration: 0.5, delay: 0.2 }}
          >
            White
            {/* Bubbles for "White" */}
            {[...Array(12)].map((_, i) => (
              <motion.div
                key={`white-${i}`}
                className="absolute rounded-full bg-white/60 blur-[0.5px]"
                style={{
                  width: `${Math.random() * 3 + 2}px`,
                  height: `${Math.random() * 3 + 2}px`,
                  left: `${(i * 8)}%`,
                  top: `-${Math.random() * 5 + 2}px`,
                }}
                animate={{
                  y: [0, -15],
                  x: [0, (Math.random() - 0.5) * 5],
                  opacity: [0.6, 0],
                  scale: [1, 0.8]
                }}
                transition={{
                  duration: 0.8 + Math.random() * 0.4,
                  repeat: Infinity,
                  delay: Math.random() * 0.3,
                  ease: "easeOut"
                }}
              />
            ))}
          </motion.span>
        </h1>
      </div>
    </motion.div>
  );
}

export default Logo;