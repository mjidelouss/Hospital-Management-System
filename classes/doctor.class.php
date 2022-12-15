<?php
require_once('../includes/autoloader.php');

class Doctor extends User{
    public $speciality;

    // function to count the number of doctors
    public function countDoctors() {
      $sql = "SELECT COUNT(*) FROM doctor";
      $stmt = $this->db->connect()->query($sql);
      $row = $stmt->fetch();
      $docCount = $row['COUNT(*)'];
      echo '<h5 class="fw-bold ms-4 mt-3">All Doctors ('.$docCount.')</h5>';
    }

    // function to search for a doctor by admin
    public function searchDoctors($doc) {
      if (isset($_POST['remove'])) {
        $this->removeDoctor($_POST['remove']);
      }
      $sql="SELECT * FROM doctor WHERE First_name LIKE '%$doc%' OR email LIKE '%$doc%'";
      $stmt = $this->db->connect()->query($sql);
      while ($row = $stmt->fetch()) 
      {
        $this->firstName = "".$row["First_name"] ."";
        $this->lastName = "".$row["Last_name"]."";
        $this->email = "".$row["Email"]."";
        $this->speciality = "".$row["Speciality"]."";
        $this->id = "".$row["id"]."";
        $this->password = "".$row["PASSWORD"]."";
        echo '
        <tr>
        <th scope="row">'.$this->firstName.' '.$this->lastName.'</th>
        <td>'.$this->email.'</td>
        <td>'.$this->speciality.'</td>
        <td class="d-flex justify-content-evenly">
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" data-info="'.$this->firstName.','.$this->lastName.','.$this->email.','.$this->speciality.','.$this->password.'" style="color: #03639f;" data-bs-toggle="modal" data-bs-target="#modal-edit" id="'.$this->id.'" onclick="initializeDoc('.$this->id.')"><img class="me-2 mb-1" src="../assets/img/icons/edit-iceblue.svg">Edit</button>
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" data-bs-toggle="modal" data-bs-target="#modal-view" onclick="viewDoc('.$this->id.')" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/view-iceblue.svg">View</button>
          <form method="POST">
          <input type="text" name="remove" value="'.$this->id.'" style="display: none">
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/delete-iceblue.svg">Remove</button>
          </form>
          </td>
        </tr>
        ';
      }
    }
    // function to display doctor by admin
    public function displayDoctor() {
      if (isset($_POST['remove'])) {
        $this->removeDoctor($_POST['remove']);
      }
      $sql = "SELECT * FROM doctor";
      $stmt = $this->db->connect()->query($sql);
      while ($row = $stmt->fetch()) 
      {
        $this->firstName = "".$row["First_name"]."";
        $this->lastName = "".$row["Last_name"]."";
        $this->email = "".$row["Email"]."";
        $this->speciality = "".$row["Speciality"]."";
        $this->id = "".$row["id"]."";
        $this->password = "".$row["PASSWORD"]."";
        echo '
        <tr>
        <th scope="row">'.$this->firstName.' '.$this->lastName.'</th>
        <td>'.$this->email.'</td>
        <td>'.$this->speciality.'</td>
        <td class="d-flex justify-content-evenly">
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;" data-bs-toggle="modal" data-bs-target="#modal-edit" data-info="'.$this->firstName.','.$this->lastName.','.$this->email.','.$this->speciality.','.$this->password.'" id="'.$this->id.'" onclick="initializeDoc('.$this->id.')"><img class="me-2 mb-1" src="../assets/img/icons/edit-iceblue.svg">Edit</button>
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" data-bs-toggle="modal" data-bs-target="#modal-view" onclick="viewDoc('.$this->id.')" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/view-iceblue.svg">View</button>
          <form method="POST">
          <input type="text" name="remove" value="'.$this->id.'" style="display: none">
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/delete-iceblue.svg">Remove</button>
        </form>
          </td>
        </tr>
        ';
      }
    }
    // function to remove a doctor
    public function removeDoctor($id) {
      $sql = "DELETE FROM doctor WHERE id = '$id'";
      $stmt = $this->db->connect()->query($sql);
    }
    // function to update a doctor
    public function updateDoctor($id, $firstName, $lastName, $email, $password, $speciality) {
      $sql = "UPDATE doctor SET id = '$id', First_name = '$firstName', Last_name = '$lastName', Email = '$email', PASSWORD = '$password', Speciality = '$speciality' WHERE id = '$id'";
      $stmt = $this->db->connect()->query($sql);
    }
    // function to search for a doctor by patient
    public function searchDoctor($doc) {
      $sql="SELECT * FROM doctor WHERE First_name LIKE '%$doc%' OR email LIKE '%$doc%'";
      $stmt = $this->db->connect()->query($sql);
      while ($row = $stmt->fetch())
      {
        $this->firstName = "".$row["First_name"] ."";
        $this->lastName = "".$row["Last_name"]."";
        $this->email = "".$row["Email"]."";
        $this->speciality = "".$row["Speciality"]."";
        echo '
        <tr>
        <th scope="row">'.$this->firstName.' '.$this->lastName.'</th>
        <td>'.$this->email.'</td>
        <td>'.$this->speciality.'</td>
        <td class="d-flex justify-content-evenly">
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" data-bs-toggle="modal" data-bs-target="#modal-view" onclick="viewDoc2('.$this->firstName.', '.$this->lastName.', '.$this->email.', '.$this->speciality.')" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/view-iceblue.svg">View</button>
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/session-iceblue.svg">Sessions</button>
      </td>
        </tr>
        ';
      }
    }
    // function to display doctors by patient
    public function displayDoctors() {
      $sql = "SELECT * FROM doctor";
      $stmt = $this->db->connect()->query($sql);
      while ($row = $stmt->fetch()) 
      {
        $this->firstName = "".$row["First_name"] ."";
        $this->lastName = "".$row["Last_name"]."";
        $this->email = "".$row["Email"]."";
        $this->speciality = "".$row["Speciality"]."";
        echo '
        <tr>
        <th scope="row">'.$this->firstName.' '.$this->lastName.'</th>
        <td>'.$this->email.'</td>
        <td>'.$this->speciality.'</td>
        <td class="d-flex justify-content-evenly">
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" data-bs-toggle="modal" data-bs-target="#modal-view" onclick="viewDoc2('.$this->firstName.', '.$this->lastName.', '.$this->email.', '.$this->speciality.')" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/view-iceblue.svg">View</button>
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/session-iceblue.svg"><a href="ScheduleSession.php" class="text-decoration-none">Sessions</a></button>
      </td>
        </tr>
        ';
      }
  }
}
