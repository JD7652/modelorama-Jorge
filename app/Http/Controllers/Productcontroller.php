<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

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

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->branch = $request->branch;
        $product->product_number = $request->product_number;
        $product->price = $request->price;
        $product->desc = $request->desc;

        $product->save();

        return redirect()->route('producto.index');
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->branch = $request->branch;
        $product->product_number = $request->product_number;
        $product->price = $request->price;
        $product->desc = $request->desc;

        $product->save();

        return redirect()->route('producto.index');
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('producto.index');
    }

    public function getReport()
    {
        $products = Product::all();
        $pdf = Pdf::loadView('product.report-product', compact('products'));
        return $pdf->download('reporte-productos.pdf');
    }
}
