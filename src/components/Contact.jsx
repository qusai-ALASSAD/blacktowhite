import { motion } from 'framer-motion';
import { useState } from 'react';
import { FaPhone, FaEnvelope, FaMapMarkerAlt } from 'react-icons/fa';

function Contact() {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    phone: '',
    message: ''
  });

  const handleSubmit = (e) => {
    e.preventDefault();
    console.log('Form submitted:', formData);
  };

  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    });
  };

  return (
    <section className="py-20 bg-black text-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.5 }}
          className="text-center mb-12"
        >
          <h2 className="text-4xl font-bold mb-4">Kontaktieren Sie uns</h2>
          <p className="text-xl text-gray-300">Wir sind für Sie da</p>
        </motion.div>

        <div className="grid grid-cols-1 md:grid-cols-2 gap-12">
          <motion.div 
            initial={{ opacity: 0, x: -20 }}
            whileInView={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.5 }}
            className="bg-[#1a1a1a] rounded-xl p-8"
          >
            <h3 className="text-2xl font-semibold mb-6">Unsere Kontaktdaten</h3>
            
            <div className="space-y-6">
              <div className="flex items-center">
                <FaMapMarkerAlt className="h-6 w-6 mr-4 text-gray-400" />
                <div>
                  <h4 className="font-semibold">Adresse</h4>
                  <p className="text-gray-300">Mainzer Landstraße 123<br />60329 Frankfurt am Main</p>
                </div>
              </div>
              
              <div className="flex items-center">
                <FaPhone className="h-6 w-6 mr-4 text-gray-400" />
                <div>
                  <h4 className="font-semibold">Telefon</h4>
                  <p className="text-gray-300">+49 (0) 69 1234567</p>
                </div>
              </div>
              
              <div className="flex items-center">
                <FaEnvelope className="h-6 w-6 mr-4 text-gray-400" />
                <div>
                  <h4 className="font-semibold">E-Mail</h4>
                  <p className="text-gray-300">info@blacktowhite-frankfurt.de</p>
                </div>
              </div>
            </div>
          </motion.div>

          <motion.div 
            initial={{ opacity: 0, x: 20 }}
            whileInView={{ opacity: 1, x: 0 }}
            transition={{ duration: 0.5 }}
          >
            <form onSubmit={handleSubmit} className="space-y-6">
              <div>
                <label htmlFor="name" className="block text-sm font-medium mb-1">Name</label>
                <input
                  type="text"
                  name="name"
                  id="name"
                  value={formData.name}
                  onChange={handleChange}
                  className="w-full px-4 py-3 rounded-md bg-[#1a1a1a] border border-gray-700 text-white focus:border-white focus:ring-white"
                  required
                />
              </div>

              <div>
                <label htmlFor="email" className="block text-sm font-medium mb-1">E-Mail</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  value={formData.email}
                  onChange={handleChange}
                  className="w-full px-4 py-3 rounded-md bg-[#1a1a1a] border border-gray-700 text-white focus:border-white focus:ring-white"
                  required
                />
              </div>

              <div>
                <label htmlFor="phone" className="block text-sm font-medium mb-1">Telefon</label>
                <input
                  type="tel"
                  name="phone"
                  id="phone"
                  value={formData.phone}
                  onChange={handleChange}
                  className="w-full px-4 py-3 rounded-md bg-[#1a1a1a] border border-gray-700 text-white focus:border-white focus:ring-white"
                  required
                />
              </div>

              <div>
                <label htmlFor="message" className="block text-sm font-medium mb-1">Ihre Nachricht</label>
                <textarea
                  name="message"
                  id="message"
                  rows="4"
                  value={formData.message}
                  onChange={handleChange}
                  className="w-full px-4 py-3 rounded-md bg-[#1a1a1a] border border-gray-700 text-white focus:border-white focus:ring-white"
                  required
                ></textarea>
              </div>

              <button
                type="submit"
                className="w-full py-3 px-4 bg-white text-black rounded-md font-medium hover:bg-gray-100 transition-colors"
              >
                Nachricht senden
              </button>
            </form>
          </motion.div>
        </div>
      </div>
    </section>
  );
}

export default Contact;