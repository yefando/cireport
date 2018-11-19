<?php
class Mahasiswa extends CI_Controller {
 
    public $model = NULL;
 
    public function __construct() {
        parent::__construct();
        // memuat model
        $this->load->model('Mahasiswa_model');
        $this->model = $this->Mahasiswa_model;
 
        $this->load->database();
        // memuat helper url
        $this->load->helper('url'); // sebagai redirect
    }
 
    public function index() {
        $this->read();
    }
 
    public function create() {
        if(isset($_POST['btnSubmit'])) {
            $this->model->nim = $_POST['nim'];
            $this->model->nama = $_POST['nama'];
            $this->model->alamat = $_POST['alamat'];
            $this->model->insert();
            redirect('mahasiswa');
        }else{
            $this->load->view('crud_create_mahasiswa', ['model'=>$this->model]);
        }
    }
 
    public function read() {
        $rows = $this->model->read();
        //$query = $this->db->query("SELECT * FROM mahasiswa ORDER BY nim");
        $this->load->view('crud_read_mahasiswa', ['rows'=>$rows]);
    }
 
    public function update($id) {
        if(isset($_POST['btnSubmit'])) {
            $this->model->nim = $_POST['nim'];
            $this->model->nama = $_POST['nama'];
            $this->model->alamat = $_POST['alamat'];
            $this->model->update();
            redirect('mahasiswa');
        }else{
            $query = $this->db->query("SELECT * FROM mahasiswa WHERE nim='$id'");
            $row = $query->row();
            $this->model->nim = $row->nim;
            $this->model->nama = $row->nama;
            $this->model->alamat = $row->alamat;
            $this->load->view('crud_update_mahasiswa', ['model'=>$this->model]);
        }
    }
 
    public function delete($id) {
        $this->model->nim = $id;
 
        $this->model->delete();
        redirect('mahasiswa');
    }
}