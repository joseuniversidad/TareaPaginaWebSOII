<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = "centerbeam.proxy.rlwy.net";
$db   = "railway";
$user = "root";
$pass = "IhuRwcGRLUNLGFTZqkcNTKJrQdIULpPD";
$port = "43484";

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";

    $conn = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);

    echo "Conexión exitosa 🚀";

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
