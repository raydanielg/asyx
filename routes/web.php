<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::middleware(SetLocale::class)->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/blog/{slug}', function ($slug) {
        $blog = \App\Models\Blog::where('slug', $slug)->where('is_published', true)->firstOrFail();
        $related = \App\Models\Blog::where('id', '!=', $blog->id)
            ->where('is_published', true)
            ->where('category', $blog->category)
            ->take(3)
            ->get();
        if ($related->count() < 3) {
            $more = \App\Models\Blog::where('id', '!=', $blog->id)
                ->where('is_published', true)
                ->whereNotIn('id', $related->pluck('id'))
                ->take(3 - $related->count())
                ->get();
            $related = $related->merge($more);
        }
        return view('blog.show', compact('blog', 'related'));
    })->name('blog.show');

    Route::get('/careers', function () {
        $careers = \App\Models\Career::where('is_active', true)
            ->where(function($q) { $q->whereNull('deadline')->orWhere('deadline', '>=', now()); })
            ->orderBy('created_at', 'desc')
            ->get();
        return view('careers.index', compact('careers'));
    })->name('careers.index');

    Route::get('/careers/{slug}', function ($slug) {
        $career = \App\Models\Career::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('careers.show', compact('career'));
    })->name('careers.show');

    Route::post('/careers/{slug}/apply', function ($slug) {
        $career = \App\Models\Career::where('slug', $slug)->where('is_active', true)->firstOrFail();

        $validated = request()->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'portfolio_url' => 'nullable|url|max:255',
            'cover_letter' => 'nullable|string',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        $cvPath = null;
        if (request()->hasFile('cv')) {
            $cvPath = request()->file('cv')->store('cvs', 'public');
        }

        \App\Models\JobApplication::create([
            'career_id' => $career->id,
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'portfolio_url' => $validated['portfolio_url'] ?? null,
            'cover_letter' => $validated['cover_letter'] ?? null,
            'cv_path' => $cvPath,
        ]);

        return redirect()->back()->with('success', true);
    })->name('careers.apply');

    // Consultation page
    Route::get('/consultation', function () {
        return view('pages.consultation');
    })->name('consultation');

    Route::post('/consultation', function () {
        $validated = request()->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'company' => 'nullable|string|max:255',
            'service_interest' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);
        $validated['type'] = 'consultation';
        \App\Models\ContactSubmission::create($validated);
        return redirect()->route('consultation')->with('success', true);
    })->name('consultation.submit');

    // Proposal page
    Route::get('/proposal', function () {
        return view('pages.proposal');
    })->name('proposal');

    Route::post('/proposal', function () {
        $validated = request()->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'company' => 'required|string|max:255',
            'budget' => 'nullable|string|max:255',
            'service_interest' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);
        $validated['type'] = 'proposal';
        \App\Models\ContactSubmission::create($validated);
        return redirect()->route('proposal')->with('success', true);
    })->name('proposal.submit');

    // Talk to Sales page
    Route::get('/talk-to-sales', function () {
        return view('pages.talk-to-sales');
    })->name('talk-to-sales');

    Route::post('/talk-to-sales', function () {
        $validated = request()->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'company' => 'required|string|max:255',
            'service_interest' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);
        $validated['type'] = 'sales';
        \App\Models\ContactSubmission::create($validated);
        return redirect()->route('talk-to-sales')->with('success', true);
    })->name('talk-to-sales.submit');

    // Contact form AJAX endpoint
    Route::post('/contact-submit', function () {
        $validated = request()->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        $validated['type'] = 'contact';
        $validated['status'] = 'new';
        \App\Models\ContactSubmission::create($validated);
        return response()->json(['success' => true]);
    })->name('contact.submit');

    // Get a Quote page
    Route::get('/get-quote', function () {
        return view('pages.get-quote');
    })->name('quote');

    Route::post('/get-quote', function () {
        $validated = request()->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'company' => 'nullable|string|max:255',
            'budget' => 'nullable|string|max:255',
            'service_interest' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);
        $validated['type'] = 'quote';
        \App\Models\ContactSubmission::create($validated);
        return redirect()->route('quote')->with('success', true);
    })->name('quote.submit');

    // Newsletter AJAX subscription
    Route::post('/newsletter/subscribe', function () {
        $validated = request()->validate([
            'email' => 'required|email|max:255',
            'name' => 'nullable|string|max:255',
        ]);

        $exists = \App\Models\NewsletterSubscriber::where('email', $validated['email'])->first();
        if ($exists) {
            return response()->json(['success' => false, 'message' => 'Already subscribed'], 422);
        }

        \App\Models\NewsletterSubscriber::create([
            'email' => $validated['email'],
            'name' => $validated['name'] ?? null,
            'is_active' => true,
        ]);

        return response()->json(['success' => true]);
    })->name('newsletter.subscribe');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Admin routes - protected by IsAdmin middleware
Route::middleware(['auth', IsAdmin::class])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});
