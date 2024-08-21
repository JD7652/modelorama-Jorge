<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function index()
    {
        $products = Product::paginate();
        return view('product.index-producto', compact('products'));
    }

    public function create()
    {
        return view('product.create-producto');
    }

    public function show($product)
    {
        $productDetail = Product::find($product);
        //return $productDetail;
        return view('product.show-producto', compact('productDetail'));
    }
}
