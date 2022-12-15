<?php 
require_once('../includes/autoloader.php');


class Schedule extends DbConnection
{
    // function to get 
    public function get_All_Session()
    {
        $requete = " SELECT `id`, `First_name`, `Last_name`, `Email`, `PASSWORD`, `Speciality` FROM `doctor` WHERE 1";
        $result = $this->connect()->query($requete);
        $result = $result->fetch(PDO::FETCH_ASSOC);
     
        return $result;
    }
}
?>