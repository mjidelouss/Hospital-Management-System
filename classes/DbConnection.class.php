<?php

class DbConnection {
    public $host = "localhost";
    public $user = "root";
    public $pwd = "";

    public $dbName = "youcodehospitale";

    public PDO $pdo;

    public function __construct()
    {
        try {

            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            $this->pdo = $pdo;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
//    public function __destruct(){
//        if($this->$pdo != NULL){
//            $this->pdo->close();
//        }





}

?>
