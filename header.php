<?php
/**
 * The header for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header fixed w-full z-50 bg-black bg-opacity-90">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-20">
            <div class="flex-shrink-0">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold">
                        <span class="logo-black text-white relative">Black</span>
                        <span class="text-gray-400 mx-2">to</span>
                        <span class="logo-white text-white relative">White</span>
                    </a>
                <?php endif; ?>
            </div>

            <nav class="hidden md:flex items-center space-x-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'flex space-x-8',
                    'fallback_cb' => false,
                ));
                ?>
                <a href="#contact" class="bg-white text-black px-4 py-2 rounded-md hover:bg-gray-100 transition-colors">
                    <?php _e('اطلب عرض سعر', 'black-to-white'); ?>
                </a>
            </nav>

            <button class="md:hidden text-white menu-toggle" aria-label="<?php esc_attr_e('القائمة', 'black-to-white'); ?>">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu hidden md:hidden bg-black bg-opacity-95">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'px-2 pt-2 pb-3 space-y-1',
            'fallback_cb' => false,
        ));
        ?>
        <div class="px-2 pt-2 pb-3">
            <a href="#contact" class="block w-full text-center bg-white text-black px-3 py-2 rounded-md">
                <?php _e('اطلب عرض سعر', 'black-to-white'); ?>
            </a>
        </div>
    </div>
</header>