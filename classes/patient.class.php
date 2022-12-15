<?php

class Patient extends User {
    public $date;
    public $cin;
    public $phone;
    public $db;

    // function to sign up
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
    // function to display patients details
    public function displayPatientDetails(){
        $request='SELECT * FROM patient';
        $result=$this->connect()->query($request);
        while($row=$result->fetch()){
            echo'
            <tr id="'.$row["id"].'">
                <th scope="row" class="nameclass">'.$row["First_name"].' '.$row["Last_name"].'</th>
                <td class="cinclass">'.$row["Cin"].'</td>
                <td class="phoneclass">'.$row["Phone_number"].'</td>
                <td class="emailclass">'.$row["Email"].'</td>
                <td class="birthclass">'.$row["Birth_date"].'</td>
                <td><button class="btn bg-info bg-opacity-50 fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="modalEdit('.$row["id"].')" style="color: #03639f;"><img src="../assets//img/icons/view-iceblue.svg" alt=""> View</button></td>
            </tr>
            ';
        }
    }
    // function to count the patients
    public function countPatients() {
        $request = "SELECT COUNT(*) FROM patient";
        $result = $this->connect()->query($request);
        $row = $result->fetch();
        echo $row['COUNT(*)'];
    }
}