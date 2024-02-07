$(document).ready(function(){
    $('.rel_file_info').on('click', function(){
        // Verificar si al menos un archivo está seleccionado
        if ($('.seleccionarArchivo:checked').length > 0) {
            // Hacer una solicitud AJAX para obtener los archivos
            $.ajax({
                url: '{{ route("get.files") }}', // Reemplaza esto con la ruta correcta en tu aplicación
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Actualizar la interfaz de usuario con los datos de la respuesta JSON
                    // Por ejemplo, puedes recorrer los archivos y agregarlos a la lista
                    $('#contenidoArchivos').empty(); // Limpiar el contenido actual

                    $.each(response.archivos, function(index, archivo) {
                        var archivoHTML = '<div class="relicta-file-5">';
                        archivoHTML += '<div class="rel_file_error"></div>';
                        archivoHTML += '<div class="rel_filename">' + archivo.filename + '</div>';
                        archivoHTML += '<input type="checkbox" class="seleccionarArchivo" data-file-id="' + archivo.file_id + '">';
                        archivoHTML += '</div>';
                        $('#contenidoArchivos').append(archivoHTML);
                    });

                    // Mostrar el panel flotante
                    $('#panelFlotante').show();
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    });
});

// Función para cerrar el panel
function cerrarPanel() {
    $('#panelFlotante').hide();
}
