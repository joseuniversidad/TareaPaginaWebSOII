<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Infraestructura</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <div class="left">
        <div class="jumbotron">
            <h1><i class="fa-solid fa-server"></i> Infraestructura</h1>
            <p>Accede al panel de gestión y monitoreo de servidores</p>

            <form action="../modulos/login.php" method="POST">

                <div class="input-group">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="correo" placeholder="Correo electrónico" required autocomplete="new-email">
                </div>

                <div class="input-group">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="contrasenia" placeholder="Contraseña" required autocomplete="new-password">
                </div>

                <button type="submit">
                    Iniciar sesión
                </button>

            </form>

            <div class="links">
                <a href="restablecer_contra.php">¿Olvidaste tu contraseña?</a><br>
                <a href="registrarse.php">Crear cuenta</a>
            </div>
        </div>
    </div>


    <div class="right"></div>

</body>

</html>