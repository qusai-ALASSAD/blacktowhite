<?php
function black_to_white_widgets_init() {
    register_sidebar(array(
        'name'          => __('الشريط الجانبي', 'black-to-white'),
        'id'            => 'sidebar-1',
        'description'   => __('أضف الودجات هنا لتظهر في الشريط الجانبي.', 'black-to-white'),
        'before_widget' => '<div id="%1$s" class="widget %2$s mb-8">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title text-xl font-bold mb-4">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('تذييل الصفحة 1', 'black-to-white'),
        'id'            => 'footer-1',
        'description'   => __('المنطقة الأولى في تذييل الصفحة.', 'black-to-white'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title text-lg font-bold mb-4">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('تذييل الصفحة 2', 'black-to-white'),
        'id'            => 'footer-2',
        'description'   => __('المنطقة الثانية في تذييل الصفحة.', 'black-to-white'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title text-lg font-bold mb-4">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'black_to_white_widgets_init');