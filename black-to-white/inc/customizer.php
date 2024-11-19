<?php
function black_to_white_customize_register($wp_customize) {
    // Logo Settings
    $wp_customize->add_section('logo_settings', array(
        'title' => __('Logo Einstellungen', 'black-to-white'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('logo_size', array(
        'default' => '200',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('logo_size', array(
        'label' => __('Logo Größe (px)', 'black-to-white'),
        'section' => 'logo_settings',
        'type' => 'number',
    ));

    // Social Media Links
    $wp_customize->add_section('social_media', array(
        'title' => __('Social Media', 'black-to-white'),
        'priority' => 40,
    ));

    $social_platforms = array(
        'facebook' => 'Facebook',
        'instagram' => 'Instagram',
        'twitter' => 'Twitter',
        'linkedin' => 'LinkedIn'
    );

    foreach ($social_platforms as $platform => $label) {
        $wp_customize->add_setting('social_' . $platform, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control('social_' . $platform, array(
            'label' => $label . ' URL',
            'section' => 'social_media',
            'type' => 'url',
        ));
    }

    // Company Information
    $wp_customize->add_section('company_info', array(
        'title' => __('Firmeninformationen', 'black-to-white'),
        'priority' => 50,
    ));

    $wp_customize->add_setting('company_address', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('company_address', array(
        'label' => __('Firmenadresse', 'black-to-white'),
        'section' => 'company_info',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_company_info', array(
        'default' => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('footer_company_info', array(
        'label' => __('Footer Firmeninfo', 'black-to-white'),
        'section' => 'company_info',
        'type' => 'textarea',
    ));

    // Button Styles
    $wp_customize->add_section('button_styles', array(
        'title' => __('Button Styles', 'black-to-white'),
        'priority' => 60,
    ));

    $wp_customize->add_setting('primary_button_bg', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_button_bg', array(
        'label' => __('Primäre Button Hintergrundfarbe', 'black-to-white'),
        'section' => 'button_styles',
    )));

    $wp_customize->add_setting('primary_button_text', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_button_text', array(
        'label' => __('Primäre Button Textfarbe', 'black-to-white'),
        'section' => 'button_styles',
    )));
}
add_action('customize_register', 'black_to_white_customize_register');