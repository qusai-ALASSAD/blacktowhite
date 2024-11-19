import { BrowserRouter as Router } from 'react-router-dom';
import Navbar from './components/Navbar';
import Hero from './components/Hero';
import Services from './components/Services';
import BeforeAfter from './components/BeforeAfter';
import About from './components/About';
import Contact from './components/Contact';
import Footer from './components/Footer';
import Bubbles from './components/Bubbles';
import MouseSparkles from './components/MouseSparkles';

function App() {
  return (
    <Router>
      <div className="min-h-screen bg-white relative">
        <div id="home" className="relative bg-black">
          <Bubbles />
          <Navbar />
          <Hero />
        </div>
        <MouseSparkles />
        <div id="services">
          <Services />
        </div>
        <BeforeAfter />
        <div id="about">
          <About />
        </div>
        <div id="contact">
          <Contact />
        </div>
        <Footer />
      </div>
    </Router>
  );
}

export default App;