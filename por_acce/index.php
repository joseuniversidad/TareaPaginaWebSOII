<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidores por Acceso</title>
    <link rel="stylesheet" href="../css/principal.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Observer.min.js"></script>
</head>
<?php include '../includes/navbar.php'; ?>
<body>

    <header>
        <div>Servidores por Acceso / Uso</div>
        <div>Toca o desplázate para ver</div>
    </header>

    <!-- ======================== Secciones con enlaces <a> ======================== -->
    <section>
        <a href="compartido.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image:url('https://blog.systempix.com/wp-content/uploads/2015/12/hosting_compartido.jpg');">
                    <h2>Servidor Compartido</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="dedicado.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image:url('https://www.nunsys.com/wp-content/uploads/2021/09/servidor-dedicado.png');">
                    <h2>Servidor Dedicado</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="publico.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image:url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d');">
                    <h2>Servidor Público</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="privado.php" class="outer">
            <div class="inner">
                <div class="bg" style="background-image:url('https://miro.medium.com/v2/resize:fit:1400/0*WoWr42XpDNsj5DXz');">
                    <h2>Servidor Privado / Local</h2>
                </div>
            </div>
        </a>
    </section>

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

        // Ya no hace falta listener de click, los <a> se encargan de la navegación

        gotoSection(0, 1);
    </script>
<script src="../js/drop.js"></script>
</body>

</html>