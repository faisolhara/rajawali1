<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_Login extends CI_Controller
{
    public function __construct(){
      parent::__construct();
      $this->load->model('E_Login');
    }

    public function index(){
        if ($this->session->userdata('sudahlogin')) {
            redirect ('C_Login/choseUnit');
        }
        else{
            $this->load->view('umum/login');
        }
    }    

    function login(){
        if ($this->session->userdata('sudahlogin')) {
            redirect ('C_Login/choseUnit');
        }
        else{
            $this->load->view('umum/login');
        }
    }

    public function prosesLogin(){          
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        if ($this->E_Login->validasi($username, $password)) {
            redirect ('C_Login/choseUnit');
        } else {
            ?><script language="JavaScript">alert('Username atau Password yang anda masukkan salah, silahkan ulangi lagi!');
            document.location='<?php echo base_url('C_Login');?>'</script><?php
        }    
    }

    public function choseUnit(){
        if ($this->session->userdata('unit') == "krebet") {
            redirect ('C_Krebet');
        }else if($this->session->userdata('unit') == "rejoagung"){
            redirect ('C_Rejoagung');
        }else if($this->session->userdata('unit') == "admin"){
            redirect ('C_Admin');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('C_Main');
    }
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */