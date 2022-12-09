<?php
require_once('../includes/autoloader.php');

class Patient{
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
    public function signUp() {

    }
}