import { useParams } from 'react-router-dom';
import { motion } from 'framer-motion';
import { servicesData } from '../data/servicesData';

function ServiceDetail() {
  const { serviceId } = useParams();
  const service = servicesData[serviceId];

  if (!service) {
    return (
      <div className="min-h-screen flex items-center justify-center">
        <h1 className="text-2xl text-gray-600">Service nicht gefunden</h1>
      </div>
    );
  }

  return (
    <div className="pt-20 pb-20">
      <motion.div
        initial={{ opacity: 0 }}
        animate={{ opacity: 1 }}
        className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
      >
        <div className="bg-white rounded-lg shadow-xl overflow-hidden">
          <div className="relative h-96">
            <img
              src={service.image}
              alt={service.title}
              className="w-full h-full object-cover"
            />
            <div className="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
              <h1 className="text-4xl font-bold text-white text-center px-4">
                {service.title}
              </h1>
            </div>
          </div>

          <div className="p-8">
            <p className="text-xl text-gray-700 mb-8">{service.description}</p>

            <div className="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
              <div>
                <h2 className="text-2xl font-semibold mb-4">Unsere Leistungen</h2>
                <ul className="space-y-3">
                  {service.features.map((feature, index) => (
                    <motion.li
                      key={index}
                      initial={{ opacity: 0, x: -20 }}
                      animate={{ opacity: 1, x: 0 }}
                      transition={{ delay: index * 0.1 }}
                      className="flex items-center text-gray-700"
                    >
                      <svg className="h-5 w-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                      </svg>
                      {feature}
                    </motion.li>
                  ))}
                </ul>
              </div>

              <div>
                <h2 className="text-2xl font-semibold mb-4">Ihre Vorteile</h2>
                <ul className="space-y-3">
                  {service.benefits.map((benefit, index) => (
                    <motion.li
                      key={index}
                      initial={{ opacity: 0, x: 20 }}
                      animate={{ opacity: 1, x: 0 }}
                      transition={{ delay: index * 0.1 }}
                      className="flex items-center text-gray-700"
                    >
                      <svg className="h-5 w-5 text-blue-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                      {benefit}
                    </motion.li>
                  ))}
                </ul>
              </div>
            </div>

            <div className="text-center">
              <a
                href="#contact"
                className="inline-block bg-blue-600 text-white px-8 py-3 rounded-md font-semibold hover:bg-blue-700 transition-colors"
              >
                Kostenlos anfragen
              </a>
            </div>
          </div>
        </div>
      </motion.div>
    </div>
  );
}

export default ServiceDetail;