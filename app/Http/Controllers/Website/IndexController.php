<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        $articles = Article::where('status', true)
            ->latest()
            ->take(3)
            ->get();
        return view('website.index', compact('teachers', 'articles'));
    }
}
