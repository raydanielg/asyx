<!-- Our Clients Section -->
<section id="clients" class="clients bg-white py-16 border-b border-slate-100 overflow-hidden">
    <div class="container mx-auto px-6 mb-10">
        <div class="text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mb-3">Our Clients</h2>
            <p class="text-slate-500 text-lg">Trusted by leading organizations across Tanzania</p>
        </div>
    </div>

    <div class="relative w-full overflow-hidden">
        <div class="marquee-track flex items-center gap-16 animate-marquee">
            @php
            $clients = [
                'download (1).jfif', 'download.jfif', 'ewuralogo.png', 'gpsa.jfif',
                'latra.jfif', 'nectalogo.png', 'nssf.gif', 'preccsionair.jfif',
                'psbtb logo.jfif', 'tanesco.png', 'tarura.png', 'tcaa.png',
                'tcra.jfif', 'tra.png', 'udsmlogo.png', 'veta.png'
            ];
            @endphp

            {{-- First set --}}
            @foreach ($clients as $client)
                <div class="flex-shrink-0 h-20 md:h-24 flex items-center justify-center px-4">
                    <img src="/clients/{{ $client }}" alt="Client Logo" class="h-full w-auto object-contain max-w-[180px] opacity-80 hover:opacity-100 transition duration-300 grayscale hover:grayscale-0">
                </div>
            @endforeach

            {{-- Duplicate for seamless loop --}}
            @foreach ($clients as $client)
                <div class="flex-shrink-0 h-20 md:h-24 flex items-center justify-center px-4">
                    <img src="/clients/{{ $client }}" alt="Client Logo" class="h-full w-auto object-contain max-w-[180px] opacity-80 hover:opacity-100 transition duration-300 grayscale hover:grayscale-0">
                </div>
            @endforeach
        </div>
    </div>
</section>
