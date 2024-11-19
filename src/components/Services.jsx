import { Link } from 'react-router-dom';
import { motion } from 'framer-motion';
import { FaBuilding, FaHome, FaIndustry, FaTools, FaCheck } from 'react-icons/fa';

function Services() {
  const services = [
    {
      icon: <FaBuilding className="h-12 w-12" />,
      id: 'office',
      title: "Büroreinigung",
      description: "Professionelle Reinigung für Geschäftsräume und Büros",
      features: [
        "Tägliche Unterhaltsreinigung",
        "Grundreinigung",
        "Fensterreinigung",
        "Sanitärreinigung"
      ]
    },
    {
      icon: <FaHome className="h-12 w-12" />,
      id: 'home',
      title: "Privatreinigung",
      description: "Maßgeschneiderte Reinigungslösungen für Privathaushalte",
      features: [
        "Wohnungsreinigung",
        "Treppenhausreinigung",
        "Umzugsreinigung",
        "Gartenarbeiten"
      ]
    },
    {
      icon: <FaIndustry className="h-12 w-12" />,
      id: 'industrial',
      title: "Industriereinigung",
      description: "Spezialreinigung für Industrieanlagen",
      features: [
        "Maschinenreinigung",
        "Hallenreinigung",
        "Fassadenreinigung",
        "Sonderreinigung"
      ]
    },
    {
      icon: <FaTools className="h-12 w-12" />,
      id: 'special',
      title: "Spezialreinigung",
      description: "Besondere Reinigungsaufgaben",
      features: [
        "Bauendreinigung",
        "Teppichreinigung",
        "Glasreinigung",
        "Desinfektion"
      ]
    }
  ];

  return (
    <section id="services" className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-left mb-16">
          <motion.h2 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.5 }}
            className="text-4xl font-bold mb-4 text-black"
          >
            Unsere Dienstleistungen
          </motion.h2>
          <p className="text-xl text-gray-600">
            Professionelle Reinigungslösungen in Frankfurt und Umgebung
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {services.map((service, index) => (
            <Link 
              to={`/services/${service.id}`}
              key={service.id}
              className="group"
            >
              <motion.div 
                initial={{ opacity: 0, y: 20 }}
                whileInView={{ opacity: 1, y: 0 }}
                transition={{ duration: 0.5, delay: index * 0.1 }}
                className="bg-black text-white rounded-xl p-8 h-full transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl"
              >
                <div className="flex items-center justify-center h-16 w-16 rounded-full bg-gray-800 mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                  {service.icon}
                </div>
                
                <h3 className="text-xl font-semibold text-center mb-4">
                  {service.title}
                </h3>
                
                <p className="text-gray-300 text-center mb-6">
                  {service.description}
                </p>
                
                <ul className="space-y-3">
                  {service.features.map((feature, idx) => (
                    <li key={idx} className="flex items-center text-gray-300">
                      <FaCheck className="h-5 w-5 text-white mr-2 flex-shrink-0" />
                      <span>{feature}</span>
                    </li>
                  ))}
                </ul>
              </motion.div>
            </Link>
          ))}
        </div>
      </div>
    </section>
  );
}

export default Services;