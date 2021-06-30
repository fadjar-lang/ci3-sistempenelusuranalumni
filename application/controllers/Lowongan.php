<?php 
class Lowongan extends CI_Controller {

    public function __construct() {
		parent:: __construct();
		$this->load->model('Crud');
	}

    public function index() {
        $data['title'] = 'Lowongan kerja';
		$data['lowongan'] = $this->Crud->tampilData('tbl_lowongan')->result();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/lowongan', $data);
        $this->load->view('templates/footer');
    }

    public function tambahAksi () {
		$pabrik = $this->input->post('pabrik');
		$kriteria = $this->input->post('kriteria');
		
		$data = array(
			'pabrik' => $pabrik,
			'kriteria' => $kriteria,
		);
		
		$this->Crud->inputData($data, 'tbl_lowongan');
		redirect('lowongan');
	}

	public function tambah() {
		$data['title'] = 'tambah data';
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambal', $data);
        $this->load->view('templates/footer');
	}
	
    public function hapus($id) {
		$where = array('id' => $id);
		$this->Crud->hapusData($where, 'tbl_lowongan');
		redirect('lowongan');
	}


}
?>