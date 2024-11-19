<?php get_header(); ?>

<main class="site-main">
    <?php if (is_front_page()): ?>
        <?php get_template_part('template-parts/hero'); ?>
        <?php get_template_part('template-parts/services'); ?>
        <?php get_template_part('template-parts/before-after'); ?>
        <?php get_template_part('template-parts/about'); ?>
        <?php get_template_part('template-parts/contact'); ?>
    <?php else: ?>
        <div class="container mx-auto px-4 py-8">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <?php get_template_part('template-parts/content', get_post_type()); ?>
            <?php endwhile; endif; ?>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>