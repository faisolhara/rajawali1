<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_Admin extends CI_Controller
{
    public function __construct(){
          parent::__construct();
          if (($this->session->userdata('sudahlogin') == FALSE)||($this->session->userdata('unit') != 
            "admin")){
            redirect ('C_Login');
            }
      $this->load->model('E_Rejoagung');
          $this->load->model('E_Berita');
          $this->load->model('E_Event');
          $this->load->model('E_Galeri');
          $this->load->model('E_Krebet');
          $this->load->model('E_Rejoagung');

      }

      public function index(){
        $this->load->view('admin/dashboard');
    }

    public function dashboard(){
        $this->load->view('admin/dashboard');
    }

    public function lihatBerita(){
        $data['data'] = $this->E_Berita->getAll();    
        $this->load->view('admin/listBerita',$data);
    }

    public function tambahBerita(){   
        $this->load->view('admin/tambahBerita');
    }

    public function addBerita(){
        $this->E_Berita->tambah();       
        // redirect('C_Admin/lihatBerita','refresh');
    }

    public function editBerita($id){
        $this->E_Berita->edit($id);    
        redirect('C_Admin/lihatBerita','refresh');
    }

    public function hapusBerita($id){
        $this->E_Berita->hapus($id);    
        redirect('C_Admin/lihatBerita','refresh');
    }
    public function lihatKegiatan(){
        $data['data'] = $this->E_Event->getAll();    
        $this->load->view('admin/listKegiatan',$data);
    }

    public function tambahKegiatan(){
        $data['data'] = $this->E_Event->getAll();    
        $this->load->view('admin/tambahKegiatan',$data);
    }

    public function addKegiatan(){
        $this->E_Event->tambah();       
        redirect('C_Admin/lihatKegiatan','refresh');
    }

    public function viewEditKegiatan($id){
        $data['data'] = $this->E_Event->getKegiatan($id);   
        $this->load->view('admin/editKegiatan',$data);
            // $this->E_Event->edit($id);   
            // redirect('C_Admin/lihatKegiatan','refresh');
    }

    public function editKegiatan($id){
        $this->E_Event->edit($id);    
        redirect('C_Admin/lihatKegiatan','refresh');
    }

    public function hapusKegiatan($id){
        $this->E_Event->hapus($id);    
        redirect('C_Admin/lihatKegiatan','refresh');
    }

    public function tambahGaleri(){
        $this->load->view('admin/tambahGaleri');
    }

    public function lihatGaleri(){
        $data['data']=$this->E_Galeri->getAll();
        $this->load->view('admin/lihatGaleri',$data);
    }

    public function editGaleri($id){
        $this->E_Galeri->edit($id);
        redirect('C_Admin/lihatGaleri','refresh');
    }

    public function hapusGaleri($id){
        $this->E_Galeri->hapus($id);
        redirect('C_Admin/lihatGaleri','refresh');
    }

    function uploadGaleri()
    {   
        $fileName = $_FILES['fotoGaleri']['name'];
        $this->load->library('image_lib');
        $url = './assets/img/galeri/';    //path image 
        if($_FILES['fotoGaleri']['error']==4)  //if No file was uploaded. 
        return false;        
        $config['upload_path'] = $url."original/";        
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']        = 0;        
        $config['max_width']      = 0;
        $config['max_height']     = 0;

        $namaBaru=uniqid(rand());
        $config['file_name']     = $namaBaru;
        $info = pathinfo($fileName);
        $type= $info['extension']; // Menampilan ekstensi file ke layar.
        $namaDB="img/galeri/large/".$namaBaru.".".$type;
        echo $namaDB."<br>";
        $this->load->library('upload');
        $this->upload->initialize($config);

        
        if( $this->upload->do_upload('fotoGaleri') )
        {    
            $files = $this->upload->data();
            $fileNameResize = $config['upload_path'].$files['file_name'];
            $size =  array(                
                array('name'    => 'large','width'    => 640, 'height'    => 360, 'quality'    => '100%')
                );
            $resize = array();
            foreach($size as $r){                
                $resize = array(
                    "width"            => $r['width'],
                    "height"        => $r['height'],
                    "quality"        => $r['quality'],
                    "source_image"    => $fileNameResize,
                    "new_image"        => $url.$r['name'].'/'.$files['file_name']
                    );
                $this->image_lib->initialize($resize); 
                if(!$this->image_lib->resize())                    
                    die($this->image_lib->display_errors());
                else
                    $this->E_Galeri->tambah($namaDB);
            }            
            echo "resize oke";
        } 
        else 
            echo $this->upload->display_errors();
        echo "sadasd";
    }

    public function lihatProduksiKrebet(){
        $data['data'] = $this->E_Krebet->getProduksi();    
        $this->load->view('admin/listProduksi_krebet',$data);
    }

    public function editProduksiKrebet($id){
        $this->E_Krebet->editProduksi($id);    
        redirect('C_Admin/lihatProduksiKrebet','refresh');
    }

    public function hapusProduksiKrebet($id){
        $this->E_Krebet->hapusProduksi($id);    
        redirect('C_Admin/lihatProduksiKrebet','refresh');
    }

    public function lihatProduksiRejoagung(){
        $data['data'] = $this->E_Rejoagung->getProduksi();    
        $this->load->view('admin/listProduksi_rejoagung',$data);
    }

    public function editProduksiRejoagung($id){
        $this->E_Rejoagung->editProduksi($id);    
        redirect('C_Admin/lihatProduksiRejoagung','refresh');
    }

    public function hapusProduksiRejoagung($id){
        $this->E_Rejoagung->hapusProduksi($id);    
        redirect('C_Admin/lihatProduksiRejoagung','refresh');
    }
  
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */