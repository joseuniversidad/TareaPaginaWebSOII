<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor Proxy</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
</head>

<body>

    <header class="container section">
        <h1>Servidor Proxy</h1>
        <p class="text-center mt-3">Un servidor proxy es un sistema o enrutador que proporciona una puerta de enlace entre los usuarios e Internet. Por lo tanto, ayuda a evitar que los ciberatacantes ingresen a una red privada. Es un servidor denominado “intermediario”, porque está entre los usuarios finales y las páginas web que visitan en línea.
            <br>
            Cuando una computadora se conecta a Internet, utiliza una dirección IP. Esto es similar a la dirección de su casa: le indica a los datos entrantes adónde ir y marca los datos salientes con una dirección de devolución para que otros dispositivos se autentiquen. Un servidor proxy es esencialmente una computadora en Internet que tiene una dirección IP propia.
        </p>
    </header>

    <section class="container section">
        <h2>Tipos de Servidor Proxy</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://cibersafety.com/wp-content/uploads/2025/07/Proxy-Transparente.png" class="card-img-top" alt="Proxy Transparente">
                    <div class="card-body">
                        <h5 class="card-title">Proxy Transparente</h5>
                        <p class="card-text">No requiere configuración en el cliente; registra y filtra tráfico automáticamente.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://tecnonucleous.com/content/images/2018/03/que-es-un-proxy.png" class="card-img-top" alt="Proxy Anónimo">
                    <div class="card-body">
                        <h5 class="card-title">Proxy Anónimo</h5>
                        <p class="card-text">Oculta la dirección IP del cliente para mejorar privacidad y seguridad.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 h-100">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgjfx-eO1IhGPHfUaUaiV-Smd7GtXHh20OvnNOAUr3jMXkOWe8EFioh8LJzLsy8CXHzMzBymb8yfG939JPySPoRCe4gNb10kcaArCjABp2VBjfzvZ5OWoVB1mIqxB_qEuKTeCP7y0JUFI0/s1600/J7PA8.jpg" class="card-img-top" alt="Proxy Reverso">
                    <div class="card-body">
                        <h5 class="card-title">Proxy Reverso</h5>
                        <p class="card-text">Se coloca delante de servidores web para protegerlos y balancear la carga de solicitudes.</p>
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
                    <li>Mejora la seguridad y privacidad.</li>
                    <li>Optimiza el tráfico de red.</li>
                    <li>Permite control de acceso y filtrado de contenido.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Puede generar retrasos si está saturado.</li>
                    <li>Requiere mantenimiento y configuración.</li>
                    <li>Si falla, puede afectar a todos los usuarios.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container section">
        <h2>Comparativa de Servidores Proxy</h2>
        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Tipo</th>
                        <th>Función</th>
                        <th>Privacidad</th>
                        <th>Rendimiento</th>
                        <th>Uso común</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Transparente</td>
                        <td>Filtra y registra tráfico</td>
                        <td>Baja</td>
                        <td>Media</td>
                        <td>Escuelas y empresas</td>
                    </tr>
                    <tr>
                        <td>Anónimo</td>
                        <td>Oculta IP del cliente</td>
                        <td>Alta</td>
                        <td>Media</td>
                        <td>Privacidad en navegación</td>
                    </tr>
                    <tr>
                        <td>Reverso</td>
                        <td>Protege servidores web</td>
                        <td>Alta</td>
                        <td>Alta</td>
                        <td>Web corporativa y balanceo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Videos Explicativos</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-6">
                <iframe src="https://www.youtube.com/embed/4_pSZrFKk4o" title="Servidor Proxy explicado" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.youtube.com/embed/c4I66Y0x8ZI" title="Configuración Proxy" allowfullscreen></iframe>
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