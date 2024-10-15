<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP y jQuery</title>
    <!-- Incluir jQuery desde un CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>¡Hola, jQuery!</h1>
    <p id="mensaje">Este texto cambiará con jQuery.</p>
    <button class="btn">Clickear</button>
    <script>
        // Código jQuery
        $(document).ready(function(){

            // Modificar el contenido del parrafo "mensaje"
            $('#mensaje').text('¡jQuery está funcionando!');

            // Al clickear el boton con clase "btn", cambia el contenido del parrafo "mensaje"
            $('.btn').click(function(){
                $('#mensaje').text('El texto ha sido cambiado mediante el click de un botón.')
            })

        });
    </script>
</body>
</html>
