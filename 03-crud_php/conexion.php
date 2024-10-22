<?php
$host = 'localhost';
$db = 'sistema_de_ventas';
$user = 'root'; 
$pass = ''; 

$conexion = new mysqli($host, $user, $pass, $db,3307);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos '$db'";
}
?>