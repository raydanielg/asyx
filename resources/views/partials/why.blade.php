<!-- Why Choose ASYX -->
<section class="why py-20 lg:py-28 bg-white relative overflow-hidden">
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(226, 232, 240, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(226, 232, 240, 0.3) 1px, transparent 1px); background-size: 80px 80px;"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Advantages</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mt-3">Why Choose ASYX Group</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto text-lg">The trusted partner for organizations seeking reliable, innovative technology solutions in Africa.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @php
            $whys = [
                ['num' => '01', 'title' => '12+ Years Experience', 'desc' => 'Over a decade of delivering successful ICT projects across Africa with deep technical expertise.'],
                ['num' => '02', 'title' => 'Certified Team', 'desc' => 'Our engineers hold certifications from Cisco, Microsoft, AWS, and other leading technology vendors.'],
                ['num' => '03', 'title' => '24/7 Support', 'desc' => 'Round-the-clock technical support and monitoring ensuring your systems operate without interruption.'],
                ['num' => '04', 'title' => 'Security First', 'desc' => 'Enterprise-grade security practices protecting your data and infrastructure from evolving threats.'],
                ['num' => '05', 'title' => 'Local Presence', 'desc' => 'Headquartered in Dar es Salaam with regional offices ensuring fast on-site response times.'],
                ['num' => '06', 'title' => 'Global Partners', 'desc' => 'Authorized partnerships with Dell, HP, Sophos, Kaspersky, and other world-class technology brands.'],
            ];
            @endphp

            @foreach($whys as $i => $w)
            <div class="group bg-slate-50 rounded-2xl p-6 lg:p-8 border border-slate-100 hover:border-amber-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <!-- Top accent line -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-400 to-amber-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>

                <div class="flex items-center justify-between mb-4">
                    <span class="text-4xl font-extrabold text-slate-200 group-hover:text-amber-100 transition-colors">{{ $w['num'] }}</span>
                    <div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center group-hover:bg-amber-600 transition-colors">
                        <i class="fas fa-check text-amber-600 text-sm group-hover:text-white transition-colors"></i>
                    </div>
                </div>

                <h3 class="font-bold text-slate-900 text-xl mb-3 group-hover:text-amber-700 transition-colors">{{ $w['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $w['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
