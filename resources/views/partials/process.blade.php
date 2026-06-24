<!-- Process Section: How We Work -->
<section class="process py-20 lg:py-28 bg-slate-900 text-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-500 font-semibold text-sm uppercase tracking-wider">Methodology</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-3">{{ __('landing.process_title') }}</h2>
            <p class="text-slate-400 mt-4 max-w-2xl mx-auto">{{ __('landing.process_subtitle') }}</p>
        </div>

        <div class="grid md:grid-cols-3 lg:grid-cols-6 gap-6">
            @php
            $steps = [
                ['num' => '01', 'icon' => 'fa-comments', 'title' => 'step_consultation'],
                ['num' => '02', 'icon' => 'fa-magnifying-glass', 'title' => 'step_assessment'],
                ['num' => '03', 'icon' => 'fa-pen-ruler', 'title' => 'step_design'],
                ['num' => '04', 'icon' => 'fa-rocket', 'title' => 'step_implementation'],
                ['num' => '05', 'icon' => 'fa-vial', 'title' => 'step_testing'],
                ['num' => '06', 'icon' => 'fa-life-ring', 'title' => 'step_support'],
            ];
            @endphp

            @foreach($steps as $i => $step)
            <div class="text-center" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all relative">
                    <div class="text-amber-500 text-sm font-bold mb-3">{{ $step['num'] }}</div>
                    <div class="w-12 h-12 bg-amber-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas {{ $step['icon'] }} text-white"></i>
                    </div>
                    <h3 class="font-bold">{{ __("landing.{$step['title']}") }}</h3>
                </div>
                @if($i < 5)
                <div class="hidden lg:block absolute top-1/2 -right-3 w-6 h-0.5 bg-amber-600/50 transform -translate-y-1/2"></div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>
