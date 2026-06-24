<!-- Featured Projects Section -->
<section id="projects" class="projects py-20 lg:py-28 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Portfolio</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-3">{{ __('landing.projects_title') }}</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto">{{ __('landing.projects_subtitle') }}</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $projects = [
                ['title' => 'National Smart City Infrastructure', 'cat' => 'Smart City'],
                ['title' => 'Bank Security Overhaul', 'cat' => 'Cyber Security'],
                ['title' => 'Government Cloud Migration', 'cat' => 'Cloud Solutions'],
                ['title' => 'Healthcare Network Upgrade', 'cat' => 'ICT Infrastructure'],
                ['title' => 'Energy Sector Monitoring System', 'cat' => 'Smart Energy'],
                ['title' => 'Education Portal Development', 'cat' => 'Software'],
            ];
            @endphp

            @foreach($projects as $i => $p)
            <div class="group bg-slate-50 rounded-2xl overflow-hidden border border-slate-100 hover:shadow-xl transition-all" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="bg-slate-200 h-48 flex items-center justify-center group-hover:bg-slate-300 transition">
                    <i class="fas fa-image text-slate-400 text-4xl"></i>
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-amber-600 bg-amber-50 px-3 py-1 rounded-full">{{ $p['cat'] }}</span>
                    <h3 class="text-lg font-bold text-slate-900 mt-3 mb-3">{{ $p['title'] }}</h3>
                    <a href="#" class="text-amber-600 font-semibold text-sm hover:text-amber-700 transition inline-flex items-center">
                        {{ __('landing.project_view') }} <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
