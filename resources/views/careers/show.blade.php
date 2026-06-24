@extends('layouts.main')

@section('content')
<!-- Job Hero -->
<section class="relative py-16 lg:py-24 overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);">
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 60px 60px;"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <div class="flex items-center justify-center space-x-3 mb-6">
                <span class="text-xs font-bold text-amber-400 bg-amber-400/10 border border-amber-400/20 px-3 py-1 rounded-full">{{ $career->department }}</span>
                <span class="text-xs text-slate-400">{{ $career->type }}</span>
                <span class="text-xs text-slate-400 flex items-center"><i class="fas fa-location-dot mr-1"></i>{{ $career->location }}</span>
            </div>
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white leading-tight">{{ $career->title }}</h1>
            @if($career->deadline)
            <p class="text-amber-400 mt-4 text-sm font-semibold">Application Deadline: {{ $career->deadline->format('F d, Y') }}</p>
            @endif
        </div>
    </div>
</section>

<!-- Job Details -->
<section class="py-16 lg:py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto">
            <!-- Description -->
            <div class="mb-10">
                <h2 class="text-2xl font-extrabold text-slate-900 mb-4">About the Role</h2>
                <div class="prose prose-slate max-w-none prose-p:text-slate-600 prose-p:leading-relaxed">
                    {!! $career->description !!}
                </div>
            </div>

            <!-- Responsibilities -->
            <div class="mb-10">
                <h2 class="text-2xl font-extrabold text-slate-900 mb-4">Responsibilities</h2>
                <div class="prose prose-slate max-w-none prose-p:text-slate-600 prose-li:text-slate-600 prose-li:leading-relaxed">
                    {!! $career->responsibilities !!}
                </div>
            </div>

            <!-- Requirements -->
            <div class="mb-10">
                <h2 class="text-2xl font-extrabold text-slate-900 mb-4">Requirements</h2>
                <div class="prose prose-slate max-w-none prose-p:text-slate-600 prose-li:text-slate-600 prose-li:leading-relaxed">
                    {!! $career->requirements !!}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Form -->
<section class="py-16 lg:py-20 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="max-w-2xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-3">Apply for This Position</h2>
                <p class="text-slate-500">Fill in the form below and we will get back to you within 5 business days.</p>
            </div>

            @if(session('success'))
            <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-6 mb-8 text-center">
                <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-check text-emerald-600 text-xl"></i>
                </div>
                <h3 class="font-bold text-emerald-800 text-lg mb-1">Application Submitted!</h3>
                <p class="text-emerald-600 text-sm">Thank you for your interest. We have received your application and will review it shortly.</p>
            </div>
            @endif

            <form action="{{ route('careers.apply', $career->slug) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl p-6 md:p-10 border border-slate-100 shadow-sm">
                @csrf

                <div class="grid md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Full Name *</label>
                        <input type="text" name="full_name" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="John Doe">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address *</label>
                        <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="john@example.com">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number *</label>
                        <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="+255 123 456 789">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Portfolio / LinkedIn URL</label>
                        <input type="url" name="portfolio_url" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="https://linkedin.com/in/johndoe">
                    </div>
                </div>

                <div class="mb-5">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Upload CV / Resume *</label>
                    <div class="relative">
                        <input type="file" name="cv" accept=".pdf,.doc,.docx" required class="w-full px-4 py-3 rounded-lg border border-slate-200 border-dashed file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100 bg-slate-50">
                    </div>
                    <p class="text-xs text-slate-400 mt-1">Accepted formats: PDF, DOC, DOCX (max 5MB)</p>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Cover Letter</label>
                    <textarea name="cover_letter" rows="4" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50 resize-none" placeholder="Tell us why you are a great fit for this role..."></textarea>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white py-4 rounded-xl font-bold text-lg hover:from-amber-600 hover:to-amber-700 transition shadow-lg hover:shadow-amber-500/30">
                    <i class="fas fa-paper-plane mr-2"></i>Submit Application
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
