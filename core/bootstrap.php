<?php
use app\core\app;

app::bind('config', require 'config.php');



app::bind('database', new querybuilder(

  connection::make(app::get('config')['database'])

));
function view($name,$data=[]){
  extract($data);
  return require "views/{$name}.view.php";
}
function redirect($path){
  header("Location:  /{$path}");
}
 ?>
