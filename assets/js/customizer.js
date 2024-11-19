(function($) {
    'use strict';

    // Live preview for menu settings
    wp.customize('menu_settings[height]', function(value) {
        value.bind(function(newval) {
            $('.site-header').css('height', newval + 'px');
        });
    });

    wp.customize('menu_settings[position]', function(value) {
        value.bind(function(newval) {
            $('.main-navigation').css('justify-content', 
                newval === 'left' ? 'flex-start' : 
                newval === 'right' ? 'flex-end' : 'center'
            );
        });
    });

    wp.customize('menu_settings[font_size]', function(value) {
        value.bind(function(newval) {
            $('.main-navigation a').css('font-size', newval + 'px');
        });
    });

    wp.customize('menu_settings[text_color]', function(value) {
        value.bind(function(newval) {
            $('.main-navigation a').css('color', newval);
        });
    });

    // Logo settings
    wp.customize('logo_settings[width]', function(value) {
        value.bind(function(newval) {
            $('.custom-logo').css('width', newval + 'px');
        });
    });

    // Footer columns
    wp.customize('footer_columns', function(value) {
        value.bind(function(newval) {
            $('.footer-widgets').css('grid-template-columns', `repeat(${newval}, 1fr)`);
        });
    });
})(jQuery);