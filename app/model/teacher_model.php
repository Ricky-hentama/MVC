<?php

class teacher_model
{
    private $dbh;
    private $statment;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpdasar';
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllguru()
    {
        $this->statment = $this->dbh->prepare('SELECT * FROM guru');
        $this->statment->execute();
        return $this->statment->fetchAll(PDO::FETCH_ASSOC);
    }
}
