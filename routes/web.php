<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home');
});


route::get('/produits', function (){
    return view('produit');
});
Route::get('/produits/{id}/12-iphone-xs' , function($id){
    return view('show',['id'=>$id]);
});
route::get('/categorie/{id}/12-smartphone' , function($id){
    return view('show',['id'=>$id]);
});
route::get('/{id}' , function ($id){
    return 'REDIRECT TO' .$id;
});

