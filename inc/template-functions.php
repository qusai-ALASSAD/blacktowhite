<?php
function black_to_white_body_classes($classes) {
    // Add class if is front page
    if (is_front_page()) {
        $classes[] = 'home';
    }

    // Add class for sidebar
    if (is_active_sidebar('sidebar-1')) {
        $classes[] = 'has-sidebar';
    }

    return $classes;
}
add_filter('body_class', 'black_to_white_body_classes');

function black_to_white_custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'black_to_white_custom_excerpt_length');

function black_to_white_custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'black_to_white_custom_excerpt_more');

function black_to_white_custom_logo_class($html) {
    $html = str_replace('custom-logo-link', 'custom-logo-link text-2xl font-bold', $html);
    return $html;
}
add_filter('get_custom_logo', 'black_to_white_custom_logo_class');