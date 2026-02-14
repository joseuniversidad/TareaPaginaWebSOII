<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Servidores</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui;
        }

        nav {
            background: #0f172a;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
        }

        /* MENU NORMAL (PC) */
        .menu ul {
            list-style: none;
            display: flex;
            gap: 15px;
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

        .menu ul li ul {
            position: absolute;
            background: #1e293b;
            display: none;
            flex-direction: column;
            min-width: 220px;
        }

        .menu ul li:hover ul {
            display: flex;
        }

        .actions a {
            background: #2563eb;
            color: white;
            padding: 8px 14px;
            margin-left: 8px;
            border-radius: 6px;
            text-decoration: none;
        }

        /* =========================
   CELULAR → VERTICAL
========================= */
        @media (max-width:900px) {

            nav {
                flex-direction: column;
                align-items: stretch;
            }

            .logo {
                text-align: center;
                padding: 12px;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .menu {
                width: 100%;
            }

            .menu ul {
                flex-direction: column;
                width: 100%;
            }

            .menu ul li {
                width: 100%;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .menu ul li a {
                padding: 15px;
                width: 100%;
            }

            /* SUBMENUS ESTILO PANEL */
            .menu ul li ul {
                position: static;
                display: none;
                background: linear-gradient(180deg, #e88989, #8b8be8);
                border-radius: 12px;
                margin: 8px;
                overflow: hidden;
            }

            .menu ul li.open ul {
                display: flex;
            }

            .menu ul li ul li a {
                padding: 16px;
                font-size: 15px;
            }

            .actions {
                display: flex;
                flex-direction: column;
                padding: 10px;
                gap: 10px;
            }

            .actions a {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">SERVIDORES</div>

        <div class="menu">
            <ul>
                <li>
                    <a href="../por_funcion/index.php">Por función</a>
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
                    <a href="../por_acce/index.php">Acceso</a>
                    <ul>
                        <li><a href="../por_acce/publico.php">Público</a></li>
                        <li><a href="../por_acce/dedicado.php">Dedicado</a></li>
                        <li><a href="../por_acce/compartido.php">Compartido</a></li>
                        <li><a href="../por_acce/local.php">Local</a></li>
                    </ul>
                </li>

                <li>
                    <a href="../por_imple/index.php">Implementación</a>
                    <ul>
                        <li><a href="../por_imple/virtual.php">Virtual</a></li>
                        <li><a href="../por_imple/nube.php">Nube</a></li>
                    </ul>
                </li>

                <li>
                    <a href="../por_tamaño/index.php">Tamaño</a>
                    <ul>
                        <li><a href="../por_tamaño/depa.php">Departamento</a></li>
                        <li><a href="../por_tamaño/empresarial.php">Empresarial</a></li>
                        <li><a href="../por_tamaño/trabajo.php">Trabajo</a></li>
                    </ul>
                </li>

                <li>
                    <a href="../por_hard/index.php">Hardware</a>
                    <ul>
                        <li><a href="../por_hard/rack.php">Rack</a></li>
                        <li><a href="../por_hard/blade.php">Blade</a></li>
                        <li><a href="../por_hard/microservidor.php">Microservidor</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="actions">
            <a href="../views/servidores.php" class="btn btn-menu">Menú principal</a>
            <a href="../logout.php" class="btn btn-logout">Cerrar sesión</a>
        </div>
    </nav>

    <script>
        /* SOLO PARA ABRIR SUBMENUS EN CELULAR */
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