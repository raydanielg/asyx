<!-- Header / Navigation -->
<header class="header bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-3">
            <img src="/asyxgrouplogo.png" alt="{{ config('app.name') }}" class="h-12 w-auto object-contain">
        </a>

        <!-- Nav Links -->
        <nav class="hidden lg:flex items-center space-x-6 text-sm font-medium text-slate-700">
            <a href="#home" class="hover:text-amber-600 transition">{{ __('landing.nav_home') }}</a>
            <a href="#about" class="hover:text-amber-600 transition">{{ __('landing.nav_about') }}</a>
            <a href="#services" class="hover:text-amber-600 transition">{{ __('landing.nav_services') }}</a>
            <a href="#solutions" class="hover:text-amber-600 transition">{{ __('landing.nav_solutions') }}</a>
            <a href="#industries" class="hover:text-amber-600 transition">{{ __('landing.nav_industries') }}</a>
            <a href="#projects" class="hover:text-amber-600 transition">{{ __('landing.nav_projects') }}</a>
            <a href="#contact" class="hover:text-amber-600 transition">{{ __('landing.nav_contact') }}</a>
        </nav>

        <!-- Right Side: CTA + Language -->
        <div class="hidden lg:flex items-center space-x-4">
            <!-- Language Switcher -->
            <div class="relative group">
                <button class="flex items-center space-x-1 text-slate-700 hover:text-amber-600 font-medium text-sm">
                    <i class="fas fa-globe"></i>
                    <span>{{ app()->getLocale() == 'sw' ? __('landing.lang_swahili') : __('landing.lang_english') }}</span>
                    <i class="fas fa-chevron-down text-xs"></i>
                </button>
                <div class="absolute right-0 mt-2 w-40 bg-white border border-slate-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                    <a href="{{ url('/?lang=en') }}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-amber-600 rounded-t-lg {{ app()->getLocale() == 'en' ? 'bg-slate-50 font-semibold' : '' }}">{{ __('landing.lang_english') }}</a>
                    <a href="{{ url('/?lang=sw') }}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-amber-600 rounded-b-lg {{ app()->getLocale() == 'sw' ? 'bg-slate-50 font-semibold' : '' }}">{{ __('landing.lang_swahili') }}</a>
                </div>
            </div>

            <a href="#contact" class="bg-amber-600 text-white px-5 py-2.5 rounded-lg font-semibold text-sm hover:bg-amber-700 transition shadow-md">
                {{ __('landing.cta_get_quote') }}
            </a>
        </div>

        <!-- Mobile Hamburger -->
        <button class="lg:hidden text-slate-800 text-2xl" id="mobileMenuBtn">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="lg:hidden hidden bg-white border-t border-slate-100" id="mobileMenu">
        <div class="container mx-auto px-6 py-4 space-y-3 text-sm font-medium text-slate-700">
            <a href="#home" class="block py-2 hover:text-amber-600">{{ __('landing.nav_home') }}</a>
            <a href="#about" class="block py-2 hover:text-amber-600">{{ __('landing.nav_about') }}</a>
            <a href="#services" class="block py-2 hover:text-amber-600">{{ __('landing.nav_services') }}</a>
            <a href="#solutions" class="block py-2 hover:text-amber-600">{{ __('landing.nav_solutions') }}</a>
            <a href="#industries" class="block py-2 hover:text-amber-600">{{ __('landing.nav_industries') }}</a>
            <a href="#projects" class="block py-2 hover:text-amber-600">{{ __('landing.nav_projects') }}</a>
            <a href="#contact" class="block py-2 hover:text-amber-600">{{ __('landing.nav_contact') }}</a>
            <hr class="border-slate-100">
            <a href="{{ url('/?lang=en') }}" class="block py-2 {{ app()->getLocale() == 'en' ? 'text-amber-600 font-semibold' : '' }}">{{ __('landing.lang_english') }}</a>
            <a href="{{ url('/?lang=sw') }}" class="block py-2 {{ app()->getLocale() == 'sw' ? 'text-amber-600 font-semibold' : '' }}">{{ __('landing.lang_swahili') }}</a>
            <a href="#contact" class="block bg-amber-600 text-white text-center px-5 py-2.5 rounded-lg font-semibold hover:bg-amber-700 transition mt-2">
                {{ __('landing.cta_get_quote') }}
            </a>
        </div>
    </div>
</header>

<script>
    document.getElementById('mobileMenuBtn').addEventListener('click', function() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('hidden');
    });
</script>
