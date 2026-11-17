
<?php
$titulo_pagina = "Contacto | Manos que Hablan";
$pagina_actual = "contacto.php";
$clase_body = "pagina-contacto";

require_once __DIR__ . "/includes/header.php";
?>

<a href="#contenido-principal" class="skip-link">
    Saltar al contenido principal
</a>

<?php require_once __DIR__ . "/includes/nav.php"; ?>

<main id="contenido-principal" class="contacto-principal">

    <div class="contenedor contacto-contenedor">

        <!-- PRESENTACIÓN -->
        <section class="contacto-intro" aria-labelledby="titulo-contacto">

            <span class="contacto-etiqueta">
                ESTAMOS PARA ESCUCHARTE
            </span>

            <h1 id="titulo-contacto">
                Hablemos con
                <span>las manos y el corazón.</span>
            </h1>

            <p>
                Cada consulta, propuesta o sugerencia ayuda a construir
                una comunicación más accesible e inclusiva.
                Queremos conocerte y saber qué pensás.
            </p>

        </section>

        <!-- INFORMACIÓN Y FORMULARIO -->
        <section class="contacto-grid" aria-label="Información y formulario de contacto">

            <!-- COLUMNA INFORMATIVA -->
            <div class="contacto-info">

                <figure class="contacto-imagen">

                    <img
                        src="img/Conexi%C3%B3n%20a%20trav%C3%A9s%20de%20se%C3%B1as-2.png"
                        alt="Ilustración de personas comunicándose mediante Lengua de Señas Argentina."
                        loading="lazy">

                    <figcaption>
                        ✦ Comunicar es encontrarnos.
                    </figcaption>

                </figure>

                <div class="contacto-mensaje">

                    <h2>Una lengua que nos une</h2>

                    <p>
                        Este espacio está abierto a quienes desean aprender
                        sobre la Lengua de Señas Argentina, compartir ideas
                        y construir una sociedad más inclusiva.
                    </p>

                </div>

            </div>

            <!-- FORMULARIO -->
            <div class="contacto-formulario">

                <div class="formulario-titulo">

                    <span>TU MENSAJE ES IMPORTANTE</span>

                    <h2>Escribinos</h2>

                    <p>
                        Completá los siguientes campos para compartir
                        una consulta, sugerencia o propuesta.
                    </p>

                </div>

                <form id="form-contacto" action="#" method="post">

                    <div class="campo">

                        <label for="nombre">
                            Nombre completo
                        </label>

                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            placeholder="Ingresá tu nombre"
                            autocomplete="name"
                            minlength="2"
                            maxlength="80"
                            required>

                    </div>

                    <div class="campo">

                        <label for="correo">
                            Correo electrónico
                        </label>

                        <input
                            type="email"
                            id="correo"
                            name="correo"
                            placeholder="ejemplo@correo.com"
                            autocomplete="email"
                            maxlength="120"
                            required>

                    </div>

                    <div class="campo">

                        <label for="motivo">
                            Motivo de consulta
                        </label>

                        <select id="motivo" name="motivo" required>

                            <option value="">
                                Seleccioná un motivo
                            </option>

                            <option value="aprendizaje">
                                Aprendizaje de LSA
                            </option>

                            <option value="accesibilidad">
                                Accesibilidad e inclusión
                            </option>

                            <option value="sugerencia">
                                Sugerencia para el sitio
                            </option>

                            <option value="colaboracion">
                                Propuesta de colaboración
                            </option>

                            <option value="otro">
                                Otro motivo
                            </option>

                        </select>

                    </div>

                    <div class="campo">

                        <label for="mensaje">
                            Tu mensaje
                        </label>

                        <textarea
                            id="mensaje"
                            name="mensaje"
                            placeholder="Escribí aquí tu consulta o sugerencia..."
                            minlength="10"
                            maxlength="1500"
                            required></textarea>

                    </div>

                    <button type="submit" class="btn-enviar">
                        Enviar consulta
                        <span aria-hidden="true">→</span>
                    </button>

                    <div
                        class="aviso-formulario"
                        id="aviso-formulario"
                        role="status"
                        aria-live="polite">

                        <strong>Información:</strong>

                        Este formulario permite completar y validar
                        los datos, pero necesita conectarse a un servidor
                        para recibir mensajes reales.

                    </div>

                </form>

            </div>

        </section>

    </div>

</main>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
