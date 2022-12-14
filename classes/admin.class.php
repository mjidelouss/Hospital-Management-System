<?php
require_once('../includes/autoloader.php');

class Admin  extends User{

    public function createDoctor($firstName, $lastName, $email, $speciality, $password) {
      $sql = "INSERT INTO doctor (First_name, Last_name, Email, PASSWORD, Speciality) values ('$firstName', '$lastName', '$email', '$password', '$speciality')";
      $stmt = $this->db->connect()->query($sql);
    }
}