
<?php
$titulo_pagina = "Recursos y Galería | Manos que Hablan";
$pagina_actual = "recursos.php";
$clase_body = "pagina-recursos";

require_once __DIR__ . "/includes/header.php";
?>

<a href="#contenido-principal" class="skip-link">
    Saltar al contenido principal
</a>

<?php require_once __DIR__ . "/includes/nav.php"; ?>

<main id="contenido-principal" class="pagina-recursos">

    <!-- PORTADA -->
    <section class="recursos-hero">
        <div class="contenedor recursos-hero-grid">

            <div class="recursos-hero-texto">

                <span class="recursos-etiqueta">
                    APRENDER · EXPLORAR · COMPARTIR
                </span>

                <h1>Recursos para aprender y comunicar</h1>

                <p>
                    Descubrí materiales visuales, propuestas educativas
                    y herramientas que te ayudarán a conocer la Lengua
                    de Señas Argentina y acercarte a una comunicación
                    más inclusiva.
                </p>

                <a href="#galeria-recursos" class="recursos-boton">
                    Explorar la galería ↓
                </a>

            </div>

            <figure class="recursos-hero-imagen">

                <img
                    src="img/img1.png"
                    alt="Ilustración relacionada con el aprendizaje y la comunicación"
                    loading="eager">

                <figcaption>
                    Las imágenes también nos ayudan a aprender.
                </figcaption>

            </figure>

        </div>
    </section>


    <!-- INTRODUCCIÓN -->
    <section class="recursos-introduccion">

        <div class="contenedor recursos-intro-grid">

            <div>

                <span class="recursos-subtitulo">
                    UN ESPACIO PARA DESCUBRIR
                </span>

                <h2>El aprendizaje también es visual</h2>

                <p>
                    Los recursos visuales cumplen un papel importante
                    en el acercamiento a la Lengua de Señas Argentina.
                    A través de imágenes, ejemplos y actividades podemos
                    observar diferentes formas de expresión y comunicación.
                </p>

                <p>
                    Esta sección reúne materiales del proyecto Manos que
                    Hablan para acompañar el aprendizaje, despertar la
                    curiosidad y facilitar el acceso a contenidos
                    relacionados con la comunidad sorda.
                </p>

            </div>

            <div class="recursos-intro-destacado">

                <span aria-hidden="true">✦</span>

                <h3>Aprender es un proceso compartido</h3>

                <p>
                    Cada recurso es una oportunidad para conocer,
                    practicar y valorar una lengua y una cultura.
                </p>

            </div>

        </div>

    </section>


    <!-- CATEGORÍAS -->
    <section class="recursos-categorias">

        <div class="contenedor">

            <header class="recursos-encabezado-seccion">

                <span class="recursos-subtitulo">
                    CONTENIDOS DISPONIBLES
                </span>

                <h2>¿Qué podés encontrar?</h2>

                <p>
                    Diferentes materiales para explorar la comunicación
                    visual y seguir aprendiendo sobre la LSA.
                </p>

            </header>


            <div class="recursos-categorias-grid">

                <article class="recurso-categoria">

                    <span class="recurso-icono" aria-hidden="true">✋</span>

                    <h3>Material visual</h3>

                    <p>
                        Imágenes e ilustraciones que permiten observar
                        diferentes elementos relacionados con la LSA.
                    </p>

                </article>


                <article class="recurso-categoria">

                    <span class="recurso-icono" aria-hidden="true">✦</span>

                    <h3>Actividades educativas</h3>

                    <p>
                        Propuestas y juegos que acompañan el aprendizaje
                        y ayudan a incorporar nuevos conocimientos.
                    </p>

                </article>


                <article class="recurso-categoria">

                    <span class="recurso-icono" aria-hidden="true">◇</span>

                    <h3>Información y comunidad</h3>

                    <p>
                        Contenidos para conocer la identidad, la cultura
                        y las experiencias de la comunidad sorda.
                    </p>

                </article>

            </div>

        </div>

    </section>


    <!-- GALERÍA -->
    <section class="recursos-galeria" id="galeria-recursos">

        <div class="contenedor">

            <header class="recursos-encabezado-seccion">

                <span class="recursos-subtitulo">
                    NUESTRO MATERIAL VISUAL
                </span>

                <h2>Galería de recursos</h2>

                <p>
                    Explorá las imágenes que forman parte del proyecto
                    y conocé distintos aspectos de Manos que Hablan.
                </p>

            </header>


            <div class="recursos-galeria-grid">

                <figure class="recurso-galeria-item">

                    <img
                        src="img/equipo.png"
                        alt="Imagen del equipo de Manos que Hablan"
                        loading="lazy">

                    <figcaption>
                        <h3>Nuestro equipo</h3>
                        <p>
                            Personas que participan en el desarrollo del proyecto.
                        </p>
                    </figcaption>

                </figure>


                <figure class="recurso-galeria-item">

                    <img
                        src="img/foto user.png"
                        alt="Imagen de usuario relacionada con el proyecto"
                        loading="lazy">

                    <figcaption>
                        <h3>Participación</h3>
                        <p>
                            Un espacio pensado para quienes desean aprender.
                        </p>
                    </figcaption>

                </figure>


                <figure class="recurso-galeria-item">

                    <img
                        src="img/img1.png"
                        alt="Ilustración visual del proyecto"
                        loading="lazy">

                    <figcaption>
                        <h3>Comunicación visual</h3>
                        <p>
                            La importancia de las imágenes en el aprendizaje.
                        </p>
                    </figcaption>

                </figure>


                <figure class="recurso-galeria-item">

                    <img
                        src="img/juegos.png"
                        alt="Imagen de juegos educativos"
                        loading="lazy">

                    <figcaption>
                        <h3>Juegos educativos</h3>
                        <p>
                            Actividades para aprender de una manera participativa.
                        </p>
                    </figcaption>

                </figure>


                <figure class="recurso-galeria-item">

                    <img
                        src="img/letras.png"
                        alt="Imagen relacionada con letras y dactilología"
                        loading="lazy">

                    <figcaption>
                        <h3>Letras y dactilología</h3>
                        <p>
                            Un acercamiento al alfabeto manual.
                        </p>
                    </figcaption>

                </figure>


                <figure class="recurso-galeria-item">

                    <img
                        src="img/logo.png"
                        alt="Logotipo de Manos que Hablan"
                        loading="lazy">

                    <figcaption>
                        <h3>Identidad del proyecto</h3>
                        <p>
                            La imagen que representa a Manos que Hablan.
                        </p>
                    </figcaption>

                </figure>


                <figure class="recurso-galeria-item">

                    <img
                        src="img/nosotros.png"
                        alt="Imagen sobre las personas que forman parte del proyecto"
                        loading="lazy">

                    <figcaption>
                        <h3>Sobre nosotros</h3>
                        <p>
                            Conocé la propuesta y el propósito del sitio.
                        </p>
                    </figcaption>

                </figure>


                <figure class="recurso-galeria-item">

                    <img
                        src="img/noticia.png"
                        alt="Imagen relacionada con las novedades del proyecto"
                        loading="lazy">

                    <figcaption>
                        <h3>Información y novedades</h3>
                        <p>
                            Contenidos para mantenerse informado.
                        </p>
                    </figcaption>

                </figure>


                <figure class="recurso-galeria-item">

                    <img
                        src="img/perro.png"
                        alt="Ilustración de un perro utilizada como recurso visual"
                        loading="lazy">

                    <figcaption>
                        <h3>Recursos ilustrados</h3>
                        <p>
                            Imágenes que acompañan diferentes propuestas visuales.
                        </p>
                    </figcaption>

                </figure>


                <figure class="recurso-galeria-item">

                    <img
                        src="img/traductor.png"
                        alt="Ilustración relacionada con la interpretación y comunicación en LSA"
                        loading="lazy">

                    <figcaption>
                        <h3>Interpretación y comunicación</h3>
                        <p>
                            La importancia de facilitar el intercambio comunicativo.
                        </p>
                    </figcaption>

                </figure>

            </div>

        </div>

    </section>


    <!-- RECURSOS PARA APRENDER -->
    <section class="recursos-aprendizaje">

        <div class="contenedor">

            <header class="recursos-encabezado-seccion">

                <span class="recursos-subtitulo">
                    SEGUÍ EXPLORANDO
                </span>

                <h2>Continuá tu recorrido por la LSA</h2>

                <p>
                    También podés visitar otras secciones del sitio
                    para profundizar tus conocimientos.
                </p>

            </header>


            <div class="recursos-aprendizaje-grid">

                <article class="recurso-aprendizaje-card">

                    <h3>Aprendé LSA</h3>

                    <p>
                        Acercate al alfabeto manual y descubrí contenidos
                        introductorios para comenzar a aprender.
                    </p>

                    <a href="aprende-lsa.php">
                        Ir a aprender LSA →
                    </a>

                </article>


                <article class="recurso-aprendizaje-card">

                    <h3>Sobre la LSA</h3>

                    <p>
                        Conocé las características lingüísticas,
                        culturales y sociales de esta lengua.
                    </p>

                    <a href="sobre-lsa.php">
                        Conocer más →
                    </a>

                </article>


                <article class="recurso-aprendizaje-card">

                    <h3>Noticias</h3>

                    <p>
                        Explorá información y novedades vinculadas
                        con la accesibilidad y la comunidad sorda.
                    </p>

                    <a href="noticias.php">
                        Leer novedades →
                    </a>

                </article>

            </div>

        </div>

    </section>


    <!-- CIERRE -->
    <section class="recursos-cierre">

        <div class="contenedor">

            <span aria-hidden="true">✦</span>

            <h2>
                Una comunicación más inclusiva comienza con el conocimiento.
            </h2>

            <p>
                Seguir aprendiendo, compartir información y respetar
                la diversidad lingüística son pasos importantes
                para construir una sociedad más accesible.
            </p>

            <a href="contacto.php" class="recursos-boton-claro">
                Contactate con nosotros →
            </a>

        </div>

    </section>

</main>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
