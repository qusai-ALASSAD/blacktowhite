jQuery(document).ready(function($) {
    // Logo Animation
    function initLogoAnimation() {
        const logoElements = $('.logo-black, .logo-white');
        
        logoElements.each(function() {
            createBubbles($(this));
        });
    }

    function createBubbles(element) {
        setInterval(() => {
            const bubble = $('<div>', {
                class: 'logo-bubble'
            });
            
            const size = Math.random() * 8 + 4;
            bubble.css({
                width: size + 'px',
                height: size + 'px',
                left: (Math.random() * 100) + '%'
            });
            
            element.append(bubble);
            
            setTimeout(() => bubble.remove(), 2000);
        }, 300);
    }

    // Initialize animations
    initLogoAnimation();
});