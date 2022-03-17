@extends('layouts.app')

@section('content')
<form action="{{route('tag.store')}}" method="POST">
    @csrf
    <label for="name">Nome da tag</label>
    <input type="text" name="name" id="name">
    <button type="submit">Enviar</button>
</form>
@endsection