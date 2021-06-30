<?php 
class Crud extends CI_Model {


	public function __construct() {
		parent:: __construct();
		$this->load->database();
	}
	
	public function get_by_id($id, $kolom, $tabel) {
		$this->db->form($tabel);
		$this->db->where($kolom, $id);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function tampilData($tabel) {
		return $this->db->get($tabel);
	}

	function get_alumni_list($limit, $start, $keyword = null){
		if ($keyword) {
			$this->db->like('nama', $keyword);
			$this->db->or_like('pekerjaan', $keyword);
		}
        $query = $this->db->get('tbl_alumni', $limit, $start);
        return $query;
    }
	
	public function inputData($data, $tabel) {
		$this->db->insert($tabel, $data);
		$this->db->insert_id();
	}
	
	public function hapusData($where, $tabel) {
		$this->db->where($where);
		$this->db->delete($tabel);
	}

	public function editData($where, $tabel) {
		return $this->db->get_where($tabel, $where);
	}
	
	public function updateData($where, $data, $tabel) {
		$this->db->where($where);
		$this->db->update($tabel, $data);
		//return $this->db->affected_rows();
	}
	
    public function cari($kolom, $tabel){
		$cari =$this->input->GET('cari',TRUE);

        $this->db->from($tabel);
        $this->db->like($kolom,$cari,'both');
        $query =$this->db->get();

        return $query->result();

		// $this->db->from('tbl_alumni');
		// $this->db->like($berdasarkan, $yangdicari);
        // return $this->db->get();
    }
	
}

?>