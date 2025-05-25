<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|array',
            'title.en' => 'required|string|max:255',
            'title.fr' => 'required|string|max:255',
            'content' => 'required|array',
            'content.en' => 'required|string',
            'content.fr' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'boolean',
            'meta_description' => 'nullable|array',
            'meta_description.en' => 'nullable|string|max:255',
            'meta_description.fr' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|array',
            'meta_keywords.en' => 'nullable|string|max:255',
            'meta_keywords.fr' => 'nullable|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['title']['en']);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        Article::create($validated);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article created successfully.');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|array',
            'title.en' => 'required|string|max:255',
            'title.fr' => 'required|string|max:255',
            'content' => 'required|array',
            'content.en' => 'required|string',
            'content.fr' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'boolean',
            'meta_description' => 'nullable|array',
            'meta_description.en' => 'nullable|string|max:255',
            'meta_description.fr' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|array',
            'meta_keywords.en' => 'nullable|string|max:255',
            'meta_keywords.fr' => 'nullable|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['title']['en']);

        if ($request->hasFile('image')) {
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        $article->update($validated);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }
        
        $article->delete();

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article deleted successfully.');
    }
} 