<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor de Juegos</title>
    <link rel="stylesheet" href="../css/vistas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

</head>

<body>

    <header class="container section">
        <h1>Servidor de Juegos</h1>
        <p class="text-center mt-3">Para comprender la funcionalidad de un servidor dedicado de juegos, es necesario analizar su arquitectura centralizada y la forma en que gestiona las complejas interacciones de los juegos multijugador. En su núcleo, un servidor dedicado de juegos funciona como un ordenador remoto que aloja un videojuego, manejando todo el procesamiento de datos necesario sin la necesidad de renderizar gráficos o ejecutar un motor de juego localmente en el dispositivo de un jugador.
            <br>
            En su lugar, el servidor se centra en gestionar el orden mundial del juego, las estadísticas de los jugadores y las interacciones en tiempo real, enviando instrucciones al dispositivo de cada jugador conectado sobre cómo presentar el estado del juego. Esta configuración garantiza que todos los jugadores experimenten el mismo entorno de juego simultáneamente, independientemente de sus condiciones individuales de hardware o red.
            <br>
            Cuando un jugador se conecta a un servidor dedicado de alojamiento de juegos, su dispositivo se comunica directamente con el servidor, enviando datos sobre sus acciones, como mover, atacar o interactuar con el mundo del juego ilimitado.
            <br>
            El servidor procesa estas entradas, actualiza el estado del juego en consecuencia y luego transmite la información actualizada a todos los jugadores conectados. Este bucle continuo de intercambio de datos se realiza en tiempo real, asegurando que la vista de cada jugador sobre el juego permanezca sincronizada.
            <br>
            A diferencia del alojamiento peer-to-peer, en el que el dispositivo de un jugador actúa como servidor de alojamiento y puede causar interrupciones si se desconecta o tiene una mala conexión, un servidor dedicado permanece en línea y funciona mejor independientemente del estado de cada jugador, proporcionando una experiencia de juego estable e ininterrumpida.
        </p>
    </header>

    <section class="container section">
        <h2>Tipos de Servidores de Juegos</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-6">
                <div class="card p-3 h-100">
                    <img src="https://i.ytimg.com/vi/d9r53zj7Okc/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDSNAQ3Dqhf75vCWF-d23im_VKn5w" class="card-img-top" alt="Servidor MMO">
                    <div class="card-body">
                        <h5 class="card-title">Servidor MMO</h5>
                        <p class="card-text">Permite juegos masivos multijugador online, gestionando cientos o miles de jugadores simultáneamente.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3 h-100">
                    <img src="https://cs-us.uicdn.net/fileadmin/ionos-core/30450-Gaming-server-large.svg" class="card-img-top" alt="Servidor de Juegos Local">
                    <div class="card-body">
                        <h5 class="card-title">Servidor de Juegos Local</h5>
                        <p class="card-text">Permite partidas privadas o LAN, ideal para grupos pequeños y competiciones locales.</p>
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
                    <li>Soporta partidas multijugador online.</li>
                    <li>Gestión centralizada de usuarios y datos.</li>
                    <li>Actualizaciones y contenido controlado por el servidor.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Desventajas</h5>
                <ul>
                    <li>Requiere ancho de banda alto y hardware potente.</li>
                    <li>Si el servidor cae, los jugadores pierden la conexión.</li>
                    <li>Costos de mantenimiento elevados en servidores MMO.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container section">
        <h2>Comparativa de Servidores de Juegos</h2>
        <div class="table-responsive mt-3">
            <table class="table table-bordered text-center">
                <thead class="table-light">
                    <tr>
                        <th>Tipo</th>
                        <th>Jugadores</th>
                        <th>Conexión</th>
                        <th>Uso común</th>
                        <th>Ideal para</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MMO</td>
                        <td>Cientos/miles</td>
                        <td>Online global</td>
                        <td>World of Warcraft, Fortnite</td>
                        <td>Gaming masivo online</td>
                    </tr>
                    <tr>
                        <td>Local/LAN</td>
                        <td>Pequeño grupo</td>
                        <td>LAN o online privado</td>
                        <td>CS:GO, Minecraft LAN</td>
                        <td>Partidas privadas y competiciones locales</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="container section">
        <h2>Videos Explicativos</h2>
        <div class="row g-4 mt-3">
            <div class="col-md-12">
                <iframe src="https://www.youtube.com/embed/m8OOLBV5OZI" title="Servidor de Juegos explicado" allowfullscreen></iframe>
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