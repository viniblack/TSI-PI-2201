<form action="{{ route('product.edit', $product->id) }}" method="POST">
    @csrf
    @method("PUT")
    <label for="name">Nome do produto</label>
    <input type="text" name="name" id="name" value="{{ $product->name }}">

    <label for="description">Descrição</label>
    <input type="text" name="description" id="description" value="{{ $product->description }}">

    <label for="price">Preço</label>
    <input type="number" step="0.1" name="price" id="price" value="{{ $product->price }}">

    <label for="stock">estoque</label>
    <input type="number" name="stock" id="stock" value="{{ $product->stock }}">

    <select name="category_id" id="">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}</option>
        @endforeach
    </select>

    <button type="submit">Enviar</button>
</form>
