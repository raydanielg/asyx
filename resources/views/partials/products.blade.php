<!-- Products Showcase -->
<section class="products py-20 lg:py-28 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Technology</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-3">{{ __('landing.products_title') }}</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto">{{ __('landing.products_subtitle') }}</p>
        </div>

        <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-6">
            @php
            $products = [
                ['icon' => 'fa-shield-halved', 'title' => 'product_security'],
                ['icon' => 'fa-network-wired', 'title' => 'product_network'],
                ['icon' => 'fa-hard-drive', 'title' => 'product_servers'],
                ['icon' => 'fa-laptop-code', 'title' => 'product_software'],
                ['icon' => 'fa-cloud', 'title' => 'product_cloud'],
            ];
            @endphp

            @foreach($products as $i => $prod)
            <div class="text-center" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:border-amber-300 hover:shadow-lg transition-all">
                    <i class="fas {{ $prod['icon'] }} text-amber-600 text-4xl mb-4"></i>
                    <h3 class="font-bold text-slate-900">{{ __("landing.{$prod['title']}") }}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
