-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Jul 2016 pada 07.38
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `_bank_list`
--

CREATE TABLE IF NOT EXISTS `_bank_list` (
  `_id` int(11) NOT NULL,
  `_bank_name` text NOT NULL,
  `_account_number` text NOT NULL,
  `_account_owner` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_bank_list`
--

INSERT INTO `_bank_list` (`_id`, `_bank_name`, `_account_number`, `_account_owner`) VALUES
(1, 'BNI Cabang UGM', '121-983-182', 'Muhadi, M.S'),
(2, 'BRI Cabang UGM', '12433212341234', 'Muhadi, M.S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_complaint`
--

CREATE TABLE IF NOT EXISTS `_complaint` (
  `_id` int(11) NOT NULL,
  `_id_tiket` text NOT NULL,
  `_id_user` text NOT NULL,
  `_subject` text NOT NULL,
  `_content` text NOT NULL,
  `_status` text NOT NULL,
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_complaint`
--

INSERT INTO `_complaint` (`_id`, `_id_tiket`, `_id_user`, `_subject`, `_content`, `_status`, `_date`) VALUES
(1, '119K9DBQ5', '1', 'Barang kok belum sampai', 'Barang kok belum sampai ya...?', '1', '2016-07-26 14:08:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_confirmation_detail`
--

CREATE TABLE IF NOT EXISTS `_confirmation_detail` (
  `_id` int(11) NOT NULL,
  `_shopping_code` text NOT NULL,
  `_total_payment` text NOT NULL,
  `_destination_bank` text NOT NULL,
  `_bank_sender` text NOT NULL,
  `_account_number` text NOT NULL,
  `_account_owner` text NOT NULL,
  `_transfer_scan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_confirmation_detail`
--

INSERT INTO `_confirmation_detail` (`_id`, `_shopping_code`, `_total_payment`, `_destination_bank`, `_bank_sender`, `_account_number`, `_account_owner`, `_transfer_scan`) VALUES
(1, '387869', '3400000', 'BNI Cabang UGM', 'BPD Yogyakarta', '123456789', 'Muhammad Irfan Luthfi', '387869.jpg'),
(2, '1tzDo8Fee', '17000000', 'BRI Cabang UGM', 'BRI Cabang Surabaya', '1238786234', 'Muhammad Irfan Luthfi', '1tzDo8Fee.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_inbox`
--

CREATE TABLE IF NOT EXISTS `_inbox` (
  `_id` int(11) NOT NULL,
  `_id_user` text NOT NULL,
  `_subject` text NOT NULL,
  `_content` text NOT NULL,
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_status` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_inbox`
--

INSERT INTO `_inbox` (`_id`, `_id_user`, `_subject`, `_content`, `_date`, `_status`) VALUES
(1, '3', 'Test Pesan', 'Halo, ini sedang test pesan', '2016-07-23 16:49:37', '1'),
(2, '1', 'Selamat Datang!', 'Selamat Datang...!!!', '2016-07-24 16:38:25', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_invoice`
--

CREATE TABLE IF NOT EXISTS `_invoice` (
  `_id` int(11) NOT NULL,
  `_id_user` text NOT NULL,
  `_shopping_code` text NOT NULL,
  `_invoice_total` text NOT NULL,
  `_invoice_real` text NOT NULL,
  `_status` text NOT NULL,
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_invoice`
--

INSERT INTO `_invoice` (`_id`, `_id_user`, `_shopping_code`, `_invoice_total`, `_invoice_real`, `_status`, `_date`) VALUES
(1, '1', '387869', '3400000', '34020000', '5', '2016-07-25 16:30:30'),
(3, '1', '12NEXURT1', '7000000', '7000000', '1', '2016-07-26 12:17:36'),
(4, '1', '1Fv4LjjUw', '25000000', '25000000', '3', '2016-07-26 12:28:40'),
(5, '1', '1tzDo8Fee', '17000000', '17000000', '5', '2016-07-27 03:30:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_invoice_detail`
--

CREATE TABLE IF NOT EXISTS `_invoice_detail` (
  `_id` int(11) NOT NULL,
  `_id_invoice` text NOT NULL,
  `_id_produk` text NOT NULL,
  `_item_purchased` text NOT NULL,
  `_total_price` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_invoice_detail`
--

INSERT INTO `_invoice_detail` (`_id`, `_id_invoice`, `_id_produk`, `_item_purchased`, `_total_price`) VALUES
(1, '387869', 'KG12345', '2', '3000000'),
(2, '387869', 'KGB123', '2', '400000'),
(5, '12NEXURT1', 'KG12345', '2', '3000000'),
(6, '12NEXURT1', 'KGB123', '20', '4000000'),
(7, '1Fv4LjjUw', 'NTH12546', '10', '25000000'),
(8, '1tzDo8Fee', 'KGB123', '10', '2000000'),
(9, '1tzDo8Fee', 'NTH12546', '6', '15000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_produk`
--

CREATE TABLE IF NOT EXISTS `_produk` (
  `_id` int(11) NOT NULL,
  `_kode_produk` varchar(255) NOT NULL,
  `_nama_produk` text NOT NULL,
  `_deskripsi_produk` text NOT NULL,
  `_harga_produk` text NOT NULL,
  `_stok_produk` text NOT NULL,
  `_gambar_produk` text NOT NULL,
  `_status` text NOT NULL,
  `_total_click` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_produk`
--

INSERT INTO `_produk` (`_id`, `_kode_produk`, `_nama_produk`, `_deskripsi_produk`, `_harga_produk`, `_stok_produk`, `_gambar_produk`, `_status`, `_total_click`) VALUES
(2, 'KG12345', 'Ukiran Cantik 10', 'Produk yang sangat berkualitas tinggi. Bisa dipakai di mana saja. OK!\r\n\r\nIngin custom warna hubungi kami saja. jangan yang lain.', '1500000', '2500', 'KG12345.jpg', '1', '0'),
(3, 'KGB123', 'Patung Cantik', 'Ini adalah Patung Cantik. Patungnya sangat cantik', '200000', '190', 'KGB123.jpg', '1', '0'),
(4, 'NTH12546', 'Ukiran Sangat Cantik1', 'Ukiran ini sangat mahal harganya', '2500000', '84', 'NTH12546.jpg', '1', '0'),
(5, 'NBJKT48', 'Patung Cicak', 'Ini adalah Patung Cicak', '250000', '100', 'NBJKT48.jpg', '1', '0'),
(6, 'NMB48123', 'Pigura 2 Topeng', 'Ini deskripsi Pigura 2 Topeng', '150000', '100', 'NMB48123.jpg', '1', '0'),
(7, 'SKE480512', 'Pigura 1 Topeng', 'Ini deskripsi Pigura 1 Topeng', '250000', '50', 'SKE480512.jpg', '1', '0'),
(8, 'HKT480510', 'Aneka Key Chain', 'Ini Deskripsi Aneka KeyChain', '25000', '500', 'HKT480510.jpg', '1', '0'),
(9, 'LPX2412T', 'Aneka Topeng Mini', 'Ini deskripsi Aneka Topeng Mini', '25000', '500', 'LPX2412T.jpg', '1', '0'),
(10, 'AKI980324', 'Aneka Kotak Tissue', 'Ini deskripsi Aneka Kotak Tissue', '50000', '100', 'AKI980324.jpg', '1', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_shipping`
--

CREATE TABLE IF NOT EXISTS `_shipping` (
  `_id` int(11) NOT NULL,
  `_id_user` text NOT NULL,
  `_shopping_code` text NOT NULL,
  `_status` text NOT NULL,
  `_courier` text NOT NULL,
  `_tracking_code` text NOT NULL,
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_shipping`
--

INSERT INTO `_shipping` (`_id`, `_id_user`, `_shopping_code`, `_status`, `_courier`, `_tracking_code`, `_date`) VALUES
(1, '1', 'NFX7689K', '3', 'JNE', 'SPK012344', '2016-07-26 18:47:38'),
(3, '1', '387869', '2', 'TIKI', 'AF234535', '2016-07-26 19:00:45'),
(4, '1', '1tzDo8Fee', '3', 'POS INDONESIA', '123467891', '2016-07-27 03:33:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_shipping_address`
--

CREATE TABLE IF NOT EXISTS `_shipping_address` (
  `_id` int(11) NOT NULL,
  `_id_user` text NOT NULL,
  `_address` text NOT NULL,
  `_status` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_shipping_address`
--

INSERT INTO `_shipping_address` (`_id`, `_id_user`, `_address`, `_status`) VALUES
(1, '1', 'JL. K. H. Ali Maksum, No.253/RT06 Pelemsewu, Panggungharjo, Sewon, Bantul, Yogyakarta 55188', '0'),
(3, '1', 'JL. Panembahan Senopati, Gondomanan, Yogyakarta', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_shopping_cart`
--

CREATE TABLE IF NOT EXISTS `_shopping_cart` (
  `_id` int(11) NOT NULL,
  `_id_user` text NOT NULL,
  `_id_produk` text NOT NULL,
  `_item_purchased` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_shopping_cart`
--

INSERT INTO `_shopping_cart` (`_id`, `_id_user`, `_id_produk`, `_item_purchased`) VALUES
(3, '3', 'KGB123', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_site_configuration`
--

CREATE TABLE IF NOT EXISTS `_site_configuration` (
  `_id` int(11) NOT NULL,
  `_tentang_1` longtext NOT NULL,
  `_budaya_1` longtext NOT NULL,
  `_quote_tentang_2` longtext NOT NULL,
  `_tentang_2` longtext NOT NULL,
  `_keunggulan` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_site_configuration`
--

INSERT INTO `_site_configuration` (`_id`, `_tentang_1`, `_budaya_1`, `_quote_tentang_2`, `_tentang_2`, `_keunggulan`) VALUES
(1, 'A Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.', 'B Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.', 'C Lorem ipsum dolor sit amet,', 'D Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.', 'E Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_user`
--

CREATE TABLE IF NOT EXISTS `_user` (
  `_id_user` int(11) NOT NULL,
  `_user` text NOT NULL,
  `_umask` text NOT NULL,
  `_pass` text NOT NULL,
  `_pmask` text NOT NULL,
  `_status` text NOT NULL,
  `_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_user`
--

INSERT INTO `_user` (`_id_user`, `_user`, `_umask`, `_pass`, `_pmask`, `_status`, `_created`) VALUES
(1, 'adfc21b951612ea6e99f008a057f7d79', 'milstrike', '843217b606e6b1c6080b7dff578c854a', 'megaawan', '1', '2016-07-22 17:11:48'),
(3, '843217b606e6b1c6080b7dff578c854a', 'megaawan', 'adfc21b951612ea6e99f008a057f7d79', 'milstrike', '1', '2016-07-23 16:17:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_user_detail`
--

CREATE TABLE IF NOT EXISTS `_user_detail` (
  `_id_user` int(11) NOT NULL,
  `_name` text NOT NULL,
  `_dob` text NOT NULL,
  `_address` text NOT NULL,
  `_tel` text NOT NULL,
  `_email` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `_user_detail`
--

INSERT INTO `_user_detail` (`_id_user`, `_name`, `_dob`, `_address`, `_tel`, `_email`) VALUES
(1, 'Muhammad Irfan Luthfi', '03/08/1992', 'Pelemsewu', '085878952533', 'iir_irfan02@hotmail.com'),
(3, 'Muhammad Megaawan', '1/1/1994', 'Jogonalan Lor', '08912345', 'mega@awan.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_bank_list`
--
ALTER TABLE `_bank_list`
  ADD PRIMARY KEY (`_id`), ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `_complaint`
--
ALTER TABLE `_complaint`
  ADD PRIMARY KEY (`_id`), ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `_confirmation_detail`
--
ALTER TABLE `_confirmation_detail`
  ADD PRIMARY KEY (`_id`), ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `_inbox`
--
ALTER TABLE `_inbox`
  ADD PRIMARY KEY (`_id`), ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `_invoice`
--
ALTER TABLE `_invoice`
  ADD PRIMARY KEY (`_id`), ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `_invoice_detail`
--
ALTER TABLE `_invoice_detail`
  ADD PRIMARY KEY (`_id`), ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `_produk`
--
ALTER TABLE `_produk`
  ADD PRIMARY KEY (`_id`), ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `_shipping`
--
ALTER TABLE `_shipping`
  ADD PRIMARY KEY (`_id`), ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `_shipping_address`
--
ALTER TABLE `_shipping_address`
  ADD PRIMARY KEY (`_id`), ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `_shopping_cart`
--
ALTER TABLE `_shopping_cart`
  ADD PRIMARY KEY (`_id`), ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `_site_configuration`
--
ALTER TABLE `_site_configuration`
  ADD PRIMARY KEY (`_id`), ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `_user`
--
ALTER TABLE `_user`
  ADD PRIMARY KEY (`_id_user`), ADD UNIQUE KEY `_id_user` (`_id_user`);

--
-- Indexes for table `_user_detail`
--
ALTER TABLE `_user_detail`
  ADD PRIMARY KEY (`_id_user`), ADD UNIQUE KEY `_id_user` (`_id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_bank_list`
--
ALTER TABLE `_bank_list`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `_complaint`
--
ALTER TABLE `_complaint`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `_confirmation_detail`
--
ALTER TABLE `_confirmation_detail`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `_inbox`
--
ALTER TABLE `_inbox`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `_invoice`
--
ALTER TABLE `_invoice`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `_invoice_detail`
--
ALTER TABLE `_invoice_detail`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `_produk`
--
ALTER TABLE `_produk`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `_shipping`
--
ALTER TABLE `_shipping`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `_shipping_address`
--
ALTER TABLE `_shipping_address`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `_shopping_cart`
--
ALTER TABLE `_shopping_cart`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `_site_configuration`
--
ALTER TABLE `_site_configuration`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `_user`
--
ALTER TABLE `_user`
  MODIFY `_id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `_user_detail`
--
ALTER TABLE `_user_detail`
  MODIFY `_id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
