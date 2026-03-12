<h1>Editar Oferta</h1>
<form action="/ofertas/{{ $oferta->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="titulo" value="{{ $oferta->titulo }}" required><br><br>
    <input type="date" name="vigencia" value="{{ $oferta->vigencia }}" required><br><br>
    <input type="text" name="tienda" value="{{ $oferta->tienda }}" required><br><br>
    <input type="number" step="0.01" name="precio_original" value="{{ $oferta->precio_original }}" required><br><br>
    <input type="number" step="0.01" name="precio_descuento" value="{{ $oferta->precio_descuento }}" required><br><br>
    <button type="submit">Actualizar Oferta</button>
</form>
<style>
    body { background-color: #dbe4ff; font-family: serif; color: #4a235a; padding: 40px; }
    input { display: block; margin-bottom: 10px; padding: 8px; width: 300px; }
</style>

<h1>Editar Oferta #{{ $oferta->id }}</h1>

<form action="/ofertas/{{ $oferta->id }}" method="POST">
    @csrf
    @method('PUT')
    
    <label>Título:</label>
    <input type="text" name="titulo" value="{{ $oferta->titulo }}" required>
    
    <label>Tienda:</label>
    <input type="text" name="tienda" value="{{ $oferta->tienda }}" required>
    
    <label>Vigencia:</label>
    <input type="date" name="vigencia" value="{{ $oferta->vigencia }}" required>
    
    <label>Precio Original:</label>
    <input type="number" step="0.01" name="precio_original" value="{{ $oferta->precio_original }}" required>
    
    <label>Precio Descuento:</label>
    <input type="number" step="0.01" name="precio_descuento" value="{{ $oferta->precio_descuento }}" required>

    <button type="submit" style="background:#4a235a; color:white; padding:10px;">Actualizar Cambios</button>
</form>
<br>
<a href="/ofertas">Cancelar</a>