<?php
require_once('../includes/autoloader.php');

class Admin extends DbConnection{
    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $password;

    public function createDoctor() {

    }
    public function deleteDoctor() {
        
    }
    public function updateDoctor() {
        
    }
    public function displayDoctor() {
        $sql = "SELECT * FROM doctor";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) 
        {
          echo '
          <tr>
          <th scope="row">' . $row["First_name"] . ' ' . $row["Last_name"] . '</th>
          <td>' . $row["Email"] . '</td>
          <td>' . $row["Speciality"] . '</td>
          <td class="d-flex justify-content-evenly">
            <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/edit-iceblue.svg">Edit</button>
            <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/view-iceblue.svg">View</button>
            <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/delete-iceblue.svg">Remove</button>
        </td>
          </tr>
          ';
        }
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