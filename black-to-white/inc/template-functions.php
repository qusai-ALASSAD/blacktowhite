<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 */

function black_to_white_body_classes($classes) {
    // Add class if is front page
    if (is_front_page()) {
        $classes[] = 'home';
    }

    // Add class for RTL
    if (is_rtl()) {
        $classes[] = 'rtl';
    }

    return $classes;
}
add_filter('body_class', 'black_to_white_body_classes');

function black_to_white_pingback_header() {
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'black_to_white_pingback_header');

function black_to_white_custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'black_to_white_custom_excerpt_length');

function black_to_white_custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'black_to_white_custom_excerpt_more');