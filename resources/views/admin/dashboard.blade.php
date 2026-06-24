@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-7xl mx-auto">
    {{-- Stats Cards --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-100">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">Total Users</p>
                    <p class="text-3xl font-bold text-slate-800 mt-1">{{ $stats['total_users'] }}</p>
                </div>
                <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-users text-amber-600 text-xl"></i>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-100">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">Admins</p>
                    <p class="text-3xl font-bold text-slate-800 mt-1">{{ $stats['admin_users'] }}</p>
                </div>
                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-user-shield text-emerald-600 text-xl"></i>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-100">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">Blog Posts</p>
                    <p class="text-3xl font-bold text-slate-800 mt-1">0</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-newspaper text-blue-600 text-xl"></i>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-100">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">Visitors</p>
                    <p class="text-3xl font-bold text-slate-800 mt-1">1,247</p>
                </div>
                <div class="w-12 h-12 bg-violet-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-eye text-violet-600 text-xl"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- Content Management --}}
    <div class="grid lg:grid-cols-3 gap-6 mb-8">
        {{-- Quick Actions --}}
        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-slate-100 p-6">
            <h3 class="text-lg font-bold text-slate-800 mb-4">Content Management</h3>
            <div class="grid sm:grid-cols-3 gap-4">
                <a href="#" class="group p-5 rounded-xl border border-slate-100 hover:border-amber-300 hover:shadow-md transition-all bg-slate-50 hover:bg-white">
                    <div class="w-10 h-10 bg-amber-100 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                        <i class="fas fa-pen text-amber-600"></i>
                    </div>
                    <h4 class="font-semibold text-slate-800 text-sm">Edit Blog</h4>
                    <p class="text-xs text-slate-500 mt-1">Create and manage articles</p>
                </a>
                <a href="#" class="group p-5 rounded-xl border border-slate-100 hover:border-amber-300 hover:shadow-md transition-all bg-slate-50 hover:bg-white">
                    <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                        <i class="fas fa-database text-emerald-600"></i>
                    </div>
                    <h4 class="font-semibold text-slate-800 text-sm">Database</h4>
                    <p class="text-xs text-slate-500 mt-1">Manage data tables</p>
                </a>
                <a href="#" class="group p-5 rounded-xl border border-slate-100 hover:border-amber-300 hover:shadow-md transition-all bg-slate-50 hover:bg-white">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                        <i class="fas fa-image text-blue-600"></i>
                    </div>
                    <h4 class="font-semibold text-slate-800 text-sm">Media</h4>
                    <p class="text-xs text-slate-500 mt-1">Upload and manage files</p>
                </a>
            </div>
        </div>

        {{-- Recent Users --}}
        <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
            <h3 class="text-lg font-bold text-slate-800 mb-4">Recent Users</h3>
            <div class="space-y-4">
                @forelse($stats['recent_users'] as $user)
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center text-sm font-bold text-slate-600">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-slate-800 truncate">{{ $user->name }}</p>
                        <p class="text-xs text-slate-500 truncate">{{ $user->email }}</p>
                    </div>
                    @if($user->is_admin)
                        <span class="text-xs font-medium text-amber-600 bg-amber-50 px-2 py-1 rounded">Admin</span>
                    @endif
                </div>
                @empty
                <p class="text-sm text-slate-400 text-center py-4">No users yet</p>
                @endforelse
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <p class="text-center text-xs text-slate-400 mt-8">&copy; {{ date('Y') }} {{ config('app.name') }}. Admin Panel. All rights reserved.</p>
</div>
@endsection
