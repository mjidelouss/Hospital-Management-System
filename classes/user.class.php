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
                    echo "<pre>";
                    // var_dump($_SESSION['user'][0]["id"]);
                    echo "</pre>";
                    // die();
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
            }else{
                $_SESSION['login_error'] = "invalid information !";

        }
        }
        //
        //
        //        echo "<pre>"."patient  ";
        //        var_dump($patient);
        //        echo "</pre>";
        //
        //        if ($admin) {
        //            $_SESSION['user'] = $admin;
        //
        //            $_SESSION['conn'] = 'success' ;
        //
        //
        //                header('Location:Admin/dashboardAdmin.php');
        //
        //
        //        }elseif($doctor){
        //
        //            $_SESSION['user'] = $doctor;
        //            $_SESSION['conn'] = 'success' ;
        //            header('Location:Doctor/dashboardDoctor.php');
        //        }elseif ($patient) {
        //
        //            $_SESSION['user'] = $patient;
        //            $_SESSION['conn'] = 'success' ;
        //            header('Location:Patient/dashboardPatient.php');
        //
        //
        //        }else {
        //
        //            $_SESSION['login_error'] = "invalid email or password !";
        //        }
        //



        // if ($result_admin) {

        //     header('Location:Admin/dashboardAdmin.php');


        // }else {
        //  echo "no accoount ";
        // }

        // $is=0;
        // foreach( $result as $row ) {

        //         if($email==$row['email']){
        //                 $is++;

        //         }

        // }
        //         if ($is>0) {
        //             $is++;
        //             $_SESSION["userfrnam"] = $row["first_name"];
        //             $_SESSION["userlsnam"] = $row["last_name"];
        //             $_SESSION["useremail"] = $row["email"];
        //             $_SESSION["userid"] = $row["id"]	;

        //             $_SESSION['con'] = 'success' ;
        //             header("Location: index.php");
        //         }else {

        //             $_SESSION['login_error'] = 'email or password is incorrect ' ;
        //             header("Location: sign_in.php");

        //         }

    }


    public function displayAppointment()
    {
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