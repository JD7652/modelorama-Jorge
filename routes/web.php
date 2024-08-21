<?php

use App\Http\Controllers\Productcontroller;
use App\Models\Product;
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
    return view('welcome');
});

Route::get('/addP', function () {
    $product = new Product();

    $product->name = 'Corona';
    $product->branch = 'Modelo';
    $product->desc = 'Cerveza 355ml';
    $product->price = '20.00';
    $product->product_number = 86787;

    $product->save();
    return  $product;
});


Route::get('/index-producto', [Productcontroller::class, 'index'])->name('producto.index');


Route::get('/create-producto', [Productcontroller::class, 'create'])->name('producto.create');

Route::get('/show-producto/{product}', [Productcontroller::class, 'show'])->name('producto.show');
