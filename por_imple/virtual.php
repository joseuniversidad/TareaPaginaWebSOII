<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor Virtual / VPS</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>


</head>

<body>

    <header class="container section" id="inicio">
        <h1>Servidor Virtual / VPS</h1>
        <p class="text-center mt-3">
            La definición de un servidor virtual puede variar según el caso de uso. A menudo, ubicadas en un centro de datos externo o en un entorno de nube, la puesta en marcha de servidores implica convertir un servidor físico en varias máquinas virtuales (VM). Un servidor virtual se configura para que varios usuarios puedan compartir su potencia de procesamiento. Cuando se compara un servidor físico con uno virtual, el servidor virtual demuestra ser una manera eficaz de ahorrar dinero en costos de hardware físico. Además, utiliza comparativamente menos energía para ahorrar costos adicionales y beneficios del entorno.
            <br>
            Obtén más información para incorporar fácilmente los servidores virtuales en Compute Engine, la infraestructura de procesamiento basada en la nube.
        </p>
    </header>

    <section class="container section">
        <h2>Tipos de Servidores Virtuales</h2>
        <div class="row g-4 mt-3">

            <!-- Virtual 1 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://ingenierobinario.com/wp-content/uploads/2021/02/sistemvirtual.jpg"
                        class="card-img-top"
                        alt="Máquina Virtual">
                    <div class="card-body text-center">
                        <h5 class="card-title">Máquina Virtual (VM)</h5>
                        <p class="card-text">
                            Servidor virtual creado dentro de un servidor físico
                            mediante tecnología de virtualización.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Virtual 2 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://www.servnet.mx/hubfs/imagenes%20art%20MS_dic%202021/vsp%20que%20es%20y%20como%20elegir%20el%20mejor%20para%20tu%20sitio%20web_-2.png"
                        class="card-img-top"
                        alt="VPS">
                    <div class="card-body text-center">
                        <h5 class="card-title">VPS (Servidor Privado Virtual)</h5>
                        <p class="card-text">
                            Divide un servidor físico en varios servidores virtuales
                            independientes.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Virtual 3 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://www.unimedia.tech/wp-content/uploads/2024/10/hypervisor.png"
                        class="card-img-top"
                        alt="Hypervisor">
                    <div class="card-body text-center">
                        <h5 class="card-title">Servidor con Hypervisor</h5>
                        <p class="card-text">
                            Usa un software llamado hypervisor para crear y administrar
                            múltiples servidores virtuales.
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
                    <li>Coste más bajo que un servidor físico completo.</li>
                    <li>Escalable mediante asignación de más recursos virtuales.</li>
                    <li>Independencia de otros VPS en el mismo host.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Recursos compartidos pueden afectar rendimiento.</li>
                    <li>Menor control que un servidor físico dedicado.</li>
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
                        <th>Recursos</th>
                        <th>Escalabilidad</th>
                        <th>Costo</th>
                        <th>Uso común</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>VPS</td>
                        <td>Asignados</td>
                        <td>Alta</td>
                        <td>Medio</td>
                        <td>Sitios web, pruebas de desarrollo, pequeñas empresas</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Video Explicativo</h2>
        <iframe src="https://www.youtube.com/embed/IZakv_0GR_o" title="Servidor VPS explicado" allowfullscreen></iframe>
    </section>

    <div class="container text-center my-4">
        <a href="#inicio" class="btn btn-primary btn-top">🔝 Regresar al Inicio</a>
    </div>

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