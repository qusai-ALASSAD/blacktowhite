<?php
function black_to_white_widgets_init() {
    register_sidebar([
        'name'          => __('Primary Sidebar', 'black-to-white'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'black-to-white'),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-8">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title text-xl font-semibold mb-4">',
        'after_title'   => '</h2>',
    ]);

    register_sidebar([
        'name'          => __('Footer Widget Area', 'black-to-white'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'black-to-white'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title text-lg font-semibold mb-4">',
        'after_title'   => '</h2>',
    ]);
}
add_action('widgets_init', 'black_to_white_widgets_init');