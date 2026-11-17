
<?php
$titulo_pagina = "Equipo | Manos que Hablan";
$pagina_actual = "equipo.php";
$clase_body = "pagina-equipo";

require_once __DIR__ . "/includes/header.php";
?>

<a href="#contenido-principal" class="skip-link">
    Saltar al contenido principal
</a>

<?php require_once __DIR__ . "/includes/nav.php"; ?>

<main id="contenido-principal" class="pagina-equipo">

    <!-- PORTADA -->
    <section class="equipo-hero">

        <div class="contenedor equipo-hero-grid">

            <div class="equipo-hero-texto">

                <span class="equipo-etiqueta">
                    DETRÁS DE MANOS QUE HABLAN
                </span>

                <h1>
                    Un proyecto que construye <span>puentes.</span>
                </h1>

                <p>
                    Manos que Hablan nace del compromiso con la comunicación,
                    la educación y la inclusión. Conocé las áreas de trabajo
                    que hacen posible este espacio dedicado a la Lengua de
                    Señas Argentina.
                </p>

                <a href="#equipo-areas" class="equipo-boton">
                    Conocé nuestro equipo ↓
                </a>

            </div>


            <figure class="equipo-hero-imagen">

                <img
                    src="img/05_comunidad.png"
                    alt="Ilustración de jóvenes compartiendo una experiencia en comunidad, con un paisaje del norte argentino">

                <figcaption>
                    La inclusión se construye entre todos.
                </figcaption>

            </figure>

        </div>

    </section>


    <!-- PROPÓSITO -->
    <section class="equipo-proposito">

        <div class="contenedor equipo-proposito-grid">

            <div class="equipo-proposito-titulo">

                <span class="equipo-subtitulo">
                    NUESTRO COMPROMISO
                </span>

                <h2>
                    Diferentes áreas, un mismo propósito
                </h2>

            </div>


            <div class="equipo-proposito-texto">

                <p>
                    Para desarrollar un espacio educativo accesible es importante
                    integrar conocimientos de diseño, tecnología, educación y
                    cultura. Cada área aporta una mirada necesaria para promover
                    una comunicación respetuosa e inclusiva.
                </p>

                <p>
                    El proyecto busca acercar información sobre la LSA, ofrecer
                    materiales visuales y facilitar que más personas conozcan
                    la importancia de respetar la diversidad lingüística.
                </p>

            </div>

        </div>

    </section>


    <!-- ÁREAS DE TRABAJO -->
    <section class="equipo-areas" id="equipo-areas">

        <div class="contenedor">

            <header class="equipo-seccion-header">

                <span class="equipo-subtitulo">
                    CONOCÉ LAS ÁREAS
                </span>

                <h2>Quiénes hacen posible el proyecto</h2>

                <p>
                    Estas son las principales áreas de trabajo y las
                    responsabilidades que forman parte de Manos que Hablan.
                </p>

            </header>


            <div class="equipo-areas-grid">

                <!-- ÁREA 1 -->
                <article class="equipo-area-card">

                    <div class="equipo-area-imagen">

                        <img
                            src="img/equipo.png"
                            alt="Imagen representativa del trabajo en equipo"
                            loading="lazy">

                        <span class="equipo-area-numero">01</span>

                    </div>


                    <div class="equipo-area-contenido">

                        <span class="equipo-area-categoria">
                            TECNOLOGÍA Y DISEÑO
                        </span>

                        <h3>Desarrollo y diseño web</h3>

                        <p>
                            Esta área se ocupa de la estructura del sitio,
                            su presentación visual y el funcionamiento de
                            sus herramientas en distintos dispositivos.
                        </p>

                        <details class="equipo-detalles">

                            <summary>Ver responsabilidades</summary>

                            <ul>
                                <li>Organización y estructura de las páginas.</li>
                                <li>Diseño adaptable a computadoras y celulares.</li>
                                <li>Revisión de navegación y accesibilidad.</li>
                            </ul>

                        </details>

                    </div>

                </article>


                <!-- ÁREA 2 -->
                <article class="equipo-area-card">

                    <div class="equipo-area-imagen">

                        <img
                            src="img/traductor.png"
                            alt="Ilustración relacionada con la interpretación y la comunicación en LSA"
                            loading="lazy">

                        <span class="equipo-area-numero">02</span>

                    </div>


                    <div class="equipo-area-contenido">

                        <span class="equipo-area-categoria">
                            LENGUA Y CULTURA
                        </span>

                        <h3>Asesoramiento lingüístico y cultural</h3>

                        <p>
                            Esta área acompaña la selección y organización
                            de contenidos para comunicar con respeto la
                            lengua y las experiencias de la comunidad sorda.
                        </p>

                        <details class="equipo-detalles">

                            <summary>Ver responsabilidades</summary>

                            <ul>
                                <li>Revisión del contenido relacionado con la LSA.</li>
                                <li>Respeto por la identidad y la cultura sorda.</li>
                                <li>Uso de un lenguaje claro e inclusivo.</li>
                            </ul>

                        </details>

                    </div>

                </article>


                <!-- ÁREA 3 -->
                <article class="equipo-area-card">

                    <div class="equipo-area-imagen">

                        <img
                            src="img/juegos.png"
                            alt="Material visual para actividades y propuestas educativas"
                            loading="lazy">

                        <span class="equipo-area-numero">03</span>

                    </div>


                    <div class="equipo-area-contenido">

                        <span class="equipo-area-categoria">
                            EDUCACIÓN Y RECURSOS
                        </span>

                        <h3>Contenidos y recursos educativos</h3>

                        <p>
                            Esta área organiza materiales, propuestas y
                            recursos visuales que ayudan a comprender y
                            explorar la Lengua de Señas Argentina.
                        </p>

                        <details class="equipo-detalles">

                            <summary>Ver responsabilidades</summary>

                            <ul>
                                <li>Preparación de materiales de aprendizaje.</li>
                                <li>Selección de imágenes y recursos visuales.</li>
                                <li>Organización de actividades educativas.</li>
                            </ul>

                        </details>

                    </div>

                </article>

            </div>

        </div>

    </section>


    <!-- VALORES -->
    <section class="equipo-valores">

        <div class="contenedor">

            <header class="equipo-seccion-header">

                <span class="equipo-subtitulo">
                    LO QUE NOS GUÍA
                </span>

                <h2>Principios que compartimos</h2>

                <p>
                    El proyecto se construye sobre valores que orientan
                    cada contenido y cada decisión.
                </p>

            </header>


            <div class="equipo-valores-grid">

                <article class="equipo-valor">

                    <span aria-hidden="true">✦</span>

                    <h3>Respeto</h3>

                    <p>
                        Valorar la lengua, la identidad y las experiencias
                        de la comunidad sorda.
                    </p>

                </article>


                <article class="equipo-valor">

                    <span aria-hidden="true">◇</span>

                    <h3>Accesibilidad</h3>

                    <p>
                        Procurar que la información sea clara,
                        comprensible y fácil de recorrer.
                    </p>

                </article>


                <article class="equipo-valor">

                    <span aria-hidden="true">✋</span>

                    <h3>Aprendizaje</h3>

                    <p>
                        Compartir conocimientos y promover el
                        acercamiento a la LSA.
                    </p>

                </article>

            </div>

        </div>

    </section>


    <!-- CIERRE -->
    <section class="equipo-cierre">

        <div class="contenedor equipo-cierre-contenido">

            <span aria-hidden="true">✦</span>

            <h2>
                Una comunidad más inclusiva se construye con participación.
            </h2>

            <p>
                Te invitamos a conocer los recursos, aprender sobre la LSA
                y formar parte de una comunicación más accesible.
            </p>

            <a href="contacto.php" class="equipo-boton-claro">
                Ponete en contacto →
            </a>

        </div>

    </section>

</main>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
