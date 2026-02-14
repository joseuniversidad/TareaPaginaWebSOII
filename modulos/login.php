<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

require_once __DIR__ . "/../conexion/conexion.php";

$correo = $_POST['correo'] ?? '';
$contrasenia = $_POST['contrasenia'] ?? '';

try {

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE correo = ?");
    $stmt->execute([$correo]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Error en la consulta: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php

if ($usuario) {

    if (password_verify($contrasenia, $usuario['contrasenia'])) {

        $_SESSION['usuario'] = $usuario['nombre'];

        echo "<script>
        Swal.fire({
            title: 'Bienvenido',
            text: '" . $usuario['nombre'] . "',
            icon: 'success'
        }).then(() => {
            window.location.href = '../views/servidores.php';
        });
        </script>";

    } else {

        echo "<script>
        Swal.fire({
            title: 'Error',
            text: 'Contraseña incorrecta',
            icon: 'error'
        }).then(() => {
            window.location.href = '/views/login.php';
        });
        </script>";
    }

} else {

    echo "<script>
    Swal.fire({
        title: 'Error',
        text: 'Correo no registrado',
        icon: 'error'
    }).then(() => {
        window.location.href = '/views/login.php';
    });
    </script>";
}

?>

</body>
</html>
