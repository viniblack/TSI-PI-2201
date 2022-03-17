@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome da Tag</th>
                  

                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>

                        <td><a href="{{ route('tag.restore', $tag->id) }}">Restaurar</a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
