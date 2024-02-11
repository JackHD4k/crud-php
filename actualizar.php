<?php
$mysqli = include_once "conexion.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$autor = $_POST["autor"];

$query = $mysqli->prepare("UPDATE libros SET nombre = ?, autor = ? WHERE id = ?");
$query->bind_param("ssi", $nombre, $autor, $id);
$query->execute();
header("Location: index.php");
?>