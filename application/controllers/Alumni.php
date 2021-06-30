<?php 
class Alumni extends CI_Controller {
	
	
	public function __construct() {
		parent:: __construct();
		$this->load->model('Crud');
		$this->load->library('pagination');
	}
	
	public function index() {
		$config['base_url'] = site_url('alumni/index'); 
        $config['total_rows'] = $this->db->count_all('tbl_alumni'); 
        $config['per_page'] = 5;  
        $config["uri_segment"] = 3; 
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
		}else{
			$data['keyword'] = null;
		}

		$this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
		$data['title'] = 'Alumni';
		$data['alumni'] = $this->Crud->get_alumni_list($config["per_page"], $data['page'], $data['keyword'])->result();
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/alumni', $data);
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
		redirect('Alumni/index');
	}

	public function tambah() {
		$data['title'] = 'tambah data';
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambah', $data);
        $this->load->view('templates/footer');
	}
	
	public function hapus($idalumni) {
		$where = array('id_alumni' => $idalumni);
		$this->Crud->hapusData($where, 'tbl_alumni');
		redirect('Alumni/index');
	}

	function edit($id_alumni){
		$data['title'] = 'edit data';
		$where = array('id_alumni' => $id_alumni);
		$databos['alumni'] = $this->Crud->editData($where,'tbl_alumni')->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/edit', $databos);
        $this->load->view('templates/footer');
	}
	
    public function update()
	{
		$id_alumni = $this->input->post('id_alumni');
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

		$this->db->where('id_alumni', $id_alumni);
		$this->db->update('tbl_alumni', $data);
		redirect('Alumni/index');
	}

	public function detail($id_alumni) {
		$data['title'] = 'detail data';
		$where = array('id_alumni' => $id_alumni);
		$databos['alumni'] = $this->Crud->editData($where,'tbl_alumni')->result();
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/detail', $databos);
        $this->load->view('templates/footer');
	}
	
	public function cari()
	{
		$data['title'] = 'cari';
		// $dataa['cariberdasarkan'] = $this->input->post('cariberdasarkan');
		// $dataa['yangdicari'] = $this->input->post('yangdicari');
		// $dataa['alumni'] = $this->Crud->cari($dataa['cariberdasarkan'], $dataa['cariberdasarkan'])->result();
		// $dataa['jumlah'] = count($dataa['alumni']);
		$dataa['alumni'] = $this->Crud->cari("nama","tbl_alumni");
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/alumni', $dataa);
        $this->load->view('templates/footer');
	}
	
	
	

	
}
?>