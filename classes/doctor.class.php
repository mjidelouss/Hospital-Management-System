<?php
require_once('../includes/autoloader.php');

class Doctor extends DbConnection{
    public $id;
    public $firstName;
    public $lastName;
    public $email;
    public $password;

    public function login() {

    }
    public function displayAppointment() {
        $sql = "SELECT * FROM appointment";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) 
        {
          echo '
          <tr>
          <th scope="row">' . $row["First_name"] . ' ' . $row["Last_name"] . '</th>
          <td class="fs-2 text-primary text-center">2</td>
          <td>Test Session</td>
          <td>2050-01-01 @18:00</td>
          <td>2022-12-31</td>
          <td class="d-flex justify-content-evenly">
            <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/delete-iceblue.svg">Cancel</button>
        </td>
          </tr>
          ';
        }
    }
}


