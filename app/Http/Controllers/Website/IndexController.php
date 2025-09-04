<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function index()
    {
        // Cache teachers and articles for 1 hour to reduce database queries
        $teachers = Cache::remember('homepage_teachers', 3600, function () {
            return Teacher::select('id', 'name', 'name_fr', 'short_description', 'short_description_fr', 'photo', 'rating', 'total_reviews')
                         ->where('is_active', true)
                         ->take(6)
                         ->get();
        });

        $articles = Cache::remember('homepage_articles', 3600, function () {
            return Article::select('id', 'title', 'content', 'image', 'created_at')
                         ->where('status', true)
                         ->latest()
                         ->take(3)
                         ->get();
        });

        return view('website.index', compact('teachers', 'articles'));
    }
}
