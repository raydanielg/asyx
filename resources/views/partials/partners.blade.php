<!-- Trusted Partners Section -->
<section class="partners bg-slate-50 py-16 border-b border-slate-200 overflow-hidden">
    <div class="container mx-auto px-6 mb-10">
        <div class="text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-3">Technology Partners</h2>
            <p class="text-slate-500 text-lg">Collaborating with the world's leading technology companies</p>
        </div>
    </div>

    <div class="relative w-full overflow-hidden">
        <div class="marquee-track flex items-center gap-20 animate-marquee">
            @php
            $partners = ['dell.png', 'hp.png', 'sophos.png', 'Kaspersky.png', 'acunetix.png', 'zimbralogo.png'];
            @endphp

            @foreach ($partners as $partner)
                <div class="flex-shrink-0 h-16 md:h-20 flex items-center justify-center px-6">
                    <img src="/trustedorg/{{ $partner }}" alt="{{ ucfirst(pathinfo($partner, PATHINFO_FILENAME)) }}" class="h-full w-auto object-contain max-w-[160px] opacity-70 hover:opacity-100 transition duration-300 grayscale hover:grayscale-0">
                </div>
            @endforeach

            @foreach ($partners as $partner)
                <div class="flex-shrink-0 h-16 md:h-20 flex items-center justify-center px-6">
                    <img src="/trustedorg/{{ $partner }}" alt="{{ ucfirst(pathinfo($partner, PATHINFO_FILENAME)) }}" class="h-full w-auto object-contain max-w-[160px] opacity-70 hover:opacity-100 transition duration-300 grayscale hover:grayscale-0">
                </div>
            @endforeach
        </div>
    </div>
</section>
