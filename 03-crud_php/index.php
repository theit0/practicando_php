<?php
include 'conexion.php';

// Obtener todos los productos
$resultado = $conexion->query("SELECT * FROM productos");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="styles.css"> <!-- Opcional: Agrega estilos aquí -->
</head>
<body>
    <h1>Lista de Productos</h1>
    <a href="agregar_producto.php">Agregar Producto</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($producto = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $producto['id']; ?></td>
                    <td><?php echo $producto['nombre']; ?></td>
                    <td><?php echo $producto['precio']; ?></td>
                    <td><?php echo $producto['stock']; ?></td>
                    <td>
                        <a href="editar_producto.php?id=<?php echo $producto['id']; ?>">Editar</a>
                        <a href="eliminar_producto.php?id=<?php echo $producto['id']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

<?php
$conexion->close();
?>
