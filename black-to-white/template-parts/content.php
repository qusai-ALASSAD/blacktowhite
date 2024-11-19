<?php
/**
 * Template part for displaying posts
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-12'); ?>>
    <?php if (has_post_thumbnail()): ?>
        <div class="mb-6">
            <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-lg']); ?>
        </div>
    <?php endif; ?>

    <header class="entry-header mb-6">
        <?php if (is_singular()): ?>
            <h1 class="entry-title text-4xl font-bold">
                <?php the_title(); ?>
            </h1>
        <?php else: ?>
            <h2 class="entry-title text-3xl font-bold">
                <a href="<?php the_permalink(); ?>" rel="bookmark">
                    <?php the_title(); ?>
                </a>
            </h2>
        <?php endif; ?>

        <?php if ('post' === get_post_type()): ?>
            <div class="entry-meta text-gray-600 mt-2">
                <?php
                printf(
                    __('نشر في %s', 'black-to-white'),
                    '<time class="entry-date" datetime="' . esc_attr(get_the_date('c')) . '">' . esc_html(get_the_date()) . '</time>'
                );
                ?>
            </div>
        <?php endif; ?>
    </header>

    <div class="entry-content prose max-w-none">
        <?php
        if (is_singular()) {
            the_content();
        } else {
            the_excerpt();
            echo '<a href="' . esc_url(get_permalink()) . '" class="inline-block mt-4 bg-black text-white px-6 py-2 rounded-md hover:bg-gray-800 transition-colors">' . 
                  __('اقرأ المزيد', 'black-to-white') . '</a>';
        }
        ?>
    </div>
</article>