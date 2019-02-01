<?php

// configuración de la base datos
$db = require $context_app . '/app/database/config.php';

// configuración de la aplicación
$settings = array(
  'displayErrorDetails' => true,
  'determineRouteBeforeAppMiddleware' => true,
  'db' => $db
);

// se agrega el contexto a la app
$settings['context'] = $context_app;

return $settings;

?>