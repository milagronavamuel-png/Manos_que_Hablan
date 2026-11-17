<?php
require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Manos que Hablan: un espacio educativo dedicado a la Lengua de Señas Argentina.">

    <meta name="theme-color" content="#641719">

    <title>
    <?= htmlspecialchars($titulo_pagina ?? APP_NAME, ENT_QUOTES, 'UTF-8'); ?>
    </title>

    <link rel="stylesheet" href="estilos.css">
</head>

<body class="<?= htmlspecialchars($clase_body ?? '', ENT_QUOTES, 'UTF-8'); ?>">
