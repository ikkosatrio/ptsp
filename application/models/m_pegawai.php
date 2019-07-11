<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function tampil_data($table){
		$this->db->from($table);
		 $this->db->join('jabatan','datapegawai.id_jbt=jabatan.id_jbt');
		return $query = $this->db->get();
		// return $this->db->get($table);
	}


    function getketuamajelispa(){
        $this->db->from("datapegawai");
        $this->db->where(
            array('datapegawai.id_jbt' => 1)
        );
        $this->db->join('jabatan','datapegawai.id_jbt=jabatan.id_jbt');
        return $query = $this->db->get();
        // return $this->db->get($table);
    }

    function gethakim(){
        $this->db->from("datapegawai");
        $this->db->where(
            array('datapegawai.id_jbt' => 3)
        );
        $this->db->join('jabatan','datapegawai.id_jbt=jabatan.id_jbt');
        return $query = $this->db->get();
        // return $this->db->get($table);
    }

    function getpanitera(){
        $this->db->from("datapegawai");
        $this->db->where(
            array('datapegawai.id_jbt' => 8)
        );
        $this->db->join('jabatan','datapegawai.id_jbt=jabatan.id_jbt');
        return $query = $this->db->get();
        // return $this->db->get($table);
    }

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function detail($where,$table){	
		return $this->db->get_where($table,$where);
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