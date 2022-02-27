<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProduitsController;
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
//Route correspondant à l'accueil
Route::get('/', function () {
    return view('accueil');
});

// Route correspondant aux produits 
Route::get('/produits', [ProduitsController::class,'index']);
Route::get('/produits/{product}', [ProduitsController::class,'show']);
//Route corespondant aux categories
Route::get('/categorie', [CategorieController::class,'index']);
Route::get('/categorie/{category}',[CategorieController::class,'show']);
//Route corerspondant aux contact
Route::get('/contact', [ContactController::class,'index']);

