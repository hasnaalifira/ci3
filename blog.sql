-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jun 2018 pada 14.07
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(15) NOT NULL,
  `judul` varchar(50) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(100) CHARACTER SET utf8 NOT NULL,
  `jenis_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `content`, `image`, `jenis_cat`) VALUES
(1, 'Microsoft Word', 'Microsoft Word adalah sebuah perangkat lunak atau program aplikasi pengolah data berupa huruf atau angka yang dipergunakan untuk keperluan bisnis, pekerjaan, pembuatan laporan, pembuatan dokumen, makalah, skripsi atau hal lain yang berkaitan dengan tulis menulis yang dikembangkan oleh Perusaan Microsoft.\r\n\r\nMicrosoft Word itu sendiri merupakan produk andalan microsoft yang sangat banyak digunakan oleh mayoritas pengguna komputer/laptop di dunia. Kehadiran Microsoft Word memberikan banyak perubahan di era digital sekarang ini. \r\n\r\nMesin ketik yang dulu lazim digunakan sekarang sudah tergantikan oleh Microsoft Word ini. Kita dapat dengan mudah membuat dokumen, menyimpannya, dan bisa langsung dicetak (print) kapan saja sesuai kehendak kita.\r\n\r\nJadi seandainya dokumen (dalam bentuk kertas) itu hilang, maka kita dapat dengan mudah untuk membuat hardcopy dengan mencetaknya. Untuk mengoperasikan program aplikasi ini juga tidak sulit bahkan mudah untuk pengguna baru.\r\n\r\nSejarah Microsoft Word\r\n\r\nMicrosoft Word dirilis pertama kali pada tanggal 25 Oktober 1983 oleh IBM PC. Microsoft Word adalah program pertama yang dapat menampilkan cetak tebal dan cetak miring pada IBM PC. Kala itu dunia pengolah kata dikuasai ( sangat digemari ) oleh WordStar dan WordPerfect.\r\n\r\nVersi Word for Macintosh, Word 3.0 dirilis pada tahun 1987 yang sebagian besar fiturnya memiliki banyak gangguan/bug. Beberapa bulan setelah dirilisnya Word 3.0, Microsoft mengganti versi menjadi Word 3.1 yang lebih stabil.\r\n\r\nLalu pada tahun 1989, microsoft merilis Word 4.0 dan menjadi versi yang sangat sukses karena tingkat ke stabilannya. Dan pada tahun ini juga, Microsoft Word memasuki sistem operasi windows (merilis Word for Windows) dengan patokan harga senilai $500.\r\n\r\nDi tahun berikutnya, penjualan produk  word ini terus melambung hingga akhirnya Microsoft mulai merajai dunia pengolah kata.\r\n\r\nHingga saat ini, versi terbaru dari Microsoft Word adalah Microsoft Word 2013, menggantikan versi sebelumnya yaitu Microsoft Word 2007 dan 2010. Tampilan di Microsoft Word 2013 juga terkesan lebih elegan dan lebih baik.\r\n\r\nAdapun kelebihannya yaitu banyak fitur yang ditambahkan misalnya SkyDrive. Jika seseorang dapat terkoneksi internet, maka seseorang dapat menyimpan dokumen melalui fitur SkyDrive ini secara online sehingga dapat diakses/dibuka kapan pun dan dimana pun.\r\n\r\nFungsi Microsoft Word\r\n\r\nSebagai produk andalan Microsoft yang menjadi program aplikasi terpopuler saat ini, Microsoft Word memiliki beragam fungsi untuk penggunanya. Kegunaan dan fungsi Microsoft Word diantaranya yaitu :\r\nUntuk membuat dokumen dengan cepat dan tepat.\r\nUntuk membuat dokumen yang dapat dicetak (print).\r\nUntuk membuat surat-menyurat  dalam urusan resmi maupun tidak resmi.\r\nUntuk membuat variasi bentuk tulisan agar lebih menarik.\r\nUntuk membuat keperluan tipografi penulisan.\r\nUntuk menyimpan dokumen dalam format tertentu dengan ukuran kecil.\r\nManfaat Microsoft Word\r\nManfaat menggunakan Microsoft Word diantaranya :\r\nMempermudah pelaksanaan kerja dalam urusan administrasi dan pengolahan kata.\r\nMenghemat waktu dan tenaga.\r\nMenghemat kertas dan biaya.\r\nMeminimalisir tingkat kesalahan dalam penulisan.\r\nMempercepat penyelesaian kerja karena lebih efisien.\r\nKeunggulan Microsoft Word\r\n\r\nKeunggulan atau kelebihan Microsoft Word yaitu :\r\nDapat menyimpan dokumen dan dapat dibuka kapan saja.\r\nDapat menyimpan dokumen dengan beragam format sesuai kebutuhan.\r\nUkuran dokumen bila tersimpan relatif kecil sehingga tidak banyak memakan ruang penyimpanan.\r\nTersedia banyak template yang bebas digunakan.\r\nTerkoneksi dengan SkyDrive.\r\nAdanya variasi gaya tulisan yang sangat menarik.\r\nTersedia tampilan reading view dan print view.\r\nTerdapat fitur untuk memasukkan gambar dan clipart.\r\nTersedia pengaturan tulisan tentang jarak, ukuran, warna, dan sebagainya.\r\nAdanya fitur find dan replace untuk memudahkan mencari kata.\r\nTersedia fitur bullet dan numbering yang mempermudah membuat poin penting dokumen. \r\nFitur-fitur lainnya juga sangat memungkinkan untuk mempermudah penyelesaian kerja.\r\nDan masih banyak lagi.\r\nKekurangan Microsoft Word\r\n\r\nKekurangan atau kelemahan Microsoft Word yaitu :\r\nUkuran untuk installer (penginstallan) cukup besar.\r\nMerupakan program aplikasi berbayar.', 'word.png\r\n', 1),
(3, 'Microsoft Powerpoint', 'Microsoft Powerpoint adalah sebuah program aplikasi microsoft office yang berguna sebagai media presentasi dengan menggunakan beberapa slide.\r\n\r\nAplikasi ini sangat digemari dan banyak digunakan dari berbagai kalangan, baik itu pelajar, perkantoran dan bisnis, pendidik, dan trainer.\r\n\r\nKehadiran powerpoint membuat sebuah presentasi berjalan lebih mudah dengan dukungan fitur yang sangat menarik dan canggih. Fitur template/desain juga akan mempecantik sebuah presentasi powerpoint.\r\n\r\nFungsi dan Kegunaan Microsoft Powerpoint\r\n\r\nKegunaan atau fungsi dari ms powerpoint adalah sebagai berikut :\r\n\r\nSarana untuk mempermudah sebuah presentasi.\r\nMembuat sebuah presentasi berbentuk softcopy sehingga dapat diakses oleh berbagai perangkat komputer.\r\nMembuat presentasi dalam bentuk slide yang menarik dan cantik dengan dukungan fitur audio, video, gambar dan animasi serta template/desain yang akan dipergunakan.\r\nMempermudah dalam membuat, mengatur dan mencetak berbagai slide.\r\n\r\n\r\nSejarah Microsoft Powerpoint\r\n\r\nMicrosoft Powerpoint dikembangkan pertama kali oleh Bob Gaskins dan Dennis Austin. Waktu itu, microsoft powerpoint digunakan sebagai presenter untuk perusahaan Forethought.Inc yang kemudian namanya diubah menjadi Powerpoint.\r\n\r\nPowerpoint versi 1 dirilis pada tahun 1987 dan komputer yang didukungnya adalah Macintosh. Kala itu powerpoint masih menggunakan warna hitam putih saja dan mampu membuat halaman teks dan grafik untuk transparasi OHP (OverHead Projector).\r\n\r\nDi tahun berikutnya, microsoft powerpoint muncul dengan dukungan warna setelah macintosh  berwarna muncul dipasaran.\r\n\r\nPada tanggal 31 Juli 1987, Microsoft mengakuisisi Forethought.Inc dengan powerpoint seharga 14 juta dollar.\r\n\r\nMengikuti Microsoft Windows 3.0, versi Ms. Windows dari PowerPoint (versi 2.0) muncul di pasaran tepatnya pada tahun 1990. Semenjak tahun 1990 inilah Microsoft Powerpoint tidak terpisahkan dalam paket aplikasi kantoran Microsoft Office terkecuali Basic Edition.\r\n\r\nSampai saat ini Microsoft PowerPoint terus berkembang dan mengalami penambahan fitur dari tahun ke tahunnya. Versi terbaru dari Ms. Powerpoint adalah Microsoft Office PowerPoint 2013 (versi 15) yang dirilis bulan Januari 2015.\r\n\r\nDalam Microsoft PowerPoint 2013 ini, antarmuka dengan pengguna dan grafik sangat ditingkatkan sehingga Microsoft PowerPoint lebih menarik dan userfriendly.\r\n\r\nVersi ini juga menawarkan format data  XML dengan ekstensi .pptx yang sebelumnya merupakan data biner dengan ekstensi .ppt\r\n\r\nFormat data Microsoft PowerPoint \r\n\r\nUntuk emnyimpan sebuah data PowerPoint, powerpoint menyediakan beragam format data diantaranya yaitu :\r\n\r\n*.PPT (PowerPoint Presentaion)\r\nMerupakan ekstensi untuk data biner dan tersedia dalam segala versi PowerPoint (termasuk PowerPoint 12).\r\n\r\n*.PPS (PowerPoint Show)\r\nMerupakan ekstensi untuk data biner dan tersedia dalam segala versi PowerPoint (termasuk PowerPoint 12).\r\n\r\n*.POT (PowerPoint Template)\r\nMerupakan ekstensi untuk data biner dan tersedia dalam segala versi PowerPoint (termasuk PowerPoint 12).\r\n\r\n*.PPTX (PowerPoint Presentation)\r\nMerupakan ekstensi untuk data dalam bentuk XML dan hanya tersedia dalam versi PowerPoint 12.\r\n\r\nKelebihan Microsoft Office PowerPoint \r\n\r\nKeunggulan atau kelebihan Ms. PowerPoint diantaranya yaitu :\r\nMudah digunakan bahkan untuk pemula sekalipun.\r\nTersedia beragam desain dan template yang menarik.\r\nDapat dibuat dalam berbagai format data.\r\nDapat mengedit foto secara langsung.\r\nAdanya fitur pergerakan seperti Transition dan Custom Animation.\r\nAdanya fitur untuk memasukkan konten dari lain aplikasi yang mendukung OLE (Object Linking and Embedding).\r\n\r\nKekurangan Microsoft Powerpoint\r\nAdanya licensi yang memungkinkan penggunanya untuk membayar program aplikasi powerpoint ini.', 'ppt.png\r\n', 3),
(5, 'mboh', 'bnm,;''flkldjvfnffvkkjkkfkm k', 'excel.png\r\n', 2),
(6, 'bbbbbbbbb', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'ppt9.png', 1),
(7, 'ccccc', 'cccccccccccccccccccccccccccccccccc', 'word.jpg', 2),
(9, 'ddd', 'ddddddddddddddd', 'excel.png', 3),
(10, 'aw', 'awawawawaw', 'word2.jpg', 4),
(11, 'xfghj', 'qwertyuiopasdfghjklzxcvbnm', 'word-icon.png', 2),
(12, 'ghjk', 'sdfghjkl;''/cvbnm,.', 'excel_icon.png', 1),
(14, 'dfhjll', 'sdfghjkdfghjkl', 'ppt11.png', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Education', 'mboh'),
(2, 'Hiburan', 'blabla'),
(3, 'News', 'ayeee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` tinyint(2) NOT NULL,
  `nama_level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Administrator'),
(2, 'Premium Member'),
(3, 'Reguler Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fk_id_level` tinyint(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `fk_id_level`, `nama`, `alamat`, `email`, `username`, `password`, `tanggal`) VALUES
(1, 1, 'aaaa', 'abc', 'a@gmail.com', 'aaaa', '74b87337454200d4d33f80c4663dc5e5', '2018-06-10 02:04:48'),
(2, 2, 'ccc', 'ccc', 'c@gmail.com', 'ccc', '9df62e693988eb4e1e1444ece0578579', '2018-06-10 02:04:48'),
(3, 1, 'pp', 'pp', 'p@gmail.com', 'pp', 'c483f6ce851c9ecd9fb835ff7551737c', '2018-06-10 02:04:48'),
(4, 2, 'abc', 'abcdefg', 'abc@gmail.com', 'abc', '900150983cd24fb0d6963f7d28e17f72', '2018-06-10 23:56:23'),
(5, 3, 'qwerty', 'qwerty', 'qwerty@gmail.com', 'qwerty', 'd8578edf8458ce06fbc5bb76a58c5ca4', '2018-06-10 23:57:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_cat` (`jenis_cat`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_id_level` (`fk_id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
