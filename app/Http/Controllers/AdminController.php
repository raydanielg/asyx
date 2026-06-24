<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Career;
use App\Models\ContactSubmission;
use App\Models\NewsletterSubscriber;
use App\Models\PageVisit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        $stats = [
            'total_users' => User::count(),
            'admin_users' => User::where('is_admin', true)->count(),
            'recent_users' => User::latest()->take(5)->get(),
        ];

        // Real daily visits for the past 7 days
        $dailyVisits = [];
        $dailyLabels = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);
            $count = PageVisit::whereDate('visited_at', $date->toDateString())->count();
            $dailyVisits[] = $count;
            $dailyLabels[] = $date->format('D');
        }

        // Real monthly visits for the past 6 months
        $monthlyVisits = [];
        $monthlyLabels = [];
        for ($i = 5; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $count = PageVisit::whereYear('visited_at', $month->year)
                ->whereMonth('visited_at', $month->month)
                ->count();
            $monthlyVisits[] = $count;
            $monthlyLabels[] = $month->format('M');
        }

        $totalVisits = PageVisit::count();
        $todayVisits = PageVisit::whereDate('visited_at', today())->count();

        return view('admin.dashboard', compact('stats', 'dailyVisits', 'dailyLabels', 'monthlyVisits', 'monthlyLabels', 'totalVisits', 'todayVisits'));
    }

    public function users(): View
    {
        $users = User::latest()->paginate(20);
        $totalUsers = User::count();
        $adminUsers = User::where('is_admin', true)->count();
        $recentCount = User::where('created_at', '>=', now()->subWeek())->count();

        return view('admin.users', compact('users', 'totalUsers', 'adminUsers', 'recentCount'));
    }

    public function storeUser(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'is_admin' => 'boolean',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'is_admin' => $request->boolean('is_admin'),
        ]);

        return redirect()->route('admin.users')->with('success', 'User created successfully.');
    }

    public function submissions(Request $request): View
    {
        $query = ContactSubmission::latest();

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        $submissions = $query->paginate(20);

        return view('admin.submissions', compact('submissions'));
    }

    public function newsletter(): View
    {
        $subscribers = NewsletterSubscriber::latest()->paginate(20);
        $total = NewsletterSubscriber::count();
        $active = NewsletterSubscriber::where('is_active', true)->count();
        $thisWeek = NewsletterSubscriber::where('created_at', '>=', now()->subWeek())->count();

        return view('admin.newsletter', compact('subscribers', 'total', 'active', 'thisWeek'));
    }

    public function toggleNewsletter(NewsletterSubscriber $subscriber): RedirectResponse
    {
        $subscriber->update(['is_active' => ! $subscriber->is_active]);
        return redirect()->route('admin.newsletter')->with('success', 'Subscriber status updated.');
    }

    public function blog(): View
    {
        $posts = Blog::latest()->paginate(20);
        $total = Blog::count();
        $published = Blog::where('is_published', true)->count();
        $drafts = Blog::where('is_published', false)->count();

        return view('admin.blog', compact('posts', 'total', 'published', 'drafts'));
    }
}
