<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user has selected a language
        if (Session::has('locale')) {
            $locale = Session::get('locale');
            // Validate the locale
            if (in_array($locale, ['en', 'fr'])) {
                App::setLocale($locale);
                
                // Debug information
                \Log::info('SetLocale middleware - Setting locale', [
                    'session_locale' => $locale,
                    'app_locale' => App::getLocale(),
                    'request_url' => $request->url()
                ]);
            }
        } else {
            // If no session locale, use default (French)
            App::setLocale('fr');
            
            // Debug information
            \Log::info('SetLocale middleware - Using default locale', [
                'session_locale' => 'not set',
                'app_locale' => App::getLocale(),
                'request_url' => $request->url()
            ]);
        }
        
        return $next($request);
    }
} 