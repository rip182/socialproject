<?php
namespace app\controllers;

use app\core\app;

class userscontroller{

  public function index(){
    $users = app::get('database')->selectall('users');
    return view('users',compact('users'));

  }
  public function store(){
    app::get('database')->insert('users',[
      'name' => $_POST['name']
    ]);

  return redirect('users');
  }
}
 ?>
