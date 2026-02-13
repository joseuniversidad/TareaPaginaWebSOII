<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor de Aplicaciones</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>

<body>

    <!-- Header -->
    <header class="container section">
        <h1>Servidor de Aplicaciones</h1>
        <p class="text-center mt-3">
            Un servidor de aplicaciones es un tipo de servidor diseñado para instalar, operar y hospedar aplicaciones y servicios web. Su principal función es proporcionar un entorno integrado para el desarrollo, la ejecución y la gestión de aplicaciones, facilitando la compleja tarea de conectar aplicaciones con bases de datos, software y hardware relacionado.
            El corazón de un servidor de aplicaciones es su capacidad para ejecutar lógica de negocio en el lado del servidor. Esto significa que pueden procesar solicitudes de clientes (por ejemplo, un navegador web o una aplicación móvil), realizar operaciones complejas como consultas a bases de datos, cálculos, o procesamiento de datos y luego enviar los resultados de vuelta al cliente. Esto aligera la carga de trabajo de los dispositivos cliente y permite una gestión centralizada de la lógica de un negocio.
        </p>
    </header>

    <!-- Tipos de Servidores de Aplicaciones -->
    <section class="container section">
        <h2>Tipos de Servidores de Aplicaciones</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNxJ59CCXH6myTAW-vsLxtl7g6BoRWC0okyA&s" class="card-img-top" alt="Servidor JBoss">
                    <div class="card-body">
                        <h5 class="card-title">JBoss / WildFly</h5>
                        <p class="card-text">Servidor de aplicaciones Java EE, ampliamente usado para aplicaciones empresariales de gran escala.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://cdn.shopaccino.com/igmguru/products/apache-tomcat-training-1988704767855783_l.jpg?v=546" class="card-img-top" alt="Servidor Tomcat">
                    <div class="card-body">
                        <h5 class="card-title">Apache Tomcat</h5>
                        <p class="card-text">Servidor ligero para aplicaciones Java servlets y JSP, ideal para sitios web dinámicos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://clickcg.co/files/weblogic-server.jpg" class="card-img-top" alt="Servidor WebLogic">
                    <div class="card-body">
                        <h5 class="card-title">Oracle WebLogic</h5>
                        <p class="card-text">Servidor empresarial para aplicaciones Java EE con alta disponibilidad y escalabilidad.</p>
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
                    <li>Permite ejecutar aplicaciones centralizadas.</li>
                    <li>Facilita la integración con bases de datos y clientes.</li>
                    <li>Seguridad y control de accesos por usuario.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Requiere administración especializada.</li>
                    <li>Puede consumir muchos recursos si no está optimizado.</li>
                    <li>Necesita actualización constante.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Tabla Comparativa -->
    <section class="container section">
        <h2>Comparativa de Servidores de Aplicaciones</h2>
        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Servidor</th>
                        <th>Lenguaje</th>
                        <th>Escalabilidad</th>
                        <th>Seguridad</th>
                        <th>Ideal para</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>JBoss / WildFly</td>
                        <td>Java EE</td>
                        <td>Alta</td>
                        <td>Alta</td>
                        <td>Empresas grandes</td>
                    </tr>
                    <tr>
                        <td>Tomcat</td>
                        <td>Java</td>
                        <td>Media</td>
                        <td>Media</td>
                        <td>Sitios web dinámicos y medianos</td>
                    </tr>
                    <tr>
                        <td>WebLogic</td>
                        <td>Java EE</td>
                        <td>Alta</td>
                        <td>Alta</td>
                        <td>Aplicaciones empresariales críticas</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Videos Explicativos</h2>
        <div class="row g-4 mt-3">

            <div class="col-md-6">
                <iframe
                    width="100%"
                    height="315"
                    src="https://www.youtube.com/embed/JhhZSm9ZenM"
                    title="Servidor de Aplicaciones explicado"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>

            <div class="col-md-6">
                <iframe
                    width="100%"
                    height="315"
                    src="https://www.youtube.com/embed/nmns_noNQfo"
                    title="Configuración de servidor de aplicaciones"
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