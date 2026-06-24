<!-- Client Testimonials -->
<section class="testimonials py-20 lg:py-28 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4 lg:px-6 relative z-10">
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Testimonials</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-slate-900 mt-3">What Our Clients Say</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto text-lg">Trusted by leading organizations across Africa.</p>
        </div>
    </div>

    @php
    $testimonials = [
        ['name' => 'John Mwakalinga', 'role' => 'CTO, National Bank of Tanzania', 'text' => 'ASYX Group transformed our entire cybersecurity infrastructure. Their team of certified experts delivered a comprehensive security overhaul that protected our digital assets while improving operational efficiency.'],
        ['name' => 'Dr. Sarah Kimaro', 'role' => 'Director of ICT, Ministry of Works', 'text' => 'The smart city solutions implemented by ASYX have revolutionized urban management in our region. From intelligent traffic systems to connected public services, they delivered beyond every milestone.'],
        ['name' => 'Michael Omondi', 'role' => 'CEO, Tanesco Power Solutions', 'text' => 'From initial consultation to full deployment, ASYX demonstrated exceptional professionalism and technical mastery. Their smart grid and metering solutions reduced our operational costs by 30%.'],
        ['name' => 'Grace Mushi', 'role' => 'Head of IT, CRDB Bank', 'text' => 'ASYX provided us with a robust core banking system upgrade and 24/7 managed services. Their support team is incredibly responsive and knowledgeable. Highly recommended for any financial institution.'],
        ['name' => 'Prof. James Lwehabura', 'role' => 'Vice Chancellor, UDSM', 'text' => 'The e-learning platform and student portal developed by ASYX have transformed how we deliver education. Their understanding of academic needs and technical execution was outstanding.'],
        ['name' => 'Asha Said', 'role' => 'Director, TPSF', 'text' => 'Partnering with ASYX for our digital transformation was the best decision. They modernized our entire IT infrastructure with zero downtime and provided excellent training to our staff.'],
    ];
    @endphp

    <!-- Horizontal Scrolling Testimonials -->
    <div class="relative w-full overflow-hidden" data-aos="fade-up">
        <div class="testimonial-track flex gap-6 animate-testimonial-scroll" style="width: max-content;">
            @foreach($testimonials as $t)
            <div class="w-[340px] md:w-[420px] lg:w-[500px] flex-shrink-0 bg-slate-50 rounded-2xl p-6 md:p-8 border border-slate-100 relative">
                <!-- Quote SVG -->
                <svg class="h-8 mb-4 text-amber-300" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                </svg>

                <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-6">"{{ $t['text'] }}"</p>

                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-amber-500 to-amber-700 flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                        {{ substr($t['name'], 0, 1) }}
                    </div>
                    <div class="flex items-center divide-x-2 divide-slate-300">
                        <div class="pr-3 font-semibold text-slate-900 text-sm">{{ $t['name'] }}</div>
                        <div class="pl-3 text-xs text-slate-500">{{ $t['role'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Duplicate for seamless loop -->
            @foreach($testimonials as $t)
            <div class="w-[340px] md:w-[420px] lg:w-[500px] flex-shrink-0 bg-slate-50 rounded-2xl p-6 md:p-8 border border-slate-100 relative">
                <svg class="h-8 mb-4 text-amber-300" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                </svg>

                <p class="text-slate-600 text-sm md:text-base leading-relaxed mb-6">"{{ $t['text'] }}"</p>

                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-amber-500 to-amber-700 flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                        {{ substr($t['name'], 0, 1) }}
                    </div>
                    <div class="flex items-center divide-x-2 divide-slate-300">
                        <div class="pr-3 font-semibold text-slate-900 text-sm">{{ $t['name'] }}</div>
                        <div class="pl-3 text-xs text-slate-500">{{ $t['role'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Fade edges -->
    <div class="absolute left-0 top-0 bottom-0 w-16 md:w-32 bg-gradient-to-r from-white to-transparent pointer-events-none z-20"></div>
    <div class="absolute right-0 top-0 bottom-0 w-16 md:w-32 bg-gradient-to-l from-white to-transparent pointer-events-none z-20"></div>
</section>
