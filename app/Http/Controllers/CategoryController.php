<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index')->with('categories', Category::all());
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $category = Category::create($request->all());
        session()->flash('success', 'A categoria foi criado com sucesso!');
        return redirect(route('category.index'));
    }

    public function edit(Category $category)
    {
        return view('category.edit')->with('category', $category);
    }

    public function update(Category $category, Request $request)
    {
        $category->update($request->all());
        session()->flash('success', 'A categoria foi alterado com sucesso!');
        return redirect(route('category.index', $category->id));
    }

    public function destroy(Category $category){
        $category->delete();
        session()->flash('success', 'A categoria foi apagado com sucesso!');
        return redirect(route('category.index'));

    }
}
