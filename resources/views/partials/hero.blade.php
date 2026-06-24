<!-- Hero Section -->
<section id="home" class="hero relative text-white overflow-hidden min-h-[700px] lg:min-h-[800px] flex items-center">
    <!-- Background Carousel -->
    <div class="absolute inset-0" id="heroCarousel">
        <div class="hero-slide absolute inset-0 bg-cover bg-center transition-opacity duration-[2000ms] ease-in-out opacity-100" style="background-image: url('/122053.jpg')"></div>
        <div class="hero-slide absolute inset-0 bg-cover bg-center transition-opacity duration-[2000ms] ease-in-out opacity-0" style="background-image: url('/135034.jpg')"></div>
        <div class="hero-slide absolute inset-0 bg-cover bg-center transition-opacity duration-[2000ms] ease-in-out opacity-0" style="background-image: url('/powerful-female-entrepreneur-focuses-strategic-planning.jpg')"></div>
    </div>

    <!-- Content -->
    <div class="container mx-auto px-6 py-24 lg:py-36 relative z-10 w-full">
        <div class="max-w-4xl" data-aos="fade-right">
            <div class="inline-block px-4 py-1.5 bg-amber-600/20 border border-amber-500/30 rounded-full text-amber-400 text-sm font-semibold mb-6 backdrop-blur-sm">
                <i class="fas fa-award mr-2"></i>Leading ICT Solutions Provider in Africa
            </div>
            <!-- Animated Text Rotator -->
            <div class="text-rotator h-[3.5rem] md:h-[4.5rem] lg:h-[5.5rem] mb-4 overflow-hidden relative">
                <div class="text-rotator-inner transition-transform duration-700 ease-in-out">
                    <div class="text-rotator-item text-3xl md:text-4xl lg:text-5xl font-extrabold text-white drop-shadow-lg h-[3.5rem] md:h-[4.5rem] lg:h-[5.5rem] flex items-center">Smart Technology Solutions</div>
                    <div class="text-rotator-item text-3xl md:text-4xl lg:text-5xl font-extrabold text-amber-400 drop-shadow-lg h-[3.5rem] md:h-[4.5rem] lg:h-[5.5rem] flex items-center">Enterprise Cybersecurity</div>
                    <div class="text-rotator-item text-3xl md:text-4xl lg:text-5xl font-extrabold text-white drop-shadow-lg h-[3.5rem] md:h-[4.5rem] lg:h-[5.5rem] flex items-center">ICT Infrastructure</div>
                    <div class="text-rotator-item text-3xl md:text-4xl lg:text-5xl font-extrabold text-amber-400 drop-shadow-lg h-[3.5rem] md:h-[4.5rem] lg:h-[5.5rem] flex items-center">Digital Transformation</div>
                    <div class="text-rotator-item text-3xl md:text-4xl lg:text-5xl font-extrabold text-white drop-shadow-lg h-[3.5rem] md:h-[4.5rem] lg:h-[5.5rem] flex items-center">Managed IT Services</div>
                </div>
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-6 drop-shadow-lg">
                for a Smarter Tomorrow
            </h1>
            <p class="text-lg md:text-xl text-slate-200 mb-8 max-w-2xl leading-relaxed drop-shadow-md">
                ASYX Group delivers cutting-edge ICT, cybersecurity, smart technologies, and infrastructure solutions that empower businesses and governments across Africa and beyond.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#contact" class="bg-amber-600 text-white px-8 py-3.5 rounded-lg font-bold text-lg hover:bg-amber-700 transition shadow-lg hover:shadow-amber-500/25">
                    {{ __('landing.hero_cta_primary') }}
                </a>
                <a href="#services" class="border-2 border-white/40 text-white px-8 py-3.5 rounded-lg font-bold text-lg hover:bg-white/15 transition backdrop-blur-sm">
                    {{ __('landing.hero_cta_secondary') }}
                </a>
            </div>
        </div>

    </div>

    <!-- Carousel Dots -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex space-x-3">
        <button class="hero-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition" data-index="0"></button>
        <button class="hero-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition" data-index="1"></button>
        <button class="hero-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition" data-index="2"></button>
    </div>

    <script>
        (function() {
            // Hero image carousel
            const slides = document.querySelectorAll('.hero-slide');
            const dots = document.querySelectorAll('.hero-dot');
            let current = 0;
            const total = slides.length;

            function showSlide(index) {
                slides.forEach((s, i) => {
                    s.style.opacity = i === index ? '1' : '0';
                });
                dots.forEach((d, i) => {
                    d.classList.toggle('bg-white', i === index);
                    d.classList.toggle('bg-white/50', i !== index);
                });
                current = index;
            }

            setInterval(() => {
                showSlide((current + 1) % total);
            }, 5000);

            dots.forEach((dot, i) => {
                dot.addEventListener('click', () => showSlide(i));
            });

            // Text rotator
            const rotatorInner = document.querySelector('.text-rotator-inner');
            if (rotatorInner) {
                const items = rotatorInner.querySelectorAll('.text-rotator-item');
                let rotIndex = 0;
                const itemHeight = items[0].offsetHeight;

                setInterval(() => {
                    rotIndex = (rotIndex + 1) % items.length;
                    rotatorInner.style.transform = 'translateY(-' + (rotIndex * itemHeight) + 'px)';
                }, 3000);
            }
        })();
    </script>
</section>
