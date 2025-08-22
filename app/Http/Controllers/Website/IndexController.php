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
        // Enhanced caching with longer duration and optimized queries
        $teachers = Cache::remember('homepage_teachers_v2', 7200, function () {
            return Teacher::select('id', 'name', 'short_description', 'photo', 'rating', 'total_reviews')
                         ->where('is_active', true)
                         ->orderBy('rating', 'desc')
                         ->orderBy('total_reviews', 'desc')
                         ->take(6)
                         ->get()
                         ->map(function ($teacher) {
                             // Pre-compute localized data to reduce view processing
                             $teacher->localized_name = $teacher->name;
                             $teacher->localized_short_description = $teacher->short_description;
                             return $teacher;
                         });
        });

        $articles = Cache::remember('homepage_articles_v2', 7200, function () {
            return Article::select('id', 'title', 'content', 'image', 'created_at')
                         ->where('status', true)
                         ->latest()
                         ->take(3)
                         ->get();
        });

        // Add cache headers for better browser caching
        return response()
            ->view('website.index', compact('teachers', 'articles'))
            ->header('Cache-Control', 'public, max-age=3600, s-maxage=7200')
            ->header('Vary', 'Accept-Language');
    }
}
