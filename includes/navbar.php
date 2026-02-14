
<style>
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background: #111;
    color: white;
    flex-wrap: wrap;
}

.logo {
    font-size: 20px;
    font-weight: bold;
}

/* ======== MENU PRINCIPAL ======== */
.menu ul {
    list-style: none;
    display: flex;
    gap: 25px;
}

.menu ul li {
    position: relative;
}

.menu ul li a {
    text-decoration: none;
    color: white;
    padding: 8px;
    display: block;
}

/* Submenu */
.menu ul li ul {
    position: absolute;
    top: 35px;
    left: 0;
    background: #222;
    display: none;
    flex-direction: column;
    min-width: 180px;
    padding: 10px 0;
}

.menu ul li:hover ul {
    display: flex;
}

.menu ul li ul li a {
    padding: 8px 15px;
}

/* ======== BOTONES ======== */
.actions {
    display: flex;
    gap: 10px;
}

.btn {
    padding: 8px 12px;
    text-decoration: none;
    color: white;
    background: #007bff;
    border-radius: 5px;
}

.btn-logout {
    background: #dc3545;
}

/* ========================================= */
/* 📱 RESPONSIVE PARA CELULAR */
/* ========================================= */
@media (max-width: 768px) {

    nav {
        flex-direction: column;
        align-items: flex-start;
    }

    .menu {
        width: 100%;
    }

    .menu ul {
        flex-direction: column;
        width: 100%;
        gap: 0;
    }

    .menu ul li {
        width: 100%;
    }

    .menu ul li ul {
        position: static;
        display: none;
        background: #1a1a1a;
        padding-left: 15px;
    }

    .menu ul li:hover ul {
        display: block;
    }

    .actions {
        width: 100%;
        margin-top: 10px;
        flex-direction: column;
    }

    .btn {
        width: 100%;
        text-align: center;
    }
}
</style>
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