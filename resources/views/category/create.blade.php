<form action="{{route('category.store')}}" method="POST">
    @csrf
    <label for="name">Nome do produto</label>
    <input type="text" name="name" id="name">
    <button type="submit">Enviar</button>
</form>
