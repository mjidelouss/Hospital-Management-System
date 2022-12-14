<?php

class Patient extends User {
    public $date;
    public $cin;
    public $phone;
    public $db;

    public function sign_up($Firstname,$Lastname,$CIN,$date,$email,$mobile,$password) {
        if (!empty($Firstname) && !empty($Lastname) && !empty($CIN) && !empty($date) && !empty($email) && !empty($mobile) && !empty($password)) {
            $query = $this->connect()->prepare("SELECT * FROM `role` WHERE email = ?;");
            $query->execute(array($email));
            $result = $query->fetchAll();

            if ($result) {


                $_SESSION['signup_error'] = " this email already exist  ?";

            } else {
                $query = $this->connect()->prepare("INSERT INTO `role`(`role`, `email`) VALUES (?,?)");
                $query->execute(array("patient", $email));

                $query = $this->connect()->prepare(" INSERT INTO `patient`(`First_name`, `Last_name`, `Email`, `PASSWORD`, `Birth_date`, `Cin`, `Phone_number`) VALUES (?,?,?,?,?,?,?) ;");
                $query->execute(array($Firstname, $Lastname, $email, $password, $date, $CIN, $mobile));

                $_SESSION['signup_result'] = "sign up success, you can know sing in  :)";

                header('Location:sign_in.php');
            }
        }else {
            $_SESSION['signup_error'] = "pls fill in a valid information :( ?";

        }
 
    }
}