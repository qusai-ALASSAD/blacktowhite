<?php
$hero_title = get_theme_mod('hero_title', 'خدمات تنظيف احترافية');
$hero_subtitle = get_theme_mod('hero_subtitle', 'Black to White');
$hero_description = get_theme_mod('hero_description', 'نقدم خدمات تنظيف احترافية للمنازل والمكاتب والشركات');
?>

<section class="hero bg-black text-white min-h-screen flex items-center relative">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl">
            <h1 class="text-6xl font-bold mb-6">
                <span class="block"><?php echo esc_html($hero_title); ?></span>
                <span class="block text-gray-400"><?php echo esc_html($hero_subtitle); ?></span>
            </h1>
            <p class="text-xl text-gray-300 mb-10">
                <?php echo esc_html($hero_description); ?>
            </p>
            <div class="flex space-x-4">
                <a href="#contact" class="bg-white text-black px-8 py-4 rounded-md hover:bg-gray-100 transition-colors">
                    <?php _e('اطلب عرض سعر', 'black-to-white'); ?>
                </a>
                <a href="#services" class="border border-white text-white px-8 py-4 rounded-md hover:bg-white hover:text-black transition-colors">
                    <?php _e('خدماتنا', 'black-to-white'); ?>
                </a>
            </div>
        </div>
    </div>
</section>