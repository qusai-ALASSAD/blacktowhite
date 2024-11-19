<?php
function black_to_white_customize_register($wp_customize) {
    // Header Settings
    $wp_customize->add_panel('header_settings', array(
        'title' => __('Header Einstellungen', 'black-to-white'),
        'priority' => 30,
    ));

    // Logo Settings
    $wp_customize->add_section('logo_settings', array(
        'title' => __('Logo Einstellungen', 'black-to-white'),
        'panel' => 'header_settings',
    ));

    // Logo Size
    $wp_customize->add_setting('logo_settings', array(
        'default' => array(
            'width' => '200',
            'height' => '60',
        ),
        'transport' => 'postMessage',
        'sanitize_callback' => 'black_to_white_sanitize_logo_settings',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'logo_width', array(
        'label' => __('Logo Breite (px)', 'black-to-white'),
        'section' => 'logo_settings',
        'settings' => 'logo_settings[width]',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 50,
            'max' => 500,
            'step' => 1,
        ),
    )));

    // Menu Settings
    $wp_customize->add_section('menu_settings', array(
        'title' => __('Menü Einstellungen', 'black-to-white'),
        'panel' => 'header_settings',
    ));

    // Menu Height
    $wp_customize->add_setting('menu_settings[height]', array(
        'default' => '80',
        'transport' => 'postMessage',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('menu_height', array(
        'label' => __('Menü Höhe (px)', 'black-to-white'),
        'section' => 'menu_settings',
        'settings' => 'menu_settings[height]',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 40,
            'max' => 200,
            'step' => 1,
        ),
    ));

    // Menu Position
    $wp_customize->add_setting('menu_settings[position]', array(
        'default' => 'right',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('menu_position', array(
        'label' => __('Menü Position', 'black-to-white'),
        'section' => 'menu_settings',
        'settings' => 'menu_settings[position]',
        'type' => 'select',
        'choices' => array(
            'left' => __('Links', 'black-to-white'),
            'center' => __('Zentriert', 'black-to-white'),
            'right' => __('Rechts', 'black-to-white'),
        ),
    ));

    // Menu Font Size
    $wp_customize->add_setting('menu_settings[font_size]', array(
        'default' => '16',
        'transport' => 'postMessage',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('menu_font_size', array(
        'label' => __('Menü Schriftgröße (px)', 'black-to-white'),
        'section' => 'menu_settings',
        'settings' => 'menu_settings[font_size]',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 12,
            'max' => 24,
            'step' => 1,
        ),
    ));

    // Menu Colors
    $wp_customize->add_setting('menu_settings[text_color]', array(
        'default' => '#ffffff',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menu_text_color', array(
        'label' => __('Menü Textfarbe', 'black-to-white'),
        'section' => 'menu_settings',
        'settings' => 'menu_settings[text_color]',
    )));

    // Menu Hover Effect
    $wp_customize->add_setting('menu_settings[hover_effect]', array(
        'default' => 'underline',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('menu_hover_effect', array(
        'label' => __('Menü Hover-Effekt', 'black-to-white'),
        'section' => 'menu_settings',
        'settings' => 'menu_settings[hover_effect]',
        'type' => 'select',
        'choices' => array(
            'none' => __('Kein Effekt', 'black-to-white'),
            'underline' => __('Unterstrich', 'black-to-white'),
            'background' => __('Hintergrund', 'black-to-white'),
            'fade' => __('Verblassen', 'black-to-white'),
        ),
    ));

    // Footer Settings
    $wp_customize->add_panel('footer_settings', array(
        'title' => __('Footer Einstellungen', 'black-to-white'),
        'priority' => 100,
    ));

    // Footer Layout
    $wp_customize->add_section('footer_layout', array(
        'title' => __('Footer Layout', 'black-to-white'),
        'panel' => 'footer_settings',
    ));

    $wp_customize->add_setting('footer_columns', array(
        'default' => '4',
        'transport' => 'refresh',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('footer_columns', array(
        'label' => __('Footer Spalten', 'black-to-white'),
        'section' => 'footer_layout',
        'type' => 'select',
        'choices' => array(
            '1' => __('1 Spalte', 'black-to-white'),
            '2' => __('2 Spalten', 'black-to-white'),
            '3' => __('3 Spalten', 'black-to-white'),
            '4' => __('4 Spalten', 'black-to-white'),
        ),
    ));
}
add_action('customize_register', 'black_to_white_customize_register');

// Sanitize functions
function black_to_white_sanitize_logo_settings($input) {
    $input['width'] = absint($input['width']);
    $input['height'] = absint($input['height']);
    return $input;
}