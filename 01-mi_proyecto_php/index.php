<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP y jQuery</title>
    <!-- Incluir jQuery desde un CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/script.js"></script>
</head>
<body>
    <h1>Formulario con PHP y JQuery</h1>

    <form id="formulario" method="post" action="procesar_formulario.php" >
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="input-nombre">
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="input-edad">
        <button type="submit">Enviar</button>
    </form>

    <p id="resultado"></p>
</body>
</html>
