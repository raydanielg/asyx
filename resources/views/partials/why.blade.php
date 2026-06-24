<!-- Why Choose ASYX -->
<section class="why py-20 lg:py-28 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Advantages</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-3">{{ __('landing.why_title') }}</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto">{{ __('landing.why_subtitle') }}</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $whys = [
                ['icon' => 'fa-award', 'title' => 'why_exp'],
                ['icon' => 'fa-certificate', 'title' => 'why_certified'],
                ['icon' => 'fa-headset', 'title' => 'why_support'],
                ['icon' => 'fa-lock', 'title' => 'why_security'],
                ['icon' => 'fa-map-marker-alt', 'title' => 'why_local'],
                ['icon' => 'fa-globe', 'title' => 'why_global'],
            ];
            @endphp

            @foreach($whys as $i => $w)
            <div class="flex items-start space-x-4 bg-white rounded-xl p-6 shadow-sm border border-slate-100 hover:shadow-lg transition-all" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <div class="w-12 h-12 bg-amber-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <i class="fas {{ $w['icon'] }} text-amber-600 text-lg"></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-900 text-lg">{{ __("landing.{$w['title']}") }}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
