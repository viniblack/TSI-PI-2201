<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index')->with('products', Product::all());
    }

    public function create()
    {
        return view('product.create')->with(['categories' => Category::all(), 'tags' => Tag::all()]);
    }

    public function store(Request $request)
    {
        $image = "storage/" . $request->file('image')->store('itens');

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'image' => $image

        ]);
        $product->Tags()->sync($request->tags);

        session()->flash('success', 'O produto foi criado com sucesso!');
        return redirect(route('product.index'));
    }

    public function edit(Product $product)
    {
        return view('product.edit')->with(['product' => $product, 'categories' => Category::all(), 'tags' => Tag::all()]);
    }

    public function update(Product $product, Request $request)
    {
        if($request->image){
            $image = "storage/" . $request->file('image')->store('itens');
            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock,
                'category_id' => $request->category_id,
                'image' => $image
            ]);
        } else {
            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock,
                'category_id' => $request->category_id,
            ]);
        }
        $product->Tags()->sync($request->tags);

        session()->flash('success', 'O produto foi alterado com sucesso!');
        return redirect(route('product.index', $product->id));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('success', 'O produto foi apagado com sucesso!');
        return redirect(route('product.index'));
    }

    public function trash()
    {
        return view('product.trash')->with('products', Product::onlyTrashed()->get());
    }

    public function restore($product_id)
    {
        $product = Product::onlyTrashed()->where('id', $product_id)->first();
        $product->restore();
        session()->flash('success', 'O produto foi restaurado com sucesso!');
        return redirect(route('product.index'));
    }
}
