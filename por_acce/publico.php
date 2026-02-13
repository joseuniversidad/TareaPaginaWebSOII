<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor Público</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fff9f4;
            color: #333;
        }

        h1,
        h2 {
            text-align: center;
            margin-top: 2rem;
        }

        h1 {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 700;
        }

        h2 {
            font-size: clamp(1.5rem, 3vw, 2.5rem);
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        p {
            line-height: 1.7;
        }

        .card img {
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        iframe {
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            height: 350px;
        }

        .section {
            padding: 3rem 0;
        }

        table {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            vertical-align: middle !important;
        }
    </style>
</head>

<body>

    <header class="container section">
        <h1>Servidor Público</h1>
        <p class="text-center mt-3">El servidor público, funcionario público o empleado público es un trabajador perteneciente al sector público, esto es, al conjunto de las instituciones, organizaciones y entidades del Estado.

            Los servidores públicos suelen representar un porcentaje menor de la fuerza económicamente activa de un país: normalmente componen entre el 5% y 20% de los trabajadores en edad productiva, dependiendo del modelo económico y administrativo. Sus labores abarcan diferentes aspectos de la vida pública, desde la garantía del orden y la seguridad, hasta la administración del Estado y las instituciones públicas.

            Los servidores públicos se originaron en las antiguas monarquías, en las que hacían de siervos personales del rey y de su corte. En el mundo moderno, en que la estructura institucional del poder político no depende ya de cargos vitalicios, estos cargos públicos son sometidos a contratación y a diferentes sistemas de control de personal.</p>
    </header>

    <section class="container section">
        <h2>Servidor Público</h2>
        <div class="row g-4 mt-3">

            <div class="col-md-6 offset-md-3">
                <div class="card p-3 h-100">
                    <img src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png"
                        class="card-img-top"
                        alt="Servidor Público">
                    <div class="card-body text-center">
                        <h5 class="card-title">Servidor Público</h5>
                        <p class="card-text">
                            Servidor accesible desde Internet.
                            Permite que usuarios de cualquier parte del mundo
                            accedan a servicios como páginas web, aplicaciones
                            o almacenamiento en línea.
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
                    <li>Acceso abierto para cualquier usuario.</li>
                    <li>Promueve difusión masiva de información.</li>
                    <li>Ideal para servicios web, blogs y aplicaciones públicas.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Mayor riesgo de ataques externos.</li>
                    <li>Requiere medidas de seguridad avanzadas.</li>
                    <li>Puede saturarse con gran cantidad de usuarios.</li>
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
                        <th>Acceso</th>
                        <th>Seguridad</th>
                        <th>Costo</th>
                        <th>Uso común</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Público</td>
                        <td>Abierto a todos</td>
                        <td>Media-Alta</td>
                        <td>Variable</td>
                        <td>Páginas web, blogs, servicios online</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Video Explicativo</h2>
        <iframe src="https://www.youtube.com/embed/03pD0Jsogik" title="Servidor Público explicado" allowfullscreen></iframe>
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