<?php

class User extends DbConnection
{
    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $db;

    public function __construct() {
      $this->db = new DbConnection;
    }
    // function to log user to his intended dashboard
    public function login($email, $password)
    {
            if (!empty($email) && !empty($password)) {
                $query = $this->connect()->prepare("SELECT * FROM `role` WHERE email = ? limit 1");
                $query->execute(array($email));
                $role = $query->fetch();
                if($role) {
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
                    $query = $this->connect()->prepare("SELECT * FROM `admin` WHERE email = ? AND password = ? limit 1");
                    $query->execute(array($email, $password));
                    $role = $query->fetchAll();

                    $_SESSION['user'] = $role;
                    $_SESSION['conn'] = 'success';
                    header('Location:Admin/dashboardAdmin.php');
                    } else {
                    $_SESSION['login_error'] = "invalid email or password !";
                    }
            } else {
                $_SESSION['login_error'] = "invalid information !";
        }
        }
    }
    // function to get the count of the table
    public function get_all($user){
  
        $db = new DbConnection();
        
        $sql = "SELECT * FROM `$user`";
        $STH = $db->connect()->prepare($sql);
        $STH->execute();
        $res = $STH->rowCount();

        return $res;
    }
}