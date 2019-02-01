<?php

$container['categories'] = function($container) {
  return new App\Models\CategoriesModel($container);
};

?>