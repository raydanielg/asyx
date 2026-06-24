<?php

namespace App\Http\Middleware;

use App\Models\PageVisit;
use Closure;
use Illuminate\Http\Request;

class TrackPageVisits
{
    public function handle(Request $request, Closure $next)
    {
        // Don't track admin routes or assets
        if ($request->is('admin/*') || $request->is('*.css') || $request->is('*.js') || $request->is('*.png') || $request->is('*.jpg') || $request->is('*.ico')) {
            return $next($request);
        }

        // Rate limit: one visit per IP per page per hour
        $oneHourAgo = now()->subHour();
        $existing = PageVisit::where('page', $request->path())
            ->where('ip_address', $request->ip())
            ->where('visited_at', '>=', $oneHourAgo)
            ->first();

        if (! $existing) {
            PageVisit::create([
                'page' => $request->path(),
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'visited_at' => now(),
            ]);
        }

        return $next($request);
    }
}
