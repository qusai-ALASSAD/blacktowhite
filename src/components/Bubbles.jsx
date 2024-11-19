import { useEffect, useRef } from 'react';

function Bubbles() {
  const canvasRef = useRef(null);
  const mouseRef = useRef({ x: 0, y: 0 });

  useEffect(() => {
    const canvas = canvasRef.current;
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    if (!ctx) return;

    const resizeCanvas = () => {
      canvas.width = window.innerWidth;
      canvas.height = 600; // Only cover the hero section
    };

    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);

    class Bubble {
      constructor() {
        this.reset();
      }

      reset() {
        this.x = Math.random() * canvas.width;
        this.y = canvas.height + Math.random() * 100;
        this.size = Math.random() * 3 + 1; // Smaller bubbles
        this.speedY = Math.random() * 0.8 + 0.2; // Slower movement
        this.speedX = Math.random() * 0.3 - 0.15;
        this.opacity = Math.random() * 0.2 + 0.1; // More subtle
        this.color = Math.random() > 0.5 ? '#000000' : '#ffffff';
      }

      update() {
        this.y -= this.speedY;
        this.x += this.speedX;

        // Mouse interaction
        const dx = this.x - mouseRef.current.x;
        const dy = this.y - mouseRef.current.y;
        const distance = Math.sqrt(dx * dx + dy * dy);
        
        if (distance < 50) { // Reduced interaction radius
          const angle = Math.atan2(dy, dx);
          const force = (50 - distance) / 50;
          this.x += Math.cos(angle) * force;
          this.y += Math.sin(angle) * force;
          this.opacity = Math.min(0.3, this.opacity + 0.05);
        }

        if (this.y < -this.size || this.x < -this.size || this.x > canvas.width + this.size) {
          this.reset();
        }
      }

      draw(ctx) {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fillStyle = `${this.color}${Math.floor(this.opacity * 255).toString(16).padStart(2, '0')}`;
        ctx.fill();
      }
    }

    const bubbles = Array.from({ length: 30 }, () => new Bubble()); // Reduced number of bubbles

    const handleMouseMove = (e) => {
      const rect = canvas.getBoundingClientRect();
      mouseRef.current = {
        x: e.clientX - rect.left,
        y: e.clientY - rect.top
      };
    };

    canvas.addEventListener('mousemove', handleMouseMove);

    let animationFrameId;
    const animate = () => {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      bubbles.forEach(bubble => {
        bubble.update();
        bubble.draw(ctx);
      });
      animationFrameId = requestAnimationFrame(animate);
    };

    animate();

    return () => {
      window.removeEventListener('resize', resizeCanvas);
      canvas.removeEventListener('mousemove', handleMouseMove);
      cancelAnimationFrame(animationFrameId);
    };
  }, []);

  return (
    <canvas
      ref={canvasRef}
      className="absolute top-0 left-0 w-full pointer-events-none"
      style={{ 
        height: '600px',
        background: 'linear-gradient(to bottom, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.7) 100%)'
      }}
    />
  );
}

export default Bubbles;