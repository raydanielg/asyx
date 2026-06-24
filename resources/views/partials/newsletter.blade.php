<!-- Newsletter Subscription -->
<section class="newsletter py-14 bg-gradient-to-br from-amber-500 via-amber-600 to-amber-700 relative overflow-hidden">
    <!-- Decorative circles -->
    <div class="absolute top-0 right-0 w-72 h-72 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/4"></div>
    <div class="absolute bottom-0 left-0 w-56 h-56 bg-white/10 rounded-full translate-y-1/2 -translate-x-1/4"></div>

    <div class="container mx-auto px-6 relative z-10" data-aos="fade-up">
        <div class="max-w-2xl mx-auto bg-white/10 backdrop-blur-md rounded-3xl p-8 md:p-10 border border-white/20 shadow-2xl">
            <div class="text-center">
                <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-envelope-open-text text-white text-lg"></i>
                </div>
                <h3 class="text-2xl md:text-3xl font-extrabold text-white mb-2">Stay in the Loop</h3>
                <p class="text-amber-100 text-sm mb-6">Get the latest technology insights and company updates. No spam, ever.</p>

                <!-- Success -->
                <div id="newsletterSuccess" class="hidden bg-white/20 border border-white/30 rounded-xl p-4 mb-5 text-center">
                    <p class="text-white text-sm font-medium"><i class="fas fa-check text-white mr-2"></i>Subscribed! Check your inbox.</p>
                </div>
                <!-- Error -->
                <div id="newsletterError" class="hidden bg-red-500/20 border border-red-500/30 rounded-xl p-4 mb-5 text-center">
                    <p class="text-red-100 text-sm font-medium"><i class="fas fa-circle-exclamation mr-2"></i>Already subscribed or error.</p>
                </div>

                <form id="newsletterForm" class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                    @csrf
                    <input type="email" name="email" required class="flex-1 px-5 py-3.5 rounded-xl bg-white/20 border border-white/20 text-white placeholder-amber-100 outline-none focus:bg-white/30 focus:border-white/40 transition text-sm" placeholder="Enter your email address">
                    <button type="submit" id="newsletterBtn" class="bg-white text-amber-600 px-6 py-3.5 rounded-xl font-bold text-sm hover:bg-amber-50 transition shadow-lg flex items-center justify-center gap-2 whitespace-nowrap flex-shrink-0">
                        <span id="nlBtnText">Subscribe</span>
                        <i id="nlBtnIcon" class="fas fa-paper-plane text-xs"></i>
                        <svg id="nlBtnSpinner" class="hidden animate-spin h-4 w-4 text-amber-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>
                </form>
                <p class="text-center text-amber-200/70 text-xs mt-4">Unsubscribe anytime. We respect your privacy.</p>
            </div>
        </div>
    </div>

    <script>
    (function() {
        const form = document.getElementById('newsletterForm');
        const btn = document.getElementById('newsletterBtn');
        const btnText = document.getElementById('nlBtnText');
        const btnIcon = document.getElementById('nlBtnIcon');
        const btnSpinner = document.getElementById('nlBtnSpinner');
        const successDiv = document.getElementById('newsletterSuccess');
        const errorDiv = document.getElementById('newsletterError');

        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            successDiv.classList.add('hidden');
            errorDiv.classList.add('hidden');

            btn.disabled = true;
            btnText.textContent = 'Subscribing...';
            btnIcon.classList.add('hidden');
            btnSpinner.classList.remove('hidden');

            const formData = new FormData(form);

            try {
                const response = await fetch('{{ route("newsletter.subscribe") }}', {
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
                    form.reset();
                } else {
                    throw new Error(data.message || 'Failed');
                }
            } catch (err) {
                errorDiv.classList.remove('hidden');
            } finally {
                btn.disabled = false;
                btnText.textContent = 'Subscribe';
                btnIcon.classList.remove('hidden');
                btnSpinner.classList.add('hidden');
            }
        });
    })();
    </script>
</section>
