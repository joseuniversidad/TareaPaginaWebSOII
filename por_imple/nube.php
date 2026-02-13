<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor en la Nube</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

</head>

<body>

    <header class="container section" id="inicio">
        <h1>Servidor en la Nube</h1>
        <p class="text-center mt-3">
            En este caso el término cloud se refiere a que será un servidor virtual de un tipo específico. Concretamente a una máquina virtualizada que se ejecuta sobre una plataforma de computación en la nube.
            <br>
            Virtualizado significa que el servidor no es una máquina física determinada, sino que existe de manera lógica, usando recursos asignados por una o varias máquinas físicas. Por otra parte cloud indica que los recursos estarán asignados por una plataforma de computación en la nube, no necesariamente por un equipo físico específico que se ha troceado en varias máquinas virtuales.
            <br>
            Los servidores cloud pueden estar en una nube pública o una nube privada o incluso en una nube híbrida. Veremos más adelante la distinción de estos modelos. En todo caso, cualquiera de estas alternativas nos ofrece numerosas ventajas, sobre todo su flexibilidad y la posibilidad de trabajar de manera ajustada, según la demanda, reduciendo costes operacionales.
        </p>
    </header>

    <section class="container section">
        <h2>Tipos de Servidores en la Nube</h2>
        <div class="row g-4 mt-3">

            <!-- Nube 1 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://datatrust.sv/wp-content/uploads/2023/12/nube-publica-ejemplos.png.webp"
                        class="card-img-top"
                        alt="AWS">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nube Pública</h5>
                        <p class="card-text">
                            Infraestructura compartida ofrecida por proveedores externos.
                            Escalable y accesible desde Internet.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Nube 2 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://whitestack.com/wp-content/uploads/2023/02/que-es-una-nube-privada-2.webp"
                        class="card-img-top"
                        alt="Google Cloud">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nube Privada</h5>
                        <p class="card-text">
                            Infraestructura exclusiva para una organización.
                            Mayor control y seguridad personalizada.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Nube 3 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://www.sapia.com.pe/wp-content/uploads/2021/09/nubehibrida1.jpg"
                        class="card-img-top"
                        alt="Microsoft Azure">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nube Híbrida</h5>
                        <p class="card-text">
                            Combina nube pública y privada,
                            permitiendo flexibilidad y mejor gestión de recursos.
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
                    <li>Escalabilidad casi infinita según demanda.</li>
                    <li>Pago por uso, menor inversión inicial.</li>
                    <li>Acceso remoto desde cualquier lugar.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Dependencia de conexión a Internet.</li>
                    <li>Menor control sobre infraestructura física.</li>
                    <li>Seguridad depende del proveedor de la nube.</li>
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
                        <th>Recursos</th>
                        <th>Escalabilidad</th>
                        <th>Costo</th>
                        <th>Uso común</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nube</td>
                        <td>Compartidos/Asignados</td>
                        <td>Alta</td>
                        <td>Variable</td>
                        <td>Startups, aplicaciones web globales, almacenamiento remoto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Video Explicativo</h2>
        <iframe src="https://www.youtube.com/embed/yihrbcnK5-Y" title="Servidor en la Nube explicado" allowfullscreen></iframe>
    </section>

    <div class="container text-center my-4">
        <a href="#inicio" class="btn btn-primary btn-top">🔝 Regresar al Inicio</a>
    </div>

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