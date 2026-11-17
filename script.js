document.addEventListener("DOMContentLoaded", () => {
// =====================================
// 1. SALUDO INICIAL
// =====================================

alert("¡Bienvenido/a a Manos que Hablan! Gracias por visitar nuestro sitio.");

    // =====================================
    // RELOJ
    // =====================================

    const reloj = document.getElementById("fecha-hora-envivo");

    function actualizarReloj() {

        if (!reloj) return;

        const ahora = new Date();

        const fecha = ahora.toLocaleDateString("es-AR");
        const hora = ahora.toLocaleTimeString("es-AR");

        reloj.textContent = `${fecha} · ${hora}`;
    }

    actualizarReloj();
    setInterval(actualizarReloj, 1000);


    // =====================================
    // MENÚ HAMBURGUESA
    // =====================================

    const botonMenu = document.getElementById("btn-menu");
    const navegacion = document.getElementById("nav-menu");

    if (botonMenu && navegacion) {

        botonMenu.addEventListener("click", () => {

            const abierto = navegacion.classList.toggle("abierto");

            botonMenu.setAttribute("aria-expanded", abierto);
            botonMenu.setAttribute(
                "aria-label",
                abierto ? "Cerrar menú" : "Abrir menú"
            );

        });

        navegacion.querySelectorAll("a").forEach(enlace => {

            enlace.addEventListener("click", () => {
                navegacion.classList.remove("abierto");
                botonMenu.setAttribute("aria-expanded", "false");
                botonMenu.setAttribute("aria-label", "Abrir menú");
            });

        });

        document.addEventListener("keydown", evento => {

            if (evento.key === "Escape") {
                navegacion.classList.remove("abierto");
                botonMenu.setAttribute("aria-expanded", "false");
            }

        });

    }


    // =====================================
    // PANEL DE ACCESIBILIDAD
    // =====================================

    const botonAcc = document.getElementById("btn-accesibilidad");
    const menuAcc = document.getElementById("menu-accesibilidad");

    if (botonAcc && menuAcc) {

        botonAcc.addEventListener("click", () => {

            const abierto = menuAcc.hidden;

            menuAcc.hidden = !abierto;
            botonAcc.setAttribute("aria-expanded", abierto);

        });

    }


    // =====================================
    // TAMAÑO DEL TEXTO
    // =====================================

    const aumentar = document.getElementById("btn-texto-mas");
    const disminuir = document.getElementById("btn-texto-menos");

    let escalaTexto = 100;

    function aplicarTexto() {
        document.documentElement.style.fontSize = `${escalaTexto}%`;
    }

    if (aumentar) {

        aumentar.addEventListener("click", () => {

            if (escalaTexto < 140) {
                escalaTexto += 10;
                aplicarTexto();
            }

        });

    }

    if (disminuir) {

        disminuir.addEventListener("click", () => {

            if (escalaTexto > 80) {
                escalaTexto -= 10;
                aplicarTexto();
            }

        });

    }


    // =====================================
    // MODO OSCURO
    // =====================================

    const botonOscuro = document.getElementById("btn-modo-oscuro");

    if (botonOscuro) {

        botonOscuro.addEventListener("click", () => {

            document.body.classList.toggle("modo-oscuro");

        });

    }


    // =====================================
    // ALTO CONTRASTE
    // =====================================

    const botonContraste = document.getElementById("btn-contraste");

    if (botonContraste) {

        botonContraste.addEventListener("click", () => {

            document.body.classList.toggle("alto-contraste");

        });

    }


    // =====================================
    // RESTABLECER ACCESIBILIDAD
    // =====================================

    const botonReset = document.getElementById("btn-reset-acc");

    if (botonReset) {

        botonReset.addEventListener("click", () => {

            escalaTexto = 100;

            aplicarTexto();

            document.body.classList.remove("modo-oscuro");
            document.body.classList.remove("alto-contraste");

            if (menuAcc) {
                menuAcc.hidden = true;
            }

            if (botonAcc) {
                botonAcc.setAttribute("aria-expanded", "false");
            }

        });

    }

});