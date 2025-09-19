<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocaleByIP
{
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();

        // Default bahasa Inggris
        $locale = 'en';

        // Kalau IP Indonesia (contoh sederhana)
        if (str_starts_with($ip, '36.') || str_starts_with($ip, '103.')) {
            $locale = 'id';
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
