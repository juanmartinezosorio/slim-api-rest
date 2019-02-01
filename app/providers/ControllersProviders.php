<?php

// Se agrega el controlador UserController
// a la aplicación

$container['UserController'] = function($container) {
  return new App\Controllers\UserController($container);
};

$container['CategoriesController'] = function($container) {
  return new App\Controllers\CategoriesController($container);
};

?>