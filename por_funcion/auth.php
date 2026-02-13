<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor de Autenticación</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

</head>

<body>

    <!-- Header -->
    <header class="container section">
        <h1>Servidor de Autenticación</h1>
        <p class="text-center mt-3">Un servidor de autenticación es un componente crucial de la infraestructura de red que desempeña un papel central en la verificación de la identidad de usuarios o dispositivos y en la concesión de acceso a la red en función de las credenciales proporcionadas. En términos simples, es responsable de asegurar que solo los usuarios autorizados puedan acceder a la red, aplicaciones y datos, protegiéndose así contra accesos no autorizados.
            Es importante señalar que el servidor de autenticación no almacena las contraseñas reales en texto claro; en su lugar, almacena versiones cifradas o hashes de contraseñas. Esto asegura que, incluso si la base de datos del servidor se ve comprometida, las contraseñas permanezcan protegidas. Además, los servidores de autenticación pueden implementar políticas de seguridad, como la expiración de contraseñas, el bloqueo de cuentas después de múltiples intentos fallidos y la autenticación multifactor (MFA) para mejorar aún más la seguridad.
            En resumen, un servidor de autenticación es esencial para garantizar la seguridad y el control de acceso en entornos de red, protegiendo los recursos y datos sensibles de una organización contra accesos no autorizados.</p>
        </p>
    </header>

    <!-- Tipos de Servidores de Autenticación -->
    <section class="container section">
        <h2>Tipos de Servidores de Autenticación</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-6">
                <div class="card p-3 h-100">
                    <img src="https://www.ionos.com/es-us/digitalguide/fileadmin/DigitalGuide/Schaubilder/vista-previa-del-protocolo-ldap.png" class="card-img-top" alt="LDAP">
                    <div class="card-body">
                        <h5 class="card-title">LDAP</h5>
                        <p class="card-text">Protocolo de directorio para almacenar y verificar usuarios, común en redes corporativas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3 h-100">
                    <img src="https://cric.grenoble.cnrs.fr/Administrateurs/Documentations/SiteWebAuthentification/802.1x.jpg" class="card-img-top" alt="RADIUS">
                    <div class="card-body">
                        <h5 class="card-title">RADIUS</h5>
                        <p class="card-text">Protocolo de autenticación, autorización y contabilidad (AAA) utilizado en redes y Wi-Fi corporativo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ventajas y Desventajas -->
    <section class="container section">
        <h2>Ventajas y Desventajas</h2>
        <div class="row mt-3">
            <div class="col-md-6">
                <h5>Ventajas</h5>
                <ul>
                    <li>Control de acceso seguro.</li>
                    <li>Centraliza la gestión de usuarios.</li>
                    <li>Soporta múltiples métodos de autenticación.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Requiere configuración avanzada.</li>
                    <li>Falla del servidor puede bloquear acceso.</li>
                    <li>Dependencia de infraestructura de red.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Tabla Comparativa -->
    <section class="container section">
        <h2>Comparativa de Servidores de Autenticación</h2>
        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Servidor</th>
                        <th>Protocolo</th>
                        <th>Seguridad</th>
                        <th>Uso común</th>
                        <th>Ideal para</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>LDAP</td>
                        <td>LDAP / Active Directory</td>
                        <td>Alta</td>
                        <td>Redes corporativas</td>
                        <td>Gestión de usuarios y permisos</td>
                    </tr>
                    <tr>
                        <td>RADIUS</td>
                        <td>AAA (Autenticación, Autorización, Contabilidad)</td>
                        <td>Alta</td>
                        <td>Wi-Fi y VPN corporativa</td>
                        <td>Control de acceso remoto seguro</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Video Explicativo</h2>

        <div class="row mt-3">
            <div class="col-12">
                <iframe
                    width="100%"
                    height="400"
                    src="https://www.youtube.com/embed/lp5z8HQGAH8"
                    title="Video Explicativo"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <div class="container text-center my-4">
        <a href="index.php" class="btn btn-primary btn-top">🔝 Regresar al Inicio</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- GSAP Animaciones -->
    <script>
        gsap.from("header h1", {
            y: -50,
            opacity: 0,
            duration: 1,
            ease: "power2.out"
        });
        gsap.from("header p", {
            y: 50,
            opacity: 0,
            duration: 1,
            delay: 0.5,
            ease: "power2.out"
        });
        gsap.utils.toArray(".section").forEach(section => {
            gsap.from(section, {
                scrollTrigger: section,
                opacity: 0,
                y: 50,
                duration: 1,
                ease: "power2.out"
            });
        });
    </script>
</body>

</html>