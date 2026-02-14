<?php
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Si se usa cookie de sesión, destruirla también
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destruir la sesión
session_destroy();

// Redirigir al login u otra página
header("Location: ../login.php");
exit();
?>
