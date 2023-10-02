<?php
 
class Test2_model {

    private $table = 'test2';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTest2()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getTest2ById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table .' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataTest2($data)
    {
        
        $query = "INSERT INTO test2
                    VALUES
                (null, :namanovel, :penulis, :warna)";

        $this->db->query($query);
        $this->db->bind('namanovel', $data['namanovel']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('warna', $data['warna']);

        $result = $this->db->execute();

        return $this->db->rowCount();

    }

    public function hapusDataTest2($id)
    {
        
        $query = "DELETE FROM test2 WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataTest2($data)
    {
        
        $query = "UPDATE test2 SET
                    namanovel = :namanovel,
                    penulis = :penulis,
                    warna = :warna
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('namanovel', $data['namanovel']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('warna', $data['warna']);
        $this->db->bind('id', $data['id']);

        $result = $this->db->execute();

        return $this->db->rowCount();

    }

    
}