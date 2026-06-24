@extends('layouts.main')

@section('content')
<!-- Hero -->
<section class="relative py-20 lg:py-28 overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);">
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 60px 60px;"></div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-amber-500/20 border border-amber-500/30 rounded-full text-amber-400 text-sm font-semibold mb-6" data-aos="fade-down">
            <i class="fas fa-phone text-xs"></i> Talk to Sales
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight" data-aos="fade-up">Connect With Our Sales Team</h1>
        <p class="text-slate-400 text-lg max-w-2xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="100">Speak with a dedicated account manager about pricing, partnerships, licensing, and enterprise solutions.</p>

        <div class="flex flex-wrap justify-center gap-8 md:gap-16" data-aos="fade-up" data-aos-delay="200">
            <div class="text-center">
                <div class="text-3xl font-extrabold text-amber-400">24 hrs</div>
                <div class="text-sm text-slate-400 mt-1">Response Time</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-extrabold text-amber-400">Dedicated</div>
                <div class="text-sm text-slate-400 mt-1">Account Manager</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-extrabold text-amber-400">Flexible</div>
                <div class="text-sm text-slate-400 mt-1">Pricing Plans</div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Info -->
<section class="py-16 bg-white relative overflow-hidden">
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(226,232,240,0.4) 1px, transparent 1px), linear-gradient(90deg, rgba(226,232,240,0.4) 1px, transparent 1px); background-size: 80px 80px;"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            @php $items = [
                ['icon' => 'fa-building', 'title' => 'Enterprise Solutions', 'desc' => 'Volume pricing, SLAs, and dedicated support for large organizations.'],
                ['icon' => 'fa-handshake', 'title' => 'Partnerships', 'desc' => 'Become a reseller or technology partner with competitive margins.'],
                ['icon' => 'fa-key', 'title' => 'Licensing', 'desc' => 'Software licensing, maintenance agreements, and renewals.'],
            ]; @endphp
            @foreach($items as $item)
            <div class="text-center p-6 bg-slate-50 rounded-2xl border border-slate-100 hover:border-amber-300 hover:shadow-lg transition-all" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                    <i class="fas {{ $item['icon'] }} text-amber-600"></i>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">{{ $item['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $item['desc'] }}</p>
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
                <h2 class="text-3xl font-extrabold text-slate-900 mb-3">Let's Start the Conversation</h2>
                <p class="text-slate-500">Fill in your details and a sales representative will reach out within 24 hours.</p>
            </div>

            @if(session('success'))
            <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-8 mb-8 text-center" data-aos="zoom-in">
                <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-check text-emerald-600 text-2xl"></i>
                </div>
                <h3 class="font-bold text-emerald-800 text-xl mb-2">Message Sent!</h3>
                <p class="text-emerald-600">A sales representative will contact you within 24 hours to discuss your needs.</p>
            </div>
            @endif

            <form action="{{ route('talk-to-sales.submit') }}" method="POST" class="bg-white rounded-2xl p-8 md:p-10 border border-slate-100 shadow-xl" data-aos="fade-up">
                @csrf
                <input type="hidden" name="type" value="sales">

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
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Company Name *</label>
                        <input type="text" name="company" required class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50" placeholder="Your Company Ltd">
                    </div>
                </div>

                <div class="mb-5">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">What are you interested in?</label>
                    <select name="service_interest" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50">
                        <option value="">Select an option...</option>
                        <option value="Enterprise Quote">Enterprise Quote</option>
                        <option value="Reseller Partnership">Reseller Partnership</option>
                        <option value="Software Licensing">Software Licensing</option>
                        <option value="Bulk Hardware Order">Bulk Hardware Order</option>
                        <option value="Managed Services Contract">Managed Services Contract</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">How Can We Help?</label>
                    <textarea name="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 outline-none transition bg-slate-50 resize-none" placeholder="Tell us about your organization size, current setup, and what you are looking for..."></textarea>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white py-4 rounded-xl font-bold text-lg hover:from-amber-600 hover:to-amber-700 transition shadow-lg hover:shadow-amber-500/30">
                    <i class="fas fa-phone mr-2"></i>Request a Call From Sales
                </button>
                <p class="text-center text-slate-400 text-sm mt-4">Prefer email? Reach us directly at sales@asyxgroup.com</p>
            </form>
        </div>
    </div>
</section>
@endsection
