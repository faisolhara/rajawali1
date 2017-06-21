<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E_Event extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	function getAll(){
		$query = $this->db->query("SELECT *,DATE_FORMAT(tanggalMulai, '%d') AS hari,DATE_FORMAT(tanggalMulai, '%b') AS bulan,DATE_FORMAT(tanggalMulai, '%d %b %Y') AS tanggal, DATE_FORMAT(tanggalMulai, '%d %b %y') AS 
      tanggalMulai, DATE_FORMAT(tanggalMulai, '%d') AS hariMulai ,DATE_FORMAT(tanggalMulai, '%b') AS bulanMulai,
      DATE_FORMAT(tanggalMulai, '%Y') AS tahunMulai,
      DATE_FORMAT(tanggalSelesai, '%d %b %y') AS tanggalSelesai, DATE_FORMAT(tanggalSelesai, '%d') AS hariSelesai,
      DATE_FORMAT(tanggalSelesai, '%b') AS bulanSelesai, DATE_FORMAT(tanggalSelesai, '%Y') AS tahunSelesai,
      TIME_FORMAT(jam, '%h') AS hours, TIME_FORMAT(jam, '%i') AS menit
      FROM kegiatan ORDER BY id desc");
    return $query->result();
  }

  function getKegiatan($id){
    $query = $this->db->query("SELECT * FROM kegiatan where id=$id");
    return $query->result();
  }

  function view($num, $offset)  {
  	/*variable num dan offset digunakan untuk mengatur jumlah
  	data yang akan dipaging, yang kita panggil di controller*/

  	$query = $this->db->query("SELECT *, DATE_FORMAT(tanggalMulai, '%d %b %y') AS 
  		tanggalMulai, DATE_FORMAT(tanggalMulai, '%d') AS hariMulai ,DATE_FORMAT(tanggalMulai, '%b') AS bulanMulai,
  		DATE_FORMAT(tanggalMulai, '%Y') AS tahunMulai,
  		DATE_FORMAT(tanggalSelesai, '%d %b %y') AS tanggalSelesai, DATE_FORMAT(tanggalSelesai, '%d') AS hariSelesai,
  		DATE_FORMAT(tanggalSelesai, '%b') AS bulanSelesai, DATE_FORMAT(tanggalSelesai, '%Y') AS tahunSelesai,
  		TIME_FORMAT(jam, '%h') AS hours, TIME_FORMAT(jam, '%m') AS menit
     FROM kegiatan ORDER BY id desc LIMIT $offset, $num ");
  	return $query->result();
  }

  function tambah(){
    $fileName = $_FILES['fotoKegiatan']['name'];
    $fileSize = $_FILES['fotoKegiatan']['size'];
    $fileError = $_FILES['fotoKegiatan']['error'];

    $info = pathinfo($fileName);
    print_r($info); // Menampilkan array dari hasil fungsi pathinfo.
    $type= $info['extension']; // Menampilan ekstensi file ke layar.
    $name= $info['filename'];
    $query=$this->db->query("SELECT MAX(id) as id from kegiatan");
     foreach ($query->result() as $row) {
       $id=($row->id)+1;
     }
     $fileName=$name."98376567162".$id.$type;
     echo $fileName;

    if ($fileSize > 0 || $fileError == 0 || $fileName == 0) {
      $move = move_uploaded_file($_FILES['fotoKegiatan']['tmp_name'], 'assets/img/kegiatan/'.$fileName);
      if ($move) {
        $data['msg'] = "File has been uploaded";
        $data['filename'] = $fileName;
        $foto=$this->input->post('fotoKegiatan');
        $event=$this->input->post('event');
        $deskripsi=$this->input->post('deskripsi');
        $tanggalMulai=$this->input->post('tanggalMulai');
        $tanggalSelesai=$this->input->post('tanggalSelesai');
        $jam=$this->input->post('jam');
        $base="img/kegiatan/";
        $data = array(
          'event' => $event ,
          'deskripsi' => $deskripsi ,
          'tanggalMulai' => $tanggalMulai ,
          'tanggalSelesai' => $tanggalSelesai ,
          'jam' => $jam ,
          'foto' =>$base.$fileName 
          );
        $this->db->insert('Kegiatan', $data); 
      } else {
        $data['msg'] = "Failed to upload";
        ?> <script language="JavaScript">alert('Maaf kegiatan gagal ditambahkan 1, silahkan coba lagi !');
        document.location='<?php echo base_url(); ?>C_Admin/tambahKegiatan'</script>
        <?php
      }
    } else {
      $data['msg'] = "Failed to upload: " . $fileError;
      ?> <script language="JavaScript">alert('Maaf kegiatan gagal ditambahkan, silahkan coba lagi !');
      document.location='<?php echo base_url(); ?>C_Admin/tambahKegiatan'</script>
      <?php
    } 
  }

  function edit($id){
    $event=$this->input->post('event');
    $deskripsi=$this->input->post('deskripsi');
    $tanggalMulai=$this->input->post('tanggalMulai');
    $tanggalSelesai=$this->input->post('tanggalSelesai');
    $jam=$this->input->post('jam');
    $tempat=$this->input->post('tempat');
    $data = array(
      'event' => $event,
      'deskripsi' => $deskripsi,
      'tanggalMulai' => $tanggalMulai,
      'tanggalSelesai' => $tanggalSelesai,
      'jam' => $jam,
      'tempat' => $tempat
      );
    $this->db->where('id', $id);
    $this->db->update('kegiatan', $data); 
  }

  function hapus($id){
    $this->db->where('id', $id);
    $this->db->delete('kegiatan');   
  }

  
}
