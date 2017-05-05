-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Apr 2017 pada 07.05
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modulsepuluh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(30) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `email`, `jurusan`) VALUES
('6706140004', 'Yoga', 'Yoga@gmail.com', 'D3 Teknik Informatika'),
('6706140005', 'Santoso', 'Santoso@gmail.com', 'D3 Teknik Informatika'),
('6706140006', 'Dodi', 'Dodi@gmail.com', 'D3 Teknik Informatika'),
('6706140007', 'Adi', 'Adi@gmail.com', 'D3 Teknik Informatika'),
('6706140008', 'Bagus', 'Bagus@gmail.com', 'D3 Teknik Informatika'),
('6706140009', 'Bimo', 'Bimo@gmail.com', 'D3 Teknik Informatika'),
('6706140010', 'Oca', 'Oca@gmail.com', 'D3 Teknik Informatika'),
('6706140011', 'Riva', 'Riva@gmail.com', 'D3 Teknik Informatika'),
('6706140012', 'Kristi', 'Kristi@gmail.com', 'D3 Teknik Informatika'),
('6706140013', 'Janyver', 'Janyver@gmail.com', 'D3 Teknik Informatika'),
('6706140014', 'Hengky', 'Hengky@gmail.com', 'D3 Teknik Informatika'),
('6706140015', 'Arizal', 'Arizal@gmail.com', 'D3 Teknik Informatika'),
('6706140016', 'Agung', 'Agung@gmail.com', 'D3 Teknik Informatika'),
('6706140017', 'Aris', 'Aris@gmail.com', 'D3 Teknik Informatika'),
('6706140018', 'Fatur', 'Fatur@gmail.com', 'D3 Teknik Informatika'),
('6706140019', 'Dikna', 'Dikna@gmail.com', 'D3 Teknik Informatika'),
('6706140020', 'Bram', 'Bram@gmail.com', 'D3 Teknik Informatika'),
('6706140021', 'Angga', 'Angga@gmail.com', 'D3 Teknik Informatika'),
('6706140022', 'Robi', 'Robi@gmail.com', 'D3 Teknik Informatika'),
('6706140023', 'Jalu', 'Jalu@gmail.com', 'D3 Teknik Informatika'),
('6706140024', 'Hadi', 'Hadi@gmail.com', 'D3 Teknik Informatika'),
('6706140025', 'Hari', 'Hari@gmail.com', 'D3 Teknik Informatika'),
('6706140026', 'Wawan', 'Wawan@gmail.com', 'D3 Teknik Informatika'),
('6706140027', 'Johan', 'Johan@gmail.com', 'D3 Teknik Informatika'),
('6706140028', 'Udin', 'Udin@gmail.com', 'D3 Teknik Informatika'),
('6706140029', 'Fery', 'Fery@gmail.com', 'D3 Teknik Informatika'),
('6706140030', 'Firman', 'Firman@gmail.com', 'D3 Teknik Informatika'),
('6706140031', 'Ari', 'Ari@gmail.com', 'D3 Teknik Informatika'),
('6706140032', 'Lukman', 'Lukman@gmail.com', 'D3 Teknik Informatika'),
('6706140033', 'Shervano', 'Shervano@gmail.com', 'D3 Teknik Informatika'),
('6706140034', 'Widya', 'Widya@gmail.com', 'D3 Teknik Informatika'),
('6706140035', 'David', 'David@gmail.com', 'D3 Teknik Informatika'),
('6706140036', 'Rosyid', 'Rosyid@gmail.com', 'D3 Teknik Informatika'),
('6706140037', 'Arga', 'Arga@gmail.com', 'D3 Teknik Informatika'),
('6706140038', 'Galih', 'Galih@gmail.com', 'D3 Teknik Informatika'),
('6706140039', 'Parabu', 'Parabu@gmail.com', 'D3 Teknik Informatika'),
('6706140040', 'Dony', 'Dony@gmail.com', 'D3 Teknik Informatika'),
('6706140041', 'Tarom', 'Tarom@gmail.com', 'D3 Teknik Informatika'),
('6706140042', 'Bowo', 'Bowo@gmail.com', 'D3 Teknik Informatika'),
('6706140043', 'Ghofuri', 'Ghofuri@gmail.com', 'D3 Teknik Informatika'),
('6706140044', 'Anang', 'Anang@gmail.com', 'D3 Teknik Informatika'),
('6706140045', 'Fahmi', 'Fahmi@gmail.com', 'D3 Teknik Informatika'),
('6706140046', 'Shofi', 'Shofi@gmail.com', 'D3 Teknik Informatika'),
('6706140047', 'Ismi', 'Ismi@gmail.com', 'D3 Teknik Informatika'),
('6706140048', 'Dewi', 'Dewi@gmail.com', 'D3 Teknik Informatika'),
('6706140049', 'Justi', 'Justi@gmail.com', 'D3 Teknik Informatika'),
('6706140050', 'Nike', 'Nike@gmail.com', 'D3 Teknik Informatika'),
('6706140051', 'Ratih', 'Ratih@gmail.com', 'D3 Teknik Informatika'),
('6706140052', 'Cahya', 'Cahya@gmail.com', 'D3 Teknik Informatika'),
('6706140053', 'Helen', 'Helen@gmail.com', 'D3 Teknik Informatika'),
('6706140054', 'Tika', 'Tika@gmail.com', 'D3 Teknik Informatika'),
('6706140055', 'Putri', 'Putri@gmail.com', 'D3 Teknik Informatika'),
('6706140056', 'Nita', 'Nita@gmail.com', 'D3 Teknik Informatika'),
('6706140057', 'Ratna', 'Ratna@gmail.com', 'D3 Teknik Informatika'),
('6706140058', 'Fitri', 'Fitri@gmail.com', 'D3 Teknik Informatika'),
('6706140059', 'Puput', 'Puput@gmail.com', 'D3 Teknik Informatika'),
('6706140060', 'Aldo', 'Aldo@gmail.com', 'D3 Teknik Informatika'),
('6706140061', 'Adnan', 'Adnan@gmail.com', 'D3 Teknik Informatika'),
('6706144029', 'rixi', 'andriawanriki@yahoo.com', 'D3 Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file`
--

CREATE TABLE `tb_file` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(30) NOT NULL,
  `tipe_file` varchar(30) NOT NULL,
  `judul` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_file`
--
ALTER TABLE `tb_file`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_file`
--
ALTER TABLE `tb_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
