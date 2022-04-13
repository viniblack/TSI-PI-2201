@extends('layouts.app')

@section('content')
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Nome do produto</label>
        <input type="text" name="name" id="name">
        <label for="description">Descrição</label>
        <input type="text" name="description" id="description">
        <label for="price">Preço</label>
        <input type="number" step="0.1" name="price" id="price">
        <label for="stock">estoque</label>
        <input type="number" name="stock" id="stock">
        <label for="image">Imagem</label>
        <input type="file" name="image" id="image">
        <label for="category">Selecione uma categoria</label>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <select multiple name="tags[]">
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
        <button type="submit">Enviar</button>
    </form>
@endsection