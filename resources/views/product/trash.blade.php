@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Nome do Produto</th>
                    <th>Categoria ID</th>
                    <th>Nome da Categoria</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Restaurar</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td><img src="{{asset($product->image)}}" style="width:35px; height:35px" alt=""></td>
                        <td>{{ $product->name }}</td>

                        <td>{{ $product->Category->id }}</td>
                        <td>{{ $product->Category->name }}</td>

                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td><a href="{{ route('product.restore', $product->id) }}">Restaurar</a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
