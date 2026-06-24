<!-- Sector Experience Section -->
<section class="sectors py-20 lg:py-28 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Expertise</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-3">{{ __('landing.sector_title') }}</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto">{{ __('landing.sector_subtitle') }}</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-6">
            @php
            $sectors = [
                ['icon' => 'fa-bolt', 'title' => 'sector_energy'],
                ['icon' => 'fa-plane', 'title' => 'sector_aviation'],
                ['icon' => 'fa-landmark', 'title' => 'sector_government'],
                ['icon' => 'fa-university', 'title' => 'sector_finance'],
                ['icon' => 'fa-graduation-cap', 'title' => 'sector_education'],
            ];
            @endphp

            @foreach($sectors as $i => $sec)
            <div class="bg-white rounded-xl p-6 text-center shadow-sm border border-slate-100 hover:shadow-lg hover:border-amber-300 transition-all" data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}">
                <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas {{ $sec['icon'] }} text-amber-600 text-xl"></i>
                </div>
                <h3 class="font-bold text-slate-900">{{ __("landing.{$sec['title']}") }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</section>
