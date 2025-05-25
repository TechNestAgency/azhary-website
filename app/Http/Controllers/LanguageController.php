<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        // Validate the language
        if (!in_array($lang, ['en', 'fr'])) {
            $lang = 'fr';
        }
        
        // Store the selected language in the session
        session()->put('locale', $lang);
        
        // Set the application locale
        app()->setLocale($lang);
        
        return redirect()->back();
    }
} 