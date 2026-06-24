<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard') — {{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/asyxgrouplogo.png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Nunito', ui-sans-serif, system-ui, sans-serif; }
        .sidebar-link { transition: all 0.2s; }
        .sidebar-link:hover, .sidebar-link.active { background: rgba(245, 158, 11, 0.1); color: #d97706; border-right: 3px solid #d97706; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800">
    <div class="flex h-screen overflow-hidden">
        {{-- Sidebar --}}
        <aside class="w-64 bg-white border-r border-slate-200 flex-shrink-0 hidden md:flex flex-col">
            <div class="h-16 flex items-center px-6 border-b border-slate-200">
                <a href="/" class="flex items-center space-x-3">
                    <img src="/asyxgrouplogo.png" alt="{{ config('app.name') }}" class="h-8 w-auto object-contain">
                    <span class="font-bold text-slate-800 text-lg">Admin</span>
                </a>
            </div>
            <nav class="flex-1 py-4 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-link flex items-center px-6 py-3 text-sm font-medium text-slate-600 {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fas fa-chart-line w-5 mr-3"></i> Dashboard
                </a>
                <a href="#" class="sidebar-link flex items-center px-6 py-3 text-sm font-medium text-slate-600">
                    <i class="fas fa-newspaper w-5 mr-3"></i> Blog / Content
                </a>
                <a href="#" class="sidebar-link flex items-center px-6 py-3 text-sm font-medium text-slate-600">
                    <i class="fas fa-database w-5 mr-3"></i> Database
                </a>
                <a href="#" class="sidebar-link flex items-center px-6 py-3 text-sm font-medium text-slate-600">
                    <i class="fas fa-users w-5 mr-3"></i> Users
                </a>
                <a href="#" class="sidebar-link flex items-center px-6 py-3 text-sm font-medium text-slate-600">
                    <i class="fas fa-cog w-5 mr-3"></i> Settings
                </a>
            </nav>
            <div class="p-4 border-t border-slate-200">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center px-4 py-2.5 text-sm font-medium text-red-600 hover:bg-red-50 rounded-lg transition">
                        <i class="fas fa-sign-out-alt w-5 mr-3"></i> Log Out
                    </button>
                </form>
            </div>
        </aside>

        {{-- Main Content --}}
        <div class="flex-1 flex flex-col overflow-hidden">
            {{-- Topbar --}}
            <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6">
                <div class="flex items-center md:hidden">
                    <button id="mobileMenuBtn" class="text-slate-500 hover:text-slate-700">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
                <div class="flex items-center space-x-4 ml-auto">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-semibold text-slate-800">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-slate-500">Administrator</p>
                    </div>
                    <div class="w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-user-shield text-amber-600"></i>
                    </div>
                </div>
            </header>

            {{-- Page Content --}}
            <main class="flex-1 overflow-y-auto p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        document.getElementById('mobileMenuBtn')?.addEventListener('click', () => {
            document.querySelector('aside').classList.toggle('hidden');
            document.querySelector('aside').classList.toggle('absolute');
            document.querySelector('aside').classList.toggle('z-50');
            document.querySelector('aside').classList.toggle('h-full');
        });
    </script>
</body>
</html>
