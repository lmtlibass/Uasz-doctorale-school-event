<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        Auth::user()->roles->first()->name == 'admin'
        ? $articles = Article::paginate(9)
        : $articles = Article::where('user_id', '=', Auth::user()->id)->paginate(9);

        if($articles->isEmpty()){
            $response = "Vous n'avez pas encore publié d'article";
        }
        $response = '';
        return view('articles.index', compact(['articles', 'response']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Article $article)
    {
        return view('articles.form', compact('article'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'tags' => 'required'
        ]);
        
        $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'tags' => $request->tags,
            'user_id' => $user_id
        ]);
        return redirect()->route('article.article.index')->with('success', 'Votre article est enrégistrer avec succés.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.form', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
        return redirect()->route('articles.index')->with('success', 'Votre article est modifier avec succés.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Votre article est supprimer avec succés.');
    }

    public function getArticles()
    {
        $response = '';
        if($response == ''){
            $articles= [];
        }
        $articles = Article::paginate(9);
        return view('articles.index', compact('articles', 'response'));
    }
}
