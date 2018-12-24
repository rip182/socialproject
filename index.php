<?php
require 'vendor/autoload.php';
require 'core/bootstrap.php';

use app\core\{router,request};


router::load('routes.php')

  ->direct(request::uri(),request::method());


 ?>
