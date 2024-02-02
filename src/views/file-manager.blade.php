
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manager</title>
    <!-- Agrega los enlaces a los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Agrega tu archivo de estilos personalizados si es necesario -->
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <!-- Columna de carpetas y subcarpetas -->
        <div class="col-md-4">
            <!-- Puedes personalizar la apariencia de la barra superior según tus necesidades -->
            <div class="bg-info p-2 mb-2">
                <!-- Contenido de la barra superior -->
            </div>
            <!-- Lista de carpetas y subcarpetas -->
            <ul class="list-group">
                <li class="list-group-item">Carpeta 1</li>
                <li class="list-group-item">Carpeta 2</li>
                <!-- Agrega dinámicamente las carpetas/subcarpetas según la lógica de tu aplicación -->
            </ul>
        </div>
        <!-- Columna de archivos -->
        <div class="col-md-8">
            <!-- Puedes personalizar la apariencia de la barra superior según tus necesidades -->
            <div class="bg-info p-2 mb-2">
                <!-- Contenido de la barra superior -->
            </div>
            <!-- Lista de archivos -->
            <ul class="list-group">
                <li class="list-group-item">Archivo 1</li>
                <li class="list-group-item">Archivo 2</li>
                <!-- Agrega dinámicamente los archivos según la lógica de tu aplicación -->
            </ul>
        </div>
    </div>
</div>

<!-- Agrega los enlaces a los scripts de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Agrega tu archivo de script personalizado para la carga asíncrona de archivos -->
<script src="/js/carga-async-archivos.js"></script>
</body>
</html>

