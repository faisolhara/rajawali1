<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_Krebet extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        if (($this->session->userdata('sudahlogin') == FALSE) || ($this->session->userdata('unit') != 
            "krebet")){
            redirect ('C_Login');
        }
        $this->load->model('E_Krebet');
    }

    public function index(){
        $data['file']=$this->E_Krebet->getFile();
        $this->load->view('krebet/krebet_cetakNota', $data);        
    }

    public function cetakNota(){
        $data['file']=$this->E_Krebet->getFile();
        $this->load->view('krebet/krebet_cetakNota', $data);        
    }

    public function produksi(){
        $data['produksi']=$this->E_Krebet->getProduksi();
        $this->load->view('krebet/krebet_produksi', $data);        
    }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */