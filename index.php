
<?php
$titulo_pagina = "Inicio | Manos que Hablan";
$pagina_actual = "index.php";
$clase_body = "pagina-inicio";

require_once __DIR__ . "/includes/header.php";
?>

<a href="#contenido-principal" class="skip-link">
    Saltar al contenido principal
</a>

<?php require_once __DIR__ . "/includes/nav.php"; ?>

<main id="contenido-principal">

    <!-- PORTADA PRINCIPAL -->
    <section class="inicio-hero" aria-labelledby="titulo-principal">
        <div class="contenedor inicio-hero__grid">

            <div class="inicio-hero__texto">

                <span class="inicio-etiqueta">
                    Comunidad · Educación inclusiva
                </span>

                <p class="inicio-sobrelinea">
                    UNA FORMA DE ENCONTRARNOS Y COMUNICARNOS
                </p>

                <h1 id="titulo-principal">
                    MANOS QUE
                    <span>HABLAN</span>
                </h1>

                <p class="inicio-descripcion">
                    Aprendé, comprendé y conectá a través de la
                    Lengua de Señas Argentina, con una mirada
                    cultural, educativa y accesible.
                </p>

                <div class="inicio-acciones">

                    <a href="aprende-lsa.php"
                       class="inicio-boton inicio-boton--principal">
                        Empezar a aprender
                    </a>

                    <a href="sobre-lsa.php"
                       class="inicio-boton inicio-boton--secundario">
                        Conocer la LSA
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

                <p class="inicio-frase">
                    <span aria-hidden="true"></span>
                    Las manos también tienen mucho que contar.
                </p>

            </div>

            <!-- ILUSTRACIÓN PRINCIPAL -->
            <figure class="inicio-figura">

                <div class="inicio-figura__marco">
                    <img
                        src="img/01_portada.png"
                        alt="Joven saludando en un paisaje del norte argentino, rodeado de montañas y vegetación."
                        class="inicio-portada-img">
                </div>

                <figcaption>
                    <span aria-hidden="true">✦</span>
                    La comunicación nos acerca.
                </figcaption>

            </figure>

        </div>
    </section>


    <!-- PRESENTACIÓN DEL PROYECTO -->
    <section class="inicio-presentacion"
             aria-labelledby="titulo-presentacion">

        <div class="contenedor inicio-presentacion__grid">

            <div class="inicio-presentacion__titulo">

                <span class="inicio-mini-etiqueta">
                    BIENVENIDOS A MANOS QUE HABLAN
                </span>

                <h2 id="titulo-presentacion">
                    Una comunicación que construye puentes
                </h2>

            </div>

            <div class="inicio-presentacion__texto">

                <p>
                    La Lengua de Señas Argentina es una lengua visual
                    y espacial que forma parte de la identidad y la
                    cultura de la comunidad sorda.
                </p>

                <p>
                    Este espacio busca acercar su conocimiento,
                    promover el respeto por la diversidad lingüística
                    y favorecer una comunicación más inclusiva.
                </p>

                <a href="sobre-lsa.php" class="inicio-enlace">
                    Conocé más sobre la LSA
                    <span aria-hidden="true">→</span>
                </a>

            </div>

        </div>
    </section>


    <!-- APRENDIZAJE -->
    <section class="inicio-aprendizaje"
             aria-labelledby="titulo-aprendizaje">

        <div class="contenedor">

            <div class="inicio-encabezado-seccion">

                <span class="inicio-mini-etiqueta">
                    APRENDER PASO A PASO
                </span>

                <h2 id="titulo-aprendizaje">
                    Descubrí la Lengua de Señas Argentina
                </h2>

                <p>
                    Cada gesto, expresión y movimiento forma parte
                    de una manera propia de comunicarnos.
                </p>

            </div>

            <div class="inicio-aprendizaje__contenido">

                <div class="inicio-aprendizaje__imagen">

                    <img
                        src="img/02_aprende_lsa.png"
                        alt="Ilustración educativa relacionada con el aprendizaje de la Lengua de Señas Argentina.">

                </div>

                <div class="inicio-aprendizaje__texto">

                    <span class="inicio-etiqueta-clara">
                        TU PRIMER PASO
                    </span>

                    <h3>
                        Aprender también es acercarse
                    </h3>

                    <p>
                        Explorá el abecedario dactilológico,
                        conocé nuevas señas y descubrí recursos
                        visuales para comenzar tu recorrido.
                    </p>

                    <ul>
                        <li>Abecedario de la LSA.</li>
                        <li>Vocabulario y expresiones cotidianas.</li>
                        <li>Materiales visuales de aprendizaje.</li>
                    </ul>

                    <a href="aprende-lsa.php"
                       class="inicio-boton inicio-boton--principal">
                        Explorar el aprendizaje
                        <span aria-hidden="true">→</span>
                    </a>

                </div>

            </div>

        </div>
    </section>


    <!-- SECCIONES DEL SITIO -->
    <section class="inicio-explorar"
             aria-labelledby="titulo-explorar">

        <div class="contenedor">

            <div class="inicio-encabezado-seccion">

                <span class="inicio-mini-etiqueta">
                    EXPLORÁ NUESTRO ESPACIO
                </span>

                <h2 id="titulo-explorar">
                    Hay mucho por descubrir
                </h2>

                <p>
                    Conocé los distintos contenidos que forman
                    parte de Manos que Hablan.
                </p>

            </div>

            <div class="inicio-tarjetas">

                <article class="inicio-tarjeta">

                    <div class="inicio-tarjeta__imagen">
                        <img
                            src="img/03_comunicacion.png"
                            alt="Ilustración sobre la comunicación y el encuentro entre personas.">
                    </div>

                    <div class="inicio-tarjeta__contenido">

                        <span>01 · CULTURA</span>

                        <h3>Conocé la LSA</h3>

                        <p>
                            Descubrí su valor lingüístico,
                            cultural y social dentro de
                            la comunidad sorda.
                        </p>

                        <a href="sobre-lsa.php" class="inicio-enlace">
                            Conocer más
                            <span aria-hidden="true">→</span>
                        </a>

                    </div>

                </article>


                <article class="inicio-tarjeta">

                    <div class="inicio-tarjeta__imagen">
                        <img
                            src="img/04_recursos.png"
                            alt="Ilustración de materiales y recursos educativos.">
                    </div>

                    <div class="inicio-tarjeta__contenido">

                        <span>02 · MATERIALES</span>

                        <h3>Recursos para aprender</h3>

                        <p>
                            Encontrá materiales visuales
                            y contenidos que acompañan
                            el aprendizaje.
                        </p>

                        <a href="recursos.php" class="inicio-enlace">
                            Ver recursos
                            <span aria-hidden="true">→</span>
                        </a>

                    </div>

                </article>


                <article class="inicio-tarjeta">

                    <div class="inicio-tarjeta__imagen">
                        <img
                            src="img/05_comunidad.png"
                            alt="Ilustración de una comunidad reunida y compartiendo.">
                    </div>

                    <div class="inicio-tarjeta__contenido">

                        <span>03 · COMUNIDAD</span>

                        <h3>Una comunidad que incluye</h3>

                        <p>
                            La inclusión se construye
                            mediante el respeto, el diálogo
                            y la participación.
                        </p>

                        <a href="equipo.php" class="inicio-enlace">
                            Conocer el equipo
                            <span aria-hidden="true">→</span>
                        </a>

                    </div>

                </article>

            </div>

        </div>
    </section>


    <!-- CIERRE VISUAL -->
    <section class="inicio-cierre"
             aria-labelledby="titulo-cierre">

        <div class="contenedor inicio-cierre__contenido">

            <div class="inicio-cierre__texto">

                <span class="inicio-mini-etiqueta">
                    COMUNICACIÓN · IDENTIDAD · INCLUSIÓN
                </span>

                <h2 id="titulo-cierre">
                    Cada persona tiene algo que expresar.
                </h2>

                <p>
                    Sigamos construyendo espacios donde todas
                    las formas de comunicación sean valoradas.
                </p>

                <a href="contacto.php"
                   class="inicio-boton inicio-boton--claro">
                    Ponete en contacto
                    <span aria-hidden="true">→</span>
                </a>

            </div>

            <div class="inicio-cierre__imagen">

                <img
                    src="img/06_noticias_eventos.png"
                    alt="Ilustración relacionada con actividades y encuentros de la comunidad.">

            </div>

        </div>
    </section>

</main>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
