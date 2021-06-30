<?php 
class Identitas extends CI_Controller {

    public function __construct() {
		parent:: __construct();
		$this->load->model('Crud');
	}

    public function index() {
        $data['title'] = 'Identitas Diri';
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/identitas', $data);
        $this->load->view('templates/footer');
    }

    public function tambahAksi () {
		$nama = $this->input->post('nama');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
		$nisn = $this->input->post('nisn');
		$no_telp = $this->input->post('no_telp');
		$jk = $this->input->post('jk');
		$jurusan = $this->input->post('jurusan');
		$no_ijazah = $this->input->post('no_ijazah');
		$tahun_masuk = $this->input->post('tahun_masuk');
		$tahun_lulus = $this->input->post('tahun_lulus');
		
		$data = array(
			'nama' => $nama,
			'tgl_lahir' => $tgl_lahir,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan,
			'nisn' => $nisn,
			'no_telp' => $no_telp,
			'jk' => $jk,
			'jurusan' => $jurusan,
			'no_ijazah' => $no_ijazah,
			'tahun_masuk' => $tahun_masuk,
			'tahun_lulus' => $tahun_lulus,
		);
		
		$this->Crud->inputData($data, 'tbl_alumni');
		redirect('identitas');
	}
	


}
?>