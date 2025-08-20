<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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
        
        // Debug information
        \Log::info('Language switched', [
            'requested_lang' => $lang,
            'session_locale' => Session::get('locale'),
            'app_locale' => App::getLocale(),
            'session_id' => Session::getId(),
            'session_data' => Session::all()
        ]);
        
        // Force session to be saved immediately
        Session::save();
        
        return redirect()->back();
    }
} 