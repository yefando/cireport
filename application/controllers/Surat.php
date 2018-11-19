<?php 


class Surat extends CI_Controller{

	function index(){
		$this->load->view('lihatsurat');
	}

	function tambah(){
		$this->load->view('tambahsurat');
	}

	function tambahaksi(){
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$keterangan = $this->input->post('keterangan');
		$tandatangan = $this->input->post('tandatangan');
		var_dump($tanggal_lahir);

			}


}
