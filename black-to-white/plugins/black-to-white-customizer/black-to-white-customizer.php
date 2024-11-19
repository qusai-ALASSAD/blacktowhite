<?php
/**
 * Plugin Name: Black to White Customizer
 * Plugin URI: https://blacktowhite-frankfurt.de
 * Description: Erweitertes Anpassungstool für das Black to White Theme
 * Version: 1.0
 * Author: Black to White Team
 * Author URI: https://blacktowhite-frankfurt.de
 * Text Domain: black-to-white-customizer
 */

if (!defined('ABSPATH')) exit;

class BlackToWhiteCustomizer {
    public function __construct() {
        add_action('customize_register', array($this, 'register_customizer_options'));
        add_action('admin_menu', array($this, 'add_theme_pages'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_scripts'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_frontend_scripts'));
    }

    public function register_customizer_options($wp_customize) {
        // Header Einstellungen
        $wp_customize->add_section('btw_header_settings', array(
            'title' => __('Header Einstellungen', 'black-to-white-customizer'),
            'priority' => 30,
        ));

        // Logo Animation
        $wp_customize->add_setting('btw_logo_animation', array(
            'default' => true,
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('btw_logo_animation', array(
            'label' => __('Logo Animation aktivieren', 'black-to-white-customizer'),
            'section' => 'btw_header_settings',
            'type' => 'checkbox',
        ));

        // Hero Sektion
        $wp_customize->add_section('btw_hero_settings', array(
            'title' => __('Hero Einstellungen', 'black-to-white-customizer'),
            'priority' => 35,
        ));

        $wp_customize->add_setting('btw_hero_title', array(
            'default' => 'Professionelle Reinigungsservice in Frankfurt',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('btw_hero_title', array(
            'label' => __('Hero Titel', 'black-to-white-customizer'),
            'section' => 'btw_hero_settings',
            'type' => 'text',
        ));

        $wp_customize->add_setting('btw_hero_subtitle', array(
            'default' => 'Ihr zuverlässiger Partner für erstklassige Reinigungsdienstleistungen',
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control('btw_hero_subtitle', array(
            'label' => __('Hero Untertitel', 'black-to-white-customizer'),
            'section' => 'btw_hero_settings',
            'type' => 'text',
        ));

        // Dienstleistungen
        $wp_customize->add_section('btw_services_settings', array(
            'title' => __('Dienstleistungen Einstellungen', 'black-to-white-customizer'),
            'priority' => 40,
        ));

        $services = array(
            'office' => 'Büroreinigung',
            'home' => 'Privatreinigung',
            'industrial' => 'Industriereinigung',
            'special' => 'Spezialreinigung'
        );

        foreach ($services as $key => $label) {
            $wp_customize->add_setting("btw_service_{$key}_title", array(
                'default' => $label,
                'sanitize_callback' => 'sanitize_text_field',
            ));

            $wp_customize->add_control("btw_service_{$key}_title", array(
                'label' => sprintf(__('%s Titel', 'black-to-white-customizer'), $label),
                'section' => 'btw_services_settings',
                'type' => 'text',
            ));

            $wp_customize->add_setting("btw_service_{$key}_description", array(
                'default' => '',
                'sanitize_callback' => 'sanitize_textarea_field',
            ));

            $wp_customize->add_control("btw_service_{$key}_description", array(
                'label' => sprintf(__('%s Beschreibung', 'black-to-white-customizer'), $label),
                'section' => 'btw_services_settings',
                'type' => 'textarea',
            ));
        }
    }

    public function add_theme_pages() {
        add_theme_page(
            __('Theme Einstellungen', 'black-to-white-customizer'),
            __('Black to White', 'black-to-white-customizer'),
            'manage_options',
            'black-to-white-settings',
            array($this, 'render_settings_page')
        );
    }

    public function render_settings_page() {
        ?>
        <div class="wrap">
            <h1><?php _e('Black to White Theme Einstellungen', 'black-to-white-customizer'); ?></h1>
            <div class="notice notice-info">
                <p><?php _e('Verwenden Sie den WordPress Customizer für detaillierte Anpassungen.', 'black-to-white-customizer'); ?></p>
                <p><a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php _e('Zum Customizer', 'black-to-white-customizer'); ?></a></p>
            </div>
            
            <div class="card">
                <h2><?php _e('Schnelleinstellungen', 'black-to-white-customizer'); ?></h2>
                <form method="post" action="options.php">
                    <?php
                    settings_fields('btw_theme_options');
                    do_settings_sections('btw_theme_options');
                    submit_button();
                    ?>
                </form>
            </div>
        </div>
        <?php
    }

    public function enqueue_admin_scripts($hook) {
        if ('appearance_page_black-to-white-settings' !== $hook) {
            return;
        }

        wp_enqueue_style('btw-admin-styles', plugins_url('assets/css/admin.css', __FILE__));
        wp_enqueue_script('btw-admin-script', plugins_url('assets/js/admin.js', __FILE__), array('jquery'), '1.0', true);
    }

    public function enqueue_frontend_scripts() {
        if (get_theme_mod('btw_logo_animation', true)) {
            wp_enqueue_script('btw-animations', plugins_url('assets/js/animations.js', __FILE__), array(), '1.0', true);
        }
    }
}

new BlackToWhiteCustomizer();