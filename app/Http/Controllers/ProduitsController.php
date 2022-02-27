<?php

namespace App\Http\Controllers;



class ProduitsController 

{
    public function index()
    {
        return view('produits',[
            'name' => 'tout le monde',//c'est un tableaux avec une variable name
            'numbers' =>[1 ,3,7],
        ]);
    }

    public function show($product)
    {
        return view ('produits-show',[
            'name' => $product,
            'numbers' => [1,3,4],
             
        ]);// pour pouvoir afficher quelque choses qu'on ecrit dans l'url 
    }



}
