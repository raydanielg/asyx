<!-- Process Section: How We Work -->
<section class="process py-20 lg:py-28 bg-slate-50 relative overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Methodology</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mt-3">How We Work</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto text-lg">A proven six-step process ensuring every project is delivered on time, on budget, and beyond expectations.</p>
        </div>

        @php
        $steps = [
            ['num' => '01', 'title' => 'Consultation', 'desc' => 'We listen to understand your goals, challenges, and vision for the project.'],
            ['num' => '02', 'title' => 'Assessment', 'desc' => 'We audit your current systems and identify key improvement areas.'],
            ['num' => '03', 'title' => 'Design', 'desc' => 'We architect a tailored solution blueprint aligned with your needs.'],
            ['num' => '04', 'title' => 'Implementation', 'desc' => 'We deploy and integrate systems with minimal business disruption.'],
            ['num' => '05', 'title' => 'Testing', 'desc' => 'We rigorously test to ensure quality, security, and reliability.'],
            ['num' => '06', 'title' => 'Support', 'desc' => 'We provide ongoing maintenance, training, and 24/7 expert support.'],
        ];
        @endphp

        <!-- Desktop: Clean horizontal steps -->
        <div class="hidden lg:flex items-start justify-between gap-4 relative">
            <!-- Horizontal connecting line -->
            <div class="absolute top-[30px] left-[60px] right-[60px] h-0.5 bg-slate-200"></div>

            @foreach($steps as $i => $step)
            <div class="relative flex-1 text-center group" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <!-- Step Number Badge -->
                <div class="relative z-10 inline-flex items-center justify-center w-[60px] h-[60px] rounded-full bg-white border-2 border-slate-200 group-hover:border-amber-500 group-hover:bg-amber-50 transition-all duration-300 mx-auto mb-6 shadow-sm">
                    <span class="text-xl font-extrabold text-slate-400 group-hover:text-amber-600 transition-colors">{{ $step['num'] }}</span>
                </div>

                <!-- Arrow between steps -->
                @if($i < 5)
                <div class="absolute top-[24px] left-[calc(50%+30px)] right-0 flex items-center justify-center">
                    <i class="fas fa-chevron-right text-slate-300 text-xs"></i>
                </div>
                @endif

                <h3 class="font-bold text-slate-900 text-lg mb-2 group-hover:text-amber-700 transition-colors">{{ $step['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed px-1">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>

        <!-- Tablet: 3 columns -->
        <div class="hidden md:grid lg:hidden grid-cols-3 gap-6">
            @foreach($steps as $i => $step)
            <div class="group bg-white rounded-2xl p-6 border border-slate-100 hover:border-amber-300 hover:shadow-lg transition-all duration-300 text-center relative overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $i * 75 }}">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-400 to-amber-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-500 transition-colors">
                    <span class="text-lg font-extrabold text-amber-600 group-hover:text-white transition-colors">{{ $step['num'] }}</span>
                </div>
                <h3 class="font-bold text-slate-900 text-lg mb-2 group-hover:text-amber-700 transition-colors">{{ $step['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>

        <!-- Mobile: 2 columns -->
        <div class="md:hidden grid grid-cols-2 gap-4">
            @foreach($steps as $i => $step)
            <div class="group bg-white rounded-xl p-4 border border-slate-100 hover:border-amber-300 hover:shadow-lg transition-all duration-300 text-center relative overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $i * 75 }}">
                <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-amber-400 to-amber-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                <div class="w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:bg-amber-500 transition-colors">
                    <span class="text-sm font-extrabold text-amber-600 group-hover:text-white transition-colors">{{ $step['num'] }}</span>
                </div>
                <h3 class="font-bold text-slate-900 text-sm mb-1 group-hover:text-amber-700 transition-colors">{{ $step['title'] }}</h3>
                <p class="text-slate-500 text-xs leading-relaxed">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
