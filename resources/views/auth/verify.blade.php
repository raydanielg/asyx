@extends('layouts.app')

@section('title', 'Verify Email - ' . config('app.name'))

@section('content')
<div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
    {{-- Header --}}
    <div class="bg-gradient-to-br from-amber-600 to-amber-700 px-8 py-8 text-center">
        <div class="w-16 h-16 mx-auto bg-white/10 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4">
            <img src="/asyxgrouplogo.png" alt="{{ config('app.name') }}" class="w-10 h-10 object-contain">
        </div>
        <h2 class="text-2xl font-extrabold text-white">Verify Email</h2>
        <p class="text-amber-100 text-sm mt-1">Confirm your email address</p>
    </div>

    {{-- Content --}}
    <div class="p-8">
        @if (session('resent'))
            <div class="mb-5 p-4 rounded-lg bg-green-50 border border-green-200 text-green-700 text-sm flex items-center gap-2">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                A fresh verification link has been sent to your email address.
            </div>
        @endif

        <p class="text-sm text-gray-600 mb-5">
            Before proceeding, please check your email for a verification link. If you did not receive the email, you can request another.
        </p>

        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="w-full py-3 text-sm font-bold text-white bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 rounded-lg shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                Resend Verification Link
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="w-full py-2.5 text-sm font-medium text-gray-600 bg-gray-100 hover:bg-gray-200 rounded-lg transition-all">
                Log Out
            </button>
        </form>
    </div>
</div>

{{-- Footer --}}
<p class="mt-6 text-center text-xs text-gray-400">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
@endsection
