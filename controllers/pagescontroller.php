<?php
namespace app\controllers;
class pagescontroller{

  public function home(){



    return view('index');

  }

  public function about(){
    return view('about');


  }

  public function contact(){
    return view('contact');


  }
}
 ?>
