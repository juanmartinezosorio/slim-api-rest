<?php

require $context_app . '/vendor/autoload.php';

// configuración de la aplicación
$settings = require $context_app . '/app/settings.php';

if ($env == 'production') {
  $settings['displayErrorDetails'] = false;
}

// crea la instancia de Slim
$app = new \Slim\App(
  array(
    'settings' => $settings
  )
);

// se obtiene el container de Slim
$container = $app->getContainer();

// se agregan los providers.
$providers = $context_app . '/app/providers/*.php';
foreach (glob($providers) as $filename) require $filename;

$routes = $context_app . '/app/routes/*.php';
foreach (glob($routes) as $filename) require $filename;

$app->run();

?>