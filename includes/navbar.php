<nav class="navbar">
    <div class="logo">SERVIDORES</div>

    <!-- Botón hamburguesa para móvil -->
    <div class="hamburger" onclick="toggleMenu()">&#9776;</div>

    <div class="menu" id="menu">
        <ul>
            <li>
                <a href="../por_funcion/index.php">Por función</a>
                <ul class="dropdown">
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
                <ul class="dropdown">
                    <li><a href="../por_acce/publico.php">Público</a></li>
                    <li><a href="../por_acce/dedicado.php">Dedicado</a></li>
                    <li><a href="../por_acce/compartido.php">Compartido</a></li>
                    <li><a href="../por_acce/local.php">Local</a></li>
                </ul>
            </li>
            <li>
                <a href="../por_imple/index.php">Implementación</a>
                <ul class="dropdown">
                    <li><a href="../por_imple/virtual.php">Virtual</a></li>
                    <li><a href="../por_imple/nube.php">Nube</a></li>
                </ul>
            </li>
            <li>
                <a href="../por_tamaño/index.php">Tamaño</a>
                <ul class="dropdown">
                    <li><a href="../por_tamaño/depa.php">Departamento</a></li>
                    <li><a href="../por_tamaño/empresarial.php">Empresarial</a></li>
                    <li><a href="../por_tamaño/trabajo.php">Trabajo</a></li>
                </ul>
            </li>
            <li>
                <a href="../por_hard/index.php">Hardware</a>
                <ul class="dropdown">
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
/* Estilo base navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #1f1f1f;
    color: white;
    padding: 10px 20px;
}

.navbar .logo {
    font-weight: bold;
    font-size: 1.5em;
}

.navbar .menu ul {
    display: flex;
    list-style: none;
}

.navbar .menu ul li {
    position: relative;
}

.navbar .menu ul li a {
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    display: block;
}

/* Dropdown para escritorio */
.navbar .menu ul li ul.dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    display: none;
    flex-direction: column;
    background: #333;
    min-width: 180px;
    z-index: 1000;
}

.navbar .menu ul li:hover > ul.dropdown {
    display: flex;
}

.navbar .menu ul li ul.dropdown li a {
    padding: 10px;
}

/* Botones */
.navbar .actions .btn {
    padding: 7px 15px;
    text-decoration: none;
    border-radius: 5px;
    color: white;
}

.navbar .btn-menu { background: #007bff; }
.navbar .btn-logout { background: #e74c3c; }

/* Botón hamburguesa móvil */
.hamburger {
    display: none;
    font-size: 1.8em;
    cursor: pointer;
}

/* Responsive móvil */
@media (max-width: 900px) {
    .hamburger { display: block; }
    
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .menu {
        width: 100%;
        display: none; /* oculto por defecto */
        flex-direction: column;
    }

    .menu.show { display: flex; }

    .menu ul { flex-direction: column; width: 100%; }

    .menu ul li ul.dropdown {
        position: relative;
        display: none;
        background: #444;
    }

    /* Dropdown tipo acordeón */
    .menu ul li.active > ul.dropdown {
        display: flex;
        flex-direction: column;
    }

    .menu ul li a {
        padding: 10px 15px;
        width: 100%;
    }

    .actions {
        width: 100%;
        margin-top: 10px;
        display: flex;
        flex-direction: column;
        gap: 5px;
    }
}
</style>

<script>
// Toggle menú principal
function toggleMenu() {
    document.getElementById('menu').classList.toggle('show');
}

// Toggle submenús en móvil
document.querySelectorAll('.menu > ul > li > a').forEach(a => {
    a.addEventListener('click', function(e) {
        if (window.innerWidth <= 900) {
            e.preventDefault(); // prevenir navegación
            const parent = this.parentElement;
            parent.classList.toggle('active');
        }
    });
});
</script>
