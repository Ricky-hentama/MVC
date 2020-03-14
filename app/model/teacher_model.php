<?php

class teacher_model
{
    private $table = ' guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllguru()
    {
        $this->db->query('SELECT * FROM' . $this->table);
        return $this->db->resultSet();
    }
    public function getGuruById($id)
    {
        $this->db->query("SELECT * FROM guru WHERE id= $id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }
}
