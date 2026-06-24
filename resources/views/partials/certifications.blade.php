<!-- Certifications & Compliance -->
<section class="certifications py-20 lg:py-28 bg-white relative overflow-hidden">
    <!-- Decorative background -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-amber-50 rounded-full -translate-y-1/2 translate-x-1/4 blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-slate-50 rounded-full translate-y-1/3 -translate-x-1/4 blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Standards</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mt-3">Certifications & Compliance</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto text-lg">Meeting international standards and industry best practices in every solution we deliver.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @php
            $certs = [
                ['num' => '01', 'title' => 'ISO 27001 Certified', 'desc' => 'Information security management systems certified for enterprise-grade data protection.'],
                ['num' => '02', 'title' => 'Authorized Vendor', 'desc' => 'Authorized partner of Dell, HP, Sophos, Kaspersky, and other global technology leaders.'],
                ['num' => '03', 'title' => 'Security Audited', 'desc' => 'Regular third-party security audits ensuring compliance with international cybersecurity frameworks.'],
                ['num' => '04', 'title' => 'Regulatory Compliant', 'desc' => 'Fully compliant with TCRA, TRA, and regional data protection regulations across East Africa.'],
            ];
            @endphp

            @foreach($certs as $i => $c)
            <div class="group bg-white rounded-2xl p-6 lg:p-8 border border-slate-100 hover:border-amber-300 hover:shadow-xl transition-all duration-300 text-center relative overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <!-- Top accent line -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-400 to-amber-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>

                <!-- Number badge -->
                <div class="w-12 h-12 bg-amber-50 rounded-full flex items-center justify-center mx-auto mb-5 group-hover:bg-amber-100 transition-colors">
                    <span class="text-lg font-extrabold text-amber-600">{{ $c['num'] }}</span>
                </div>

                <h3 class="font-bold text-slate-900 text-lg mb-3 group-hover:text-amber-700 transition-colors">{{ $c['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $c['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
