<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = getenv("MYSQLHOST");
$db   = getenv("MYSQLDATABASE");
$user = getenv("MYSQLUSER");
$pass = getenv("MYSQLPASSWORD");
$port = getenv("MYSQLPORT");

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

    $conn = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
