<div>
    {{ session()->get('success') }}
</div>

<a href="{{route('category.index')}}">Categoria</a> <br>
<a href="{{route('category.create')}}">Criar Categoria</a> <br>
<a href="{{route('category.trash')}}">Lixeira Categoria</a> <br>

<table border="1">
    @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td><a href="{{ route('category.edit', $category->id) }}">Editar</a></td>
            <td><a href="{{ route('category.destroy', $category->id) }}">Apagar</a></td>
        </tr>
    @endforeach
</table>
