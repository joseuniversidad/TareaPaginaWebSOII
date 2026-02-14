<?php
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

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
