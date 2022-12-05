-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 12:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myduck`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` enum('Pengumuman','Berita') NOT NULL,
  `tglterbit` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isiberita` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `kategori`, `tglterbit`, `isiberita`) VALUES
(1, 'Dinas Pertanian dan Pangan Kota Pekalongan Sediakan Asuransi Pertanian Guna Meminimalisir Resiko Kerugian Petani dan Peternak', 'Pengumuman', '2022-08-22 14:39:12', 'Guna meminimalisir risiko kerugian yang dialami oleh petani dan peternak, Dinas Pertanian dan Pangan (Dinperpa) Kota Pekalongan menyediakan Asuransi Usaha Tani Padi (AUTP). Meskipun bernama Asuransi Pertanian, namun tidak hanya petani yang akan dilindungi dari kemungkinan kerugian yang terjadi, namun juga berlaku bagi peternak. Demikian disampaikan Kepala Bidang Pertanian Tanaman Pangan dan Holtikultura Dinperpa Kota Pekalongan, Ir. Darsari Resti Artanti, saat ditemui di ruang kerjanya, Kamis (2/4/2020).\r\n\r\n“AUTP ini merupakan program pemerintah sejak beberapa tahun lalu, di Kota Pekalongan sendiri belum begitu banyak yang tahu, sehingga belum banyak yang bergabung dan belum menjadi budaya. Asuransi Pertanian ini masih terus kami kenalkan kepada para petani, untuk melindungi lahan mereka dari kerusakan, misal bencana alam dan faktor cuaca seperti bencana banjir, kekeringan, hama tanaman dan sebagainya,” tutur Tanti.\r\n\r\nTanti menjelaskan dengan membayar premi hanya Rp 36 ribu per hektare per musim, petani yang sawahnya terkena bencana banjir, kekeringan dan serangan OPT dapat klaim (ganti) Rp 6 juta per hectare dari biaya aslinya Rp180 ribu per hektare karena disubsidi oleh pemerintah sebesar 80 persen atau sekitar Rp144 ribu. Menurut Tanti, pendaftaran asuransi juga makin mudah karena Kementan bersama PT Jasindo menerbitkan layanan berbasis online melalui Sistem Informasi Asuransi Pertanian (SIAP).\r\n\r\n“Pada awal masa tanam sebelum umur tanaman 30 hari, petani perlu mengajukan asuransi dengan membawa fotocopy KTP, kemudian dibawa petugas PPL untuk diteruskan ke PT Jasindo pusat. Namun, pada akhir tahun 2019 sudah menggunakan aplikasi online, petani hanya memberikan fotocopy KTP kemudian dientrikan oleh petugas via online, petani bisa membayar melalui rekening kelompok sehingga tidak ada penyelewangan. Setelah terdaftar, akan turun polis yang menjadi dasar apabila ada kerugian petani tersebut. Jika petani sudah melapor ke penyuluh pertanian dan petugas Jasindo sudah sesuai ketentuan kemudian klaim akan bisa langsung diproses,” pungkas Tanti.\r\n\r\n(Tim Komunikasi Publik Dinkominfo Kota Pekalongan)\r\nhttps://pekalongankota.go.id/berita/minimalisir-risiko-kerugian-petani-dan-peternak-dinperpa-sediakan-asuransi-pertanian-9306.html'),
(2, 'Sarasehan Kelompok Tani Ternak (KTT) bersama DISNAKESWAN Provinsi Jawa Tengah', 'Berita', '2022-08-22 14:38:53', 'Kota Pekalongan - Peranan pembinaan Kelompok Tani Ternak (KTT) dalam memproduksi hasil olahan produksi sangat penting terlebih di masa pandemi yang masih berlangsung. Terlebih,saat kondisi cuaca ekstrem yang menyebabkan bencana banjir di beberapa wilayah,seperti di Kota Pekalongan,membuat KTT di Kota Batik tersebut harus tetap bisa bertahan dan menjalankan aktivitasnya. Oleh karena itu, Dinas Peternakan dan Kesehatan Hewan (Disnakeswan) Provinsi Jawa Tengah bekerjasama dengan Dinas Pertanian dan Pangan (Dinperpa) Kota Pekalongan menggelar kegiatan Sarasehan Kelompok Tani Ternak (KTT) Provinsi Jawa Tengah bersama puluhan peternak yang ada di Kota Pekalongan yang dibuka secara langsung oleh Kepala Dinperpa Kota Pekalongan,Zainul Hakim,SH,MHum. Kegiatan sarasehan KTT tersebut berlangsung di peternakan milik Basyirin di Kelurahan Setono, Senin (22/2/2021).\r\n\r\nSekretaris Disnakeswan Provinsi Jawa Tengah, Drh. Saiful Latif mengungkapkan bahwa kegiatan sarasehan ini dimaksudkan untuk merembug dan menampung permasalahan yang dihadapi para KTT serta kebutuhannya untuk bisa difasilitasi usulannya dalam mengembangkan hasil produksinya. Mengingat,potensi pertanian maupun peternakan di Kota Pekalongan sangat menjanjikan dan bisa bersaing dengan daerah-daerah lainnya.\r\n\r\n\"Kami ingin dengan sarasehan ini mampu menggali kebutuhan para KTT di Kota Pekalongan,apa permasalahan dan usulannya dengan harapan nanti  akan kami tampung  dan usulkan ke jajaran provinsi maupun pusat ataupun di tingkat Kota Pekalongan sendiri agar kelompok ternak ini bisa lebih berkembang,aktif,disamping itu bisa mengembangkan hasil produksi ternaknya. Pasalnya,potensi pertanian dan peternakan disini prospeknya sangat luar biasa ke depan dengan jumlah KTT dan ternak yang dimiliki sudah banyak dan sangat berpotensi untuk dikembangkan lebih maju lagi,\"terangnya.\r\n\r\nMenurut Saiful,kondisi banjir yang melanda di sejumlah wilayah di Jawa Tengah khususnya Kota Pekalongan memang harus disiasati para KTT ini agar tetap bisa menjalankan aktivitasnya dalam keberlangsungan hasil produksi maupun menjamin kesehatan ternaknya. Menyikapi permasalahan banjir yang melanda saat ini,lanjutnya,selama kandang ternak tidak  kebanjiran,masih bisa berproduktif bagus. Namun,jika di wilayah itu kandang ternaknya terdampak banjir secara terus menerus memang seharusnya tempat peternakan yang dimiliki peternak perlu direlokasi ke tempat yang lebih aman, sehingga produksi dan kesehatan hewannya bisa terjamin.\r\n\r\n\"Kami ingin membantu para KTT ini agar lebih maju. Kami apresiasi kinerja Dinperpa setempat yang sudah menjalin hubungan harmonis dengan para peternak,rutin memberikan pembinaan kepada mereka,dan kami selaku di jajaran Provinsi siap membantu bila ada KTT yang ingin mengajukan bantuan dengan syarat harus ada proposal pengajuannya untuk bisa kami verifikasi dan evaluasi,\"bebernya.\r\n\r\nSementara itu,Kepala Dinperpa Kota Pekalongan melalui Kepala Bidang Peternakan dan Kesehatan Hewan, Ilena Palupi,SPt,MSi menjelaskan bahwa dalam fasilitasi sarasehan ini diikuti oleh 45 orang perwakilan kelompok peternak ruminansia yang bergerak dalam bidang peternakan sapi,kambing dan domba khususnya yang terdampak musibah banjir di Kota Pekalongan. Dalam musibah banjir saat ini yang melanda Kota Pekalongan,Ilena mengakui para peternak tersebut mengalami beberapa kendala diantaranya sulitnya mencari pakan ternak, penyediaan air bersih untuk hewan ternak yang berkurang,terjangkitnya penyakit pada hewan ternak apabila gizi pakannya tidak terpenuhi dengan baik,dan sebagainya.\r\n\r\n\"Untuk itu,sarasehan ini sekaligus sebagai ajang diskusi oleh kami dengan para KTT mengenai prospek ke depan terutama dalam menghadapi musibah banjir. Selain itu,bertujuan untuk menguatkan kelembagaan dan menjalin silaturahmi bersama dalam mengkaji dan menemukan solusi permasalahan yang ada saat ini,\" paparnya.\r\n\r\nIlena menyebutkan,beberapa KTT di Kota Pekalongan yang terdampak banjir diantaranya berada di wilayah Kelurahan Degayu,Panjang Baru,Pasirkratonkramat,dan Tirto yang sampai saat ini wilayah tersebut masih tergenang banjir dengan ketinggian bervariasi.\r\n\r\n\"Secara umum kendalanya adalah sulitnya mencarikan pakan untuk ternaknya jika keadaannya masih banjir seperti sekarang ini. Untuk masalah kesehatan ternak,dari jajaran Dinperpa sebelum kejadian banjir sudah rutin mengawal dan memberikan pembinaan KTT,menyuplai pemberian vitamin dan obat-obatan untuk hewan ternak mereka agar tidak mudah terserang penyakit. Nanti pun usai banjir telah berangsur surut,kami akan kembali mendatangi kandang-kandang ternak milik KTT ini untuk memastikan ternak-ternak mereka tetap sehat,aman dan terjamin,dan melakukan pendampingan khusus untuk KTT dalam menangani masalah-masalah yang dihadapinya,\"pungkasnya.'),
(3, 'Warga Lapas Pekalongan Belajar Budidaya Bebek Dan Pepaya California', 'Pengumuman', '2022-08-22 14:39:29', 'Dalam rangka meningkatkan mutu dan kualitas Sumber Daya Manusia (SDM) Warga Binaan Pemasyarakatan (WBP), Lapas Kelas II A Pekalongan terus berinovasi dalam melakukan program pembinaan kemandirian WBP. Kali ini, inovasi yang tengah dikembangkan yakni budidaya bebek petelur, ayam dan Pepaya (Kates) California.\r\n\r\nKepala Seksi Kegiatan Kerja Lapas II A Pekalongan, Hariyadi menyampaikan bahwa budidaya ini pertama kali dikembangkan pada Mei lalu. Program Pembinaan baik Kepribadian maupun Kemandirian yang terus diberikan sampai dengan saat ini, Warga Binaan yang ada terus diajarkan dan diarahkan untuk bisa inovatif.\r\n\r\nSeperti halnya dalam menanam sayuran dan beternak ayam/bebek, Warga Binaan yang mengikuti program tersebut diajarkan dari masa pembibitan hingga panen. Untuk jenis sayuran yang dipilih adalah pepaya california.\r\n\r\n“Bibit pepaya jenis california kami pilih karena relatif banyak peminatnya di pasaran. Sedangkan, budidaya bebek dipilih sebagai inovasi baru, mengingat sebelumnya di bidang peternakan juga telah melakukan budidaya ikan,”ungkap Hariyadi di Kantor Lapas kelas IIA Pekalongan.\r\n\r\nLanjutnya,bibit bebek dan ayam sejumlah 100 ekor bebek dan ayam berusia 1 bulan. Sementara bibit pepaya California sebanyak 75 bibit yang saat ini tengah dibudidayakan oleh warga binaan.\r\n\r\nTerkait target panen,  ditargetkan dua bulan ke depan sudah dapat dilakukan panen. Dimana hasilnya akan di jual dan akan dibagi untuk operasional pembelian bibit kembali, pemberian upah bagi warga binaan dan setoran Pendapatan Negara Bukan Pajak (PNBP) kepada negara. \r\n\r\nHariyadi berharap, peningkatan kemandirian kegiatan kerja tersebut bisa berjalan dengan lancar dan tidak terhambat oleh kondisi alam seperti banjir dan rob.\r\n\r\n“Di bidang pertanian, kami menggunakan trik baru dengan dibuatkan undukan tanah agar tanaman tidak tenggelam apabila terkena banjir,”imbuhnya.');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` char(5) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `nama`) VALUES
('G001', 'Nafas bebek tidak stabil'),
('G002', 'Bebek sering mengepakkan sayap'),
('G003', 'Penurunan konsumsi ransum'),
('G004', 'Penurunan produksi telur'),
('G005', 'Bebek mengalami gangguan pertumbuhan'),
('G006', 'Tulang dan paruh bebek lunak'),
('G007', 'Penurunan berat badan bebek'),
('G008', 'Ada kelainan pada kaki bebek'),
('G009', 'Ada bintik merah pada kulit bebek'),
('G010', 'Kulit bebek kering'),
('G011', 'Bulu bebek mudah patah dan rontok'),
('G012', 'Bulu bebek sering berdiri sendiri'),
('G013', 'Bebek terkena diare'),
('G014', 'Bebek terkena demam'),
('G015', 'Warna feses bebek kekuningan'),
('G016', 'Leher bebek lemas seperti tidak bertulang'),
('G017', 'Bebek sering duduk terdiam lama'),
('G018', 'Bebek lemas'),
('G019', 'Bebek tidak mau makan'),
('G020', 'Warna feses bebek kehijauan'),
('G021', 'Frekuensi nafas bebek lebih cepat'),
('G022', 'Bebek mengalami bersin'),
('G023', 'Infeksi pada kaki dan/atau sayap bebek'),
('G024', 'Bebek berjalan sempoyongan'),
('G025', 'Bebek mengalami lumpuh'),
('G026', 'Warna kulit bebek biru keunguan'),
('G027', 'Ada kotoran yang keluar dari mata bebek'),
('G028', 'Ada bintik merah pada paruh bebek '),
('G029', 'Keluar cairan dari mata bebek'),
('G030', 'Keluar cairan dari paruh bebek'),
('G031', 'Bebek mengalami kejang-kejang'),
('G032', 'Feses bebek bercampur dengan darah'),
('G033', 'Wajah bebek mengalami pembengkakan'),
('G034', 'Bebek sering berdiri dengan satu kaki dan kepala tertunduk'),
('G035', 'Mata bebek sering tertutup'),
('G036', 'Sayap bebek sering menggantung'),
('G037', 'konsumsi air meningkat'),
('G038', 'Feses bebek encer'),
('G039', 'Mata bebek buta'),
('G040', 'Hidung (sinus) bebek bengkak'),
('G041', 'Sekresi mata bebek berbuih'),
('G042', 'Ada benjolan disekitar kantung mata bebek'),
('G043', 'Pendarahan dibawah kulit kaki bebek'),
('G044', 'Bintik merah pada kaki bebek'),
('G045', 'Cangkang telur lembek'),
('G046', 'Tubuh bebek gemetar');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_user`
--

CREATE TABLE `gejala_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `gejala` char(5) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala_user`
--

INSERT INTO `gejala_user` (`id`, `id_user`, `gejala`) VALUES
(1, 1, 'G003'),
(2, 1, 'G007'),
(3, 1, 'G031'),
(4, 2, 'G006'),
(5, 2, 'G034'),
(6, 2, 'G039'),
(7, 2, 'G043'),
(12, 4, 'G007'),
(13, 4, 'G010'),
(14, 4, 'G041'),
(15, 4, 'G043'),
(16, 4, 'G044'),
(17, 4, 'G045'),
(18, 5, 'G005'),
(19, 5, 'G007'),
(20, 5, 'G025'),
(21, 5, 'G028'),
(22, 5, 'G046'),
(23, 6, 'G003'),
(24, 6, 'G005'),
(25, 6, 'G035'),
(26, 6, 'G036'),
(27, 7, 'G002'),
(28, 7, 'G003'),
(29, 7, 'G004'),
(30, 7, 'G006'),
(31, 7, 'G007'),
(32, 8, 'G003'),
(33, 8, 'G004'),
(34, 8, 'G005'),
(35, 8, 'G006'),
(36, 8, 'G007'),
(37, 9, 'G001'),
(38, 9, 'G004'),
(39, 9, 'G005'),
(40, 9, 'G007'),
(41, 9, 'G045'),
(42, 10, 'G006'),
(43, 10, 'G010'),
(44, 10, 'G011'),
(45, 10, 'G012'),
(46, 10, 'G019'),
(47, 10, 'G022'),
(48, 11, 'G001'),
(49, 11, 'G002'),
(50, 11, 'G003'),
(51, 11, 'G004'),
(52, 11, 'G005'),
(53, 11, 'G006'),
(54, 12, 'G001'),
(55, 12, 'G002'),
(56, 12, 'G003'),
(57, 12, 'G004'),
(58, 12, 'G005'),
(59, 12, 'G006'),
(60, 13, 'G001'),
(61, 13, 'G002'),
(62, 13, 'G003'),
(63, 13, 'G004'),
(64, 13, 'G005'),
(65, 13, 'G006'),
(66, 14, 'G001'),
(67, 14, 'G002'),
(68, 14, 'G003'),
(69, 14, 'G004'),
(70, 15, 'G001'),
(71, 15, 'G002'),
(72, 15, 'G003'),
(73, 15, 'G004'),
(74, 16, 'G001'),
(75, 16, 'G002'),
(76, 16, 'G003'),
(77, 16, 'G004'),
(78, 17, 'G001'),
(79, 17, 'G002'),
(80, 17, 'G003'),
(81, 17, 'G004'),
(82, 17, 'G005'),
(83, 17, 'G006'),
(84, 18, 'G001'),
(85, 18, 'G002'),
(86, 18, 'G003'),
(87, 18, 'G004'),
(88, 19, 'G001'),
(89, 19, 'G002'),
(90, 19, 'G003'),
(91, 19, 'G004'),
(92, 20, 'G001'),
(93, 20, 'G002'),
(94, 20, 'G003'),
(95, 20, 'G004'),
(96, 21, 'G001'),
(97, 21, 'G002'),
(98, 21, 'G003'),
(99, 21, 'G004'),
(100, 22, 'G001'),
(101, 22, 'G002'),
(102, 22, 'G003'),
(103, 22, 'G004'),
(104, 23, 'G001'),
(105, 23, 'G002'),
(106, 23, 'G003'),
(107, 23, 'G004'),
(108, 24, 'G001'),
(109, 24, 'G002'),
(110, 24, 'G003'),
(111, 24, 'G004'),
(112, 24, 'G005'),
(113, 24, 'G006'),
(114, 25, 'G001'),
(115, 25, 'G002'),
(116, 25, 'G003'),
(117, 25, 'G004'),
(118, 26, 'G001'),
(119, 26, 'G002'),
(120, 26, 'G003'),
(121, 26, 'G004'),
(122, 27, 'G001'),
(123, 27, 'G002'),
(124, 28, 'G001'),
(125, 28, 'G002'),
(126, 28, 'G003'),
(127, 28, 'G004'),
(128, 29, 'G001'),
(129, 29, 'G004'),
(130, 29, 'G019'),
(131, 29, 'G021'),
(132, 29, 'G041'),
(133, 30, 'G001'),
(134, 30, 'G002'),
(135, 30, 'G003'),
(136, 30, 'G004'),
(137, 30, 'G005'),
(138, 30, 'G006'),
(139, 30, 'G007'),
(140, 30, 'G008'),
(141, 30, 'G009'),
(142, 30, 'G010'),
(143, 31, 'G001'),
(144, 31, 'G002'),
(145, 31, 'G019'),
(146, 31, 'G021'),
(147, 31, 'G024'),
(148, 31, 'G038'),
(149, 31, 'G039'),
(150, 31, 'G046');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` char(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `penyebab` text NOT NULL,
  `solusi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama`, `penyebab`, `solusi`) VALUES
('P1', 'Bebek Stress', 'Bebek mengalami perubahan perilaku secara tiba-tiba. Bebek yang stres akan terlihat murung dan lebih sering menyendiri, tidak bergabung dengan kerumunannya. Stres bukanlah penyakit menular. Akan tetapi, penyakit ini harus segera diatasi dengan tepat agar i', '1)	Pemberian kolam air pada kandang bebek.\r\n2)	Kandang harus memiliki sirkulasi udara yang baik.\r\n3)	Jauhkan dari kebisingan.'),
('P10', 'Coccidiosis', 'Penyakit berak darah yang disebabkan oleh protozoa dari keluarga Eimeriidae yang menyerang dan berkembang di dalam tubuh bebek terutama dalam saluran pencernaan dan bisa berlangsung dalam beberapa hari.', 'Untuk pencegahan dan atau pengobatan penyakit Coccidiosis dapat dipakai obat-obatan seperti : “furazolidone, nitrofurazone atau nicardbazin”. Obat-obatan tersebut dicampurkan kedalam pakan itik atau dilaturkan kedalam air minum. Untuk membantu kontrol penyakit Coccidiosis, berikan vitamin A dengan konsentrasi tinggi. Produk – produk untuk penyakit ini sudah tersedia cukup banyak serta mudah untuk mendapatkannya.'),
('P11', 'Coryza', 'Penyakit menular yang menyerang sistem pernafasan dan disebabkan oleh bakteri.', 'Pengobatan dapat dilakukan dengan sulfonamide seperti sulfadimethoxine, sulfaquinoxaline, sulfamethazine semuanya efektif, tapi sulfadimethoxine merupakan obat yang paling aman. Pengobatan yang paling efesien adalah dengan menyuntikan “Streptomycin Sulphat” secara individual dengan dosis 0,4 gram rendah dengan patokan berat badannya. Penyuntikan dapat diulang sekali dalam sehari untuk selama beberapa hari, dengan dosis Streptomycin setengah dari dosis diatas. Sedangkan pemakaian antibiotik yang dapat membantu antara lain menggunakan tetracycline, erythromycin, spectinomycin dan tylosin.'),
('P12', 'Salmonellosis', 'Penyakit yang dapat menyerang bebek segala umur namun lebih sering terjadi pada anak bebek ini disebabkan oleh bakteri salmonella sp. Faktor lingkungan yang panas karena pergantian musim atau fluktuasi temperature yang tajam akan memudahkan timbulnya penya', 'Obat-obatan yang dapat dipergunakan untuk bebek yang terserang salmonelosis adalah antibiotik ataupun antibakteri. Jika kesembuhan tidak tuntas, maka risiko terjadinya carrier akan sangat besar. Uji sensivitas antibiotik merupakan cara yang paling tepat untuk memilih obat yang sesuai. Berbagai jenis obat yang dapat digunakan untuk menanggulangi paratifoid antara lain adalah furazolidon, gentamisin, spektinomisin, sulfametazin dan kelompok kuinolon (asam nalidiksik atau asam oksolinat, flumekuin, enrofloksasin, norfloksasin). Pengobatan sebaiknya disertai oleh eliminasi faktor pendukung terjadinya infeksi dan pelaksanaan sanitasi atau desinfeksi yang ketat.'),
('P13', 'Sinusitis', 'Penyakit ini dikarenakan tata laksana pemeliharaan yang buruk, kekurangan mineral dalam pakan. Akibatnya itik menjadi rentan mendapat infeksi sekunder. Sinusitis adalah infeksi sinus. Penyakit ini sebenarnya adalah akibat dari penyakit jenis lain', 'Pencegahan hanya bisa dilakukan dengan tatalaksana pemeliharaan yang baik. Pengobatan bagi itik yang sakit adalah disuntik dengan antibiotika (streptomycin) ke dalam sinus yang menderita. Dosis pada itik dewasa adalah sebanyak 0,5 gram streptomycin yang dilarutkan ke dalam 20 cc aquadest. Larutan ini disuntikan ke dalam sinus. Untuk pengobatan yang lebih muda, dosisnya dikurangi. Pengobatan seperti ini dilakukan sekali dalam 48 jam sampai sembuh.'),
('P14', 'Aflatoksikosis', 'Aflatoksikosis yang menyerang bebek pada umumnya disebabkan oleh “Aflatoksin” yang dihasilkan oleh jamur “Asperqillus flavus”. Aflatoksin menyerang hati, sehingga bebek yang terserang penyakit ini hatinya membesar.', 'Pengobatan hanya bisa diusahakan dengan memberikan antibiotika yang dicampurkan dalam air minum atau pakannya. sedangkan untuk pencegahan bisa dilakukan dengan pemeliharaan kebersihan lingkungan kandang, penaburan kapur di lantai kandang, pembersihan kandang agar bebas dari serangga'),
('P15', 'Avian influenza', 'penyakit viral akut pada unggas yang disebabkan oleh virus influenza type A subtipe H5 dan H7, Semua unggas dapat terserang virus influenza A. Penyakit ini bersifat zoonosis dan angka kematian sangat tinggi karena dapat mencapai 100%. Virus AI dikenal seba', 'Belum ditemukan obat yang dapat menyembuhkan Avian Influenza. Usaha yang dapat dilakukan adalah membuat kondisi badan unggas cepat membaik dan merangsang nafsu makannya dengan memberikan tambahan vitamin dan mineral, serta mencegah infeksi sekunder dengan pemberian antibiotik. Dapat pula diberikan pemanasan tambahan pada kandang. Selain itu untuk pencegahan dapat dilakukan dengan vaksinasi unggas secara menyeluruh dengan jenis vaksin yang digunakan berdasarkan rekomendasi OIE, yaitu vaksin konvensional berupa vaksin inaktif, atau vaksin rekombinan (vaksin dengan vektor virus Fowlpox (Pox-AI:H5) atau vaksin subunit yang dihasilkan oleh ekspresi Baculovirus yang hanya mengandung antigen H5 atau H7. Dosis vaksinasi yang disarankan adalah 0,5 ml untuk unggas dewasa dengan rute intra musculer, sedangkan unggas muda 0,2 ml dengan rute sub kutan'),
('P2', 'Rickets duck (penyakit tulang)', 'Penyakit pada bebek yang disebabkan oleh kekurangan vitamin D, mineral dan kalsium (Ca) dan Fosfor (P).', 'Untuk saran pengobatan pada ransum harus mendapatkan mineral mix dengan kandungan Ca dan P yang memadai. Kemudian bebek diberi vitamin D dengan dosis 3 kali lipat dari biasanya. Untuk lebih mempermudah bisa menggunakan mineral mix.'),
('P3', 'Antibiotika dermatitis', 'Penyakit yang disebabkan oleh pemakaian antibiotic yang berlebihan. Biasanya terjadi karena pengobatan terhadap penyakit tertentu, tapi dengan dosis yang berlebihan.', 'Memberikan bebek obat pencahar seperti tetes tebu.'),
('P4', 'Mycosis', 'Bebek mengalami keracunan akibat zat beracun yang diproduksi oleh jamur yang disebut sebagai mitoksin.', '1)	Pakan tidak boleh disimpan dalam keadaan lembab.\r\n2)	kandang dan tempat pakan harus sering dibersihkan untuk mencagah berkembangnya jamur.'),
('P5', 'Aspergillosis', 'Penyakit yang disebabkan oleh jamur aspergilus fumigatus yang menyerang saluran pernafasan unggas, bebek bisa terserang penyakit ini karena menghirup sporanya dalam jumlah yang besar.', 'Menggunakan obat yang memiliki bahan aktif Amphotericin-B, 5-fluorocytosine, eniconazole, fungicidin dan Ketoconazole. Atau memberi ransum dengan tembaga sulfat. Sebanyak 60 gram tembaga sulfat per 100 gram pakan selama 6 hari. Dalam skala luas, melarutkan tembaga sulfat ke dalam air minum dengan perbandingan antara tembaga sulfat dan air 1:2000. Memberikan tetracycline sebanyak 200 mg/Liter pada air minum selama 5 hari.'),
('P6', 'Botulism (limberneck)', 'Penyakit yang disebabkan oleh racun botulism, yang bisa berakibat sangat fatal karena racun bekerja menyerang sistem saraf dan menyebabkan kelumpuhan.', '1)   Memberi air yang banyak dengan cara disepet agar masuk kesaluran pencernaan.\r\n2)   Memberikan obat antitoksin botulism.'),
('P7', 'Fowl cholera (kolera unggas)', 'Penyakit menular yang menyerang unggas peliharaan dan unggas liar dengan angka mordibilitas dan mortalitas tinggi. Disebabkan oleh bakteri Pasteurella Multocida.', '1)	Preparat sulfa\r\na.	Sulfaquinoxalin 0,05% dalam air minum.\r\nb.	Sulfametasin dan sodium sulfametasin 0,5-1,0% dalam makanan atau 0,1% dalam air minum.\r\nc.	Sulfamerasin 0,5% dalam makanan atau 0,2% dalam air minum. Pemberian per oral dengan dosis 120 mg/kg berat badan.\r\n2)	Antibiotika\r\na.	Streptomycin 150.000 mg dapat mencegah kematian bila diberikan pada awal infeksi\r\nb.	Terramisin 25 mg/kg berat badan.'),
('P8', 'Cacar bebek (fowl pox)', 'Penyakit yang disebabkan oleh virus yang bernama Avian DNA Pox Virus, penyakit ini bisa menular dengan mudah ke bebek lain yang sehat.', 'Pencegahannya hanya dengan vaksinasi. Dua jenis vaksin aktif yang beredar di Indonesia dan dapat digunakan untuk imunisasi/vaksinasi unggas untuk mencegah timbulnya cacar, yaitu: vaksin Fowl Pox, Pigeon Pox dan Medivac Pox.'),
('P9', 'White eye (mata putih)', 'Penyakit yang menyerang bebek segala umur tetapi yang paling peka adalah bebek yang berumur kurang dari 2 bulan. Biasanya jiga bebek yang kurang vitamin A mudah terserang penyakit ini.', 'Pencegahan dan pengobatan bisa dilakukan dengan antibiotika yang dicampur kedalam air minum atau pakan. Antibiotika yang sering digunakan adalah Oxytetracycline (terramycin) atau Chlortetracycline (aureomycin) dengan dosis 10 gram per 100 kg pakan atau 10 gram dalam 40 galon air minum akan membantu mengontrol penyakit White Eye');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `no` int(11) NOT NULL,
  `id` char(5) NOT NULL,
  `G001` enum('0','1') DEFAULT '0',
  `G002` enum('0','1') DEFAULT '0',
  `G003` enum('0','1') DEFAULT '0',
  `G004` enum('0','1') DEFAULT '0',
  `G005` enum('0','1') DEFAULT '0',
  `G006` enum('0','1') DEFAULT '0',
  `G007` enum('0','1') DEFAULT '0',
  `G008` enum('0','1') DEFAULT '0',
  `G009` enum('0','1') DEFAULT '0',
  `G010` enum('0','1') DEFAULT '0',
  `G011` enum('0','1') DEFAULT '0',
  `G012` enum('0','1') DEFAULT '0',
  `G013` enum('0','1') DEFAULT '0',
  `G014` enum('0','1') DEFAULT '0',
  `G015` enum('0','1') DEFAULT '0',
  `G016` enum('0','1') DEFAULT '0',
  `G017` enum('0','1') DEFAULT '0',
  `G018` enum('0','1') DEFAULT '0',
  `G019` enum('0','1') DEFAULT '0',
  `G020` enum('0','1') DEFAULT '0',
  `G021` enum('0','1') DEFAULT '0',
  `G022` enum('0','1') DEFAULT '0',
  `G023` enum('0','1') DEFAULT '0',
  `G024` enum('0','1') DEFAULT '0',
  `G025` enum('0','1') DEFAULT '0',
  `G026` enum('0','1') DEFAULT '0',
  `G027` enum('0','1') DEFAULT '0',
  `G028` enum('0','1') DEFAULT '0',
  `G029` enum('0','1') DEFAULT '0',
  `G030` enum('0','1') DEFAULT '0',
  `G031` enum('0','1') DEFAULT '0',
  `G032` enum('0','1') DEFAULT '0',
  `G033` enum('0','1') DEFAULT '0',
  `G034` enum('0','1') DEFAULT '0',
  `G035` enum('0','1') DEFAULT '0',
  `G036` enum('0','1') DEFAULT '0',
  `G037` enum('0','1') DEFAULT '0',
  `G038` enum('0','1') DEFAULT '0',
  `G039` enum('0','1') DEFAULT '0',
  `G040` enum('0','1') DEFAULT '0',
  `G041` enum('0','1') DEFAULT '0',
  `G042` enum('0','1') DEFAULT '0',
  `G043` enum('0','1') DEFAULT '0',
  `G044` enum('0','1') DEFAULT '0',
  `G045` enum('0','1') DEFAULT '0',
  `G046` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`no`, `id`, `G001`, `G002`, `G003`, `G004`, `G005`, `G006`, `G007`, `G008`, `G009`, `G010`, `G011`, `G012`, `G013`, `G014`, `G015`, `G016`, `G017`, `G018`, `G019`, `G020`, `G021`, `G022`, `G023`, `G024`, `G025`, `G026`, `G027`, `G028`, `G029`, `G030`, `G031`, `G032`, `G033`, `G034`, `G035`, `G036`, `G037`, `G038`, `G039`, `G040`, `G041`, `G042`, `G043`, `G044`, `G045`, `G046`) VALUES
(1, 'P1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(2, 'P10', '0', '0', '1', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(3, 'P11', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(4, 'P12', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '0', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0'),
(5, 'P13', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '1', '0', '0', '0', '0'),
(6, 'P14', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0'),
(7, 'P15', '0', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '0', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '1'),
(8, 'P2', '0', '0', '0', '0', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(9, 'P3', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(10, 'P4', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(11, 'P5', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(12, 'P6', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(13, 'P7', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(14, 'P8', '0', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(15, 'P9', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `saran_keluhan`
--

CREATE TABLE `saran_keluhan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `saran_keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 NOT NULL,
  `no_telp` bigint(20) NOT NULL,
  `tgldiagnosa` date NOT NULL DEFAULT current_timestamp(),
  `analisa` char(5) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `no_telp`, `tgldiagnosa`, `analisa`) VALUES
(1, 'test', 0, '2022-08-22', 'P10'),
(2, 'coba 1', 0, '2022-08-22', 'P12'),
(4, 'uji lagi', 0, '2022-08-22', 'P15'),
(5, 'test', 0, '2022-08-22', 'P2'),
(6, 'test', 87124879622, '2022-08-22', 'P12'),
(7, 'coba 2', 88128721648, '2022-08-22', 'P1'),
(8, 'test lagi', 89127218471, '2022-08-22', 'P2'),
(9, 'coba 1', 87124879622, '2022-08-22', 'P2'),
(10, 'test', 86412827384, '2022-08-22', 'P3'),
(11, 'muslimin', 8712498172, '2022-08-22', 'P1'),
(12, 'muslimin', 8712498172, '2022-08-22', 'P1'),
(13, 'muslimin', 8712498172, '2022-08-22', 'P1'),
(14, 'muslimin', 8712498172, '2022-08-22', 'P12'),
(15, 'coba 1', 87124879622, '2022-08-22', 'P12'),
(16, 'test', 9328592, '2022-08-22', 'P12'),
(17, 'muslimin', 88128721648, '2022-08-22', 'P1'),
(18, 'muslimin', 88128721648, '2022-08-22', 'P12'),
(19, 'muslimin', 88128721648, '2022-08-22', 'P12'),
(20, 'muslimin', 88128721648, '2022-08-22', 'P12'),
(21, 'muslimin', 88128721648, '2022-08-22', 'P12'),
(22, 'muslimin', 88128721648, '2022-08-22', 'P12'),
(23, 'muslimin', 88128721648, '2022-08-22', 'P12'),
(24, 'muslimin', 9328592, '2022-08-22', 'P1'),
(25, 'muslimin', 86412827384, '2022-08-22', 'P12'),
(26, 'muslimin', 86412827384, '2022-08-22', 'P12'),
(27, 'coba', 8712498172, '2022-08-22', 'P1'),
(28, 'coba 1', 86412827384, '2022-08-22', 'P12'),
(29, 'test', 88128721648, '2022-08-23', 'P7'),
(30, 'coba', 86412827384, '2022-08-24', 'P2'),
(31, 'Muslimin', 88128721648, '2022-09-24', 'P7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala_user`
--
ALTER TABLE `gejala_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `saran_keluhan`
--
ALTER TABLE `saran_keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gejala_user`
--
ALTER TABLE `gejala_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=499;

--
-- AUTO_INCREMENT for table `saran_keluhan`
--
ALTER TABLE `saran_keluhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
