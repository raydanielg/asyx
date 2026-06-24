<!-- Newsletter Subscription -->
<section class="newsletter py-16 bg-slate-900 text-white">
    <div class="container mx-auto px-6">
        <div class="bg-amber-600 rounded-2xl p-8 md:p-12 flex flex-col md:flex-row items-center justify-between gap-8" data-aos="fade-up">
            <div>
                <h3 class="text-2xl md:text-3xl font-bold mb-2">{{ __('landing.newsletter_title') }}</h3>
                <p class="text-amber-100">Stay updated with the latest technology insights and company news.</p>
            </div>
            <form class="flex w-full md:w-auto gap-3">
                <input type="email" class="flex-1 md:w-80 px-5 py-3.5 rounded-lg text-slate-800 outline-none focus:ring-2 focus:ring-white/50" placeholder="{{ __('landing.newsletter_placeholder') }}">
                <button type="submit" class="bg-slate-900 text-white px-6 py-3.5 rounded-lg font-bold hover:bg-slate-800 transition">
                    {{ __('landing.newsletter_button') }}
                </button>
            </form>
        </div>
    </div>
</section>
