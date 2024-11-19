import { motion } from 'framer-motion';
import { useInView } from 'react-intersection-observer';

function BeforeAfter() {
  const transformations = [
    {
      id: 1,
      title: 'Büroreinigung',
      description: 'Professionelle Reinigung von Büroräumen',
      before: '/images/office-before.jpg',
      after: '/images/office-after.jpg',
    },
    {
      id: 2,
      title: 'Teppichreinigung',
      description: 'Gründliche Teppichreinigung und Pflege',
      before: '/images/carpet-before.jpg',
      after: '/images/carpet-after.jpg',
    },
    {
      id: 3,
      title: 'Fensterreinigung',
      description: 'Kristallklare Fenster und Glasflächen',
      before: '/images/windows-before.jpg',
      after: '/images/windows-after.jpg',
    }
  ];

  const { ref, inView } = useInView({
    triggerOnce: true,
    threshold: 0.1
  });

  return (
    <section className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-left mb-16">
          <h2 className="text-4xl font-bold text-black mb-4">
            Vorher / Nachher
          </h2>
          <p className="text-xl text-gray-600">
            Sehen Sie selbst die Qualität unserer Arbeit
          </p>
        </div>

        <div ref={ref} className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {transformations.map((item, index) => (
            <motion.div
              key={item.id}
              initial={{ opacity: 0, y: 20 }}
              animate={inView ? { opacity: 1, y: 0 } : {}}
              transition={{ duration: 0.5, delay: index * 0.2 }}
              className="bg-black rounded-xl overflow-hidden shadow-lg"
            >
              <div className="relative h-48 md:h-64">
                <div className="absolute inset-0 w-1/2">
                  <img
                    src={item.before}
                    alt={`${item.title} vorher`}
                    className="w-full h-full object-cover"
                  />
                  <div className="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
                    <span className="text-white font-medium">Vorher</span>
                  </div>
                </div>
                <div className="absolute inset-0 left-1/2 w-1/2">
                  <img
                    src={item.after}
                    alt={`${item.title} nachher`}
                    className="w-full h-full object-cover"
                  />
                  <div className="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center">
                    <span className="text-white font-medium">Nachher</span>
                  </div>
                </div>
              </div>
              <div className="p-6">
                <h3 className="text-xl font-semibold text-white mb-2">{item.title}</h3>
                <p className="text-gray-300">{item.description}</p>
              </div>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
}

export default BeforeAfter;