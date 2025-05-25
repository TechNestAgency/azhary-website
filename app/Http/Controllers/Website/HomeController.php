<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('specialization')->get();
        $articles = Article::with(['category', 'author'])
            ->published()
            ->latest()
            ->take(6)
            ->get();

        return view('website.index', compact('teachers', 'articles'));
    }
} 