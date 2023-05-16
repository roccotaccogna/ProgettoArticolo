<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome(){
        $articles = Article::paginate(3);

        return view('welcome', compact('articles'));
    }

    public function profile(){
        return view('myprofile');
    }

    public function authorList(User $user){
        $article = $user->articles;

        return view('articolo.list', compact('article'));

    }    
}
