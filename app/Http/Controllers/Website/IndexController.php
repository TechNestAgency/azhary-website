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
        // Get current locale for cache key
        $locale = app()->getLocale();
        
        // Cache teachers and articles for 2 hours to reduce database queries
        $teachers = Cache::remember("homepage_teachers_{$locale}", 7200, function () {
            return Teacher::select('id', 'name', 'name_fr', 'short_description', 'short_description_fr', 'photo', 'rating', 'total_reviews', 'years_experience')
                         ->where('is_active', true)
                         ->orderBy('rating', 'desc')
                         ->orderBy('total_reviews', 'desc')
                         ->take(6)
                         ->get()
                         ->map(function ($teacher) {
                             // Add computed attributes
                             $teacher->localized_name = $teacher->getLocalizedNameAttribute();
                             $teacher->localized_short_description = $teacher->getLocalizedShortDescriptionAttribute();
                             return $teacher;
                         });
        });

        $articles = Cache::remember("homepage_articles_{$locale}", 7200, function () {
            return Article::select('id', 'title', 'content', 'image', 'created_at')
                         ->where('status', true)
                         ->latest('created_at')
                         ->take(3)
                         ->get()
                         ->map(function ($article) {
                             // Add computed attributes
                             $article->excerpt = \Str::limit(strip_tags($article->content), 150);
                             $article->formatted_date = $article->created_at->format('M d, Y');
                             return $article;
                         });
        });

        // Cache page metadata
        $pageMetadata = Cache::remember("homepage_metadata_{$locale}", 14400, function () use ($locale) {
            return [
                'title' => $locale === 'fr' ? 'Madrassat Azhary - Éducation Islamique en Ligne' : 'Madrassat Azhary - Islamic Education Online',
                'description' => $locale === 'fr' 
                    ? 'Apprenez le Coran, l\'arabe et les études islamiques en ligne avec des enseignants qualifiés francophones. Rejoignez notre communauté d\'apprenants dans le monde entier.'
                    : 'Learn Quran, Arabic, and Islamic studies online with qualified French-speaking teachers. Join our community of learners worldwide.',
                'keywords' => $locale === 'fr'
                    ? 'Coran en ligne, apprentissage de l\'arabe, études islamiques, éducation musulmane française, académie islamique en ligne'
                    : 'Quran online, Arabic learning, Islamic studies, French Muslim education, online Islamic academy'
            ];
        });

        return view('website.index', compact('teachers', 'articles', 'pageMetadata'));
    }
}
