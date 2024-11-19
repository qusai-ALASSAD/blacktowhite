import { motion } from 'framer-motion';

function Hero() {
  return (
    <div className="relative bg-black text-white min-h-screen flex items-center">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.8 }}
          className="max-w-3xl text-left"
        >
          <h1 className="text-6xl font-bold mb-6">
            <span className="text-white block">Professionelle</span>
            <span className="text-gray-400 block">Reinigungsservice in</span>
            <span className="text-gray-400 block">Frankfurt</span>
          </h1>
          <p className="text-xl text-gray-300 mb-10">
            Ihr zuverlässiger Partner für erstklassige<br />
            Reinigungsdienstleistungen im Rhein-Main-Gebiet.
          </p>
          <div className="flex space-x-4">
            <a 
              href="#contact" 
              className="bg-white text-black px-8 py-4 rounded-md font-medium hover:bg-gray-100 transition-colors"
            >
              Kostenlos anfragen
            </a>
            <a 
              href="#services" 
              className="border border-white text-white px-8 py-4 rounded-md font-medium hover:bg-white hover:text-black transition-colors"
            >
              Unsere Leistungen
            </a>
          </div>
        </motion.div>
      </div>
    </div>
  );
}

export default Hero;