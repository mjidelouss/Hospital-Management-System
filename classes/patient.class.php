<?php

require_once('autoloader.php');

class Patient extends User {
    public $date;
    public $cin;
    public $phone;
    public $db;


public function getpasword(){

}
    public function bookSession() {

    }
    public function displayReservation() {
        
    }
    // public function __construct($frstname,$lstname,$email,$password,$birth_date,$cin,$phone_number) {


    // }

    public function sign_up($Firstname,$Lastname,$CIN,$date,$email,$mobile,$password){


        if (!empty($Firstname)&&!empty($Lastname)&&!empty($CIN)&&!empty($date)&&!empty($email)&&!empty($mobile)&&!empty($password)){
            $query = $this->pdo->prepare("SELECT * FROM `role` WHERE email = ?;");
            $query->execute(array($email));
            $result = $query->fetchAll();

            if ($result) {


                $_SESSION['signup_error'] = " this email already exist  ?";

            } else {
                $query = $this->pdo->prepare("INSERT INTO `role`(`rol_type`, `email`) VALUES (?,?)");
                $query->execute(array("patient", $email));

                $query = $this->pdo->prepare(" INSERT INTO `patient`(`First_name`, `Last_name`, `Email`, `PASSWORD`, `Birth_date`, `Cin`, `Phone_number`) VALUES (?,?,?,?,?,?,?) ;");
                $query->execute(array($Firstname, $Lastname, $email, $password, $date, $CIN, $mobile));

                $_SESSION['signup_result'] = "sign up success, you can know sing in  :)";

                header('Location:sign_in.php');
            }
        }else {
            $_SESSION['signup_error'] = "pls fill in a valid information :( ?";

        }
        
        
        


        // $sql_admin = "INSERT INTO `patient`(`id`, `First_name`, `Last_name`, `Email`, `PASSWORD`, `Birth_date`, `Cin`, `Phone_number`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')";
  
        // $result_patient =  $this->connect()->query($sql_patient);
 
    }
}