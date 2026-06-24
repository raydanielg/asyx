<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name'))</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/asyxgrouplogo.png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @keyframes simpleFadeIn {
            from { opacity: 0; transform: translateY(12px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        body { font-family: 'Nunito', ui-sans-serif, system-ui, sans-serif; }
        .auth-bg {
            background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=1920&q=80');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="min-h-screen auth-bg flex items-center justify-center p-4 relative">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-slate-900/80"></div>

    <div class="relative z-10 w-full max-w-md" style="animation: simpleFadeIn 0.5s ease-out both;">
        @yield('content')
    </div>
</body>
</html>
