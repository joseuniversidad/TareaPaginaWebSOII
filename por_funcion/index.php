<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidores Por Funcion</title>
    <link rel="stylesheet" href="../css/principal.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Observer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/SplitText.min.js"></script>
</head>
<?php include '../includes/navbar.php'; ?>
<body>

    <header>
        <div>Servidores</div>
        <div>Desplázate para seleccionar</div>
    </header>

    <!-- ======================== Secciones con enlaces <a> ======================== -->
    <section>
        <a href="archivos.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image: url('https://images.unsplash.com/photo-1558494949-ef010cbdcc31');">
                    <h2>Servidor de Archivos</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="impresion.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image: url('https://www.atareao.es/wp-content/uploads/2017/09/raspberry-como-servidor-de-impresion.png');">
                    <h2>Servidor de Impresión</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="web.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image: url('https://images.unsplash.com/photo-1498050108023-c5249f4df085');">
                    <h2>Servidor Web</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="bd.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image: url('https://images.unsplash.com/photo-1544383835-bda2bc66a55d');">
                    <h2>Servidor de Base de Datos</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="correo.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image: url('https://images.unsplash.com/photo-1557200134-90327ee9fafa');">
                    <h2>Servidor de Correo</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="app.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image: url('https://images.unsplash.com/photo-1518770660439-4636190af475');">
                    <h2>Servidor de Aplicaciones</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="dns.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image: url('https://images.unsplash.com/photo-1504639725590-34d0984388bd');">
                    <h2>Servidor DNS</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="dhcp.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b');">
                    <h2>Servidor DHCP</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="auth.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image: url('https://images.unsplash.com/photo-1510511459019-5dda7724fd87');">
                    <h2>Servidor de Autenticación</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="proxy.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image: url('https://images.unsplash.com/photo-1526378722484-bd91ca387e72');">
                    <h2>Servidor Proxy</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="media.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image: url('https://images.unsplash.com/photo-1492724441997-5dc865305da7');">
                    <h2>Servidor Multimedia</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="game.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image: url('https://images.unsplash.com/photo-1542751371-adc38448a05e');">
                    <h2>Servidor de Juegos</h2>
                </div>
            </div>
        </a>
    </section>

    <!-- ======================== GSAP Animación ======================== -->
    <script>
        gsap.registerPlugin(Observer);

        let sections = gsap.utils.toArray("section"),
            images = gsap.utils.toArray(".bg"),
            headings = gsap.utils.toArray("h2"),
            outerWrappers = gsap.utils.toArray(".outer"),
            innerWrappers = gsap.utils.toArray(".inner"),
            currentIndex = -1,
            wrap = gsap.utils.wrap(0, sections.length),
            animating;

        gsap.set(outerWrappers, {
            yPercent: 100
        });
        gsap.set(innerWrappers, {
            yPercent: -100
        });

        function gotoSection(index, direction) {
            index = wrap(index);
            animating = true;
            let fromTop = direction === -1,
                dFactor = fromTop ? -1 : 1,
                tl = gsap.timeline({
                    defaults: {
                        duration: 1.25,
                        ease: "power1.inOut"
                    },
                    onComplete: () => animating = false
                });

            if (currentIndex >= 0) {
                gsap.set(sections[currentIndex], {
                    zIndex: 0
                });
                tl.to(images[currentIndex], {
                        yPercent: -15 * dFactor
                    })
                    .set(sections[currentIndex], {
                        autoAlpha: 0
                    });
            }

            gsap.set(sections[index], {
                autoAlpha: 1,
                zIndex: 1
            });
            tl.fromTo([outerWrappers[index], innerWrappers[index]], {
                    yPercent: i => i ? -100 * dFactor : 100 * dFactor
                }, {
                    yPercent: 0
                }, 0)
                .fromTo(images[index], {
                    yPercent: 15 * dFactor
                }, {
                    yPercent: 0
                }, 0)
                .fromTo(headings[index], {
                    autoAlpha: 0,
                    yPercent: 150 * dFactor
                }, {
                    autoAlpha: 1,
                    yPercent: 0,
                    duration: 1,
                    ease: "power2"
                }, 0.2);

            currentIndex = index;
        }

        Observer.create({
            type: "wheel,touch,pointer",
            wheelSpeed: -1,
            onDown: () => !animating && gotoSection(currentIndex - 1, -1),
            onUp: () => !animating && gotoSection(currentIndex + 1, 1),
            tolerance: 10,
            preventDefault: true
        });

        // Iniciar en la primera sección
        gotoSection(0, 1);
    </script>
<script src="../js/drop.js"></script>
</body>

</html>