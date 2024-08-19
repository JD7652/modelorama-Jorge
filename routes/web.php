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


Route::get('/index-producto', [Productcontroller::class, 'index']);


Route::get('/create-producto', [Productcontroller::class, 'create']);

Route::get('/show-producto', [Productcontroller::class, 'show']);
