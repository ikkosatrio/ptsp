<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_penilaianptsp extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function tampil_data($table){
		$this->db->from($table);
        $this->db->join('datapegawai','datapegawai.id_pegawai=penilaianptsp.id_pegawai');
		return $query = $this->db->get();
		// return $this->db->get($table);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
        return $this->db->insert_id();
	}
	
	function detail($where,$table){	
		return $this->db->get_where($table,$where);
	}

    function perolehan($where,$table){
        $this->db->select_sum('nilai');
        $this->db->where($where);
        $this->db->from($table);
        $this->db->join('detailpenilaian','penilaianptsp.id_penilaian=detailpenilaian.id_penilaian');
        $this->db->join('subkatpenilaian','subkatpenilaian.id_subkat=detailpenilaian.id_subkat');
        $this->db->join('kategoripenilaian','kategoripenilaian.id_kategori=subkatpenilaian.id_kategori');
        return $this->db->get();
    }

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}

/* End of file M_kategori.php */
/* Location: ./application/models/M_kategori.php */