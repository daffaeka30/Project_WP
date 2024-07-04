-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2024 pada 10.55
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `slug_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text,
  `gambar_berita` varchar(30) DEFAULT NULL,
  `tgl_berita` date NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar_berita`, `tgl_berita`, `id_user`) VALUES
(4, 'Dream University Raih Prestasi Gemilang di Kompetisi Robotik Nasional', 'dream-university-raih-prestasi-gemilang-di-kompetisi-robotik-nasional', '<p>Dream University kembali menorehkan prestasi membanggakan di kancah nasional. Tim robot mahasiswa &quot;DreamBot&quot; berhasil meraih juara pertama dalam Kompetisi Robotik Nasional 2024 yang digelar di Bandung pada 25-27 Juni 2024.</p>\r\n\r\n<p>Kompetisi ini diikuti oleh puluhan tim robot dari berbagai perguruan tinggi di Indonesia. DreamBot berlaga di kategori spesial.</p>\r\n\r\n<p>Robot yang dirakit oleh DreamBot berhasil menyelesaikan tantangan dengan waktu tercepat dan akurasi tertinggi. Kemenangan ini diraih berkat kerja keras, kreativitas, dan sinergi yang solid dari para anggota tim DreamBot.</p>\r\n\r\n<p>Hyunjin selaku ketua tim DreamBot mengungkapkan rasa bangga dan terima kasih atas dukungan yang diberikan oleh Dream University. &quot;Kemenangan ini membuktikan bahwa mahasiswa Dream University mampu bersaing di tingkat nasional. Kami berharap prestasi ini dapat menginspirasi mahasiswa lain untuk terus berinovasi dan berkarya&quot;, ujarnya.</p>\r\n\r\n<p><strong>Prestasi DreamBot di kompetisi robotik nasional ini menjadi bukti nyata komitmen Dream University dalam mendorong mahasiswa untuk mengembangkan keterampilan di bidang sains, teknologi, teknik, dan matematika (STEM). Dream University menyediakan berbagai fasilitas dan program untuk mendukung para mahasiswa berprestasi, termasuk laboratorium robotika yang canggih dan program bimbingan dari dosen berpengalaman.</strong></p>\r\n\r\n<p><strong>Selain kompetisi robotik, Dream University juga aktif mengikuti berbagai kompetisi mahasiswa lainnya, seperti kompetisi??? (bian lun sai - debat bahasa Mandarin), kompetisi karya tulis ilmiah, dan kompetisi desain.</strong></p>\r\n\r\n<p><strong>Ikuti terus kabar terbaru dan prestasi mahasiswa Dream University di laman web resmi kami!</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'news2.jpeg', '2024-06-29', 1),
(6, 'Dream University : Menuju Masa Depan yang Cerah', 'dream-university-menuju-masa-depan-yang-cerah', '<p>Dream University dengan bangga mengumumkan misinya untuk mempersiapkan mahasiswa meraih masa depan yang cemerlang. Universitas ini menawarkan berbagai program studi yang inovatif dan berorientasi ke masa depan, dirancang untuk membekali lulusannya dengan keterampilan dan pengetahuan yang dibutuhkan untuk berkembang di dunia yang terus berubah.</p>\r\n\r\n<p>Dream University memiliki lingkungan belajar yang dinamis dan inklusif, yang mendorong kreativitas dan pemikiran kritis. Universitas ini memiliki fakultas yang terdiri dari para profesional berpengalaman dan akademisi terkemuka yang berkomitmen untuk memberikan pendidikan berkualitas tinggi.</p>\r\n\r\n<p><strong>Mengapa Memilih Dream University?</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Beragam Program Studi:</strong> Dream University menawarkan berbagai program studi sarjana dan pascasarjana yang relevan dengan kebutuhan industri saat ini.</li>\r\n	<li><strong>Fokus pada Keterampilan Masa Depan:</strong> Program studi dirancang untuk membekali mahasiswa dengan keterampilan yang dibutuhkan untuk menghadapi tantangan abad ke-21, seperti pemikiran komputasional, pemecahan masalah yang kompleks, dan literasi digital.</li>\r\n	<li><strong>Pembimbing Berpengalaman:</strong> Mahasiswa akan dibimbing oleh para pengajar yang memiliki pengalaman profesional yang luas dan pengetahuan akademis yang mendalam.</li>\r\n	<li><strong>Lingkungan Belajar yang Mendukung:</strong> Dream University menyediakan lingkungan belajar yang kondusif dan inklusif, yang memungkinkan mahasiswa untuk berkembang secara akademik dan pribadi.</li>\r\n	<li><strong>Peluang Karir yang Luas:</strong> Lulusan Dream University memiliki prospek kerja yang cerah karena dibekali dengan keterampilan dan pengetahuan yang dibutuhkan oleh pemberi kerja.</li>\r\n</ul>\r\n', 'univ2.jpg', '2024-06-29', 1),
(7, 'Dream University Meluncurkan Program Beasiswa Inovatif untuk Mahasiswa Berprestasi', 'dream-university-meluncurkan-program-beasiswa-inovatif-untuk-mahasiswa-berprestasi', '<p>Dream University, universitas terkemuka di bidang pendidikan tinggi, telah mengumumkan peluncuran program beasiswa baru yang bertujuan untuk mendukung mahasiswa berprestasi secara finansial. Program beasiswa inovatif ini dirancang untuk memberikan kesempatan lebih luas kepada calon mahasiswa untuk mengakses pendidikan berkualitas di Dream University tanpa harus terbebani oleh biaya pendidikan yang tinggi.</p>\r\n\r\n<p>Program ini tidak hanya menawarkan dukungan keuangan yang signifikan, tetapi juga menyediakan akses ke berbagai fasilitas akademik dan kesempatan untuk terlibat dalam proyek-proyek riset yang relevan dengan tren industri saat ini. Dengan demikian, Dream University berharap dapat menarik bakat-bakat terbaik dari berbagai belahan dunia untuk belajar dan berkembang di lingkungan akademik yang stimulatif dan kolaboratif.</p>\r\n\r\n<p>Dr. Sarah Wong, Dekan Program Beasiswa Dream University, menyatakan, &quot;Kami sangat bersemangat untuk meluncurkan program beasiswa ini sebagai bagian dari komitmen kami untuk menciptakan kesempatan yang setara bagi semua individu yang memiliki potensi untuk berhasil dalam pendidikan tinggi. Kami berharap bahwa program ini tidak hanya akan membantu meringankan beban finansial mahasiswa, tetapi juga akan memberikan dorongan bagi mereka untuk mengejar impian akademik dan profesional mereka.&quot;</p>\r\n\r\n<p>Proses seleksi untuk program beasiswa ini akan didasarkan pada prestasi akademik yang luar biasa, potensi kepemimpinan, serta motivasi dan tujuan yang jelas dalam bidang studi yang dipilih. Mahasiswa yang berhasil mendapatkan beasiswa akan menerima dukungan finansial yang mencakup biaya kuliah, biaya hidup, dan akses ke berbagai fasilitas pendukung.</p>\r\n\r\n<p>Dream University telah mendapatkan respon yang sangat positif dari komunitas mahasiswa dan calon mahasiswa terkait peluncuran program beasiswa ini. Banyak yang menganggap langkah ini sebagai bukti nyata dari komitmen universitas dalam mendukung kesetaraan akses terhadap pendidikan tinggi yang berkualitas.</p>\r\n\r\n<p>Dengan peluncuran program beasiswa inovatif ini, Dream University semakin mengukuhkan posisinya sebagai pemimpin dalam menciptakan transformasi positif dalam pendidikan global, sambil memberikan kontribusi yang berarti bagi perkembangan masyarakat dan inovasi di tingkat global.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'univ1.jpg', '2024-06-28', 1),
(9, 'Dream University Tandatangani Kesepakatan Kerjasama Internasional dengan Universitas Terkemuka di Eropa', 'dream-university-tandatangani-kesepakatan-kerjasama-internasional-dengan-universitas-terkemuka-di-eropa', '<p>Dream University hari ini mengumumkan penandatanganan kesepakatan kerjasama strategis dengan Universitas Elite di Eropa, yang akan membuka pintu bagi pertukaran mahasiswa dan kolaborasi penelitian lintas benua yang mendalam.</p>\r\n\r\n<p>Kesepakatan ini menandai langkah penting dalam upaya Dream University untuk memperluas jaringan globalnya dan meningkatkan kualitas pendidikan serta inovasi yang ditawarkan kepada mahasiswa dan staf akademiknya. Universitas di Eropa yang terlibat dalam kesepakatan ini dikenal dengan reputasi akademik yang sangat baik dalam berbagai bidang studi, yang akan memberikan peluang berharga bagi mahasiswa Dream University untuk mendapatkan pengalaman internasional yang mendalam.</p>\r\n\r\n<p>Prof. John Smith, Dekan Kerjasama Internasional Dream University, menyatakan, &quot;Kami sangat gembira atas kesepakatan ini yang akan memberikan manfaat besar bagi komunitas universitas kami. Kolaborasi dengan institusi-institusi terkemuka di Eropa tidak hanya akan meningkatkan kualitas pendidikan yang kami tawarkan, tetapi juga akan membuka peluang baru untuk penelitian bersama dan pengembangan inovasi di tingkat internasional.&quot;</p>\r\n\r\n<p>Kesepakatan ini mencakup program pertukaran mahasiswa, pertukaran fakultas, serta kerjasama dalam proyek-proyek penelitian yang saling menguntungkan. Hal ini diharapkan akan memperkaya pengalaman belajar mahasiswa serta memperluas wawasan akademik dan profesional mereka.</p>\r\n\r\n<p>Dalam konteks globalisasi pendidikan tinggi saat ini, kerjasama lintas batas seperti ini menjadi semakin penting dalam mempersiapkan mahasiswa untuk menjadi pemimpin yang mampu beradaptasi dengan lingkungan global yang berubah dengan cepat.</p>\r\n\r\n<p>Kesepakatan kerjasama ini juga mencerminkan komitmen Dream University untuk menjadi pemain utama dalam pengembangan pendidikan global yang berkelanjutan dan inklusif. Diharapkan, kerjasama ini akan memberikan kontribusi positif yang signifikan dalam membangun jaringan akademik yang kuat dan saling mendukung di antara universitas-universitas terkemuka di dunia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'galeri12.jpg', '2024-06-28', 1),
(11, 'Dream University Menyelenggarakan Konferensi Internasional tentang Inovasi Teknologi dalam Pendidikan', 'dream-university-menyelenggarakan-konferensi-internasional-tentang-inovasi-teknologi-dalam-pendidikan', '<p>Dream University baru-baru ini menjadi tuan rumah konferensi internasional yang bertema &quot;Masa Depan Pendidikan: Inovasi Teknologi dalam Pembelajaran&quot;. Acara ini dihadiri oleh para pakar, akademisi, dan praktisi pendidikan dari berbagai negara yang berbagi pandangan dan penemuan terbaru dalam penerapan teknologi untuk meningkatkan kualitas pendidikan.</p>\r\n\r\n<p>Konferensi tersebut menyoroti berbagai aspek inovasi teknologi dalam pendidikan, termasuk penggunaan kecerdasan buatan, realitas virtual, dan pembelajaran berbasis game untuk meningkatkan pengalaman belajar mahasiswa. Para peserta juga membahas tantangan dan peluang dalam mengintegrasikan teknologi baru dalam kurikulum akademik serta dampaknya terhadap cara kita mengajar dan belajar di era digital ini.</p>\r\n\r\n<p>Dr. Emily Chang, Ketua Panitia Konferensi dan Profesor Teknologi Pendidikan di Dream University, mengatakan, &quot;Konferensi ini menjadi platform penting bagi para pemangku kepentingan dalam pendidikan untuk berbagi pengetahuan dan best practice dalam memanfaatkan teknologi untuk meningkatkan mutu pendidikan. Kami berharap bahwa hasil diskusi dan kolaborasi dari konferensi ini akan mendorong terobosan baru dalam pendidikan global.&quot;</p>\r\n\r\n<p>Selain presentasi dari para ahli, konferensi ini juga menampilkan sesi panel, lokakarya interaktif, dan demonstrasi teknologi terbaru yang relevan dengan bidang pendidikan. Hal ini memberikan kesempatan bagi peserta untuk mendapatkan pemahaman yang lebih dalam tentang potensi teknologi untuk menciptakan pembelajaran yang lebih efektif, inklusif, dan menarik.</p>\r\n\r\n<p>Partisipasi yang luas dari komunitas pendidikan global dalam konferensi ini mencerminkan minat yang tinggi terhadap penerapan teknologi dalam konteks pendidikan modern. Dream University, sebagai tuan rumah acara ini, terus berkomitmen untuk memimpin dan mendorong inovasi dalam pendidikan serta menghadirkan pembelajaran yang relevan dengan tuntutan zaman.</p>\r\n\r\n<p>Dengan kontribusi dari para pemikir dan praktisi pendidikan terkemuka, konferensi ini diharapkan dapat menginspirasi langkah-langkah lebih lanjut dalam memanfaatkan teknologi untuk menciptakan masa depan pendidikan yang lebih dinamis dan adaptif.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'galeri11.jpg', '2024-06-28', 1),
(16, 'Dream University Mengumumkan Perluasan Kampus Baru ', 'dream-university-mengumumkan-perluasan-kampus-baru', '<p>Dream University, salah satu universitas terkemuka di wilayah ini, telah mengumumkan rencana ambisius untuk memperluas infrastruktur kampusnya dengan mendirikan bangunan baru yang mengesankan. Pengumuman ini merupakan bagian dari visi jangka panjang universitas untuk meningkatkan fasilitas dan pengalaman belajar bagi mahasiswa dan staf.</p>\r\n\r\n<p>Kampus baru ini direncanakan akan menampung lebih banyak ruang kelas, laboratorium modern, pusat riset, serta fasilitas pendukung lainnya yang akan memperkaya pengalaman belajar dan penelitian. Dengan adanya perluasan ini, Dream University berharap dapat menarik lebih banyak mahasiswa berbakat dari seluruh dunia untuk belajar di lingkungan akademik yang dinamis dan inovatif.</p>\r\n\r\n<p>Dr. Amanda Tan, Rektor Dream University, mengungkapkan, &quot;Perluasan kampus ini adalah langkah penting dalam mewujudkan misi kami untuk menjadi pusat pendidikan dan penelitian yang terkemuka di dunia. Kami berkomitmen untuk memberikan fasilitas terbaik bagi mahasiswa dan staf kami agar mereka dapat mencapai potensi penuh mereka dalam lingkungan yang mendukung dan memotivasi.&quot;</p>\r\n\r\n<p>Rencana ini telah mendapatkan dukungan luas dari komunitas universitas, termasuk dosen dan mahasiswa yang antusias dengan prospek peningkatan fasilitas dan sumber daya yang lebih baik. Selain itu, perluasan kampus ini diharapkan juga akan memberikan dampak positif terhadap ekonomi lokal dengan menciptakan peluang kerja baru dan meningkatkan kegiatan sosial di sekitar kawasan kampus.</p>\r\n\r\n<p>Universitas juga berencana untuk memanfaatkan teknologi hijau dalam pembangunan kampus baru ini, dengan komitmen untuk menjaga keberlanjutan lingkungan serta mengurangi dampak lingkungan dari pembangunan infrastruktur baru.</p>\r\n\r\n<p>Rencana perluasan kampus Dream University diharapkan akan segera memasuki tahap pembangunan dalam beberapa bulan mendatang, dengan target selesai dalam dua tahun ke depan. Semua pihak yang terlibat termasuk pihak manajemen universitas, pemerintah daerah, dan kontraktor telah bekerja sama untuk memastikan kelancaran dan keberhasilan proyek ini.</p>\r\n\r\n<p>Dengan perluasan ini, Dream University tidak hanya akan memperkuat posisinya sebagai lembaga pendidikan unggulan tetapi juga akan memberikan kontribusi yang signifikan bagi masyarakat lokal dan global dalam bidang pendidikan, penelitian, dan inovasi.</p>\r\n', 'univ.jpg', '2024-06-29', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama_dosen` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `id_matkul` int(3) DEFAULT NULL,
  `pendidikan` varchar(5) DEFAULT NULL,
  `foto_dosen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nip`, `nama_dosen`, `tempat_lahir`, `tgl_lahir`, `id_matkul`, `pendidikan`, `foto_dosen`) VALUES
(2, '80452789', 'Belle', 'Bangka Belitung', '2003-01-07', 6, 'S3', 'user3.png'),
(6, '54278106', 'Muhammad Taehyung', 'Tegal', '2000-05-30', 5, 'S1', 'user2.png'),
(7, '37256198', 'Karina Putri', 'Brebes', '2000-05-10', 1, 'S2', 'user1.png'),
(8, '62591045', 'Hwang Hyunjin', 'Bandung', '1991-12-01', 9, 'D3', 'user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `ket_file` varchar(255) DEFAULT NULL,
  `file` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`id_file`, `ket_file`, `file`) VALUES
(5, 'Pedoman', 'Pedoman-Umum-PKM-2023.pdf'),
(7, 'Modul', 'Deskripsi_Web_Programming_II-UBSI.pdf'),
(8, 'Jurnal', 'ANALISIS_ISI_FILM_EXHUMA.docx'),
(9, 'Template Jurnal', 'Template-Jurnal.docx'),
(10, 'Materi', '948-P03.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `id_galeri` int(11) NOT NULL,
  `ket_foto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id_foto`, `id_galeri`, `ket_foto`, `foto`) VALUES
(10, 1, 'Kompetisi', 'robo2.jpg'),
(11, 1, 'Proses', 'news2.jpeg'),
(12, 1, 'Hasil', 'robo.jpg'),
(13, 2, 'Diskusi', 'ospek4.jpeg'),
(14, 2, 'Kesepakatan', 'ospek3.jpeg'),
(15, 3, 'Perpustakaan', 'perpustakaan.jpeg'),
(16, 3, 'Laboratorium', 'lab.jpeg'),
(18, 3, 'Lapangan', 'lapangan.jpeg'),
(19, 3, 'Ruangan Kelas', 'kelas.jpeg'),
(20, 3, 'Lapangan Indoor', 'indoor.jpeg'),
(21, 3, 'Lab Komputer', 'lab_kom.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` text NOT NULL,
  `sampul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_galeri`, `sampul`) VALUES
(1, 'Kompetisi Robotik', 'robo3.jpg'),
(2, 'Kegiatan Ospek', 'ospek2.jpeg'),
(3, 'Pengenalan Kampus', 'univ2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Sastra Jepang'),
(2, 'Sastra Inggris'),
(3, 'Teknik Komputer'),
(4, 'Teknik Informatika'),
(5, 'Ilmu Ekonomi'),
(6, 'Akuntansi'),
(7, 'Ekonomi Pembangunan'),
(8, 'Manajemen Bisnis'),
(9, 'Ilmu Komunikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(10) DEFAULT NULL,
  `nama_mahasiswa` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `id_jurusan` int(3) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `foto_mahasiswa` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama_mahasiswa`, `tempat_lahir`, `tgl_lahir`, `id_jurusan`, `kelas`, `foto_mahasiswa`) VALUES
(1, '17210567', 'Kang Haerin', 'Bandung', '2007-06-06', 1, '17.1A.07', 'haerin.jpg'),
(2, '17210752', 'Hanni Pham', 'Banten', '2007-02-05', 5, '11.4B.07', 'hanni.jpg'),
(3, '17210427', 'Danielle', 'Medan', '2009-12-15', 6, '17.3A.07', 'danielle.jpg'),
(4, '1721392', 'Kim Minji', 'Palembang', '2000-07-03', 3, '17.4A.07', 'minjii.jpg'),
(6, '17210452', 'Hyein', 'Wonosobo', '2003-08-13', 4, '17.1A.07', 'hyein.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(3) NOT NULL,
  `nama_matkul` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama_matkul`) VALUES
(1, 'Web Programming I'),
(2, 'Struktur Data'),
(3, 'Bahasa Inggris'),
(4, 'Computer Forensik'),
(5, 'Teknik Penulisan Karya Ilmiah'),
(6, 'Kriptografi'),
(7, 'Jaringan Komputer'),
(8, 'Mobile Programming'),
(9, 'Web Programming II'),
(13, 'Routing & Switching Essential');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(255) DEFAULT NULL,
  `isi_pengumuman` text,
  `tgl_pengumuman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `tgl_pengumuman`) VALUES
(2, 'Ujian Tengah Semester', 'Diberitahukan kepada seluruh mahasiswa Dream University bahwa ujian akan dilaksanakan pada 15 April 2024.', '2024-04-08'),
(4, 'Event Ulang Tahun ', 'Diberitahukan kepada seluruh mahasiswa Dream University bahwa seminggu lagi tepatnya pada tanggal 24 Juni 2024 akan diadakan lomba dalam rangka memperingati 25 tahun berdirinya Dream University. Kepada mahasiswa yang tertarik untuk berpartisipasi diharapkan mendaftar pada panitia di lantai bawah dekat ruangan TU. Terima Kasih.', '2024-06-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(1) NOT NULL,
  `nama_kampus` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL,
  `rektor_kampus` varchar(30) DEFAULT NULL,
  `foto_rektor` varchar(255) DEFAULT NULL,
  `visi` text,
  `misi` text,
  `sejarah` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `nama_kampus`, `alamat`, `no_telpon`, `rektor_kampus`, `foto_rektor`, `visi`, `misi`, `sejarah`) VALUES
(1, 'Dream University ', 'Penacony', '0823-6517-8431', 'Willy Gunadi, S.Kom.', 'pimpinan.jpeg', 'Dream University didirikan dengan visi untuk menciptakan sebuah institusi pendidikan tinggi yang ideal, yang tidak hanya berfokus pada keunggulan akademis tetapi juga pada pengembangan karakter, kreativitas, dan potensi penuh setiap mahasiswa. Didorong oleh kebutuhan akan sebuah tempat dimana mimpi-mimpi besar dapat diwujudkan dan bakat-bakat unik dapat dikembangkan, Dream University lahir dari semangat inovasi dan komitmen terhadap pendidikan yang holistrik.', 'Misi utama Dream University adalah menyediakan pendidikan yang inovatif, inklusif, dan berorientasi pada masa depan, dengan fokus pada pengembangan keterampilan kritis.', 'Dream University didirikan pada tahun 2019 oleh DR. Mayang, seorang pendidik visioner yang memiliki pengalaman lebih dari 30 tahun dalam bidang pendidikan. Dr Mayang bersama dengan sekelompok kecil akademisi dan pengusaha, merayakan adanya kesenjangan antara kebutuhan dunia nyata dengan kurikulum yang diajarkan di banyak universitas tradisional. Mereka bermimpi untuk menciptakan sebuah universitas yang dapat menjembatani kesenjangan ini dan mempersiapkan mahasiswa untuk menghadapi tantangan global yang semakin kompleks.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', 1),
(2, 'User', 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
