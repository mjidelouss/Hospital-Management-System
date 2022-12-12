<?php
require_once('../includes/autoloader.php');

class Admin {
    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $db;

    public function __construct() {
      $this->db = new DbConnection;
    }
    public function createDoctor($firstName, $lastName, $email, $speciality, $password) {
      $sql = "INSERT INTO doctor (First_name, Last_name, Email, PASSWORD, Speciality) values ('$firstName', '$lastName', '$email', '$password', '$speciality')";
      $stmt = $this->db->connect()->query($sql);
    }
    public function deleteDoctor() {
        
    }
    public function updateDoctor() {
        
    }
    public function displaySession() {
        
    }
    public function createSession() {
        
    }
    public function updateSession() {
        
    }
    public function deleteSession() {
        
    }
    public function displayPatientDetails() {
        
    }
}