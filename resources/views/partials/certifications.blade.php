<!-- Certifications & Compliance -->
<section class="certifications py-20 lg:py-28 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Standards</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-3">{{ __('landing.certifications_title') }}</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto">{{ __('landing.certifications_subtitle') }}</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
            $certs = [
                ['icon' => 'fa-certificate', 'title' => 'cert_iso'],
                ['icon' => 'fa-award', 'title' => 'cert_vendor'],
                ['icon' => 'fa-shield-halved', 'title' => 'cert_security'],
                ['icon' => 'fa-clipboard-check', 'title' => 'cert_compliance'],
            ];
            @endphp

            @foreach($certs as $i => $c)
            <div class="bg-white rounded-xl p-6 text-center shadow-sm border border-slate-100 hover:shadow-lg hover:border-amber-300 transition-all" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas {{ $c['icon'] }} text-amber-600 text-xl"></i>
                </div>
                <h3 class="font-bold text-slate-900">{{ __("landing.{$c['title']}") }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</section>
