<!-- About Company Section -->
<section id="about" class="about py-20 lg:py-28 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">{{ __('landing.about_subtitle') }}</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-3 mb-6">{{ __('landing.about_title') }}</h2>
                <p class="text-slate-600 leading-relaxed mb-4">{{ __('landing.about_intro') }}</p>
                <p class="text-slate-600 leading-relaxed mb-6">{{ __('landing.about_story') }}</p>

                <div class="flex items-center space-x-8 mb-8">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-amber-600">12+</div>
                        <div class="text-sm text-slate-500">{{ __('landing.about_years_exp') }}</div>
                    </div>
                    <div class="h-12 w-px bg-slate-200"></div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-amber-600">50+</div>
                        <div class="text-sm text-slate-500">{{ __('landing.hero_stats_clients') }}</div>
                    </div>
                    <div class="h-12 w-px bg-slate-200"></div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-amber-600">200+</div>
                        <div class="text-sm text-slate-500">{{ __('landing.hero_stats_projects') }}</div>
                    </div>
                </div>

                <a href="#contact" class="inline-flex items-center text-amber-600 font-semibold hover:text-amber-700 transition">
                    {{ __('landing.about_read_more') }} <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div data-aos="fade-left" class="relative">
                <div class="bg-slate-100 rounded-2xl p-4 lg:p-6">
                    <div class="bg-amber-600 rounded-xl h-80 flex items-center justify-center text-white">
                        <div class="text-center">
                            <i class="fas fa-building text-6xl mb-4 opacity-80"></i>
                            <p class="text-lg font-semibold">ASYX Group Headquarters</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
