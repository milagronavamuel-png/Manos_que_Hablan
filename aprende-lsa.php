
<?php
$titulo_pagina = "Aprendé LSA | Manos que Hablan";
$pagina_actual = "aprende-lsa.php";
$clase_body = "pagina-aprende";

require_once __DIR__ . "/includes/header.php";
?>

<a href="#contenido-principal" class="skip-link">
    Saltar al contenido principal
</a>

<?php require_once __DIR__ . "/includes/nav.php"; ?>

<main id="contenido-principal">

    <!-- PORTADA -->
    <section class="aprende-hero" aria-labelledby="titulo-aprende">

        <div class="contenedor aprende-hero-contenido">

            <div class="aprende-hero-texto">

                <span class="aprende-etiqueta">
                    APRENDIZAJE INCLUSIVO Y ACCESIBLE
                </span>

                <h1 id="titulo-aprende">
                    Aprendé <span>LSA</span>
                </h1>

                <p>
                    Explorá módulos de aprendizaje, vocabulario
                    y situaciones cotidianas para acercarte a la
                    Lengua de Señas Argentina desde una perspectiva
                    educativa y cultural.
                </p>

                <a href="#modulos" class="aprende-boton">
                    Explorar módulos
                    <span aria-hidden="true">↓</span>
                </a>

            </div>

            <figure class="aprende-hero-imagen">

                <img
                    src="img/02_aprende_lsa.png"
                    alt="Ilustración educativa relacionada con el aprendizaje de la Lengua de Señas Argentina.">

                <figcaption>
                    Aprender es descubrir nuevas formas de comunicarnos.
                </figcaption>

            </figure>

        </div>

    </section>


    <!-- INTRODUCCIÓN -->
    <section class="aprende-intro contenedor"
             aria-labelledby="titulo-intro">

        <span class="aprende-sobrelinea">
            TU CAMINO DE APRENDIZAJE
        </span>

        <h2 id="titulo-intro">
            Comenzá a comunicarte de una manera diferente
        </h2>

        <p>
            Aprender una lengua también implica conocer su cultura,
            respetar a sus hablantes y descubrir nuevas formas de
            comunicación. Estos módulos son una introducción para
            comenzar a explorar la Lengua de Señas Argentina.
        </p>

        <div class="aprende-datos">

            <div class="dato-aprende">
                <span>01</span>
                <p>Aprendizaje visual</p>
            </div>

            <div class="dato-aprende">
                <span>02</span>
                <p>Contenidos introductorios</p>
            </div>

            <div class="dato-aprende">
                <span>03</span>
                <p>Comunicación inclusiva</p>
            </div>

        </div>

    </section>


    <!-- MÓDULOS DE APRENDIZAJE -->
    <section class="modulos-aprende"
             id="modulos"
             aria-labelledby="titulo-modulos">

        <div class="contenedor">

            <header class="aprende-titulo-seccion">

                <span class="aprende-sobrelinea">
                    DESCUBRÍ Y APRENDÉ
                </span>

                <h2 id="titulo-modulos">
                    Módulos de aprendizaje
                </h2>

                <p>
                    Explorá los primeros contenidos y avanzá a tu propio ritmo.
                </p>

            </header>


            <!-- MÓDULO 1 -->
            <article class="modulo-aprende">

                <div class="modulo-encabezado">

                    <div class="modulo-numero">
                        <span>01</span>
                        <small>MÓDULO</small>
                    </div>

                    <div>

                        <span class="modulo-categoria">
                            PRIMEROS PASOS
                        </span>

                        <h3>Saludos y expresiones cotidianas</h3>

                        <p>
                            Los saludos son la puerta de entrada a una
                            conversación. Conocé expresiones utilizadas
                            en situaciones de todos los días.
                        </p>

                    </div>

                </div>


                <div class="lecciones-grid">

                    <article class="leccion-card">

                        <div class="leccion-imagen">

                            <img
                                src="img/03_comunicacion.png"
                                alt="Ilustración de personas comunicándose."
                                loading="lazy">

                        </div>

                        <div class="leccion-contenido">

                            <span class="leccion-etiqueta">
                                EXPRESIÓN
                            </span>

                            <h4>Hola</h4>

                            <p>
                                Una expresión cotidiana para iniciar
                                un encuentro o una conversación.
                            </p>

                        </div>

                    </article>


                    <article class="leccion-card">

                        <div class="leccion-imagen">

                            <img
                                src="img/05_comunidad.png"
                                alt="Ilustración de personas compartiendo en comunidad."
                                loading="lazy">

                        </div>

                        <div class="leccion-contenido">

                            <span class="leccion-etiqueta">
                                VOCABULARIO
                            </span>

                            <h4>Nosotros</h4>

                            <p>
                                Una expresión relacionada con el grupo
                                y la participación de las personas.
                            </p>

                        </div>

                    </article>

                </div>

            </article>


            <!-- MÓDULO 2 -->
            <article class="modulo-aprende">

                <div class="modulo-encabezado">

                    <div class="modulo-numero">
                        <span>02</span>
                        <small>MÓDULO</small>
                    </div>

                    <div>

                        <span class="modulo-categoria">
                            COMUNICACIÓN COTIDIANA
                        </span>

                        <h3>Lugares e indicaciones</h3>

                        <p>
                            Conocé vocabulario relacionado con espacios
                            públicos, instituciones y lugares cotidianos.
                        </p>

                    </div>

                </div>


                <div class="lecciones-grid">

                    <article class="leccion-card">

                        <div class="leccion-imagen">

                            <img
                                src="img/04_recursos.png"
                                alt="Ilustración educativa de recursos y materiales."
                                loading="lazy">

                        </div>

                        <div class="leccion-contenido">

                            <span class="leccion-etiqueta">
                                LUGARES
                            </span>

                            <h4>Baño / Sanitario</h4>

                            <p>
                                Vocabulario relacionado con los espacios
                                sanitarios y su identificación.
                            </p>

                        </div>

                    </article>


                    <article class="leccion-card">

                        <div class="leccion-imagen">

                            <img
                                src="img/06_noticias_eventos.png"
                                alt="Ilustración de actividades y espacios culturales."
                                loading="lazy">

                        </div>

                        <div class="leccion-contenido">

                            <span class="leccion-etiqueta">
                                CULTURA
                            </span>

                            <h4>Espacios culturales</h4>

                            <p>
                                Vocabulario relacionado con museos,
                                teatros y centros culturales.
                            </p>

                        </div>

                    </article>

                </div>

            </article>

        </div>

    </section>


    <!-- ABECEDARIO DACTILOLÓGICO -->
    <section
        class="abecedario-lamina"
        id="abecedario"
        aria-labelledby="titulo-abecedario">

        <div class="contenedor abecedario-lamina-contenido">

            <header class="abecedario-lamina-encabezado">

                <span class="aprende-sobrelinea">
                    APRENDÉ LSA
                </span>

                <h2 id="titulo-abecedario">
                    El abecedario en tus manos
                </h2>

                <p>
                    Explorá esta lámina ilustrada del alfabeto manual argentino.
                    Cada configuración de la mano representa una letra y permite
                    deletrear nombres y palabras cuando es necesario.
                </p>

            </header>


            <figure class="abecedario-lamina-figura">

                <a
                    href="img/alfabeto-manual-argentino.png"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Abrir la lámina del alfabeto manual argentino en tamaño completo">

                    <img
                        src="img/alfabeto-manual-argentino.png"
                        alt="Lámina ilustrada del alfabeto manual argentino con configuraciones de manos identificadas con letras."
                        loading="lazy">

                </a>

                <figcaption>
                    Lámina visual de consulta. Seleccioná la imagen para verla en tamaño completo.
                </figcaption>

            </figure>


            <aside class="abecedario-lamina-nota"
                   aria-label="Nota de aprendizaje">

                <span aria-hidden="true">✦</span>

                <p>
                    <strong>Para tener en cuenta:</strong>
                    el alfabeto manual es un recurso de apoyo para representar
                    letras. La LSA es una lengua completa, con su propia gramática
                    y cultura. Aprenderla también implica conocer a la comunidad
                    sorda y practicar con materiales confiables.
                </p>

            </aside>

        </div>

    </section>


    <!-- CIERRE -->
    <section class="aprende-cierre"
             aria-labelledby="titulo-cierre-aprende">

        <div class="contenedor aprende-cierre-contenido">

            <div>

                <span class="aprende-sobrelinea">
                    SEGUÍ DESCUBRIENDO
                </span>

                <h2 id="titulo-cierre-aprende">
                    Aprender también es incluir.
                </h2>

                <p>
                    Cada nuevo conocimiento nos acerca a una sociedad
                    con más comunicación, respeto y participación.
                </p>

            </div>

            <a href="recursos.php" class="aprende-boton-claro">
                Explorar recursos
                <span aria-hidden="true">→</span>
            </a>

        </div>

    </section>

</main>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
