<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manager</title>
    <!-- Agrega los enlaces a los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Agrega tu archivo de estilos personalizados si es necesario -->
    <link rel="stylesheet" href="/resources/css/relicta_filemanage.css">
</head>
<body>
<div class="container-fluid mt-4 relicta-container">
    <div class="row">
        <div class="relicta-filemanager-head d-flex justify-content-end ">

            <div class="rel_filemanager_icon">
                <div class="rel_delete"></div>
            </div>

            <div class="rel_filemanager_icon">
                <div class="rel_new_folder"></div>
            </div>

            <div class="rel_filemanager_icon">
                <div class="rel_download"></div>
            </div>

            <div class="rel_filemanager_icon">
                <div class="rel_file_info"></div>
            </div>
        </div>
        <!-- Columna de carpetas y subcarpetas -->
        <div class="relicta-col-4">
            <!-- Puedes personalizar la apariencia de la barra superior según tus necesidades -->

            <!-- Lista de carpetas y subcarpetas (se cargará dinámicamente) -->
            <div class="relicta-folder-filesystem d-flex">
                <div class="rel_folder"> </div>
                <div class="relicta-filemanager-text"> Hello </div>

            </div>
        </div>
        <!-- Columna de archivos -->
        <div id="contenidoArchivos" class="relicta-col-8" style="overflow-y: auto; height: 500px;">
            <!-- Contenido de la carpeta actual (se cargará dinámicamente) -->
            <div class="relicta-file-5">

            </div>
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

