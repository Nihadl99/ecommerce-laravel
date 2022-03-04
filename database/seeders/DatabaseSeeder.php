<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

         $response = http::get('');
         $genres = $response ->json()['genre'];

         foreach ($genres as $genre){
             category::factory()->create(['name'=> $genre ['name']]);
        }


        $response = http::get('https')
        $products = $response->json()['results'];
        foreach ( products as $ product){
            product::factory()->create()[
                'title' => $product['tilte'],
                'description'=> $product['overview'],
                'created_at' => $product['create_date'],
                'image' => $product['image'],
            ]
        }



         category::factory(30)->create();
         ;


    
    }       
    


}
