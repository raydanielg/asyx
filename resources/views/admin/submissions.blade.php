@extends('layouts.admin')

@section('title', 'Submissions')
@section('page_title', 'Contact Submissions')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-xl font-extrabold text-gray-900">Contact Submissions</h1>
            <p class="text-xs text-gray-400 mt-1">Manage quotes, consultations and contact forms</p>
        </div>
    </div>

    <!-- Filter Tabs -->
    <div class="flex items-center gap-2 mb-6">
        <a href="{{ route('admin.submissions') }}" class="px-4 py-2 rounded-xl text-sm font-medium {{ !request('type') ? 'bg-amber-500 text-white shadow-md shadow-amber-500/20' : 'bg-white border text-gray-600 hover:bg-gray-50' }}">All</a>
        <a href="{{ route('admin.submissions', ['type' => 'quote']) }}" class="px-4 py-2 rounded-xl text-sm font-medium {{ request('type') === 'quote' ? 'bg-amber-500 text-white shadow-md shadow-amber-500/20' : 'bg-white border text-gray-600 hover:bg-gray-50' }}">Quotes</a>
        <a href="{{ route('admin.submissions', ['type' => 'consultation']) }}" class="px-4 py-2 rounded-xl text-sm font-medium {{ request('type') === 'consultation' ? 'bg-amber-500 text-white shadow-md shadow-amber-500/20' : 'bg-white border text-gray-600 hover:bg-gray-50' }}">Consultations</a>
        <a href="{{ route('admin.submissions', ['type' => 'sales']) }}" class="px-4 py-2 rounded-xl text-sm font-medium {{ request('type') === 'sales' ? 'bg-amber-500 text-white shadow-md shadow-amber-500/20' : 'bg-white border text-gray-600 hover:bg-gray-50' }}">Sales</a>
        <a href="{{ route('admin.submissions', ['type' => 'contact']) }}" class="px-4 py-2 rounded-xl text-sm font-medium {{ request('type') === 'contact' ? 'bg-amber-500 text-white shadow-md shadow-amber-500/20' : 'bg-white border text-gray-600 hover:bg-gray-50' }}">Contact</a>
    </div>

    <!-- Submissions Table -->
    <div class="bg-white rounded-xl border overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="text-left text-xs text-gray-500 bg-gray-50/50">
                        <th class="px-5 py-3 font-medium">Name</th>
                        <th class="px-5 py-3 font-medium">Email</th>
                        <th class="px-5 py-3 font-medium">Type</th>
                        <th class="px-5 py-3 font-medium">Phone</th>
                        <th class="px-5 py-3 font-medium">Company</th>
                        <th class="px-5 py-3 font-medium">Date</th>
                        <th class="px-5 py-3 font-medium text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($submissions as $sub)
                    <tr class="border-t border-gray-100 hover:bg-gray-50/50 transition-colors">
                        <td class="px-5 py-3 font-medium text-gray-900">{{ $sub->full_name }}</td>
                        <td class="px-5 py-3 text-gray-600">{{ $sub->email }}</td>
                        <td class="px-5 py-3">
                            @if($sub->type === 'quote')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200">QUOTE</span>
                            @elseif($sub->type === 'consultation')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-sky-50 text-sky-700 border border-sky-200">CONSULT</span>
                            @elseif($sub->type === 'sales')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-violet-50 text-violet-700 border border-violet-200">SALES</span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">CONTACT</span>
                            @endif
                        </td>
                        <td class="px-5 py-3 text-gray-500 text-xs">{{ $sub->phone ?? '-' }}</td>
                        <td class="px-5 py-3 text-gray-500 text-xs">{{ $sub->company ?? '-' }}</td>
                        <td class="px-5 py-3 text-gray-400 text-xs">{{ $sub->created_at->format('M d, Y') }}</td>
                        <td class="px-5 py-3 text-right">
                            <button onclick="alert('{{ $sub->message ?? 'No message' }}')" class="p-1.5 rounded-lg hover:bg-amber-50 text-gray-400 hover:text-amber-600 transition" title="View Message">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="7" class="px-5 py-8 text-center text-gray-400 text-xs">No submissions found</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($submissions->hasPages())
        <div class="px-5 py-3 border-t">
            {{ $submissions->links() }}
        </div>
        @endif
    </div>
</div>
@endsection
