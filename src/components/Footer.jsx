import { FaFacebook, FaTwitter, FaInstagram, FaLinkedin } from 'react-icons/fa';

function Footer() {
  return (
    <footer className="bg-[#1a1a1a]">
      <div className="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div className="col-span-1 md:col-span-2">
            <h3 className="text-white text-lg font-semibold">Black to White</h3>
            <p className="mt-4 text-gray-400">
              Professionelle Reinigungsdienstleistungen für Privathaushalte und Unternehmen.
            </p>
          </div>
          
          <div>
            <h3 className="text-white text-lg font-semibold">Quick Links</h3>
            <ul className="mt-4 space-y-2">
              <li><a href="#home" className="text-gray-400 hover:text-white transition-colors">Startseite</a></li>
              <li><a href="#services" className="text-gray-400 hover:text-white transition-colors">Leistungen</a></li>
              <li><a href="#about" className="text-gray-400 hover:text-white transition-colors">Über uns</a></li>
              <li><a href="#contact" className="text-gray-400 hover:text-white transition-colors">Kontakt</a></li>
            </ul>
          </div>
          
          <div>
            <h3 className="text-white text-lg font-semibold">Social Media</h3>
            <div className="mt-4 flex space-x-6">
              <a href="#" className="text-gray-400 hover:text-white transition-colors">
                <FaFacebook className="h-6 w-6" />
              </a>
              <a href="#" className="text-gray-400 hover:text-white transition-colors">
                <FaTwitter className="h-6 w-6" />
              </a>
              <a href="#" className="text-gray-400 hover:text-white transition-colors">
                <FaInstagram className="h-6 w-6" />
              </a>
              <a href="#" className="text-gray-400 hover:text-white transition-colors">
                <FaLinkedin className="h-6 w-6" />
              </a>
            </div>
          </div>
        </div>
        
        <div className="mt-8 pt-8 border-t border-gray-700">
          <p className="text-center text-gray-400">
            © {new Date().getFullYear()} Black to White. Alle Rechte vorbehalten.
          </p>
        </div>
      </div>
    </footer>
  );
}

export default Footer;