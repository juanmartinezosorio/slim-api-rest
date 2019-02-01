<?php

namespace App\Controllers;

class CategoriesController extends Controller {

  
   function selectCategories($request, $response) {
    $message = $this->categories->selectCategories();
    return json_encode($message);
  }

}

?>