<!-- Industries We Serve -->
<section id="industries" class="industries py-20 lg:py-28 bg-white relative overflow-hidden">
    <!-- Subtle background decoration -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-amber-50 rounded-full blur-3xl pointer-events-none opacity-60"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Our Reach</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mt-3">Industries We Serve</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto text-lg">Trusted across diverse sectors delivering tailored technology solutions.</p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
            @php
            $industries = [
                ['num' => '01', 'title' => 'Government', 'desc' => 'Digital services', 'detail' => 'We help government agencies modernize through e-Governance platforms, citizen service portals, secure document management, and digital identity systems. Our solutions improve transparency and public service delivery.', 'services' => ['e-Governance', 'Citizen Portals', 'Digital ID', 'Secure Archives']],
                ['num' => '02', 'title' => 'Banking', 'desc' => 'Fintech solutions', 'detail' => 'From core banking systems to mobile banking apps, we deliver secure financial technology solutions that enhance customer experience while maintaining regulatory compliance and data security.', 'services' => ['Core Banking', 'Mobile Payments', 'Fraud Detection', 'API Integration']],
                ['num' => '03', 'title' => 'Healthcare', 'desc' => 'Health IT systems', 'detail' => 'Our health IT solutions include Hospital Management Information Systems (HMIS), telemedicine platforms, electronic health records, and medical device integration for improved patient care.', 'services' => ['HMIS', 'Telemedicine', 'EHR Systems', 'Lab Integration']],
                ['num' => '04', 'title' => 'Education', 'desc' => 'E-learning platforms', 'detail' => 'We build Learning Management Systems, virtual classrooms, student information systems, and digital library solutions for schools, universities, and corporate training programs.', 'services' => ['LMS Platforms', 'Virtual Classrooms', 'Student Portals', 'Digital Libraries']],
                ['num' => '05', 'title' => 'Transport', 'desc' => 'Fleet & logistics', 'detail' => 'Our transport solutions include fleet management systems, intelligent traffic management, automated fare collection, and logistics optimization platforms for public and private operators.', 'services' => ['Fleet Management', 'GPS Tracking', 'Route Optimization', 'Fare Collection']],
                ['num' => '06', 'title' => 'Energy', 'desc' => 'Smart grids', 'detail' => 'We provide smart metering systems, grid monitoring solutions, renewable energy management platforms, and SCADA systems for power utilities and independent producers.', 'services' => ['Smart Meters', 'Grid Monitoring', 'SCADA Systems', 'Energy Analytics']],
                ['num' => '07', 'title' => 'Telecom', 'desc' => 'Network solutions', 'detail' => 'Our telecom solutions include network infrastructure deployment, OSS/BSS systems, customer experience platforms, and 5G readiness assessments for mobile and fixed operators.', 'services' => ['Network Infra', 'OSS/BSS', 'CX Platforms', '5G Planning']],
                ['num' => '08', 'title' => 'NGOs', 'desc' => 'Impact tech', 'detail' => 'We help NGOs leverage technology for greater impact through donor management systems, field data collection apps, beneficiary tracking, and impact measurement dashboards.', 'services' => ['Donor Management', 'Field Data Apps', 'Beneficiary Tracking', 'Impact Dashboards']],
            ];
            @endphp

            @foreach($industries as $i => $ind)
            <button class="industry-card group text-left bg-white rounded-2xl p-5 md:p-6 border border-slate-100 hover:border-amber-300 hover:shadow-xl transition-all duration-300 relative overflow-hidden w-full" data-aos="fade-up" data-aos-delay="{{ $i * 75 }}" data-index="{{ $i }}">
                <!-- Top accent line on hover -->
                <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-amber-400 to-amber-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>

                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-bold text-amber-600 bg-amber-50 px-2 py-1 rounded-md">{{ $ind['num'] }}</span>
                    <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center group-hover:bg-amber-100 transition-colors">
                        <i class="fas fa-arrow-right text-slate-400 text-xs group-hover:text-amber-600 transition-colors transform -rotate-45 group-hover:rotate-0 transition-transform duration-300"></i>
                    </div>
                </div>
                <h3 class="font-bold text-slate-900 text-lg md:text-xl group-hover:text-amber-700 transition-colors">{{ $ind['title'] }}</h3>
                <p class="text-slate-500 text-sm mt-1">{{ $ind['desc'] }}</p>
            </button>
            @endforeach
        </div>
    </div>

    <!-- Industry Detail Modal -->
    <div id="industryModal" class="fixed inset-0 z-50 hidden" aria-hidden="true">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity opacity-0" id="modalBackdrop"></div>

        <!-- Slide Panel -->
        <div class="absolute top-0 right-0 bottom-0 w-full md:w-[480px] lg:w-[560px] bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-out overflow-y-auto" id="modalPanel">
            <div class="p-6 md:p-8 lg:p-10">
                <!-- Close Button -->
                <div class="flex items-center justify-between mb-8">
                    <span class="text-xs font-bold text-amber-600 bg-amber-50 px-3 py-1.5 rounded-md" id="modalNum">01</span>
                    <button id="closeModal" class="w-10 h-10 rounded-full bg-slate-100 hover:bg-amber-100 flex items-center justify-center transition-colors group">
                        <i class="fas fa-times text-slate-500 group-hover:text-amber-600 transition-colors"></i>
                    </button>
                </div>

                <h3 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-4" id="modalTitle">Government</h3>
                <p class="text-slate-500 text-lg leading-relaxed mb-8" id="modalDetail">Detail text...</p>

                <!-- Services List -->
                <div class="mb-8">
                    <h4 class="text-sm font-bold text-slate-400 uppercase tracking-wider mb-4">What We Offer</h4>
                    <div class="flex flex-wrap gap-3" id="modalServices">
                        <!-- Tags injected via JS -->
                    </div>
                </div>

                <!-- Featured Image Placeholder -->
                <div class="rounded-2xl overflow-hidden mb-8 border border-slate-100">
                    <img id="modalImage" src="/135034.jpg" alt="" class="w-full h-48 object-cover">
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-4 mb-8">
                    <div class="text-center p-4 bg-slate-50 rounded-xl">
                        <div class="text-2xl font-extrabold text-amber-600">15+</div>
                        <div class="text-xs text-slate-500 mt-1">Years</div>
                    </div>
                    <div class="text-center p-4 bg-slate-50 rounded-xl">
                        <div class="text-2xl font-extrabold text-amber-600">50+</div>
                        <div class="text-xs text-slate-500 mt-1">Projects</div>
                    </div>
                    <div class="text-center p-4 bg-slate-50 rounded-xl">
                        <div class="text-2xl font-extrabold text-amber-600">100%</div>
                        <div class="text-xs text-slate-500 mt-1">Satisfaction</div>
                    </div>
                </div>

                <!-- CTA -->
                <a href="{{ route('quote') }}" id="getQuoteBtn" class="block w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white text-center py-4 rounded-xl font-bold text-lg hover:from-amber-600 hover:to-amber-700 transition shadow-lg hover:shadow-amber-500/30">
                    <i class="fas fa-file-invoice-dollar mr-2"></i>Get a Free Quote
                </a>
                <p class="text-center text-slate-400 text-sm mt-3">Free consultation within 24 hours</p>
            </div>
        </div>
    </div>

    <script>
        (function() {
            const industriesData = @json($industries);
            const cards = document.querySelectorAll('.industry-card');
            const modal = document.getElementById('industryModal');
            const modalBackdrop = document.getElementById('modalBackdrop');
            const modalPanel = document.getElementById('modalPanel');
            const closeBtn = document.getElementById('closeModal');
            const getQuoteBtn = document.getElementById('getQuoteBtn');

            function openModal(index) {
                const ind = industriesData[index];
                document.getElementById('modalNum').textContent = ind.num;
                document.getElementById('modalTitle').textContent = ind.title;
                document.getElementById('modalDetail').textContent = ind.detail;

                // Build services tags
                const servicesContainer = document.getElementById('modalServices');
                servicesContainer.innerHTML = '';
                ind.services.forEach(s => {
                    const span = document.createElement('span');
                    span.className = 'px-4 py-2 bg-amber-50 border border-amber-200 rounded-lg text-amber-700 text-sm font-medium';
                    span.textContent = s;
                    servicesContainer.appendChild(span);
                });

                modal.classList.remove('hidden');
                // Trigger animations
                setTimeout(() => {
                    modalBackdrop.classList.remove('opacity-0');
                    modalPanel.classList.remove('translate-x-full');
                }, 10);
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                modalBackdrop.classList.add('opacity-0');
                modalPanel.classList.add('translate-x-full');
                setTimeout(() => {
                    modal.classList.add('hidden');
                    document.body.style.overflow = '';
                }, 300);
            }

            cards.forEach(card => {
                card.addEventListener('click', () => openModal(parseInt(card.dataset.index)));
            });

            closeBtn.addEventListener('click', closeModal);
            modalBackdrop.addEventListener('click', closeModal);
            getQuoteBtn.addEventListener('click', closeModal);

            // Close on Escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });
        })();
    </script>
</section>
