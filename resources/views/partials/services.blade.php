<!-- Services Overview Section -->
<section id="services" class="services py-20 lg:py-28 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">What We Do</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mt-3">{{ __('landing.services_title') }}</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto text-lg">Comprehensive technology solutions designed to empower your business with innovation, security, and scalability.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $services = [
                [
                    'icon' => 'fa-microchip',
                    'title' => 'Smart Technologies',
                    'desc' => 'IoT, AI, and automation solutions that transform traditional operations into intelligent, data-driven enterprises.',
                    'features' => ['IoT Device Integration', 'AI & Machine Learning', 'Process Automation', 'Smart Building Systems']
                ],
                [
                    'icon' => 'fa-shield-halved',
                    'title' => 'Cyber Security',
                    'desc' => 'Enterprise-grade security solutions protecting your digital assets with advanced threat detection and prevention.',
                    'features' => ['Penetration Testing', 'SIEM Solutions', 'Endpoint Protection', 'Security Audits']
                ],
                [
                    'icon' => 'fa-server',
                    'title' => 'ICT Infrastructure',
                    'desc' => 'End-to-end design, deployment, and management of robust, scalable IT infrastructure for modern enterprises.',
                    'features' => ['Network Design', 'Data Center Setup', 'Cloud Migration', 'Server Management']
                ],
                [
                    'icon' => 'fa-code',
                    'title' => 'Software Development',
                    'desc' => 'Custom software solutions and enterprise applications tailored to streamline your business processes.',
                    'features' => ['Web Applications', 'Mobile Apps', 'Enterprise ERP', 'API Integration']
                ],
                [
                    'icon' => 'fa-headset',
                    'title' => 'Managed Services',
                    'desc' => '24/7 IT support and managed service solutions ensuring your systems run smoothly around the clock.',
                    'features' => ['24/7 Monitoring', 'Help Desk Support', 'Backup & Recovery', 'Patch Management']
                ],
                [
                    'icon' => 'fa-boxes-stacked',
                    'title' => 'Hardware Distribution',
                    'desc' => 'Authorized distributor of world-class IT hardware from leading global manufacturers at competitive prices.',
                    'features' => ['Servers & Storage', 'Networking Gear', 'Security Appliances', 'Licensing']
                ],
            ];
            @endphp

            @foreach($services as $i => $s)
            <div class="group bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-2xl hover:border-amber-300 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="absolute top-0 right-0 w-24 h-24 bg-amber-100 rounded-bl-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="w-14 h-14 bg-amber-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg shadow-amber-200">
                    <i class="fas {{ $s['icon'] }} text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $s['title'] }}</h3>
                <p class="text-slate-600 leading-relaxed mb-5">{{ $s['desc'] }}</p>
                <ul class="space-y-2">
                    @foreach($s['features'] as $feature)
                    <li class="flex items-center text-sm text-slate-600">
                        <i class="fas fa-check text-amber-500 mr-2 text-xs"></i>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>
