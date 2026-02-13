<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor de Archivos</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>


</head>

<body>


    <header class="container section">
        <h1>Servidor de Archivos (File Server)</h1>
        <p class="text-center mt-3">en una empresa es un repositorio central de almacenamiento o espacio de trabajo que permite a los empleados en dispositivos conectados (como PC con Windows, macOS o incluso dispositivos móviles) acceder a archivos y carpetas y establecer un flujo de trabajo para colaborar diariamente en trabajos relacionados con el negocio. El término "servidor de archivos" generalmente es intercambiable con gestión de documentos, repositorio de archivos, compartición de archivos o colaboración de archivos y carpetas.
            ¿Qué es un Servidor de Archivos?
            Como componente de software, un servidor de archivos es parte de un sistema operativo, como el sistema operativo Windows. Un servidor de archivos permite que un dispositivo cliente conectado extienda su sistema de archivos local (como los de una unidad C o una unidad D) para incluir un sistema de archivos de red. Es cierto que acceder a archivos a través de una red no es tan rápido como leer o escribir archivos desde una unidad C local. Sin embargo, el efecto de la red habilita inmediatamente a los agentes cliente conectados y autorizados para operaciones básicas como listar archivos y carpetas, leer y escribir archivos y, lo más importante, bloquear archivos para facilitar la colaboración en grupo. Los beneficios de un servidor de archivos como plataforma de colaboración para toda la empresa son enormes.

            Los administradores del servidor necesitan definir quiénes son los usuarios, qué conjunto de archivos y carpetas pueden acceder los usuarios y los permisos de acceso. Los administradores del servidor también necesitan definir políticas de versión y retención de archivos y ocuparse de la continuidad del negocio, como respaldar los servidores de archivos.
        </p>
    </header>


    <section class="container section">
        <h2>Tipos de Servidores de Archivos</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://5.imimg.com/data5/EY/ZF/TX/SELLER-13481402/server-and-storage.jpg" class="card-img-top" alt="NAS">
                    <div class="card-body">
                        <h5 class="card-title">NAS (Network Attached Storage)</h5>
                        <p class="card-text">Dispositivo especializado para almacenamiento centralizado en la red. Fácil de usar, ideal para pequeñas y medianas empresas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://assets-blog.hostgator.mx/wp-content/uploads/2017/05/Upgrade-Servidor-Dedicado-1.webp" class="card-img-top" alt="Servidor dedicado">
                    <div class="card-body">
                        <h5 class="card-title">Servidor Dedicado</h5>
                        <p class="card-text">Servidor físico exclusivo para tu empresa, con gran capacidad y seguridad avanzada.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://www.somoscloud.com/wp-content/uploads/2016/03/servicios-iaas.png" class="card-img-top" alt="Servidor en la nube">
                    <div class="card-body">
                        <h5 class="card-title">Servidor en la Nube</h5>
                        <p class="card-text">Almacenamiento virtual accesible desde cualquier lugar, escalable según las necesidades del negocio.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container section">
        <h2>Datos importantes sobre servidores de archivos</h2>
        <ul class="list-group list-group-flush mt-3">
            <li class="list-group-item">Permiten control de permisos de usuario y seguridad de la información.</li>
            <li class="list-group-item">Facilitan la colaboración entre equipos mediante acceso centralizado.</li>
            <li class="list-group-item">Soportan copias de seguridad automáticas para prevenir pérdidas de datos.</li>
            <li class="list-group-item">Pueden ser físicos, virtuales o en la nube, según las necesidades.</li>
            <li class="list-group-item">Ayudan a reducir la duplicación de archivos y mejorar la eficiencia organizacional.</li>
            <li class="list-group-item">Se pueden integrar con sistemas de gestión documental y software corporativo.</li>
        </ul>
    </section>


    <section class="container section">
        <h2>Ventajas y Desventajas</h2>
        <div class="row mt-3">
            <div class="col-md-6">
                <h5>Ventajas</h5>
                <ul>
                    <li>Acceso centralizado a archivos y recursos.</li>
                    <li>Seguridad y control de usuarios.</li>
                    <li>Fácil respaldo y recuperación de datos.</li>
                    <li>Mejora la colaboración entre equipos.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Costo inicial de instalación de servidores físicos.</li>
                    <li>Requiere mantenimiento y actualización constante.</li>
                    <li>Dependencia de la red para acceder a los archivos.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container section">
        <h2>Comparativa de Servidores</h2>
        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Tipo</th>
                        <th>Almacenamiento</th>
                        <th>Seguridad</th>
                        <th>Accesibilidad</th>
                        <th>Ideal para</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>NAS</td>
                        <td>Moderado</td>
                        <td>Media</td>
                        <td>Red local / remota</td>
                        <td>Pequeñas y medianas empresas</td>
                    </tr>
                    <tr>
                        <td>Servidor Dedicado</td>
                        <td>Alta</td>
                        <td>Alta</td>
                        <td>Local / remota con VPN</td>
                        <td>Grandes empresas / proyectos críticos</td>
                    </tr>
                    <tr>
                        <td>Servidor en la Nube</td>
                        <td>Escalable</td>
                        <td>Alta</td>
                        <td>Desde cualquier lugar con internet</td>
                        <td>Startups, teletrabajo, almacenamiento remoto</td>
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
                    src="https://www.youtube.com/embed/a9AT_ycEbas"
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
                    src="https://www.youtube.com/embed/YPlCdjCmX0I"
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