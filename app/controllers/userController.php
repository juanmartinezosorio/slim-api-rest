<?php

namespace App\Controllers;

class UserController extends Controller {

  function helloUser($request, $response) {
    return json_encode(array('greetings' => 'Hello User'));
  }

  function helloUserName($request, $response) {    
    $name = $request->getAttribute('name');
    return json_encode(array('userName' => $name));
  }

  function selectCategories($request, $response) {
    $message = $this->categories->selectCategories();
    return json_encode($message);
  }

}

?>