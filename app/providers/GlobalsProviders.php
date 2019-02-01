<?php

// Database Provider
$container['db'] = function($container) {

  return new Medoo\Medoo($container['settings']['db']);
};

// JSON WEB TOKEN PROVIDER
?>