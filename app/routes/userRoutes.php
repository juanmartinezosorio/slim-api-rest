<?php

$app->get('/helloUser', 'UserController:helloUser');

$app->get('/helloUser/{name}', 'UserController:helloUserName');

?>