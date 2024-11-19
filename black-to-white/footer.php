<?php
/**
 * The template for displaying the footer
 */
?>
<footer class="site-footer bg-black text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Logo and Company Info -->
            <div class="col-span-1 md:col-span-2">
                <div class="footer-logo mb-6">
                    <?php if (has_custom_logo()): ?>
                        <?php the_custom_logo(); ?>
                    <?php else: ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold inline-flex items-center">
                            <span class="logo-black relative">Black</span>
                            <span class="mx-2">to</span>
                            <span class="logo-white relative">White</span>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="company-info text-gray-400">
                    <?php echo wp_kses_post(get_theme_mod('footer_company_info', 'Professionelle Reinigungsdienstleistungen für Privathaushalte und Unternehmen.')); ?>
                </div>
                <div class="contact-info mt-4">
                    <?php if ($address = get_theme_mod('company_address')): ?>
                        <p class="flex items-center text-gray-400 mb-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            </svg>
                            <?php echo esc_html($address); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Navigation Menu -->
            <div class="footer-menu">
                <h3 class="text-xl font-bold mb-6"><?php _e('Navigation', 'black-to-white'); ?></h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'space-y-3',
                    'fallback_cb' => false,
                ));
                ?>
            </div>

            <!-- Social Media -->
            <div class="social-media">
                <h3 class="text-xl font-bold mb-6"><?php _e('Social Media', 'black-to-white'); ?></h3>
                <div class="flex space-x-4">
                    <?php
                    $social_links = array(
                        'facebook' => get_theme_mod('social_facebook'),
                        'instagram' => get_theme_mod('social_instagram'),
                        'twitter' => get_theme_mod('social_twitter'),
                        'linkedin' => get_theme_mod('social_linkedin')
                    );

                    foreach ($social_links as $platform => $url):
                        if ($url):
                    ?>
                        <a href="<?php echo esc_url($url); ?>" class="text-gray-400 hover:text-white transition-colors" target="_blank" rel="noopener noreferrer">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <?php
                                switch ($platform) {
                                    case 'facebook':
                                        echo '<path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>';
                                        break;
                                    case 'instagram':
                                        echo '<path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 011.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 01-1.153 1.772 4.915 4.915 0 01-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 01-1.772-1.153 4.904 4.904 0 01-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 011.153-1.772A4.897 4.897 0 015.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2z"/>';
                                        break;
                                    case 'twitter':
                                        echo '<path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>';
                                        break;
                                    case 'linkedin':
                                        echo '<path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>';
                                        break;
                                }
                                ?>
                            </svg>
                        </a>
                    <?php
                        endif;
                    endforeach;
                    ?>
                </div>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-gray-800 text-center text-gray-400">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('Alle Rechte vorbehalten', 'black-to-white'); ?></p>
        </div>
    </div>

    <!-- Footer Bubbles Animation -->
    <div class="footer-bubbles"></div>
</footer>

<?php wp_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile Navigation
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            this.setAttribute('aria-expanded', 
                this.getAttribute('aria-expanded') === 'true' ? 'false' : 'true'
            );
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenu.contains(event.target) && !mobileMenuBtn.contains(event.target)) {
                mobileMenu.classList.remove('active');
                mobileMenuBtn.setAttribute('aria-expanded', 'false');
            }
        });
    }

    // Footer Bubbles Animation
    function createBubble() {
        const bubble = document.createElement('div');
        bubble.className = 'footer-bubble';
        
        const size = Math.random() * 30 + 10;
        bubble.style.width = `${size}px`;
        bubble.style.height = `${size}px`;
        bubble.style.left = `${Math.random() * 100}%`;
        
        document.querySelector('.footer-bubbles').appendChild(bubble);
        
        setTimeout(() => bubble.remove(), 2000);
    }

    setInterval(createBubble, 300);
});
</script>

</body>
</html>