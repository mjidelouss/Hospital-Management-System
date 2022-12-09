<?php
include "autoloader.php";

class Session extends DbConnection
{
    private $id;
    private $title;
    private $scheduled_date;
    private $maxNumber;
    // private Doctor $doctor;


    public function __construct($title, $scheduled_date)
    {

        $this->title = $title;
        $this->$scheduled_date = $scheduled_date;
    }

    public function createSession(Doctor $doctor)
    {

        $query = $this->pdo->prepare(" insert ... ");
        $query->execute(array($email, $doctor->id));

    }
    public function displaySession()
    {

        $query = $this->pdo->prepare(" insert ... ");
        $query->execute(array($email, $this->doctor->id));


    }
      public function gitSessionBy(){


        }


}