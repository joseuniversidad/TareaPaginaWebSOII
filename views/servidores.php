<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases de Servisores</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollSmoother.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Flip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>


<body>

    <div id="smooth-wrapper">
        <div id="smooth-content">

            <section class="panel plain">
                <h3 style="color: white;">Clases de Servidores</h3>
            </section>

            <section id="portfolio">
                <div class="container-fluid">
                    <div class="horiz-gallery-wrapper">
                        <div class="horiz-gallery-strip">
                            <!-- 1. POR FUNCIÓN -->
                            <div class="project-wrap">
                                <a href="../por_funcion/index.php">
                                    <div class="overlay">Por Función<br><small>Servidor Web</small></div>
                                    <img src="https://gtsperu.com/wp-content/uploads/2023/11/gts-que-es-un-servidor.jpg" alt="Servidor por Función">
                                </a>
                            </div>

                            <!-- 2. POR IMPLEMENTACIÓN -->
                            <div class="project-wrap">
                                <a href="../por_imple/index.php">
                                    <div class="overlay">Por Implementación<br><small>Servidor Virtual</small></div>
                                    <img src="https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img,w_926,h_616/https://www.tamara.com.pe/wp-content/uploads/2022/08/Configuracion-de-Servidores.jpg" alt="Servidor por Implementación">
                                </a>
                            </div>

                            <!-- 3. POR ACCESO Y RECURSOS -->
                            <div class="project-wrap">
                                <a href="../por_acce/index.php">
                                    <div class="overlay">Por Acceso y Recursos<br><small>Servidor Dedicado</small></div>
                                    <img src="https://www.godaddy.com/resources/latam/wp-content/uploads/sites/4/2023/06/servidores.webp" alt="Servidor por Acceso">
                                </a>
                            </div>

                            <!-- 4. POR TAMAÑO -->
                            <div class="project-wrap">
                                <a href="../por_tamaño/index.php">
                                    <div class="overlay">Por Tamaño<br><small>Servidor Rack</small></div>
                                    <img src="https://www.eabel.com/wp-content/uploads/2024/10/Set-of-server-cabinets-with-mesh-doors-of-various-heights.webp" alt="Servidor por Tamaño">
                                </a>
                            </div>

                            <!-- 5. SEGÚN EL HARDWARE -->
                            <div class="project-wrap">
                                <a href="../por_hard/index.php">
                                    <div class="overlay">Según el Hardware<br><small>Servidor Físico</small></div>
                                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" alt="Según Hardware">
                                </a>
                            </div>
                        </div>

                    </div>
            </section>

            <section class="panel plain">
                <h3 style="color: white;">Dale Click para explorar las Clases de Servidores!</h3>
                <br>
                <form action="logout.php" method="post">
                    <button type="submit" style="padding: 10px 20px; font-size: 16px; cursor: pointer; background-color: #e74c3c; color: white; border: none; border-radius: 5px;">
                        Cerrar Sesión
                    </button>
                </form>
            </section>

           


        </div>
    </div>



</body>
<script>
    gsap.registerPlugin(ScrollTrigger);

    // Horizontal Scroll Galleries
    const horizontalSections = gsap.utils.toArray(".horiz-gallery-wrapper");

    horizontalSections.forEach(function(sec) {
        const pinWrap = sec.querySelector(".horiz-gallery-strip");

        let pinWrapWidth = pinWrap.scrollWidth;
        let horizontalScrollLength = pinWrapWidth - window.innerWidth;

        gsap.to(pinWrap, {
            x: -horizontalScrollLength,
            ease: "none",
            scrollTrigger: {
                trigger: sec,
                start: "top top",
                end: () => "+=" + pinWrapWidth,
                scrub: true,
                pin: true,
                invalidateOnRefresh: true,
            },
        });
    });
</script>


</html>