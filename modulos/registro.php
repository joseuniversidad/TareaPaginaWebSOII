<?php
session_start();
include "../conexion/conexion.php"; // define $conn
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Restablecer Contraseña</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST['nombre'] ?? '');
    $correo = trim($_POST['correo'] ?? '');
    $password_plana = $_POST['nueva_password'] ?? '';

    // Validaciones
    if (!preg_match("/^[a-zA-ZÁÉÍÓÚáéíóúÑñ\s]{3,50}$/", $nombre)) {
        $mensaje = "Nombre inválido. Solo letras y mínimo 3 caracteres.";
        $tipo = "error";
        mostrar_alerta($mensaje, $tipo);
        exit;
    }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $mensaje = "Correo electrónico inválido.";
        $tipo = "error";
        mostrar_alerta($mensaje, $tipo);
        exit;
    }

    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password_plana)) {
        $mensaje = "La contraseña debe tener mínimo 8 caracteres, una mayúscula, una minúscula y un número.";
        $tipo = "error";
        mostrar_alerta($mensaje, $tipo);
        exit;
    }

    $nueva_password = password_hash($password_plana, PASSWORD_DEFAULT);

    try {
        // Buscar usuario
        $stmt = $conn->prepare("SELECT id FROM usuarios WHERE nombre = :nombre AND correo = :correo");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        $usuario = $stmt->fetch();

        if ($usuario) {
            // Actualizar contraseña
            $update = $conn->prepare("UPDATE usuarios SET contrasenia = :contrasenia WHERE nombre = :nombre AND correo = :correo");
            $update->bindParam(':contrasenia', $nueva_password);
            $update->bindParam(':nombre', $nombre);
            $update->bindParam(':correo', $correo);
            $update->execute();

            mostrar_alerta("Contraseña restablecida correctamente", "success", "/views/login.php");
            exit;
        } else {
            mostrar_alerta("Los datos no coinciden con ningún usuario.", "error", "/views/restablecer_contra.php");
            exit;
        }

    } catch (PDOException $e) {
        mostrar_alerta("Ocurrió un error en la base de datos: ".addslashes($e->getMessage()), "error", "/views/restablecer_contra.php");
        exit;
    }

} else {
    mostrar_alerta("Debes enviar el formulario correctamente.", "warning", "/views/restablecer_contra.php");
    exit;
}

// Función para mostrar SweetAlert
function mostrar_alerta($mensaje, $tipo = "info", $redirect = null) {
    $redirect_js = $redirect ? "window.location.href='{$redirect}';" : "";
    echo "<script>
        Swal.fire({
            title: '".ucfirst($tipo)."',
            text: '{$mensaje}',
            icon: '{$tipo}',
            confirmButtonColor: '#3085d6'
        }).then(() => {
            {$redirect_js}
        });
    </script>";
}
?>

</body>
</html>
