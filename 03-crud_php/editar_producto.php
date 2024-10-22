<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];

        $sql = "UPDATE productos SET nombre='$nombre', precio='$precio', stock='$stock' WHERE id=$id";
        if ($conexion->query($sql) === TRUE) {
            echo "Producto actualizado exitosamente.";
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
    } else {
        $resultado = $conexion->query("SELECT * FROM productos WHERE id=$id");
        $producto = $resultado->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $producto['nombre']; ?>" required><br>
        <label for="precio">Precio:</label>
        <input type="number" step="0.01" id="precio" name="precio" value="<?php echo $producto['precio']; ?>" required><br>
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" value="<?php echo $producto['stock']; ?>" required><br>
        <button type="submit">Actualizar Producto</button>
    </form>
    <a href="index.php">Volver a la lista</a>
</body>
</html>

<?php
$conexion->close();
?>
