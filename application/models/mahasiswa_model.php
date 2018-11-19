<?php
class Mahasiswa_model extends CI_Model {
    public $nim;
    public $nama;
    public $alamat;
 
    public $labels = [];
 
    public function __construct() {
        parent::__construct();
 
        $this->labels = $this->_attributeLabels();
        $this->load->database();
    }
 
    public function insert() {
        $sql = sprintf("INSERT INTO mahasiswa VALUES ('%d','%s','%s')",
                        $this->nim,
                        $this->nama,
                        $this->alamat);
        $this->db->query($sql);
    }
 
    public function update() {
        $sql = sprintf("UPDATE mahasiswa SET nama='%s', alamat='%s' WHERE nim = '%d'",
                        $this->nama,
                        $this->alamat,
                        $this->nim
                        );
        $this->db->query($sql);   
    }
 
    public function delete() {
        $sql = sprintf("DELETE FROM mahasiswa WHERE nim='%d'",
                        $this->nim);
        $this->db->query($sql);
    }
 
    public function read() {
        // $sql = "SELECT * FROM mahasiswa ORDER BY nim";
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
 
    private function _attributeLabels() {
        return [
            'nim'=>'Nim: ',
            'nama'=>'Nama: ',
            'alamat'=>'Alamat: '
        ];
    }
 
}