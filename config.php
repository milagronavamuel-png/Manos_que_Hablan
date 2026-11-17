
<?php

// Cargar las variables del archivo .env
$ruta_env = __DIR__ . '/.env';

if (!file_exists($ruta_env)) {
    throw new RuntimeException('No se encontró el archivo .env');
}

$config = parse_ini_file($ruta_env, false, INI_SCANNER_RAW);

if ($config === false) {
    throw new RuntimeException('No se pudo leer el archivo .env');
}

// Definir las constantes de configuración
define('APP_NAME', $config['APP_NAME'] ?? 'Manos que Hablan');
define('APP_ENV', $config['APP_ENV'] ?? 'development');
define('SUPPORT_EMAIL', $config['SUPPORT_EMAIL'] ?? '');
