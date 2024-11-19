document.addEventListener('DOMContentLoaded', function() {
    // Logo Bubbles Animation
    function createBubble(container) {
        const bubble = document.createElement('div');
        bubble.className = 'absolute rounded-full';
        
        const size = Math.random() * 3 + 2;
        bubble.style.width = `${size}px`;
        bubble.style.height = `${size}px`;
        bubble.style.background = 'rgba(255, 255, 255, 0.6)';
        bubble.style.filter = 'blur(0.5px)';
        bubble.style.left = `${(Math.random() * 100)}%`;
        bubble.style.top = '-2px';
        
        // Animation
        bubble.animate([
            { 
                transform: 'translate(0, 0)',
                opacity: 0.6
            },
            { 
                transform: `translate(${(Math.random() - 0.5) * 8}px, -20px)`,
                opacity: 0
            }
        ], {
            duration: 800 + Math.random() * 400,
            easing: 'ease-out',
            iterations: Infinity
        });
        
        container.appendChild(bubble);
        
        setTimeout(() => {
            bubble.remove();
        }, 1200);
    }
    
    // Create bubbles for logo parts
    const logoBlack = document.querySelector('.logo-black');
    const logoWhite = document.querySelector('.logo-white');
    
    if (logoBlack && logoWhite) {
        setInterval(() => {
            for (let i = 0; i < 2; i++) {
                createBubble(logoBlack);
                createBubble(logoWhite);
            }
        }, 100);
    }
});