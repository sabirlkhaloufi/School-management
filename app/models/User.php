<?php

class User
{

    private $db;
    public function __construct( )    {

      

    $this->db = new Database;
}


public function getUser(){



    $this->db->query("SELECT * FROM tests");
   

   
   return $this->db->single();
}

public function regitry($model){
    $this->db->query('INSERT INTO `tests`(`name`, `email`, `phone`, `address`) VALUES (:name,:email,:phone,:address)');

    $this->db->bind(':name' ,$model['name']);
    $this->db->bind(':email' ,$model['email']);
    $this->db->bind(':phone' ,'32423423');
    $this->db->bind(':address' ,'3242qsdqs3423');

    $this->db->execute();

    // try{
    //     $this->db->execute();
    //   } catch(PDOException $e){
    //     $this->error = $e->getMessage();
    //     echo $this->error;
    //   }
   
}
}


