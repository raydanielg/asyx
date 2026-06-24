<!-- Top Bar -->
<div class="bg-slate-900 text-slate-300 text-xs md:text-sm">
    {{-- Mobile: compact single row --}}
    <div class="container mx-auto px-4 py-2.5 md:hidden">
        <div class="flex items-center justify-between">
            {{-- Left: Hours + Email (icon only for email on smallest screens) --}}
            <div class="flex items-center gap-3">
                <span class="flex items-center gap-1.5">
                    <i class="fas fa-clock text-amber-500 text-[10px]"></i>
                    <span class="text-slate-200">{{ __('landing.working_hours') }}</span>
                </span>
                <a href="mailto:info@asyxgroup.com" class="flex items-center gap-1.5 hover:text-amber-500 transition">
                    <i class="fas fa-envelope text-amber-500 text-[10px]"></i>
                    <span class="text-slate-200">info@asyxgroup.com</span>
                </a>
            </div>
            {{-- Right: Social icons only --}}
            <div class="flex items-center gap-3">
                <a href="#" class="w-7 h-7 rounded-full bg-slate-800 flex items-center justify-center hover:bg-amber-600 hover:text-white transition-all">
                    <i class="fab fa-facebook-f text-[10px]"></i>
                </a>
                <a href="#" class="w-7 h-7 rounded-full bg-slate-800 flex items-center justify-center hover:bg-amber-600 hover:text-white transition-all">
                    <i class="fab fa-linkedin-in text-[10px]"></i>
                </a>
                <a href="#" class="w-7 h-7 rounded-full bg-slate-800 flex items-center justify-center hover:bg-amber-600 hover:text-white transition-all">
                    <i class="fab fa-instagram text-[10px]"></i>
                </a>
                <a href="#" class="w-7 h-7 rounded-full bg-slate-800 flex items-center justify-center hover:bg-amber-600 hover:text-white transition-all">
                    <i class="fab fa-x-twitter text-[10px]"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- Desktop: full layout --}}
    <div class="hidden md:block container mx-auto px-6 py-2">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-6">
                <span class="flex items-center gap-1.5">
                    <i class="fas fa-clock text-amber-500 text-xs"></i>
                    <span>{{ __('landing.working_hours') }}</span>
                </span>
                <span class="flex items-center gap-1.5">
                    <i class="fas fa-phone text-amber-500 text-xs"></i>
                    <span>+255 123 456 789</span>
                </span>
                <a href="mailto:info@asyxgroup.com" class="flex items-center gap-1.5 hover:text-amber-500 transition">
                    <i class="fas fa-envelope text-amber-500 text-xs"></i>
                    <span>info@asyxgroup.com</span>
                </a>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-2">
                    <a href="#" class="w-7 h-7 rounded-full bg-slate-800 flex items-center justify-center hover:bg-amber-600 hover:text-white transition-all">
                        <i class="fab fa-facebook-f text-[11px]"></i>
                    </a>
                    <a href="#" class="w-7 h-7 rounded-full bg-slate-800 flex items-center justify-center hover:bg-amber-600 hover:text-white transition-all">
                        <i class="fab fa-linkedin-in text-[11px]"></i>
                    </a>
                    <a href="#" class="w-7 h-7 rounded-full bg-slate-800 flex items-center justify-center hover:bg-amber-600 hover:text-white transition-all">
                        <i class="fab fa-instagram text-[11px]"></i>
                    </a>
                    <a href="#" class="w-7 h-7 rounded-full bg-slate-800 flex items-center justify-center hover:bg-amber-600 hover:text-white transition-all">
                        <i class="fab fa-x-twitter text-[11px]"></i>
                    </a>
                </div>
                <a href="#" class="text-amber-500 font-semibold hover:text-amber-400 transition text-xs">{{ __('landing.quick_support') }}</a>
            </div>
        </div>
    </div>
</div>
