<?php
class Black_To_White_Before_After extends \Elementor\Widget_Base {
    public function get_name() {
        return 'black_to_white_before_after';
    }

    public function get_title() {
        return __('Vorher/Nachher', 'black-to-white');
    }

    public function get_icon() {
        return 'eicon-image-before-after';
    }

    public function get_categories() {
        return ['black-to-white'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Inhalt', 'black-to-white'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'before_image',
            [
                'label' => __('Vorher Bild', 'black-to-white'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'after_image',
            [
                'label' => __('Nachher Bild', 'black-to-white'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Titel', 'black-to-white'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Vorher/Nachher Vergleich', 'black-to-white'),
            ]
        );

        $this->end_controls_section();

        // Style Tab
        $this->start_controls_section(
            'style_section',
            [
                'label' => __('Style', 'black-to-white'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'overlay_color',
            [
                'label' => __('Overlay Farbe', 'black-to-white'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => 'rgba(0,0,0,0.5)',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="before-after-container">
            <h3 class="before-after-title"><?php echo esc_html($settings['title']); ?></h3>
            <div class="before-after-wrapper">
                <div class="before-image">
                    <?php echo wp_get_attachment_image($settings['before_image']['id'], 'full'); ?>
                    <div class="overlay" style="background-color: <?php echo esc_attr($settings['overlay_color']); ?>">
                        <span><?php _e('Vorher', 'black-to-white'); ?></span>
                    </div>
                </div>
                <div class="after-image">
                    <?php echo wp_get_attachment_image($settings['after_image']['id'], 'full'); ?>
                    <div class="overlay" style="background-color: <?php echo esc_attr($settings['overlay_color']); ?>">
                        <span><?php _e('Nachher', 'black-to-white'); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}