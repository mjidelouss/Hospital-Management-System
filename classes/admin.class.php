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
      $request="SELECT patient.Last_name,patient.First_name,appointment.Appointment_date,appointment.Appointment_number, session.Session_title, session.Scheduled_date,doctor.Last_name AS docLName, doctor.First_name AS docFName FROM appointment, patient, session ,doctor WHERE session.id = appointment.Session_id AND patient.id = appointment.Patient_id AND appointment.Doctor_id = doctor.id";
      $result=$this->connect()->query($request);
      while($row=$result->fetch()){
          echo'
          <tr>
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
      $request="SELECT patient.Last_name,patient.First_name,appointment.Appointment_date,appointment.Appointment_number, session.Session_title, session.Scheduled_date,doctor.Last_name AS docLName, doctor.First_name AS docFName FROM appointment, patient, session ,doctor WHERE session.id = appointment.Session_id AND patient.id = appointment.Patient_id AND doctor.id = appointment.Doctor_id AND appointment.Appointment_date LIKE '%".$date."%' ";
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
    // function to search for patient
    public function search_patient() {
      $database = new DbConnection();
      $search = $_POST["searchInp"];
      $myquery = $database->connect()->prepare("SELECT * FROM patient WHERE Email = '$search' ");
      $myquery -> execute();
      $myresult = $myquery->fetchAll();
      $rows = $myquery->rowCount();

      if ($rows != 0) {
        foreach ($myresult as $r) {
        echo '
        <div class="border border-info rounded mx-3" style="width: 95%;">
                <table class="text-center my-2 w-100">
                    <tr style="border-bottom: solid #1253B8;">
                        <th class="py-3">First Name</th>
                        <th>Last Name</th>
                        <th>CIN</th>
                        <th>Telephone</th>
                        <th>E-mail</th>
                        <th>Date of Birth</th> 
                        <th>Events</th>
                    </tr>
                    <tbody>
                            <tr>
                                <td class="py-4">'.$r["First_name"].'</td>
                                <input type="hidden"  value="">
                                <td>'.$r["Last_name"].'</td>
                                <td>'.$r["Cin"].'</td>
                                <td>'.$r["Phone_number"].'</td>
                                <td>'.$r["Email"].'</td>
                                <td>'.$r["Birth_date"].'</td> 
                                <td><button class="btn bg-info bg-opacity-50 fw-bold" style="color: #03639f;" data-bs-toggle="modal" data-bs-target="#pateintModal" onclick="getData()" id=""><img src="../assets/img/icons/view-iceblue.svg" alt=""> View </button></td>
                            </tr>
                            <?php
                            }
                        }
                        ?>
                    </tbody>
                </table> 
        </div>';
        }
    }
    else {
      echo '<h4 class = "text-danger mx-4">No result was Found for your Search</h4>';
    }
  }
  // function to display patient Details
  public function displayPatientDetails() {
    if(!isset($_POST['search'])) {
      $patient = new DbConnection();
      $query = "SELECT * FROM patient";
      $statement = $patient->connect()->prepare($query);
      $statement -> execute();
      $result = $statement->fetchAll();

      if ($result) {
        ?>
         <div id="table" >
            <h5 class="fw-bold ms-4 d-inline-block py-5">All Patients (<?php $patientsCounter =new Patient (); $patientsCounter->countPatients()?>)</h5>
            <div class="container-fluid px-4">

              <div class="border border-info rounded" style="width: 95%;">
                <table class="text-center my-2 w-100">
                  <tr style="border-bottom: solid #1253B8;">

                      <th class="py-3">First Name</th>
                      <th>Last Name</th>
                      <th>CIN</th>
                      <th>Telephone</th>
                      <th>E-mail</th>
                      <th>Date of Birth</th>
                      <th>Events</th>
                  </tr>
                  <tbody>
        <?php
          foreach ($result as $row) {
            ?>
                        <tr>
                            <td class="py-4"><?= $row['First_name'] ?></td>
                            <input type="hidden" id="fname-<?= $row['id'] ?>" value="<?= $row['First_name'] ?>">
                            <td><?= $row['Last_name'] ?></td>
                            <input id="lname-<?= $row['id'] ?>" type="hidden" value="<?= $row['Last_name'] ?>">
                            <td><?= $row['Cin'] ?></td>
                            <input id="cin-<?= $row['id'] ?>" type="hidden" value="<?= $row['Cin'] ?>">
                            <td><?= $row['Phone_number'] ?></td>
                            <input id="phoneNumber-<?= $row['id'] ?>" type="hidden" value="<?= $row['Phone_number'] ?>">
                            <td><?= $row['Email'] ?></td>
                            <input id="email-<?= $row['id'] ?>" type="hidden" value="<?= $row['Email'] ?>">
                            <td><?= $row['Birth_date'] ?></td>
                            <input id="birthday-<?= $row['id'] ?>" type="hidden" value="<?= $row['Birth_date'] ?>">
                            <td><button class="btn bg-info bg-opacity-50 fw-bold" style="color: #03639f;" data-bs-toggle="modal" data-bs-target="#pateintModal" onclick="getData(<?= $row['id'] ?>)" id="<?= $row['id'] ?>"><img src="../assets/img/icons/view-iceblue.svg" alt=""> View </button></td>
                        </tr> 
                      <?php
                  }
                  ?>
                    </tbody>
                  </table> 
                </div>
              </div>
            </div>
            <?php
        }
      }
    }
}