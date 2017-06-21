<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E_Pesan extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		
	}
	
  function getPesan(){
		$query=$this->db->query("SELECT * FROM pesan ORDER BY id desc");
		return $query->result();
	}

	function tambahPesan(){
  	$nama = $this->input->post('nama');
  	$email = $this->input->post('email');
  	$kota = $this->input->post('kota');
    $pesan = $this->input->post('pesan');
    $data = array(
  		'nama' => $nama ,
  		'email' => $email,
  		'kota' => $kota,
      'pesan' => $pesan
      );
  	$this->db->insert('pesan', $data); 
  }

  function hapusPesan($id){
  	$this->db->where('id', $id);
  	$this->db->delete('pesan'); 	 
  }
}
