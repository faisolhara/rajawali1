<?php
$ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
$tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
$waktu   = time(); //

// Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
$s = mysql_query("SELECT * FROM statistika WHERE ip='$ip' AND tanggal='$tanggal'");

// Kalau belum ada, simpan data user tersebut ke database
if(mysql_num_rows($s) == 0){
	mysql_query("INSERT INTO statistika(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
}
// Jika sudah ada, update
else{
	mysql_query("UPDATE statistika SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
}

$pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM statistika WHERE tanggal='$tanggal' GROUP BY ip")); // Hitung jumlah pengunjung
$totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM statistika"), 0); // hitung total pengunjung
$bataswaktu       = time() - 300;
$pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM statistika WHERE online > '$bataswaktu'")); // hitung pengunjung online

$totalBerita       = mysql_num_rows(mysql_query("SELECT * FROM berita")); // Hitung berita
$totalKegiatan       = mysql_num_rows(mysql_query("SELECT * FROM kegiatan")); // Hitung berita
$totalfoto       = mysql_num_rows(mysql_query("SELECT * FROM galeri")); // Hitung berita
?>

<!-- &nbsp;&nbsp;
&bull;
Hari ini : <?php// echo $pengunjung; ?> <br>&nbsp;&nbsp;
&bull;
Total : <?php // echo $totalpengunjung; ?><br>&nbsp;&nbsp;
&bull;
Pengunjung Online : <?php // echo $pengunjungonline; ?>  -->

