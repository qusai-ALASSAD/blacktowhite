<?php
$services = [
    [
        'title' => 'Haushaltsreinigung',
        'description' => 'Professionelle und gründliche Reinigung aller Wohnräume für ein sauberes Zuhause.',
        'icon' => 'home'
    ],
    [
        'title' => 'Büroreinigung',
        'description' => 'Zuverlässige Reinigung von Büroflächen für eine hygienische Arbeitsumgebung.',
        'icon' => 'building'
    ],
    [
        'title' => 'Teppichreinigung',
        'description' => 'Effektive Tiefenreinigung von Teppichen und Polstern.',
        'icon' => 'carpet'
    ],
    [
        'title' => 'Fensterreinigung',
        'description' => 'Professionelle Reinigung von Fenstern und Glasflächen für perfekte Durchsicht.',
        'icon' => 'window'
    ],
    [
        'title' => 'Desinfektion',
        'description' => 'Gründliche Desinfektion und Hygienemaßnahmen für Ihre Sicherheit.',
        'icon' => 'shield'
    ],
    [
        'title' => 'Sonderreinigung',
        'description' => 'Spezielle Reinigungsarbeiten nach individuellen Anforderungen.',
        'icon' => 'star'
    ]
];
?>

<section id="services" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-black mb-4">Unsere Leistungen</h2>
            <p class="text-xl text-gray-600">Professionelle Reinigungslösungen für alle Ihre Bedürfnisse</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($services as $service): ?>
                <div class="bg-black text-white rounded-xl overflow-hidden transition-transform hover:-translate-y-1">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-4"><?php echo esc_html($service['title']); ?></h3>
                        <p class="text-gray-300 mb-4"><?php echo esc_html($service['description']); ?></p>
                        <a href="#contact" class="inline-block bg-white text-black px-6 py-2 rounded-md hover:bg-gray-100 transition-colors">
                            Mehr erfahren
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>