<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="../css/restablecer_contra.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="container">
        <div class="image-section"></div>

        <div class="form-section">
            <h2>🔐 Restablecer Contraseña</h2>

            <form action="../modulos/restablecer_contra.php" method="POST">

                <div class="form-group">
                    <label>Nombres</label>
                    <div class="input-container">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="nombre" placeholder="Ingresa tus nombres" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Correo electrónico</label>
                    <div class="input-container">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="correo" placeholder="Ingresa tu correo" required autocomplete="new-email">
                    </div>
                </div>

                <div class="form-group">
                    <label>Nueva contraseña</label>
                    <div class="input-container">
                        <i class="fa-solid fa-lock"></i>
                        <input
                            type="password"
                            name="nueva_password"
                            placeholder="Nueva contraseña"
                            required
                            autocomplete="new-password"
                            pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&.#_-])[A-Za-z\d@$!%*?&.#_-]{8,}$"
                            title="Mínimo 8 caracteres, incluir mayúscula, minúscula, número y carácter especial.">
                    </div>
                </div>


                <button type="submit">Restablecer Contraseña</button>

                <a href="login.php" class="back-link">← Volver al login</a>

            </form>
        </div>
    </div>

</body>

</html>