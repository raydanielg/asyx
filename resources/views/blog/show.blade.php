@extends('layouts.main')

@section('content')
<!-- Blog Article Hero -->
<section class="relative py-16 lg:py-24 overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);">
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 60px 60px;"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <div class="flex items-center justify-center space-x-3 mb-6">
                <span class="text-xs font-bold text-amber-400 bg-amber-400/10 border border-amber-400/20 px-3 py-1 rounded-full">{{ $blog->category }}</span>
                <span class="text-slate-400 text-sm">{{ $blog->published_at->format('F d, Y') }}</span>
            </div>
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white leading-tight">{{ $blog->title }}</h1>
            <div class="flex items-center justify-center space-x-3 mt-8">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-amber-500 to-amber-700 flex items-center justify-center text-white font-bold text-sm">
                    {{ substr($blog->author, 0, 1) }}
                </div>
                <span class="text-slate-300 text-sm">By <span class="font-semibold text-white">{{ $blog->author }}</span></span>
            </div>
        </div>
    </div>
</section>

<!-- Blog Content -->
<section class="py-12 lg:py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto">
            <!-- Featured Image -->
            @if($blog->image)
            <div class="rounded-2xl overflow-hidden mb-10 shadow-xl border border-slate-100">
                <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="w-full h-64 md:h-80 object-cover">
            </div>
            @endif

            <!-- Article Body -->
            <div class="prose prose-slate max-w-none prose-headings:text-slate-900 prose-p:text-slate-600 prose-p:leading-relaxed prose-a:text-amber-600 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-800 prose-li:text-slate-600">
                {!! $blog->content !!}
            </div>

            <!-- Share & Back -->
            <div class="mt-12 pt-8 border-t border-slate-100 flex flex-wrap items-center justify-between gap-4">
                <a href="{{ url('/') }}#news" class="inline-flex items-center text-amber-600 font-semibold hover:text-amber-700 transition">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Articles
                </a>
                <div class="flex items-center space-x-2">
                    <span class="text-sm text-slate-500">Share:</span>
                    <button class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-amber-100 hover:text-amber-600 transition">
                        <i class="fab fa-linkedin-in text-sm"></i>
                    </button>
                    <button class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-amber-100 hover:text-amber-600 transition">
                        <i class="fab fa-x-twitter text-sm"></i>
                    </button>
                    <button class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-amber-100 hover:text-amber-600 transition">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Articles -->
@if($related->count() > 0)
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mb-10 text-center">More Articles</h2>
        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            @foreach($related as $r)
            <a href="{{ route('blog.show', $r->slug) }}" class="group bg-white rounded-2xl overflow-hidden border border-slate-100 hover:border-amber-300 hover:shadow-xl transition-all duration-300">
                @if($r->image)
                <div class="h-40 overflow-hidden">
                    <img src="{{ $r->image }}" alt="{{ $r->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                @endif
                <div class="p-5">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-semibold text-amber-600 bg-amber-50 px-2 py-0.5 rounded">{{ $r->category }}</span>
                        <span class="text-xs text-slate-400">{{ $r->published_at->format('M d, Y') }}</span>
                    </div>
                    <h3 class="font-bold text-slate-900 text-sm group-hover:text-amber-700 transition-colors line-clamp-2">{{ $r->title }}</h3>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
