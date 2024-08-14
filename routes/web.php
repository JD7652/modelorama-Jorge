<?php

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


Route::get('/index-productos', function () {
    // $product = Product::find(2);  //Esto es un equivalente a un select
    // //Select * from products where id=2;


    /*
    //crear nuevo producto
    $product = new Product();

    $product->name = 'Pacifico media';
    $product->product_number = '5543';
    $product->desc = 'Cerveza 355ml, clara larger';
    $product->branch = 'Pacifico';
    $product->price = '20.00';

    $product->save();
*/

    $product = Product::orderBy('name', 'desc')
        ->select('name', 'price')  //Esto aydua a solamente seleccionar las filas o columnas que uqiero ver nada más
        ->take(2)
        ->get();

    return $product;
});
