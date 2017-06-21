-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Sep 2015 pada 02.46
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rni1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(90) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `foto` varchar(200) NOT NULL,
  `sematkan` varchar(5) NOT NULL DEFAULT 'tidak',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `waktu`, `foto`, `sematkan`) VALUES
(1, 'Curhat Bos RNI Soal Gula Lokal Lebih Mahal dari Impor', '<p>Liputan6.com, Jakarta - Saat ini, produksi gula lokal yang bersumber dari petani tebu dinilai sudah kalah saing dengan gula rafinasi yang mayoritas berasal dari impor.</p>\r\n\r\n<p>Kalah saing tersebut lebih diwujudkan dengan lebih mahalnya produksi gula lokal yang saat ini berkisar di harga Rp 8.500 per kilogram, jika dibandingkan dengan gula-gula rafinasi yang rata-rata Rp 8.000 per kilogram.</p>\r\n\r\n<p>Sejatinya, gula rafinasi diperuntukkan bagi industri sementara gula putih lokal untuk konsumsi masyarakat.</p>\r\n\r\n<p>Direktur Utama PT Rajawali Nusantara Indonesia (RNI) Ismed Hasan Putro mengatakan ada bebera faktor yang menyebabkan harga gula lokal justru lebih mahal dibandingkan gula impor.</p>\r\n\r\n<p>"Pertama ini gula kita berbasiskan perkebunan, kedua tentu over head cost tinggi, ketiga pabrik gula kita ini mayoritas sudah usia uzur kurang produktif," jelas Ismed saat ditemui di kantornya, Kamis (26/6/2014).</p>\r\n\r\n<p>Ismed mencontohkan dengan penetapan harga jual gula oleh Kementerian Perdagangan sebesar Rp 8.500 per kilogram hal itu menjadikan dua pabrik gula milik BUMN yaitu milik RNI dan PTPBN tidak dapat berkeMbang.</p>\r\n\r\n<p>"Sementara pabrik gula PTPN dan RNI tidak bisa investasi karena harga gula tidak menguntungkan, sekarang 8% pertumbuhan cost itu karena UMR dan kenaikan investasi, sementara harga gula naik hanya 1%, jadi tidak masuk," jelasnya.</p>\r\n\r\n<p>Untuk itu Ismed meminta kepada pemerintah dalam hal ini kepada Kementerian Perdagangan dan Kementerian Koordinator Bidang Perekonomian untuk membuat kebijakan yang lebih pro dengan petani lokal.</p>\r\n\r\n<p>Jika tidak, Imed khawatir ke depan akan terjadi kelangkaan petani tebu mengingat sudah tidak menguntungkannya menanam tebu yang mana sebagai bahan baku pembuatan gula.</p>\r\n\r\n<p>"Dulu 2008 Pak JK membuat kebijakan melarang gula impor, dan dangan begitu nyatanya menguntungkan untuk petani tebu dan industri gula nasional. Sekarang itu Kementerian Perdagangan dan Men Equin diharapkan mengikuti kembali hal itu," pungkas Ismed. (Yas/Nrm)</p>', '2014-06-26 13:12:00', 'img/berita/berita1.jpg', 'tidak'),
(2, 'RNI Minta Restu Menperin buat Bangun Pabrik Gula Rafinasi', '<p>Liputan6.com, Jakarta - PT Rajawali Nusantara Indonesia (RNI) berencana membangun pabrik gula rafinasi. Hasil produksi pabrik tersebut akan diperuntukkan ke pasar ekspor.\r\n\r\n<p>"Hari ini RNI mengajukan permohonan kepada Menteri Perindustrian agar kami diizinkan untuk mendirikan industri gula rafinasi," ujar Direktur Utama RNI Ismed Hasan Putro di Kantor Kementerian Perindustrian, Jakarta Selatan, Senin (13/10/2014).</p>\r\n\r\n<p>Dia menjelaskan, alasan pembangunan tersebut karena RNI mempunyai pabrik gula dengan lahan tebu seluas 20 ribu hektar (ha) di Cirebon, Jawa Barat.</p>\r\n\r\n<p>Sementara pabrik gula rafinasi milik swasta yang ada saat ini dan memiliki izin dari pemerintah banyak yang tidak memiliki lahan tebu sendiri.</p>\r\n\r\n<p>Hal ini sesuai dengan ketentuan Peraturan Menteri Perdagangan (Permendag) Nomor 527 tahun 2004 yang menyebutkan bahwa dalam 3 tahun setelah pendirian pabrik, industri gula rafinasi harus memiliki lahan tebu sendiri.</p>\r\n\r\n<p>"Tapi faktanya mereka tetap tidak punya lahan tebu dan tetap eksis dan dibiarkan oleh pemerintah. Ini semacam diskriminasi yang dilakukan negara terhadap BUMN, sementara swasta boleh mendirikan pabrik yang melanggar ketentuan," lanjut dia.</p>\r\n\r\n<p>Ismed mengungkapkan, pabrik yang akan dibangun nanti secara total berkapasitas 2.500 ton gula per hari. Namun pada tahap awal, baru akan sebesar 700 ton per hari dengan nilai investasi Rp 400 miliar.</p>\r\n\r\n<p>Dana investasi ini merupakan dana patungan antara RNI dengan perusahaan BUMN asal China, dimana RNI memiliki porsi 80 persen, sedangkan sisanya berasal dari perusahaan China tersebut.</p>\r\n\r\n<p>"Modalnya kita joint dengan BUMN China, 80 RNI dan 20 BUMN China. Tetapi setelah 7 tahun berjalan, 100 persen pabriknya akan jadi milik RNI. Jaadi ini sangat menguntungkan buat RNI. Hasilnya produksinya 60 persen-70 persen akan diekspor, salah satunya ke China," jelas dia.</p>\r\n\r\n<p>Menurut Ismed, Menteri Perindustrian MS Hidayat memberikan respons yang positif terhadap rencana ini dan berjanji akan segera mengambil langkah agar pabrik ini bisa segera terealisasi.</p>\r\n\r\n<p>"Kalau diizinkan, November-Desember 2014, saya sudah siap tanamkan tiang pancang. Kalau kesempatan ini hilang tidak diizinkan, maka selesai peluang itu. Tetapi Pak Hidayat saya rasa merespons positif. Beliau akan segera menfollow-up melalui dirjennya untuk diambil langkah-langkah kongkrit untuk respon kami," tandas dia. (Dny/Nrm)</p>', '2014-10-13 19:04:00', 'img/berita/berita2.jpg', 'tidak'),
(3, 'Ingin Bangun Pabrik Gula Rafinasi, RNI Minta Dukungan Menperin', '<p>Liputan6.com, Jakarta - PT Rajawali Nusantara Indonesia (RNI) berencana untuk membangun pabrik gula rafinasi. Nantinya hasil produksi pabrik tersebut akan diperuntukkan pasar ekspor.</p>\r\n\r\n<p>"Hari ini RNI mengajukan permohonan kepada Menteri Perindustrian agar kami diizinkan untuk mendirikan industri gula rafinasi," ujar Direktur Utama RNI Ismed Hasan Putro di Kantor Kementerian Perindustrian, Jakarta Selatan, Senin (13/10/2014).</p>\r\n\r\n<p>Dia menjelaskan, alasan ingin membangun pabrik gula rafinasi karena selama ini RNI merasa didiskriminasikan. Saat ini RNI mempunyai lahan tebu seluas 20 ribu hektar (ha) di Cirebon, Jawa Barat. Sementara pabrik gula rafinasi milik swasta yang memiliki izin dari pemerintah banyak yang tidak memiliki lahan tebu sendiri.</p>\r\n\r\n<p>Padahal, sesuai dengan Peraturan Menteri Perdagangan (Permendag) Nomor 527 tahun 2004, disebutkan bahwa dalam 3 tahun setelah pendirian pabrik, industri gula rafinasi harus memiliki lahan tebu sendiri.</p>\r\n\r\n<p>"Tapi faktanya mereka tetap tidak punya lahan tebu dan tetap eksis dan dibiarkan oleh pemerintah. Ini semacam diskriminasi yang dilakukan negara terhadap BUMN, sementara swasta boleh mendirikan pabrik yang melanggar ketentuan," lanjutnya.</p>\r\n\r\n<p>Ismed mengungkapkan, pabrik yang akan dibangun nanti secara total berkapasitas 2.500 ton gula per hari. Namun pada tahap awal, baru akan sebesar 700 ton per hari dengan nilai investasi Rp 400 miliar.</p>\r\n\r\n<p>Dana investasi ini merupakan dana patungan antara RNI dengan perusahaan BUMN asal China, dimana RNI memiliki porsi 80 persen, sedangkan sisanya berasal dari perusahaan China tersebut.</p>\r\n\r\n<p>"Modalnya kita join dengan BUMN China, 80 RNI dan 20 BUMN China. Tetapi setelah 7 tahun berjalan, 100 persen pabriknya akan jadi milik RNI. Jadi ini sangat menguntungkan buat RNI. Hasilnya produksinya 60 persen-70 persen akan diekspor, salah satunya ke China," jelas dia.</p>\r\n\r\n<p>Menurut Ismed, Menteri Perindustrian MS Hidayat memberikan respon yang positif terhadap rencana ini dan berjanji akan segera mengambil langkah agar pabrik ini bisa segera terealisasi.</p>\r\n\r\n<p>"Kalau diizinkan, November-Desember 2014, saya sudah siap tanamkan tiang pancang. Kalau kesempatan ini hilang tidak diizinkan, maka selesai peluang itu. Tetapi Pak Hidayat saya rasa merespon positif. Beliau akan segera men-follow up melalui dirjennya untuk diambil langkah-langkah kongkrit untuk respon kami," tandasnya. (Dny/Gdn)</p>', '2014-10-13 20:13:00', 'img/berita/berita3.jpg', 'tidak'),
(4, 'Distribusikan Gula 60 Ribu Ton, RNI Ajak Puskop Kartika Udayana', '<p>Liputan6.com, Jakarta - Untuk memperluas jaringan pasar dan meningkatkan volume distribusi produk, PT Rajawali Nusantara Indonesia (RNI) menjalin kerja sama dengan Pusat Koperasi Kartika Udayana. </p>\r\n\r\n<p>Dalam kerja sama ini, RNI akan mendistribuskikan 5.000 ton per bulan atau mencapai 60.000 ton per tahun untuk memenuhi kebutuhan gula di tiga provinsi yaitu Bali, Nusa Tenggara Timur dan Nusa Tenggara Barat. </p>\r\n\r\n<p>Direktur Utama RNI, Ismed Hasan Putro mengatakan, gula tersebut akan diambil dari Pabrik Gula (PG) Krebet Baru Malang dan PG Rejo Agung Madiun. Selain itu, RNI juga menjadi pemasok komoditas pangan bagi entitas Puskop Kartika Udayana. </p>\r\n\r\n<p>"Komoditas pangan yang akan dipasok meliputi gula, daging sapi, beras, dan hasil sawit yang diproduksi dan diedarkan oleh RNI Group," jelasnya seperti tertulis dalam keterangan tertulis, Senin (10/11/2014). </p>\r\n\r\n<p>Selain distribusi, kerja sama yang dijalin oleh RNI dan Puskop Kartika Udayana juga terkait kemitraan pembukaan Gerai Rajawali Mart oleh Puskop Kartika Udayana. </p>\r\n\r\n<p>Ismed menjelaskan, pada prinsipnya, kerjas ama ini menunjukan komitmen RNI bersama Koperasi Kodam Udayana menjaga  ketahanan pangan di wilayah Bali, NTT, dan NTB.</p>\r\n\r\n<p>kerja sama ini akan bersifat berkelanjutan, mengingat RNI akan kembali meluncurkan produk-produk barunya. Ke depan, sebagai sarana distribusi produk, selain mengandalkan jaringan ritel yang dimiliki RNI seperti Waroeng Rajawali dan Rajawali Mart,  RNI akan aktif menggandeng berbagai kelompok usaha dan komunitas. Fik/Gdn)</p>', '2014-10-10 16:26:00', 'img/berita/berita4.jpg', 'tidak'),
(5, 'Bos RNI Minta Jatah Kuota Impor Gula Mentah', '<p>Finance.detik.com, Malang - Direktur Utama PT Rajawali Nusantara Indonesia (RNI) Ismed Hasan Putro meminta pemerintah adil dalam memberikan jatah impor gula mentah (raw sugar). Selama ini izin impor raw sugar hanya diberikan kepada produsen gula rafinasi yang kurang lebih 8 pabrik.</p>\r\n\r\n<p>Selama ini gula mentah yang diimpor, diolah oleh para pabrikan gula rafinasi menjadi gula siap konsumsi khusus untuk konsumen industri seperti pabrik makanan dan minuman dan lainnya. </p>\r\n\r\n<p>"Kita harus diberikan kuota impor dalam bentuk raw sugar, bukan hanya kepada pabrik rafinasi saja," ujar Ismed usai tutup giling di PG Krebet Baru II Jalan Raya Bululawang, Kabupaten Malang, Senin (8/12/2014).</p>\r\n\r\n<p>Menurut Ismed, RNI ingin dapat kuota impor sebesar 400.000 ton, sesuai dengan kapasitas produksi gula yang dimiliki RNI per tahun. Laba yang didapatkan dari kegiatan impor raw sugar dan produksi akan bisa digunakan sebagai revitalisasi pabrik yang sudah tua.</p>\r\n\r\n<p>"Kita bisa bangun pabrik baru dengan mandiri tanpa bergantung dengan APBN, dengan laba yang didapatkan. Jika impor yang diberikan sesuai kapasitas produksi," tegasnya.</p>\r\n\r\n<p>Ia menambahkan, akan mewujudkan harapan Wakil Presiden Jusuf Kalla, RNI memberlakukan rendemen gula 10%. Dengan catatan, pemerintah memberikan insentif, kuota impor, dan regulasi yang berpihak kepada industri gula nasional.</p>\r\n\r\n<p>"Saya akan sanggupi rendemen 10%, jika beberapa item tersebut sudah dijalankan," ungkapnya.</p>\r\n\r\n<p>Menurutnya swamsembada gula, tidak selesai dengan pembangunan pabrik baru yang direncanakan pemerintah. Hadirnya, pabrik gula (off farm) baru harus disertai kesiapan lahan, transportasi dan mekanisme produksi tebu (on farm).</p>\r\n\r\n<p>"Pemerintah harus menjalankan koordinasi yang baik dengan pihak terkait, mengaudit kebutuhan impor secara transparan. Bukan selesai dengan membangun pabrik baru untuk memenuhi kebutuhan gula," tuturnya.</p>\r\n\r\n<p>Ismed menjelaskan, fakta yang terjadi jutaan petani terpuruk dan pabrik gula dalam negeri merugi, karena derasnya gula impor di pasaran.</p>\r\n\r\n<p>Industri gula diwajibkan memiliki lahan tebu dan mengambil hasil tanam petani, sedangkan industri gula rafinasi bebas berproduksi tanpa harus memiliki lahan tebu.</p>\r\n\r\n<p>"Kita kena pajak, industri rafinasi tidak. Karena mereka impor. Tujuh tahun berjalan, mereka tidak mempunyai lahan tebu karena regulasi dan kepentingan yang melindungi. Mana keadilan pemerintah kepada kami dan petani," kecamnya.</p>\r\n\r\n<p>Ia mengungkapkan, pada 2013-2014 gula rafinasi impor telah menguasai pasar gula nasional. Dampaknya, gula lokal tertahan di gudang pabrik-pabrik gula milik BUMN. Sampai akhir Desember 2014 diperkirakan masih ada sekitar 1,2 juta ton gula tebu yang tersimpan di gudang pabrik gula karena belum laku.</p>\r\n\r\n<p>"Akibatnya, produsen gula dan petani merugi hingga Rp 2,5 triliun, begitu juga perbankan terimbas kredit macet sebesar Rp 12,5 triliun. Pemerintah jangan asyik hanya mengeluarkan regulasi saja," ungkapnya.</p>', '2014-12-08 13:26:00', 'img/berita/berita5.jpg', 'tidak'),
(6, 'Pabrik Gula RNI Catat Rendemen Tertinggi Nasional', '<p>JAKARTA, KOMPAS.com - Pabrik Gula (PG) Krebet Baru II Malang yang dikelola PT PG Rajawali I anak perusahaan PT Rajawali Nusantara Indonesia (RNI) berhasil meraih prestasi perolehan rendemen tertinggi nasional 2014.</p>\r\n\r\n<p>Direktur Utama RNI Ismed Hasan Putro mengatakan, kandungan rendemen rata-rata PG Krebet Baru II Malang mencapai 8,72 persen mengungguli pabrik gula swasta dan milik BUMN lainnya. Pada tahun ini PG Krebet Baru II telah tiga tahun berturu-turut mempertahankan prestasi rendemen tertinggi diantara 52 Pabrik Gula BUMN.</p>\r\n\r\n<p>"Tahun ini lebih spesial karena bukan hanya meraih prestasi sebagai pabrik gula dengan kandungan rendemen tertinggi diantara BUMN tapi juga PG dengan rendemen tertinggi se-nasional. Artinya  PG Krebet Baru II mengalahkan PG lain milik swasta," ujar Ismed dalam keterangan resminya, Selasa (9/12/2014).</p>\r\n\r\n<p>Ismed mengatakan, pencapaian ini merupakan hasil dari transformasi bisnis di PG Krebet Baru Malang, di antaranya adalah penerapan sistem pengadaan melalui e-procurement sehingga lebih efisien dan transparan.</p>\r\n\r\n<p>Selain itu, Ismed menilai, melalui transformasi para pegawai diajak hijrah dari nilai-nilai lama yang kurang baik kepada nilai baru yang lebih baik. Nilai lama yang aktif dihilangkan di antaranya praktek mark up dan suap. </p>\r\n\r\n<p>Ia menilai, hilangnya suap dan mark up di lapangan, berdampak pada manajemen dan cara pengelolaan tebu di kebun. Para petani tebu menjadi lebih nyaman bermitra dengan RNI, mereka merasa aman tanpa khawatir manipulasi dan pungli. Dengan begitu mereka dapat lebih total dan profesional merawat tebunya.</p>\r\n\r\n<p>Ismed menyatakan, untuk mencapai rendemen sebesar 8,72 persen tidaklah mudah. Langkah-langkah yang PG Krebet Baru lakukan utamanya adalah selektif dalam memilih umur tebu, minimal 11 sampai 12 bulan masa tanam sesuai varietas. </p>\r\n\r\n<p>Selain itu, dalam proses tebang awal tidak sembarang memilih tebu tebangan, perlu ada selektifitas dilihat dari usia dan varietasnya. Interval tebu dari kebun sampai dengan digiling tidak boleh lebih dari 36 jam.</p>\r\n\r\n<p>Penulis	: Kontributor Malang, Yatimul Ainun <br>\r\nEditor	: Bambang Priyo Jatmiko</p>', '2014-12-09 14:03:00', 'img/berita/berita5.jpg', 'ya'),
(7, 'RNI Klaim Punya Pabrik Gula Terbaik se-Indonesia', '<p>Liputan6.com, Jakarta - PT Rajawali Nusantara Indonesia (Persero) melalui anak usahanya PT PG Rajawali I mengaku memiliki pabrik gula terbaik se-Indonesia. Pabrik Gula (PG) Krebet Baru II milik RNI yang berada di Malang, Jawa Timur, memiliki tingkat rendemen yang diperoleh dengan kandungan rata-ratanya mencapai 8,72 persen.</p>\r\n\r\n<p>Pada tahun ini PG Krebet Baru II telah tiga tahun berturut-turut mempertahankan prestasi rendemen tertinggi di antara 52 pabrik gula yang dikelola BUMN. Bahkan mengalahkan pabrik gula milik perusahaan swasta.</p>\r\n\r\n<p>?"Tahun ini lebih spesial karena bukan hanya meraih prestasi PG dengan kandungan rendemen tertinggi di antara BUMN tapi juga PG dengan rendemen tertinggi se-nasional, artinya  PG Krebet Baru II mengalahkan PG lain milik swasta," kata Direktur Utama RNI, Ismed Hasan Putro, Selasa (9/12/2014).</p>\r\n\r\n<p>Ismed mengatakan, pencapaian ini merupakan buah dari transformasi yang terus di genjot RNI di PG Krebet Baru Malang.  Di antara perubahan itu adalah penerapan sistem pengadaan yang dilakukan melalui e-procurement sehingga lebih efisien dan transparan.</p>\r\n\r\n<p>Lebih lanjut menurut Ismed, melalui transformasi para pegawai diajak hijrah dari nilai-nilai lama yang kurang baik kepada nilai baru yang lebih baik. Nilai lama yang aktif diperangi Ismed diantaranya praktek mark up dan suap. </p>\r\n\r\n<p>"Ini berdampak pada manajemen dan cara pengelolaan tebu di kebun," tegasnya.</p>\r\n\r\n<p>Dikatakan Ismed, para petani tebu menjadi lebih nyaman bermitra dengan RNI, mereka merasa aman tanpa khawatir manipulasi dan pungli. Dengan begitu mereka dapat lebih total dan profesional merawat tebunya.? (Yas/Ndw)</p>', '2014-12-09 14:20:00', 'img/berita/berita7.jpg', 'tidak'),
(8, 'Dividen Dikurangi, RNI Ingin Perbaiki Mesin Gula Tua', '<p>Liputan6.com, Jakarta Presiden Joko Widodo sedang mengkaji usulan Menteri Badan Usaha Milik Negara (BUMN) Rini Soemarno untuk mengurangi dividen atau bahkan menghapus dividen bagi perusahaan BUMN.</p>\r\n\r\n<p>Dampak pengurangan dividen tersebut dikatakan Direktur Utama PT Rajawali Nusantara Indonesia (RNI) Ismed Hasan Putro, dapat membantu RNI untuk melakukan revitalisasi pabrik gula yang mesinnya sudah sangat tua.</p>\r\n\r\n<p>"Mesin-mesin pabrik gula RNI sekarang sudah udzur, karena dibangun dua tahun setelah perang Diponegoro," ujarnya setelah ditemui usai acara Temu Bisnis Calon Mitra Waroeng Rajawali di Jakarta, Rabu (10/12/2014).</p>\r\n\r\n<p>Menurutnya, mesin-mesin pengolahan gula yang beroperasi sejak 1832 tersebut akan sulit menghasilkan untung. Tak hanya itu, dengan mesin tua, pabrik gula akan sulit membantu pemerintah mewujudkan kedaulatan pangan di Tanah Air.</p>\r\n\r\n<p>Pengurangan dividen BUMN sangat berguna mengingat perbaikan mesin-mesin gula membutuhkan biaya yang tak sedikit.</p>\r\n\r\n<p>"Saya tidak tahu pastinya, yang jelas bisa sampai triliunan rupiah karena ada 52 pabrik gula BUMN. Untuk revitalisasi pabrik gula di Subang saja, kami membutuhkan Rp 400 miliar," tandasnya. (Sis/Ndw)</p>', '2014-12-10 15:16:00', 'img/berita/berita8.jpg', 'tidak'),
(9, 'Bos RNI Minta Pajak Penjualan Gula Dibebaskan', '<p>Liputan6.com, Direktur Utama PT Rajawali Nusantara Indonesia (Persero), Ismed Hasan Putro meminta kepada pemerintah untuk membebaskan pajak penjualan untuk para produsen gula dalam negeri.</p>\r\n \r\n<p>Hal itu telah disampaikan kepada Menteri Perdagangan Rachmat Gobel dan Menteri Perindustrian Saleh Husen saat menghadiri acara bedah buku di Gedung RNI, Jakarta.</p>\r\n \r\n<p>"Kami minta industri dalam negeri dibebaskan dari PPN gula, faktanya industri gula rafinasi dibebaskan, apa ini adil? Saya ngomong begini karena mumpung ada dua menteri," kata Ismed di kantornya, Selasa (23/12/2014).</p>\r\n \r\n<p>Perbedaan perlakuan tersebut yang diyakini Ismed sangat mengganggu kinerja para produsen gula dalam negeri yang masih mengandalkan tanaman tebu sebagai bahan pokoknya.</p>\r\n \r\n?<p>Masuknya gula rafinasi ke pasar-pasar tradisional diakui Ismed menjadi salah satu hal yang membuat harga gula produksi dalam negeri jatuh di bawah harga keekonomisan.</p>\r\n \r\n<p>?"Saya sangat serius, kami industri gula BUMN di rugikan adanya industri gula rafinasi. Makanya ?Pak Rachmat Gobel dan Pak Saleh Husen, tolonglah sampaikan ke Presiden, bebaskanlah petani tebu kita dari PPN," papar Ismed.</p>\r\n \r\n<p>Bahkan Ismed mengklaim Indonesia tidak akan mencapai swasembada gula kalau masih melakukan impor gula rafinasi yang hal itu seharusnya digunakan untuk industri makanan dan minuman.</p>\r\n \r\n<p>?"Kata kuncinya berani tidak pemerintah Jokowi berhentikan impor gula rafinasi, itu kuncinya. Kalau tidak mau, swasembada gula itu bakal mustahil," tutup dia. (Yas/Ndw)</p>', '2014-12-23 12:43:00', 'img/berita/berita9.jpg', 'tidak'),
(10, 'Jawab Tantangan Jokowi, RNI Bakal Bangun Pabrik Gula Rafinasi', '<p>Liputan6.com, PT Rajawali Nusantara Indonesia (Persero) bakal meladeni tantangan yang diberikan pemerintahan Joko Widodo (Jokowi) untuk membangun pabrik gula rafinasi.</p>\r\n \r\n<p>Hal itu dikarenakan pemerintah masih enggan mengurangi impor gula rafinasi mengingat tingginya permintaan industri makanan dan minuman di Indonesia.</p>\r\n \r\n<p>"Kami siap. Kami sudah ajukan izin dan sedang dalam proses, semoga dimudahkan dan di lapangkan jalannya," kata Direktur Utama RNI Ismed Hasan Putro saat bebincang dengan Liputan6.com, Jumat (26/12/2014).</p>\r\n \r\n<p>Apa yang menjadi komitmen Ismed tersebut tidak lebih dalam mendukung program pemerintahan Jokowi-JK untuk menciptakan swasembada gula di masa pemerintahannya.</p>\r\n \r\n<p>Adapun proses pembangunan pabrik gula tersebut akan menggunakan metode amalgamasi, di mana akan melebur tiga pabrik gula untuk dijadikan satu pabrik gula yang lebih modern.</p>\r\n \r\n<p>Dijelaskan Ismed, tiga pabrik yang akan dilebur adalah PG Sindang Laut, PG Karang Suwung dan PG Tersana Baru yang semuanya berlokasi di Cirebon, Jawa Barat. Pabrik baru nantinya juga akan berlokasi di kota yang sama.</p>\r\n \r\n<p>Pabrik gula modern tersebut nanitnya akan memiliki kapasitas 6.000 ton cair per day (TCD). Selain itu nantinya juga akan mampur memproduksi bioetanol?, gula kristal putih, dan gula rafinasi yang berbasis tebu untuk industri makanan dan minuman.</p>\r\n \r\n<p>?"Sudah ada rekan dari China, Thailand dan Jepang yang mengajak bekerjasama?," tegas Ismed.</p>\r\n \r\n<p>Pabrik gula modern ini diperkirakan akan memakan investasi sebesar Rp 2,1 triliun dan ditargetkan akan mampu berproduksi di tahun 2017. (Yas/Ndw)</p>', '2014-12-26 14:32:00', 'img/berita/berita10.jpg', 'tidak'),
(11, 'Dapat Rp 280 Miliar, RNI Bakal Revitalisasi 2 Pabrik', '<p>Liputan6.com, Jakarta - Produsen gula, PT Rajawali Nusantara Indonesia (RNI) berencana melakukan revitalisasi kebun pada Pabrik Gula Jatitujuh. Adapun revitalisasi tersebut menghabiskan biaya sebesar Rp 143 miliar.</p>\r\n\r\n<p>Direktur Utama RNI, Ismed Hasan Putro mengatakan, revitalisasi tersebut meliputi penambahan lebung dan perbaikan irigasi. Kemudian perbaikan infrastruktur terutama jalan pabrik, penataan lahan, perbaikan varietas tanaman dan drainase.</p>\r\n\r\n<p>Selain itu, perseroan juga akan melakukan revitalisasi kebun pada Pabrik Gula Subang dengan alokasi Rp 137 miliar.</p>\r\n\r\n<p>"Fokusnya Pabrik Gula Jatitujuh, Pabrik Gula Subang untuk perbaikan," kata dia di Jakarta, Seperti ditulis pada Selasa (27/1/2014).</p>\r\n\r\n<p>Dia menambahkan, utamanya revitalisasi ini untuk jalan-jalan kawasan pabrik Pabrik jatitujuh dan Pabrik Subang masing-masing melewati lahan 8.000 hektar dan 5.000 hektar.</p>\r\n\r\n<p>"Kebunnya kan luas, ini (Jatitujuh) 8000 hektar dan ini (Subang) punya 5000 hektar," paparnya.</p>\r\n\r\n<p>Lebih lanjut, dana tersebut akan menggunakan dana suntikan dari Penyertaan Modal Negara (PMN) senilai Rp 280 miliar dalam Rancangan Anggaran Penerimaan dan Belanja Negara (RAPBN) 2015.</p>\r\n\r\n<p>Dengan revitalisasi tersebut dia berharap dapat menyelematkan dua pabrik itu dari kebangkrutan dan ancaman penutupan. Pasalnya, pabri itu selama ini kerap merugi.</p>\r\n\r\n<p>Kemudian meningkatkan meningkatkan perolehan laba dari pabrik sebesar Rp 145 miliar pada tahun 2019.</p>\r\n\r\n<p>Tak sekadar itu, diharapkan HPP kurang dari Rp 5.500 per kg pada tahun 2019 dan dapat bersaing dengan gula impor yang saat ini sekitar Rp 5.500 per kg. (Amd/Gdn)</p>', '2015-01-27 08:00:00', 'img/berita/berita11.jpg', 'tidak'),
(12, 'Bangun Pabrik Rafinasi, RNI Lirik Pinjaman Bank', '<p>Liputan6.com, Jakarta - PT Rajawali Nusantara Indonesia (Persero) atau RNI berencana  membangun sebuah pabrik gula rafinasi mengingat tingginya permintaan industri makanan dan minuman dalam negeri.</p>\r\n\r\n<p>Direktur Utama RNI Ismed Hasan Putro mengatakan, pembangunan tersebut menerapkan sistem amalgamasi tiga pabrik yang saat ini dalam proses pengkajian.</p>\r\n\r\n<p>"Kita siapkan kajiannya, amalgamasi PG Karang Suwung, PG Sindang Laut, PG Tersana Baru," kata dia kepada Liputan6.com seperti ditulis Selasa (27/1/2015).</p>\r\n\r\n<p>Dia mengatakan, pabrik ini digadang menghabiskan dana investasi Rp 2,1 triliun. Untuk produksi, diperkirakan kapasitasnya mencapai 6.000 ton cair per day (TCD) sampai 10.000 TCD.</p>\r\n\r\n<p>"Kita ganti kapasitasnya 6000 TCD sampai 10.000 TCD tergantung nanti perkembangan lahan tebu yang dikembangkan masyarakat," papar dia.</p>\r\n\r\n<p>Ismed mengaku, untuk memuluskan langkah tersebut sedang melirik pinjaman dari bank. "Kita coba cari pinjaman paling lunak, bank lah paling aman," ujarnya.</p>\r\n\r\n<p>Sebelumnya, Ismed pernah bilang pembangunan pabrik tersebut untuk mendukung program pemerintahan Presiden Joko Widodo mewujudkan swasembada gula.</p>\r\n\r\n<p>Pabrik yang ditargetkan berproduksi pada tahun 2017 diakuinya  telah mendapat beberapa tawaran kerjasama dari beberapa negara. "Sudah ada rekan dari China, Thailand dan Jepang yang mengajak bekerjasama," tandas dia. (Amd/Nrm)</p>', '2015-01-27 10:31:00', 'img/berita/berita12.jpg\n', 'tidak'),
(13, 'Diberhentikan Sebagai Bos RNI, Ismed Hasan Putro: Saya Harus Siap', '<p>Detik.com, Jakarta -Pihak Kementerian Badan Usaha Milik Negara (BUMN) memberhentikan Ismed Hasan Putro sebagai Direktur Utama PT Rajawali Nusantara Indonesia (RNI). </p>\r\n\r\n<p>Ismed diberhentikan sebagai dirut di Badan Usaha Milik Negara (BUMN) bidang perkebunan sawit dan gula ini sejak kemarin Selasa (5/5/2015). Ia pun angkat bicara soal keputusan pemberhentiannya tersebut, termasuk soal rencananya pasca tak lagi jadi orang nomor satu di RNI yaitu kembali berbisnis.</p>\r\n\r\n<p>Ismed mengaku tidak mempersoalkan pemberhentian yang dialaminya. Sejak awal dipercaya sebagai Dirut RNI pada awal 2012, Ismed telah siap bila diberhentikan sewaktu-waktu oleh pemegang saham, karena jabatan adalah sebuah amanah.</p>\r\n\r\n<p>"Saya tidak mau berbicara itu. Saya anggap sudah tutup buku. Saya harus siap, untuk diangkat dan diberhentikan. Waktu saya diberi amanah, saya siap juga mengembalikan amanah tersebut," kata Ismed kepada detikFinance Rabu (6/5/2015).</p>\r\n\r\n<p>Ia juga telah berbicara untuk tidak ingin berlama-lama memegang posisi direksi BUMN. Pasca pemberhentian dirinya, Ismed telah menjabat sebagai Dirut RNI hanya selama 3 tahun 2 bulan sedangkan masa jabatan penuh direksi BUMN untuk 1 periode sampai 5 tahun.</p>\r\n\r\n<p>"Saya di awal jadi dirut sudah berkomit untuk menjabat hanya 3 sampai 4 tahun. Saya nggak mau sampai 5 tahun. Saya menjabat di RNI sampai berhenti sudah 3 tahun 2 bulan," ujarnya.</p>\r\n\r\n<p>Selama menjadi pimpinan tertinggi di RNI, Ismed mengaku banyak belajar mengenai persoalan gula hingga kelapa sawit. Selain memperoleh pengalaman berharga, Ismed telah meletakkan prinsip tata kelola perusahaan yang bersih dan transparan.</p>\r\n\r\n\r\n<p>"Paling tidak selama menjadi dirut, saya sudah meletakkan dasar transformasi. Saya merombak budaya feodal yakni suap dan komisi yang terjadi belasan tahun di perusahaan. Meskipun transformasi yang saya jalankan masih belum sempurna," ujarnya.</p>\r\n\r\n<p>Ismed berharap kepada siapa pun yang menggantinya, bisa melanjutkan transformasi di tubuh RNI, yang memiliki berbagai lini bisnis seperti sawit, gula, peternakan hingga perdagangan.</p>\r\n\r\n<p>"Dirut yang baru bisa melanjutkan transformasi. Memberi kesempatan kepada anak muda untuk memimpin bukan karena suku, kedekatan ataupun titipan," sebutnya.</p>\r\n\r\n<p>Pasca tidak menjadi bos BUMN, Ismed mengaku memiliki beberapa rencana. Rencana terdekat adalah bakal menunaikan ibadah umroh. Ia juga berencana kembali terjun ke dunia usaha yang telah lama digeluti sebelum dipercaya oleh Dahlan Iskan ketika menjadi Menteri BUMN.</p>\r\n\r\n<p>"Saya akan kembali meneruskan bisnis properti, kelapa sawit sampai trading. Bisnis saya sempat kurang saya perhatikan ketika saya dipercaya menjadi dirut. Saya juga akan membuka Pondok Pesantren," tuturnya.</p>', '2015-05-06 13:07:00', 'img/berita/berita13.jpg', 'tidak'),
(14, 'Ini Alasan Menteri BUMN Berhentikan Ismed Dari Bos RNI', '<p>Detik.com, Jakarta -Ismed Hasan Putro diberhentikan dari posisi Direktur Utama PT Rajawali Nusantara Indonesia (RNI) terhitung mulai Selasa 5 Mei kemarin.</p>\r\n\r\n<p>Pemberhentian ditandatangani langsung oleh Menteri Badan Usaha Milik Negara (BUMN) Rini Soemarno. Apa sebenarnya alasan Ismed diberhentikan sebelum masa jabatannya berakhir?</p>\r\n\r\n<p>Deputi Bidang Usaha Industri Argo dan Industri Strategis Muhammad Zamkhani menjelaskan pergantian direktur utama RNI murni untuk meningkatkan kinerja RNI. </p>\r\n\r\n<p>"Kemarin Pak Ismed diberhentikan sebagai Dirut RNI. Kami ingin RNI ke depan kinerjanya lebih balik lagi," kata Zamkhani kepada detikFinance, Rabu (6/5/2015).</p>\r\n\r\n<p>Lantas bagaimana kinerja keuangan perseroan sebelum dan sesuah di bawah kendali Ismed? Dari data yang diperoleh detikFinance, RNI mencatat rugi Rp 22 miliar di 2011 atau sebelum Ismed dipercaya sebagai Dirut RNI.</p>\r\n\r\n<p>Saat Ismed diangkat sebagai dirut pada awal 2012, mantan wartawan ini mampu membalikkan kinerja keuangan sehingga RNI dari rugi bisa berubah menjadi untung sebesar Rp 307 miliar.</p>\r\n\r\n<p>Namun pada tahun 2013 dan 2014, kinerja keuangan perseroan mulai merosot. Laba RNI turun ke angka Rp 33 miliar di tahun 2013, penurunan kembali berlanjut di tahun 2014. RNI mencatat rugi Rp 200 miliar (belum audit) di tahun 2014.</p>\r\n\r\n<p>Ismed sendiri diberhentikan di tengah jalan sebelum berakhirnya masa jabatan 1 periode. Ismed yang diangkat pada awal 2012 oleh Dahlan Iskan, seharusnya habis masa jabatannya pada tahun 2017.\r\n(feb/ang) </p>', '2015-05-06 15:13:00', 'img/berita/berita14.jpg', 'tidak'),
(15, 'Menteri Rini Rombak Direksi RNI, Ini Daftarnya', '<p>Detik.com, Jakarta -Menteri Badan Usaha Milik Negara (BUMN) Rini Soemarno melalui surat: SK-101/MBU/06/2015 tentang pergantian jajaran Direksi PT Rajawali Nusantara Indonesia (RNI), mengangkat B. Didik Prasetyo sebagai Dirut PT RNI. Didik menggantikan posisi Ismed Hasan Putro sebagai dirut sebelumnya.</p>\r\n\r\n<p>Bertempat di Kementerian BUMN hari ini, direksi BUMN yang memiliki lini usaha produksi tebu, sawit hingga bisnis kondom tersebut resmi diangkat. Pengangkatan direksi baru bertujuan memperbaiki kinerja keuangan perseroan yang merugi pada 2014 lalu.</p>\r\n\r\n<p>"Pertimbangan pergantian dirut karena untuk mengisi kekosongan jabatan dirut dan untuk direksi lainnya dalam rangka perbaikan dan peningkatan kinerja perusahaan," kata Kepala Bidang Komunikasi Publik Kementerian BUMN Teddy Poernama dalam keteragan tertulisnya, Selasa (23/6/2015).</p>\r\n\r\n<p>Teddy menyebut hanya 1 pejabat Direksi RNI lama yang dipertahankan yakni Djoko Retnadi sebagai Direktur Strategi Bisnis dan Inovasi. Sebelumnya, Djoko juga dipercaya sebagai Plt Dirut RNI pasca digantinya Ismed Hasan Putro dari kursi dirut RNI.</p>\r\n\r\n<p>Didik pernah menjabat sebagai Asisten Deputi Bidang Usaha Energi, Pertambangan, Percetakan, dan Pariwisata Kementerian BUMN.</p>\r\n\r\n<p>Berikut jajaran Direksi baru RNI:\r\n\r\n\r\n<ul><li>B. Didik Prasetyo sebagai direktur utama</li>\r\n<li>Eka Wahyudi sebagai direktur</li>\r\n<li>Agung Primanto Murdanoto sebagai direktur</li>\r\n<li>Mochammad Yana Aditya sebagai direktur</li></ul></p>', '2015-06-23 11:04:00', 'img/berita/berita15.jpg', 'tidak'),
(16, 'Strategi RNI Dongkrak Kinerja dari Jatuhnya Harga Komoditas', '<p>Liputan6.com, Jakarta - Di tengah pelemahan harga komoditas seperti minyak kelapa sawit mentah atau crude palm oil (CPO), karet, dan teh, PT Rajawali Nusantara Indonesia (RNI) kini hanya berharap pada penjualan gula untuk menopang pendapatan untuk tahun ini. Tumpuan RNI pada komoditas gula tersebut terbantu dengan telah menetapkan harga jual gula yang cukup ideal sehingga bisa menguntungkan perusahaan maupun petani. </p>\r\n\r\n<p>Direktur Strategi Bisnis dan Inovasi RNI, Djoko Retnadi mengungkapkan, perseroan hanya mampu mengikuti harga pasar untuk menjual komoditas-komoditas perkebunan tersebut. Salah satu upaya yang bisa menyelamatkan kinerja keuangan adalah mendiversifikasi penjualan komoditas. </p>\r\n\r\n<p>"?Untuk mengkompensasi kerugian dari harga komoditas yang masih lemah, supaya tidak ambruk, kami mengandalkan gula. Karena harga jual gula dari pemerintah ditetapkan sangat bagus, tertinggi untuk operasi pasar sebesar Rp 8.900 per kilogram (kg)," kata dia di Gedung Kementerian Badan Usaha Milik Negara (BUMN), Jakarta, Selasa (23/6/2015).</p>\r\n\r\n<p>Pemerintah, dinilai Djoko sangat bijaksana dengan mengambil langkah tidak mengimpor gula sehingga harga gula di pasar lokal membaik. Ia juga mengungkapkan bahwa patokan harga gula yang ditetapkan oleh pemerintah tersebut tidak hanya dinikmati oleh perusahaan tapi juga petani tebu. </p>\r\n\r\n<p>"Tahun lalu waktu masih impor, harga jual gula sangat rendah Rp 7.000 per kg. Berat buat kami, karena harga produksi saja sudah di atas Rp 7.000, jadi rugi," ujarnya. </p>\r\n\r\n<p>Menurut Djoko, kebutuhan gula domestik mencapai 4,5 juta sampai 5 juta ton setiap tahun. Jumlah ini terdiri dari 2,5 juta ton untuk konsumsi masyarakat dan sisanya untuk industri makanan dan minuman. Sayangnya perusahaan pelat merah ini hanya mampu memproduksi 350 ribu ton gula per tahun. </p>\r\n\r\n<p>"Setahun baru 350 ribu ton. Itu dari 8 pabrik gula punya RNI. Diharapkan dengan iklim yang mendukung, produktivitas tebu bisa meningkat sehingga kami bisa meningkatkan produksi hingga di atas 90 ton per hektare (ha) dari sebelumnya hanya 75 ton sampai 80 ton setiap hektare," ?papar dia. (Fik/Gdn)</p>', '2015-06-23 12:13:00', 'img/berita/berita16.jpg', 'tidak'),
(17, 'RNI Gandeng Antam untuk Sediakan Modal Bagi Petani Tebu', '<p>JAKARTA, KOMPAS.com - PT Rajawali Nusantara Indonesia (RNI) menggandeng PT Antam Tbk sebagai mitra pembinaan petani tebu. Dalam kerjasama ini, Antam menyediakan modal kerja bagi petani tebu yang berada di bawah binaan RNI.</p>\r\n\r\n<p>Direktur Utama RNI Didik Prasetyo mengatakan Sinergi kedua BUMN tersebut dilakukan untuk membantu 278 petani binaan yang berada di bawah PT PG Rajawali II di lingkungan Unit PG Sindang Laut, PG Tersana Baru dan PG Karangsuwung.</p>\r\n\r\n<p>“Petani di lingkungan RNI diposisikan sebagai mitra yang sinergi untuk mengembangkan perusahaan,” jelasnya dalam keterangan pers, Jumat (10/7/2015).</p>\r\n\r\n<p>Di samping menyediakan modal kerja, kerjasama dengan Antam juga untuk meningkatkan kompetensi dan pemahaman para petani dengan melaksanakan pelatihan in house yang diikuti 110 pertani penerima modal kerja dan studi banding ke PG Krebet Baru yang diikuti 120 petani. </p>\r\n\r\n<p>Didik menambahkan, Kegiatan Demplot KBD Masa tanam 2015-2016 merupakan satu rangkaian kegiatan yang telah dilakukan penanaman mulai Desember 2014 seluas Total 15 Ha di 3 Pabrik Gula yaitu PG Sindang laut, Tersana Baru dan Karangsuwung. </p>\r\n\r\n<p>Diharapkan program Demplot ini terus berjalan sehingga kualitas bibit kebun Tebu giling semakin baik dan meningkat.</p>\r\n\r\n<p>RNI juga melakukan riset terpadu budidaya tebu yang nantinya bisa membantu petani meningkatkan produktivitasnya.<br></br>\r\nEditor	: Bambang Priyo Jatmiko</p>', '2015-07-10 14:34:00', 'img/berita/berita17.jpg', 'tidak'),
(18, 'Eks Bos RNI Ungkap Peran Gita Wirjawan di Balik Impor Gula', '<p>Liputan6.com, Jakarta - Kementerian Perdagangan kembali menerbitkan izin impor 600 ribu ton gula mentah untuk pabrik gula rafinasi. Alasannya, impor gula kembali dibuka untuk menjaga pasokan bagi industri makanan dan minuman. Padahal Komisi Pemberantasan Korupsi (KPK) telah mengendus adanya dugaan korupsi terkait impor gula.</p>\r\n\r\n<p>Hal itu terlontar oleh Ketua Himpunan Pengusaha Pribumi Indonesia yang juga mantan Direktur Utama PT Rajawali Nusantara Indonesia (RNI), Ismed Hasan Putro. Dia mengatakan mantan Menteri Perdagangan Gita Wirjawan, merupakan tokoh yang paling bertanggung jawab dalam membanjirnya gula rafinasi di pasar.</p>\r\n\r\n<p>"Gita Wirjawan yang paling bertanggung jawab soal membajirinya gula rafinasi," ujar Ismed di bilangan Cikini, Jakarta, Sabtu (22/8/2015).</p>\r\n\r\n<p>Saat mendengar itu, anggota Komisi III DPR RI, Faizal Akbar langsung menyambar Ismed. "Kenapa enggak dilaporkan, kalau ada bukti sini serahkan kepada saya," tutur dia.</p>\r\n\r\n<p>Ismed pun langsung menjelaskan dirinya sudah melaporkan hal tersebut kepada Komisi Pemberantasan Korupsi (KPK). "Saya sudah kirim ke KPK hal itu. Tapi malah saya yang dicabut jadi Dirut," tutup Ismed.</p>', '2015-08-22 20:10:00', 'img/berita/berita18.jpg', 'tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas_file`
--

CREATE TABLE IF NOT EXISTS `berkas_file` (
  `id_file` int(5) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `id_unit` int(2) NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `berkas_file`
--

INSERT INTO `berkas_file` (`id_file`, `nama_file`, `link`, `id_unit`) VALUES
(1, 'Atr_TB.DBF', '/assets/file/Atr_TB.DBF', 1),
(2, 'Nota.DBF', '/assets/file/Nota.DBF', 1),
(3, 'Atr_TB.DBF', '/assets/file/Atr_TB.DBF', 2),
(4, 'Nota.DBF', '/assets/file/Nota.DBF', 2),
(5, 'Atr_TB.DBF', '/assets/file/Atr_TB.DBF', 1),
(6, 'Nota.DBF', '/assets/file/Nota.DBF', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(15) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(14) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=320 ;

--
-- Dumping data untuk tabel `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(319, 1442328757, '::1', 'qeoul8ta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(100) NOT NULL,
  `quote` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `link`, `quote`) VALUES
(1, 'img/galeri/large/5.jpg', 'Lori Pajangan'),
(2, 'img/galeri/large/17.jpg', 'Direksi Krebet Baru'),
(3, 'img/galeri/large/24.jpg', 'Jembatan Lori'),
(4, 'img/galeri/large/23.jpg', 'Traktor Angkut Tebu '),
(5, 'img/galeri/large/22.jpg', 'Pecah Tebu'),
(6, 'img/galeri/large/21.jpg', 'Rencana Kawasan Rumah Dinas'),
(7, 'img/galeri/large/20.jpg', 'Lori Krebet Baru'),
(8, 'img/galeri/large/19.jpg', 'Panen Raya'),
(9, 'img/galeri/large/11.jpg', 'Lori Pajangan'),
(13, 'img/galeri/large/1.jpg', 'Kantor RNI 1'),
(14, 'img/galeri/large/2.jpg', 'Antri Tebu'),
(15, 'img/galeri/large/3.jpg', 'PG Krebet 1267'),
(16, 'img/galeri/large/4.jpg', 'Kilang Tetes'),
(19, 'img/galeri/large/7.jpg', 'Mesin Gear Giling'),
(23, 'img/galeri/large/10.jpg', 'Gilingan Tebu'),
(25, 'img/galeri/large/12.jpg', 'Crane Tebu'),
(26, 'img/galeri/large/13.jpg', 'Stasiun Penguapan'),
(27, 'img/galeri/large/14.jpg', 'Icon Rejo Agung'),
(28, 'img/galeri/large/15.jpg', 'Antri Bongkar'),
(29, 'img/galeri/large/16.jpg', 'Beberapa Lori Krebet'),
(31, 'img/galeri/large/18.jpg', 'Rapat Direksi Krebet Baru'),
(32, 'img/galeri/large/6.jpg', 'PG Rejo Agung'),
(33, 'img/galeri/large/8.jpg', 'PG Krebet 1955'),
(34, 'img/galeri/large/9.jpg', 'Kantor Pusat RNI 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event` varchar(200) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `tanggalMulai` date NOT NULL,
  `jam` time NOT NULL,
  `tanggalSelesai` date NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `event`, `deskripsi`, `tanggalMulai`, `jam`, `tanggalSelesai`, `tempat`, `foto`) VALUES
(2, 'Pembukaan Giling tahun 2015', 'Pembukaan Giling tahun 2015. Akan dihadiri oleh Direktur utama RNI. Dimohon undangan datang tepat waktu dengan memakai pakaian dinas kerja masing-masing. Terima kasih.', '2015-05-25', '09:00:08', '2015-05-25', 'PG Krebet Baru Malang', 'img/kegiatan/2.jpg'),
(3, 'Giling Periode 1 PG Krebet Baru Malang', 'Giling Periode 1 PG Rejo Agung. Kegiatan giling periode I sudah dibuka. Untuk petani dan KUD dimohon untuk segera menebang tebu masing-masing sesuai dengan Surat Perintah Tebang Angkut (SPTA).', '2015-07-01', '08:00:00', '2015-08-01', 'PG Krebet Baru Malang', 'img/kegiatan/3.jpg'),
(4, 'Halal Bihalal Idul Fitri 2015', 'Kegiatan ini diikuti oleh semua elemen karyawan PG Krebet Baru Bululawang. Dimohon kehadirannya dengan pakaian bebas rapi dan sopan. ', '2015-08-23', '08:00:00', '2015-08-23', 'Gedung Aula PG Krebet', 'img/kegiatan/4.jpg\r\n'),
(6, 'Giling Periode 1 PG Rejo Agung', 'Giling Periode 1 PG Rejo Agung. Kegiatan giling periode I sudah dibuka. Untuk petani dan KUD dimohon untuk segera menebang tebu masing-masing sesuai dengan Surat Perintah Tebang Angkut (SPTA).', '2015-06-01', '08:00:00', '2015-07-01', 'PG Rejo Agung Madiun', 'img/kegiatan/1.jpg'),
(7, 'Studi Banding Perusahaan Gula di Inggris', 'Merupakan kegiatan studi perusahaan dalam rangka mencontoh pabrik-pabrik internasional untuk pengembangan PG RNI 1 kedepannya. Studi banding tahun ini dilakukan di Inggris Eropa yang juga merupakan perusahaan gula terbesar di Inggris dan Eropa.', '2015-08-17', '07:00:15', '2015-08-24', 'Inggris', 'img/kegiatan/6.jpg'),
(8, 'Jalan Sehat Bersama RNI dalam rangka HUT RI ke 70', 'Jalan sehat dengan tema "Ayo Uklam cek Tahes" ini dilaksanakan pada hari Minggu 23 Agustus 2015 di lapangan Krebet Baru Bululawang. Hadiah utama Mobil Avanza dan puluhan sepeda motor menanti anda. Ikuti dan meriahkan acara tersebut jangan sampai ketinggalan. Tiket dan kupon dapat diambil di bagian masing-masing, kupon digunakan untuk menukarkan snack dan undian berhadiah. Jangan sampai ketinggalan.', '2015-08-23', '07:00:00', '2015-08-23', 'Lapangan Krebet Baru', 'img/kegiatan/5.jpg\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `krebet_produksi`
--

CREATE TABLE IF NOT EXISTS `krebet_produksi` (
  `id_produksi` int(10) NOT NULL AUTO_INCREMENT,
  `tahun` int(4) NOT NULL,
  `tebu` int(15) NOT NULL,
  `luas_areal` int(15) NOT NULL,
  `gula` int(15) NOT NULL,
  `kap_giling` double NOT NULL,
  PRIMARY KEY (`id_produksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `krebet_produksi`
--

INSERT INTO `krebet_produksi` (`id_produksi`, `tahun`, `tebu`, `luas_areal`, `gula`, `kap_giling`) VALUES
(1, 2006, 2137020, 24178, 139170, 12.9),
(2, 2007, 2138130, 24265, 139420, 12.62),
(3, 2008, 2141240, 25952, 141670, 13.3),
(4, 2009, 2143350, 26839, 142920, 13.6),
(5, 2010, 2145460, 27726, 144170, 13.9),
(6, 2011, 2147570, 28613, 145420, 14.2),
(7, 2012, 2149680, 29500, 146670, 14.5),
(8, 2013, 2151790, 30387, 147920, 14.8),
(9, 2014, 2153900, 31274, 149170, 15.1),
(10, 2015, 2156010, 32161, 150421, 15.5),
(11, 2016, 2158120, 33048, 151670, 15.7),
(12, 2017, 2160230, 33935, 152920, 16),
(13, 2018, 2162340, 34822, 154170, 16.3),
(14, 2019, 2164450, 35709, 155420, 16.6),
(15, 2020, 2166560, 36596, 156670, 16.9),
(16, 2021, 2168670, 37483, 157920, 17.2),
(17, 2022, 2170780, 38370, 159170, 17.5),
(18, 2023, 2172890, 39257, 160420, 17.8),
(19, 2024, 2175000, 40144, 161670, 18.1),
(20, 2025, 2177110, 41031, 162920, 18.4),
(21, 2026, 2179220, 41918, 164170, 18.7),
(22, 2027, 2181330, 42805, 165420, 19),
(23, 2028, 2183440, 43692, 166670, 19.3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `kota`, `pesan`) VALUES
(1, 'icol', 'sfaisolandi@gmail.com', 'Malang', 'Mantab gan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rejoagung_produksi`
--

CREATE TABLE IF NOT EXISTS `rejoagung_produksi` (
  `id_produksi` int(10) NOT NULL AUTO_INCREMENT,
  `tahun` int(4) NOT NULL,
  `tebu` int(15) NOT NULL,
  `luas_areal` int(15) NOT NULL,
  `gula` int(15) NOT NULL,
  `kap_giling` double NOT NULL,
  PRIMARY KEY (`id_produksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `rejoagung_produksi`
--

INSERT INTO `rejoagung_produksi` (`id_produksi`, `tahun`, `tebu`, `luas_areal`, `gula`, `kap_giling`) VALUES
(1, 2006, 2137020, 24178, 139170, 12.8),
(2, 2007, 2138130, 24265, 139420, 12.9),
(3, 2008, 2139240, 24352, 139670, 13.1),
(4, 2009, 2140350, 24439, 139920, 13.3),
(5, 2010, 2141460, 24526, 140170, 13.5),
(6, 2011, 2142570, 24613, 140420, 13.7),
(7, 2012, 2143680, 24700, 140670, 13.9),
(8, 2013, 2144790, 24787, 140920, 14.1),
(9, 2014, 2145900, 24874, 141170, 14.3),
(10, 2015, 2147010, 24961, 141420, 14.5),
(11, 2016, 2148120, 25048, 141670, 14.7),
(12, 2017, 2149230, 25135, 141920, 14.9),
(13, 2018, 2150340, 25222, 142170, 15.1),
(14, 2019, 2151450, 25309, 142420, 15.3),
(15, 2020, 2152560, 25396, 142670, 15.5),
(16, 2021, 2153670, 25483, 142920, 15.7),
(17, 2022, 2154780, 25570, 143170, 15.9),
(18, 2023, 2155890, 25657, 143420, 16.1),
(19, 2024, 2157000, 25744, 143670, 16.3),
(20, 2025, 2158110, 25831, 143920, 16.5),
(21, 2026, 2159220, 25918, 144170, 16.7),
(22, 2027, 2160330, 26005, 144420, 16.9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistika`
--

CREATE TABLE IF NOT EXISTS `statistika` (
  `ip` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statistika`
--

INSERT INTO `statistika` (`ip`, `tanggal`, `hits`, `online`) VALUES
(0, '2015-08-29', 117, 1440827347),
(0, '2015-08-31', 3, 1441008252),
(0, '2015-09-01', 20, 1441095349),
(0, '2015-09-02', 2, 1441181443),
(0, '2015-09-05', 6, 1441431424),
(0, '2015-09-07', 1, 1441600548);

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `id_unit` int(2) NOT NULL,
  `nama_unit` varchar(15) NOT NULL,
  PRIMARY KEY (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`id_unit`, `nama_unit`) VALUES
(1, 'krebet'),
(2, 'rejoagung'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `id_unit` int(2) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `avatar`, `id_unit`) VALUES
(1, 'krebet', 'krebet', 'M. Ubaidillah', '/assets/img/user/ubaid.jpg', 1),
(2, 'rejo', 'rejo', 'Faisol Hara', '/assets/img/user/faisol.jpg', 2),
(3, 'admin', 'admin', 'Admin RNI 1', 'assetsadmin\\img\\avatar/avatar5.png', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
