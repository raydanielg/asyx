<!-- Latest News & Insights -->
<section class="news py-20 lg:py-28 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Updates</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-3">{{ __('landing.news_title') }}</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto">{{ __('landing.news_subtitle') }}</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @php
            $news = [
                ['title' => 'ASYX Group Expands to East African Markets', 'date' => 'June 15, 2026', 'cat' => 'Company News'],
                ['title' => 'Cybersecurity Trends Every Business Should Know', 'date' => 'June 10, 2026', 'cat' => 'Industry'],
                ['title' => 'Smart City Project Wins Innovation Award', 'date' => 'June 5, 2026', 'cat' => 'Projects'],
            ];
            @endphp

            @foreach($news as $i => $n)
            <div class="bg-slate-50 rounded-2xl overflow-hidden border border-slate-100 hover:shadow-xl transition-all" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="bg-slate-200 h-40 flex items-center justify-center">
                    <i class="fas fa-newspaper text-slate-400 text-3xl"></i>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-semibold text-amber-600 bg-amber-50 px-2 py-1 rounded">{{ $n['cat'] }}</span>
                        <span class="text-xs text-slate-400">{{ $n['date'] }}</span>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-3">{{ $n['title'] }}</h3>
                    <a href="#" class="text-amber-600 font-semibold text-sm hover:text-amber-700 transition inline-flex items-center">
                        {{ __('landing.news_read_more') }} <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
