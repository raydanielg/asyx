<!-- Products Showcase -->
<section class="products py-20 lg:py-28 bg-slate-50 relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-amber-50 rounded-full translate-y-1/2 translate-x-1/4 blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Technology</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mt-3">Our Product Portfolio</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto text-lg">Enterprise-grade products from leading global technology partners.</p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4 md:gap-6">
            @php
            $products = [
                ['num' => '01', 'title' => 'Cybersecurity', 'desc' => 'Sophos, Kaspersky, Acunetix security suites', 'color' => 'from-red-500 to-orange-500'],
                ['num' => '02', 'title' => 'Networking', 'desc' => 'Cisco, HP, Dell enterprise switches & routers', 'color' => 'from-blue-500 to-indigo-500'],
                ['num' => '03', 'title' => 'Servers & Storage', 'desc' => 'Dell, HP servers and SAN/NAS solutions', 'color' => 'from-emerald-500 to-teal-500'],
                ['num' => '04', 'title' => 'Software', 'desc' => 'Zimbra, Microsoft, ERP & CRM platforms', 'color' => 'from-violet-500 to-purple-500'],
                ['num' => '05', 'title' => 'Cloud Services', 'desc' => 'AWS, Azure, private cloud & migration', 'color' => 'from-sky-500 to-blue-500'],
            ];
            @endphp

            @foreach($products as $i => $prod)
            <div class="group bg-white rounded-2xl p-5 md:p-6 border border-slate-100 hover:border-amber-300 hover:shadow-xl transition-all duration-300 relative overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <!-- Number with gradient -->
                <div class="text-4xl font-extrabold bg-gradient-to-r {{ $prod['color'] }} bg-clip-text text-transparent mb-3">{{ $prod['num'] }}</div>

                <h3 class="font-bold text-slate-900 text-lg md:text-xl mb-2 group-hover:text-amber-700 transition-colors">{{ $prod['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $prod['desc'] }}</p>

                <!-- Bottom accent bar -->
                <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r {{ $prod['color'] }} transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>
