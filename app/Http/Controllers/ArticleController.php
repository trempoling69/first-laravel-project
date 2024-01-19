<?php

namespace App\Http\Controllers;

use App\Http\Requests\Article as RequestsArticle;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Test\Constraint\RequestAttributeValueSame;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.all', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('articles.create', ['article' => new Article()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestsArticle $request)
    {
        Article::create($request->validated());
        return redirect()->route('article.all')->with('success', 'créer avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestsArticle $request, string $id)
    {
        Article::find($id)->update($request->validated());
        return redirect()->route('article.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
