# Manos que Hablan

## Descripción del proyecto

**Manos que Hablan** es un sitio web educativo dedicado a la Lengua de Señas Argentina (LSA). Su propósito es promover el aprendizaje, la comunicación accesible y la inclusión de las personas sordas.

El proyecto presenta información, recursos educativos, noticias y contenidos relacionados con la comunidad sorda y la LSA.

## Objetivo

Desarrollar un sitio web accesible, moderno y adaptable a distintos dispositivos, utilizando tecnologías web y herramientas del entorno servidor.

## Tecnologías utilizadas

- HTML5
- CSS3
- JavaScript
- PHP
- XAMPP
- Visual Studio Code
- Git y GitHub

## Características del sitio

- Diseño visual con una paleta bordó, dorado y crema.
- Diseño adaptable a computadoras, tablets y celulares.
- Navegación entre las distintas secciones.
- Herramientas de accesibilidad.
- Menú de navegación responsive.
- Contenidos educativos sobre LSA.
- Galería de recursos e imágenes.
- Formulario de contacto con validación de campos.

## Estructura del proyecto

```text
Manos_que_Hablan_mejorado/
│
├── img/
│
├── includes/
│   ├── header.php
│   ├── nav.php
│   └── footer.php
│
├── index.php
├── aprende-lsa.php
├── sobre-lsa.php
├── recursos.php
├── noticias.php
├── equipo.php
├── contacto.php
│
├── config.php
├── env.php
├── .env.example
├── .gitignore
│
├── estilos.css
├── script.js
└── README.md
```

## Modularización con PHP

El sitio fue migrado de archivos HTML a PHP para incorporar funcionalidades del entorno servidor.

Se implementaron archivos reutilizables mediante `include` y `require_once`, evitando repetir estructuras comunes en todas las páginas.

Los componentes compartidos son:

- **header.php:** contiene la estructura inicial del documento HTML y los metadatos.
- **nav.php:** contiene el menú de navegación y las herramientas de accesibilidad.
- **footer.php:** contiene el pie de página y la carga del archivo JavaScript.

También se incorporaron títulos dinámicos y la identificación de la página activa en el menú.

## Configuración

El proyecto utiliza archivos de configuración para centralizar los datos generales de la aplicación.

- `env.php`: contiene las variables de configuración.
- `config.php`: carga los valores y los define para utilizarlos en el proyecto.
- `.env.example`: presenta un ejemplo de las variables utilizadas.

## Requisitos

- XAMPP instalado.
- Apache habilitado.
- Navegador web actualizado.
- Visual Studio Code (recomendado).

## Instalación y ejecución local

1. Copiar la carpeta del proyecto dentro de `htdocs`, en la instalación de XAMPP.
2. Abrir el panel de control de XAMPP.
3. Iniciar el servicio Apache.
4. Abrir el navegador.
5. Ingresar a:

```text
http://localhost/Manos_que_Hablan_mejorado/
```

## Consideraciones y mejoras pendientes

- El formulario de contacto todavía necesita conectarse a un procesamiento PHP para recibir y guardar consultas.
- Las noticias conservan enlaces de marcador `#`, por lo que necesitan páginas de detalle o destinos reales.
- Se recomienda revisar el contenido de las señas con personas competentes en LSA antes de publicarlo como material formativo.
- Se deben realizar pruebas visuales y funcionales en computadoras y dispositivos móviles.

## Autoría

Proyecto educativo desarrollado como parte de la asignatura Programación Web.

**Manos que Hablan — Comunicación e inclusión.**