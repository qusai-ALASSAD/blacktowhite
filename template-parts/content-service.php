<?php
$features = get_post_meta(get_the_ID(), '_service_features', true);
$benefits = get_post_meta(get_the_ID(), '_service_benefits', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('service-single bg-white'); ?>>
    <div class="relative h-96">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']); ?>
        <?php endif; ?>
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-4xl font-bold text-white text-center px-4"><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="prose prose-lg mx-auto">
            <?php the_content(); ?>
        </div>

        <?php if ($features || $benefits) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
                <?php if ($features) : ?>
                    <div class="bg-gray-900 rounded-xl p-8">
                        <h2 class="text-2xl font-semibold text-white mb-6">Unsere Leistungen</h2>
                        <ul class="space-y-3">
                            <?php foreach (explode("\n", $features) as $feature) : ?>
                                <li class="flex items-center text-gray-300">
                                    <svg class="h-5 w-5 text-white mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <?php echo esc_html(trim($feature)); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if ($benefits) : ?>
                    <div class="bg-gray-900 rounded-xl p-8">
                        <h2 class="text-2xl font-semibold text-white mb-6">Ihre Vorteile</h2>
                        <ul class="space-y-3">
                            <?php foreach (explode("\n", $benefits) as $benefit) : ?>
                                <li class="flex items-center text-gray-300">
                                    <svg class="h-5 w-5 text-white mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <?php echo esc_html(trim($benefit)); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</article>