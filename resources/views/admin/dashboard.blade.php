@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard Overview')

@section('content')
@php
$blogCount = \App\Models\Blog::count();
$careerCount = \App\Models\Career::count();
$submissionCount = \App\Models\ContactSubmission::count();
$newsletterCount = \App\Models\NewsletterSubscriber::count();
$contactCount = \App\Models\ContactSubmission::where('type', 'contact')->count();
$quoteCount = \App\Models\ContactSubmission::where('type', 'quote')->count();
$consultCount = \App\Models\ContactSubmission::where('type', 'consultation')->count();
$salesCount = \App\Models\ContactSubmission::where('type', 'sales')->count();
@endphp

{{-- SalamaPay Style Powerful Gradient Cards --}}
<div class="grid grid-cols-2 lg:grid-cols-4 gap-5 mb-8">
    <!-- Total Users -->
    <div class="relative overflow-hidden rounded-2xl p-6 text-white" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">
        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-10 -mt-10 blur-sm"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <span class="text-[11px] font-bold bg-white/20 px-2.5 py-1 rounded-lg backdrop-blur-sm">USERS</span>
            </div>
            <p class="text-4xl font-extrabold tracking-tight">{{ $stats['total_users'] }}</p>
            <div class="mt-2 flex items-center gap-1.5">
                <svg class="w-3 h-3 text-emerald-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                <span class="text-xs text-emerald-100 font-medium">{{ $stats['admin_users'] }} admins</span>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/20"></div>
    </div>

    <!-- Blog Posts -->
    <div class="relative overflow-hidden rounded-2xl p-6 text-white" style="background: linear-gradient(135deg, #d97706 0%, #b45309 100%);">
        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-10 -mt-10 blur-sm"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
                </div>
                <span class="text-[11px] font-bold bg-white/20 px-2.5 py-1 rounded-lg backdrop-blur-sm">BLOG</span>
            </div>
            <p class="text-4xl font-extrabold tracking-tight">{{ $blogCount }}</p>
            <div class="mt-2 flex items-center gap-1.5">
                <svg class="w-3 h-3 text-amber-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                <span class="text-xs text-amber-100 font-medium">Published articles</span>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/20"></div>
    </div>

    <!-- Submissions -->
    <div class="relative overflow-hidden rounded-2xl p-6 text-white" style="background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);">
        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-10 -mt-10 blur-sm"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <span class="text-[11px] font-bold bg-white/20 px-2.5 py-1 rounded-lg backdrop-blur-sm">FORMS</span>
            </div>
            <p class="text-4xl font-extrabold tracking-tight">{{ $submissionCount }}</p>
            <div class="mt-2 flex items-center gap-1.5">
                <svg class="w-3 h-3 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                <span class="text-xs text-blue-100 font-medium">Total submissions</span>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/20"></div>
    </div>

    <!-- Newsletter -->
    <div class="relative overflow-hidden rounded-2xl p-6 text-white" style="background: linear-gradient(135deg, #7c3aed 0%, #6d28d9 100%);">
        <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-10 -mt-10 blur-sm"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <span class="text-[11px] font-bold bg-white/20 px-2.5 py-1 rounded-lg backdrop-blur-sm">MAIL</span>
            </div>
            <p class="text-4xl font-extrabold tracking-tight">{{ $newsletterCount }}</p>
            <div class="mt-2 flex items-center gap-1.5">
                <svg class="w-3 h-3 text-violet-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                <span class="text-xs text-violet-100 font-medium">Subscribers</span>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-1 bg-white/20"></div>
    </div>
</div>

{{-- Submission Type Breakdown --}}
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    <div class="bg-white rounded-xl border border-gray-100 p-4 flex items-center gap-3 hover:shadow-md transition-shadow">
        <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        </div>
        <div>
            <p class="text-lg font-extrabold text-gray-900">{{ $contactCount }}</p>
            <p class="text-[10px] text-gray-400">Contact</p>
        </div>
    </div>
    <div class="bg-white rounded-xl border border-gray-100 p-4 flex items-center gap-3 hover:shadow-md transition-shadow">
        <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center">
            <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
        </div>
        <div>
            <p class="text-lg font-extrabold text-gray-900">{{ $quoteCount }}</p>
            <p class="text-[10px] text-gray-400">Quotes</p>
        </div>
    </div>
    <div class="bg-white rounded-xl border border-gray-100 p-4 flex items-center gap-3 hover:shadow-md transition-shadow">
        <div class="w-10 h-10 rounded-lg bg-sky-100 flex items-center justify-center">
            <svg class="w-5 h-5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
        </div>
        <div>
            <p class="text-lg font-extrabold text-gray-900">{{ $consultCount }}</p>
            <p class="text-[10px] text-gray-400">Consultations</p>
        </div>
    </div>
    <div class="bg-white rounded-xl border border-gray-100 p-4 flex items-center gap-3 hover:shadow-md transition-shadow">
        <div class="w-10 h-10 rounded-lg bg-violet-100 flex items-center justify-center">
            <svg class="w-5 h-5 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
        </div>
        <div>
            <p class="text-lg font-extrabold text-gray-900">{{ $salesCount }}</p>
            <p class="text-[10px] text-gray-400">Sales</p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
    {{-- Visits Chart --}}
    <div class="lg:col-span-2 bg-white rounded-xl border p-5">
        <div class="flex items-center justify-between mb-5">
            <div>
                <h3 class="text-sm font-semibold text-gray-900">Visits Overview</h3>
                <p class="text-xs text-gray-400 mt-0.5">Site traffic analytics</p>
            </div>
            <div class="flex items-center gap-1 bg-gray-100 rounded-lg p-0.5">
                <button id="dayTab" onclick="showChart('day')" class="px-3 py-1 rounded-md text-xs font-medium bg-white text-gray-900 shadow-sm transition-all">Day</button>
                <button id="monthTab" onclick="showChart('month')" class="px-3 py-1 rounded-md text-xs font-medium text-gray-500 hover:text-gray-700 transition-all">Month</button>
            </div>
        </div>

        {{-- Daily Chart --}}
        <div id="dayChart">
            <div class="flex items-end justify-between h-48 gap-2">
                @php
                $maxDay = max($dailyVisits) > 0 ? max($dailyVisits) : 1;
                @endphp
                @foreach($dailyLabels as $i => $day)
                <div class="flex-1 flex flex-col items-center gap-2">
                    <div class="w-full bg-gray-100 rounded-t-lg relative overflow-hidden" style="height: 160px;">
                        <div class="absolute bottom-0 left-0 right-0 rounded-t-lg transition-all duration-500" style="height: {{ ($dailyVisits[$i] / $maxDay) * 100 }}%; background: linear-gradient(to top, #059669, #10b981);"></div>
                    </div>
                    <span class="text-[10px] text-gray-500 font-medium">{{ $day }}</span>
                </div>
                @endforeach
            </div>
            <div class="mt-4 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <div class="flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                        <span class="text-xs text-gray-500">This Week: {{ array_sum($dailyVisits) }} visits</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-300"></span>
                        <span class="text-xs text-gray-500">Today: {{ $todayVisits }}</span>
                    </div>
                </div>
                <span class="text-lg font-extrabold text-gray-900">{{ array_sum($dailyVisits) }}</span>
            </div>
        </div>

        {{-- Monthly Chart --}}
        <div id="monthChart" class="hidden">
            <div class="flex items-end justify-between h-48 gap-2">
                @php
                $maxMonth = max($monthlyVisits) > 0 ? max($monthlyVisits) : 1;
                @endphp
                @foreach($monthlyLabels as $i => $month)
                <div class="flex-1 flex flex-col items-center gap-2">
                    <div class="w-full bg-gray-100 rounded-t-lg relative overflow-hidden" style="height: 160px;">
                        <div class="absolute bottom-0 left-0 right-0 rounded-t-lg transition-all duration-500" style="height: {{ ($monthlyVisits[$i] / $maxMonth) * 100 }}%; background: linear-gradient(to top, #d97706, #f59e0b);"></div>
                    </div>
                    <span class="text-[10px] text-gray-500 font-medium">{{ $month }}</span>
                </div>
                @endforeach
            </div>
            <div class="mt-4 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <div class="flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
                        <span class="text-xs text-gray-500">6 Months: {{ number_format(array_sum($monthlyVisits)) }} visits</span>
                    </div>
                </div>
                <span class="text-lg font-extrabold text-gray-900">{{ number_format(array_sum($monthlyVisits)) }}</span>
            </div>
        </div>
    </div>

    {{-- Quick Actions Premium --}}
    <div class="bg-white rounded-xl border p-5">
        <h3 class="text-sm font-semibold text-gray-900 mb-4">Quick Actions</h3>
        <div class="space-y-3">
            <a href="{{ route('admin.blog') }}" class="group flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:border-amber-300 hover:shadow-md transition-all bg-white hover:bg-amber-50/30">
                <div class="w-10 h-10 bg-gradient-to-br from-amber-500 to-amber-600 rounded-lg flex items-center justify-center shadow-md shadow-amber-500/20 group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                </div>
                <div class="flex-1">
                    <h4 class="font-semibold text-gray-900 text-sm">Edit Blog</h4>
                    <p class="text-[10px] text-gray-400">Create articles</p>
                </div>
                <svg class="w-4 h-4 text-gray-300 group-hover:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="{{ route('admin.users') }}" class="group flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:border-emerald-300 hover:shadow-md transition-all bg-white hover:bg-emerald-50/30">
                <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-lg flex items-center justify-center shadow-md shadow-emerald-500/20 group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
                <div class="flex-1">
                    <h4 class="font-semibold text-gray-900 text-sm">Manage Users</h4>
                    <p class="text-[10px] text-gray-400">{{ $stats['total_users'] }} accounts</p>
                </div>
                <svg class="w-4 h-4 text-gray-300 group-hover:text-emerald-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="{{ route('admin.submissions') }}" class="group flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:border-sky-300 hover:shadow-md transition-all bg-white hover:bg-sky-50/30">
                <div class="w-10 h-10 bg-gradient-to-br from-sky-500 to-sky-600 rounded-lg flex items-center justify-center shadow-md shadow-sky-500/20 group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <div class="flex-1">
                    <h4 class="font-semibold text-gray-900 text-sm">Submissions</h4>
                    <p class="text-[10px] text-gray-400">{{ $submissionCount }} forms</p>
                </div>
                <svg class="w-4 h-4 text-gray-300 group-hover:text-sky-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <a href="{{ route('admin.newsletter') }}" class="group flex items-center gap-3 p-3 rounded-xl border border-gray-100 hover:border-violet-300 hover:shadow-md transition-all bg-white hover:bg-violet-50/30">
                <div class="w-10 h-10 bg-gradient-to-br from-violet-500 to-violet-600 rounded-lg flex items-center justify-center shadow-md shadow-violet-500/20 group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <div class="flex-1">
                    <h4 class="font-semibold text-gray-900 text-sm">Newsletter</h4>
                    <p class="text-[10px] text-gray-400">{{ $newsletterCount }} subscribers</p>
                </div>
                <svg class="w-4 h-4 text-gray-300 group-hover:text-violet-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    {{-- Recent Users --}}
    <div class="bg-white rounded-xl border p-5">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-sm font-semibold text-gray-900">Recent Users</h3>
            <a href="{{ route('admin.users') }}" class="text-xs font-medium text-amber-600 hover:text-amber-700">View All</a>
        </div>
        <div class="space-y-3">
            @forelse($stats['recent_users'] as $user)
            <div class="flex items-center gap-3 p-2 rounded-lg hover:bg-gray-50 transition-colors">
                <div class="w-9 h-9 rounded-full bg-gradient-to-br from-slate-200 to-slate-300 flex items-center justify-center text-slate-700 font-bold text-xs">
                    {{ strtoupper(substr($user->name, 0, 1)) }}
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate">{{ $user->name }}</p>
                    <p class="text-xs text-gray-400">{{ $user->email }}</p>
                </div>
                @if($user->is_admin)
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200">ADMIN</span>
                @endif
            </div>
            @empty
            <p class="text-sm text-gray-400 text-center py-4">No users yet</p>
            @endforelse
        </div>
    </div>

    {{-- Recent Submissions --}}
    <div class="bg-white rounded-xl border overflow-hidden">
        <div class="px-5 py-4 border-b flex items-center justify-between">
            <h3 class="text-sm font-semibold text-gray-900">Recent Submissions</h3>
            <a href="{{ route('admin.submissions') }}" class="text-xs font-medium text-amber-600 hover:text-amber-700">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead><tr class="text-left text-xs text-gray-500 bg-gray-50/50">
                    <th class="px-5 py-2.5 font-medium">Name</th>
                    <th class="px-5 py-2.5 font-medium">Type</th>
                    <th class="px-5 py-2.5 font-medium">Date</th>
                </tr></thead>
                <tbody>
                    @forelse(\App\Models\ContactSubmission::latest()->take(5)->get() as $sub)
                    <tr class="border-t border-gray-100 hover:bg-gray-50/50 transition-colors">
                        <td class="px-5 py-2.5 text-xs text-gray-700">{{ $sub->full_name }}</td>
                        <td class="px-5 py-2.5">
                            @if($sub->type === 'quote')
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-100">Quote</span>
                            @elseif($sub->type === 'consultation')
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-sky-50 text-sky-700 border border-sky-100">Consult</span>
                            @elseif($sub->type === 'sales')
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-violet-50 text-violet-700 border border-violet-100">Sales</span>
                            @else
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">Contact</span>
                            @endif
                        </td>
                        <td class="px-5 py-2.5 text-xs text-gray-500">{{ $sub->created_at->format('M d') }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="3" class="px-5 py-8 text-center text-gray-400 text-xs">No submissions yet</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Active Careers --}}
    <div class="bg-white rounded-xl border overflow-hidden">
        <div class="px-5 py-4 border-b flex items-center justify-between">
            <h3 class="text-sm font-semibold text-gray-900">Active Careers</h3>
            <a href="{{ route('admin.blog') }}" class="text-xs font-medium text-amber-600 hover:text-amber-700">View All</a>
        </div>
        <div class="p-5 space-y-3">
            @forelse(\App\Models\Career::where('is_active', true)->latest()->take(5)->get() as $career)
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-amber-100 flex items-center justify-center text-amber-700">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate">{{ $career->title }}</p>
                    <p class="text-xs text-gray-400">{{ $career->department ?? 'General' }}</p>
                </div>
                <span class="text-xs font-semibold text-gray-900">{{ $career->applications_count ?? 0 }} apps</span>
            </div>
            @empty
            <p class="text-sm text-gray-400 text-center py-4">No active careers</p>
            @endforelse
        </div>
    </div>
</div>

<script>
function showChart(type) {
    const dayChart = document.getElementById('dayChart');
    const monthChart = document.getElementById('monthChart');
    const dayTab = document.getElementById('dayTab');
    const monthTab = document.getElementById('monthTab');

    if (type === 'day') {
        dayChart.classList.remove('hidden');
        monthChart.classList.add('hidden');
        dayTab.classList.add('bg-white', 'text-gray-900', 'shadow-sm');
        dayTab.classList.remove('text-gray-500');
        monthTab.classList.remove('bg-white', 'text-gray-900', 'shadow-sm');
        monthTab.classList.add('text-gray-500');
    } else {
        dayChart.classList.add('hidden');
        monthChart.classList.remove('hidden');
        monthTab.classList.add('bg-white', 'text-gray-900', 'shadow-sm');
        monthTab.classList.remove('text-gray-500');
        dayTab.classList.remove('bg-white', 'text-gray-900', 'shadow-sm');
        dayTab.classList.add('text-gray-500');
    }
}
</script>
@endsection
