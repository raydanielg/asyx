<!-- Industries We Serve -->
<section id="industries" class="industries py-20 lg:py-28 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Our Reach</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-3">{{ __('landing.industries_title') }}</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto">{{ __('landing.industries_subtitle') }}</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @php
            $industries = [
                ['icon' => 'fa-landmark', 'title' => 'industry_gov'],
                ['icon' => 'fa-university', 'title' => 'industry_banking'],
                ['icon' => 'fa-hospital', 'title' => 'industry_health'],
                ['icon' => 'fa-graduation-cap', 'title' => 'industry_edu'],
                ['icon' => 'fa-truck', 'title' => 'industry_transport'],
                ['icon' => 'fa-bolt', 'title' => 'industry_energy'],
                ['icon' => 'fa-tower-broadcast', 'title' => 'industry_telecom'],
                ['icon' => 'fa-hands-holding-circle', 'title' => 'industry_ngo'],
            ];
            @endphp

            @foreach($industries as $i => $ind)
            <div class="bg-white rounded-xl p-6 text-center shadow-sm border border-slate-100 hover:shadow-lg hover:border-amber-200 transition-all" data-aos="fade-up" data-aos-delay="{{ $i * 50 }}">
                <div class="w-12 h-12 bg-slate-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <i class="fas {{ $ind['icon'] }} text-amber-600 text-xl"></i>
                </div>
                <h3 class="font-semibold text-slate-800">{{ __("landing.{$ind['title']}") }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</section>
