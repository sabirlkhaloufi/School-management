<?php


class AdminController extends Controller{

    public function __construct()
    {
        $this->userModel = $this->model('admin');
    }

public function register(){

 if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $this->view('pages/admins');
 }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data =  $_POST;
    $this->userModel->addAdmin($data);
    self::tableAdmins();
 }
}

public function tableAdmins(){
    // $this->userModel->getAdmins();
    $data = $this->userModel->getAdmins();
    $this->view('pages/admins',$data);
}


public function delete(){
    $this->userModel->delete();
    self::tableAdmins();
}

}