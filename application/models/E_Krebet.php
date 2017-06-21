<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_Krebet extends CI_Model {

	public function getFile()
	{
		$query = $this->db-> query("SELECT * FROM berkas_file WHERE id_unit = 1");
		return $query->result();	
	}

	public function getProduksi()
	{
		$query = $this->db-> query("SELECT * FROM krebet_produksi");
		return $query->result();	
	}

	public function editProduksi($id)
	{
		$tebu=$this->input->post('tebu');
		$luas_areal=$this->input->post('luas_areal');
		$gula=$this->input->post('gula');
		$kap_giling=$this->input->post('kap_giling');
		$data = array(
			'tebu' => $tebu,
			'luas_areal' => $luas_areal,
			'gula' => $gula,
			'kap_giling' => $kap_giling
			);
		$this->db->where('id_produksi', $id);
		$this->db->update('krebet_produksi', $data); 	
	}

	public function hapusProduksi($id){
		$this->db->where('id_produksi', $id);
 		$this->db->delete('krebet_produksi'); 	 
	}
}

/* End of file E_Login.php */
/* Location: ./application/models/E_Login.php */