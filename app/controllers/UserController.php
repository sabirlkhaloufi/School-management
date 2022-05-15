<?php


class UserController extends Controller{

    public function __construct()
    {
        $this->userModel = $this->model('user');
    }

public function register(){



 if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $this->view('pages/register');
 }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data =  $_POST;
    $this->userModel->regitry($data);

   $this->view('pages/contact',$data);
 }

}




}