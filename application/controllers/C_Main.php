<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_Main extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model('E_Berita');
    $this->load->model('E_Pesan');
    $this->load->model('E_Captcha');
    $this->load->model('E_Event');
    $this->load->model('E_Galeri');
  }

  public function index(){
    exit();
    $data['event'] = $this->E_Event->getAll();
    $data['berita'] = $this->E_Berita->getAll();
    $this->load->view('umum/home', $data);
  }

  public function kontak(){
    $data['event'] = $this->E_Event->getAll();
    $data['berita'] = $this->E_Berita->getAll();
    $data['cap_img'] = $this->E_Captcha->make_captcha();
    $this->load->view('umum/kontak', $data);
  }

  public function profil(){
    $data['berita'] = $this->E_Berita->getAll();
    $data['event'] = $this->E_Event->getAll();
    $this->load->view('umum/profil', $data);
  }

  public function manajemen(){
    $this->load->view('umum/manajemen');
  }

  public function produksi(){
    $this->load->view('umum/produksi');
  }

  public function unitKrebet(){
    $data['event'] = $this->E_Event->getAll();
    $data['berita'] = $this->E_Berita->getAll();
    $this->load->view('umum/unitKrebet',$data);
  }

  public function unitRejo(){
    $data['event'] = $this->E_Event->getAll();
    $data['berita'] = $this->E_Berita->getAll();
    $this->load->view('umum/unitREjo', $data);
  }

  public function kirimPesan(){
    $this->form_validation->set_rules('nama', 'nama', 'required');
    $this->form_validation->set_rules('kota', 'kota', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('pesan', 'pesan', 'required');

    if ($this->form_validation->run() == TRUE){   
      if ($this->E_Captcha->check_captcha()==true) {
        $this->E_Pesan->tambahPesan();       
        ?><script language="JavaScript">alert('Pesan berhasil dikirim, dan terima kasih atas kepedulian anda terhadap kami!');
        document.location='<?php echo base_url();?>C_Main'</script><?php
      }else {
        ?><script language="JavaScript">alert('Maaf, CAPTCHA salah, silahkan ulangi lagi!');
        document.location='<?php echo base_url();?>C_Main/kontak'</script><?php
      }
    }else{
      ?><script language="JavaScript">alert('Maaf, semua form harus disi!');
      document.location='<?php echo base_url();?>C_Main/kontak'</script><?php
    }
  }

  public function galeri($offset=0){
    $jml = $this->db->get('galeri');

    $config['base_url'] = base_url().'C_Main/galeri';
    $config['total_rows'] = $jml->num_rows();
    $config['per_page'] = 9; /*Jumlah data yang dipanggil perhalaman*/
    $config['uri_segment'] = 3; /*data selanjutnya di parse diurisegmen 3*/



    /*Class bootstrap pagination yang digunakan*/
    $config['full_tag_open'] = "<ul class='pagination pagination-sm' style='position:relative; top:-25px;'>";
    $config['full_tag_close'] ="</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tagl_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";

    $config['first_tagl_close'] = "</li>";

    $config['last_tag_open'] = "<li>";

    $config['last_tagl_close'] = "</li>";



    $this->pagination->initialize($config);
    $data['halaman'] = $this->pagination->create_links();

    /*membuat variable halaman untuk dipanggil di view nantinya*/
    $data['offset'] = $offset;
    $data['data'] = $this->E_Galeri->galeri($config['per_page'], $offset);
          // $data['data'] = $this->E_Berita->waktu();
    $this->load->view('umum/galeri',$data);
  }

  public function beritaSingle($id){
    $data['event'] = $this->E_Event->getAll();
    $data['page']= array("nomor"=>$id);
    $data['data'] = $this->E_Berita->getSingle($id);
    $data['last'] = $this->E_Berita->getLastId($id);
    $data['berita'] = $this->E_Berita->getAll();
    $this->load->view('umum/beritaSingle',$data);
  }

  public function beritaMore($offset=0){

    $jml = $this->db->get('berita');

    $config['base_url'] = base_url().'C_Main/beritaMore';
    $config['total_rows'] = $jml->num_rows();
    $config['per_page'] = 10; /*Jumlah data yang dipanggil perhalaman*/
    $config['uri_segment'] = 3; /*data selanjutnya di parse diurisegmen 3*/



    /*Class bootstrap pagination yang digunakan*/
    $config['full_tag_open'] = "<ul class='pagination pagination-sm' style='position:relative; top:-25px;'>";
    $config['full_tag_close'] ="</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tagl_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";

    $config['first_tagl_close'] = "</li>";

    $config['last_tag_open'] = "<li>";

    $config['last_tagl_close'] = "</li>";



    $this->pagination->initialize($config);
    $data['halaman'] = $this->pagination->create_links();

    /*membuat variable halaman untuk dipanggil di view nantinya*/
    $data['offset'] = $offset;
    $data['data'] = $this->E_Berita->view($config['per_page'], $offset);
    $data['event'] = $this->E_Event->getAll();
    $data['berita'] = $this->E_Berita->getAll();
    $this->load->view('umum/beritaMore',$data);

    /*memanggil view pagination*/
  }
  public function beritaBeranda(){


   $data['data'] = $this->E_Berita->getAll();
   $data['event'] = $this->E_Event->getAll();
   $data['berita'] = $this->E_Berita->getAll();
   $this->load->view('umum/beritaBeranda',$data);

   /*memanggil view pagination*/
 }

 public function kegiatan($offset=0){

  $jml = $this->db->get('kegiatan');

  $config['base_url'] = base_url().'C_Main/kegiatan';
  $config['total_rows'] = $jml->num_rows();
  $config['per_page'] = 4;/*Jumlah data yang dipanggil perhalaman*/
  $config['uri_segment'] = 3; /*data selanjutnya di parse diurisegmen 3*/



  /*Class bootstrap pagination yang digunakan*/
  $config['full_tag_open'] = "<ul class='pagination pagination-sm' style='position:relative; top:-25px;'>";
  $config['full_tag_close'] ="</ul>";
  $config['num_tag_open'] = '<li>';
  $config['num_tag_close'] = '</li>';
  $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
  $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
  $config['next_tag_open'] = "<li>";
  $config['next_tagl_close'] = "</li>";
  $config['prev_tag_open'] = "<li>";
  $config['prev_tagl_close'] = "</li>";
  $config['first_tag_open'] = "<li>";

  $config['first_tagl_close'] = "</li>";

  $config['last_tag_open'] = "<li>";

  $config['last_tagl_close'] = "</li>";



  $this->pagination->initialize($config);
  $data['halaman'] = $this->pagination->create_links();

  /*membuat variable halaman untuk dipanggil di view nantinya*/
  $data['offset'] = $offset;
  $data['event'] = $this->E_Event->getAll();
  $data['berita'] = $this->E_Berita->getAll();
  $data['data'] = $this->E_Event->view($config['per_page'], $offset);
  $this->load->view('umum/kegiatan',$data);

  /*memanggil view pagination*/
}

}
/* End of file login.php */
/* Location: ./application/controllers/login.php */