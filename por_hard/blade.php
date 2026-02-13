<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor Blade</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <style>

    </style>
</head>

<body>

    <header class="container section" id="inicio">
        <h1>Servidor Blade</h1>
        <p class="text-center mt-3">En un entorno de centro de datos, los administradores tienen que poder colocar tantos servidores como sea posible. El término “blade” (cuchilla u hoja) se utiliza para describir unos servidores muy finos y pequeños que se colocan en “bahías” y se conectan entre sí para realizar cálculos de gran potencia. Las bahías se encuentran en un contenedor en forma de caja (el chasis), en el que potencialmente caben hasta ocho cuchillas. Luego, el chasis puede instalarse en un bastidor situado en el centro de datos. Con esta configuración, es posible colocar docenas de servidores en un bastidor.
            <br>
            Los blades son servidores individuales, por lo que contienen los componentes básicos de hardware que conforman una máquina, como la CPU, la memoria, los controladores de red y los puertos de entrada y de salida. Los servidores están interconectados mediante fibra, lo que permite que los datos puedan compartirse rápidamente entre los servidores y la red.
        </p>
    </header>
    <section class="container section">
        <h2>Servidor Blade</h2>
        <div class="row g-4 mt-3">

            <!-- Blade 1 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://esemanal.mx/revista/wp-content/uploads/2014/09/nibm.jpg"
                        class="card-img-top"
                        alt="Blade IBM">
                    <div class="card-body text-center">
                        <h5 class="card-title">Blade IBM</h5>
                        <p class="card-text">
                            Sistema Blade empresarial de alto rendimiento
                            utilizado en centros de datos corporativos.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Blade 2 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://www.hewlettpackardhistory.com/wp-content/uploads/2020/04/G5206003052006_JPGHighres-768x753.jpg"
                        class="card-img-top"
                        alt="Blade HP">
                    <div class="card-body text-center">
                        <h5 class="card-title">Blade HP</h5>
                        <p class="card-text">
                            Servidor modular HP BladeSystem,
                            diseñado para maximizar espacio y eficiencia.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Blade 3 -->
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://www.industriaembebidahoy.com/imagenes/2015/10/Trenton-MBS1000.jpg"
                        class="card-img-top"
                        alt="Blade Modular">
                    <div class="card-body text-center">
                        <h5 class="card-title">Blade Modular</h5>
                        <p class="card-text">
                            Ejemplo de servidor blade instalado en chasis compartido
                            para infraestructura empresarial.
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
                    <li>Diseño compacto, permite alojar múltiples servidores en un solo chasis.</li>
                    <li>Alta eficiencia energética y de espacio.</li>
                    <li>Fácil administración centralizada.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Costo inicial elevado.</li>
                    <li>Dependencia del chasis y fuente de alimentación compartida.</li>
                    <li>No ideal para pequeñas empresas.</li>
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
                        <td>Blade</td>
                        <td>Muy compacto</td>
                        <td>Eficiente</td>
                        <td>Alta</td>
                        <td>Centros de datos y empresas grandes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Video Explicativo</h2>
        <iframe src="https://www.youtube.com/embed/UGejVb4_I0I" title="Servidor Blade explicado" allowfullscreen></iframe>
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