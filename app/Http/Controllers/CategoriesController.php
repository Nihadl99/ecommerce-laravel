<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
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
