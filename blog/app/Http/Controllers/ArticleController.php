<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class ArticleController extends Controller
{

    public function index()
    {
        $data = ['a', 'b'];


        return view('article.index', ['article' => $data]);
    }
    public function content()
    {
        $url = route("opt", ['a' => 5]);
        //dd($url);
        $data = ['aze'];
        return redirect()->route("opt", ['data' => $data]);
    }
}