<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO productos (nombre, precio, stock) VALUES ('$nombre', '$precio', '$stock')";
    if ($conexion->query($sql) === TRUE) {
        echo "Producto agregado exitosamente.";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
</head>
<body>
    <h1>Agregar Producto</h1>
    <form method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="precio">Precio:</label>
        <input type="number" step="0.01" id="precio" name="precio" required><br>
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" required><br>
        <button type="submit">Agregar Producto</button>
    </form>
    <a href="index.php">Volver a la lista</a>
</body>
</html>

<?php
$conexion->close();
?>
