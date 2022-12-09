<?php
require_once('../includes/autoloader.php');

class Patient extends User {
    public $date;
    public $cin;
    public $phone;
    public $db;

    public function __construct() {
      $this->db = new DbConnection;
    }

    public function bookSession() {

    }
    public function displayReservation() {
        
    }
    // public function __construct($frstname,$lstname,$email,$password,$birth_date,$cin,$phone_number) {
  

    // }

    public function sign_up($frstname,$lstname,$email,$password,$birth_date,$cin,$phone_number){

        $query = $this->pdo->prepare("SELECT email FROM `rol`  Email = ? ");
       $result  = $query->execute(array($email));
        if ($result) {

                    $_SESSION['signup_error'] = " this email already exist  ?";
        }else {
            
        $query = $this->pdo->prepare("INSERT INTO `patient`(`id`, `First_name`, `Last_name`, `Email`, `PASSWORD`, `Birth_date`, `Cin`, `Phone_number`) VALUES (NULL,'?','?','?','?','?','?','?')");
        $query->execute(array($frstname,$lstname,$email,$password,$birth_date,$cin,$phone_number));

            $_SESSION['signup_error'] = " sign up success :)";
        }

        
        
        


        // $sql_admin = "INSERT INTO `patient`(`id`, `First_name`, `Last_name`, `Email`, `PASSWORD`, `Birth_date`, `Cin`, `Phone_number`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')";
  
        // $result_patient =  $this->connect()->query($sql_patient);
 
    }
}