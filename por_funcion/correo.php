<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor de Correo</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

</head>

<body>

    <!-- Header -->
    <header class="container section">
        <h1>Servidor de Correo</h1>
        <p class="text-center mt-3">Un servidor de correo (a veces llamado servidor de correo electrónico) es un programa de software que envía y recibe correo electrónico. A menudo, se utiliza como término general tanto para los agentes de transferencia de correo (MTA), como para los agentes de entrega de correo (MDA), cada uno de los cuales lleva a cabo una función ligeramente diferente.

            Los servidores de correo desempeñan un papel fundamental en el proceso de entrega del correo electrónico. Sin estos, los usuarios no tendrían forma de transferir esos mensajes a y desde otros clientes de correo.
            Los mensajes de correo electrónico se envían y reciben utilizando dos tipos de servidores de correo: servidores de correo saliente o *agentes de transferencia de correo* (MTA), y servidores de correo entrante o *agentes de entrega de correo* (MDA). Los MTA recuperan los mensajes de correo electrónico salientes del cliente de correo del remitente y luego los entregan a los MDA, que se encargan de almacenarlos temporalmente y entregar los mensajes de correo electrónico al cliente de correo del destinatario.

            Los servidores de correo entregan mensajes de correo electrónico entre clientes de correo utilizando protocolos de correo electrónico, que indican al servidor cómo procesar las solicitudes entrantes, dónde reenviar los mensajes y cómo entregarlos al cliente de correo previsto.

            Al enviar un correo electrónico de un cliente a otro, el MTA utiliza un protocolo de correo saliente, como el Protocolo de transferencia de correo simple (SMTP), para comprobar los datos del sobre* del correo electrónico del remitente y determinar adónde debe enviarse el mensaje. SMTP lo hace utilizando el Sistema de nombres de dominio (DNS) para traducir el dominio del destinatario en una dirección IP.

            Luego, localiza un agente de entrega de correo al consultar en los registros de intercambio de correo (MX). El registro MX indica al servidor cómo enrutar el mensaje a su destino final. Una vez que el registro MX devuelve el destino apropiado, el MDA utiliza un protocolo de correo entrante, como el Protocolo de acceso a mensajes de Internet (IMAP) o el Protocolo de oficina de correo versión 3 (POP3), para recuperar el mensaje de correo electrónico del servidor de correo y entregarlo al cliente (o clientes) de correo especificado.
        </p>

    </header>

    <!-- Tipos de Servidores de Correo -->
    <section class="container section">
        <h2>Tipos de Servidores de Correo</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://captainverify.com/es/blog/wp-content/uploads/2024/11/smtp-jpg.webp" class="card-img-top" alt="SMTP">
                    <div class="card-body">
                        <h5 class="card-title">SMTP (Envío)</h5>
                        <p class="card-text">Servidor encargado de enviar correos electrónicos desde el cliente hacia el servidor de destino.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img/https://www.inboxally.com/wp-content/uploads/2025/02/imap-vs-smtp-what-is-the-difference.png" class="card-img-top" alt="IMAP">
                    <div class="card-body">
                        <h5 class="card-title">IMAP (Recepción)</h5>
                        <p class="card-text">Permite recibir y sincronizar correos electrónicos en múltiples dispositivos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://www.getmailbird.com/assets/components/phpthumbof/cache/How-POP3-works-1024x410.8775f553ee944e68e6af1552f39e1669.webp" class="card-img-top" alt="POP3">
                    <div class="card-body">
                        <h5 class="card-title">POP3 (Recepción)</h5>
                        <p class="card-text">Servidor que descarga los correos desde el servidor al dispositivo del usuario, generalmente eliminándolos del servidor.</p>
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
                    <li>Centraliza la gestión de correos electrónicos.</li>
                    <li>Seguridad y control de spam y virus.</li>
                    <li>Permite comunicación interna y externa confiable.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Requiere mantenimiento y actualización constante.</li>
                    <li>Dependencia de red e infraestructura.</li>
                    <li>Puede requerir configuración técnica avanzada.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Tabla Comparativa -->
    <section class="container section">
        <h2>Comparativa de Servidores de Correo</h2>
        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Servidor</th>
                        <th>Función</th>
                        <th>Seguridad</th>
                        <th>Accesibilidad</th>
                        <th>Ideal para</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SMTP</td>
                        <td>Envío de correos</td>
                        <td>Alta</td>
                        <td>Red local / internet</td>
                        <td>Empresas y correo corporativo</td>
                    </tr>
                    <tr>
                        <td>IMAP</td>
                        <td>Recepción y sincronización</td>
                        <td>Alta</td>
                        <td>Múltiples dispositivos</td>
                        <td>Usuarios que usan varios dispositivos</td>
                    </tr>
                    <tr>
                        <td>POP3</td>
                        <td>Recepción y descarga</td>
                        <td>Media</td>
                        <td>Un solo dispositivo</td>
                        <td>Usuarios con acceso limitado</td>
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
                <iframe src="https://www.youtube.com/embed/pAMt06npCBs" title="Servidor de Correo explicado" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.youtube.com/embed/NGDaHX9W7Vc" title="Configuración de servidor de correo" allowfullscreen></iframe>
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