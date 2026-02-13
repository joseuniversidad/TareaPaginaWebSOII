<?php
session_start();
include "../conexion/conexion.php";

$correo = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];

$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE correo = ?");
$stmt->bind_param("s", $correo);
$stmt->execute();
$resultado = $stmt->get_result();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($contrasenia, $usuario['contrasenia'])) {
            $_SESSION['usuario'] = $usuario['nombre'];

            echo "<script>
            Swal.fire({
                title: 'Bienvenido',
                text: '" . $usuario['nombre'] . "',
                icon: 'success',
                confirmButtonColor: '#1e90ff'
            }).then(() => {
                window.location.href = '../views/servidores.php';
            });
        </script>";
        } else {

            echo "<script>
            Swal.fire({
                title: 'Error',
                text: 'Contraseña incorrecta',
                icon: 'error',
                confirmButtonColor: '#1e90ff'
            }).then(() => {
                window.location.href = '../views/login.php';
            });
        </script>";
        }
    } else {

        echo "<script>
        Swal.fire({
            title: 'Error',
            text: 'Correo no registrado',
            icon: 'error',
            confirmButtonColor: '#1e90ff'
        }).then(() => {
            window.location.href = '../views/login.php';
        });
    </script>";
    }
    ?>
</body>

</html>