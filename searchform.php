<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="relative">
        <input type="search" 
               class="w-full px-4 py-2 rounded-md bg-gray-900 text-white border border-gray-700 focus:border-white focus:ring-white" 
               placeholder="Suchen..." 
               value="<?php echo get_search_query(); ?>" 
               name="s" />
        <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
    </div>
</form>