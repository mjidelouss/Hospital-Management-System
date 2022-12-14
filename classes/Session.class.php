<?php
require_once('../includes/autoloader.php');

class Session extends DbConnection
{

    private $title;
    private $sheduled_date;
    private $scheduled_time;
    private $maxNumber;
    private $doctor_id;

    public function __construct($title, $scheduled_date, $scheduled_time, $maxNumber,$doctor_id)
    {
        $this->title = $title;
        $this->sheduled_date = $scheduled_date;
        $this->scheduled_time = $scheduled_time;
        $this->maxNumber = $maxNumber;
        $this->doctor_id = $doctor_id;
    }

    public function createSession(){
        $query = $this->connect()->prepare("INSERT INTO `session`(`Session_title`, `Scheduled_date`,`Scheduled_time`, `max_number`, `Doctor_id`) VALUES (?,?,?,?,?)");
        $query->execute(array($this->title,$this->sheduled_date,$this->scheduled_time,$this->maxNumber,$this->doctor_id));


    }
    public function displaySession()
    {

        $query = $this->connect()->prepare("SELECT `id`, `Session_title`, `Scheduled_date`, `Scheduled_time`, `max_number`, `Doctor_id` FROM `session`");
        $query->execute();
        $sessions = $query->fetchAll();
    }
}
