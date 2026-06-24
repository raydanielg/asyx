<!-- Technology Partners -->
<section class="tech-partners py-20 lg:py-28 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Partnerships</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-3">{{ __('landing.tech_partners_title') }}</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto">{{ __('landing.tech_partners_subtitle') }}</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8">
            @php
            $partners = ['Dell', 'HP', 'Sophos', 'Kaspersky', 'Acunetix', 'Zimbra'];
            @endphp

            @foreach($partners as $i => $p)
            <div class="bg-white rounded-xl p-6 text-center shadow-sm border border-slate-100 hover:shadow-lg hover:border-amber-200 transition-all flex items-center justify-center h-24" data-aos="fade-up" data-aos-delay="{{ $i * 80 }}">
                <span class="text-xl font-bold text-slate-400 hover:text-slate-700 transition">{{ $p }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
