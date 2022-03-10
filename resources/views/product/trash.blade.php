<div>
    {{ session()->get('success') }}
</div>

<table>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>

            <td>{{ $product->Category->id }}</td>
            <td>{{ $product->Category->name }}</td>

            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td><a href="{{ route('product.restore', $product->id) }}">Restaurar</a></td>

        </tr>
    @endforeach
</table>
