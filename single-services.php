<?php get_header(); ?>

<div class="service-detail">
    <?php while (have_posts()) : the_post(); ?>
        <div class="service-hero">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', array('class' => 'service-image')); ?>
            <?php endif; ?>
            
            <h1 class="service-title"><?php the_title(); ?></h1>
        </div>
        
        <div class="service-content">
            <?php the_content(); ?>
            
            <?php
            $features = get_post_meta(get_the_ID(), '_service_features', true);
            $benefits = get_post_meta(get_the_ID(), '_service_benefits', true);
            
            if ($features || $benefits) :
            ?>
                <div class="service-meta-info">
                    <?php if ($features) : ?>
                        <div class="features">
                            <h3>Features</h3>
                            <?php echo wp_kses_post(wpautop($features)); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($benefits) : ?>
                        <div class="benefits">
                            <h3>Benefits</h3>
                            <?php echo wp_kses_post(wpautop($benefits)); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>