<?php
require_once('../includes/autoloader.php');

class Admin  extends User{
    // function to add a new doctor
    public function createDoctor($firstName, $lastName, $email, $speciality, $password) {
      $sql = "INSERT INTO doctor (First_name, Last_name, Email, PASSWORD, Speciality) values ('$firstName', '$lastName', '$email', '$password', '$speciality')";
      $req = "INSERT INTO role (role, email) values ('doctor', '$email')";
      $stmt = $this->db->connect()->query($sql);
      $stmt2 = $this->db->connect()->query($req);
    }
}