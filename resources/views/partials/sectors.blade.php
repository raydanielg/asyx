<!-- Sector Experience Section -->
<section class="sectors py-20 lg:py-28 bg-slate-900 text-white relative overflow-hidden">
    <!-- Subtle grid background -->
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 80px 80px;"></div>
    <!-- Warm glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[400px] bg-amber-600/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Left: Text -->
            <div data-aos="fade-right">
                <span class="text-amber-400 font-semibold text-sm uppercase tracking-wider">Expertise</span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold mt-3 mb-6">Sector Experience That Delivers Results</h2>
                <p class="text-slate-400 text-lg leading-relaxed mb-8">Over 12 years of deep domain expertise across critical sectors in Africa. We understand the unique challenges and regulatory requirements of each industry we serve.</p>

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <div class="text-4xl font-extrabold text-amber-400">12+</div>
                        <div class="text-sm text-slate-400 mt-1">Years Active</div>
                    </div>
                    <div>
                        <div class="text-4xl font-extrabold text-amber-400">500+</div>
                        <div class="text-sm text-slate-400 mt-1">Projects Delivered</div>
                    </div>
                </div>
            </div>

            <!-- Right: Sector Cards -->
            <div class="grid grid-cols-2 gap-4" data-aos="fade-left">
                @php
                $sectors = [
                    ['num' => '01', 'title' => 'Energy & Utilities', 'desc' => 'Smart grids, metering, SCADA'],
                    ['num' => '02', 'title' => 'Aviation', 'desc' => 'Airport systems, security, IT'],
                    ['num' => '03', 'title' => 'Government', 'desc' => 'e-Gov, digital services, ID'],
                    ['num' => '04', 'title' => 'Banking', 'desc' => 'Core banking, fintech, APIs'],
                    ['num' => '05', 'title' => 'Education', 'desc' => 'LMS, portals, e-learning'],
                    ['num' => '06', 'title' => 'Healthcare', 'desc' => 'HMIS, telemedicine, EHR'],
                ];
                @endphp

                @foreach($sectors as $i => $sec)
                <div class="group bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-5 hover:bg-white/10 hover:border-amber-500/40 transition-all duration-300 relative overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $i * 75 }}">
                    <div class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-amber-400 to-amber-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>

                    <div class="flex items-center justify-between mb-3">
                        <span class="text-2xl font-extrabold text-white/10 group-hover:text-amber-400/20 transition-colors">{{ $sec['num'] }}</span>
                        <div class="w-6 h-6 rounded-full bg-white/10 flex items-center justify-center group-hover:bg-amber-500 transition-colors">
                            <i class="fas fa-arrow-right text-white/50 text-[10px] group-hover:text-white transition-colors"></i>
                        </div>
                    </div>
                    <h3 class="font-bold text-white text-base mb-1 group-hover:text-amber-400 transition-colors">{{ $sec['title'] }}</h3>
                    <p class="text-slate-400 text-xs leading-relaxed">{{ $sec['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
