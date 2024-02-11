<?php
if (!isset($_GET["id"])) {
    exit("No hay id");
}
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
$query = $mysqli->prepare("DELETE FROM libros WHERE id = ?");
$query->bind_param("i", $id);
$query->execute();
header("Location: index.php");
?>