<?php
$contact_info = [
    'phone' => '+49 (0) 123 456789',
    'email' => 'info@blacktowhite.de',
    'address' => 'Musterstraße 123, 60313 Frankfurt am Main'
];
?>

<section id="contact" class="py-20 bg-black text-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-12">Kontaktieren Sie uns</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Unsere Kontaktdaten</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span><?php echo esc_html($contact_info['phone']); ?></span>
                        </div>

                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span><?php echo esc_html($contact_info['email']); ?></span>
                        </div>

                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span><?php echo esc_html($contact_info['address']); ?></span>
                        </div>
                    </div>
                </div>

                <div>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium">Name</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md bg-gray-900 border-gray-700 text-white focus:border-white focus:ring-white" required>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium">E-Mail</label>
                            <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md bg-gray-900 border-gray-700 text-white focus:border-white focus:ring-white" required>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium">Ihre Nachricht</label>
                            <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md bg-gray-900 border-gray-700 text-white focus:border-white focus:ring-white" required></textarea>
                        </div>

                        <button type="submit" class="w-full bg-white text-black px-6 py-3 rounded-md hover:bg-gray-100 transition-colors">
                            Nachricht senden
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>