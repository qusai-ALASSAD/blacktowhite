import { motion } from 'framer-motion';

function About() {
  return (
    <section id="about" className="py-20 bg-black text-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="lg:text-center">
          <motion.h2 
            initial={{ opacity: 0 }}
            whileInView={{ opacity: 1 }}
            transition={{ duration: 0.5 }}
            className="text-4xl font-bold sm:text-5xl mb-4"
          >
            Warum Black to White?
          </motion.h2>
          <p className="mt-4 max-w-2xl text-xl text-gray-300 lg:mx-auto font-light">
            Mit jahrelanger Erfahrung und höchsten Qualitätsstandards verwandeln wir jeden Raum in ein strahlendes Ambiente.
          </p>
        </div>

        <div className="mt-20">
          <div className="grid grid-cols-1 gap-8 md:grid-cols-3">
            <motion.div 
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.5, delay: 0.1 }}
              className="bg-[#1a1a1a] p-8 rounded-xl shadow-lg"
            >
              <h3 className="text-2xl font-semibold mb-4">Professionelles Team</h3>
              <p className="text-gray-300 leading-relaxed">
                Unser geschultes Fachpersonal arbeitet mit modernster Technik und jahrelanger Erfahrung.
              </p>
            </motion.div>

            <motion.div 
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.5, delay: 0.2 }}
              className="bg-[#1a1a1a] p-8 rounded-xl shadow-lg"
            >
              <h3 className="text-2xl font-semibold mb-4">100% Zufriedenheit</h3>
              <p className="text-gray-300 leading-relaxed">
                Wir garantieren höchste Qualität und Kundenzufriedenheit bei jedem Auftrag.
              </p>
            </motion.div>

            <motion.div 
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.5, delay: 0.3 }}
              className="bg-[#1a1a1a] p-8 rounded-xl shadow-lg"
            >
              <h3 className="text-2xl font-semibold mb-4">Nachhaltig & Effektiv</h3>
              <p className="text-gray-300 leading-relaxed">
                Umweltfreundliche Reinigungsmittel für nachhaltige und gründliche Ergebnisse.
              </p>
            </motion.div>
          </div>
        </div>
      </div>
    </section>
  );
}

export default About;