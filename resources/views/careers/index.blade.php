@extends('layouts.main')

@section('content')
<!-- Hero -->
<section class="relative py-16 lg:py-24 overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);">
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 60px 60px;"></div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <span class="text-amber-400 font-semibold text-sm uppercase tracking-wider">Join Our Team</span>
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white mt-3">Open Positions</h1>
        <p class="text-slate-400 mt-4 max-w-2xl mx-auto text-lg">Find your next career opportunity at ASYX Group.</p>
    </div>
</section>

<!-- Job Listings -->
<section class="py-16 lg:py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            @forelse($careers as $career)
            <div class="group bg-slate-50 rounded-2xl p-6 md:p-8 border border-slate-100 hover:border-amber-300 hover:shadow-xl transition-all duration-300 mb-6 relative overflow-hidden">
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-400 to-amber-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>

                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-2 mb-2">
                            <span class="text-xs font-bold text-amber-600 bg-amber-50 px-2 py-1 rounded">{{ $career->department }}</span>
                            <span class="text-xs text-slate-400">{{ $career->type }}</span>
                            <span class="text-xs text-slate-400 flex items-center"><i class="fas fa-location-dot text-amber-500 mr-1 text-[10px]"></i>{{ $career->location }}</span>
                        </div>
                        <h2 class="font-bold text-slate-900 text-xl group-hover:text-amber-700 transition-colors">{{ $career->title }}</h2>
                        <p class="text-slate-500 text-sm mt-2 line-clamp-2">{{ Str::limit(strip_tags($career->description), 160) }}</p>
                        @if($career->deadline)
                        <p class="text-xs text-slate-400 mt-2">Application Deadline: {{ $career->deadline->format('F d, Y') }}</p>
                        @endif
                    </div>
                    <div class="flex-shrink-0">
                        <a href="{{ route('careers.show', $career->slug) }}" class="inline-flex items-center bg-amber-600 text-white px-6 py-2.5 rounded-lg font-semibold text-sm hover:bg-amber-700 transition shadow-md">
                            View & Apply <i class="fas fa-arrow-right ml-2 text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="bg-slate-50 rounded-2xl p-12 border border-slate-100 text-center">
                <div class="w-20 h-20 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-briefcase text-amber-600 text-3xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-4">No Open Positions</h3>
                <p class="text-slate-500 mb-8">No open positions at the moment. Check back soon or send your CV to careers@asyxgroup.com.</p>
                <a href="mailto:careers@asyxgroup.com" class="inline-flex items-center bg-amber-600 text-white px-8 py-3.5 rounded-lg font-bold hover:bg-amber-700 transition shadow-lg">
                    Send Your CV <i class="fas fa-envelope ml-2"></i>
                </a>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection
