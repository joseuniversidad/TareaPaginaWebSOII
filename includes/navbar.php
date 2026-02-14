<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Responsive</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui;
        }

        /* NAVBAR */
        nav {
            background: #0f172a;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 20px;
            position: relative;
        }

        .logo {
            font-weight: bold;
            font-size: 20px;
        }

        /* MENU DESKTOP */
        .menu ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .menu ul li {
            position: relative;
        }

        .menu ul li a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        /* SUBMENU */
        .menu ul li ul {
            position: absolute;
            top: 40px;
            left: 0;
            background: #1e293b;
            display: none;
            flex-direction: column;
            min-width: 200px;
        }

        .menu ul li:hover ul {
            display: flex;
        }

        /* BOTONES */
        .actions .btn,
        .actions-mobile .btn {
            padding: 8px 14px;
            margin-left: 10px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            display: inline-block;
        }

        /* HAMBURGUESA */
        .menu-toggle {
            display: none;
            font-size: 26px;
            cursor: pointer;
        }

        /* MOBILE */
        @media (max-width: 900px) {

            .menu-toggle {
                display: block;
            }

            .menu {
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background: #0f172a;
                display: none;
                flex-direction: column;
                padding-bottom: 10px;
            }

            .menu.active {
                display: flex;
            }

            .menu ul {
                flex-direction: column;
            }

            .menu ul li ul {
                position: static;
                display: none;
            }

            .menu ul li.open ul {
                display: flex;
            }

            .actions {
                display: none;
            }

            .actions-mobile {
                display: flex;
                flex-direction: column;
                padding: 10px;
                gap: 8px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">SERVIDORES</div>

        <div class="menu-toggle" id="menu-toggle">☰</div>

        <div class="menu" id="menu">
            <ul>
                <li>
                    <a href="#">Por función</a>
                    <ul>
                        <li><a href="../por_funcion/web.php">Web</a></li>
                        <li><a href="../por_funcion/bd.php">Base de datos</a></li>
                        <li><a href="../por_funcion/correo.php">Correo</a></li>
                        <li><a href="../por_funcion/dhcp.php">DHCP</a></li>
                        <li><a href="../por_funcion/dns.php">DNS</a></li>
                        <li><a href="../por_funcion/media.php">Multimedia</a></li>
                        <li><a href="../por_funcion/proxy.php">Proxy</a></li>
                        <li><a href="../por_funcion/impresion.php">Impresion</a></li>
                        <li><a href="../por_funcion/app.php">Aplicaciones</a></li>
                        <li><a href="../por_funcion/archivos.php">Archivos</a></li>
                        <li><a href="../por_funcion/auth.php">Autenticacion</a></li>
                        <li><a href="../por_funcion/game.php">VideoJuegos</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">Acceso</a>
                    <ul>
                        <li><a href="../por_acce/publico.php">Público</a></li>
                        <li><a href="../por_acce/dedicado.php">Dedicado</a></li>
                        <li><a href="../por_acce/compartido.php">Compartido</a></li>
                        <li><a href="../por_acce/local.php">Local</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">Implementación</a>
                    <ul>
                        <li><a href="../por_imple/virtual.php">Virtual</a></li>
                        <li><a href="../por_imple/nube.php">Nube</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">Tamaño</a>
                    <ul>
                        <li><a href="../por_tamaño/depa.php">Departamento</a></li>
                        <li><a href="../por_tamaño/empresarial.php">Empresarial</a></li>
                        <li><a href="../por_tamaño/trabajo.php">Trabajo</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">Hardware</a>
                    <ul>
                        <li><a href="../por_hard/rack.php">Rack</a></li>
                        <li><a href="../por_hard/blade.php">Blade</a></li>
                        <li><a href="../por_hard/microservidor.php">Microservidor</a></li>
                    </ul>
                </li>
            </ul>

            <div class="actions-mobile">
                <a href="../views/servidores.php" class="btn">Menú principal</a>
                <a href="../logout.php" class="btn">Cerrar sesión</a>
            </div>
        </div>

        <div class="actions">
            <a href="../views/servidores.php" class="btn">Menú principal</a>
            <a href="../logout.php" class="btn">Cerrar sesión</a>
        </div>
    </nav>

    <script>
        const toggle = document.getElementById("menu-toggle");
        const menu = document.getElementById("menu");

        toggle.addEventListener("click", () => {
            menu.classList.toggle("active");
        });

        document.querySelectorAll(".menu ul li > a").forEach(link => {
            link.addEventListener("click", function(e) {
                if (window.innerWidth < 900) {
                    const parent = this.parentElement;
                    parent.classList.toggle("open");
                    e.preventDefault();
                }
            });
        });
    </script>

</body>

</html>