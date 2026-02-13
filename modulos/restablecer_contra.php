<?php
include "../conexion/conexion.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Restablecer contraseña</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
</body>

</html>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST['nombre'] ?? '');
    $correo = trim($_POST['correo'] ?? '');
    $password_plana = $_POST['nueva_password'] ?? '';

    if (!preg_match("/^[a-zA-ZÁÉÍÓÚáéíóúÑñ\s]{3,50}$/", $nombre)) {
        echo "<script>
            Swal.fire({
                title: 'Error',
                text: 'Nombre inválido. Solo letras y mínimo 3 caracteres.',
                icon: 'error'
            }).then(() => {
                window.location.href='../views/restablecer_contra.php';
            });
        </script>";
        exit;
    }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
            Swal.fire({
                title: 'Error',
                text: 'Correo electrónico inválido.',
                icon: 'error'
            }).then(() => {
                window.location.href='../views/restablecer_contra.php';
            });
        </script>";
        exit;
    }

    
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password_plana)) {
        echo "<script>
            Swal.fire({
                title: 'Error',
                text: 'La contraseña debe tener mínimo 8 caracteres, una mayúscula, una minúscula y un número.',
                icon: 'error'
            }).then(() => {
                window.location.href='../views/restablecer_contra.php';
            });
        </script>";
        exit;
    }

    $nueva_password = password_hash($password_plana, PASSWORD_DEFAULT);
    $stmt = $conexion->prepare("SELECT id FROM usuarios WHERE nombre = ? AND correo = ?");
    $stmt->bind_param("ss", $nombre, $correo);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {

        $update = $conexion->prepare("UPDATE usuarios SET contrasenia = ? WHERE nombre = ? AND correo = ?");
        $update->bind_param("sss", $nueva_password, $nombre, $correo);
        $update->execute();

        echo "<script>
            Swal.fire({
                title: 'Éxito',
                text: 'Contraseña restablecida correctamente',
                icon: 'success',
                confirmButtonColor: '#3085d6'
            }).then(() => {
                window.location.href='../views/login.php';
            });
        </script>";
    } else {

        echo "<script>
            Swal.fire({
                title: 'Error',
                text: 'Los datos no coinciden con ningún usuario.',
                icon: 'error',
                confirmButtonColor: '#d33'
            }).then(() => {
                window.location.href='../views/restablecer_contra.php';
            });
        </script>";
    }
} else {

    echo "<script>
        Swal.fire({
            title: 'Acceso no permitido',
            text: 'Debes enviar el formulario correctamente.',
            icon: 'warning'
        }).then(() => {
            window.location.href='../views/restablecer_contra.php';
        });
    </script>";
}
?>