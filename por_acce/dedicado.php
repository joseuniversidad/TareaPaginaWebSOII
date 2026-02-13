<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor Dedicado</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>

<body>

    <header class="container section">
        <h1>Servidor Dedicado</h1>
        <p class="text-center mt-3">Un servidor dedicado es un servidor que se utiliza exclusivamente para un cliente. El usuario obtiene acceso completo a todo el hardware, incluyendo la CPU, la memoria RAM, los discos duros y la conexión de red. Esto significa que no se ejecutan otras páginas web o servicios en la misma máquina, como ocurre en los servidores virtuales o en el hosting compartido. Los usuarios pueden configurar y administrar el sistema según sus propias necesidades, incluida la elección del sistema operativo y del software. De este modo, un servidor dedicado ofrece una infraestructura estable y escalable para aplicaciones exigentes. Sin embargo, debido a su uso exclusivo, los costes asociados a un servidor dedicado son más altos que los de las soluciones de hosting compartido.</p>
    </header>

    <section class="container section">
        <h2>Tipos de Servidores Dedicados</h2>
        <div class="row g-4 mt-3">

            <!-- Servidor Dedicado Administrado -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://cdn-icons-png.flaticon.com/512/4248/4248443.png"
                        class="card-img-top"
                        alt="Servidor Dedicado Administrado">
                    <div class="card-body">
                        <h5 class="card-title">Servidor Dedicado Administrado</h5>
                        <p class="card-text">
                            El proveedor se encarga del mantenimiento, seguridad, actualizaciones y soporte técnico.
                            Ideal para empresas que no tienen equipo técnico propio.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Servidor Dedicado No Administrado -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://cdn-icons-png.flaticon.com/512/2942/2942813.png"
                        class="card-img-top"
                        alt="Servidor Dedicado No Administrado">
                    <div class="card-body">
                        <h5 class="card-title">Servidor Dedicado No Administrado</h5>
                        <p class="card-text">
                            El cliente tiene control total del servidor y es responsable de su configuración,
                            seguridad y mantenimiento. Requiere conocimientos técnicos.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Servidor Dedicado de Alto Rendimiento -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://cdn-icons-png.flaticon.com/512/1032/1032797.png"
                        class="card-img-top"
                        alt="Servidor Dedicado de Alto Rendimiento">
                    <div class="card-body">
                        <h5 class="card-title">Servidor Dedicado de Alto Rendimiento</h5>
                        <p class="card-text">
                            Equipado con procesadores potentes, gran cantidad de RAM y almacenamiento SSD.
                            Ideal para aplicaciones empresariales, bases de datos grandes o alto tráfico web.
                        </p>
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
                    <li>Recursos exclusivos, mayor rendimiento.</li>
                    <li>Alta seguridad y control total.</li>
                    <li>Ideal para aplicaciones críticas o sitios grandes.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Mayor costo de mantenimiento.</li>
                    <li>Requiere administración técnica más avanzada.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container section">
        <h2>Tabla Comparativa</h2>
        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Tipo</th>
                        <th>Costo</th>
                        <th>Rendimiento</th>
                        <th>Seguridad</th>
                        <th>Uso común</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dedicado</td>
                        <td>Alto</td>
                        <td>Máximo</td>
                        <td>Alta</td>
                        <td>Sitios grandes, aplicaciones críticas</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Video Explicativo</h2>
        <iframe src="https://www.youtube.com/embed/evzsq7X862Q" title="Servidor Dedicado explicado" allowfullscreen></iframe>
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