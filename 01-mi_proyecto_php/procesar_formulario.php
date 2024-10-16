<?php
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nombre = $_POST['nombre'];
    $edad = (int) $_POST['edad'];

    echo "Nombre: $nombre, Edad: $edad";
}
?>