<?php
$host = "localhost";
$usuario = "root";
$password = "Cayetano7209$";
$bd = "servidores_db";

$conexion = new mysqli($host, $usuario, $password, $bd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
