<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor Privado / Local</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

</head>

<body>

    <header class="container section">
        <h1>Servidor Privado / Local</h1>
        <p class="text-center mt-3">
            Un servidor en casa es un entorno que emula las funciones de un servidor web, pero en tu ordenador. Permite a los desarrolladores crear, probar y modificar webs de forma segura antes de su publicación en internet.
            <br>
            Esto hace que esta herramienta sea muy útil para realizar pruebas sin afectar a la página en producción, para experimentar con nuevas tecnologías y para desarrollar proyectos sin necesidad de una conexión a internet.
            Además, armar un servidor casero facilita la detección y corrección de errores en una etapa temprana del desarrollo, lo que mejora la eficiencia y calidad del producto final.
        </p>
    </header>

    <section class="container section">
        <h2>Tipos de Servidores Locales</h2>
        <div class="row g-4 mt-3">

            <!-- Servidor Local Doméstico -->
            <div class="col-md-6">
                <div class="card p-3 h-100">
                    <img src="https://cdn-icons-png.flaticon.com/512/2885/2885417.png"
                        class="card-img-top"
                        alt="Servidor Local Doméstico">
                    <div class="card-body">
                        <h5 class="card-title">Servidor Local Doméstico</h5>
                        <p class="card-text">
                            Instalado en una casa o pequeña oficina.
                            Permite compartir archivos, impresoras y respaldos
                            dentro de una red privada (LAN).
                        </p>
                    </div>
                </div>
            </div>

            <!-- Servidor Local Empresarial -->
            <div class="col-md-6">
                <div class="card p-3 h-100">
                    <img src="https://cdn-icons-png.flaticon.com/512/4248/4248443.png"
                        class="card-img-top"
                        alt="Servidor Local Empresarial">
                    <div class="card-body">
                        <h5 class="card-title">Servidor Local Empresarial</h5>
                        <p class="card-text">
                            Servidor físico ubicado dentro de la empresa.
                            Administra usuarios, aplicaciones y bases de datos internas,
                            ofreciendo mayor control y seguridad.
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
                    <li>Alta seguridad y control total.</li>
                    <li>Recursos dedicados para la empresa o red local.</li>
                    <li>Permite configuraciones personalizadas según necesidades internas.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Costo más alto por infraestructura propia.</li>
                    <li>Requiere administración técnica interna.</li>
                    <li>Limitado al acceso de la red interna.</li>
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
                        <th>Acceso</th>
                        <th>Seguridad</th>
                        <th>Costo</th>
                        <th>Uso común</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Privado / Local</td>
                        <td>Solo usuarios internos</td>
                        <td>Alta</td>
                        <td>Medio-Alto</td>
                        <td>Redes corporativas, intranets, almacenamiento interno</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Video Explicativo</h2>
        <iframe src="https://www.youtube.com/embed/p2jvXsq0uUQ" title="Servidor Privado / Local explicado" allowfullscreen></iframe>
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