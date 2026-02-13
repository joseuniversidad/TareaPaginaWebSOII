<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor de Base de Datos</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

</head>

<body>

    <!-- Header -->
    <header class="container section">
        <h1>Servidor de Base de Datos</h1>
        <p class="text-center mt-3">Un servidor de datos es un tipo de hardware que le permite instalar software de base de datos: un sistema SGBD (gestión de bases de datos) relacional. Esta aplicación de base de datos especializada le ofrece dos capacidades vitales: la primera es la infraestructura de backend adecuada para almacenar todos sus datos en tablas organizadas y personalizables. La segunda es los servicios orientados al cliente (usted, sus empleados y otras partes interesadas) que le permiten a usted y al personal autorizado recuperar, cambiar o actualizar archivos específicos donde y cuando desee.
            En primer lugar, es importante comprender qué significa realmente «base de datos» y «servidor». Una base de datos es una aplicación que permite almacenar los datos y mantenerlos almacenados en una memoria. Un servidor puede estar basado en hardware o software y ofrece funciones específicas a los usuarios. Por ejemplo, puede implementarse para alojamiento web, correo electrónico, aplicaciones y mucho más.

            Al migrar los sistemas de bases de datos a un servidor, se crea un servidor de bases de datos, una ubicación en la que ahora se almacenan todos los datos y que se gestiona mediante el SGBD o el SGBDR. Los usuarios pueden utilizar ambos para acceder rápidamente a los datos con una simple consulta de la interfaz de usuario, además de enviar comandos sobre los que el SGBD actúa inmediatamente (ver a continuación). Los comandos incluyen acceso y recuperación de datos, modificación de privilegios de acceso, carga de nuevos conjuntos de datos y más.
        </p>
    </header>

    <!-- Tipos de Servidores de Base de Datos -->
    <section class="container section">
        <h2>Tipos de Servidores de Base de Datos</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://www.esepestudio.com/archivos/image/_noticias/medias/mysql.gif" class="card-img-top" alt="MySQL">
                    <div class="card-body">
                        <h5 class="card-title">MySQL</h5>
                        <p class="card-text">Servidor de base de datos relacional, muy popular y de código abierto, ideal para aplicaciones web.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://www.comparasoftware.gt/image-assets/412/NDEyfHdwLWNvbnRlbnQvdXBsb2Fkcy8yMDE4LzA4L2xvZ29Qb3N0Z3JlU1FMLnBuZw.webp" class="card-img-top" alt="PostgreSQL">
                    <div class="card-body">
                        <h5 class="card-title">PostgreSQL</h5>
                        <p class="card-text">Servidor relacional de alto rendimiento, soporta operaciones complejas y grandes volúmenes de datos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://www.developer-tech.com/wp-content/uploads/2021/02/mongodb-atlas-google-cloud-partnership-nosql-databases-integrations-2.jpg" class="card-img-top" alt="MongoDB">
                    <div class="card-body">
                        <h5 class="card-title">MongoDB</h5>
                        <p class="card-text">Servidor de base de datos NoSQL, ideal para datos no estructurados y aplicaciones modernas en la nube.</p>
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
                    <li>Acceso rápido y centralizado a los datos.</li>
                    <li>Seguridad y control de usuarios.</li>
                    <li>Escalabilidad según el volumen de información.</li>
                    <li>Permite respaldos y recuperación de información.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Requiere administración especializada.</li>
                    <li>Puede ser costoso en entornos empresariales grandes.</li>
                    <li>Dependencia de infraestructura y red estable.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Tabla Comparativa -->
    <section class="container section">
        <h2>Comparativa de Servidores de Base de Datos</h2>
        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Servidor</th>
                        <th>Tipo</th>
                        <th>Escalabilidad</th>
                        <th>Seguridad</th>
                        <th>Ideal para</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MySQL</td>
                        <td>Relacional</td>
                        <td>Moderada</td>
                        <td>Alta</td>
                        <td>Aplicaciones web y pequeñas empresas</td>
                    </tr>
                    <tr>
                        <td>PostgreSQL</td>
                        <td>Relacional</td>
                        <td>Alta</td>
                        <td>Alta</td>
                        <td>Empresas y sistemas complejos</td>
                    </tr>
                    <tr>
                        <td>MongoDB</td>
                        <td>NoSQL</td>
                        <td>Alta</td>
                        <td>Media</td>
                        <td>Aplicaciones modernas, Big Data y nube</td>
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
                <iframe src="https://www.youtube.com/embed/HXV3zeQKqGY" title="Servidor de Base de Datos" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.youtube.com/embed/9Pzj7Aj25lw" title="Introducción a MySQL" allowfullscreen></iframe>
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