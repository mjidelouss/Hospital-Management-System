<?php
//require_once('../includes/autoloader.php');


class User extends DbConnection
{
    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $password;



    public function login($email, $password)
    {
           if (!empty($email) && !empty($password)) {

                $query = $this->connect()->prepare("SELECT * FROM `role` WHERE email = ? limit 1");
                $query->execute(array($email));
                $role = $query->fetch();

               
            if($role){

                if ($role["role"] == "patient") {
                    $query = $this->connect()->prepare("SELECT * FROM `patient` WHERE email = ? AND password = ? limit 1");
                    $query->execute(array($email, $password));
                    $role = $query->fetchAll();

                    $_SESSION['user'] = $role;
                    $_SESSION['conn'] = 'success';
                    header('Location:Patient/dashboardPatient.php');


                } elseif ($role["role"] == "doctor") {

                    $query = $this->connect()->prepare("SELECT * FROM `doctor` WHERE email = ? AND password = ? limit 1 ");
                    $query->execute(array($email, $password));
                    $role = $query->fetchAll();

                    $_SESSION['user'] = $role;
                    $_SESSION['conn'] = 'success';
                    header('Location:Doctor/dashboardDoctor.php');

                } elseif ($role["role"] == "admin") {

                    $query = $this->connect()->prepare("SELECT * FROM `doctor` WHERE email = ? AND password = ? limit 1");
                    $query->execute(array($email, $password));
                    $role = $query->fetchAll();

                    $_SESSION['user'] = $role;
                    $_SESSION['conn'] = 'success';
                    header('Location:Admin/dashboardAdmin.php');
                } else {
                    $_SESSION['login_error'] = "invalid email or password !";
                }
            }else{
                $_SESSION['login_error'] = "invalid information !";

        }
        }
    }


    public function displayAppointment()
    {
    }
}
