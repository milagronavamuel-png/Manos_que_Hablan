
<?php
$pagina_actual = $pagina_actual ?? '';
?>

<!-- PANEL DE ACCESIBILIDAD -->
<aside class="panel-accesibilidad" aria-label="Herramientas de accesibilidad">

    <button id="btn-accesibilidad" class="btn-acc-toggle"
            aria-expanded="false" aria-controls="menu-accesibilidad">
        <span aria-hidden="true">♿</span> Accesibilidad
    </button>

    <div id="menu-accesibilidad" class="menu-acc-content" hidden>
        <button id="btn-texto-mas">A+ Texto</button>
        <button id="btn-texto-menos">A- Texto</button>
        <button id="btn-contraste">Alto Contraste</button>
        <button id="btn-modo-oscuro">🌙 Modo Oscuro</button>
        <button id="btn-reset-acc">Restablecer</button>
    </div>

</aside>

<!-- ENCABEZADO Y NAVEGACIÓN -->
<header class="header-principal">

    <div class="contenedor nav-container">

        <a href="index.php" class="logo" aria-label="Manos que Hablan - Inicio">

            <img src="img/logo.png"
                 alt="Logo Manos que Hablan"
                 class="logo-img">

            <span class="logo-texto">
                <span class="logo-nombre">MANOS QUE HABLAN</span>
                <small class="logo-lema">COMUNICACIÓN E INCLUSIÓN</small>
            </span>

        </a>

        <span id="fecha-hora-envivo"
              class="reloj-header"
              aria-live="polite"></span>

        <button class="menu-hamburguesa"
                id="btn-menu"
                aria-expanded="false"
                aria-controls="nav-menu"
                aria-label="Abrir menú de navegación">

            <span class="linea"></span>
            <span class="linea"></span>
            <span class="linea"></span>

        </button>

        <nav id="nav-menu" class="nav-menu" aria-label="Navegación principal">

            <ul>

                <li>
                    <a href="index.php"
                       class="<?= $pagina_actual === 'index.php' ? 'activo' : '' ?>"
                       <?= $pagina_actual === 'index.php' ? 'aria-current="page"' : '' ?>>
                        Inicio
                    </a>
                </li>

                <li>
                    <a href="aprende-lsa.php"
                       class="<?= $pagina_actual === 'aprende-lsa.php' ? 'activo' : '' ?>"
                       <?= $pagina_actual === 'aprende-lsa.php' ? 'aria-current="page"' : '' ?>>
                        Aprendé LSA
                    </a>
                </li>

                <li>
                    <a href="sobre-lsa.php"
                       class="<?= $pagina_actual === 'sobre-lsa.php' ? 'activo' : '' ?>"
                       <?= $pagina_actual === 'sobre-lsa.php' ? 'aria-current="page"' : '' ?>>
                        Sobre la LSA
                    </a>
                </li>

                <li>
                    <a href="recursos.php"
                       class="<?= $pagina_actual === 'recursos.php' ? 'activo' : '' ?>"
                       <?= $pagina_actual === 'recursos.php' ? 'aria-current="page"' : '' ?>>
                        Recursos
                    </a>
                </li>

                <li>
                    <a href="noticias.php"
                       class="<?= $pagina_actual === 'noticias.php' ? 'activo' : '' ?>"
                       <?= $pagina_actual === 'noticias.php' ? 'aria-current="page"' : '' ?>>
                        Noticias
                    </a>
                </li>

                <li>
                    <a href="equipo.php"
                       class="<?= $pagina_actual === 'equipo.php' ? 'activo' : '' ?>"
                       <?= $pagina_actual === 'equipo.php' ? 'aria-current="page"' : '' ?>>
                        Equipo
                    </a>
                </li>

                <li>
                    <a href="contacto.php"
                       class="btn-destacado <?= $pagina_actual === 'contacto.php' ? 'activo' : '' ?>"
                       <?= $pagina_actual === 'contacto.php' ? 'aria-current="page"' : '' ?>>
                        Contacto
                    </a>
                </li>

            </ul>

        </nav>

    </div>

</header>
