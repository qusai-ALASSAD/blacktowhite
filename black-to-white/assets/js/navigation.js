jQuery(document).ready(function($) {
    // Mobile Menu Toggle
    const mobileMenuBtn = $('.mobile-menu-btn');
    const mobileMenu = $('.mobile-menu');
    
    mobileMenuBtn.on('click', function() {
        mobileMenu.slideToggle();
        $(this).attr('aria-expanded', 
            $(this).attr('aria-expanded') === 'true' ? 'false' : 'true'
        );
    });

    // Close menu when clicking outside
    $(document).on('click', function(event) {
        if (!mobileMenu.is(event.target) && !mobileMenuBtn.is(event.target) && mobileMenu.has(event.target).length === 0) {
            mobileMenu.slideUp();
            mobileMenuBtn.attr('aria-expanded', 'false');
        }
    });

    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function(event) {
        event.preventDefault();
        const target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 1000);
            
            // Close mobile menu if open
            mobileMenu.slideUp();
            mobileMenuBtn.attr('aria-expanded', 'false');
        }
    });
});