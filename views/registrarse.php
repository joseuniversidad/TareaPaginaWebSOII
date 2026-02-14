<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Servidores</title>
    <link rel="stylesheet" href="../css/registrarse.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="auth-container">

        <!-- LADO IZQUIERDO -->
        <div class="auth-image">
            <div class="overlay"></div>
            <div class="text">
                <h1>Administra tus Servidores</h1>
                <p>Seguridad, rendimiento y control en un solo lugar.</p>
            </div>
        </div>

        <!-- LADO DERECHO -->
        <div class="auth-form white">

            <form action="../modulos/registro.php" method="POST">
                <h2>Crear tu cuenta</h2>

                <label>Nombres</label>
                <input type="text" name="nombres" required
                    pattern="^[A-Za-zÁÉÍÓÚáéíóúñÑ ]{3,50}$">
                <small>Solo letras. Mínimo 3 caracteres.</small>

                <label>Apellidos</label>
                <input type="text" name="apellidos" required
                    pattern="^[A-Za-zÁÉÍÓÚáéíóúñÑ ]{3,50}$">
                <small>Solo letras. Mínimo 3 caracteres.</small>

                <label>Correo electrónico</label>
                <input
                    type="email"
                    name="correo"
                    required
                    autocomplete="new-email"
                    pattern="^(?=.*\d)[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$"
                    title="El correo debe ser válido y contener al menos un número. Ej: usuario1@email.com">
                <small>Debe ser un correo válido y contener al menos un número.</small>


                <label>Contraseña</label>
                <input type="password" name="contrasenia" required required autocomplete="new-password"
                    pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
                <small>Mínimo 8 caracteres, incluir una letra Mayuscula y un número, NO SIMBOLOS.</small>

                <label>Confirmar contraseña</label>
                <input type="password" name="confirmar" required  autocomplete="new-password">
                <small>Debe coincidir con la contraseña anterior.</small>

                <button type="submit">Crear cuenta</button>

                <div class="links">
                    <a href="login.php">¿Ya tienes cuenta? Inicia sesión</a>
                </div>

            </form>

        </div>

    </div>

</body>

</html>