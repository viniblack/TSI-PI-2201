@extends('layouts.app')

@section('content')
<form action="{{route('category.edit', $category->id)}}" method="POST">
    @csrf
    @method("PUT")
    <label for="name">Nome da categoria</label>
    <input type="text" name="name" id="name" value="{{$category->name}}">

    <button type="submit">Enviar</button>
</form>
@endsection