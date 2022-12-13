<?php
require_once('../includes/autoloader.php');

class Appointments {
    public $db;
    
    public function __construct() {
      $this->db = new DbConnection;
    }
    public function displayAppointment() {
        $sql = "SELECT appointment.Appointment_number, appointment.Appointment_date, session.Session_title, session.Scheduled_date, patient.First_name, patient.Last_name FROM appointment, patient, session WHERE session.id = appointment.Session_id AND patient.id = appointment.Patient_id";
        $stmt = $this->db->connect()->query($sql);
        while ($row = $stmt->fetch()) 
        {
          echo '
          <tr>
          <th scope="row">' . $row["First_name"] . ' ' . $row["Last_name"] . '</th>
          <td class="fs-2 text-primary text-center">' . $row["Appointment_number"] . '</td>
          <td>' . $row["Session_title"] . '</td>
          <td>' . $row["Scheduled_date"] . '</td>
          <td>' . $row["Appointment_date"] . '</td>
          <td class="d-flex justify-content-evenly">
            <form method="POST">
            <input type="text" name="cancel" value="'.$row['Appointment_number'].'" style="display: none">
            <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/delete-iceblue.svg">Cancel</button>
            </form>
        </td>
          </tr>
          ';
        }
        if (isset($_POST['cancel'])) {
          $this->cancelAppointment($_POST['cancel']);
        }
    }

    public function searchAppointment($appoint) {
      $sql = "SELECT appointment.Appointment_number, appointment.Appointment_date, session.Session_title, session.Scheduled_date, patient.First_name, patient.Last_name FROM appointment, patient, session WHERE session.id = appointment.Session_id AND patient.id = appointment.Patient_id AND appointment.Appointment_date LIKE '%$appoint%'";
      $stmt = $this->db->connect()->query($sql);
      while ($row = $stmt->fetch())
      {
        echo '
          <tr>
          <th scope="row">' . $row["First_name"] . ' ' . $row["Last_name"] . '</th>
          <td class="fs-2 text-primary text-center">' . $row["Appointment_number"] . '</td>
          <td>' . $row["Session_title"] . '</td>
          <td>' . $row["Scheduled_date"] . '</td>
          <td>' . $row["Appointment_date"] . '</td>
          <td class="d-flex justify-content-evenly">
          <form method="POST">
          <input type="text" name="cancel" value="'.$row['Appointment_number'].'" style="display: none">
            <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/delete-iceblue.svg">Cancel</button>
          </form>
          </td>
          </tr>
        ';
      }
      if (isset($_POST['cancel'])) {
          $this->cancelAppointment($_POST['cancel']);
      }
    }

    public function cancelAppointment($appointNumber) {
      $sql = "DELETE FROM appointment WHERE Appointment_number = '$appointNumber'";
      $stmt = $this->db->connect()->query($sql);
    }
    
    public function countAppointments() {
      $sql = "SELECT COUNT(*) FROM appointment";
      $stmt = $this->db->connect()->query($sql);
      $row = $stmt->fetch();
      $appointCount = $row['COUNT(*)'];
      echo '<h5 class="fw-bold ms-4 mt-3">My Appointments ('.$appointCount.')</h5>';
    }
}
