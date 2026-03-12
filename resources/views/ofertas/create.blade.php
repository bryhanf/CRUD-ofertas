<style>
    body { background-color: #dbe4ff; font-family: serif; color: #4a235a; padding: 40px; }
    input { display: block; margin-bottom: 10px; padding: 8px; width: 300px; }
    label { font-weight: bold; }
</style>

<h1>Añadir Nueva Oferta</h1>

<form action="{{ route('ofertas.store') }}" method="POST">
    @csrf
    <label>Título:</label>
    <input type="text" name="titulo" required>
    
    <label>Tienda:</label>
    <input type="text" name="tienda" required>
    
    <label>Vigencia:</label>
    <input type="date" name="vigencia" required>
    
    <label>Precio Original:</label>
    <input type="number" step="0.01" name="precio_original" required>
    
    <label>Precio Descuento:</label>
    <input type="number" step="0.01" name="precio_descuento" required>

    <button type="submit" style="background:#4a235a; color:white; padding:10px;">Guardar Oferta</button>
</form>