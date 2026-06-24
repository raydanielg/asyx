@extends('layouts.admin')

@section('title', 'Newsletter')
@section('page_title', 'Newsletter Subscribers')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-xl font-extrabold text-gray-900">Newsletter Subscribers</h1>
            <p class="text-xs text-gray-400 mt-1">Manage newsletter subscribers and campaigns</p>
        </div>
        <div class="flex items-center gap-2">
            <button class="bg-white border text-gray-600 px-4 py-2 rounded-xl text-sm font-medium hover:bg-gray-50 transition flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                Export CSV
            </button>
        </div>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-3 gap-4 mb-6">
        <div class="bg-white rounded-xl border p-4 flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-violet-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <div>
                <p class="text-lg font-extrabold text-gray-900">{{ $total }}</p>
                <p class="text-[10px] text-gray-400">Total Subscribers</p>
            </div>
        </div>
        <div class="bg-white rounded-xl border p-4 flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
                <p class="text-lg font-extrabold text-gray-900">{{ $active }}</p>
                <p class="text-[10px] text-gray-400">Active</p>
            </div>
        </div>
        <div class="bg-white rounded-xl border p-4 flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
                <p class="text-lg font-extrabold text-gray-900">{{ $thisWeek }}</p>
                <p class="text-[10px] text-gray-400">This Week</p>
            </div>
        </div>
    </div>

    <!-- Subscribers Table -->
    <div class="bg-white rounded-xl border overflow-hidden">
        <div class="px-5 py-4 border-b flex items-center justify-between">
            <h3 class="text-sm font-semibold text-gray-900">All Subscribers</h3>
            <input type="text" placeholder="Search emails..." class="bg-gray-50 rounded-lg px-3 py-1.5 text-sm border border-gray-100 outline-none focus:border-amber-300 w-48">
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="text-left text-xs text-gray-500 bg-gray-50/50">
                        <th class="px-5 py-3 font-medium">Email</th>
                        <th class="px-5 py-3 font-medium">Name</th>
                        <th class="px-5 py-3 font-medium">Status</th>
                        <th class="px-5 py-3 font-medium">Subscribed</th>
                        <th class="px-5 py-3 font-medium text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($subscribers as $sub)
                    <tr class="border-t border-gray-100 hover:bg-gray-50/50 transition-colors">
                        <td class="px-5 py-3 font-medium text-gray-900">{{ $sub->email }}</td>
                        <td class="px-5 py-3 text-gray-600">{{ $sub->name ?? '-' }}</td>
                        <td class="px-5 py-3">
                            @if($sub->is_active)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">ACTIVE</span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-gray-100 text-gray-500 border border-gray-200">INACTIVE</span>
                            @endif
                        </td>
                        <td class="px-5 py-3 text-gray-400 text-xs">{{ $sub->created_at->format('M d, Y') }}</td>
                        <td class="px-5 py-3 text-right">
                            <form method="POST" action="{{ route('admin.newsletter.toggle', $sub) }}" class="inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="text-xs font-medium {{ $sub->is_active ? 'text-amber-600 hover:text-amber-700' : 'text-emerald-600 hover:text-emerald-700' }}">
                                    {{ $sub->is_active ? 'Deactivate' : 'Activate' }}
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="px-5 py-8 text-center text-gray-400 text-xs">No subscribers yet</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($subscribers->hasPages())
        <div class="px-5 py-3 border-t">
            {{ $subscribers->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
