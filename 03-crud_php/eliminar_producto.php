<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM productos WHERE id=$id";
    if ($conexion->query($sql) === TRUE) {
        echo "Producto eliminado exitosamente.";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}
?>

<a href="index.php">Volver a la lista</a>

<?php
$conexion->close();
?>
