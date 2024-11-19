<?php get_header(); ?>

<div class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-black mb-12">Unsere Dienstleistungen</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while (have_posts()) : the_post(); ?>
                <article class="bg-black text-white rounded-xl overflow-hidden shadow-lg transition-transform hover:-translate-y-1">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="relative h-48">
                            <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover']); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-4"><?php the_title(); ?></h2>
                        <div class="text-gray-300 mb-4"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="inline-block bg-white text-black px-6 py-2 rounded-md hover:bg-gray-100 transition-colors">
                            Mehr erfahren
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
        
        <?php the_posts_pagination([
            'prev_text' => '&larr; Zurück',
            'next_text' => 'Weiter &rarr;',
            'class' => 'mt-12'
        ]); ?>
    </div>
</div>

<?php get_footer(); ?>