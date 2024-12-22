-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2024 at 06:32 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinefoodphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adm_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(1, 'Kayse', '9da8697858e6bbdeba9bcfea35cc607e', 'kayse@mail.com', '', '2024-11-18 06:10:44'),
(2, 'Deeq', 'a3d78b11c4c96a0360526f38e128117c', 'abdirizack@mail.com', '12', '2024-11-18 06:13:59'),
(3, 'Jees', '92936b24059feed692cc77cdd1a21780', 'jees@mail.com', '67890', '2024-11-18 06:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

DROP TABLE IF EXISTS `dishes`;
CREATE TABLE IF NOT EXISTS `dishes` (
  `d_id` int NOT NULL AUTO_INCREMENT,
  `rs_id` int NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` text,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(17, 12, 'Cambaabur', 'Cambaabur is a Somali Eid bread, it is prepared more like lahooh with different ingredients, then fried on a skillet, sprinkled with sugar on top then served with yogurt. It is enjoyed as a breakfast item, mostly during Eid', 3.00, '673a3d789f95d.jpg'),
(28, 13, 'Suqaar', 'Suqaar (pronounced sooh-car) is one of Somalia’s most beloved dishes and can be made with any meat, from lamb, to chicken, to beef. Generally the meat is cut into very small pieces, about 1/2 cube or smaller. The meal is then rounded out with an assortment of veggies  usually carrots, bell pepper, onion, and sometimes  potato.', 4.00, '673acf75c0cf0.webp'),
(29, 6, 'Hilib Geel', 'Camel meat has been described as raspberry red to dark brown in colour and the fat of the camel meat is white. Camel meat is similar in taste and texture to beef.', 7.00, '673ad0409225f.webp'),
(30, 11, 'Beer and Anjeero', 'Beer, AKA liver goat, lamb, or cow, is one of Somali breakfasts. Thinly sliced and sautee with onions, sweet peppers, etc., usually made on Fridays, holidays, celebrations. We eat it with canjeero.', 5.00, '673ad08c032b1.jpg'),
(31, 10, 'Hilib Xaniid', 'Xaniid (Af Ingiriis : beefsteak; Af Carabi : ar?) waa hilibka waslada marka lagu shiilo dab kali ah. Sidoo kale xaniidku waa nooc ka mid ah hilibka xoolaha, gaar ahaan hilibka laga jaro garabka, jeeniga, lugta, dhabarka iyo meelaha leh jiidh saafi ah. Sidoo kale wasladu waa hilibka laga gooyo muruqa xoolaha kaasi oo leh waxyar oo baruur ah, laakiin inta badan jiidh saafi ah. ', 10.00, '673ad0f2129f9.jpg'),
(32, 12, 'Biryani & Chicken', 'The Kolkata style of biryani belongs to West Bengal and was learnt from the Muslim royals around 1856, when the last Nawab of Oudh, Wajid Ali Shah, was dethroned by the British and exiled to Kolkata during the reign of Queen Victoria.', 15.00, '673ad1c9e5104.webp'),
(33, 5, 'Baked Chicken Legs', 'These chicken legs are golden on the outside, juicy and tender on the inside and unbelievably savory with every bite. With just a few simple ingredients, we turn ordinary chicken drumsticks into extraordinary.', 10.00, '673ad24edee79.webp'),
(34, 9, 'Kaluun', 'Easy, tender baked fish infused with garlic and basil. The secret to this juicy fish is in the quick fish marinade with a few spices, garlic, fresh basil, a little citrus and extra virgin olive oil. A few tips make all the difference, so be sure to read on.', 13.00, '673ad2a4024c2.jpg'),
(35, 8, 'Surbiyaan Hilib Adhi', 'Lamb surbiyaan, this is one pot dish both delicious with lamb or goat, toped with raisins, caramelized onions and saffron treads. Serve this dish with vegetables and salad, it is usually served on occasions such as Eid  Use always the best quility basmati rice that you can find for flavour and the texture for a fluffy rice.', 12.00, '673ad36e09e0f.jpg'),
(36, 9, 'Somali Sambusa', 'Somali Sambusa is a stuffed triangular pastries that are very popular appetizers served not only during Ramadan, but any on occasion as an appetizer, they come with all kinds of fillings.', 1.50, '673ad3b889a35.jpg'),
(37, 12, 'Somali Malawah', 'Malawah Somali Crepe these very thin cooked pancakes on a skillet with an unleavened batter. Delicious and easy to make for breakfast or any time pour syrup or how about some yogurt and honey.', 2.00, '673ad4193303c.jpg'),
(38, 12, 'Muqmad', 'Laxooxo with finely diced beef.', 4.00, '673ad4bd56703.webp'),
(39, 12, 'Chilly Fish', 'Cubed fillet of fish sauteed with vegs, and infused with lime juice and complemented with sweet and sour chill sauce.', 20.00, '673ad55878b34.jpg'),
(40, 12, 'Chicken Tikka Masala', 'Cubes of chicken charcoal grilled finished in masala sauce.', 8.00, '673ad5e4db366.jpg'),
(41, 12, 'Charcoal Grilled Chicken ', 'Marinated then seasoned 3 chicken legs and deep fried until golden brown.', 9.50, '673ad621ac678.webp'),
(42, 12, 'Goat Biryani', 'Marinated boneless goat’s meat cooked together with rice in spiced Indian masala gravy.', 13.60, '673ad6a3a46d4.jpg'),
(43, 12, 'Hazelnut Latte', 'Hazelnut Latte is good drink', 3.00, '673ad79d6b989.jpg'),
(44, 12, 'Apple Juice', 'Apple Juice', 1.50, '673ad7d83f356.jpg'),
(45, 12, 'Cafe Mocha', 'Cafe MochaAlthough a mocha is often interpreted differently across the world, the basis is that a shot of espresso is combined with chocolate powder or syrup, followed by milk or cream. It is a variant of a latte, in the sense that it is often 1/3 espresso and 2/3 steamed milk.', 1.00, '673ad85e9dac1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

DROP TABLE IF EXISTS `remark`;
CREATE TABLE IF NOT EXISTS `remark` (
  `id` int NOT NULL AUTO_INCREMENT,
  `frm_id` int NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(13, 10, 'closed', 'waad', '2024-11-18 06:04:21'),
(14, 11, 'closed', 'ghjkl', '2024-11-18 06:05:08'),
(15, 12, 'closed', 'asdfghjkl', '2024-11-18 06:05:38'),
(16, 14, 'in process', 'dfghjk', '2024-11-18 06:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `rs_id` int NOT NULL AUTO_INCREMENT,
  `c_id` int NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`rs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(5, 5, 'JEES Hotel', 'jeesera52@gmail.com', '+252 633956074', 'www.jees.com', '6am', '3am', '24hr-x7', 'Shacab Area', '673a337f764c9.webp', '2024-11-17 18:18:39'),
(6, 0, 'MAANSOOR HOTEL & RESTUARENT', 'maansoor@gmail.com', '+252 63395607412', 'www.Maansoor.com', '6am', '8pm', '24hr-x7', 'H2FM+RFV, Hargeisa', '673a3a28e8286.jpg', '2024-11-17 18:47:04'),
(7, 0, 'Damal Hotel', 'www.Damal.com', '+252 633956074', 'www.Damal.com', '6am', '3am', '24hr-x7', 'Suuqa Hoose', '673a367f22012.jpg', '2024-11-17 18:31:27'),
(8, 0, 'Beder Hotel', 'beder@gmail.com', '+252 633956074', 'www.Beder.com', '6am', '8pm', '24hr-x7', 'H366+W6J Wadada Timacade Hargeysa TG JH, 09010', '673a3aa053ff2.jpg', '2024-11-17 18:49:04'),
(9, 0, 'Maamuus Hotel & Restuarent', 'maamuus@gmail.com', '+252 633956074', 'www.maamuus.com', '6am', '3am', '24hr-x7', 'Maguugo Street, Rd Number 1, Hargeisa', '673a3874bcd6f.jpg', '2024-11-17 18:39:48'),
(10, 0, 'Assod Hotel & Restuarent', 'assod@Gmail.com', '+45623456789', 'www.aasod.com', '6am', '3am', '24hr-x7', 'Sha\'ab Area, Hargeisa', '673a38d2dd1e1.jpg', '2024-11-17 18:41:22'),
(11, 9, 'Hamdaan Hotel $ Restuarent', 'hamdaan@gmail.com', '+252 633956074', 'http://www.hamdanhotel.com/', '6am', '3am', '24hr-x7', 'National Fuel Station(Indha Bir, Bada Cas Infront of, Jigjiga-Yar Rd, Hargeysa', '673a3b849bcca.jpg', '2024-11-17 18:52:52'),
(12, 0, 'Carro Edeg Hotel hargeisa', 'carroedeg@gmail.com', '+252 633956074567', 'https://www.carroedeghotel.com/', '6am', '3am', '24hr-x7', 'Wadada Madax-Tooyada Hargeisa TG JH, 09010', '673a3c3cf3f31.jpg', '2024-11-17 18:55:57'),
(13, 0, 'Ambassador Hotel', 'ambasor123@.com', '+252 6339560745', 'http://www.ambassadorhotelhargeisa.com/', '6am', '3am', '24hr-x7', 'G3CF+6XF, Airport Road, Hargeysa', '673a3cfa83aa1.jpg', '2024-11-17 18:59:06'),
(14, 5, 'Sky Hotel Hargeisa', 'sedrgmk@.com', '+252 633956074', 'https://skyhotelhargeisa.com/', '6am', '3am', '24hr-x7', 'G39F+HX8, Hargeisa', '673adcbe096cf.jpg', '2024-11-18 06:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

DROP TABLE IF EXISTS `res_category`;
CREATE TABLE IF NOT EXISTS `res_category` (
  `c_id` int NOT NULL AUTO_INCREMENT,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(5, 'Cunto Soomaali', '2024-11-17 18:08:42'),
(6, 'Mediternean Food', '2024-11-17 18:08:57'),
(7, 'East African Food', '2024-11-17 18:09:09'),
(8, 'Arabian Food', '2024-11-17 18:09:20'),
(9, 'European Food', '2024-11-17 18:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(7, 'Hussien Haybe', 'ali', 'farah', 'mohamedkayse752@gmail.com', '2345678987', '6fb42da0e32e07b61c9f0251fe627a9c', '150', 1, '2024-11-17 17:53:06'),
(8, 'Jama321', 'jama', 'farah', 'sdfhjlvbn@gmail.com', '+23456789f5678', '6fb42da0e32e07b61c9f0251fe627a9c', '150', 1, '2024-11-17 18:00:16'),
(9, 'Ali321', 'Ali', 'Muuse', 'sdgjkhjk@gmail.com', '+2345678234679', '6fb42da0e32e07b61c9f0251fe627a9c', '150', 1, '2024-11-17 18:01:12'),
(10, 'Faysal321', 'ali', 'farah', 'sdhk@gmail.com', '+56789023456789', '6fb42da0e32e07b61c9f0251fe627a9c', '150', 1, '2024-11-17 18:01:48'),
(11, 'Suhaib@', 'Suhayb', 'Yuusuf', 'asdfgjk752@gmail.com', '+2345694589', '1cf126d20581502c3be21f524b40a9b9', '150', 1, '2024-11-17 18:02:34'),
(12, 'Muuse Kaahin', 'Ali', 'Muuse', 'ajama0260@gmail.com', '+252 633956074', '6fb42da0e32e07b61c9f0251fe627a9c', 'Xero awr', 1, '2024-11-17 18:04:34'),
(13, 'Deeq', 'Deeq', 'Ali Maal', 'abdialikalab@gmail.com', '+252 633956079', '6fb42da0e32e07b61c9f0251fe627a9c', 'Qudhayada', 1, '2024-11-17 18:05:35'),
(14, 'Kayse', 'Xasan', 'Raabi', 'ajama02601@gmail.com', '+252 6339560744567', '6fb42da0e32e07b61c9f0251fe627a9c', 'Shulaac', 1, '2024-11-17 18:06:31'),
(15, 'Nuur', 'Hussien', 'MKMK', 'sdfgujikope752@gmail.com', '+252 633956074347', '6fb42da0e32e07b61c9f0251fe627a9c', 'Shidhka', 1, '2024-11-17 18:07:49');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

DROP TABLE IF EXISTS `users_orders`;
CREATE TABLE IF NOT EXISTS `users_orders` (
  `o_id` int NOT NULL AUTO_INCREMENT,
  `u_id` int NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(10, 13, 'Cambaabur', 1, 3.00, 'closed', '2024-11-18 06:04:21'),
(11, 13, 'Biryani & Chicken', 1, 15.00, 'closed', '2024-11-18 06:05:08'),
(12, 13, 'Somali Malawah', 2, 2.00, 'closed', '2024-11-18 06:05:38'),
(13, 13, 'Muqmad', 3, 4.00, NULL, '2024-11-18 06:03:47'),
(14, 13, 'Goat Biryani', 1, 13.60, 'in process', '2024-11-18 06:05:57'),
(15, 14, 'Hilib Xaniid', 14, 10.00, NULL, '2024-11-18 09:16:43'),
(16, 14, 'Beer and Anjeero', 1, 5.00, NULL, '2024-11-18 09:16:58'),
(17, 14, 'Baked Chicken Legs', 3, 10.00, NULL, '2024-11-18 09:17:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
