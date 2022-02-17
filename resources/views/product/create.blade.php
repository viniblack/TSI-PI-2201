<form action="/product/create" method="POST">
    @csrf
    <label for="name">Nome do produto</label>
    <input type="text" name="name" id="name">
    <label for="description">Descrição</label>
    <input type="text" name="description" id="description">
    <label for="price">Preço</label>
    <input type="number" step="0.1" name="price" id="price">
    <label for="stock">estoque</label>
    <input type="number" name="stock" id="stock">
    <button type="submit">Enviar</button>
</form>
