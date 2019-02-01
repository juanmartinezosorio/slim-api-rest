<?php

header ('Access-Control-Allow-Credentials: true');
header ('Access-Control-Allow-Origin: *');
header ('Access-Control-Allow-Methods: GET, POST, DELETE, OPTIONS');
header ('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

session_start();

// direción de la aplicación
$context_app = __DIR__;

// se establece el entorno de la aplicación

$env = 'development'; // development - production

// se agrega la configuración de la app
require $context_app . '/app/app.php';