<?php
$mysqli = include_once "conexion.php";
$query = $mysqli->query("SELECT id, nombre, autor FROM libros");
$lista = $query->fetch_all(MYSQLI_ASSOC);
return $lista
?>