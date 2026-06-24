@extends('layouts.main')

@section('content')
<!-- Hero -->
<section class="relative py-20 lg:py-28 overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);">
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 60px 60px;"></div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-amber-500/20 border border-amber-500/30 rounded-full text-amber-400 text-sm font-semibold mb-6" data-aos="fade-down">
            <i class="fas fa-file-invoice-dollar text-xs"></i> Get a Free Quote
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight" data-aos="fade-up">Request Your Custom Quote</h1>
        <p class="text-slate-400 text-lg max-w-2xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="100">Tell us about your project and we will prepare a tailored proposal with transparent pricing within 48 hours.</p>

        <div class="flex flex-wrap justify-center gap-8 md:gap-16" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center">
                <div class="text-3xl font-extrabold text-amber-400">48 hrs</div>
                <div class="text-sm text-slate-400 mt-1">Turnaround</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-extrabold text-amber-400">0</div>
                <div class="text-sm text-slate-400 mt-1">Hidden Fees</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-extrabold text-amber-400">100%</div>
                <div class="text-sm text-slate-400 mt-1">Customized</div>
            </div>
        </div>
    </div>
</section>

<!-- Quote Form Section -->
<section class="py-16 lg:py-20 bg-slate-50 relative overflow-hidden">
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(226,232,240,0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(226,232,240,0.5) 1px, transparent 1px); background-size: 80px 80px;"></div>
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-amber-50 rounded-full -translate-y-1/2 translate-x-1/4 blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-5xl mx-auto grid lg:grid-cols-2 gap-10 items-start">
            <!-- Left: Image & Info -->
            <div data-aos="fade-right">
                <div class="rounded-2xl overflow-hidden shadow-xl mb-8 border border-slate-100">
                    <img src="/135034.jpg" alt="ASYX Group Solutions" class="w-full h-64 object-cover">
                </div>

                <h3 class="text-2xl font-extrabold text-slate-900 mb-4">Why Request a Quote From Us?</h3>
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-amber-600 text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Tailored Solutions</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">Every quote is customized to your specific business needs and budget.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-amber-600 text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Transparent Pricing</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">No hidden charges. Every cost is itemized and explained clearly.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-amber-600 text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Expert Consultation</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">A dedicated solutions architect will review your requirements personally.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-amber-600 text-sm"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900 text-sm">Fast Response</h4>
                            <p class="text-slate-500 text-sm leading-relaxed">Receive your detailed proposal within 48 hours of submission.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Form -->
            <div data-aos="fade-up">
                <div class="bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-xl relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-400 to-amber-600"></div>

                    <h3 class="text-xl font-bold text-slate-900 mb-2">Get Your Free Quote</h3>
                    <p class="text-slate-500 text-sm mb-6">Fill in the details below and we will get back to you shortly.</p>

                    @if(session('success'))
                    <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-6 mb-6 text-center">
                        <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <i class="fas fa-check text-emerald-600 text-xl"></i>
                        </div>
                        <h4 class="font-bold text-emerald-800 mb-1">Quote Request Received!</h4>
                        <p class="text-emerald-600 text-sm">Our team will prepare your custom proposal and contact you within 48 hours.</p>
                    </div>
                    @endif

                    <form action="{{ route('quote.submit') }}" method="POST" class="space-y-5">
                        @csrf
                        <input type="hidden" name="type" value="quote">

                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Full Name *</label>
                                <input type="text" name="full_name" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="John Doe">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address *</label>
                                <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="john@company.com">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number *</label>
                                <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="+255 123 456 789">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Company / Organization</label>
                                <input type="text" name="company" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="Your Company Ltd">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Service Needed</label>
                                <select name="service_interest" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50">
                                    <option value="">Select service...</option>
                                    <option value="Cybersecurity">Cybersecurity</option>
                                    <option value="Smart Technologies">Smart Technologies</option>
                                    <option value="ICT Infrastructure">ICT Infrastructure</option>
                                    <option value="Software Development">Software Development</option>
                                    <option value="Managed Services">Managed Services</option>
                                    <option value="Hardware">Hardware Supply</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-slate-700 mb-2">Estimated Budget</label>
                                <select name="budget" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50">
                                    <option value="">Select range...</option>
                                    <option value="Under $5,000">Under $5,000</option>
                                    <option value="$5,000 - $20,000">$5,000 - $20,000</option>
                                    <option value="$20,000 - $50,000">$20,000 - $50,000</option>
                                    <option value="$50,000 - $100,000">$50,000 - $100,000</option>
                                    <option value="Above $100,000">Above $100,000</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-2">Project Details</label>
                            <textarea name="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50 resize-none" placeholder="Describe your project, requirements, timeline, and any specific needs..."></textarea>
                        </div>

                        <button type="submit" class="w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white py-4 rounded-xl font-bold text-lg hover:from-amber-600 hover:to-amber-700 transition shadow-lg hover:shadow-amber-500/30 flex items-center justify-center gap-2">
                            <i class="fas fa-file-invoice-dollar mr-2"></i>Request My Free Quote
                        </button>
                        <p class="text-center text-slate-400 text-sm">Your information is confidential and will never be shared.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
