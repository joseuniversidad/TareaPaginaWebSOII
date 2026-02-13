<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidores Físicos</title>
    <link rel="stylesheet" href="../css/principal.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/Observer.min.js"></script>

</head>
<?php include '../includes/navbar.php'; ?>

<body>

    <header>
        <div>Servidores Físicos</div>
        <div>Desplázate o toca para seleccionar</div>
    </header>

    <!-- ======================== Secciones con <a> ======================== -->
    <section>
        <a href="torre.php" class="outer">
            <div class="inner">
                <div class="bg"
                    style="background-image:url('https://cdn11.bigcommerce.com/s-bmqf4dxrop/images/stencil/1030x680/uploaded_images/untitled-design-7-1-.png?t=1733945236');">
                    <h2>Servidor Torre</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="rack.php" class="outer">
            <div class="inner">
                <div class="bg"
                    style="background-image:url('https://www.eabel.com/wp-content/uploads/2024/11/Passive-cooling-system-for-a-server-rack.webp');">
                    <h2>Servidor en Rack</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="blade.php" class="outer">
            <div class="inner">
                <div class="bg"
                    style="background-image:url('https://www.shutterstock.com/image-photo/server-chassis-platform-virtualization-data-600nw-235714084.jpg');">
                    <h2>Servidor Blade</h2>
                </div>
            </div>
        </a>
    </section>

    <section>
        <a href="microservidor.php" class="outer">
            <div class="inner">
                <div class="bg"
                    style="background-image:url('https://www.storagereview.com/wp-content/uploads/2021/04/hpe-gen-10-microserver-front.jpg');">
                    <h2>Microservidor</h2>
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
        gotoSection(0, 1);
    </script>
<script src="../js/drop.js"></script>
</body>

</html>