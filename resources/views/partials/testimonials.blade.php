<!-- Client Testimonials -->
<section class="testimonials py-20 lg:py-28 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Testimonials</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-3">{{ __('landing.testimonials_title') }}</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto">{{ __('landing.testimonials_subtitle') }}</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @php
            $testimonials = [
                ['name' => 'John Mwakalinga', 'role' => 'CTO, National Bank', 'text' => 'ASYX Group transformed our cybersecurity posture. Their expertise and dedication are unmatched.'],
                ['name' => 'Dr. Sarah Kimaro', 'role' => 'Director, Ministry of ICT', 'text' => 'The smart city solutions implemented by ASYX have revolutionized urban management in our region.'],
                ['name' => 'Michael Omondi', 'role' => 'CEO, Energy Corp', 'text' => 'From consultation to implementation, ASYX delivered beyond expectations. A true technology partner.'],
            ];
            @endphp

            @foreach($testimonials as $i => $t)
            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 relative" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <i class="fas fa-quote-left text-amber-200 text-4xl absolute top-6 left-6"></i>
                <p class="text-slate-600 leading-relaxed mb-6 relative z-10 pt-8">"{{ $t['text'] }}"</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-amber-600 rounded-full flex items-center justify-center text-white font-bold">
                        {{ substr($t['name'], 0, 1) }}
                    </div>
                    <div class="ml-4">
                        <div class="font-bold text-slate-900">{{ $t['name'] }}</div>
                        <div class="text-sm text-slate-500">{{ $t['role'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
