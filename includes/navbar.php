<nav class="navbar">
    <div class="logo">SERVIDORES</div>

    <!-- Botón hamburguesa -->
    <div class="hamburger" onclick="toggleMenu()">
        &#9776;
    </div>

    <div class="menu" id="menu">
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

<style>
    /* Reset básico */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #1f1f1f;
        color: white;
        padding: 10px 20px;
        position: relative;
    }

    .navbar .logo {
        font-size: 1.5em;
        font-weight: bold;
    }

    .navbar .menu ul {
        display: flex;
        list-style: none;
    }

    .navbar .menu ul li {
        position: relative;
    }

    .navbar .menu ul li a {
        display: block;
        padding: 10px 15px;
        text-decoration: none;
        color: white;
    }

    .navbar .menu ul li ul {
        position: absolute;
        top: 100%;
        left: 0;
        display: none;
        background: #333;
        flex-direction: column;
        min-width: 200px;
    }

    .navbar .menu ul li:hover>ul {
        display: flex;
    }

    .navbar .menu ul li ul li a {
        padding: 10px;
    }

    .navbar .actions {
        display: flex;
        gap: 10px;
    }

    .navbar .btn {
        padding: 7px 15px;
        text-decoration: none;
        color: white;
        border-radius: 5px;
        background-color: #007bff;
    }

    .navbar .btn-logout {
        background-color: #e74c3c;
    }

    /* Hamburguesa */
    .hamburger {
        display: none;
        font-size: 1.8em;
        cursor: pointer;
    }

    /* Responsive */
    @media (max-width: 900px) {
        .navbar {
            flex-wrap: wrap;
        }

        .hamburger {
            display: block;
        }

        .menu {
            width: 100%;
            display: none;
            flex-direction: column;
        }

        .menu ul {
            flex-direction: column;
        }

        .menu ul li ul {
            position: relative;
        }

        .menu ul li:hover>ul {
            display: none;
        }

        .menu.show {
            display: flex;
        }

        .actions {
            width: 100%;
            justify-content: flex-start;
            margin-top: 10px;
        }
    }
</style>

<script>
    function toggleMenu() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('show');
    }
</script>