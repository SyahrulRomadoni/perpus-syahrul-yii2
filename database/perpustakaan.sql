-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Sep 2018 pada 13.05
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
(8, 'anggota1', 'ala anggota1', '1242142353254', 'anggota1@gmail.com', 1),
(9, 'anggota2', 'ala anggota2', '4235423424235', 'anggota2@gmail.com', 1);

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
(15, 'Dimanakah dirimu berada', 2015, 1, 1, 4, '<p>kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;kaskad akdhakdhasd askdhaklsdasl askdalkda askdaskd&nbsp;</p>', '1534306335_Hydrangeas.jpg', '1534306335_semple2.docx');

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
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_buku`, `id_anggota`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(1, 12, 8, '2017-05-05', '2017-05-12'),
(2, 14, 8, '2018-09-04', '2018-09-11'),
(3, 13, 8, '2018-09-04', '2018-09-11'),
(4, 15, 9, '2018-09-04', '2018-09-11'),
(5, 13, 9, '2018-09-04', '2018-09-11'),
(6, 14, 9, '2018-09-04', '2018-09-11');

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
(2, 'PT. Syahrul', 'Jl. Kebenaran 303', '087733195025', 'pt.syahrul@gmail.com');

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
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `id_anggota`, `id_petugas`, `id_user_role`, `status`) VALUES
(1, 'admin', '$2y$13$VSqn1u0bIsYZVs2ZX4zlt.di0iyBOzPb329TBk/0QgE2GuRhH0RPy', 0, 0, 1, 1),
(14, 'anggota1', '$2y$13$QCunQZveRL7jXZgLjKId7O6cziOz9IlS11QrtdFB9Syl2auQOVhYi', 8, 0, 2, 2),
(15, 'anggota2', '$2y$13$BlhS9K9OmSYoD5BNV2HczuW320lOgglEPu6tVhQ9PnjT7ozQ5rWPy', 9, 0, 2, 2),
(16, 'petugas1', '$2y$13$BEwoGYyROe2iNiOFdbzo9ODbkcEYEvMCZlX4XtBEF/PSfd6tN2Ffq', 0, 4, 3, 3),
(17, 'petugas2', '$2y$13$WSHxM9zUDfQCCNtSugO7Yu6Pu7kboic4AOvckpnVUFIKZ3jurNWNe', 0, 5, 3, 3);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
