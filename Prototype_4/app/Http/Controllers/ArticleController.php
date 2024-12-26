<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::all();
        return view('article.index' , compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('article.create' , compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        $article = new Article();

        $article->title = $data['title'];
        $article->content = $data['content'];
        $article->category_id = $data['category_id'];
        $article->user_id = auth()->user()->id;
        $article->save();
        return redirect()->route('article.index')->with('success', 'Article created successfully!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index')->with('success', 'Article deleted successfully!');
    }
}
