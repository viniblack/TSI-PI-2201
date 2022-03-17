@extends('layouts.app')

@section('content')
    <a class="btn btn-lg btn-success float-end me-5" href="{{ route('category.create') }}">
        Criar Categorias
    </a>
    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome da Categoria</th>
                    <th>Quantidade de Produtos na Categoria</th>
                    <th>Editar</th>
                    <th>Apagar</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->Products->count() }}</td>
                        <td><a href="{{ route('category.edit', $category->id) }}">Editar</a></td>
                        <td><a href="{{ route('category.destroy', $category->id) }}">Apagar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
