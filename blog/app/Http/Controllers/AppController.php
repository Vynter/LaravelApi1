<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AppController extends Controller
{

    public function app()
    {
        $var = ['a', 'b'];

        return view('layouts.childApp', ['data' => $var, 'id' => 5]);
    }
}