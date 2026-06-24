<!-- Featured Solutions Section -->
<section id="solutions" class="solutions py-20 lg:py-28 bg-slate-900 text-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-500 font-semibold text-sm uppercase tracking-wider">Innovation</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">{{ __('landing.solutions_title') }}</h2>
            <p class="text-slate-400 mt-4 max-w-2xl mx-auto">{{ __('landing.solutions_subtitle') }}</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-6">
            @php
            $solutions = [
                ['icon' => 'fa-city', 'title' => 'solution_smart_city'],
                ['icon' => 'fa-bolt', 'title' => 'solution_smart_energy'],
                ['icon' => 'fa-bus', 'title' => 'solution_smart_transport'],
                ['icon' => 'fa-video', 'title' => 'solution_smart_security'],
                ['icon' => 'fa-building', 'title' => 'solution_enterprise'],
            ];
            @endphp

            @foreach($solutions as $i => $sol)
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 text-center hover:bg-white/10 hover:border-amber-500/50 transition-all duration-300" data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}">
                <div class="w-16 h-16 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas {{ $sol['icon'] }} text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold">{{ __("landing.{$sol['title']}") }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</section>
