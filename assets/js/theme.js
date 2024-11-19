// Mouse sparkles effect
function initMouseSparkles() {
    const canvas = document.createElement('canvas');
    canvas.classList.add('mouse-sparkles');
    document.body.appendChild(canvas);
    
    // Implementation of mouse sparkles effect
    // (Convert React MouseSparkles component to vanilla JS)
}

// Bubble animation
function initBubbles() {
    const canvas = document.createElement('canvas');
    canvas.classList.add('bubbles-effect');
    document.querySelector('.hero-section').appendChild(canvas);
    
    // Implementation of bubbles effect
    // (Convert React Bubbles component to vanilla JS)
}

document.addEventListener('DOMContentLoaded', function() {
    initMouseSparkles();
    initBubbles();
    
    // Initialize other interactive elements
});