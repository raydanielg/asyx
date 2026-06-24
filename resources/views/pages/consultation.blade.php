@extends('layouts.main')

@section('content')
<!-- Hero -->
<section class="relative py-20 lg:py-28 overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);">
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 60px 60px;"></div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-amber-500/20 border border-amber-500/30 rounded-full text-amber-400 text-sm font-semibold mb-6" data-aos="fade-down">
            <i class="fas fa-comments text-xs"></i> Free Consultation
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight" data-aos="fade-up">Let's Discuss Your Technology Needs</h1>
        <p class="text-slate-400 text-lg max-w-2xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="100">Book a free 30-minute consultation with our experts. No commitment required.</p>

        <!-- Stats strip -->
        <div class="flex flex-wrap justify-center gap-8 md:gap-16" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center">
                <div class="text-3xl font-extrabold text-amber-400">30 min</div>
                <div class="text-sm text-slate-400 mt-1">Free Session</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-extrabold text-amber-400">100+</div>
                <div class="text-sm text-slate-400 mt-1">Experts Available</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-extrabold text-amber-400">0</div>
                <div class="text-sm text-slate-400 mt-1">Commitment</div>
            </div>
        </div>
    </div>
</section>

<!-- Process Steps -->
<section class="py-16 bg-white relative overflow-hidden">
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(226,232,240,0.4) 1px, transparent 1px), linear-gradient(90deg, rgba(226,232,240,0.4) 1px, transparent 1px); background-size: 80px 80px;"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            @php $steps = [
                ['num' => '01', 'title' => 'Fill the Form', 'desc' => 'Tell us about your project, challenges, and goals.'],
                ['num' => '02', 'title' => 'We Reach Out', 'desc' => 'Our team will contact you within 24 hours to schedule.'],
                ['num' => '03', 'title' => 'Get Insights', 'desc' => 'Receive actionable recommendations tailored to your business.'],
            ]; @endphp
            @foreach($steps as $s)
            <div class="text-center group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="w-16 h-16 bg-amber-50 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-100 transition-colors">
                    <span class="text-2xl font-extrabold text-amber-600">{{ $s['num'] }}</span>
                </div>
                <h3 class="font-bold text-slate-900 text-lg mb-2">{{ $s['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $s['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Form Section -->
<section class="py-16 lg:py-20 bg-slate-50 relative overflow-hidden">
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(226,232,240,0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(226,232,240,0.5) 1px, transparent 1px); background-size: 80px 80px;"></div>
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-amber-50 rounded-full -translate-y-1/2 translate-x-1/4 blur-3xl pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-2xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-extrabold text-slate-900 mb-3">Request Your Free Consultation</h2>
                <p class="text-slate-500">Tell us a bit about your needs and we will match you with the right expert.</p>
            </div>

            @if(session('success'))
            <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-8 mb-8 text-center" data-aos="zoom-in">
                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-check text-emerald-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-emerald-800 text-xl mb-2">Request Received!</h3>
                <p class="text-emerald-600">Thank you. Our team will contact you within 24 hours to schedule your free consultation.</p>
            </div>
            @endif

            <form action="{{ route('consultation.submit') }}" method="POST" class="bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-xl" data-aos="fade-up">
                @csrf
                <input type="hidden" name="type" value="consultation">

                <div class="grid md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Full Name *</label>
                        <input type="text" name="full_name" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="John Doe">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address *</label>
                        <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="john@company.com">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number *</label>
                        <input type="tel" name="phone" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="+255 123 456 789">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Company / Organization</label>
                        <input type="text" name="company" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="Your Company Ltd">
                    </div>
                </div>

                <div class="mb-5">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Service Interest</label>
                    <select name="service_interest" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50">
                        <option value="">Select a service...</option>
                        <option value="Cybersecurity">Cybersecurity</option>
                        <option value="Smart Technologies">Smart Technologies</option>
                        <option value="ICT Infrastructure">ICT Infrastructure</option>
                        <option value="Software Development">Software Development</option>
                        <option value="Managed Services">Managed Services</option>
                        <option value="Hardware">Hardware Supply</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Tell Us About Your Project</label>
                    <textarea name="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50 resize-none" placeholder="Describe your challenges, goals, and what you hope to achieve..."></textarea>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white py-4 rounded-xl font-bold text-lg hover:from-amber-600 hover:to-amber-700 transition shadow-lg hover:shadow-amber-500/30">
                    <i class="fas fa-paper-plane mr-2"></i>Schedule My Free Consultation
                </button>
                <p class="text-center text-slate-400 text-sm mt-4">We respect your privacy. Your information will never be shared.</p>
            </form>
        </div>
    </div>
</section>
@endsection
