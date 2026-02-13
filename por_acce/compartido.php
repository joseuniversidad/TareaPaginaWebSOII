<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor Compartido</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>

<body>

    <header class="container section">
        <h1>Servidor Compartido</h1>
        <p class="text-center mt-3">Podemos definir hosting compartido como aquel por el que varias páginas web comparten los recursos de un alojamiento. Por ejemplo, si tenemos un servidor con una CPU de 12 núcleos, 32 GB de memoria RAM y una memoria SSD de 2 TB, todo ese hardware se va a dividir entre los que hayan pagado su plan de alojamiento compartido.
            <br>
            Por esta razón es un hosting muy interesante, económico e ideal para quienes no necesiten muchos recursos (una página web nueva, recién estrenada y sin muchas visitas, por ejemplo). Los recursos de los servidores o máquinas se comparten, pero cada web es independiente y no hay relación entre los clientes que han pagado por el hosting. Con este modelo, los administradores web también pueden hacer lo que estimen oportuno con su página: configurarla, darle un diseño concreto, instalar plugins… en definitiva, controlar y gestionarla a su antojo. Simplemente vamos a tener la limitación que marca el hardware de la máquina.
            <br>
            Volviendo al ejemplo del servidor anterior, queda en manos del proveedor su gestión y mantenimiento. Esto es importante porque si hay muchos clientes conectados a esos 32 GB de memoria RAM, puede que tengamos problemas de estabilidad. Por tanto, se exige cierta prudencia por parte del proveedor: no se puede asignar a demasiados clientes una máquina con hardware limitado.
        </p>
    </header>


    <section class="container section">
        <h2>Tipos de Servidores</h2>
        <div class="row g-4 mt-3">

            <!-- Servidor Compartido -->
            <div class="col-md-6">
                <div class="card p-3 h-100">
                    <img src="https://www.tecnozero.com/wp-content/uploads/2014/03/server-3.png"
                        class="card-img-top"
                        alt="Servidor Compartido">
                    <div class="card-body">
                        <h5 class="card-title">Servidor Compartido</h5>
                        <p class="card-text">
                            Varios usuarios comparten los recursos del mismo servidor físico.
                            Es económico y recomendado para proyectos pequeños o sitios web básicos.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Servidor Dedicado -->
            <div class="col-md-6">
                <div class="card p-3 h-100">
                    <img src="https://assets-blog.hostgator.mx/wp-content/uploads/2017/05/Upgrade-Servidor-Dedicado-1.webp"
                        class="card-img-top"
                        alt="Servidor Dedicado">
                    <div class="card-body">
                        <h5 class="card-title">Servidor Dedicado</h5>
                        <p class="card-text">
                            Servidor físico exclusivo para un solo cliente.
                            Ofrece máximo rendimiento, control total y mayor seguridad.
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
                    <li>Bajo costo de mantenimiento.</li>
                    <li>Fácil de administrar para pequeños sitios.</li>
                    <li>Ideal para principiantes o proyectos personales.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Recursos compartidos, menor rendimiento si otros usuarios consumen mucho.</li>
                    <li>Menor seguridad comparado con servidores dedicados.</li>
                    <li>Limitaciones en configuraciones personalizadas.</li>
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
                        <th>Costo</th>
                        <th>Rendimiento</th>
                        <th>Seguridad</th>
                        <th>Uso común</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Compartido</td>
                        <td>Bajo</td>
                        <td>Limitado</td>
                        <td>Media</td>
                        <td>Pequeños sitios web y blogs</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Video Explicativo</h2>
        <iframe src="https://www.youtube.com/embed/u4Avo93hrfQ" title="Servidor Compartido explicado" allowfullscreen></iframe>
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