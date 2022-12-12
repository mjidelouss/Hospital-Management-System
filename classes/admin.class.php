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
      $request="SELECT patient.Last_name,patient.First_name,appointment.Appointment_date,appointment.Appointment_number, session.Session_title, session.Scheduled_date,doctor.Last_name AS docFName, doctor.First_name AS docLName FROM appointment, patient, session ,doctor WHERE session.id = appointment.Session_id AND patient.id = appointment.Patient_id;";
      $result=$this->connect()->query($request);
      while($row=$result->fetch()){
          echo'  <tr>
          <th scope="row">'. $row["First_name"] . ' ' . $row["Last_name"] .'</th>
          <td>'.$row["Appointment_number"].'</td>
          <td>'. $row["docFName"] . ' ' . $row["docLName"] .'</td>
          <td>'.$row["Session_title"].'</td>
          <td>'.$row["Scheduled_date"].'</td>
          <td>'.$row["Appointment_date"].'</td>
          <td><button class="btn bg-info bg-opacity-50 fw-bold" style="color: #03639f;"><img src="../assets//img/icons/delete-iceblue.svg" alt=""> Cancel</button></td>
    </tr>';
      }
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