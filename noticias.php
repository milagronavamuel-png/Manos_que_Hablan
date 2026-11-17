
<?php
$titulo_pagina = "Noticias y Actualidad | Manos que Hablan";
$pagina_actual = "noticias.php";
$clase_body = "pagina-noticias";

require_once __DIR__ . "/includes/header.php";
?>

<a href="#contenido-principal" class="skip-link">
    Saltar al contenido principal
</a>

<?php require_once __DIR__ . "/includes/nav.php"; ?>

<main id="contenido-principal" class="pagina-noticias">

    <!-- PORTADA -->
    <section class="noticias-hero">

        <div class="contenedor noticias-hero-grid">

            <div class="noticias-hero-texto">

                <span class="noticias-etiqueta">
                    INFORMACIÓN Y ACTUALIDAD
                </span>

                <h1>
                    Noticias y <span>novedades.</span>
                </h1>

                <p>
                    Un espacio para conocer actividades, acontecimientos y
                    temas importantes relacionados con la Lengua de Señas
                    Argentina, la accesibilidad y la Comunidad Sorda.
                </p>

                <a href="#ultimas-noticias" class="noticias-boton">
                    Explorar las noticias ↓
                </a>

            </div>


            <figure class="noticias-hero-imagen">

                <img
                    src="img/05_comunidad.png"
                    alt="Ilustración de jóvenes compartiendo una experiencia en comunidad"
                    loading="eager">

                <figcaption>
                    Informarnos también nos ayuda a construir inclusión.
                </figcaption>

            </figure>

        </div>

    </section>


    <!-- INTRODUCCIÓN -->
    <section class="noticias-introduccion">

        <div class="contenedor noticias-introduccion-grid">

            <div>

                <span class="noticias-subtitulo">
                    MANTENERNOS INFORMADOS
                </span>

                <h2>
                    La comunicación también se construye compartiendo información
                </h2>

                <p>
                    Conocer las iniciativas, los avances y las actividades
                    vinculadas con la comunidad sorda permite comprender mejor
                    sus derechos, valorar su lengua y acompañar la construcción
                    de espacios más accesibles.
                </p>

            </div>


            <div class="noticias-intro-destacado">

                <span aria-hidden="true">✦</span>

                <p>
                    La información clara y accesible ayuda a que más personas
                    conozcan la LSA y participen de una sociedad respetuosa
                    de la diversidad lingüística.
                </p>

            </div>

        </div>

    </section>


    <!-- NOTICIAS DESTACADAS -->
    <section
        class="seccion-listado-noticias"
        id="ultimas-noticias"
        aria-labelledby="titulo-noticias">

        <div class="contenedor noticias-listado-contenedor">

            <header class="noticias-seccion-header">

                <span class="noticias-subtitulo">
                    ACTUALIDAD
                </span>

                <h2 id="titulo-noticias">
                    Noticias destacadas
                </h2>

                <p>
                    Contenidos para conocer más sobre educación,
                    comunidad y accesibilidad.
                </p>

            </header>


            <div class="grid-noticias">

                <article class="tarjeta-noticia">

                    <div class="noticia-img-box">

                        <img
                            src="img/noticia.png"
                            alt="Imagen ilustrativa de información y novedades sobre la comunidad"
                            loading="lazy">

                    </div>

                    <div class="noticia-body">

                        <span class="noticia-categoria">
                            COMUNIDAD SORDA
                        </span>

                        <time
                            datetime="2026-09-01"
                            class="fecha-noticia">
                            1 de septiembre de 2026
                        </time>

                        <h3>
                            Semana Internacional de las Personas Sordas
                        </h3>

                        <p>
                            Una oportunidad para visibilizar la identidad,
                            la cultura y los derechos de las personas sordas,
                            además de difundir la importancia de las lenguas
                            de señas y la participación comunitaria.
                        </p>

                    </div>

                </article>


                <article class="tarjeta-noticia">

                    <div class="noticia-img-box">

                        <img
                            src="img/juegos.png"
                            alt="Material visual para actividades y propuestas educativas"
                            loading="lazy">

                    </div>

                    <div class="noticia-body">

                        <span class="noticia-categoria">
                            EDUCACIÓN
                        </span>

                        <time
                            datetime="2026-08-20"
                            class="fecha-noticia">
                            20 de agosto de 2026
                        </time>

                        <h3>
                            La importancia de los talleres de LSA
                        </h3>

                        <p>
                            Los espacios de formación permiten acercarse a
                            la Lengua de Señas Argentina, conocer sus
                            características y desarrollar herramientas
                            para una comunicación más inclusiva.
                        </p>

                    </div>

                </article>


                <article class="tarjeta-noticia">

                    <div class="noticia-img-box">

                        <img
                            src="img/traductor.png"
                            alt="Ilustración relacionada con la interpretación y la comunicación en LSA"
                            loading="lazy">

                    </div>

                    <div class="noticia-body">

                        <span class="noticia-categoria">
                            ACCESIBILIDAD
                        </span>

                        <time
                            datetime="2026-08-05"
                            class="fecha-noticia">
                            5 de agosto de 2026
                        </time>

                        <h3>
                            La accesibilidad en los espacios públicos
                        </h3>

                        <p>
                            Los recursos visuales, la información clara y
                            los servicios de interpretación pueden facilitar
                            el acceso a la comunicación en instituciones
                            y espacios de atención al público.
                        </p>

                    </div>

                </article>

            </div>

        </div>

    </section>


    <!-- TEMAS DE INTERÉS -->
    <section class="noticias-temas">

        <div class="contenedor">

            <header class="noticias-seccion-header">

                <span class="noticias-subtitulo">
                    PARA SEGUIR APRENDIENDO
                </span>

                <h2>Temas que también importan</h2>

                <p>
                    La inclusión comunicacional abarca diferentes aspectos
                    de la vida cotidiana y la participación social.
                </p>

            </header>


            <div class="noticias-temas-grid">

                <article class="noticia-tema">

                    <span class="tema-numero">01</span>

                    <h3>Derechos lingüísticos</h3>

                    <p>
                        Reconocer la LSA y respetar el derecho de las
                        personas sordas a comunicarse en su propia lengua.
                    </p>

                    <a href="sobre-lsa.php">
                        Conocer más sobre la LSA →
                    </a>

                </article>


                <article class="noticia-tema">

                    <span class="tema-numero">02</span>

                    <h3>Educación inclusiva</h3>

                    <p>
                        Promover entornos educativos donde existan
                        recursos y oportunidades de aprendizaje accesibles.
                    </p>

                    <a href="recursos.php">
                        Explorar recursos →
                    </a>

                </article>


                <article class="noticia-tema">

                    <span class="tema-numero">03</span>

                    <h3>Aprendizaje de LSA</h3>

                    <p>
                        Acercarse a una lengua visual y espacial que posee
                        características lingüísticas y culturales propias.
                    </p>

                    <a href="aprende-lsa.php">
                        Comenzar a aprender →
                    </a>

                </article>

            </div>

        </div>

    </section>


    <!-- CIERRE -->
    <section class="noticias-cierre">

        <div class="contenedor">

            <span aria-hidden="true">✦</span>

            <h2>
                Informarse también es una forma de incluir.
            </h2>

            <p>
                Compartir información, aprender y respetar la diversidad
                lingüística son pasos importantes para construir una
                comunicación más accesible.
            </p>

            <a href="contacto.php" class="noticias-boton-claro">
                Contactate con nosotros →
            </a>

        </div>

    </section>

</main>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
