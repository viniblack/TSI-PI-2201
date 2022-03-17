<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index()
    {
        return view('tag.index')->with('tags', Tag::all());
    }

    public function create()
    {
        return view('tag.create');
    }

    public function store(Request $request)
    {
        Tag::create($request->all());
        session()->flash('success', 'Tag foi criado com sucesso!');
        return redirect(route('tag.index'));
    }

    
    public function edit(Tag $tag)
    {
        return view('tag.edit')->with('tag', $tag);
    }

    public function update(Tag $tag, Request $request)
    {
        $tag->update($request->all());
        session()->flash('success', 'A tag foi alterado com sucesso!');
        return redirect(route('tag.index', $tag->id));
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        session()->flash('success', 'A tag foi apagado com sucesso!');
        return redirect(route('tag.trash'));
    }

    public function trash()
    {
        return view('tag.trash')->with('tags', Tag::onlyTrashed()->get());
    }

    public function restore($tag_id)
    {
        $tag = Tag::onlyTrashed()->where('id', $tag_id)->first();
        $tag->restore();
        session()->flash('success', 'A tag foi restaurado com sucesso!');
        return redirect(route('tag.index'));
    }
}
