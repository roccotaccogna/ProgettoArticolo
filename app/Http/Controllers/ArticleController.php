<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{

    public function __construct() {
        $this -> middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = Article::all();
        return view('articolo.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articolo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        if($request->file('foto'))
    {
        $article = Article::create([
            'nome' => $request->nome,
            'marca' => $request->marca,
            'costo' => $request->costo,
            'foto' => $request->file('foto')->store('public/fotos'),
            'user_id' => Auth::id()
        ]);
    }
        else 
    {
        $article = Article::create([
            'nome' => $request-> nome,
            'marca' => $request-> marca,
            'costo' => $request-> costo,
            'user_id' => Auth::id()
        ]);
    }
         

        return redirect(route('welcome'))->with('status', 'Articolo inserito correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $articles)
    {
        return view('articolo.show', compact(('articles')));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $articles)
    {
        return view ('articolo.edit', compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $articles)
    {
        if ($request->file('foto')){
        $articles->update([
            'nome' => $request->nome,
            'marca' => $request->marca,
            'costo' => $request->costo,
            'foto' => $request->file('foto')->store('public/fotos')
        ]); }
        else {
            $articles->update([
                'nome' => $request->nome,
                'marca' => $request->marca,
                'costo' => $request->costo
            ]);
        }

        return redirect( route ('articolo.show', compact('articles'))) ->with('status', 'Articolo modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $articles)
    {
        $articles->delete();

        return redirect( route ('welcome', compact('articles'))) ->with('status', 'Articolo eliminato correttamente');
    }
}
