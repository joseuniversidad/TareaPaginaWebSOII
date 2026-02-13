<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microservidor</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>


</head>

<body>

    <header class="container section" id="inicio">
        <h1>Microservidor</h1>
        <p class="text-center mt-3">Un microservidor es un servidor de tamaño compacto y bajo consumo energético, diseñado para realizar tareas específicas dentro de una red. A diferencia de los servidores tradicionales (como los de torre o rack), los microservidores ocupan menos espacio y utilizan procesadores de bajo consumo, lo que los hace ideales para pequeñas empresas, laboratorios, hogares o proyectos educativos.
            <br>
            Aunque su capacidad de procesamiento y almacenamiento es limitada en comparación con los servidores más grandes, los microservidores son eficientes para tareas como alojamiento web, almacenamiento de archivos, servidores de medios o aplicaciones específicas que no requieren recursos intensivos. Su diseño compacto y su bajo costo los convierten en una opción atractiva para quienes necesitan un servidor funcional sin la necesidad de una infraestructura compleja.
        </p>
    </header>

    <section class="container section">
        <h2>Microservidor</h2>
        <div class="row g-4 mt-3">

            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://servidor-hp.com.co/netcomp/wp-content/uploads/2015/06/servidor-hp-proliant-microserver-generation-8-e1597810017710.jpg"
                        class="card-img-top"
                        alt="Micro HP">
                    <div class="card-body text-center">
                        <h5 class="card-title">HP MicroServer</h5>
                        <p class="card-text">
                            Microservidor compacto ideal para pequeñas empresas.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://image.made-in-china.com/202f0j00yezcKHlqlIbB/Micro-Household-Grid-Connected-Solar-System-5kw-10kw-15kw-Power-Supply-for-Air-Conditioner-Washing-Machine-Refrigerator-TV.webp"
                        class="card-img-top"
                        alt="Micro Hogar">
                    <div class="card-body text-center">
                        <h5 class="card-title">Micro Hogar</h5>
                        <p class="card-text">
                            Servidor pequeño para almacenamiento y respaldo doméstico.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://i.ebayimg.com/images/g/C~8AAeSwrGBodhfn/s-l1200.webp"
                        class="card-img-top"
                        alt="Micro Empresarial">
                    <div class="card-body text-center">
                        <h5 class="card-title">Micro Empresarial</h5>
                        <p class="card-text">
                            Solución eficiente y de bajo consumo para redes pequeñas.
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
                    <li>Bajo consumo energético y espacio reducido.</li>
                    <li>Ideal para pequeñas empresas o proyectos específicos.</li>
                    <li>Fácil mantenimiento.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Recursos limitados, no apto para grandes cargas.</li>
                    <li>No es escalable a gran infraestructura.</li>
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
                        <th>Tamaño</th>
                        <th>Consumo</th>
                        <th>Escalabilidad</th>
                        <th>Uso común</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Microservidor</td>
                        <td>Pequeño</td>
                        <td>Bajo</td>
                        <td>Limitada</td>
                        <td>Pequeñas oficinas, tareas específicas</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Video Explicativo</h2>
        <iframe src="https://www.youtube.com/embed/v3EAZNzR_QQ" title="Microservidor explicado" allowfullscreen></iframe>
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