<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor Web</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>

<body>

    <!-- Header -->
    <header class="container section">
        <h1>Servidor Web</h1>
        <p class="text-center mt-3">
            Cada vez que visita un sitio web, está conectando con un servidor web para recuperar la página que desea ver. El servidor responde a su solicitud enviando la página web a su equipo o dispositivo antes de que pueda verla en su navegador (conocido como cliente web).
            <br>
            La mayoría de la gente imagina los servidores web como un hardware ubicado en un datacenter que funciona a través de solicitudes. En realidad, sí, el hardware físico del servidor web almacena y envía archivos a los clientes, pero necesita software para procesar cualquier solicitud e indicar al hardware qué datos deben enviarse al cliente.
        </p>
    </header>

    <!-- Tipos de Servidores Web -->
    <section class="container section">
        <h2>Tipos de Servidores Web</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://i0.wp.com/unaaldia.hispasec.com/wp-content/uploads/2021/10/Apache-HTTP-Server-1.png?resize=617%2C412&ssl=1" class="card-img-top" alt="Servidor Apache">
                    <div class="card-body">
                        <h5 class="card-title">Apache</h5>
                        <p class="card-text">Servidor web de código abierto, confiable y ampliamente utilizado para hosting de sitios web.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://kinsta.com/es/wp-content/uploads/sites/8/2018/03/qu%C3%A9-es-nginx-1-1024x512.png" class="card-img-top" alt="Servidor Nginx">
                    <div class="card-body">
                        <h5 class="card-title">Nginx</h5>
                        <p class="card-text">Servidor web y proxy inverso de alto rendimiento, ideal para sitios con mucho tráfico.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://luigiasir.wordpress.com/wp-content/uploads/2017/11/microsoft-iis_1.png" class="card-img-top" alt="Servidor IIS">
                    <div class="card-body">
                        <h5 class="card-title">IIS</h5>
                        <p class="card-text">Servidor web de Microsoft, integrado con Windows Server, usado en entornos corporativos.</p>
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
                    <li>Entrega rápida y confiable de contenido web.</li>
                    <li>Permite hosting de aplicaciones y sitios web.</li>
                    <li>Control de acceso, seguridad y logs.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Requiere mantenimiento y actualización constante.</li>
                    <li>Dependencia de red e infraestructura.</li>
                    <li>Puede requerir conocimientos técnicos avanzados.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Tabla Comparativa -->
    <section class="container section">
        <h2>Comparativa de Servidores Web</h2>
        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Servidor</th>
                        <th>Plataforma</th>
                        <th>Rendimiento</th>
                        <th>Seguridad</th>
                        <th>Ideal para</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Apache</td>
                        <td>Multiplataforma</td>
                        <td>Media</td>
                        <td>Alta</td>
                        <td>Sitios web generales</td>
                    </tr>
                    <tr>
                        <td>Nginx</td>
                        <td>Multiplataforma</td>
                        <td>Alta</td>
                        <td>Alta</td>
                        <td>Sitios con alto tráfico</td>
                    </tr>
                    <tr>
                        <td>IIS</td>
                        <td>Windows</td>
                        <td>Alta</td>
                        <td>Alta</td>
                        <td>Entornos corporativos</td>
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
                <iframe src="https://www.youtube.com/embed/Zrybo9Pt7ys" title="Servidor Web explicado" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.youtube.com/embed/O2Bubp1n7L8" title="Configuración de un servidor web" allowfullscreen></iframe>
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