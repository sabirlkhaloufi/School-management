<?php 
    class Professor{

        private $db;
        public function __construct( )    {
        $this->db = new Database();
    }
    
    
    public function getUser(){
    
    
    
        $this->db->query("SELECT * FROM tests");
       
    
       
       return $this->db->single();
    }
    
        public function addProfessor($model){
            $this->db->query('INSERT INTO `professors`( `nom_complet`, `genre`, `matricule`,`class`,`matiere`,`phone`) VALUES (? ,? ,? ,? ,? ,?)');//:name,:email,:phone,:address
            
            $this->db->bind(1 ,$model['name']);
            $this->db->bind(2 ,$model['genre']);
            $this->db->bind(3 ,$model['matricule']);
            $this->db->bind(4 ,$model['class']);
            $this->db->bind(5 ,$model['matiere']);
            $this->db->bind(6 ,$model['phone']);
            $this->db->execute();
        
            
        }
    }