@extends('layouts.app')

@section('content')
    <form action="{{ route('tag.edit', $tag->id) }}" method="POST">
        @csrf
        @method("PUT")
        <label for="name">Nome da Tag</label>
        <input type="text" name="name" id="name" value="{{ $tag->name }}">

        <button type="submit">Enviar</button>
    </form>
@endsection
