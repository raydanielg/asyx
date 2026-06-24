<!-- Careers Section -->
<section id="careers" class="careers py-20 lg:py-28 bg-slate-50 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full" style="background-image: linear-gradient(rgba(226, 232, 240, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(226, 232, 240, 0.3) 1px, transparent 1px); background-size: 80px 80px;"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Join Us</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mt-3">Careers at ASYX Group</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto text-lg">Build your future with a leading technology company in Africa.</p>
        </div>

        @php
            $featuredCareers = \App\Models\Career::where('is_active', true)
                ->where(function($q) { $q->whereNull('deadline')->orWhere('deadline', '>=', now()); })
                ->orderBy('created_at', 'desc')
                ->take(3)
                ->get();
            $totalCareers = \App\Models\Career::where('is_active', true)
                ->where(function($q) { $q->whereNull('deadline')->orWhere('deadline', '>=', now()); })
                ->count();
        @endphp

        @if($totalCareers > 0)
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
                @foreach($featuredCareers as $i => $career)
                <div class="group bg-white rounded-2xl p-6 border border-slate-100 hover:border-amber-300 hover:shadow-xl transition-all duration-300 relative overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-400 to-amber-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>

                    <div class="flex items-start justify-between mb-4">
                        <span class="text-xs font-bold text-amber-600 bg-amber-50 px-2 py-1 rounded">{{ $career->department }}</span>
                        <span class="text-xs text-slate-400">{{ $career->type }}</span>
                    </div>

                    <h3 class="font-bold text-slate-900 text-lg mb-2 group-hover:text-amber-700 transition-colors">{{ $career->title }}</h3>
                    <p class="text-slate-500 text-sm mb-4 flex items-center"><i class="fas fa-location-dot text-amber-500 mr-2 text-xs"></i>{{ $career->location }}</p>
                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-2 mb-4">{{ Str::limit(strip_tags($career->description), 120) }}</p>

                    <div class="flex items-center justify-between">
                        @if($career->deadline)
                        <span class="text-xs text-slate-400">Deadline: {{ $career->deadline->format('M d, Y') }}</span>
                        @else
                        <span class="text-xs text-slate-400">Open until filled</span>
                        @endif
                        <a href="{{ route('careers.show', $career->slug) }}" class="text-amber-600 font-semibold text-sm hover:text-amber-700 transition inline-flex items-center group-hover:translate-x-1 transition-transform">
                            Apply <i class="fas fa-arrow-right ml-1 text-xs"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ route('careers.index') }}" class="inline-flex items-center bg-amber-600 text-white px-8 py-3.5 rounded-lg font-bold text-lg hover:bg-amber-700 transition shadow-lg hover:shadow-xl">
                    View All {{ $totalCareers }} Open Positions <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        @else
            <div class="bg-white rounded-2xl p-12 border border-slate-100 text-center max-w-2xl mx-auto" data-aos="fade-up">
                <div class="w-20 h-20 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-briefcase text-amber-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4">No Open Positions Right Now</h3>
                <p class="text-slate-500 mb-8 leading-relaxed">We do not have any open positions at the moment. However, we are always looking for talented individuals. Send your CV to careers@asyxgroup.com.</p>
                <a href="mailto:careers@asyxgroup.com" class="inline-flex items-center bg-amber-600 text-white px-8 py-3.5 rounded-lg font-bold text-lg hover:bg-amber-700 transition shadow-lg">
                    Send Your CV <i class="fas fa-envelope ml-2"></i>
                </a>
            </div>
        @endif
    </div>
</section>
