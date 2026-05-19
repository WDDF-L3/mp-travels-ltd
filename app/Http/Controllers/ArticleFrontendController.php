<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleFrontendController extends Controller
{
    public function show($slug)
    {
        $article = Article::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        $latestArticles = Article::where('status', 1)
            ->where('id', '!=', $article->id)
            ->latest()
            ->take(5)
            ->get();

        return view('frontend.article-details', compact('article', 'latestArticles'));
    }
}