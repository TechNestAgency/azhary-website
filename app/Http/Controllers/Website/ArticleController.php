<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = Article::query();
        $articles = $query->published()->paginate(9);

        return view('website.articles.index', compact('articles'));
    }

    public function show($id)
    {
        // First try to find the article without the published scope
        $article = Article::find($id);

        if (!$article) {
            abort(404, 'Article not found');
        }

        // Then check if it's published
        if (!$article->status) {
            abort(404, 'Article is not published');
        }

        // Get related articles in the current locale
        $relatedArticles = Article::with(['author'])
            ->published()
            ->where('id', '!=', $article->id)
            ->latest()
            ->take(4)
            ->get();

        return view('website.articles.show', compact('article', 'relatedArticles'));
    }
} 