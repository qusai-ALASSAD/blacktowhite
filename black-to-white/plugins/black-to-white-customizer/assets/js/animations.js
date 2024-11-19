document.addEventListener('DOMContentLoaded', function() {
    // Logo Animation
    function initLogoAnimation() {
        const logoElements = document.querySelectorAll('.logo-black, .logo-white');
        
        logoElements.forEach(logo => {
            createBubbles(logo);
        });
    }

    function createBubbles(element) {
        setInterval(() => {
            const bubble = document.createElement('div');
            bubble.className = 'logo-bubble';
            
            const size = Math.random() * 8 + 4;
            bubble.style.width = `${size}px`;
            bubble.style.height = `${size}px`;
            bubble.style.left = `${Math.random() * 100}%`;
            
            element.appendChild(bubble);
            
            setTimeout(() => bubble.remove(), 2000);
        }, 300);
    }

    // Initialize animations
    initLogoAnimation();
});