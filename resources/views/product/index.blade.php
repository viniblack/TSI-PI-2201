<div>
    {{ session()->get('success') }}
</div>

<table>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td><a href="{{ route('product.edit', $product->id) }}">Editar</a></td>
            <td><a href="{{ route('product.destroy', $product->id) }}">Apagar</a></td>
        </tr>
    @endforeach
</table>
