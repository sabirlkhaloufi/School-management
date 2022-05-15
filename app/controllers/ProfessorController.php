<?php 
 class ProfessorController extends Controller{

    public function __construct()
    {
        $this->professorModel = $this->model('Professor');
    }
    public function addProfessor(){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $this->view('pages/addProfessor');
         }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data =  $_POST;
            if(!$this->postValid($data)){
                unset($data);
                unset($_POST);
                // $this->view('pages/professors');
                return;
            }
            // if(!($this->validNumber($data['phone']) && $this->validNumber($data['matricule']) )){
            //     unset($data);
            //     unset($_POST);
            //     // $this->view('pages/professors');
            //     return;
            // }
                
            
            $this->professorModel->addProfessor($data);
        
           $this->view('pages/professors',$data);
         }
    }
}