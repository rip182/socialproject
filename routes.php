<?php

$router->get('','pagescontroller@home');

$router->post('users','userscontroller@store');
$router->get('users','userscontroller@index');

 ?>
