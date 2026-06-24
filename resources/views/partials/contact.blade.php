<!-- Contact Section -->
<section id="contact" class="contact py-20 lg:py-28 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-amber-600 font-semibold text-sm uppercase tracking-wider">Get in Touch</span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 mt-3">{{ __('landing.contact_title') }}</h2>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto text-lg">{{ __('landing.contact_subtitle') }}</p>
        </div>

        <div class="grid lg:grid-cols-5 gap-10">
            <!-- Contact Form -->
            <div class="lg:col-span-3 bg-white rounded-2xl p-8 lg:p-10 border border-slate-100 shadow-sm relative overflow-hidden" data-aos="fade-right">
                <!-- Top accent line -->
                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-400 to-amber-600"></div>

                <h3 class="text-xl font-bold text-slate-900 mb-2">Send us a Message</h3>
                <p class="text-slate-500 text-sm mb-6">Fill in the form below and we will get back to you within 24 hours.</p>

                <!-- Success Message -->
                <div id="contactSuccess" class="hidden bg-emerald-50 border border-emerald-200 rounded-xl p-6 mb-6 text-center">
                    <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-check text-emerald-600 text-xl"></i>
                    </div>
                    <h4 class="font-bold text-emerald-800 mb-1">Message Sent!</h4>
                    <p class="text-emerald-600 text-sm">Thank you for reaching out. We will respond shortly.</p>
                </div>

                <!-- Error Message -->
                <div id="contactError" class="hidden bg-red-50 border border-red-200 rounded-xl p-4 mb-6 text-center">
                    <p class="text-red-600 text-sm font-medium"><i class="fas fa-circle-exclamation mr-2"></i>Something went wrong. Please try again.</p>
                </div>

                <form id="contactForm" class="space-y-5">
                    @csrf
                    <input type="hidden" name="type" value="contact">

                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Full Name *</label>
                            <input type="text" name="full_name" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address *</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="john@example.com">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number</label>
                            <input type="tel" name="phone" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="+255 123 456 789">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Company</label>
                            <input type="text" name="company" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="Your Company Ltd">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Subject *</label>
                        <input type="text" name="subject" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="Project Inquiry">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Message *</label>
                        <textarea name="message" rows="5" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50 resize-none" placeholder="Tell us about your project needs..."></textarea>
                    </div>

                    <button type="submit" id="contactSubmitBtn" class="w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white py-4 rounded-xl font-bold text-lg hover:from-amber-600 hover:to-amber-700 transition shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                        <span id="btnText">Send Message</span>
                        <i id="btnIcon" class="fas fa-paper-plane text-sm"></i>
                        <svg id="btnSpinner" class="hidden animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>
                </form>

                <script>
                (function() {
                    const form = document.getElementById('contactForm');
                    const btn = document.getElementById('contactSubmitBtn');
                    const btnText = document.getElementById('btnText');
                    const btnIcon = document.getElementById('btnIcon');
                    const btnSpinner = document.getElementById('btnSpinner');
                    const successDiv = document.getElementById('contactSuccess');
                    const errorDiv = document.getElementById('contactError');

                    form.addEventListener('submit', async function(e) {
                        e.preventDefault();
                        successDiv.classList.add('hidden');
                        errorDiv.classList.add('hidden');

                        // Show loading state
                        btn.disabled = true;
                        btnText.textContent = 'Sending...';
                        btnIcon.classList.add('hidden');
                        btnSpinner.classList.remove('hidden');

                        const formData = new FormData(form);

                        try {
                            const response = await fetch('{{ route("contact.submit") }}', {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': formData.get('_token'),
                                    'Accept': 'application/json',
                                },
                                body: formData
                            });

                            const data = await response.json();

                            if (response.ok && data.success) {
                                successDiv.classList.remove('hidden');
                                successDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                form.reset();
                            } else {
                                throw new Error(data.message || 'Failed to send');
                            }
                        } catch (err) {
                            errorDiv.classList.remove('hidden');
                        } finally {
                            btn.disabled = false;
                            btnText.textContent = 'Send Message';
                            btnIcon.classList.remove('hidden');
                            btnSpinner.classList.add('hidden');
                        }
                    });
                })();
                </script>
            </div>

            <!-- Contact Info & Map -->
            <div class="lg:col-span-2 space-y-6" data-aos="fade-left">
                <!-- Address Card -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-location-dot text-amber-600 text-lg"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-900 text-lg">{{ __('landing.contact_address') }}</h3>
                            <p class="text-slate-600 mt-2 leading-relaxed">
                                <span class="font-semibold text-slate-800">Tropical Center, 3rd Floor</span><br>
                                New Bagamoyo Road<br>
                                Plot No. 30/00 | House No. 301<br>
                                <span class="text-amber-600 font-medium">Dar es Salaam, Tanzania</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Phone & Email -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm">
                        <div class="w-10 h-10 bg-amber-100 rounded-lg flex items-center justify-center mb-3">
                            <i class="fas fa-phone text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-900 text-sm">Phone</h4>
                        <p class="text-slate-600 mt-1 text-sm">+255 123 456 789</p>
                    </div>
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm">
                        <div class="w-10 h-10 bg-amber-100 rounded-lg flex items-center justify-center mb-3">
                            <i class="fas fa-envelope text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-900 text-sm">Email</h4>
                        <p class="text-slate-600 mt-1 text-sm">info@asyxgroup.com</p>
                    </div>
                </div>

                <!-- Working Hours -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-amber-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-clock text-amber-600"></i>
                        </div>
                        <h4 class="font-bold text-slate-900">Working Hours</h4>
                    </div>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between text-slate-600">
                            <span>Monday - Friday</span>
                            <span class="font-semibold text-slate-800">08:00 AM - 06:00 PM</span>
                        </div>
                        <div class="flex justify-between text-slate-600">
                            <span>Saturday</span>
                            <span class="font-semibold text-slate-800">09:00 AM - 01:00 PM</span>
                        </div>
                        <div class="flex justify-between text-slate-600">
                            <span>Sunday</span>
                            <span class="font-semibold text-red-500">Closed</span>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm">
                    <h4 class="font-bold text-slate-900 mb-4">Follow Us</h4>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 bg-slate-100 rounded-lg flex items-center justify-center text-slate-600 hover:bg-amber-600 hover:text-white transition"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="w-10 h-10 bg-slate-100 rounded-lg flex items-center justify-center text-slate-600 hover:bg-amber-600 hover:text-white transition"><i class="fab fa-x-twitter"></i></a>
                        <a href="#" class="w-10 h-10 bg-slate-100 rounded-lg flex items-center justify-center text-slate-600 hover:bg-amber-600 hover:text-white transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 bg-slate-100 rounded-lg flex items-center justify-center text-slate-600 hover:bg-amber-600 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map -->
        <div class="mt-10 rounded-2xl overflow-hidden border border-slate-200 shadow-lg" data-aos="fade-up">
            <iframe
                src="https://www.openstreetmap.org/export/embed.html?bbox=39.208%2C-6.81%2C39.28%2C-6.77&layer=mapnik&marker=-6.79%2C39.244"
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="ASYX Group Location - Tropical Center, Dar es Salaam"
            ></iframe>
        </div>
    </div>
</section>
