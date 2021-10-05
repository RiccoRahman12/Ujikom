-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2021 at 07:00 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pengaduan masyarakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE IF NOT EXISTS `masyarakat` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('321000001519', 'Nadya Kahitna', 'kahitna2000', 'kahitna100', '082658161162'),
('327110000022', 'Dadang Uta', 'dadang69', '123dadang', '088286511121'),
('327110000131', 'Rizal Indrawan', 'indrazal19', 'indra123', '081651926511'),
('327110000134', 'Arya Apriliansyah', 'arya2003', 'arya123', '085691736175'),
('327110000311', 'Kurniawan Mega', 'megakur21', 'megakur98', '081865112216'),
('327110001004', 'Nunung Putri', 'nungput2', 'putnung2000', '081285181816'),
('327110001009', 'Tri Lesmana', 'triles2003', 'triles90', '085182758115'),
('327110001521', 'Bulan Anggun', 'anggun90', 'anggun89', '085188818111'),
('327110003002', 'Agus Septian', 'septian2', 'septian20', '089251717214'),
('327110003109', 'Indah Himawari', 'himawari1', 'himawari10', '082517687238'),
('327110007001', 'Hendri Kurniawan', 'kurniawan99', 'kurniawan', '085817851111'),
('327201001001', 'Indah Permatasari', 'permata', 'permata', '089271756121');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE IF NOT EXISTS `pengaduan` (
  `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pengaduan` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai') NOT NULL,
  PRIMARY KEY (`id_pengaduan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `nama`, `isi_laporan`, `foto`, `status`) VALUES
(9, '2021-04-05', '327201001001', 'permata', 'saya mau melaporakan tentang jalan rusak yang berada didaerah lingkungan rumah saya, bertepatan di jl.sholeh iskandar', 'jalanrusak6.jpg', 'selesai'),
(10, '2021-04-05', '327110003109', 'Himawari', 'Selamat siang admin, saya mau melaporkan adanya kerusakan jalan di jl.sholeh iskandar no.15, berikut bukti yang saya bisa berikan.', 'jalanrusak2.jpg', 'selesai'),
(11, '2021-04-05', '327110003002', 'Septian', 'Saya ingin melaporkan kerusakan jalan disekitar daerah rumah saya yang berada di jl.bojong gede, berikut saya sertakan bukti foto kerusakan jalan tersebut.', 'jalanrusak6.jpg', 'selesai'),
(12, '2021-04-05', '327110003002', 'Septian', 'Hi min, aku mau laporan lagi ni hehe, ada kerusakan jalan disekitar daerah rumah saudaraku yang berada di jl.kampung rambutan no 19, berikut bukti yang aku sertakan dengan jelas.', 'jalanrusak3.jpg', '0'),
(13, '2021-04-05', '327201001001', 'Septian', 'Saya Mau Melaporkan Adanya kerusakan dijalan, sekitaran jl.sholeh sikandar berikut buktinya', 'jalanrusak6.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp_petugas` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp_petugas`, `level`) VALUES
(1, 'Arya Apriliansyah', 'admin', 'admin', '018691671823', 'admin'),
(2, 'Tantri win', 'petugas', 'petugas', '03869279282', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE IF NOT EXISTS `tanggapan` (
  `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL,
  PRIMARY KEY (`id_tanggapan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(6, 9, '2021-04-05', 'Kami akan menindak lanjuti pengaduan anda', 1),
(7, 11, '2021-04-05', 'Kami akan menindak Lanjuti laporan anda', 1),
(8, 10, '2021-04-05', 'Kami Akan Menindak lanjuti laporan anda', 1);
