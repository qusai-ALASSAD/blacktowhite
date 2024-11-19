<section id="services" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12"><?php _e('خدماتنا', 'black-to-white'); ?></h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $services = new WP_Query(array(
                'post_type' => 'service',
                'posts_per_page' => 6
            ));

            while ($services->have_posts()) : $services->the_post();
            ?>
                <div class="bg-black text-white rounded-xl overflow-hidden transition-transform hover:-translate-y-1">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="relative h-48">
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4"><?php the_title(); ?></h3>
                        <div class="text-gray-300 mb-4"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="inline-block bg-white text-black px-6 py-2 rounded-md hover:bg-gray-100 transition-colors">
                            <?php _e('المزيد', 'black-to-white'); ?>
                        </a>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>