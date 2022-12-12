<?php
require_once "../includes/autoloader.php";

class User extends DbConnection {
    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $password;

    public function login() {
        
    }
    public function displayAppointment() {

    }

    public function get_all($user){
  
        $db = new DbConnection();
        
        $sql = "SELECT * FROM `$user`";
        $STH = $db->connect()->prepare($sql);
        $STH->execute();
     $res = $STH->rowCount();

        return $res;
       
    }
    
     
}