<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor Empresarial / Corporativo</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>

<body>

    <header class="container section" id="inicio">
        <h1>Servidor Empresarial / Corporativo</h1>
        <p class="text-center mt-3">
            Un servidor empresarial o corporativo es un servidor de alto rendimiento diseñado para soportar todas las operaciones tecnológicas de una empresa grande. Está preparado para manejar múltiples servicios al mismo tiempo, atender a muchos usuarios simultáneamente y garantizar estabilidad, seguridad y disponibilidad continua.
            <br>
            Este tipo de servidor suele utilizar hardware robusto, sistemas de respaldo, almacenamiento redundante y configuraciones avanzadas para evitar fallos o pérdidas de información.
        <h2>Servidor Empresarial</h2>
        <div class="row g-4 mt-3">

            <!-- Empresarial 1 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://blog.coverix.mx/hs-fs/hubfs/Blog%20stock/servidor-blade-definicion-caracteristicas-y-ventajas(2).jpg?width=598&name=servidor-blade-definicion-caracteristicas-y-ventajas(2).jpg"
                        class="card-img-top"
                        alt="Servidor Empresarial Blade">
                    <div class="card-body text-center">
                        <h5 class="card-title">Infraestructura Blade</h5>
                        <p class="card-text">
                            Diseñado para grandes corporaciones
                            con alta demanda de procesamiento.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Empresarial 2 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://img.datacentermarket.es/wp-content/uploads/2025/08/22085542/Servidor-vs-Data-center-1.jpeg"
                        class="card-img-top"
                        alt="Servidor Empresarial Rack">
                    <div class="card-body text-center">
                        <h5 class="card-title">Centro de Datos</h5>
                        <p class="card-text">
                            Soporta múltiples aplicaciones, usuarios
                            y sistemas críticos empresariales.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Empresarial 3 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://blog.endeos.com/wp-content/uploads/2021/10/consejos-mejorar-seguridad-servidor-tu-empresa.jpg"
                        class="card-img-top"
                        alt="Servidor Corporativo">
                    <div class="card-body text-center">
                        <h5 class="card-title">Servidor Corporativo</h5>
                        <p class="card-text">
                            Alta disponibilidad, seguridad avanzada
                            y respaldo continuo de información.
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
                        <li>Alta disponibilidad y escalabilidad para toda la empresa.</li>
                        <li>Seguridad avanzada y redundancia de datos.</li>
                        <li>Soporta gran número de usuarios y aplicaciones críticas.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>Desventajas</h5>
                    <ul>
                        <li>Costos muy elevados de implementación y mantenimiento.</li>
                        <li>Requiere personal especializado para gestión y administración.</li>
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
                            <th>Usuarios</th>
                            <th>Capacidad</th>
                            <th>Escalabilidad</th>
                            <th>Uso común</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Empresarial / Corporativo</td>
                            <td>Grande</td>
                            <td>Alta</td>
                            <td>Muy alta</td>
                            <td>Corporaciones, bancos, empresas con operaciones críticas</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="container section">
            <h2>Video Explicativo</h2>
            <iframe src="https://www.youtube.com/embed/SrjYBRYYpG0" title="Servidor Empresarial explicado" allowfullscreen></iframe>
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