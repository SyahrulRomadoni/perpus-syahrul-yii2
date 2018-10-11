-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Okt 2018 pada 09.12
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status_aktif` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `alamat`, `telepon`, `email`, `status_aktif`) VALUES
(8, 'anggota1', 'ala anggota11', '1242142353254', 'anggota1@gmail.com', 1),
(9, 'anggota2', 'ala anggota2', '4235423424235', 'anggota2@gmail.com', 1),
(13, 'syahrulromadoni', 'syahrul', '9071049702840', 'syahrulromadoni9898@gmail.com', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tahun_terbit` year(4) DEFAULT NULL,
  `id_penulis` int(11) DEFAULT NULL,
  `id_penerbit` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `sinopsis` text,
  `sampul` varchar(255) DEFAULT NULL,
  `berkas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `nama`, `tahun_terbit`, `id_penulis`, `id_penerbit`, `id_kategori`, `sinopsis`, `sampul`, `berkas`) VALUES
(12, 'Aku adalah istrimu', 2018, 1, 2, 1, '<p>kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;</p>', '1534306210_Koala.jpg', '1534306210_semple1.docx'),
(13, 'Bebaskan aku dari jeratan cintahmu', 2017, 2, 1, 2, '<p>kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;</p>', '1534306248_Penguins.jpg', '1534306248_semple2.docx'),
(14, 'Cintai aku apa adanya', 2016, 3, 2, 3, '<p>kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;</p>', '1534306301_Chrysanthemum.jpg', '1534306301_semple1.docx'),
(15, 'Dimanakah dirimu berada', 2015, 1, 1, 4, '<p>kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;</p>', '1534306335_Hydrangeas.jpg', '1534306335_semple2.docx'),
(16, 'Jadikan aku malaikat cintahmu', 2018, 2, 1, 19, '<p>jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas&nbsp;jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas&nbsp;jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas&nbsp;jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas oiajsdoasidjasoidjoiajsdo aiosdhasodnao</p>', '1536806569_Desert.jpg', '1536806569_semple1.docx'),
(17, 'Zona Cintah', 2015, 3, 2, 17, '<p>jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas&nbsp;jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas&nbsp;jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas&nbsp;jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas oiajsdoasidjasoidjoiajsdo aiosdhasodnao</p>', '1536806627_Lighthouse.jpg', '1536806627_semple2.docx'),
(18, 'Hilangkan Lah rasa cintah mu', 2017, 1, 1, 18, '<p>jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas&nbsp;jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas&nbsp;jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas&nbsp;jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas oiajsdoasidjasoidjoiajsdo aiosdhasodnao</p>', '1536806694_Jellyfish.jpg', '1536806694_semple1.docx'),
(19, 'Kekalkan lah diriku ini', 2018, 1, 2, 1, '<p>jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas&nbsp;jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas&nbsp;jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas&nbsp;jasldkajskd jaksdnasda ndkasd asdaskda shdashdashdu ashdashduans kdashduas ndaskdjnas hsadnkash uasndkasduasnkdn asiuhdas oiajsdoasidjasoidjoiajsdo aiosdhasodnao</p>', '1536806749_Tulips.jpg', '1536806749_semple2.docx'),
(20, 'Dirumu ada Diriku', 2018, 2, 3, 10, '<p>jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk&nbsp;jkasdhkasd alskdhasl asdsdlk</p>', '1538107154_Penguins.jpg', '1538106719_semple1.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Agama'),
(2, 'Pendidikan'),
(3, 'Cerpen'),
(4, 'Puisi'),
(5, 'Novel'),
(6, 'Elektronik'),
(7, 'Cergam'),
(8, 'Komik'),
(9, 'Ensiklopedi'),
(10, 'Nomik'),
(11, 'Antologi'),
(12, 'Dongeng'),
(13, 'Biografi'),
(14, 'Jurnal'),
(15, 'Novelet'),
(16, 'Fotografi'),
(17, 'Karya ilmiah'),
(18, 'Tafsir'),
(19, 'Kamus'),
(20, 'Panduan'),
(21, 'Atlas'),
(22, 'Ilmiah'),
(23, 'Teks'),
(24, 'Mewarnai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status_buku` int(11) NOT NULL,
  `tanggal_pengembalian_buku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_buku`, `id_anggota`, `tanggal_pinjam`, `tanggal_kembali`, `status_buku`, `tanggal_pengembalian_buku`) VALUES
(1, 12, 8, '2017-05-05', '2017-05-12', 2, '2018-09-20'),
(2, 14, 8, '2018-09-04', '2018-09-11', 2, '2018-09-20'),
(3, 13, 8, '2018-09-04', '2018-09-11', 2, '2018-09-20'),
(4, 15, 9, '2018-09-04', '2018-09-11', 1, '0000-00-00'),
(5, 13, 9, '2018-09-04', '2018-09-11', 0, '0000-00-00'),
(6, 14, 9, '2018-09-04', '2018-09-11', 0, '0000-00-00'),
(7, 15, 8, '2018-09-12', '2018-09-19', 0, '0000-00-00'),
(8, 12, 9, '2018-09-12', '2018-09-19', 0, '0000-00-00'),
(9, 16, 8, '2018-09-13', '2018-09-20', 1, '0000-00-00'),
(10, 17, 8, '2018-09-13', '2018-09-20', 1, '0000-00-00'),
(11, 17, 9, '2018-09-18', '2018-09-25', 1, '0000-00-00'),
(12, 12, 8, '2018-09-20', '2018-09-27', 1, '0000-00-00'),
(13, 19, 8, '2018-09-20', '2018-09-27', 1, '0000-00-00'),
(14, 16, 9, '2018-09-20', '2018-09-27', 1, '0000-00-00'),
(15, 15, 8, '2018-09-20', '2018-09-27', 1, '0000-00-00'),
(16, 12, 13, '2018-09-27', '2018-10-04', 1, '0000-00-00'),
(17, 17, 13, '2018-09-28', '2018-10-05', 1, '0000-00-00'),
(18, 16, 13, '2018-09-28', '2018-10-05', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `telepon` varchar(255) DEFAULT NULL,
  `email` varchar(2555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id`, `nama`, `alamat`, `telepon`, `email`) VALUES
(1, 'Polindra', 'Jl. Kebenaran 104', '087733195026', 'polindra@gmail.com'),
(2, 'PT. Syahrul', 'Jl. Kebenaran 303', '087733195025', 'pt.syahrul@gmail.com'),
(3, 'Senang Hati', 'Dimana-mana aja yang penting happy', '0912471209471', 'senanghati@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penulis`
--

CREATE TABLE `penulis` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text,
  `telepon` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penulis`
--

INSERT INTO `penulis` (`id`, `nama`, `alamat`, `telepon`, `email`) VALUES
(1, 'Syahrul', 'Jl. Kebenaran 101', '087733195029', 'syahrul@gmail.com'),
(2, 'Samsul', 'Jl. Kebenaran 102', '087733195028', 'samsul@gmail.com'),
(3, 'Maul', 'Jl. Kebenaran 103', '087733195027', 'maul@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `alamat`, `telepon`, `email`) VALUES
(4, 'petugas1', 'ala petugas1', '2312321321321', 'petugas1@gmail.com'),
(5, 'petugas2', 'ala petugas2', '1232134243254', 'petugas2@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `id_user_role` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `id_anggota`, `id_petugas`, `id_user_role`, `status`, `token`) VALUES
(1, 'admin', '$2y$13$MSTQJKYv9O9Cmhs0izn3wO0hlso23fk1ucW8Iu0/iDK4ivS32oqjy', 0, 0, 1, 1, ''),
(14, 'anggota1', '$2y$13$zpVYASJCqEZAwDKUQISxBuLYuJN4tM2Sr/H04bCDc5h21Jkw4.Wn.', 8, 0, 2, 2, ''),
(15, 'anggota2', '$2y$13$OqtlKIgLt6hySGuA7LpYNOJk2ySbsVqCg/ymuxIRzH/60qT7D46N.', 9, 0, 2, 2, ''),
(16, 'petugas1', '$2y$13$AmXBSZfLMlqZP1brszsSO.scYoy1F3/lvKMl.K/F53uOmbV2z6mMu', 0, 4, 3, 3, ''),
(17, 'petugas2', '$2y$13$WSHxM9zUDfQCCNtSugO7Yu6Pu7kboic4AOvckpnVUFIKZ3jurNWNe', 0, 5, 3, 3, ''),
(18, 'syahrul', '$2y$13$AV4UMXecQ7SaybZ5PYlRXOggoHPiB2Wn..eDs8Q.ZnLag88TbHomq', 13, 0, 2, 2, 'wuDrR20RIiFZ0poN3TJ7ijzEZUQIB78kncponUel-e2RUaeHtt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `nama`) VALUES
(1, 'Admin'),
(2, 'Anggota'),
(3, 'Petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
