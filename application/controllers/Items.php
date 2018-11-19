<?php 


class Items extends CI_Controller{

	public function __construct(){

		parent ::__construct();

        //load model
		$this->load->model('model_items'); 

	}

	function index(){
		$data = array(
			'title'     => 'Data Item',
			'data_items' => $this->model_items->get_all()

		);

		$this->load->view("lihatitems",$data);
	}

	function tambah(){
		$this->load->view('tambahitem');
	}

	function tambahaksi(){
		$title = $this->input->post('title');
		$description = $this->input->post('description');

		$data = array(
			'title' => $title,
			'description' => $description
		);
		$this->model_items->tambah_data($data,'items');

		redirect('items');

	}

	function edit($id){
		$where = array('id' => $id);
		$data['items'] = $this->model_items->edit_data($where,'items')->result();
		$this->load->view('edititem',$data);
	}

	function editaksi(){
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$id = $this->input->post('id');

		$data = array(
			'title' => $title,
			'description' => $description
		);

		$this->model_items->update_data($id,$data);
		redirect('items');

	}

	function hapus($id){
		$where = array('id' => $id);
		$this->model_items->hapus_data($where,'items');
		redirect('items');
	}

	public function printPDF()
	{
		$object = array(
			'title'     => 'Data Item',
			'data_items' => $this->model_items->get_all()

		);


		$mpdf = new \Mpdf\Mpdf();
		$data = $this->load->view('printItems', $object, TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output();
	}

	public function printsurat()
	{
		$object = array(
			'title'     => 'Data Item',
			'data_items' => $this->model_items->get_all()

		);


		$mpdf = new \Mpdf\Mpdf();
		$data = $this->load->view('printSurat', $object, TRUE);
		$mpdf->WriteHTML($data);
		$mpdf->Output();
	}



}