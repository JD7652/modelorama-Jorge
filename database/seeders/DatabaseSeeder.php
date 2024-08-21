<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
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
        Product::factory(50)->create();

        // $product1 = new Product();
        // $product1->product_number = 123456;
        // $product1->des = "Esto es una descripcion1";
        // $product1->name = "Coronita";
        // $product1->price = "18.50";
        // $product1->save();

        // $product2 = new Product();
        // $product2->product_number = 123456;
        // $product2->des = "Esto es una descripcion1";
        // $product2->name = "Coronita";
        // $product2->price = "18.50";
        // $product2->save();



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
