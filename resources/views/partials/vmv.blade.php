<!-- Vision, Mission & Core Values -->
<section class="vmv py-20 lg:py-28 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">{{ __('landing.vmv_title') }}</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Vision -->
            <div class="bg-white rounded-2xl p-8 shadow-lg border border-slate-100" data-aos="fade-up" data-aos-delay="0">
                <div class="w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center mb-6">
                    <i class="fas fa-eye text-amber-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">{{ __('landing.vision_title') }}</h3>
                <p class="text-slate-600 leading-relaxed">{{ __('landing.vision_text') }}</p>
            </div>

            <!-- Mission -->
            <div class="bg-white rounded-2xl p-8 shadow-lg border border-slate-100" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center mb-6">
                    <i class="fas fa-bullseye text-amber-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">{{ __('landing.mission_title') }}</h3>
                <p class="text-slate-600 leading-relaxed">{{ __('landing.mission_text') }}</p>
            </div>

            <!-- Core Values -->
            <div class="bg-white rounded-2xl p-8 shadow-lg border border-slate-100" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 bg-amber-100 rounded-xl flex items-center justify-center mb-6">
                    <i class="fas fa-gem text-amber-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">{{ __('landing.values_title') }}</h3>
                <div class="space-y-2">
                    <div class="flex items-center text-slate-600"><i class="fas fa-check text-amber-500 mr-2 text-sm"></i> {{ __('landing.value_integrity') }}</div>
                    <div class="flex items-center text-slate-600"><i class="fas fa-check text-amber-500 mr-2 text-sm"></i> {{ __('landing.value_innovation') }}</div>
                    <div class="flex items-center text-slate-600"><i class="fas fa-check text-amber-500 mr-2 text-sm"></i> {{ __('landing.value_excellence') }}</div>
                    <div class="flex items-center text-slate-600"><i class="fas fa-check text-amber-500 mr-2 text-sm"></i> {{ __('landing.value_collaboration') }}</div>
                    <div class="flex items-center text-slate-600"><i class="fas fa-check text-amber-500 mr-2 text-sm"></i> {{ __('landing.value_customer_focus') }}</div>
                </div>
            </div>
        </div>
    </div>
</section>
