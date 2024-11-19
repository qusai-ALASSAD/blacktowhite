<?php get_header(); ?>

<div class="min-h-screen bg-black text-white flex items-center justify-center">
    <div class="max-w-2xl mx-auto px-4 text-center">
        <h1 class="text-6xl font-bold mb-4">404</h1>
        <h2 class="text-2xl mb-8">Seite nicht gefunden</h2>
        <p class="text-gray-300 mb-8">
            Die gesuchte Seite existiert leider nicht. Vielleicht wurde sie verschoben oder gelöscht.
        </p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block bg-white text-black px-8 py-3 rounded-md hover:bg-gray-100 transition-colors">
            Zur Startseite
        </a>
    </div>
</div>

<?php get_footer(); ?>