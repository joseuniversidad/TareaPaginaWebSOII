<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor DNS</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>

<body>

    <!-- Header -->
    <header class="container section">
        <h1>Servidor DNS</h1>
        <p class="text-center mt-3">Los servidores DNS (Domain Name System) o servidores de nombres son ordenadores conectados permanentemente a Internet cuya función es traducir los nombres de dominio a direcciones IP. Es decir, cuando introduces una dirección web en tu navegador (por ejemplo, www.tudominio.com), los servidores DNS indican en qué dirección IP se encuentra alojado el sitio web para que tu navegador pueda acceder a él.
            Los servidores DNS no solo resuelven las direcciones IP de los sitios web, sino que también gestionan otros servicios vinculados a un dominio, como el correo electrónico. Por ejemplo, determinan qué servidor de correo debe recibir los emails enviados a una dirección como usuario@tudominio.com.
        </p>
    </header>

    <!-- Tipos de Servidores DNS -->
    <section class="container section">
        <h2>Tipos de Servidores DNS</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://www.hostingtg.com/blog/wp-content/uploads/2024/08/dns.webp" class="card-img-top" alt="Servidor Autoritativo">
                    <div class="card-body">
                        <h5 class="card-title">Servidor Autoritativo</h5>
                        <p class="card-text">Almacena información DNS de dominios específicos y responde con los registros oficiales.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://luissubiabre.wordpress.com/wp-content/uploads/2014/04/bto3.jpg" class="card-img-top" alt="Servidor Recursivo">
                    <div class="card-body">
                        <h5 class="card-title">Servidor Recursivo</h5>
                        <p class="card-text">Busca la respuesta a las solicitudes de DNS consultando otros servidores si no tiene la información localmente.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://sislander.com/wp-content/uploads/2018/02/surf-through-proxy-server-1024x576.png" class="card-img-top" alt="Servidor Cache">
                    <div class="card-body">
                        <h5 class="card-title">Servidor Cache</h5>
                        <p class="card-text">Almacena temporalmente resultados de consultas DNS para acelerar la resolución de nombres repetidos.</p>
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
                    <li>Facilita el acceso a sitios web mediante nombres de dominio.</li>
                    <li>Permite distribuir tráfico y balancear carga.</li>
                    <li>Mejora la velocidad de resolución de nombres con cache.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Si falla, los usuarios pueden perder acceso a sitios web.</li>
                    <li>Requiere configuración y mantenimiento especializado.</li>
                    <li>Puede ser objetivo de ataques de DNS.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Tabla Comparativa -->
    <section class="container section">
        <h2>Comparativa de Servidores DNS</h2>
        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Tipo</th>
                        <th>Función</th>
                        <th>Velocidad</th>
                        <th>Seguridad</th>
                        <th>Uso recomendado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Autoritativo</td>
                        <td>Responde con registros oficiales</td>
                        <td>Alta</td>
                        <td>Alta</td>
                        <td>Dominios propios</td>
                    </tr>
                    <tr>
                        <td>Recursivo</td>
                        <td>Busca información externa</td>
                        <td>Media</td>
                        <td>Media</td>
                        <td>ISP y empresas</td>
                    </tr>
                    <tr>
                        <td>Cache</td>
                        <td>Almacena temporalmente resultados</td>
                        <td>Alta</td>
                        <td>Media</td>
                        <td>Mejorar tiempos de respuesta</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Videos explicativos -->
    <section class="container section">
        <h2>Videos Explicativos</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-6">
                <iframe src="https://www.youtube.com/embed/72snZctFFtA" title="Servidor DNS explicado" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.youtube.com/embed/t7EGv2I5FpM" title="Cómo funciona DNS" allowfullscreen></iframe>
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