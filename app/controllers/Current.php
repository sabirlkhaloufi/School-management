<?php
  class Current extends Controller {


    
    public function __construct(){

$this->userModel =  $this->model('User');

     
    }
    



    public function contact(){

      $infos = [
        'title' => 'contact page',
        'name' => 'Abdelaziz'
      ] ;
 
      $this->view('pages/contact' , $infos);

    }

 
  }