<?php 
class Userlowongan extends CI_Controller {

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
        $this->load->view('user/lowongan', $data);
        $this->load->view('templates/footer');
    }
}
?>