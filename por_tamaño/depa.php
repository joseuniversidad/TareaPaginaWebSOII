<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor de Departamento</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

</head>

<body>

    <header class="container section" id="inicio">
        <h1>Servidor de Departamento</h1>
        <p class="text-center mt-3">
            Un servidor de departamento es un servidor diseñado para atender las necesidades específicas de un área dentro de una organización, como contabilidad, recursos humanos, ventas o informática. Su función principal es centralizar información, aplicaciones y recursos que utiliza únicamente ese departamento.
            <br>
            Este tipo de servidor es ideal para empresas medianas que requieren una gestión más eficiente de sus datos y aplicaciones, sin la necesidad de invertir en un servidor empresarial completo. Proporciona una solución intermedia entre un servidor de grupo de trabajo y un servidor empresarial, ofreciendo mayor capacidad y seguridad que el primero, pero con un costo y complejidad menores que el segundo.
        </p>
    </header>

    <section class="container section">
        <h2>Servidor de Departamento</h2>
        <div class="row g-4 mt-3">

            <!-- Departamento 1 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://concepto.de/wp-content/uploads/2019/05/servidor-e1557165670831.jpg"
                        class="card-img-top"
                        alt="Servidor Departamento Oficina">
                    <div class="card-body text-center">
                        <h5 class="card-title">Servidor de Oficina</h5>
                        <p class="card-text">
                            Utilizado por un departamento específico como contabilidad,
                            recursos humanos o ventas.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Departamento 2 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://blog.ciss.com.br/wp-content/uploads/2018/06/data_center_ou_serer_local.jpg"
                        class="card-img-top"
                        alt="Servidor Interno">
                    <div class="card-body text-center">
                        <h5 class="card-title">Servidor Interno</h5>
                        <p class="card-text">
                            Administra bases de datos y aplicaciones
                            solo para un área específica de la empresa.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Departamento 3 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://www.tecnozero.com/wp-content/uploads/2020/09/tco-servidor-300x225.png"
                        class="card-img-top"
                        alt="Servidor Torre Departamento">
                    <div class="card-body text-center">
                        <h5 class="card-title">Servidor Torre Departamental</h5>
                        <p class="card-text">
                            Equipo dedicado a soportar las operaciones
                            de un solo departamento.
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
                    <li>Recursos dedicados a un departamento específico.</li>
                    <li>Mayor capacidad y seguridad que un servidor de grupo de trabajo.</li>
                    <li>Permite gestionar datos y aplicaciones internas del departamento.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Mayor costo que un servidor de grupo de trabajo.</li>
                    <li>Escalabilidad limitada al área asignada.</li>
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
                        <td>Departamento</td>
                        <td>Medio</td>
                        <td>Moderada</td>
                        <td>Media</td>
                        <td>Áreas específicas de empresas medianas</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Video Explicativo</h2>
        <iframe src="https://www.youtube.com/embed/VTZ5Ghg9CY4" title="Servidor de Departamento explicado" allowfullscreen></iframe>
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