import { useState, useEffect } from 'react';
import { HashLink } from 'react-router-hash-link';
import { FaBars, FaTimes } from 'react-icons/fa';
import Logo from './Logo';

function Navbar() {
  const [isOpen, setIsOpen] = useState(false);
  const [isScrolled, setIsScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 50);
    };

    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const closeMenu = () => {
    setIsOpen(false);
  };

  const navLinks = [
    { to: '#home', text: 'Startseite' },
    { to: '#services', text: 'Leistungen' },
    { to: '#about', text: 'Über uns' },
    { to: '#contact', text: 'Kontakt' }
  ];

  return (
    <nav className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
      isScrolled ? 'bg-black shadow-lg' : 'bg-transparent'
    }`}>
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between h-20">
          <div className="flex items-center">
            <HashLink smooth to="#home" onClick={closeMenu}>
              <Logo />
            </HashLink>
          </div>
          
          <div className="hidden md:flex items-center space-x-8">
            {navLinks.map((link) => (
              <HashLink
                key={link.to}
                smooth
                to={link.to}
                className="text-white hover:text-gray-300 transition-colors"
              >
                {link.text}
              </HashLink>
            ))}
            <HashLink 
              smooth 
              to="#contact"
              className="bg-white text-black px-4 py-2 rounded-md hover:bg-gray-100 transition-colors"
            >
              Angebot anfordern
            </HashLink>
          </div>

          <div className="md:hidden flex items-center">
            <button 
              onClick={() => setIsOpen(!isOpen)} 
              className="text-white p-2"
              aria-label={isOpen ? 'Close menu' : 'Open menu'}
            >
              {isOpen ? <FaTimes size={24} /> : <FaBars size={24} />}
            </button>
          </div>
        </div>
      </div>

      {/* Mobile menu */}
      {isOpen && (
        <div className="md:hidden bg-black bg-opacity-95">
          <div className="px-2 pt-2 pb-3 space-y-1">
            {navLinks.map((link) => (
              <HashLink
                key={link.to}
                smooth
                to={link.to}
                className="block w-full text-left px-3 py-2 text-white hover:bg-gray-900 rounded-md"
                onClick={closeMenu}
              >
                {link.text}
              </HashLink>
            ))}
            <HashLink
              smooth
              to="#contact"
              className="block w-full text-center px-3 py-2 bg-white text-black rounded-md hover:bg-gray-100"
              onClick={closeMenu}
            >
              Angebot anfordern
            </HashLink>
          </div>
        </div>
      )}
    </nav>
  );
}

export default Navbar;