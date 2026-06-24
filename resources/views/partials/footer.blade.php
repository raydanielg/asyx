<!-- Footer -->
<footer class="footer bg-slate-900 text-slate-300 pt-20 pb-8">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-12 mb-16">
            <!-- Company -->
            <div>
                <h4 class="text-white font-bold text-lg mb-6">{{ __('landing.footer_company') }}</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="#about" class="hover:text-amber-500 transition">{{ __('landing.nav_about') }}</a></li>
                    <li><a href="#services" class="hover:text-amber-500 transition">{{ __('landing.nav_services') }}</a></li>
                    <li><a href="#careers" class="hover:text-amber-500 transition">{{ __('landing.nav_careers') }}</a></li>
                    <li><a href="#contact" class="hover:text-amber-500 transition">{{ __('landing.nav_contact') }}</a></li>
                </ul>
            </div>

            <!-- Solutions -->
            <div>
                <h4 class="text-white font-bold text-lg mb-6">{{ __('landing.footer_solutions') }}</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="#services" class="hover:text-amber-500 transition">{{ __('landing.service_cyber') }}</a></li>
                    <li><a href="#solutions" class="hover:text-amber-500 transition">{{ __('landing.service_smart_tech') }}</a></li>
                    <li><a href="#services" class="hover:text-amber-500 transition">{{ __('landing.service_ict') }}</a></li>
                    <li><a href="#services" class="hover:text-amber-500 transition">{{ __('landing.service_software') }}</a></li>
                </ul>
            </div>

            <!-- Resources -->
            <div>
                <h4 class="text-white font-bold text-lg mb-6">{{ __('landing.footer_resources') }}</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="#" class="hover:text-amber-500 transition">{{ __('landing.nav_blog') }}</a></li>
                    <li><a href="#projects" class="hover:text-amber-500 transition">Case Studies</a></li>
                    <li><a href="#" class="hover:text-amber-500 transition">Documentation</a></li>
                    <li><a href="#" class="hover:text-amber-500 transition">Support</a></li>
                </ul>
            </div>

            <!-- Legal -->
            <div>
                <h4 class="text-white font-bold text-lg mb-6">{{ __('landing.footer_legal') }}</h4>
                <ul class="space-y-3 text-sm">
                    <li><a href="#" class="hover:text-amber-500 transition">{{ __('landing.footer_privacy') }}</a></li>
                    <li><a href="#" class="hover:text-amber-500 transition">{{ __('landing.footer_terms') }}</a></li>
                    <li><a href="#" class="hover:text-amber-500 transition">{{ __('landing.footer_cookies') }}</a></li>
                </ul>
            </div>

            <!-- Social -->
            <div>
                <h4 class="text-white font-bold text-lg mb-6">{{ __('landing.footer_social') }}</h4>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-amber-600 transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-amber-600 transition"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-amber-600 transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-amber-600 transition"><i class="fab fa-x-twitter"></i></a>
                </div>
            </div>
        </div>

        <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-sm text-slate-500">&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('landing.footer_copyright') }}</p>
            <p class="text-sm text-slate-500 mt-2 md:mt-0">{{ __('landing.footer_powered') }}</p>
        </div>
    </div>
</footer>
