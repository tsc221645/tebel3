<!DOCTYPE html>
<html>
<head>
    <title>Importar Productos</title>
</head>
<body>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('products.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">Importar</button>
    </form>

</body>
</html>
