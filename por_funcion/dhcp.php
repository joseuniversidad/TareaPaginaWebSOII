<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor DHCP</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>

<body>

    <!-- Header -->
    <header class="container section">
        <h1>Servidor DHCP</h1>
        <p class="text-center mt-3">
            El servidor DHCP es una pieza clave en la administración de redes que asigna de manera automática direcciones IP y otros parámetros de red necesarios para que un dispositivo se comunique en una red IP. Su funcionamiento elimina la necesidad de asignar direcciones IP manualmente, optimizando la gestión de la red y permitiendo que los dispositivos se conecten a Internet o a redes locales sin intervención humana.
            El propósito principal de un servidor DHCP es gestionar de forma centralizada y automática la asignación de direcciones IP en una red. Esto incluye no solo la asignación de IP, sino también la configuración de otros parámetros necesarios, como la máscara de subred, la puerta de enlace predeterminada y los servidores DNS. Facilita enormemente la administración de una red, especialmente en entornos donde los dispositivos se conectan y desconectan frecuentemente.
        </p>
    </header>

    <!-- Tipos de Servidores DHCP -->
    <section class="container section">
        <h2>Tipos de Servidores DHCP</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-6">
                <div class="card p-3 h-100">
                    <img src="https://www.solvetic.com/uploads/tutorials/monthly_05_2019/026544da85249446582e48b4a3a5a7cd.png" class="card-img-top" alt="Servidor DHCP Estático">
                    <div class="card-body">
                        <h5 class="card-title">DHCP Estático</h5>
                        <p class="card-text">Asigna direcciones IP fijas a dispositivos específicos basándose en su MAC Address.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3 h-100">
                    <img src="https://www.manageengine.com/products/oputils/images/dhcp-process.jpg" class="card-img-top" alt="Servidor DHCP Dinámico">
                    <div class="card-body">
                        <h5 class="card-title">DHCP Dinámico</h5>
                        <p class="card-text">Asigna direcciones IP automáticamente por un tiempo limitado (lease) y las recicla cuando expiran.</p>
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
                    <li>Automatiza la asignación de IPs evitando errores.</li>
                    <li>Facilita la administración de grandes redes.</li>
                    <li>Reduce conflictos de direcciones IP.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Si el servidor falla, los dispositivos pueden perder conexión.</li>
                    <li>Requiere configuración inicial correcta.</li>
                    <li>Dependencia de la infraestructura de red.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Tabla Comparativa -->
    <section class="container section">
        <h2>Comparativa de Servidores DHCP</h2>
        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Tipo</th>
                        <th>Asignación</th>
                        <th>Uso típico</th>
                        <th>Ventaja principal</th>
                        <th>Desventaja</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Estático</td>
                        <td>Fija según MAC</td>
                        <td>Dispositivos críticos (servidores, impresoras)</td>
                        <td>Control total sobre IPs</td>
                        <td>No escala bien en redes grandes</td>
                    </tr>
                    <tr>
                        <td>Dinámico</td>
                        <td>Temporal y automática</td>
                        <td>Redes corporativas y domésticas</td>
                        <td>Automatiza y evita conflictos</td>
                        <td>Dependencia del servidor DHCP</td>
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
                <iframe src="https://www.youtube.com/embed/0T2eA-01w9Y" title="Servidor DHCP explicado" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.youtube.com/embed/K07wzpcKrsk" title="Configuración de DHCP" allowfullscreen></iframe>
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