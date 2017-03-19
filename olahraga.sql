-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Mar 2017 pada 10.16
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olahraga`
--
CREATE DATABASE IF NOT EXISTS `olahraga` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `olahraga`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `hak_akses` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nama_admin`, `username`, `password`, `email`, `hak_akses`) VALUES
('Raka Maheka A', 'admin', 'admin', 'rakad321@gmail.com', 'ADMIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(6) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(20) NOT NULL,
  `ukuran_barang` varchar(10) NOT NULL,
  `stok_barang` int(20) NOT NULL,
  `gambar_barang` varchar(30) NOT NULL,
  `harga_barang` int(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `jenis_barang`, `ukuran_barang`, `stok_barang`, `gambar_barang`, `harga_barang`, `deskripsi`) VALUES
('ACM001', 'AC Milan Home 2014/2015', 'JERSEY', 'L', 15, 'achome1.png', 120000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Climacool<br>\r\nBahan 		: 100% Polyester Climacool Adidas<br>\r\nLogo ACM 	: Bordir<br>\r\nLogo Adidas 	: Bordir<br>'),
('ACM002', 'AC Milan Away 2014/2015', 'JERSEY', 'L', 20, 'acaway.png', 120000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Climacool<br>\r\nBahan 		: 100% Polyester Climacool Adidas<br>\r\nLogo ACM 	: Bordir<br>\r\nLogo Adidas 	: Bordir<br>'),
('ACM003', 'AC Milan Third 2014/2015', 'JERSEY', 'L', 20, 'ac3.png', 120000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Climacool<br>\r\nBahan 		: 100% Polyester Climacool Adidas<br>\r\nLogo ACM 	: Bordir<br>\r\nLogo Adidas 	: Bordir<br>'),
('ARS001', 'Arsenal Home 2014/2015', 'JERSEY', 'L', 15, 'arshome.png', 110000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Dry-cool<br>\r\nBahan 		: 100% Polyester Dry-cool Puma<br>\r\nLogo ARS 	: Bordir<br>\r\nLogo Puma 	: Bordir<br>'),
('ARS002', 'Arsenal Away 2014/2015', 'JERSEY', 'XL', 7, 'arsaway.png', 118000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Dry-cool<br>\r\nBahan 		: 100% Polyester Dry-cool Puma<br>\r\nLogo ARS 	: Bordir<br>\r\nLogo Puma 	: Bordir<br>'),
('ARS003', 'Arsenal Third 2014/2015', 'JERSEY', 'L', 19, 'ars3.jpg', 125000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Dry-cool<br>\r\nBahan 		: 100% Polyester Dry-cool Puma<br>\r\nLogo ARS 	: Bordir<br>\r\nLogo Puma 	: Bordir<br>'),
('ATM001', 'Atletico Madrid Home 2014/2015', 'JERSEY', 'L', 8, 'atmhome.png', 107000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Dri-fit<br>\r\nBahan 		: 100% Polyester Drifit Nike<br>\r\nLogo ATM 	: Bordir<br>\r\nLogo Nike 	: Bordir<br>'),
('ATM002', 'Atletico Madrid Away 2014/2015', 'JERSEY', 'L', 14, 'atmaway.jpg', 110000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Dri-fit<br>\r\nBahan 		: 100% Polyester Drifit Nike<br>\r\nLogo ATM 	: Bordir<br>\r\nLogo Nike 	: Bordir<br>'),
('FCB001', 'FC Barcelona Home 2014/2015', 'JERSEY', 'XL', 18, 'fcbhome.jpg', 130000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Dri-fit<br>\r\nBahan 		: 100% Polyester Drifit Nike<br>\r\nLogo FCB 	: Bordir<br>\r\nLogo Nike 	: Bordir<br>'),
('FCB002', 'FC Barcelona Away 2014/2015', 'JERSEY', 'L', 10, 'fcbaway.png', 115000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Dri-fit<br>\r\nBahan 		: 100% Polyester Drifit Nike<br>\r\nLogo FCB 	: Bordir<br>\r\nLogo Nike 	: Bordir<br>'),
('FCB003', 'FC Barcelona Third 2014/2015', 'JERSEY', 'L', 13, 'fcb3.png', 125000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Dri-fit<br>\r\nBahan 		: 100% Polyester Drifit Nike<br>\r\nLogo FCB 	: Bordir<br>\r\nLogo Nike 	: Bordir<br>'),
('CFC001', 'Chelsea FC Home 2014/2015', 'JERSEY', 'L', 20, 'cfchome.jpg', 110000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Climacool<br>\r\nBahan 		: 100% Polyester Climacool Adidas<br>\r\nLogo CFC 	: Bordir<br>\r\nLogo Adidas 	: Bordir<br>'),
('CFC002', 'Chelsea FC Away 2014/2015', 'JERSEY', 'L', 12, 'cfcaway.png', 120000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Climacool<br>\r\nBahan 		: 100% Polyester Climacool Adidas<br>\r\nLogo CFC 	: Bordir<br>\r\nLogo Adidas 	: Bordir<br>'),
('CFC003', 'Chelsea FC Third 2014/2015', 'JERSEY', 'XL', 15, 'cfc3.png', 130000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Climacool<br>\r\nBahan 		: 100% Polyester Climacool Adidas<br>\r\nLogo CFC 	: Bordir<br>\r\nLogo Adidas 	: Bordir<br>'),
('DOT001', 'Dortmund Home 2014/2015', 'JERSEY', 'L', 16, 'dothome.jpg', 110000, '\r\nKualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Dry-cool<br>\r\nBahan 		: 100% Polyester Dry-cool Puma<br>\r\nLogo DOT 	: Bordir<br>\r\nLogo Puma 	: Bordir<br>'),
('DOT002', 'Dortmund Away 2014/2015', 'JERSEY', 'L', 12, 'dotaway.jpg', 105000, '\r\nKualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Dry-cool<br>\r\nBahan 		: 100% Polyester Dry-cool Puma<br>\r\nLogo DOT 	: Bordir<br>\r\nLogo Puma 	: Bordir<br>'),
('INT001', 'Inter Milan Home 2014/2015', 'JERSEY', 'XL', 9, 'inthome.jpg', 110000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Dri-fit<br>\r\nBahan 		: 100% Polyester Drifit Nike<br>\r\nLogo INT 	: Bordir<br>\r\nLogo Nike 	: Bordir<br>'),
('INT002', 'Inter Milan Away 2014/2015', 'JERSEY', 'L', 11, 'intaway.png', 120000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Dri-fit<br>\r\nBahan 		: 100% Polyester Drifit Nike<br>\r\nLogo INT 	: Bordir<br>\r\nLogo Nike 	: Bordir<br>'),
('JUV001', 'Juventus Home 2014/2015', 'JERSEY', 'XL', 15, 'juvhome.png', 110000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue Dri-fit<br>\r\nBahan 		: 100% Polyester Drifit Nike<br>\r\nLogo JUV 	: Bordir<br>\r\nLogo Nike 	: Bordir<br>'),
('LIV001', 'Liverpool Home 2014/2015', 'JERSEY', 'L', 20, 'livhome.jpg', 120000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue War-tech<br>\r\nBahan 		: 100% Polyester Wartech Warrior<br>\r\nLogo LIV 	: Bordir<br>\r\nLogo Warrior 	: Bordir<br>'),
('LIV002', 'Liverpool Away 2014/2015', 'JERSEY', 'L', 13, 'livaway.png', 110000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue War-tech<br>\r\nBahan 		: 100% Polyester Wartech Warrior<br>\r\nLogo LIV 	: Bordir<br>\r\nLogo Warrior 	: Bordir<br>'),
('LIV003', 'Liverpool Third 2014/2015', 'JERSEY', 'XL', 15, 'liv3.jpg', 110000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue War-tech<br>\r\nBahan 		: 100% Polyester Wartech Warrior<br>\r\nLogo LIV 	: Bordir<br>\r\nLogo Warrior 	: Bordir<br>'),
('LIV004', 'Liverpool GK 2014/2015', 'JERSEY', 'XL', 11, 'livgk.jpg', 115000, 'Kualitas Jersey : Grade Ori Thailand<br>\r\nJenis Jersey 	: Player Issue War-tech<br>\r\nBahan 		: 100% Polyester Wartech Warrior<br>\r\nLogo LIV 	: Bordir<br>\r\nLogo Warrior 	: Bordir<br>'),
('ADS001', 'Adidas Brazuca Brasil 2014', 'BOLA', '5', 10, 'ads01.JPG', 250000, 'Bola Piala Dunia 2014'),
('ADS002', 'Adidas Finale UCL 2014', 'BOLA', '5', 10, 'ads02.JPG', 300000, 'Bola Final Liga Champions'),
('ADS003', 'Adidas Finale UCL2 2014', 'BOLA', '5', 10, 'ads03.JPG', 280000, 'Bola versi 2 Final Liga Champions'),
('NIK001', 'Nike Ordem Match 2014', 'BOLA', '5', 5, 'nike_ordem.JPG', 250000, 'Bola Nike Ordem Friendly Match'),
('NIK002', 'Nike Pitch EPL 2014', 'BOLA', '5', 5, 'nike-pitch-epl.JPG', 300000, 'Bola Nike Pitch English Premier League'),
('NIK003', 'Nike Omni 2014', 'BOLA', '5', 5, 'nike-omni1.JPG', 280000, 'Bola Nike Omni Yellow 2014 '),
('JFCB01', 'Jaket Barcelona Home 2014', 'JAKET', 'L', 10, 'jfcb.jpg', 200000, '\r\nKualitas Jaket  : Grade Ori Thailand<br>\r\nJenis Jaket 	: Player Issue Dri-fit<br>\r\nBahan 		: 100% Polyester Drifit Nike<br>\r\nLogo FCB	: Bordir<br>\r\nLogo Nike 	: Bordir<br>'),
('JCFC01', 'Jaket Chelsea FC Home 2014', 'JAKET', 'L', 10, 'jcfc2.jpg', 200000, 'Kualitas Jaket  : Grade Ori Thailand<br>\r\nJenis Jaket 	: Player Issue Climacool<br>\r\nBahan 		: 100% Polyester Climacool Adidas<br>\r\nLogo CFC 	: Bordir<br>\r\nLogo Adidas 	: Bordir<br>'),
('JLIV01', 'Jaket Liverpool F. C. Home 2014', 'JAKET', 'L', 10, 'jliv.jpg', 200000, 'Kualitas Jaket  : Grade Ori Thailand<br>\r\nJenis Jaket	: Player Issue War-tech<br>\r\nBahan 		: 100% Polyester Wartech Warrior<br>\r\nLogo LIV 	: Bordir<br>\r\nLogo Warrior 	: Bordir<br>'),
('JMU001', 'Jaket Manchester United Home 2014', 'JAKET', 'L', 10, 'jmu.jpg', 200000, 'Kualitas Jaket  : Grade Ori Thailand<br>\r\nJenis Jaket 	: Player Issue Dri-fit<br>\r\nBahan 		: 100% Polyester Drifit Nike<br>\r\nLogo MU		: Bordir<br>\r\nLogo Nike 	: Bordir<br>'),
('JRMA01', 'Jaket Real Madrid Home 2014', 'JAKET', 'L', 10, 'jrma.png', 200000, 'Kualitas Jaket  : Grade Ori Thailand<br>\r\nJenis Jaket 	: Player Issue Climacool<br>\r\nBahan 		: 100% Polyester Climacool Adidas<br>\r\nLogo RMA 	: Bordir<br>\r\nLogo Adidas 	: Bordir<br>'),
('CFCB01', 'Celana Barcelona Home 2014', 'CELANA', 'L', 5, 'cfcb.png', 80000, 'Kualitas Celana : Grade Ori Thailand<br>\r\nJenis Celana	: Player Issue Dri-fit<br>\r\nBahan 		: 100% Polyester Drifit Nike<br>\r\nLogo FCB	: Bordir<br>\r\nLogo Nike 	: Bordir<br>'),
('CCFC01', 'Celana Chelsea FC Home 2014', 'CELANA', 'L', 5, 'ccfc.png', 80000, 'Kualitas Celana : Grade Ori Thailand<br>\r\nJenis Celana 	: Player Issue Climacool<br>\r\nBahan 		: 100% Polyester Climacool Adidas<br>\r\nLogo CFC 	: Bordir<br>\r\nLogo Adidas 	: Bordir<br>'),
('CLIV01', 'Celana Liverpool F.C. Home 2014', 'CELANA', 'L', 5, 'cliv.png', 80000, '\r\nKualitas Celana : Grade Ori Thailand<br>\r\nJenis Celana 	: Player Issue War-tech<br>\r\nBahan 		: 100% Polyester Wartech Warrior<br>\r\nLogo LIV 	: Bordir<br>\r\nLogo Warrior 	: Bordir<br>'),
('CRMA01', 'Celana Real Madrid Home 2014', 'CELANA', 'L', 5, 'crma.png', 80000, 'Kualitas Celana : Grade Ori Thailand<br>\r\nJenis Celana 	: Player Issue Climacool<br>\r\nBahan 		: 100% Polyester Climacool Adidas<br>\r\nLogo RMA 	: Bordir<br>\r\nLogo Adidas 	: Bordir<br>'),
('KACM01', 'Kaos Kaki AC Milan Home 2014', 'KAOS KAKI', '29', 17, 'kacm.png', 50000, 'Kaos Kaki AC Milan Home bahan Dri-FIT, 97% Nylon 3% Spandex'),
('KFCB01', 'Kaos Kaki Barcelona Home 2014', 'KAOS KAKI', '29', 18, 'kfcb.jpg', 50000, 'Kaos Kaki Barcelona Home bahan Dri-FIT, 97% Nylon 3% Spandex'),
('KCFC01', 'Kaos Kaki Chelsea FC Home 2014', 'KAOS KAKI', '29', 19, 'KCFC.png', 50000, 'Kaos Kaki Chelsea Home Home bahan Dri-FIT, 97% Nylon 3% Spandex'),
('KDOT01', 'Kaos Kaki Dortmund Home 2014', 'KAOS KAKI', '29', 15, 'KDOT.jpg', 50000, 'Kaos Kaki Dortmund Home bahan Dri-FIT, 97% Nylon 3% Spandex'),
('KRMA01', 'Kaos Kaki Real Madrid Home 2014', 'KAOS KAKI', '29', 14, 'krma.png', 50000, 'Kaos Kaki Real Madrid Home bahan Dri-FIT, 97% Nylon 3% Spandex'),
('SADS01', 'Sepatu Messi F9 ', 'SEPATU', '43', 20, 'sads1.JPG', 530000, 'Sepatu Bola Messi F9 Grade Ori'),
('SADS02', 'Messi F10 Speed', 'SEPATU', '41', 15, 'sads2.JPG', 500000, 'Sepatu Messi F10 Speed Grade Ori'),
('SADS03', 'Adidas Nitro 3 Evo', 'SEPATU', '41', 5, 'sads3.JPG', 670000, 'Sepatu Adidas Nitro Evo Red Grade Ori'),
('SNIK01', 'Nike Hypervenow Phelon', 'SEPATU', '43', 10, 'nikevenom.JPG', 450000, 'Sepatu Nike Hypervenow KW'),
('SNIK02', 'Nike Libretto White', 'SEPATU', '40', 8, 'nikelibretto.JPG', 690000, 'Sepatu Nike Libretto White Grade Ori'),
('SNIK03', 'Nike Bomba Pro Black', 'SEPATU', '45', 10, 'nikebomba.JPG', 200000, 'Sepatu Nike Bomba Pro Black Grade Ori'),
('TACM01', 'Tas AC Milan 2014', 'TAS', '-', 10, 'tacm.jpg', 230000, '\r\nBahan Luar 	: Terbuat dari Cordura Nylon Tebal dan Jahitan Kuat<br>\r\nBahan Dalam 	: Saten Kahatex<br>\r\nLogo dan Tag 	: Bordir<br>\r\nPunggung 	: Double Mess & Polyfoam 5ml<br>\r\nSlot Laptop 	: Ada Tempat Gadget Laptop 14 Inch<br>'),
('TARS01', 'Tas Arsenal Away 2014', 'TAS', '-', 5, 'tars1.jpg', 250000, '\r\nBahan Luar 	: Terbuat dari Cordura Nylon Tebal dan Jahitan Kuat<br>\r\nBahan Dalam 	: Saten Kahatex<br>\r\nLogo dan Tag 	: Bordir<br>\r\nPunggung 	: Double Mess & Polyfoam 5ml<br>\r\nSlot Laptop 	: Ada Tempat Gadget Laptop 14 Inch<br>'),
('TARS02', 'Tas Arsenal Home 2014', 'TAS', '-', 15, 'tars2.jpg', 250000, '\r\nBahan Luar 	: Terbuat dari Cordura Nylon Tebal dan Jahitan Kuat<br>\r\nBahan Dalam 	: Saten Kahatex<br>\r\nLogo dan Tag 	: Bordir<br>\r\nPunggung 	: Double Mess & Polyfoam 5ml<br>\r\nSlot Laptop 	: Ada Tempat Gadget Laptop 14 Inch<br>'),
('TFCB01', 'Tas Barcelona Home 2014', 'TAS', '-', 5, 'tfcb.jpg', 230000, '\r\nBahan Luar 	: Terbuat dari Cordura Nylon Tebal dan Jahitan Kuat<br>\r\nBahan Dalam 	: Saten Kahatex<br>\r\nLogo dan Tag 	: Bordir<br>\r\nPunggung 	: Double Mess & Polyfoam 5ml<br>\r\nSlot Laptop 	: Ada Tempat Gadget Laptop 14 Inch<br>'),
('TDOR01', 'Tas Dortmund 2014', 'TAS', '-', 8, 'tdor.jpg', 250000, '\r\nBahan Luar 	: Terbuat dari Cordura Nylon Tebal dan Jahitan Kuat<br>\r\nBahan Dalam 	: Saten Kahatex<br>\r\nLogo dan Tag 	: Bordir<br>\r\nPunggung 	: Double Mess & Polyfoam 5ml<br>\r\nSlot Laptop 	: Ada Tempat Gadget Laptop 14 Inch<br>'),
('TLIV01', 'Tas Liverpool Home 2014', 'TAS', '-', 15, 'tliv.jpg', 200000, '\r\nBahan Luar 	: Terbuat dari Cordura Nylon Tebal dan Jahitan Kuat<br>\r\nBahan Dalam 	: Saten Kahatex<br>\r\nLogo dan Tag 	: Bordir<br>\r\nPunggung 	: Double Mess & Polyfoam 5ml<br>\r\nSlot Laptop 	: Ada Tempat Gadget Laptop 14 Inch<br>'),
('TMC001', 'Tas Man City Away 2014', 'TAS', '-', 7, 'tcit.jpg', 250000, '\r\nBahan Luar 	: Terbuat dari Cordura Nylon Tebal dan Jahitan Kuat<br>\r\nBahan Dalam 	: Saten Kahatex<br>\r\nLogo dan Tag 	: Bordir<br>\r\nPunggung 	: Double Mess & Polyfoam 5ml<br>\r\nSlot Laptop 	: Ada Tempat Gadget Laptop 14 Inch<br>'),
('TMU001', 'Tas Man United Home 2014', 'TAS', '-', 9, 'tmu.jpg', 230000, '\r\nBahan Luar 	: Terbuat dari Cordura Nylon Tebal dan Jahitan Kuat<br>\r\nBahan Dalam 	: Saten Kahatex<br>\r\nLogo dan Tag 	: Bordir<br>\r\nPunggung 	: Double Mess & Polyfoam 5ml<br>\r\nSlot Laptop 	: Ada Tempat Gadget Laptop 14 Inch<br>'),
('TRMA01', 'Tas Real Madrid Home 2014', 'TAS', '-', 5, 'trma.jpg', 200000, '\r\nBahan Luar 	: Terbuat dari Cordura Nylon Tebal dan Jahitan Kuat<br>\r\nBahan Dalam 	: Saten Kahatex<br>\r\nLogo dan Tag 	: Bordir<br>\r\nPunggung 	: Double Mess & Polyfoam 5ml<br>\r\nSlot Laptop 	: Ada Tempat Gadget Laptop 14 Inch<br>'),
('TSM001', 'BLABLA 2', 'CELANA', 'L', 100, 'CHEL2.png', 200000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `kode_customer` varchar(6) NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `alamat_customer` text NOT NULL,
  `kota_customer` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `kode_customer`, `nama_customer`, `alamat_customer`, `kota_customer`, `no_telepon`) VALUES
(1, 'CUS001', 'Raka Maheka A', 'Guro 2 Karawang Timur', 'Karawang', '085714170093'),
(2, 'CUS002', 'Andrian', 'Cimaung', 'Purwakarta', '089789675789'),
(3, 'CUS003', 'Ade', 'Klari', 'Cirebon', '089785698389'),
(4, 'CUS004', 'Debby', 'Cimahi', 'Bandung', '086866476376'),
(5, 'CUS005', 'Rompas', 'Cilembu', 'Manado', '08768687586'),
(6, 'CUS006', 'Udin', 'Klari', 'Karawang', '085697004351'),
(7, 'CUS007', 'Desi Khusnul Meliana', 'Walahar', 'Karawang', '089668009545'),
(8, 'CUS008', 'Raka Maheka A', 'CIMAHI', 'Bandung', '0897906'),
(9, 'CUS009', 'Raka Maheka A', 'Guro 2', 'Karawang', '085714170093'),
(10, 'CUS010', 'Debby', 'Dago', 'Bandung', '0897896757');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasok`
--

CREATE TABLE `pasok` (
  `kode_pasok` varchar(6) NOT NULL,
  `kode_barang` varchar(6) NOT NULL,
  `kode_suplier` varchar(6) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jumlah_pasok` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasok`
--

INSERT INTO `pasok` (`kode_pasok`, `kode_barang`, `kode_suplier`, `tanggal`, `jumlah_pasok`) VALUES
('PAS001', 'ACM001', 'SUP001', '19-07-2014', 50),
('PAS002', 'ACM002', 'SUP001', '20-07-2014', 50),
('PAS003', 'ACM003', 'SUP001', '20-07-2014', 50),
('PAS004', 'ARS001', 'SUP001', '20-07-2014', 50),
('PAS005', 'ARS002', 'SUP001', '20-07-2014', 50),
('PAS006', 'ARS003', 'SUP001', '20-07-2014', 50),
('PAS007', 'ATM001', 'SUP001', '20-7-2014', 50),
('PAS008', 'ATM002', 'SUP001', '20-7-2014', 50),
('PAS009', 'FCB001', 'SUP001', '20-7-2014', 50),
('PAS010', 'FCB002', 'SUP001', '20-7-2014', 50),
('PAS011', 'FCB003', 'SUP001', '20-7-2014', 50),
('PAS012', 'CFC001', 'SUP001', '20-7-2014', 50),
('PAS013', 'CFC002', 'SUP001', '20-7-2014', 50),
('PAS014', 'CFC003', 'SUP001', '20-7-2014', 50),
('PAS015', 'DOT001', 'SUP001', '14-8-2014', 40),
('PAS016', 'DOT002', 'SUP001', '14-8-2014', 40),
('PAS017', 'INT001', 'SUP001', '17-8-2014', 30),
('PAS018', 'INT002', 'SUP001', '17-8-2014', 40),
('PAS019', 'JUV001', 'SUP001', '22-8-2014', 50),
('PAS020', 'LIV001', 'SUP001', '30-9-2014', 50),
('PAS021', 'LIV002', 'SUP001', '30-9-2014', 30),
('PAS022', 'LIV003', 'SUP001', '30-9-2014', 40),
('PAS023', 'LIV004', 'SUP001', '30-9-2014', 30),
('PAS024', 'ADS001', 'SUP002', '5-8-2014', 10),
('PAS025', 'ADS002', 'SUP002', '5-8-2014', 10),
('PAS026', 'ADS003', 'SUP002', '5-8-2014', 10),
('PAS027', 'NIK001', 'SUP002', '5-8-2014', 15),
('PAS028', 'NIK002', 'SUP002', '5-8-2014', 15),
('PAS029', 'NIK003', 'SUP002', '5-8-2014', 15),
('PAS030', 'JFCB01', 'SUP003', '16-6-2014', 20),
('PAS031', 'JCFC01', 'SUP003', '16-6-2014', 20),
('PAS032', 'JLIV01', 'SUP003', '16-6-2014', 20),
('PAS033', 'JMU001', 'SUP003', '16-6-2014', 30),
('PAS034', 'JRMA01', 'SUP003', '16-6-2014', 20),
('PAS035', 'SADS01', 'SUP002', '25-7-2014', 10),
('PAS036', 'SADS02', 'SUP002', '25-7-2014', 10),
('PAS037', 'SADS03', 'SUP002', '25-7-2014', 10),
('PAS038', 'SNIK01', 'SUP002', '21-10-2014', 15),
('PAS039', 'SNIK02', 'SUP002', '21-10-2014', 10),
('PAS040', 'SNIK03', 'SUP002', '21-10-2014', 15),
('PAS041', 'KACM01', 'SUP001', '2-9-2014', 20),
('PAS042', 'KCFC01', 'SUP001', '2-9-2014', 15),
('PAS043', 'KFCB01', 'SUP001', '2-9-2014', 20),
('PAS044', 'KDOT01', 'SUP001', '2-9-2014', 20),
('PAS045', 'KRMA01', 'SUP001', '2-9-2014', 10),
('PAS046', 'CFCB01', 'SUP003', '11-9-2014', 30),
('PAS047', 'CCFC01', 'SUP003', '11-9-2014', 30),
('PAS048', 'CLIV01', 'SUP003', '11-9-2014', 10),
('PAS049', 'CRMA01', 'SUP003', '13-9-2014', 30),
('PAS050', 'TACM01', 'SUP002', '12-10-2014', 20),
('PAS051', 'TARS01', 'SUP002', '12-10-2014', 20),
('PAS052', 'TARS02', 'SUP002', '12-10-2014', 10),
('PAS053', 'TFCB01', 'SUP002', '17-10-2014', 15),
('PAS054', 'TDOR01', 'SUP002', '17-10-2014', 10),
('PAS055', 'TLIV01', 'SUP002', '17-10-2014', 20),
('PAS056', 'TMC001', 'SUP002', '31-8-2014', 20),
('PAS057', 'TMU001', 'SUP002', '15-9-2014', 10),
('PAS058', 'TRMA01', 'SUP002', '15-9-2014', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `kode_beli` varchar(6) NOT NULL,
  `kode_barang` varchar(6) NOT NULL,
  `kode_customer` varchar(6) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_beli` int(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id`, `kode_beli`, `kode_barang`, `kode_customer`, `tanggal`, `jumlah_beli`, `status`) VALUES
(1, 'BEL001', 'TRMA01', 'CUS001', '2014-10-20', 5, 'BELUM LUNAS'),
(2, 'BEL002', 'TLIV01', 'CUS002', '2014-10-10', 10, 'BELUM LUNAS'),
(3, 'BEL003', 'TDOR01', 'CUS003', '2014-10-20', 6, 'BELUM LUNAS'),
(4, 'BEL004', 'NIK002', 'CUS004', '2014-10-21', 7, 'BELUM LUNAS'),
(5, 'BEL005', 'KACM01', 'CUS005', '2014-10-21', 6, 'BELUM LUNAS'),
(6, 'BEL006', 'TARS01', 'CUS006', '2014-10-27', 1, 'BELUM LUNAS'),
(7, 'BEL007', 'TARS01', 'CUS007', '2014-11-14', 1, 'LUNAS'),
(8, 'BEL008', 'LIV003', 'CUS008', '2014-11-17', 1, 'BELUM LUNAS'),
(9, 'BEL009', 'LIV002', 'CUS009', '2015-11-21', 2, 'BELUM LUNAS'),
(10, 'BEL010', 'TDOR01', 'CUS010', '2015-11-21', 4, 'LUNAS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplier`
--

CREATE TABLE `suplier` (
  `kode_suplier` varchar(6) NOT NULL,
  `nama_suplier` varchar(30) NOT NULL,
  `alamat_suplier` text NOT NULL,
  `kota_suplier` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suplier`
--

INSERT INTO `suplier` (`kode_suplier`, `nama_suplier`, `alamat_suplier`, `kota_suplier`, `no_telepon`) VALUES
('SUP001', 'Big Match Jersey', 'Jakarta Selatan', 'Jakarta', '085712345678'),
('SUP002', 'Golden Goal Bekasi', 'Bekasi Timur', 'Bekasi', '085714136827'),
('SUP003', 'Toko Jersey Sidoharjo', 'Sidoharjo', 'Surabaya', '089614548298');

-- --------------------------------------------------------

--
-- Struktur dari tabel `voting`
--

CREATE TABLE `voting` (
  `vote` varchar(180) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `voting`
--

INSERT INTO `voting` (`vote`) VALUES
('YA'),
('TIDAK'),
('YA'),
('TIDAK'),
('TIDAK'),
('YA'),
('YA'),
('YA'),
('YA'),
('YA'),
('YA'),
('YA'),
('YA'),
('TIDAK'),
('YA'),
('TIDAK'),
('YA'),
('YA'),
('YA'),
('YA'),
('YA'),
('YA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`kode_customer`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `pasok`
--
ALTER TABLE `pasok`
  ADD PRIMARY KEY (`kode_pasok`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`,`kode_suplier`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`,`kode_customer`),
  ADD UNIQUE KEY `kode_beli` (`kode_beli`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`kode_suplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
