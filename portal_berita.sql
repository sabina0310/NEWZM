-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 01:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id_ab` int(11) NOT NULL,
  `hlm` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id_ab`, `hlm`, `judul`, `deskripsi`) VALUES
(1, 'aboutus', 'About Us', '<p>Newzm adalah platform mengenai kejadian atau peristiwa-peristiwa yang terjadi di&nbsp;Malang dan sekitarnya, dimana terdapat berita mengenai kategori ekonomi, pendidikan, dan rekomendasi untuk kuliner dan juga wisata di Malang.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `id_post` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `nama`, `email`, `comment`, `id_post`, `status`) VALUES
(2, 'Sabina', 'ervina@gmail.com', 'Emma is a self-proclaimed matchmaker who meddles in the romantic relationships of her friends. Her misguided matches and romantic missteps lead her to find love that has been there all along.', 11, 'Unapproved'),
(3, 'Ervina', 'ervina@gmail.com', '<p>Emma is a self-proclaimed matchmaker who meddles in the romantic relationships of her friends. Her misguided matches and romantic missteps lead her to find love that has been there all along.</p>\r\n', 12, 'Unapproved'),
(7, 'safa', 'bin@gmail.com', '<p>bagus!</p>\r\n', 13, 'Approved'),
(8, 'mm', 'bin@gmail.com', ',n', 12, 'Unapproved'),
(9, 'Afif', 'afifanuraini24@gmail.com', '<p>The news is very insightful for me</p>\r\n', 22, 'Approved'),
(11, 'Afif', 'afifanuraini24@gmail.com', 'The news is very insightful for me', 22, 'Unapproved');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `hlm` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `hlm`, `address`, `phone`, `email`) VALUES
(1, 'contact', 'Kunci, Kalisongo, Kec. Dau, Kabupaten Malang, Jawa Timur 65151', '034134567890', 'newzm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Culinary'),
(3, 'Economy'),
(4, 'Education'),
(6, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_msg` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` mediumtext NOT NULL,
  `msg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_msg`, `name`, `email`, `subject`, `msg`) VALUES
(1, 'm', 'm@gmail.com', 'hjfg', 'vbn');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `headline` longtext NOT NULL,
  `isi` longtext NOT NULL,
  `trending` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `id_kategori`, `id_author`, `judul`, `headline`, `isi`, `trending`, `image`, `date`, `status`) VALUES
(11, 3, 7, 'Pendaftaran Subsidi Tepat BBM di 4 SPBU Kota Malang', '<p>Empat SPBU di Kota Malang membuka pendaftaran subsidi tepat BBM. Ini juga agar mempermudahkan masyarakat dalam mengakses.</p>\r\n', '<p>ewzm. - Empat SPBU di Kota Malang membuka pendaftaran subsidi tepat BBM. Ini juga agar mempermudahkan masyarakat dalam mengakses, Sabtu, (16/07/2022).<br />\r\nLayanan ini untuk mempermudah masyarakat mendaftar subsidi tepat BBM.<br />\r\n&ldquo;Kami ingin mempermudah masyarakat mendaftar. Juga ada booth yang sama di sejumlah daerah lain,&rdquo; Jelas Arya Yusa Dwicandra, Section Head Communication Relations Pertamina Patra Niaga Region Jatimbalinus.<br />\r\nEmpat SPBU tersebut ialah di Fuel Terminal Malang di Jalan Halmahera, SPBU di Jalan Raya Tlogomas, SPBU di Jalan Raya Langsep, dan SPBU di Jalan Terusan Sulfat.<br />\r\nWarga sekitar yang sangat berpartisipasi dalam mengikuti pendaftaran di Mojokerto, Madiun, dan Malang pada 13 juli 2022.<br />\r\nSedangkan untuk saat ini telah memasuki 110.000 kendaraan yang telah mendaftar di 13 Kabupaten Kota di Indonesia.<br />\r\nPendaftaran subsidi tepat ini akan dilakukan secara bertahap di sejumlah kota/kabupaten agar server pendaftaran tidak lumpuh (down).<br />\r\n&ldquo;Waktu buka pada 1 Juli 2022, server kami sempat down, karena masyarakat antusias. Makannya, kami buka pendaftaran bertahap,&rdquo; tuturnya.<br />\r\nMenurunnya, 80 persen penyaluran BBM bersubsidi tidak tepat sasaran, baik solar maupun pertalite itu sendiri.<br />\r\nSubsidi yang tepat sasaran ini menjadi penting karena Pemerintah mengalokasikan dana sampai Rp 520 triliun untuk subsidi energi pada tahun 2022<br />\r\n&ldquo;Saat ini fokusnya hanya registrasi. Implementasinya masih belum. Kami masih menunggu arahan dari pemerintah. Pendaftaran ini khusus mobil. Sedangkan mobil masih belum,&rdquo; terangnya.<br />\r\nArya mengatakan bahwa, pendaftaran melalui website bukan untuk menyulitkan masyarakat, tetapi untuk melindungi masyarakat rentan yang berhak menikmati subsidi energi.<br />\r\n&ldquo;Pendataan ini untuk memastikan subsidi energi tepat sasaran sehingga anggaran Pemerintah benar-benar dinikmati yang berhak.&rdquo; jelasnya.<br />\r\nDiharapkan data ini bisa digunakan untuk menetapkan kebijaksanaan energi bersama pemerintah serta dapat mencegah potensi terjadinya penyalahgunaan atau kasus penyelewengan BBM subsidi di lapangan.</p>\r\n', 'No', 'pom bensin.jpg', '2022-12-01', 'Publish'),
(12, 3, 8, 'Gajah Mada Plaza Menjadi Pusat Perbelanjaan yang Ramai di Kunjungi Setiap Hari', '<p>Gajah Mada Plaza Yang terletak di JI.K.H. Agus Salim,no.18, Sukoharjo, klojen, Kota Malang merupakan sebuah Shoping Mall yang ramai di Kunjungi setiap harinya oleh Masyarakat kota Malang maupun masyarakat luar Kota Malang.</p>\r\n', '<p>ewmz. - Gajah Mada Plaza Yang terletak di JI.K.H. Agus Salim,no.18, Sukoharjo, klojen, Kota Malang merupakan sebuah Shoping Mall yang ramai di Kunjungi setiap harinya oleh Masyarakat kota Malang maupun masyarakat luar Kota Malang, Kamis, (27/10/2022).</p>\r\n\r\n<p><br />\r\nTempat yang strategis yaitu dipertengahan Kota Malang menjadi salah satu alasan tersendiri bagi masyarakat untuk membeli segala kebutuhan pokok dan juga kebutuhan lainya. Selain tempatnya bagus Gajah Mada Plaza juga menyediakan segala kebutuhan masyarakat dengan harga yang sangat bersahabat dengan masyarakat.</p>\r\n\r\n<p><br />\r\nGedung yang sudah lama dibangun itu menjadikan tempatnya terlihat agak kuno. Namun tidak dipungkiri masih banyak orang-orang yang senang berkunjung untuk berbelanja, membeli jajanan, dan lain-lain. Gedung yang berlantai tiga itu penuh terisi grosiran barang-barang yang lengkap.</p>\r\n\r\n<p><br />\r\nDilantai satu di dominasi Grosir baju, Sepatu, Aksesoris, hingga Handphone, sedangkan di lantai dua tersedia Minimarket yang menjual peralatan, dan berbagai kebutuhan rumah tangga ang lengkap.<br />\r\nSedangkan dilantai tiga sama halnya dengan lantai satu, ada banyak grosir berbagai aksesoris seperti jam tangan, gelang, parfume, sepatu, grosir pakaian dan lain-lain.</p>\r\n\r\n<p><br />\r\n&ldquo;Memang banyak sekali pengunjung disini setiap harinya, karena selain kebutuhan sandang dan pangan yang lengkap, harga-harganya juga murah,&rdquo; ujar jefri seorang penjual grosir baju saat di temui wartawan Newzm di lokasi.<br />\r\nGajah Mada Plaza hingga kini masih ramai di kunjungi dikarenakan harga berbagai grosiran yang di tuju konsumen terbilang murah.<br />\r\n&ldquo;Senengnya belanja disini itu harganya murah disini. Lengkap banget cocok buat yang pengen berbelanja aksesoris, pakaian dan lain-lain,&rdquo; terang Mela seorang pengunjung saat di wawancarai.<br />\r\nTidak hanya itu, didepan bangunan ini pun ada banyak jajanan, becak, dan warung-warung kecil yang mendominasi sehingga tampak seperti pasar tradisional pada umumnya.</p>\r\n', 'No', 'gajah mada.jpg', '2022-12-03', 'Publish'),
(13, 3, 7, 'Mengantisipasi Adanya Banjir, Pemkot Malang Mengajak Masyarakat Tidak Buang Sampah Sembarang', '<p><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Mengajak masyarakat semua agar tidak membuang sampah di saluran air.<br />\r\nPemerintah Kota Malang melalui Dinas Pekerjaan Umum, Penataan Ruang dan Kawasan Permukiman (DPUPRPKP) Kota Malang. Yang terletak di Jalan Mayjen Sungkono, Kota Malang.</span></span></p>\r\n', '<p>ewzm. - <span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Mengajak masyarakat semua agar tidak membuang sampah di saluran air</span>.</span>&nbsp;</span></span>Pemerintah Kota Malang melalui Dinas Pekerjaan Umum, Penataan Ruang dan Kawasan Permukiman (DPUPRPKP) Kota Malang. Yang terletak di Jalan Mayjen Sungkono, Kota Malang. Ini merupakan salah satu upaya yang dilakukan Pemkot Malang untuk mengantisipasi adanya banjir dan genangan air yang kerap melanda warga saat musim hujan tiba. Sedangkan itu, Plt Kepala DPUPRPKP Kota Malang Diah Ayu Kusuma Dewi menyampaikan, bahwa pihaknya kini sedang rutin melakukan kegiatan angkut sampah dan sedimen di saluran air. Tahun ini, sudah ada delapan saluran air yang telah dilakukan pengerukan, sebagai upaya normalisasi saluran air menjelang musim hujan datang. &ldquo;Kemarin, Senin (18/7/2022) kami melakukan pengerukan sampah dan sedimen di koridor Jalan Mayjen Sungkono. Di sana kami mengeruk dengan menggunakan alat berat dan manual,&rdquo; Jelasnya. Saat melakukan pengerukan, petugas banyak mendapati volume sampah dan sedimen yang dapat menyumbat saluran air. Diah mengatakan butuh waktu lebih dari tiga hari untuk menuntaskan pekerjaan di lokasi yang belum tersentuh penanganan intens selama beberapa tahun. Seluruh rangkaian pengerukan yang dilakukan di berbagai tempat, menurutnya Diah bagian dari arahan Wali Kota Malang, Sutiaji untuk meningkatkan kesiapan menghadapi musim hujan mendatang. Sementara itu, Diah meminta masyarakat untuk saling mengingatkan agar tidak membuang sampah dan material yang bisa mengganggu saluran nantinya. Kemudian perubahan iklim saat ini membawa konsekuensi sehingga kenaikan intensitas hujan dan cuaca ekstrim turut meningkat dan bencana alam hidrometeorologi di berbagai daerah saat ini. &ldquo;Harapannya tentu ini langkah nyata, kami mulai agar risiko banjir dan genangan bisa ditekan. Masih banyak lokasi lain, insyaallah kita tangani satu persatu, masyarakat monggo juga bantu buang sampah tidak di saluran,&rdquo; tutupnya.</p>\r\n', 'No', 'banjir (ekonomi).jpeg', '2022-12-01', 'Publish'),
(14, 4, 9, 'Dikbud Kota Malang Gelar Stufi Komparasi di Museum Pendidikan', '<p>Dinas Pendidikan dan Kebudayaan Kota Malang memyampaikan wacana terhadap semua siswa dimana wajib mengunjungi Museum Pendidikan di kawasan Tlogowaru Kota Malang</p>\r\n', '<p>ewzm.com - Dinas Pendidikan dan Kebudayaan Kota Malang memyampaikan wacana terhadap semua siswa dimana wajib mengunjungi Museum Pendidikan di kawasan Tlogowaru Kota Malang, Kamis (21/07/2022).<br />\r\nSementara itu, kunjungan ke museum akan meningkat, sehingga pengelola museum semakin bersemangat. Rencana museum juga akan menambah koleksinya.<br />\r\n&ldquo;Saat ini koleksinya masih dibawah standar. Kami akan kerjasama dengan perguruan tinggi agar bisa mengembangkan museum ini,&rdquo; jelas Suwarjana, Kadis Dikbud Kota Malang.<br />\r\nSelain itu Dikbud juga akan melakukan studi komparasi di museum pendidikan di Kota Bandung.<br />\r\n&ldquo;Biar anak-anak yang datang tidak hanya melihat mesin ketik jadul,&rdquo; tuturnya.<br />\r\nDalam rencana kerjanya juga ada target jumlah kunjungan, terutama bagi siswa sekolah. Sebab jumlah pengunjung umum di Museum Pendidikan masih minim sangat.<br />\r\nDalam kegiatanmengenalkan museum ini, Bidang Kebudayaan membuka kuota pendaftaran bagi siswa PAUD untuk belajar bersama di museum.<br />\r\nJumlah siswa ada 300 namun dibagi dalam dua kloter. Pengisi acaranya adalah Ria Enes dan boneka Suzan.<br />\r\n&ldquo;Kegiatan ini akan dibuat berseri. Sekarang siswa PAUD. Berikutnya siswa pendidikan dasar (SD-SMP). Setiap segmen, temanya beda,&rdquo; jelas Dian Kuntari, Kabid Kebudayaan.<br />\r\nDalam segmen anak usia dini, Ria Enes dan boneka Suzan mengenalkan tentang cita-cita.<br />\r\nKoleksi yang dipamerkan dimuseum akan disesuaikan dengan tema yang diangkat.&nbsp;(Aprilia Krisanti Maria Depaula Asa)<br />\r\n3.Judul : Harapan Bupati Malang Kepada 347 Kepala Sekolah yang Baru Dikukuhkan<br />\r\nIsi :&nbsp;<br />\r\nNewzm.com - Sebanyak 347 guru dikukuhkan sebagai pejabat fungsional kepala sekolah di Pendopo Kabupaten Malang, Bupati Malang memberikan harapannya untuk sektor pendidikan ke depan agar lebih baik, Rabu (13/07/22).<br />\r\nDari pengukuhan kepala sekolah yang jumlahnya banyak, Bupati Malang M Sanusi berharap, kepala sekolah yang baru dapat meningkatkan kualitas pendidikan yang lebih baik di Kabupaten Malang.<br />\r\nTahun ini sektor pendidikan mendapat penjatahan anggaran terbesar dibandingkan dengan anggaran pendapatan dan belanja daerah (APBD), yakni sebanyak Rp 1,46 triliun.<br />\r\nKata Sanusi, rata-rata nilai akhir siswa menjadi salah satu indikator kualitas pendidikan meningkat.<br />\r\n&ldquo;Targetnya setiap tahun ada peningkatan. Nanti kita lihat dan bandingkan dengan pencapaian tahun sebelumnya,&rdquo; jelas Sanusi.<br />\r\nSelain meningkatkan kualitas pendidikan, Sanusi berharap juga kepala sekolah dapat mendidik siswa untuk meningkatkan disiplin membuang sampah pada tempatnya, agar suasana bersih dapat tercipta di lingkungan sekolah.<br />\r\n&ldquo;Saya beberapa waktu lalu berkunjung ke Denmark. Di sana, kebersihan sangat dijaga. Tidak hanya oleh pemerintah. Tapi masyarakatnya pun mempunyai kesadaran untuk membuang sampah pada tempatnya,&rdquo; ungkapnya.<br />\r\n&ldquo;Nah, saya berharap hal ini juga bisa diterapkan di Kabupaten Malang, dimulai dengan membiasakan kepada siswa sejak di bangku sekolah,&rdquo; imbuhnya.<br />\r\nHarapan yang terakhir, Sanusi juga meminta kepala sekolah mengawasi para guru agar tidak melakukan perselingkuhan atau perceraian. Hal ini dapat berdampak buruk bagi sektor pendidikan, memberikan contoh yang tidak baik untuk siswa.<br />\r\nSebab, Sanusi mengaku kerap menerima laporan terkait adanya perceraian yang dilakukan oleh para guru.<br />\r\n&ldquo;Saya sering mendapat laporan perceraian di lingkungan ASN Kabupaten Malang. Setelah saya lihat ternyata rata-rata guru,&rdquo; jelasnya.&nbsp;(Maria Anggelina Olo Bere)<br />\r\n&nbsp;</p>\r\n', 'No', 'Dikbud Kota Malang Gelar Stufi Komparasi di Museum Pendidikan.jpg', '2022-12-02', 'Publish'),
(15, 6, 11, 'Bumi Perkemahan Bedengan menjadi Tempat Destinasi yang Menarik untuk di Kunjungi', '<p>Bumi Perkemahan Bedengan yang terletak di Jl.Raya Selokerto, Godehan, Solorejo, Kec. Dau, Malang merupakan destinasi wisata hutan pinus yang banyak peminatnya. Lokasi yang dekat dengan kawasan petik jeruk serta akses perjalan menuju lokasi cukup mudah menjadi alasan wisatawan untuk berkunjung.</p>\r\n', '<p>ewzm.com - Bumi Perkemahan Bedengan yang terletak di Jl.Raya Selokerto, Godehan, Solorejo, Kec. Dau, Malang merupakan destinasi wisata hutan pinus yang banyak peminatnya. Lokasi yang dekat dengan kawasan petik jeruk serta akses perjalan menuju lokasi cukup mudah menjadi alasan wisatawan untuk berkunjung. Meski jarak tempuh cukup dekat dari Malang namun ketika hampir sampai akses jalannya berupa makadam, sehingga perlu berhati-hati terutama jika musim hujan seperti sekarang karena jalanan yang licin dan berbatu. Untuk mengunjungi tempat wisata ini ada Persyaratan yang harus dipenuhi, hal ini disampaikan langsung oleh Chandra Budiarjo seorang karyawan Bedengan yang bertugas di penjagaan loket. &ldquo;syarat kalo mau kesini itu yaitu menunjuk &ndash; bukti vaksin 1 dan 2, dan untuk parkiranya berbeda-beda klasifikasi roda dua dan roda empat,&rdquo; terang Chandra saat diwawancarai wartawan Newzm. (20/10) Chandra menjelaskan untuk tiket pembayaran masuk ke Bumi Perkemahan Bedengan ini berbeda-beda antara motor dan mobil. Selain itu juga jika wisatawan yang ingin berkemping juga memiliki harga khusus beda dengan yang hanya sekedar berkunjung. &ldquo;Untuk tiket masuk:Rp.6.000.00 (tidsk menginap), Rp.12.000.00 (menginap) Parkir Motor:Rp.3.000.00 (tidak menginap), Rp.5.000.00 (menginap) Parkir Mobil:Rp.5.000.00 (tidak menginap), Rp.10.000.00 (menginap). Sedangkan sewa lokasi:Rp.25.000.00 (pertenda yang didirikan), Rp.125.000.00 (sewa lapangan untuk kegiatan)&rdquo; Ungkapnya. Untuk Fasilitas yang ada didalam Bumi Perkemahan Bedengan berupa Camp Ground yang luas, toilet yang banyak, mushola, aula, pusat informasi, serta parkiran warung yang luas. Secara keseluruhan tempatnya sangat luas, namun dibatasi maksimal 2.500 pengunjung. Ground camp ada banyak dan tersebar dibeberapa titik sehingga tidak terkumpul jadi satu. Dari segi tanah, tanahnya tidak full rumput sehingga kalau musim hujan beberapa bagian yang tidak tertutup rumput jadi becek dan licin. &ldquo;Kamping groundnya luas sekali, cocok untuk acara kamping rame-rame sama temen, gathering, bahkan oiknik keluarga. Air sungainya jernih, deras dan dingin banget, segerlah pokonya,&rdquo;ujar Winda seorang pengunjung saat wawancarai. Bumi Perkemahan Bedengan juga memiliki ada sungai kecil yang panjang dengan airnya jernih dan dangkal, kedalamannya kira-kira hanya setengah lutut orang dewasa. Jika ingin menikmati sensasi camping di pinggir sungai tempat ini sangat cocok dan recommended. Selain itu tempat wisata ini juga menyediakan warung yang buka 24 jam sehingga tidak perlu khawatir jika tidak membawa logistik pakan. situasi Bumi Perkemahan Bedengan saat ini sangat banyak wisatawan yang berkunjung untuk mengadakan kemping, Jumat, 21-10-2022. (Natalia Erlisa)</p>\r\n', 'Yes', 'bedengan (travel).jpeg', '2022-11-20', 'Publish'),
(16, 6, 11, 'Punya Potensi Wisata, Bupati Malang Buka Peluang Investasi', '<p>Banyaknya wilayah di Kabupaten Malang yang berpotensi untuk dijadikan wisata, tentunya hal ini akan menarik untuk investor. Saat ini, yang terlihat menarik untuk dijadikan acuan adalah Kawasan Prioritas Nasional Bromo Tengger Semeru dan Pesisir Malang Selatan.</p>\r\n', '<p>ewzm.com - Banyaknya wilayah di Kabupaten Malang yang berpotensi untuk dijadikan wisata, tentunya hal ini akan menarik untuk investor. Saat ini, yang terlihat menarik untuk dijadikan acuan adalah Kawasan Prioritas Nasional Bromo Tengger Semeru dan Pesisir Malang Selatan. Bupati Malang Drs H M. Sanusi MM juga membuka peluang investasi di sektor pariwisata.Pemerintah Mulai membuka wisata baru dan juga mengkreasikan wisata yang sudah eksis di Kota Malang. &ldquo;Sudah ada dua hotel di Kepanjen. Saya berharap ini menjadi salah satu titik balik pembangunan wisata di Kabupaten Malang, terutama di sekitar ibu kota (Kepanjen) dan (wilayah) selatan. Ada juga wisata Lembah Indah Malang di Ngajum. Itu bisa menjadi contoh investor yang sukses menciptakan peluang pariwisata di kabupaten&rdquo; tutur orang nomor satu di Pemkab Malang. Sementara itu, Wakil Bupati Malang Drs H Didik Gatot Subroto juga mengimbuhkan, strategi guna mendapatkan investor tengah disiapkan. &ldquo;Satu di antaranya dengan memberikan insentif berupa kemudahan bagi mereka (investor) yang bersedia untuk menanamkan modal di bidang wisata, juga yang lainnya,&rdquo; pungkasnya. Sebagai bentuk dukungan, pemkab juga melaksanakan pemetaan terhadap zona-zona wisata yang sudah eksis Misalnya di wilayah utara, ada Kebun Teh Wonosari, paralayang di (Desa) Sidodadi, juga UB Forest dan Gunung Mujur di Karangploso. Nah, tiga destinasi ini kalau disinergikan akan luar biasa. Wisata lain juga bisa berkolaborasi, seperti Coban Rondo, Desa Wisata Pujon Kidul, Bendungan Selorejo, dan beberapa destinasi lainnya. &ldquo;Di timur sudah jelas ada potensi yang luar biasa dari Taman Nasional Bromo Tengger Semeru dan di Selatan dengan gugusan pantainya&rdquo; Jelas mantan Ketua DPRD Kabupaten Malang itu. Tujuan adanya investor ini tidak untuk membuat destinasi wisata baru, melainkan meng-upgrade wisata yang sudah eksis. Sehingga nantinya wisata yang ada di Kabupaten Malang mampu semakin atraktif. &ldquo;Keberadaan wisata baru ini bukan untuk mematikan yang sudah ada, melainkan sebagai penguat agar bisa berkembang bersama-sama&rdquo; tutup Didik. (Jefriyanto)</p>\r\n', 'No', 'Punya Potensi Wisata, Bupati Malang Buka Peluang Investasi.jpg', '2022-12-08', 'Publish'),
(17, 6, 9, 'Bukit Budug Asu Menjadi Tempat Wisata Menarik untuk Dikunjung, Berikut Informasi Biaya, Rute, dan Eksotisme', '<p>Malang Raya merupakan wilayah yang penuh dengan destinasi wisata. Selain pantai, wilayah ini juga menawarkan pegunungan yang eksotis. Jadi tak heran jika banyak orang yang datang ke Malang untuk mengisi waktu saat liburan maupun sekadar berakhir pekan, Senin (07/02).</p>\r\n', '<p>ewzm.com - Malang Raya merupakan wilayah yang penuh dengan destinasi wisata. Selain pantai, wilayah ini juga menawarkan pegunungan yang eksotis. Jadi tak heran jika banyak orang yang datang ke Malang untuk mengisi waktu saat liburan maupun sekadar berakhir pekan, Senin (07/02). Salah satu wisata yang paling unik di Kabupaten Malang adalah Bukit Budug Asu. Bukit Budug asu sendiri berlokasi di kawasan Agrowisata Kebun Teh Wonosari, Lawang Kabupaten Malang Dan berada di Lereng Gunung Arjuna. Di namakan budug Asu karena di bukit tersebut masih banyak dijumpai anjing-anjing liar yang berkeliaran di sana tapi tenang, anda tidak perlu kewatir dengan anjing-anjingnya karena anjing yang berkeliaran di sana tidak buas justru ramah kepada pengunjung. Selain itu di sini kamu juga menikmati wahana lain seperti, climbing, budug asu camp, dan canyoning melewati tebing dengan bantuan tali sling baja diatasnya, memang seru dan sedikit menantang tapi menyenangkan. Untuk fasilitas dipuncak bukit Buduk Asu sudah tersedia toilet umum dan warung yang menyediakan makanan dan minuman, tapi untuk jaga-jaga jika warung tersebut tutup sebaiknya kamu membawa bekal sendiri. Tapi ingat sampahnya di buang ke tempat sampah atau di bawa pulang kembali. Untuk menuju ke bukit ini anda dapat berjalan kaki atau dengan menggunakan kendaraan seperti motor trail dan mobil jip. Dikarenakan medan-nya yang cukup sulit maka hanya dapat kendaraan-kendaraan tertentu yang dapat sampai ke Budug Asu. Rute yang dapat kalian lalui yaitu melewati kebun teh Wonosari Lawang dan bisa juga lewat dari arah Sumber Awan kemudian tinggal mengikuti papan penunjuk jalan yang telah disediakan. Perjalanan dari perkebunan teh Wonosari hingga sampai ke Budug Asu sejauh 5 KM dengan kontur jalan yang naik turun. Ada pun Harga tiket masuk Budug Asu yaitu jika melewati rute Sumber Awan maka goceng yang perlu kalian siap adalah sebesar Rp. 10.000 yaitu untuk parkir roda 2 Rp. 2.000 dan parkir roda 4 dan biaya masuk per orang Rp. 10.000. Sedangkan jika melewati rute kebun Teh Agrowisata Wonosari parkir roda 2 Rp. 20.000 dan roda 4 Rp.50.000 dan masuknya per orang Rp. 10.000 Perjalanan ini memakan waktu kurang lebih 2 jam jika berjalan kaki. Dengan medan yang cukup sulit serta perjalanan yang cukup jauh maka sebelum memutuskan untuk ke tempat ini kalian harus mempersiapkan stamina tubuh yang cukup. (Adrianus Jame)</p>\r\n', 'No', 'Bukit Budug Asu Menjadi Tempat Wisata Menarik untuk Dikunjung, Berikut Informasi Biaya, Rute, dan Eksotisme.jpg', '2022-10-25', 'Publish'),
(18, 4, 8, 'Kapolres Malang Bangun Komunikasi dengan Mahasiswa Malang Raya', '<p>Kapolres malang menjalin sinergi dan komunikasi bersama sejumlah elemen masyarakat dan mahasiswa seMalang Raya guna menciptakan situasi keamanan dan ketertiban masyarakat.</p>\r\n', '<p>ewzm. - Kapolres malang menjalin sinergi dan komunikasi bersama sejumlah elemen masyarakat dan mahasiswa seMalang Raya guna menciptakan situasi keamanan dan ketertiban masyarakat. Kegiatan yang bertajuk Diagram, Dialog Bersama Mahasiswa, yang digelar di ruang Rupatama Mako Polres Malang, Selasa (25/10/2022) sore, Kapolres beraudiensi dengan sejumlah perwakilan Badan Eksekutif Mahasiswa yang ada di Kabupaten Malang. Pada acara itu ada 14 belas perwakilan organisasi mahasiswa dari berbagai Perguruan tinggi, diantaranya, BEM UMM, PMII Cabang Malang, GMNI Komisariat Al- Qolam, IMM Malang Raya, HMI Cabang Malang, BEM UNIRA Malang, BEM Al- Qolam, dan BEM STIT Ibnu untuk memberikan masukan dan kritik terhadap isu terkini serta kinerja kepolisian Dalam pertemuan tersebut, kapolres AKBP Putu Kholis selalu pimpinan teratas memberikan sambutan dan memperkenalkan dirinya sekaligus meminta maaf atas kinerja kepolisian atas tragedi kanjuruhan kemarin. &ldquo;Pada kesempatan ini sekaligus saya memperkenalkan diri. Saya resmi bertugas di Polres Malang sejak 10 Oktober kemarin,Saya minta maaf dan turut berduka cita, belasungkawa sedalam-dalamnya kepada keluarga korban. Kami terus mendoakan, semoga almarhum dan almarhumah insyaallah husnul khatimah,&rdquo; ucap AKBP Putu membuka dialog. Tak cukup disitu AKBP Putu dan Tim Trauma Healing yang sudah bekerja sama juga akan terus memberikan perhatian terhadap korban dengan cara mengunjungi setiap keluarga korban baik yang masih di rawat maupun yang sudah meninggal untuk penanganan pemulihan trauma yang di alami oleh korban. &ldquo;Di satu sisi, korban luka juga kami kunjungi. Untuk memastikan para korban, mendapat pengobatan yang layak dan bisa segera sembuh secepatnya,&rdquo; Tambah Kapolres. Sementara itu, dari masing-masing perwakilan organisasi juga sangat mengapresiasi dan memberikan sedikit masukan terhadap kinerja kepolisian untuk lebih tegas lagi dalam menjalankan apa yang menjadi tanggung jawabnya. Tidak cuma itu, perwakilan mahasiswa juga meminta kepada aliansi untuk terus aktif dalam menjalin silaturahmi agar tetap bersinergi&rdquo;Saya harap temen-temen aliansi BEM terus bersinergi dengan kepolisian. Tetap semangat, semoga ujian ini cepat berlalu,&rdquo; Ucap perwakilan mahasiswa dari Al- Qolam. Di penghujung acar pihak kepolisian juga mengaku akan terus menjalin komunikasi dengan rekan-rekan mahasiswa untuk kemajuan Polres Malang dan Kabupaten Malang. &ldquo;Kita akan jadwalkan Diagram ini paling tidak 2 minggu sekali,&rdquo; Tutupnya. (Norholis Majid)</p>\r\n', 'Yes', 'Kapolres Malang bangun komunikasi dengan mahasiswa.jpeg', '2022-11-14', 'Publish'),
(20, 4, 7, 'Harapan Bupati Malang Kepada 347 Kepala Sekolah yang Baru Dikukuhkan', '<p>Sebanyak 347 guru dikukuhkan sebagai pejabat fungsional kepala sekolah di Pendopo Kabupaten Malang, Bupati Malang memberikan harapannya untuk sektor pendidikan ke depan agar lebih baik, Rabu (13/07/22).</p>\r\n', '<p>ewzm.com - Sebanyak 347 guru dikukuhkan sebagai pejabat fungsional kepala sekolah di Pendopo Kabupaten Malang, Bupati Malang memberikan harapannya untuk sektor pendidikan ke depan agar lebih baik, Rabu (13/07/22). Dari pengukuhan kepala sekolah yang jumlahnya banyak, Bupati Malang M Sanusi berharap, kepala sekolah yang baru dapat meningkatkan kualitas pendidikan yang lebih baik di Kabupaten Malang. Tahun ini sektor pendidikan mendapat penjatahan anggaran terbesar dibandingkan dengan anggaran pendapatan dan belanja daerah (APBD), yakni sebanyak Rp 1,46 triliun. Kata Sanusi, rata-rata nilai akhir siswa menjadi salah satu indikator kualitas pendidikan meningkat. &ldquo;Targetnya setiap tahun ada peningkatan. Nanti kita lihat dan bandingkan dengan pencapaian tahun sebelumnya,&rdquo; jelas Sanusi. Selain meningkatkan kualitas pendidikan, Sanusi berharap juga kepala sekolah dapat mendidik siswa untuk meningkatkan disiplin membuang sampah pada tempatnya, agar suasana bersih dapat tercipta di lingkungan sekolah. &ldquo;Saya beberapa waktu lalu berkunjung ke Denmark. Di sana, kebersihan sangat dijaga. Tidak hanya oleh pemerintah. Tapi masyarakatnya pun mempunyai kesadaran untuk membuang sampah pada tempatnya,&rdquo; ungkapnya. &ldquo;Nah, saya berharap hal ini juga bisa diterapkan di Kabupaten Malang, dimulai dengan membiasakan kepada siswa sejak di bangku sekolah,&rdquo; imbuhnya. Harapan yang terakhir, Sanusi juga meminta kepala sekolah mengawasi para guru agar tidak melakukan perselingkuhan atau perceraian. Hal ini dapat berdampak buruk bagi sektor pendidikan, memberikan contoh yang tidak baik untuk siswa. Sebab, Sanusi mengaku kerap menerima laporan terkait adanya perceraian yang dilakukan oleh para guru. &ldquo;Saya sering mendapat laporan perceraian di lingkungan ASN Kabupaten Malang. Setelah saya lihat ternyata rata-rata guru,&rdquo; jelasnya. (Maria Anggelina Olo Bere)</p>\r\n', 'No', 'Harapan Bupati Malang Kepada 347 Kepala Sekolah yang Baru Dikukuhkan.jpeg', '2022-12-02', 'Publish'),
(21, 2, 12, 'Depot 2 Legenda, Tempat Kuliner di Kota Malang Bermenu Khas Peranakan China-Jawa', '<p>Jika berbicara kuliner yang ada di kota Malang seperti tidak ada habisnya. Kota Malang selalu menyajikan beragam kuliner dan hampir setiap hari memiliki tempat makan ataupun kuliner yang baru. Tidak heran juga jika banyak orang yang datang dari jauh hanya untuk merasakan kulineran yang ada di Kota Malang.</p>\r\n', '<p>ewzm.- Jika berbicara kuliner yang ada di kota Malang seperti tidak ada habisnya. Kota Malang selalu menyajikan beragam kuliner dan hampir setiap hari memiliki tempat makan ataupun kuliner yang baru. Tidak heran juga jika banyak orang yang datang dari jauh hanya untuk merasakan kulineran yang ada di Kota Malang.</p>\r\n\r\n<p>Salah satu tempat makan yang saat ini banyak diminati oleh masyarakat kota Malang yaitu Depot 2 Legenda. Tempat makan yang baru dibuka pada 1 Agustus 2021 kemarin menyajikan makanan peranakan khas China dan Jawa.</p>\r\n\r\n<p>&quot;Dari nasi goreng sejauh ini yang paling orang beli adalah nasi goreng ayam rempah, dari menu ayam yang paling favorit adalah ayam kungpaw,&quot; ucap Arif, salah satu kayawan di Depot 2 Legenda.</p>\r\n\r\n<p>Untuk harga, Depot 2 Legenda ini pun relatif murah, yaitu hanya Rp 5 ribu sampai 30 ribu saja.</p>\r\n\r\n<p>Depot 2 Legenda ini cukup ramai dikunjungi oleh pengunjung. Selain karena rasa makanan yang enak dan harga yang relatif murah, suasana yang diberikan di Depot 2 Legenda ini cukup unik. Suasana seperti liburan di bawah pohon rindang sembari menikmati makanan khas peranakan khas China dan Jawa.</p>\r\n\r\n<p>Tidak hanya menyajikan menu makanan berat saja, Depot 2 Legenda saat pagi hari juga menyajikan menu sarapan dan saat malam hari menyajikan menu STMJ. Depot 2 Legenda ini buka setiap hari, kecuali hari Kamis, mulai pukul 07.00-18.00.</p>\r\n\r\n<p>Bagi yang ingin merasakan kuliner khas China dan Jawa bisa datang langsung ke Depot 2 Legenda yang beralamat di Jl. Anjasmoro No. 50, Oro-oro Dowo kota Malang.</p>\r\n', 'No', 'WhatsApp Image 2022-11-29 at 16.40.20.jpeg', '2022-12-08', 'Publish'),
(22, 2, 9, '3 Tempat Kuliner Malam Viral di Malang, Ada yang Buka Sampai Subuh', '<p>Ada beberapa tempat makan malam di Malang, Jawa Timur yang baru dibuka dan viral. Tempat makan malam ramai pengunjung ini rata-rata menawarkan masakan khas Indonesia bercita rasa pedas. Kamu bisa menyantap aneka olahan jeroan, ayam, dan pilihan sambal di tempat makan berikut ini.</p>\r\n', '<p>ewzm. - Ada beberapa tempat makan malam di Malang, Jawa Timur yang baru dibuka dan viral. Tempat makan malam ramai pengunjung ini rata-rata menawarkan masakan khas Indonesia bercita rasa pedas. Kamu bisa menyantap aneka olahan jeroan, ayam, dan pilihan sambal di tempat makan berikut ini. Setidaknya, ada tiga tempat makan malam di Malang yang viral beberapa waktu belakangan, seperti berikut ini.</p>\r\n\r\n<p>1.Sego Meduro Jeroan Khas Madura Baru dibuka pada awal 2022, Sego Meduro Jeroan Khas Madura berhasil menarik perhatian banyak pelanggan di Malang. Warung makan malam yang ramai dipenuhi pelanggan setiap malam ini menawarkan aneka menu. Beberapa di antaranya adalah Ayam Kesrut Khas Banyuwangi, Sego Madura Campur, Sego Madura Jumbo, Babat, Usus, Paru, Kikil, dan Limpo. Kamu bisa datang langsung ke Sego Meduro Jeroan Khas Madura di depan ruko Citra Kendedes Bakery Soekarno Hatta, tepatnya di Jalan Soekarno Hatta Kav. B3, Jatimulyo, Kecamatan Lowokwaru, Jatimulyo, Malang, Jawa Timur. Sego Meduro Jeroan Khas Madura buka setiap hari pukul 23.00-04.00 WIB.</p>\r\n\r\n<p>2.Warung Pedas Mbok Djum Persis namanya, Warung Pedas Mbok Djum menawarkan beragam makanan berkuah pedas yang patut kamu coba. Pilihan sajian berkuah pedas di Warung Pedas Mbok Djum di antaranya adalah Kikil, Kerang, Babat, Paru, Usus, Ikan Nila, Ayam, dan Udang. Ada juga aneka gorengan di Warung Pedas Mbok Djum, seperti Telor Crispy, Ati Ampela, Ikan Nila Goreng, dan Ayam Goreng. Satu macam makanan di Warung Pedas Mbok Djum dijual seharga Rp 6.000 hingga Rp 25.000. Kamu bisa datang setiap hari ke Warung Pedas Mbok Djum pukul 15.00-00.00 WIB yang berlokasi di Jalan Danau Jonge Nomor L27, Madyopuro, Kecamatan Kedungkandang, Malang, Jawa Timur.</p>\r\n\r\n<p>3.So Sambal Gami Berbagai pilihan makanan dan sambal untuk santapan malam hari tersedia di So Sambal Gami. Kamu bisa memilih Tahu Tempe Telur, Jerohan, Kulit, Ayam, Paru, Babat, Ceker, Lele, Bandeng, atau Gurami di So Sambal Gami. Sementara untuk pilihan sambalnya ada Sambal Tomat, Sambal Ijo, Sambal Ijo Padang, dan Sambal Bawang. Satu makanan lengkap dengan sambal di So Sambal Gami dijual seharga Rp 6.000 hingga Rp &nbsp;30.000. Kamu bisa datang langsung ke So Sambal Gami di Jalan Soekarno Hatta D 400 Kavling 1, Malang, Jawa Timur setiap pukul 16.00-00.00 WIB.</p>\r\n', 'Yes', 'WhatsApp Image 2022-11-29 at 16.48.38.jpeg', '2022-12-19', 'Publish'),
(23, 3, 11, 'Peringati Tragedi Kanjuruhan, Aremania Gelar Aksi Turun Jalan', '<p>Dalam rangka memperingati 40 hari Tragedi Kanjuruhan, tim gabungan Aremania dan seluruh elemen masyarakat melakukan Aksi Solidaritas di depan gedung Balai Kota Malang, Kamis (10/11/2022).</p>\r\n', '<p>Newzm - Dalam rangka memperingati 40 hari Tragedi Kanjuruhan, tim gabungan Aremania dan seluruh elemen masyarakat melakukan Aksi Solidaritas di depan gedung Balai Kota Malang, Kamis (10/11/2022).</p>\r\n\r\n<p>Aksi dimulai sekitar jam 13.00 WIB dari Stadion Gajayana kota Malang sampai ke depan Gedung Balai Kota dengan diiringi lafal &ldquo;Laila Haillalah&rdquo;. Seruan aksi tersebut langsung di terima oleh Walikota Malang Drs. H. Sutiaji.</p>\r\n\r\n<p>Dalam aksi tersebut tidak hanya dihadiri oleh Aremania saja akan tetapi orang tua dari salah satu korban, suporter dari berbagai daerah dan sejumlah organisasi mahasiswa diantaranya, Pergerakan Mahasiswa Islam Indonesia (PMII), Himpunan Mahasiswa Islam (HMI), Gerakan Nasional Indonesia (GMNI) dan Kesatuan Aksi Mahasiswa Muslim Indonesia (KAMMI).</p>\r\n\r\n<p>Sesampai di depan Balai Kota, sejumlah aksi di tampilkan oleh masa untuk mengembalikan ingatan tentang Tragedi Kanjuruhan Sabtu (1/10) lalu. Bermula dari memperagakan tindak anarkis kepolisian yang terjadi saat tragedi berlangsung, penembakan gas air mata ke suporter, dan melantunkan nyanyian khas Aremania.</p>\r\n\r\n<p>Selepas dari itu salah satu perwakilan Aremania membacakan poin tuntutan supaya yang di keluhkan oleh para korban bisa di wujudkan dengan semestinya.</p>\r\n\r\n<p>Adapun beberapa poin tuntutannya : Seret, tangkap, dan adili (Seluruh aktor dibalik tragedi kanjuruhan 01 Oktober 2022, seluruh eksekutor lapangan tragedi kanjuruhan), jadikan tragedi kanjuruhan sebagai pelanggaran HAM berat bukan hanya sebagian pelanggaran HAM ringan, bayar segala kerugian yang di derita korban dan keluarga korban tragedi kanjuruhan 01 Oktober 2022, melalui mekanisme Kompensasi dan Restitusi.</p>\r\n\r\n<p>Sebelum aksi itu di bubarkan pihak pemerintah membawa Ibu dari salah satu korban untuk diberikan kompensasi yang sudah menjadi poin tuntutan pada aksi tersebut.</p>\r\n', 'Yes', 'usuttuntas.jpg', '2022-10-02', 'Publish'),
(24, 2, 8, '12 Tempat Nugas di Malang Paling Enjoy, Bisa Juga Buat Nongkrong', '<p>Kota Malang memiliki banyak sekali tempat &ndash; tempat menarik bagi kaum muda atau milenial untuk nongkrong. Tidak hanya sekedar berkumpul, ada juga tempat nongkrong di Malang yang bisa dijadikan sebagai tempat mengerjakan tugas, baik tugas sekolah maupun tugas kuliah. Mengingat Kota Malang juga dijuluki sebagai kota Pendidikan, karena ada banyak perguruan tinggi favorit dan berkualitas.</p>\r\n', '<p>ewzm.com &ndash; Kota Malang memiliki banyak sekali tempat &ndash; tempat menarik bagi kaum muda atau milenial untuk nongkrong. Tidak hanya sekedar berkumpul, ada juga tempat nongkrong di Malang yang bisa dijadikan sebagai tempat mengerjakan tugas, baik tugas sekolah maupun tugas kuliah. Mengingat Kota Malang juga dijuluki sebagai kota Pendidikan, karena ada banyak perguruan tinggi favorit dan berkualitas.</p>\r\n\r\n<p>12 Rekomendasi Tempat Nugas di Malang</p>\r\n\r\n<p>1. &nbsp;Roketto Coffe &amp; Co</p>\r\n\r\n<p>Roketto Coffee &amp; Co menjadi pilihan pertama untuk anda yang tengah mencari tempat nugas di Malang. Coffe Shop dengan konsep industrial minimalis ini memiliki sajian utama yaitu Hikari Iced Coffee, minuman ini merupakan perpaduan espresso, susu &amp; karamel, selain itu masih ada mocca, mactha, chocolate, latte dll.</p>\r\n\r\n<p>Jika tidak terlalu suka minuman berkafein, anda bisa memilih minuman non coffe dan memesan makanan ringan / cemilan manis seperti donat, sandwich, brownies. Tempat ini juga menyediakan banyak kursi &amp; meja serta colokan istrik di banyak tempat, sehingga pengunjung bisa tetap produktif.</p>\r\n\r\n<p>&nbsp;&bull; &nbsp; Alamat : Jl. Kendalsari No. 06, Jatimulyo, Lowokwaru, Kota Malang</p>\r\n\r\n<p>&bull; &nbsp; Jam Buka : 08.00 &ndash; 00.00</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2.&nbsp;&nbsp; &nbsp;8 Oz Coffee Studio</p>\r\n\r\n<p>Satu lagi Coffe Shop menarik di Malang yang bisa anda kunjungi, yaitu 8 Oz Coffee Shop. Mengusung konsep minimalis modern dengan banyak tanaman hijau yang menambah kesan nature di bagian dalam, membuat siapapun akan merasa nyaman berlama &ndash; lama disini. Cafe ini memiliki area smoking &amp; no-smoking yang terpisah.</p>\r\n\r\n<p>Suasana yang nyaman dan tenang, bisa dimanfaatkan pengunjung yang ingin meeting ringan ataupun bekerja. Jangan lupa memesan sajian kopi sebagai pendamping dalam beraktifitas, pilihannya cukup banyak antara lain, Espresso, macchiato, piccolo latte cafe latte, cappucino, mocha dll.</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Alamat : Jl. Citandui No. 74, Purwantoro, Blimbing, Kota Malang</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Jam Buka : 08.00 &ndash; 21.00</p>\r\n\r\n<p><br />\r\n3.&nbsp;&nbsp; &nbsp;Golden Heritage</p>\r\n\r\n<p>Masih dengan coffee shop di Malang yang memang menjadi tempat kuliner favorit kaum muda dan mahasiswa. Kopi memang menjadi minuman yang cocok untuk dinikmati sambil berkegiatan produktif seperti bekerja atau mengerjakan tugas. Ada satu tempat Ngopi di Malang yang sangat hits dan harus anda datangi, yaitu Golden Heritage Koffie.</p>\r\n\r\n<p>Coffee Shop dengan konsep industrial yang tampak sangat instagramable ini menyajikan banyak jenis kopi dengan beragam cara penyajiannya. Pengunjung pun bisa melihat mesin mesin kopi layaknya sedang berada di pabrik kopi. Di saming itu, cafe ini memiliki 2 lantai dengan banyak spot yang bisa digunakan untuk bersanta, ngobrol bersama atau bahkan mengerjakan tugas.</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Alamat : Jl. Raya Tidar No. 36, Karangbesuki, Kota Malang</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Jam Buka : 07.00 &ndash; 20.30 (selasa tutup)</p>\r\n\r\n<p><br />\r\n4.&nbsp;&nbsp; &nbsp;DW Coffe Shop</p>\r\n\r\n<p>Bagi sebagian besar mahasiswa, pasti familiar dengan kedai kopi di Malang satu ini, DW Coffee Shop memiliki lokasi yang dekat dengan banyak kampus seperti Universitas Negeri Malang, Univ. Brawijaya dan Univ. Merdeka. Selain dekat dengan beberapa kampus, rate harga makanannya juga tergolong sesuai dengan kantong mahasiswa. Tak heran kenapa coffee shop ini begitu ramai dikunjungi para pelajar.</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Alamat : Jl. Bogor No. 11, Sumbersari, Lowokwaru, Kota Malang</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Jam Buka : 07.00 &ndash; 20.00</p>\r\n\r\n<p><br />\r\n5.&nbsp;&nbsp; &nbsp;Bureau Coffee</p>\r\n\r\n<p>Bureau Malang Coffee &amp; Dine menjadi pilihan berikutnya untuk anda, terutama para pelajar dan mahasiswa yang sedang mencari tempat nongkrong + tempat nugas di Malang. Desain interior coffee shop ini terasa minimalis dan cozy, serta terdapat banyak fasilitas seperti stop kontak, smoking area dan mushola.</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Alamat : Jl. Soekarno &ndash; Hatta No. 509, Lowokwaru, Kota Malang</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Jam Buka : 09.00 &ndash; 22.00</p>\r\n\r\n<p><br />\r\n6.&nbsp;&nbsp; &nbsp;Kopi.Pisan</p>\r\n\r\n<p>Satu lagi tempat nugas yang nyaman dan ramah untuk mahasiswa, berlokasi di Jalan Brigjend Slamet Riadi (dekat dengan jalan Ijen) membuat cafe ini sangat mudah diakses dari mana saja. Memiliki 2 lantai dengan balkon yang menghadap jalan sehingga pengunjung bisa melihat view kota Malang.</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Alamat : Jl. Brigjend Slamet Riadi No. 190, Klojen, Kota Malang</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Jam Buka : 08.00 &ndash; 22.00</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>7.&nbsp;&nbsp; &nbsp;Indigo Cafe &amp; Bistro</p>\r\n\r\n<p>Cafe di Malang yang romantis, memiliki view alam, suasana tenang, ada live music, harga terjangkau untuk mahasiswa + bisa untuk event, semua ini bisa anda nikmati di Indigo cafe &amp; Bistro yang berlokasi di daerah Dau, Malang. Cafe outdoor ini bisa menjadi pilihan terbaik sebagai tempat bersantai dan hangut bersama teman.</p>\r\n\r\n<p>Jika anda membutuhkan tempat yang enak buat ngerjain tugas di Malang sambil ditemani aneka menu makanan dan minuman yang nikmat, datangah ke Indigo Cafe.</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Alamat : Jl. Raya Dermo No. Kav 164, Dau, Malang</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Jam Buka : 11.00 &ndash; 01.00</p>\r\n\r\n<p><br />\r\n8.&nbsp;&nbsp; &nbsp;Gartenhaus Co</p>\r\n\r\n<p>Coworking space yang menyuguhkan konsep alam dengan banyak tanaman rindang serta spot outdoor yang luas. Masuk ke dalam area cafe, anda akan merasakan nuansa nature yang menenangkan. Cobalah datang bersama teman atau pasangan, karena tempat ini sangat nyaman untuk dijadikan tempat ngumpul bersama.</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Alamat : Jl. Kenanga Indah No. 1, Jatimulyo, Lowokwaru, Kota Malang</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Jam Buka : 10.00 &ndash; 23.00 (senin tutup)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>9.&nbsp;&nbsp; &nbsp;Ruang Rindu Kopi</p>\r\n\r\n<p>Ruang Rindu Coffee menjadi salah satu tempat ngopi di Malang favorit mahasiswa, berlokasi dekat dengan beberapa kampus seperti Universitas Brawijaya, Univ. Polinema dan Unisma. Coffee shop ini menyediakan aneka minuman kopi dan non-kopi, area yang luas dan memiliki banyak colokan listrik, cocok untuk mahasiswa yang ingin mengerjakan tugas.</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Alamat : Jl. MT. Haryono No. 17C, Dinoyo, Lowokwaru, Kota Malang</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Jam Buka : 10.00 &ndash; 00.00</p>\r\n\r\n<p><br />\r\n10.&nbsp;&nbsp; &nbsp; 7 Seven Chiken</p>\r\n\r\n<p>Tempat makan sekaligus tempat kerja / co-working space yang akan memanjakan para pengunjung. 7Seven Chiken ini bisa menjadi pilihan bagi anda yang ingin menikmati suasana santai namun tetap bisa produktif. Selain itu, terdapat fasilitas ruang meeting dan mushola serta akses wifi, pasti akan membuat betah para pengunjung.</p>\r\n\r\n<p>Yang menarik adalah, tempat ini beroperasi 24 jam setiap hari. Sehingga cocok untuk anda yang sedang mencari tempat nongkrong 24 jam di Malang</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Alamat : Ruko Jl. Soekarno Hatta No. 33, Lowokwaru, Kota Malang</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Jam Buka : buka 24 jam setiap hari</p>\r\n\r\n<p><br />\r\n11.&nbsp;&nbsp; &nbsp;Oase Cafe &amp; Literacy</p>\r\n\r\n<p>Oase Cafe &amp; Literacy menampilkan konsep tempat makan / cafe yang mengusung tema literasi, sehingga pengunjung juga bisa mengisi waktu luang dengan membaca aneka jenis buku yang telah disediakan. Cafe ini cukup luas dan memiliki 3 lantai, sehingga bisa disajikan sebagai tempat berkumpul atau berdiskusi.</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Alamat : Jl. Joyo Utomo V, Merjosari, Lowokwaru, Kota Malang</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Jam Buka : 09.00 &ndash; 01.00</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>12.&nbsp;&nbsp; &nbsp;Semusim Cafe</p>\r\n\r\n<p>Satu lagi Tempat Nugas di Malang yang nyaman dan aesthetic, yaitu Semusim Cafe. Menyadiakan ruangan co-working space tersendiri yang sudah dilengkapi banyak stop kontak, akses wifi dan meja luas yang bisa dijadikan tempat kerja bersama. Terdapat juga mushola untuk keperluan beribadah pengunjung.<br />\r\nTidak hanya tempatnya yang nyaman, menu makanan bervariasi dengan harga terjangkau juga menjadi dambaan para pengunjung, sehingga mereka akan setia untuk datang kembali kesini.</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Alamat : Jl. MT. Haryono No. 110, Lowokwaru, Kota Malang</p>\r\n\r\n<p>&bull;&nbsp;&nbsp; &nbsp;Jam Buka : 10.00 &ndash; 00.00</p>\r\n', 'Yes', 'LITCHI.jpeg', '2022-12-16', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `foto`, `level`) VALUES
(1, 'Sabina Okta Restati', 'sabina', 'sabina@gmail.com', '202cb962ac59075b964b07152d234b70', 'sabina.png', 'Admin'),
(2, 'Okta Sabina', 'okta', 'okta@gmail.com', '202cb962ac59075b964b07152d234b70', 'sabina.png', 'Author'),
(4, 'Ervina Rahma Aristawati', 'ervina', 'ervina@gmail.com', '202cb962ac59075b964b07152d234b70', 'ervina.JPG', 'Admin'),
(5, 'Afifa Nur Aini', 'afif', 'afif@gmail.com', '202cb962ac59075b964b07152d234b70', 'afif.jpg', 'Admin'),
(6, 'Gandhis Defindo Syam Sitoresmi', 'gandhis', 'gandhis@gmail.com', '202cb962ac59075b964b07152d234b70', 'gandhis.jpg', 'Admin'),
(7, 'Dora', 'dora', 'dora@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'aut4.jpg', 'Author'),
(8, 'Julian', 'julian', 'julian@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'aut5.jpg', 'Author'),
(9, 'Ajung', 'ajung', 'ajung@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'aut2.jpg', 'Author'),
(11, 'Dina', 'dina', 'dina@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'aut1.jpg', 'Author'),
(12, 'Surty', 'surty', 'surty@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'aut3.png', 'Author');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id_ab`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_post` (`id_post`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_msg`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_author` (`id_author`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id_ab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`id_author`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
