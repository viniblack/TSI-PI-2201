<div>
    {{ session()->get('success') }}
</div>

<a href="{{route('category.index')}}">Produto</a> <br>
<a href="{{route('category.create')}}">Criar Produto</a> <br>
<a href="{{route('category.trash')}}">Lixeira Produto</a> <br>

<table border="1">
    @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td><a href="{{ route('category.restore', $category->id) }}">Restaurar</a></td>
        </tr>
    @endforeach
</table>
