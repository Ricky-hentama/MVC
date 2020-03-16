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
    public function tambahData($data)
    {
        // $nama = htmlspecialchars($data['nama']);
        // $mapel = htmlspecialchars($data['mapel']);
        // $umur = htmlspecialchars($data['umur']);
        // $status = htmlspecialchars($data['status']);

        $query = "INSERT INTO guru 
                    VALUES 
                    (NULL,:nama, :mapel, :umur, :status)";


        $this->db->query($query);

        $this->db->bind('nama', $data["nama"]);
        $this->db->bind('mapel', $data["mapel"]);
        $this->db->bind('umur', $data["umur"]);
        $this->db->bind('status', $data["status"]);

        $this->db->execute();

        return $this->db->count();
    }
}
