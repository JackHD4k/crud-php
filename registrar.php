<?php
$mysqli = include_once "conexion.php";
$nombre = $_POST["nombre"];
$autor = $_POST["autor"];
$query = $mysqli->prepare("INSERT INTO libros (nombre, autor) VALUES (?,?)");
$query->bind_param("ss", $nombre, $autor);
$query->execute();
header("Location: index.php");
?>