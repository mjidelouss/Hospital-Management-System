<?php
require_once('../includes/autoloader.php');

class Doctor {
    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $speciality;
    public $db;

    public function __construct() {
      $this->db = new DbConnection;
    }
    public function login() {

    }
    public function searchDoctors($doc) {
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
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;" data-bs-toggle="modal" data-bs-target="#modal-edit"><img class="me-2 mb-1" src="../assets/img/icons/edit-iceblue.svg">Edit</button>
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" data-bs-toggle="modal" data-bs-target="#modal-view" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/view-iceblue.svg">View</button>
          <form method="POST">
          <input type="text" name="remove" value="'.$row['id'].'" style="display: none">
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/delete-iceblue.svg">Remove</button>
          </form>
          </td>
        </tr>
        ';
      }
      if (isset($_POST['remove'])) {
        $this->removeDoctor($_POST['remove']);
    }
    }
    public function displayDoctor() {
      $sql = "SELECT * FROM doctor";
      $stmt = $this->db->connect()->query($sql);
      while ($row = $stmt->fetch()) 
      {
        $this->firstName = "".$row["First_name"]."";
        $this->lastName = "".$row["Last_name"]."";
        $this->email = "".$row["Email"]."";
        $this->speciality = "".$row["Speciality"]."";
        echo '
        <tr>
        <th scope="row">'.$this->firstName.' '.$this->lastName.'</th>
        <td>'.$this->email.'</td>
        <td>'.$this->speciality.'</td>
        <td class="d-flex justify-content-evenly">
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;" data-bs-toggle="modal" data-bs-target="#modal-edit"><img class="me-2 mb-1" src="../assets/img/icons/edit-iceblue.svg">Edit</button>
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" data-bs-toggle="modal" data-bs-target="#modal-view" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/view-iceblue.svg">View</button>
          <form method="POST">
          <input type="text" name="remove" value="'.$row['id'].'" style="display: none">
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/delete-iceblue.svg">Remove</button>
        </form>
          </td>
        </tr>
        ';
      }
      if (isset($_POST['remove'])) {
        $this->removeDoctor($_POST['remove']);
    }
    }
    public function removeDoctor($id) {
      $sql = "DELETE FROM doctor WHERE id = '$id'";
      $stmt = $this->db->connect()->query($sql);
    }
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
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" data-bs-toggle="modal" data-bs-target="#modal-view" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/view-iceblue.svg">View</button>
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/session-iceblue.svg">Sessions</button>
      </td>
        </tr>
        ';
      }
    }
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
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" data-bs-toggle="modal" data-bs-target="#modal-view" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/view-iceblue.svg">View</button>
          <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/session-iceblue.svg"><a href="ScheduleSession.php" class="text-decoration-none">Sessions</a></button>
      </td>
        </tr>
        ';
      }
  }
}
