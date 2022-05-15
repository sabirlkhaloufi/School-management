<?php
  /*
   * Base Controller
   * Loads the models and views
   */
  class Controller {
    // Load model
    public function model($model){
      // Require model file
      require_once '../app/models/' . $model . '.php';

      // Instatiate model
      return new $model();
    }

    // Load view
    public function view($view, $data = []){
      // Check for view file
      if(file_exists('../app/views/' . $view . '.php')){
     
      require_once '../app/views/' . $view . '.php';
      } else {
        // View does not exist
        die('View does not exist');
      }
    }
    public function postValid($post){//fun jamal
      $data = array_values($post);
      for($i=0 ; $i<count($data) ;$i++){
          
          if(!preg_match("/^[a-zA-Z0-9]{3,}$/", $data[$i]) || $data[$i] == ''){
            return false;
          }

      } 
      return true;     
    }
    // public function validNumber($data){//FUN JAMAL
    //   if(!preg_match("/^[0-9]{3,}$/", $data) || $data == ''){
    //     return false;
    //   }
    // }
  }