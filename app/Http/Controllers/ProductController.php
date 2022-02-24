<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index')->with('products', Product::all());
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return redirect(route('product.create'));
    }

    public function edit(Product $product)
    {
        return view('product.edit')->with('product', $product);
    }

    public function update(Product $product, Request $request)
    {
        $product->update($request->all());
        return redirect(route('product.edit', $product->id));
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'));
    }
}
