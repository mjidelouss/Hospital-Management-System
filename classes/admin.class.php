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
    // function to display session
    public function displaySession() {
      $request="SELECT patient.Last_name,patient.First_name,appointment.Appointment_date,appointment.Appointment_number, session.Session_title, session.Scheduled_date,doctor.Last_name AS docLName, doctor.First_name AS docFName FROM appointment, patient, session ,doctor WHERE session.id = appointment.Session_id AND patient.id = appointment.Patient_id";
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
    // function to filter with date
    public function filter(){
      $date=$_POST["dateInput"];
      $request="SELECT patient.Last_name,patient.First_name,appointment.Appointment_date,appointment.Appointment_number, session.Session_title, session.Scheduled_date,doctor.Last_name AS docLName, doctor.First_name AS docFName FROM appointment, patient, session ,doctor WHERE session.id = appointment.Session_id AND patient.id = appointment.Patient_id AND appointment.Appointment_date LIKE '%".$date."%' ";
      $result=$this->connect()->query($request);
      while($row=$result->fetch()){
          echo'  <tr>
          <th scope="row">'. $row["First_name"] .' '. $row["Last_name"] .'</th>
          <td>'.$row["Appointment_number"].'</td>
          <td>'. $row["docFName"] . ' ' . $row["docLName"] .'</td>
          <td>'.$row["Session_title"].'</td>
          <td>'.$row["Scheduled_date"].'</td>
          <td>'.$row["Appointment_date"].'</td>
          <td><button class="btn bg-info bg-opacity-50 fw-bold" style="color: #03639f;"><img src="../assets//img/icons/delete-iceblue.svg" alt=""> Cancel</button></td>
    </tr>';
      }
    }
    // function to count appointments
    public function countAppointments() {
      $request = "SELECT COUNT(*) FROM appointment";
      $result = $this->connect()->query($request);
      $row = $result->fetch();
      echo $row['COUNT(*)'];
    }
}