<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor de Impresión</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

</head>

<body>

    <!-- Header -->
    <header class="container section">
        <h1>Servidor de Impresión</h1>
        <p class="text-center mt-3">Los servidores de impresión aíslan las aplicaciones de negocio de la carga de tener que gestionar directamente el flujo de información hasta el dispositivo físico de impresión. Esto genera muchas ventajas. Por ejemplo, un usuario puede imprimir aunque el dispositivo de destino esté desconectado o haya un atasco en la impresora. En lugar de bloquear la estación de trabajo del usuario con mensajes de error, el servidor de impresión mantiene los datos de impresión en su cola hasta que la impresora vuelva a estar conectada. Mientras, los usuarios pueden seguir haciendo su trabajo.
            <br>
            Un servidor de impresión también puede conservar una copia de un documento determinado durante un tiempo. Esto resulta útil cuando el usuario (o alguien en el departamento de conformidad, por ejemplo) quiere volver a imprimir el documento más tarde sin tener que volver a la aplicación para enviar de nuevo el trabajo de impresión
        </p>
    </header>

    <!-- Tipos de Servidores de Impresión -->
    <section class="container section">
        <h2>Tipos de Servidores de Impresión</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://static.wixstatic.com/media/f54ed3_c2f5257f3ecb455e877d5b6642a1a4a0.jpg/v1/fill/w_568,h_454,al_c,lg_1,q_80,enc_avif,quality_auto/f54ed3_c2f5257f3ecb455e877d5b6642a1a4a0.jpg" class="card-img-top" alt="Servidor de impresión dedicado">
                    <div class="card-body">
                        <h5 class="card-title">Servidor dedicado</h5>
                        <p class="card-text">Equipo especializado conectado a la red exclusivamente para gestionar impresoras y trabajos de impresión.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://oip.manual.canon/USRMA-0252-zz-SS-esES/contents/images/book_images/pubnumbers/USRMA-0252-00/b_OFD181_L.gif" class="card-img-top" alt="Servidor integrado">
                    <div class="card-body">
                        <h5 class="card-title">Servidor integrado en impresora</h5>
                        <p class="card-text">Algunas impresoras modernas tienen servidor de impresión integrado, permitiendo conectividad directa a la red.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://tecnologia-informatica.com/wp-content/uploads/2019/02/servidores-de-impresion-5.jpeg" class="card-img-top" alt="Servidor en la nube">
                    <div class="card-body">
                        <h5 class="card-title">Servidor en la nube</h5>
                        <p class="card-text">Permite enviar trabajos de impresión desde cualquier ubicación a impresoras conectadas a la nube.</p>
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
                    <li>Centraliza la gestión de múltiples impresoras.</li>
                    <li>Permite priorizar trabajos y reducir errores de impresión.</li>
                    <li>Facilita la administración de permisos de usuarios.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Puede requerir hardware adicional.</li>
                    <li>Depende de la red para funcionar correctamente.</li>
                    <li>Requiere configuración inicial y mantenimiento.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Tabla Comparativa -->
    <section class="container section">
        <h2>Comparativa de Servidores de Impresión</h2>
        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Tipo</th>
                        <th>Gestión de Impresoras</th>
                        <th>Seguridad</th>
                        <th>Accesibilidad</th>
                        <th>Ideal para</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dedicado</td>
                        <td>Alta</td>
                        <td>Alta</td>
                        <td>Local</td>
                        <td>Oficinas medianas y grandes</td>
                    </tr>
                    <tr>
                        <td>Integrado en impresora</td>
                        <td>Moderada</td>
                        <td>Media</td>
                        <td>Local</td>
                        <td>Oficinas pequeñas</td>
                    </tr>
                    <tr>
                        <td>Nube</td>
                        <td>Alta</td>
                        <td>Alta</td>
                        <td>Desde cualquier lugar</td>
                        <td>Teletrabajo y empresas distribuidas</td>
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
                <iframe src="https://www.youtube.com/embed/gEMYXId7aRA" title="Servidor de impresión explicado" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.youtube.com/embed/djK0uwngQn8" title="Cómo funciona un servidor de impresión" allowfullscreen></iframe>
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