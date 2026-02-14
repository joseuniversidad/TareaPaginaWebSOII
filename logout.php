<?php
session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

session_destroy();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cerrando sesión...</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #111;
            color: white;
            font-family: system-ui;
            flex-direction: column;
        }

        .loader {
            width: 60px;
            height: 60px;
            border: 6px solid #444;
            border-top: 6px solid #00c3ff;
            border-radius: 50%;
            animation: girar 1s linear infinite;
            margin-bottom: 20px;
        }

        @keyframes girar {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    <script>
        // Redirige después de 2 segundos
        setTimeout(function() {
            window.location.href = "index.php";
        }, 2000);
    </script>
</head>

<body>

    <div class="loader"></div>
    <h2>Cerrando sesión...</h2>
    <p>Redirigiendo al inicio</p>

</body>

</html>