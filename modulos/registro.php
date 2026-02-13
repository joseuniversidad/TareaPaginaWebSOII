<?php
include "../conexion/conexion.php";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombres   = trim($_POST['nombres'] ?? '');
    $apellidos = trim($_POST['apellidos'] ?? '');
    $correo    = trim($_POST['correo'] ?? '');
    $password  = $_POST['contrasenia'] ?? '';
    $confirmar = $_POST['confirmar'] ?? '';


    if (empty($nombres) || empty($apellidos) || empty($correo) || empty($password) || empty($confirmar)) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
            Swal.fire({
                title: 'Error',
                text: 'Todos los campos son obligatorios',
                icon: 'error',
                confirmButtonColor: '#1e90ff'
            }).then(() => {
                window.location = '/views/registrarse.php';
            });
        </script>";
        exit();
    }

    if ($password !== $confirmar) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
            Swal.fire({
                title: 'Error',
                text: 'Las contraseñas no coinciden',
                icon: 'error',
                confirmButtonColor: '#1e90ff'
            }).then(() => {
                window.location = '/views/registrarse.php';
            });
        </script>";
        exit();
    }


    $stmt = $conexion->prepare("SELECT id FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
            Swal.fire({
                title: 'Error',
                text: 'El correo ya está registrado',
                icon: 'error',
                confirmButtonColor: '#1e90ff'
            }).then(() => {
                window.location = '/views/registrarse.php';
            });
        </script>";
        exit();
    }

 
    $password_hash = password_hash($password, PASSWORD_DEFAULT);


    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, apellidos, correo, contrasenia) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombres, $apellidos, $correo, $password_hash);

    if ($stmt->execute()) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
            Swal.fire({
                title: 'Éxito',
                text: 'Usuario registrado correctamente',
                icon: 'success',
                confirmButtonColor: '#1e90ff'
            }).then(() => {
                window.location = '/views/login.php';
            });
        </script>";
    } else {
        echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
        Swal.fire({
            title: 'Error en MySQL',
            text: '" . $stmt->error . "',
            icon: 'error',
            confirmButtonColor: '#1e90ff'
        }).then(() => {
            window.location = '/views/registrarse.php';
        });
    </script>";
    }


    $stmt->close();
    $conexion->close();
}
