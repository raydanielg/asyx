<!-- Latest News & Insights -->
<section id="news" class="news py-20 lg:py-28 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-amber-50 rounded-full -translate-y-1/2 translate-x-1/4 blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Updates</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mt-3">Latest News & Insights</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto text-lg">Stay informed with our latest updates, industry insights, and project highlights.</p>
        </div>

        @php
            use App\Models\Blog;
            $blogs = Blog::where('is_published', true)->orderBy('published_at', 'desc')->take(3)->get();
            if ($blogs->isEmpty()) {
                $blogs = collect([
                    (object)['title' => 'ASYX Group Expands to East African Markets', 'slug' => '#', 'excerpt' => 'We are excited to announce our expansion into Kenya, Uganda, and Rwanda.', 'published_at' => now()->setDate(2026, 6, 15), 'category' => 'Company News', 'image' => '/122053.jpg'],
                    (object)['title' => 'Cybersecurity Trends Every Business Should Know', 'slug' => '#', 'excerpt' => 'From AI-powered threats to zero-trust architecture, discover key trends.', 'published_at' => now()->setDate(2026, 6, 10), 'category' => 'Industry', 'image' => '/135034.jpg'],
                    (object)['title' => 'Smart City Project Wins Innovation Award', 'slug' => '#', 'excerpt' => 'Our intelligent traffic management project wins national recognition.', 'published_at' => now()->setDate(2026, 6, 5), 'category' => 'Projects', 'image' => '/powerful-female-entrepreneur-focuses-strategic-planning.jpg'],
                ]);
            }
        @endphp

        <div class="grid md:grid-cols-3 gap-6 lg:gap-8">
            @foreach($blogs as $i => $b)
            <a href="{{ $b->slug !== '#' ? route('blog.show', $b->slug) : '#' }}" class="group bg-white rounded-2xl overflow-hidden border border-slate-100 hover:border-amber-300 hover:shadow-xl transition-all duration-300 relative" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-400 to-amber-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left z-10"></div>

                @if($b->image)
                <div class="h-48 overflow-hidden">
                    <img src="{{ $b->image }}" alt="{{ $b->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                @else
                <div class="h-48 bg-slate-200 flex items-center justify-center">
                    <i class="fas fa-newspaper text-slate-400 text-3xl"></i>
                </div>
                @endif

                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-semibold text-amber-600 bg-amber-50 px-2 py-1 rounded">{{ $b->category }}</span>
                        <span class="text-xs text-slate-400">{{ $b->published_at->format('M d, Y') }}</span>
                    </div>
                    <h3 class="font-bold text-slate-900 text-lg mb-2 group-hover:text-amber-700 transition-colors line-clamp-2">{{ $b->title }}</h3>
                    @if(property_exists($b, 'excerpt') && $b->excerpt)
                    <p class="text-slate-500 text-sm leading-relaxed mb-4 line-clamp-2">{{ $b->excerpt }}</p>
                    @endif
                    <span class="text-amber-600 font-semibold text-sm inline-flex items-center group-hover:translate-x-1 transition-transform">
                        Read More <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
