<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProduitsController;
use App\Models\category;
use App\Models\product;
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
// CREATION DES ROUTES QUI PERMET DE CREER LES PAGES 
// Route correspondant aux produits 
Route::get('/produits', [ProduitsController::class,'index']);
Route::get('/produits/{id}', [ProduitsController::class,'show']);
//Route corespondant aux categories
//Route::get('/categorie', [CategorieController::class,'index']);
Route::get('/categorie/{id}',[CategorieController::class,'show']);
//Route corerspondant aux contacts
Route::get('/contact', [ContactController::class,'index']);

//CREATION DES MODELES CATEGORY
route::get('/categories/creer', function(){
    return view('categories.create');

});

route::get('/test/categories', function(){
    return view('test.categories',[
        'categories'=>category::all() //  -> toutes les catégories prensente dans la base de donnée
    ]);
});
Route::get('test/categories/creer', function(){
    $category = category::create([
        'name'=>'test', //Création de la categorie 
    ]);
    return redirect('/test/categories');

});
route::get('test/categories/{id}', function($id){ //id paramètre dynamique et $id permet de recupèrer l'id 
    $category=category::find($id);

    return $category->name;
});// permet de voir la category 





//CREATION DES MODELES POUR NOUS PERMETTRE DE :
route::get('/products/creer', function(){
    return view('products.create');
});



//CREER UN PRODUCT
Route::get('/test/products',function() {
    return view('test.products',[
        'products'=>product::all()
    ]);// on va chercher un dossier test et dedans y a un fichier products.blade.php

});

//LISTE DU PRODUCT
Route::get('/test/products/creer', function(){
    product::create([
        'id'=>'',
        'name'=>'Vêtement',
        'descritpiton'=>'vetement de haute qualité',
        'price'=>'10',
        'discount_price'=>'5',
        'slug'=>'',
        'image'=>'',
        'created_at'=>'2022-01-01',


    ]);
    return redirect('/test/products');//REDIRECTION 

});

//AFFICHER LE PRODUCT
Route::get('test/products/{id}',function($id){
    
        $product = product::find($id);

        return view('test.product',[
            'product'=> $product
        ]);

});



