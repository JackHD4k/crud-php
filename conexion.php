<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "789521";
$base_de_datos = "php_db";

$mysqli = new mysqli($servidor, $usuario, "", $base_de_datos);

if (!$mysqli) {
    die('Error al conectar: ' . mysqli_connect_error());
}
return $mysqli
?>
