<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../conexion/conexion.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombres   = trim($_POST['nombres'] ?? '');
    $apellidos = trim($_POST['apellidos'] ?? '');
    $correo    = trim($_POST['correo'] ?? '');
    $password  = $_POST['contrasenia'] ?? '';
    $confirmar = $_POST['confirmar'] ?? '';

    // Validación campos vacíos
    if (empty($nombres) || empty($apellidos) || empty($correo) || empty($password) || empty($confirmar)) {
        alerta("Error", "Todos los campos son obligatorios", "error", "../views/registrarse.php");
        exit();
    }

    // Validación contraseñas
    if ($password !== $confirmar) {
        alerta("Error", "Las contraseñas no coinciden", "error", "../views/registrarse.php");
        exit();
    }

    try {

        // Verificar si el correo ya existe
        $stmt = $conn->prepare("SELECT id FROM usuarios WHERE correo = ?");
        $stmt->execute([$correo]);

        if ($stmt->fetch()) {
            alerta("Error", "El correo ya está registrado", "error", "../views/registrarse.php");
            exit();
        }

        // Encriptar contraseña
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Insertar usuario
        $stmt = $conn->prepare(
            "INSERT INTO usuarios (nombre, apellidos, correo, contrasenia) VALUES (?, ?, ?, ?)"
        );

        $stmt->execute([$nombres, $apellidos, $correo, $password_hash]);

        alerta("Éxito", "Usuario registrado correctamente", "success", "../views/login.php");
    } catch (PDOException $e) {
        alerta("Error BD", "Error en la base de datos: " . $e->getMessage(), "error", "../views/registrarse.php");
    }
}

function alerta($titulo, $mensaje, $icono, $redireccion)
{
    echo "
    <html>
    <head>
        <meta charset='UTF-8'>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    <body>
    <script>
        Swal.fire({
            title: '$titulo',
            text: '$mensaje',
            icon: '$icono',
            confirmButtonText: 'Aceptar'
        }).then(() => {
            window.location.href = '$redireccion';
        });
    </script>
    </body>
    </html>
    ";
}
?>