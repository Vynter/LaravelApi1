<?php

namespace App\Http\Controllers;

use App\Article;
use App\Mail\NewArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ArtController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); // si vous n'etes pas co ca vous renvoi a login
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all(); //équivalent de select * dans article

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['content' => 'required']); //validateur

        $article = new Article(['content' => $request->get('content')]);
        $article->save();

        if ($request->imagez) { // si on a pas upload l'image rien ne serait upload
            $request->imagez->storeAs('articles', $article->id . '.png');
        }
        $user = Auth::user(); // current user
        Mail::to($user->email)->send(new NewArticle($article));

        return redirect('/articles')->with('success', 'votre article a été sauvegardé'); // renvoi a index qui affiche le contenu de tout
        //le with passe des info flash en session
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(['content' => 'required']);

        $article = Article::find($id);
        $article->content = $request->get('content');
        $article->save();
        return redirect('articles')->with('update', 'votre article viens d\'être mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles')->with('error', 'votre article a été supprimer');
    }
}