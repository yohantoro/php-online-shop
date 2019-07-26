-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kategori_id` (`kategori_id`),
  CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `barang` (`id`, `kategori_id`, `nama_barang`, `deskripsi`, `harga`, `stok`, `gambar`) VALUES
(1,	6,	'yes',	'sdf',	12123,	2,	'yes.png'),
(2,	5,	'ads',	'1',	1,	2,	'ads.png'),
(3,	5,	'Anting emas',	'oke bro',	600000,	10,	'Anting emas.png'),
(4,	6,	'Jepit Rambut',	'jangan ditelan!',	50000,	20,	'Jepit Rambut.jpg');

DROP TABLE IF EXISTS `detail_transaksi`;
CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaksi_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1,	'Pakaian Pria'),
(2,	'Pakaian Wanita'),
(3,	'Pakaian Anak'),
(4,	'Aksesoris Pria'),
(5,	'Aksesoris Wanita'),
(6,	'Aksesoris Anak');

DROP TABLE IF EXISTS `keranjang`;
CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `no_transaksi` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `jenis_kelamin` tinyint(4) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `user_type` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `no_telp`, `jenis_kelamin`, `tgl_lahir`, `user_type`) VALUES
(1,	'john_wick',	'$2y$10$QlmnMFT1M.3Ko542B8Iz7.8vCRLO.nwcsL4lGxEnl/pOqHb1dD1p6',	'test@email.com',	'Mario Luigi',	'Jogja',	'081180081180',	1,	'2000-01-01',	'member'),
(2,	'admin',	'$2y$10$g6ioDBIOZshUaLKJak8mx.990Qd2HH4zVuzTx6yHGGK5AzHYnpiVe',	'admin@email.com',	'Administrator',	'Rahasia',	'081180081180',	1,	'2000-01-01',	'admin'),
(3,	'siswa.smk',	'$2y$10$kKWQTz370EOvnSOYE5a23O8Mlj9soynp/Xy0LgP37OwjiV.pltlC2',	'siswa@email.com',	'Syahrini',	'Sanden',	'081180081180',	2,	'2000-01-01',	'member');

-- 2019-07-26 04:14:12
