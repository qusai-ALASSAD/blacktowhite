import { useEffect, useRef } from 'react';

function MouseSparkles() {
  const canvasRef = useRef(null);
  const sparklesRef = useRef([]);
  const mouseRef = useRef({ x: 0, y: 0 });
  const frameRef = useRef();

  useEffect(() => {
    const canvas = canvasRef.current;
    const ctx = canvas.getContext('2d');

    const resizeCanvas = () => {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    };

    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);

    const createSparkle = (x, y) => ({
      x,
      y,
      size: Math.random() * 3 + 1,
      life: 1,
      color: Math.random() > 0.5 ? '#ffffff' : '#000000',
      velocity: {
        x: (Math.random() - 0.5) * 3,
        y: (Math.random() - 0.5) * 3
      }
    });

    const updateSparkles = () => {
      sparklesRef.current = sparklesRef.current
        .map(sparkle => ({
          ...sparkle,
          x: sparkle.x + sparkle.velocity.x,
          y: sparkle.y + sparkle.velocity.y,
          life: sparkle.life - 0.02
        }))
        .filter(sparkle => sparkle.life > 0);

      if (Math.random() < 0.3) {
        sparklesRef.current.push(
          createSparkle(mouseRef.current.x, mouseRef.current.y)
        );
      }
    };

    const drawSparkles = () => {
      ctx.clearRect(0, 0, canvas.width, canvas.height);

      sparklesRef.current.forEach(sparkle => {
        ctx.beginPath();
        ctx.arc(sparkle.x, sparkle.y, sparkle.size, 0, Math.PI * 2);
        ctx.fillStyle = `${sparkle.color}${Math.floor(sparkle.life * 255).toString(16).padStart(2, '0')}`;
        ctx.fill();
      });
    };

    const animate = () => {
      updateSparkles();
      drawSparkles();
      frameRef.current = requestAnimationFrame(animate);
    };

    const handleMouseMove = (e) => {
      mouseRef.current = {
        x: e.clientX,
        y: e.clientY
      };
    };

    window.addEventListener('mousemove', handleMouseMove);
    animate();

    return () => {
      window.removeEventListener('resize', resizeCanvas);
      window.removeEventListener('mousemove', handleMouseMove);
      cancelAnimationFrame(frameRef.current);
    };
  }, []);

  return (
    <canvas
      ref={canvasRef}
      className="fixed inset-0 pointer-events-none z-10"
      style={{ opacity: 0.6 }}
    />
  );
}

export default MouseSparkles;