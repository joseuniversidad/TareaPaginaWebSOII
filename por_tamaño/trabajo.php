<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor de Grupo de Trabajo</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>

<body>

    <header class="container section" id="inicio">
        <h1>Servidor de Grupo de Trabajo</h1>
        <p class="text-center mt-3">
            Un servidor de grupo de trabajo es un servidor diseñado para apoyar a un equipo pequeño dentro de una organización. Su función principal es compartir recursos como archivos, impresoras y aplicaciones entre varios usuarios que trabajan en conjunto.
            <br>
            Es ideal para pequeñas oficinas o proyectos específicos dentro de una empresa, donde no se requiere la capacidad y complejidad de un servidor empresarial. Proporciona una solución económica y fácil de implementar para facilitar la colaboración entre miembros del grupo.
            <br>
            Es más sencillo y económico que un servidor empresarial, y está pensado para pequeñas oficinas o equipos específicos dentro de una empresa.
        </p>
    </header>

    <section class="container section">
        <h2>Servidor de Grupo de Trabajo</h2>
        <div class="row g-4 mt-3">

            <!-- Trabajo 1 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://www.tecnozero.com/wp-content/uploads/2017/08/servidor-torre.jpg"
                        class="card-img-top"
                        alt="Servidor Grupo Pequeño">
                    <div class="card-body text-center">
                        <h5 class="card-title">Servidor para Equipo Pequeño</h5>
                        <p class="card-text">
                            Diseñado para soportar tareas compartidas
                            entre varios empleados.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Trabajo 2 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhZxHVOdamyD-Paxrpgz7RjTDDT_yooqiXwHKh2sT68MVA9TsfGdMOy_aOp5nid8xZlEg-B8mJCCs9PLlE9GHeaA06Immm1Zlwy9q4G8Q0mmxojbhMYGCAdqCBxgFZMGp7erPUUZ7H2ofDy/s1600/group.jpg"
                        class="card-img-top"
                        alt="Servidor Colaborativo">
                    <div class="card-body text-center">
                        <h5 class="card-title">Servidor Colaborativo</h5>
                        <p class="card-text">
                            Permite compartir archivos, impresoras
                            y aplicaciones en red local.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Trabajo 3 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://blog.coverix.mx/hubfs/Blog%20stock/como-elegir-el-servidor-adecuado.jpg"
                        class="card-img-top"
                        alt="Servidor Oficina">
                    <div class="card-body text-center">
                        <h5 class="card-title">Servidor de Oficina</h5>
                        <p class="card-text">
                            Ideal para grupos de trabajo
                            dentro de una misma red empresarial.
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
                    <li>Facilita la colaboración entre miembros del grupo.</li>
                    <li>Bajo costo y fácil implementación.</li>
                    <li>Ideal para pequeñas oficinas o proyectos específicos.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Capacidad limitada de usuarios y almacenamiento.</li>
                    <li>No apto para grandes organizaciones.</li>
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
                        <td>Grupo de Trabajo</td>
                        <td>Pequeño</td>
                        <td>Limitada</td>
                        <td>Baja</td>
                        <td>Pequeños equipos, oficinas pequeñas</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Video Explicativo</h2>
        <iframe src="https://www.youtube.com/embed/VDo0WS8rooY" title="Servidor de Grupo de Trabajo explicado" allowfullscreen></iframe>
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