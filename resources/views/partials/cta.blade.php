<!-- Call To Action -->
<section class="cta py-16 lg:py-20 bg-gradient-to-br from-amber-500 via-amber-600 to-amber-700 text-white relative overflow-hidden">
    <!-- Decorative circles -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/4"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-white/5 rounded-full translate-y-1/2 -translate-x-1/4"></div>

    <div class="container mx-auto px-6 relative z-10" data-aos="fade-up">
        <div class="max-w-4xl mx-auto bg-white/10 backdrop-blur-md rounded-3xl p-8 md:p-10 border border-white/20 shadow-2xl">
            <div class="flex flex-col lg:flex-row items-center gap-8">
                <!-- Text -->
                <div class="flex-1 text-center lg:text-left">
                    <h2 class="text-2xl md:text-3xl font-extrabold mb-3">Ready to Transform Your Business?</h2>
                    <p class="text-amber-100 text-base leading-relaxed">Get in touch with our team for a free consultation, custom proposal, or to discuss your technology needs with our sales experts.</p>
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 flex-shrink-0">
                    <a href="{{ route('consultation') }}" class="bg-white text-amber-600 px-6 py-3 rounded-xl font-bold text-sm hover:bg-amber-50 transition shadow-lg hover:shadow-xl inline-flex items-center justify-center gap-2 whitespace-nowrap">
                        <i class="fas fa-comments text-xs"></i> Free Consultation
                    </a>
                    <a href="{{ route('proposal') }}" class="bg-amber-700/50 text-white px-6 py-3 rounded-xl font-bold text-sm hover:bg-amber-700/70 transition border border-white/20 inline-flex items-center justify-center gap-2 whitespace-nowrap backdrop-blur-sm">
                        <i class="fas fa-file-invoice text-xs"></i> Get Proposal
                    </a>
                    <a href="{{ route('talk-to-sales') }}" class="bg-amber-700/50 text-white px-6 py-3 rounded-xl font-bold text-sm hover:bg-amber-700/70 transition border border-white/20 inline-flex items-center justify-center gap-2 whitespace-nowrap backdrop-blur-sm">
                        <i class="fas fa-phone text-xs"></i> Talk to Sales
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
