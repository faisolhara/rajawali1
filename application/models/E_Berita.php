<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E_Berita extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		
	}
	function getAll(){
		$query=$this->db->query("SELECT * , DATE_FORMAT(waktu, '%d %b %y') AS tanggal, DATE_FORMAT(waktu, '%d') AS hari ,DATE_FORMAT(waktu, '%b') AS bulan, DATE_FORMAT(waktu, '%Y') AS tahun FROM berita ORDER BY id desc");
		return $query->result();
	}

	function view($num, $offset)  {
  	/*variable num dan offset digunakan untuk mengatur jumlah
  	data yang akan dipaging, yang kita panggil di controller*/

  	$query = $this->db->query("SELECT *, DATE_FORMAT(waktu, '%d %b %y') AS tanggal, DATE_FORMAT(waktu, '%d') AS hari ,DATE_FORMAT(waktu, '%b') AS bulan, DATE_FORMAT(waktu, '%Y') AS tahun FROM berita ORDER BY id desc LIMIT $offset, $num ");
  	return $query->result();
  }
  function getSingle($id){
  	$query = $this->db->query("SELECT *, DATE_FORMAT(waktu, '%d %b %y') AS tanggal, DATE_FORMAT(waktu, '%d') AS hari ,DATE_FORMAT(waktu, '%b') AS bulan, DATE_FORMAT(waktu, '%Y') AS tahun, DATE_FORMAT(waktu, '%H') as jam, DATE_FORMAT(waktu, '%i') as menit FROM berita where id=$id");
  	return $query->result();
  }
  function getLastId(){
  	$query = $this->db->query("SELECT Max(id) as last from berita");
  	return $query->result();
  }

  function tambah(){
  	$fileName = $_FILES['fotoBerita']['name'];
  	$fileSize = $_FILES['fotoBerita']['size'];
  	$fileError = $_FILES['fotoBerita']['error'];

    $info = pathinfo($fileName);
    // print_r($info); // Menampilkan array dari hasil fungsi pathinfo.
    $type= $info['extension']; // Menampilan ekstensi file ke layar.
    $name= $info['filename'];
    $query=$this->db->query("SELECT MAX(id) as id from berita");
    foreach ($query->result() as $row) {
     $id=($row->id)+1;
   }
   $fileName=$name."98376567162".$id.$type;
   echo $fileName;

   if ($fileSize > 0 || $fileError == 0 || $fileName == 0) {
    $move = move_uploaded_file($_FILES['fotoBerita']['tmp_name'], 'assets/img/berita/'.$fileName);
    if ($move) {

     $data['msg'] = "File has been uploaded";
     $data['filename'] = $fileName;
     $foto=$this->input->post('fotoBerita');
     $judul=$this->input->post('judul');
     $isi=$this->input->post('isi');
     $sematkan=$this->input->post('sematkan');
     $base="img/berita/";
     if($sematkan=="ya"){
       $data = array(
        'sematkan' => "tidak"
        );
       $this->db->where('sematkan', "ya");
       $this->db->update('berita', $data); 
     }
     $data2 = array(
      'judul' => $judul ,
      'isi' => $isi,
      'sematkan' => $sematkan,
      'foto' =>$base.$fileName
      );
     $this->db->insert('berita', $data2);
     $gambar = base_url()."assets/img/berita/".$fileName;

// jalankan fungsi crop gambar

// lebar, tinggi, file yang di crop, format gambar, nama file setelah di crop

        // $this->cropImage(800, 450, "$gambar", "$gambar"); 
   } else {
     $data['msg'] = "Failed to upload";
     ?> <script language="JavaScript">alert('Maaf berita gagal ditambahkan, silahkan coba lagi !');
     document.location='<?php echo base_url(); ?>C_Admin/tambahBerita'</script>
     <?php
   }
 } else {
  $data['msg'] = "Failed to upload: " . $fileError;
  ?> <script language="JavaScript">alert('Maaf berita gagal ditambahkan, silahkan coba lagi !');
  document.location='<?php echo base_url(); ?>C_Admin/tambahBerita'</script>
  <?php
} 


}
function edit($id){
 $judul=$this->input->post('judul');
 $isi=$this->input->post('isi');
 $data = array(
  'judul' => $judul,
  'isi' => $isi
  );
 $this->db->where('id', $id);
 $this->db->update('berita', $data); 
}
function hapus($id){
 $this->db->where('id', $id);
 $this->db->delete('berita'); 	 
}
function cropImage($nw, $nh, $source, $dest) {

  $size = getimagesize($source); // ukuran gambar
  $filename = $source; // Nama atau path file yang ingin diketahui ekstensi filenya.
  $info = pathinfo($filename);
  // print_r($info); // Menampilkan array dari hasil fungsi pathinfo.
  $type= $info['extension']; // Menampilan ekstensi file ke layar.

  $w = $size[0];
  $h = $size[1];
  // echo $w."<br>";
  // echo $h;

 switch($type) { // format gambar

  case 'gif':

  $simg = imagecreatefromgif($source);

  break;

  case 'jpg':

  $simg = imagecreatefromjpeg($source);

  break;

  case 'png':

  $simg = imagecreatefrompng($source);

  break;

}

 $dimg = imagecreatetruecolor($nw, $nh); // menciptakan image baru

 $wm = $w/$nw;

 $hm = $h/$nh;

 $h_height = $nh/2;

 $w_height = $nw/2;

 if($w> $h) {

  $adjusted_width = $w / $hm;

  $half_width = $adjusted_width / 2;

  $int_width = $half_width-$w_height;

  imagecopyresampled($dimg,$simg,-$int_width,0,0,0,$adjusted_width,$nh,$w,$h);

} elseif(($w <$h) || ($w == $h)) {

  $adjusted_height = $h / $wm;

  $half_height = $adjusted_height / 2;

  $int_height = $half_height - $h_height;

  imagecopyresampled($dimg,$simg,0,-$int_height,0,0,$nw,$adjusted_height,$w,$h);

} else {

  imagecopyresampled($dimg,$simg,0,0,0,0,$nw,$nh,$w,$h);

}

imagejpeg($dimg,$dest,100);
  // $uploadfile = $_SERVER['DOCUMENT_ROOT'].'/sites/bestinfo/images/news/CodeCogsEqn.gif';

}
}
