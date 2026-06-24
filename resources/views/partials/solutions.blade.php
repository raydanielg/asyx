<!-- Featured Solutions Section -->
<section id="solutions" class="solutions py-20 lg:py-28 bg-white relative overflow-hidden">
    <!-- Subtle decorative background lines -->
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(226, 232, 240, 0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(226, 232, 240, 0.5) 1px, transparent 1px); background-size: 80px 80px;"></div>

    <!-- Warm accent blob top right -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-amber-50 rounded-full -translate-y-1/2 translate-x-1/4 blur-3xl pointer-events-none"></div>
    <!-- Cool accent blob bottom left -->
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-slate-50 rounded-full translate-y-1/3 -translate-x-1/4 blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Innovation</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mt-3">Smart Solutions for a Connected World</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto text-lg">Transforming cities, enterprises, and infrastructure with next-generation intelligent technologies.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @php
            $solutions = [
                [
                    'num' => '01',
                    'title' => 'Smart City Solutions',
                    'desc' => 'Integrated urban management systems including intelligent traffic control, smart waste management, and connected public services.',
                    'features' => ['IoT Sensors', 'Data Analytics', 'Citizen App']
                ],
                [
                    'num' => '02',
                    'title' => 'Smart Energy',
                    'desc' => 'Advanced metering infrastructure, renewable energy integration, and intelligent grid management for sustainable power distribution.',
                    'features' => ['Smart Meters', 'Grid Analytics', 'Solar Integration']
                ],
                [
                    'num' => '03',
                    'title' => 'Smart Transport',
                    'desc' => 'Fleet management, intelligent routing, GPS tracking, and automated fare collection for modern public and private transport.',
                    'features' => ['GPS Tracking', 'Route Optimization', 'Fleet Analytics']
                ],
                [
                    'num' => '04',
                    'title' => 'Smart Security',
                    'desc' => 'AI-powered surveillance, facial recognition, access control systems, and real-time threat detection for complete safety.',
                    'features' => ['AI Analytics', 'Cloud Recording', 'Mobile Alerts']
                ],
                [
                    'num' => '05',
                    'title' => 'Enterprise Solutions',
                    'desc' => 'End-to-end digital transformation including ERP, CRM, BI dashboards, and workflow automation for large organizations.',
                    'features' => ['ERP Systems', 'Business Intelligence', 'Automation']
                ],
                [
                    'num' => '06',
                    'title' => 'Smart Infrastructure',
                    'desc' => 'Connected infrastructure monitoring, predictive maintenance, and automated control systems for industrial facilities.',
                    'features' => ['Predictive Maintenance', 'Remote Monitoring', 'SCADA']
                ],
            ];
            @endphp

            @foreach($solutions as $i => $sol)
            <div class="group bg-white rounded-2xl p-6 lg:p-8 border border-slate-100 hover:border-amber-300 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <!-- Top accent line -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-400 to-amber-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>

                <!-- Number -->
                <div class="text-5xl font-extrabold text-slate-100 group-hover:text-amber-100 transition-colors duration-300 mb-2 leading-none">{{ $sol['num'] }}</div>

                <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-700 transition-colors">{{ $sol['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed mb-5">{{ $sol['desc'] }}</p>
                <div class="flex flex-wrap gap-2">
                    @foreach($sol['features'] as $feat)
                    <span class="px-3 py-1 bg-slate-100 border border-slate-200 rounded-full text-slate-600 text-xs font-medium group-hover:bg-amber-50 group-hover:text-amber-700 group-hover:border-amber-200 transition-all">{{ $feat }}</span>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
