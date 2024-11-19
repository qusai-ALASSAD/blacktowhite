<?php
class Black_To_White_Service_Box extends \Elementor\Widget_Base {
    public function get_name() {
        return 'black_to_white_service_box';
    }

    public function get_title() {
        return __('Service Box', 'black-to-white');
    }

    public function get_icon() {
        return 'eicon-info-box';
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
            'title',
            [
                'label' => __('Titel', 'black-to-white'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Service Titel', 'black-to-white'),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __('Beschreibung', 'black-to-white'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Service Beschreibung', 'black-to-white'),
            ]
        );

        $this->add_control(
            'icon',
            [
                'label' => __('Icon', 'black-to-white'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
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
            'box_color',
            [
                'label' => __('Box Farbe', 'black-to-white'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '#000000',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="service-box" style="background-color: <?php echo esc_attr($settings['box_color']); ?>">
            <div class="service-box-icon">
                <?php \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']); ?>
            </div>
            <h3 class="service-box-title"><?php echo esc_html($settings['title']); ?></h3>
            <div class="service-box-description"><?php echo wp_kses_post($settings['description']); ?></div>
        </div>
        <?php
    }
}