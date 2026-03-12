<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Información de ofertas</title>
    <style>
        body { background-color: #dbe4ff; font-family: "Times New Roman", Times, serif; color: #4a235a; padding: 40px; }
        h1 { font-size: 2.5rem; margin-bottom: 20px; font-weight: bold; }
        ul { font-size: 1.2rem; line-height: 1.6; list-style: none; padding-left: 0; }
        .oferta-bloque { margin-bottom: 30px; border-bottom: 2px solid #4a235a; padding-bottom: 15px; }
        a { color: #4a235a; font-weight: bold; text-decoration: none; margin-right: 15px; }
        button { background: none; border: none; color: #e74c3c; font-weight: bold; cursor: pointer; font-family: serif; font-size: 1.1rem; }
    </style>
</head>
<body>
    <h1>Información de ofertas</h1>
    
    <a href="/ofertas/create">Añadir Nueva Oferta</a>
    <br><br>

    @foreach($ofertas as $oferta)
        <div class="oferta-bloque">
            <ul>
                <li><strong>ID:</strong> {{ $oferta->id }}</li> <li><strong>Título:</strong> {{ $oferta->titulo }}</li>
                <li><strong>Tienda:</strong> {{ $oferta->tienda }}</li>
                <li><strong>Vigencia:</strong> {{ $oferta->vigencia }}</li>
                <li><strong>Precio Original:</strong> ${{ $oferta->precio_original }}</li>
                <li><strong>Precio con Descuento:</strong> ${{ $oferta->precio_descuento }}</li>
            </ul>
            
            <a href="/ofertas/{{ $oferta->id }}/edit">📝 Editar oferta</a>

            <form action="/ofertas/{{ $oferta->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Seguro que quieres borrar esta oferta?')">🗑️ Borrar</button>
            </form>
        </div>
    @endforeach
</body>
</html>