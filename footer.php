<?php
/**
 * The footer for our theme
 */
?>
<footer class="site-footer bg-black text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <?php if (is_active_sidebar('footer-1')): ?>
                    <?php dynamic_sidebar('footer-1'); ?>
                <?php else: ?>
                    <h3 class="text-xl font-bold mb-4">Über uns</h3>
                    <p class="text-gray-400">
                        Professionelle Reinigungsdienstleistungen für Büros, Privathaushalte und Unternehmen.
                    </p>
                <?php endif; ?>
            </div>

            <div>
                <?php if (is_active_sidebar('footer-2')): ?>
                    <?php dynamic_sidebar('footer-2'); ?>
                <?php else: ?>
                    <h3 class="text-xl font-bold mb-4">Schnelllinks</h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container' => false,
                        'menu_class' => 'space-y-2',
                        'fallback_cb' => false,
                    ));
                    ?>
                <?php endif; ?>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4">Kontakt</h3>
                <?php if ($phone = get_theme_mod('phone_number')): ?>
                    <p class="flex items-center text-gray-400 mb-2">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <?php echo esc_html($phone); ?>
                    </p>
                <?php endif; ?>
                
                <?php if ($email = get_theme_mod('email_address')): ?>
                    <p class="flex items-center text-gray-400">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <?php echo esc_html($email); ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>

        <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Alle Rechte vorbehalten.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>