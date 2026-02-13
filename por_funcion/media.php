<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor Multimedia</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>

<body>

    <header class="container section">
        <h1>Servidor Multimedia</h1>
        <p class="text-center mt-3">De seguro en este punto ya has notado que hablamos de streaming de video y de streaming de audio, y es que justamente esos son los dos tipos de streaming existente. El streaming es obviamente la transmisión de un video en tiempo real, es decir, un video que la gente puede ver en vivo desde su dispositivo.
            <br>
            Con el audio sucede lo mismo: el streaming de audio es la transmisión de audio en vivo, de forma tal que la gente pueda escucharlo en tiempo real.
            <br>
            Con esto en mente podemos decir entonces que el hosting para streaming se divide en dos: por un lado están los servidores de streaming de video y por el otro están los servidores de streaming de audio. El streaming de audio con frecuencia es llamado también streaming de radio o radio por streaming, ya que en la gran mayoría de los casos se usa para hacer radiodifusión por Internet, aunque no necesariamente se tiene que transmitir un programa de radio como tal.
        </p>
    </header>

    <section class="container section">
        <h2>Tipos de Servidores Multimedia</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-6">
                <div class="card p-3 h-100">
                    <img src="https://salazarcarlos.com/images/imagenes/icecast.jpg" class="card-img-top" alt="Servidor de Streaming">
                    <div class="card-body">
                        <h5 class="card-title">Servidor de Streaming</h5>
                        <p class="card-text">Entrega contenido en tiempo real, permitiendo ver videos o escuchar música sin descargarlo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3 h-100">
                    <img src="https://acerkate.com/storage/2021/03/Servidor-NAS-scaled.jpg" class="card-img-top" alt="Servidor de Almacenamiento Multimedia">
                    <div class="card-body">
                        <h5 class="card-title">Servidor de Almacenamiento Multimedia</h5>
                        <p class="card-text">Almacena grandes cantidades de archivos multimedia y permite acceso bajo demanda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container section">
        <h2>Ventajas y Desventajas</h2>
        <div class="row mt-3">
            <div class="col-md-6">
                <h5>Ventajas</h5>
                <ul>
                    <li>Acceso centralizado a multimedia.</li>
                    <li>Soporta streaming eficiente a varios dispositivos.</li>
                    <li>Mejor organización de archivos.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Requiere gran ancho de banda para streaming.</li>
                    <li>Hardware costoso si hay muchos usuarios.</li>
                    <li>Mantenimiento constante del servidor.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container section">
        <h2>Comparativa de Servidores Multimedia</h2>
        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Tipo</th>
                        <th>Función</th>
                        <th>Acceso</th>
                        <th>Uso común</th>
                        <th>Ideal para</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Streaming</td>
                        <td>Transmite contenido en tiempo real</td>
                        <td>Instantáneo</td>
                        <td>Netflix, Spotify, YouTube</td>
                        <td>Usuarios finales</td>
                    </tr>
                    <tr>
                        <td>Almacenamiento</td>
                        <td>Guarda archivos multimedia</td>
                        <td>Bajo demanda</td>
                        <td>Empresas y estudios de diseño</td>
                        <td>Acceso interno a multimedia</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Videos Explicativos</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-12">
                <iframe src="https://www.youtube.com/embed/pHBYtPwajMw" title="Servidor Multimedia explicado" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <div class="container text-center my-4">
        <a href="index.php" class="btn btn-primary btn-top">🔝 Regresar al Inicio</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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