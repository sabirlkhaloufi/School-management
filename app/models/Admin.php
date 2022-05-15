<?php

class Admin
{

    private $db;
    public function __construct( )    {

    $this->db = new Database;
}


public function getAdmins(){
$this->db->query("SELECT * FROM Admins");
   return $this->db->resultSet();
}


public function addAdmin($model){
    $this->db->query('INSERT INTO `Admins`(`Matricule`, `Nom`, `Prenom`, `Role`, `Password`) VALUES (:Matricule,:Nom,:Prenom,:Role,:Password)');
    $this->db->bind(':Matricule' ,$model['matricule']);
    $this->db->bind(':Nom' ,$model['nom']);
    $this->db->bind(':Prenom' ,$model['prenom']);
    $this->db->bind(':Role' ,$model['role']);
    $this->db->bind(':Password' ,$model['password']);
    $this->db->execute();
    // try{
    //     $this->db->execute();
    //   } catch(PDOException $e){
    //     $this->error = $e->getMessage();
    //     echo $this->error;
    //   }
}


public function delete(){
    $idAdmin = $_GET['idAdmin'];
    $this->db->query('DELETE FROM `admins` WHERE idAdmin = 13');
    $this->db->execute();
}
}