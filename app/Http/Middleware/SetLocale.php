<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->query('lang');

        if ($locale && in_array($locale, ['en', 'sw'])) {
            app()->setLocale($locale);
            session(['locale' => $locale]);
        } elseif (session('locale') && in_array(session('locale'), ['en', 'sw'])) {
            app()->setLocale(session('locale'));
        }

        return $next($request);
    }
}
