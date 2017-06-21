<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E_Galeri extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	function galeri($num, $offset)  {
  	/*variable num dan offset digunakan untuk mengatur jumlah
  	data yang akan dipaging, yang kita panggil di controller*/

  	$query = $this->db->query("SELECT * FROM galeri ORDER BY id desc LIMIT $offset, $num ");
  	return $query->result();
  }

  function getAll(){
    $query= $this->db->get("galeri");
    return $query->result();
  }

  function tambah($link){
  	$quote=$this->input->post('quote');
  	$data = array(
          'quote' => $quote ,
          'link' => $link 
          );
        $this->db->insert('galeri', $data); 

  }

  public function edit($id)
  {
    $quote=$this->input->post('quote');
    $data = array(
      'quote' => $quote
      );
    $this->db->where('id', $id);
    $this->db->update('galeri', $data);  
  }

  public function hapus($id){
    $this->db->where('id', $id);
    $this->db->delete('galeri');    
  }
  
}
