-- --------------------------------------------------------
-- Host:                         Localhost
-- Server version:               10.4.18-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for meubelaf
DROP DATABASE IF EXISTS `meubelaf`;
CREATE DATABASE IF NOT EXISTS `meubelaf` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `meubelaf`;

-- Dumping structure for table meubelaf.admin
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table meubelaf.admin: ~2 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
REPLACE INTO `admin` (`id`, `username`, `password`) VALUES
	(1, 'admin', 'admin123');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table meubelaf.barang
DROP TABLE IF EXISTS `barang`;
CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `stock` int(15) DEFAULT NULL,
  PRIMARY KEY (`id_barang`),
  KEY `FK_barang_kategori` (`id_kategori`),
  CONSTRAINT `FK_barang_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- Dumping data for table meubelaf.barang: ~43 rows (approximately)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
REPLACE INTO `barang` (`id_barang`, `id_kategori`, `nama_barang`, `harga`, `stock`) VALUES
	(1, 1, 'Central Paradise Plytop 180', 2500000, 98),
	(2, 1, 'Central Paradise Plytop 160', 2500000, 99),
	(3, 1, 'Central Paradise Standard 160', 1800000, 100),
	(4, 1, 'Uniland Paradise Plytop 180', 2300000, 99),
	(5, 1, 'Uniland Paradise Plytop 160', 2100000, 100),
	(6, 1, 'Uniland Paradise Plytop 120', 1750000, 100),
	(7, 1, 'Uniland Paradise Standard 180', 2000000, 100),
	(8, 1, 'Uniland Paradise Standard 160', 1850000, 100),
	(9, 1, 'Uniland Paradise Standard 120', 1600000, 100),
	(10, 1, 'Uniland Paradise Standard 100', 1400000, 99),
	(11, 1, 'Uniland Paradise Standard 90', 1350000, 100),
	(12, 2, 'Lemari Besi Sliding Ukuran 120', 2350000, 99),
	(13, 2, 'Lemari Besi Sliding Ukuran 90', 2000000, 97),
	(14, 2, 'Lemari Besi Dua Pintu Classic Ukuran 90', 2200000, 97),
	(15, 2, 'Lemari Besi Dua Pintu Minimalis Ukuran 90', 2000000, 99),
	(16, 4, 'Sofa Bed Lotus 3 Fungsi', 2950000, 99),
	(17, 4, 'Sofa  Bed Lotus 2 Fungsi', 2700000, 98),
	(18, 4, 'Sofa Bed Jaguar 0.1 2 Fungsi', 1800000, 98),
	(19, 4, 'Sofa Bed Jaguar 0.2 2 Fungsi', 2000000, 99),
	(20, 4, 'Sofa Bed Oyama 2 Fungsi', 1500000, 98),
	(21, 4, 'Sofa 211 Leo + Meja', 5500000, 98),
	(22, 4, 'Sofa 211 Boxer', 6000000, 98),
	(23, 4, 'Sofa 211 SE 086', 6000000, 92),
	(24, 4, 'Sofa 211 SE 087', 6000000, 98),
	(25, 4, 'Sofa 211 SE 021', 6000000, 100),
	(26, 4, 'Sofa L Liberty Minimalis + Meja', 3300000, 100),
	(27, 4, 'Sofa L Prada + Meja', 4500000, 98),
	(28, 4, 'Sofa L Boxer + Meja', 7500000, 100),
	(29, 3, 'Meja Makan 13291 6 Kursi', 2300000, 100),
	(30, 3, 'Meja Makan 12291 4 Kursi', 1600000, 100),
	(31, 3, 'Meja Makan 4 Kursi Marmer', 2700000, 98),
	(32, 3, 'Meja Makan 6 Kursi Marmer', 3500000, 100),
	(33, 3, 'Meja Belajar Mars WS 102 Ukuran 140x48x143 cm', 850000, 100),
	(34, 5, 'Rak TV Mars WU 01', 1000000, 100),
	(35, 5, 'Rak TV Mars WU 02', 1900000, 100),
	(36, 5, 'Rak TV Marbel CR 201', 1800000, 100),
	(37, 6, 'Kursi Kantor Astrovis ASC 809', 500000, 100),
	(38, 6, 'Kursi Kantor Hadap', 700000, 100),
	(40, 7, 'Bantal Erentz', 75000, 100),
	(41, 7, 'Bantal Hipo Bio Pillow', 100000, 100),
	(42, 8, 'Guling Erentz', 100000, 100),
	(43, 8, 'Guling Hipo Bio Pillow', 125000, 100),
	(44, 2, 'Lemari Hias 2 Pintu', 2200000, 100);
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;

-- Dumping structure for table meubelaf.item_transaksi
DROP TABLE IF EXISTS `item_transaksi`;
CREATE TABLE IF NOT EXISTS `item_transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL DEFAULT 0,
  `banyaknya` int(11) DEFAULT NULL,
  `hargasatuan` double DEFAULT NULL,
  PRIMARY KEY (`no_transaksi`,`id_barang`),
  KEY `FK_item_transaksi_barang` (`id_barang`),
  CONSTRAINT `FK_item_transaksi_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_item_transaksi_transaksi` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table meubelaf.item_transaksi: ~0 rows (approximately)
/*!40000 ALTER TABLE `item_transaksi` DISABLE KEYS */;
REPLACE INTO `item_transaksi` (`no_transaksi`, `id_barang`, `banyaknya`, `hargasatuan`) VALUES
	(1, 4, 1, 2300000);
/*!40000 ALTER TABLE `item_transaksi` ENABLE KEYS */;

-- Dumping structure for table meubelaf.karyawan
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table meubelaf.karyawan: ~3 rows (approximately)
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
REPLACE INTO `karyawan` (`id_karyawan`, `nama_karyawan`) VALUES
	(1, 'Nadia'),
	(2, 'Khair'),
	(3, 'Said');
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;

-- Dumping structure for table meubelaf.kategori
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(10) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table meubelaf.kategori: ~8 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
REPLACE INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
	(1, 'Spring Bed (Kasur)'),
	(2, 'Lemari'),
	(3, 'Meja'),
	(4, 'Sofa'),
	(5, 'Rak TV'),
	(6, 'Kursi Kantor'),
	(7, 'Bantal'),
	(8, 'Guling');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

-- Dumping structure for table meubelaf.transaksi
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE IF NOT EXISTS `transaksi` (
  `no_transaksi` int(11) NOT NULL DEFAULT 0,
  `totalharga` double DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT current_timestamp(),
  `id_karyawan` int(11) DEFAULT NULL,
  PRIMARY KEY (`no_transaksi`) USING BTREE,
  KEY `FK_transaksi_karyawan` (`id_karyawan`),
  CONSTRAINT `FK_transaksi_karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table meubelaf.transaksi: ~0 rows (approximately)
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
REPLACE INTO `transaksi` (`no_transaksi`, `totalharga`, `tanggal`, `id_karyawan`) VALUES
	(1, 0, '2023-07-11 00:36:00', 3);
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;

-- Dumping structure for trigger meubelaf.item_transaksi_after_delete
DROP TRIGGER IF EXISTS `item_transaksi_after_delete`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `item_transaksi_after_delete` AFTER DELETE ON `item_transaksi` FOR EACH ROW BEGIN
UPDATE barang SET stock = stock + OLD.banyaknya
WHERE barang.id_barang = OLD.id_barang;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger meubelaf.item_transaksi_after_insert
DROP TRIGGER IF EXISTS `item_transaksi_after_insert`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `item_transaksi_after_insert` AFTER INSERT ON `item_transaksi` FOR EACH ROW BEGIN
UPDATE barang SET stock = stock - NEW.banyaknya
WHERE barang.id_barang = NEW.id_barang;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
