<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\View;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        // Validate the language
        if (!in_array($lang, ['en', 'fr'])) {
            $lang = 'fr';
        }
        
        // Store the selected language in the session
        Session::put('locale', $lang);
        
        // Set the application locale
        App::setLocale($lang);
        
        // Clear view cache to ensure new language is applied
        if (function_exists('app')) {
            try {
                // Clear view cache
                Artisan::call('view:clear');
                
                // Clear route cache if it exists
                if (file_exists(storage_path('framework/cache/routes.php'))) {
                    Artisan::call('route:clear');
                }
                
                // Clear config cache if it exists
                if (file_exists(storage_path('framework/cache/config.php'))) {
                    Artisan::call('config:clear');
                }
                
                // Clear application cache
                Cache::flush();
                
            } catch (\Exception $e) {
                \Log::warning('Cache clearing failed during language switch', [
                    'error' => $e->getMessage(),
                    'locale' => $lang
                ]);
            }
        }
        
        // Force session to be saved immediately
        Session::save();
        
        // Debug information
        \Log::info('Language switched successfully', [
            'requested_lang' => $lang,
            'session_locale' => Session::get('locale'),
            'app_locale' => App::getLocale(),
            'session_id' => Session::getId(),
            'cache_cleared' => true
        ]);
        
        // Redirect back with cache-busting parameter
        $redirect = redirect()->back();
        
        // Add cache-busting headers
        $redirect->header('Cache-Control', 'no-cache, no-store, must-revalidate');
        $redirect->header('Pragma', 'no-cache');
        $redirect->header('Expires', '0');
        
        return $redirect;
    }
    
    /**
     * Get current language status
     */
    public function getCurrentLang()
    {
        return response()->json([
            'current_locale' => App::getLocale(),
            'session_locale' => Session::get('locale'),
            'config_locale' => config('app.locale'),
            'fallback_locale' => config('app.fallback_locale'),
            'session_id' => Session::getId()
        ]);
    }
    
    /**
     * Force refresh language without redirect
     */
    public function refreshLang()
    {
        $currentLang = Session::get('locale', config('app.locale'));
        
        // Clear caches
        try {
            Artisan::call('view:clear');
            Cache::flush();
        } catch (\Exception $e) {
            \Log::warning('Cache clearing failed during language refresh', [
                'error' => $e->getMessage()
            ]);
        }
        
        return response()->json([
            'success' => true,
            'locale' => $currentLang,
            'message' => 'Language refreshed successfully'
        ]);
    }
} 