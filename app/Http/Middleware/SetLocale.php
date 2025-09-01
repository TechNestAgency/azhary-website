<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Middleware\Next)  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if user has selected a language
        if (Session::has('locale')) {
            $locale = Session::get('locale');
            
            // Validate the locale
            if (in_array($locale, ['en', 'fr'])) {
                // Only change locale if it's different from current
                if (App::getLocale() !== $locale) {
                    App::setLocale($locale);
                    
                    // Clear any cached translations for the new locale
                    Cache::forget('translations_' . $locale);
                    
                    // Debug information
                    \Log::info('SetLocale middleware - Locale changed', [
                        'old_locale' => App::getLocale(),
                        'new_locale' => $locale,
                        'session_locale' => $locale,
                        'request_url' => $request->url(),
                        'user_agent' => $request->userAgent()
                    ]);
                }
            } else {
                // Invalid locale in session, reset to default
                Session::forget('locale');
                App::setLocale('fr');
                
                \Log::warning('SetLocale middleware - Invalid locale in session', [
                    'invalid_locale' => $locale,
                    'reset_to' => 'fr',
                    'request_url' => $request->url()
                ]);
            }
        } else {
            // If no session locale, use default (French)
            if (App::getLocale() !== 'fr') {
                App::setLocale('fr');
                
                \Log::info('SetLocale middleware - Using default locale', [
                    'session_locale' => 'not set',
                    'app_locale' => App::getLocale(),
                    'request_url' => $request->url()
                ]);
            }
        }
        
        // Add cache-busting headers for language-sensitive content
        $response = $next($request);
        
        // Add headers to prevent caching of language-specific content
        $response->header('Vary', 'Accept-Language');
        $response->header('Cache-Control', 'private, must-revalidate');
        
        return $response;
    }
} 