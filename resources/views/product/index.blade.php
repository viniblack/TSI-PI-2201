@extends('layouts.app')

@section('content')
    <a class="btn btn-lg btn-success float-end me-5" href=" {{ route('product.create') }}">
        Criar Produto
    </a>
    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Produto</th>
                    <th>Categoria ID</th>
                    <th>Nome da Categoria</th>
                    <th>Tags</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Editar</th>
                    <th>Apagar</th>

                </tr>
            </thead>
            <tbody >
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>

                        <td>{{ $product->Category->id }}</td>
                        <td>{{ $product->Category->name }}</td>

                        <td style="width: 10rem" id="tag">
                            @foreach ($product->Tags()->get() as $tag)
                            <p style="word-break: break-word;" class="d-inline m-0 p-0 text-wrap">
                                {{ $tag->name }} 
                            </p>
                            @endforeach
                        </td>

                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td><a href="{{ route('product.edit', $product->id) }}">Editar</a></td>
                        <td><a href="{{ route('product.destroy', $product->id) }}">Apagar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
