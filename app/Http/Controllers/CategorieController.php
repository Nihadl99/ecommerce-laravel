<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        return view('categorie');
    }

    public function show($category)
    {
        return view('categorie-show',[
            'user' => $category,
        ]);

    }
}
