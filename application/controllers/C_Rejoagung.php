<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_Rejoagung extends CI_Controller
{
    public function __construct(){
      parent::__construct();
      if (($this->session->userdata('sudahlogin') == FALSE) || ($this->session->userdata('unit') != "rejoagung")){
            redirect ('C_Login');
      }
      $this->load->model('E_Rejoagung');
  }

    public function index(){
        $data['file']=$this->E_Rejoagung->getFile();
        $this->load->view('rejoagung/rejoagung_cetakNota', $data);        
    }

    public function cetakNota(){
        $data['file']=$this->E_Rejoagung->getFile();
        $this->load->view('rejoagung/rejoagung_cetakNota', $data);        
    }

    public function produksi(){
        $data['produksi']=$this->E_Rejoagung->getProduksi();
        $this->load->view('rejoagung/rejoagung_produksi', $data);        
    }

}
/* End of file login.php */
/* Location: ./application/controllers/login.php */