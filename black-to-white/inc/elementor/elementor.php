<?php
if (!defined('ABSPATH')) exit;

class Black_To_White_Elementor {
    public function __construct() {
        add_action('elementor/elements/categories_registered', array($this, 'add_elementor_widget_categories'));
        add_action('elementor/preview/enqueue_styles', array($this, 'preview_styles'));
    }

    public function add_elementor_widget_categories($elements_manager) {
        $elements_manager->add_category(
            'black-to-white',
            [
                'title' => __('Black to White', 'black-to-white'),
                'icon' => 'fa fa-plug',
            ]
        );
    }

    public function preview_styles() {
        wp_enqueue_style(
            'black-to-white-elementor-preview',
            get_template_directory_uri() . '/assets/css/elementor-preview.css',
            array(),
            '1.0.0'
        );
    }
}

new Black_To_White_Elementor();