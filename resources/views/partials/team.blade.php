<!-- Team Section -->
<section class="team py-20 lg:py-28 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">People</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-3">{{ __('landing.team_title') }}</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto">{{ __('landing.team_subtitle') }}</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @php
            $team = [
                ['name' => 'Alex Mwakalinga', 'role' => 'CEO & Founder', 'dept' => 'team_leadership'],
                ['name' => 'Grace Kimaro', 'role' => 'CTO', 'dept' => 'team_leadership'],
                ['name' => 'Peter Omondi', 'role' => 'Head of Security', 'dept' => 'team_technical'],
            ];
            @endphp

            @foreach($team as $i => $m)
            <div class="text-center" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="bg-slate-100 rounded-2xl p-8 mb-4">
                    <div class="w-24 h-24 bg-amber-600 rounded-full flex items-center justify-center mx-auto text-white text-3xl font-bold">
                        {{ substr($m['name'], 0, 1) }}
                    </div>
                </div>
                <h3 class="font-bold text-slate-900 text-lg">{{ $m['name'] }}</h3>
                <p class="text-amber-600 text-sm font-medium">{{ $m['role'] }}</p>
                <p class="text-slate-400 text-xs mt-1">{{ __("landing.{$m['dept']}") }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
