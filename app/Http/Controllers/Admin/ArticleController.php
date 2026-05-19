<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category' => 'nullable|string|max:255',
            'author' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'pinterest' => 'nullable|url',
            'twitter' => 'nullable|url',
            'website' => 'nullable|url',
            'status' => 'required|in:0,1',
        ]);
        $data['slug'] = Str::slug($data['title']) . '-' . time();
        Article::create($data);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article created successfully.');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $data = $request->validate([
            'category' => 'nullable|string|max:255',
            'author' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'pinterest' => 'nullable|url',
            'twitter' => 'nullable|url',
            'website' => 'nullable|url',
            'status' => 'required|in:0,1',
        ]);
        $data['slug'] = Str::slug($data['title']) . '-' . $article->id;
        $article->update($data);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return back()->with('success', 'Article deleted successfully.');
    }
}