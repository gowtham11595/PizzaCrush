-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2019 at 01:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `BALANCE` int(12) DEFAULT NULL,
  `ACCOUNTNO` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `confirm_password` text NOT NULL,
  `emailid` text NOT NULL,
  `phonenumber` text NOT NULL,
  `city` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `confirm_password`, `emailid`, `phonenumber`, `city`, `address`) VALUES
(3, 'rishiadmin', '7352a6c43f01fc92f87ade301ca73915fcf1ed95', '7352a6c43f01fc92f87ade301ca73915fcf1ed95', 'sourab@gmail.com', '9866272529', 'ok', 'asd'),
(4, 'sandeep', 'ad9280c159074d9ec90899b584f520606e83d10e', 'ad9280c159074d9ec90899b584f520606e83d10e', 'sandeep@gmail.com', '9948274112', 'Karimnagar', '2-2-1147/7/9A,New Nallakunta'),
(5, 'rihireddykolanu', '827ad1deae7f0e4de070a6904218b02036d1448b', '827ad1deae7f0e4de070a6904218b02036d1448b', 'vamhi.kolanu@gmail.com', '9160757008', 'Hyderabad', 'Nallakunta');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `city` text NOT NULL,
  `status` text NOT NULL,
  `emailid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `address`, `contact`, `city`, `status`, `emailid`) VALUES
(1, 'Just Pizza - Trimulgherry\r\nPizza\r\nPlot No. 79, Survey No. 30, P & T Colony, Trimulgherry Main Road, Near RTO Office\r\n', '040 4243 8888', 'Hyderabad ', 'deleted', 'pizzatirumal@gmail.com'),
(2, 'JustPizza,Shop No 16/17/18, Ground Floor & 1st Floor, Radhe Complex, Ankleshwar HO, Ankleshwar - 393001, Near Kapodra Patiya & Gidc', '+(91)-2646-255988', 'Karimnagar', 'added', 'pizzakarimnagar@gmail.com'),
(3, 'Just Pizza,9-1-164,Amsri Plaza,Near Basera Hotel\r\nSecunderabad,  India - 500003', '040 66268889', 'Khammam', 'added', 'pizza.khammam@gmail.com'),
(4, 'Just Pizza, Door No 4 -1A5, Premier Enclave Apartment ,Ground Floor, Manipal, Udupi - 576104, Near Syndicate Circle', '+(91)-820-2574126,', 'Mahbubnagar', 'added', 'pizza.mahbubnagar@gmail.com'),
(5, 'Just Pizza, Shop No 2, Ground Floor, Sachet 1, Swastik Cross Road, Navrangpura, Ahmedabad - 380009, Near Swastik Society, Off Cg Road', '+(91)-79-26462636', 'Siddipet', 'added', 'pizza.siddipet@gmail.com'),
(6, 'Just Pizza, Door No 16-11-20/7/ H/2 A, Ground Floor, Malakpet, Hyderabad - 500036, Near HDFC Bank, Beside Hyderabad House, Tellagudda Saleem Nagar', '+(91)-40-64568585', 'Nalgonda', 'added', 'pizza.nalgonda@gmail.com'),
(7, 'No. 7-1-621/267,48/3RT, Ground Floor, Main Road, Near Community Hall Junction, SR Nagar, Hyderabad, Telangana 500038\r\n', '040 4334 8888', 'Adilabad', 'added', 'pizza.adilabad@gmail.com'),
(8, 'No. 1-7-43/4/A, Ground Floor, Revenue Colony, Hanamkonda, Warangal, Telangana 560005\r\n', '0870 688 8688', 'Warangal', 'added', 'pizza.warangal@gmail.com'),
(9, '100 Avenue D', '9160757080', 'Denton', 'added', 'denton@gmail.com'),
(10, 'hdh', '2432', 'sdf', 'added', 'e@gmail.com'),
(11, 'jhsdgj', 'asd', 'acirty', 'added', 'sakjh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `breads`
--

CREATE TABLE `breads` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `size` text NOT NULL,
  `price` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `path` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breads`
--

INSERT INTO `breads` (`id`, `name`, `size`, `price`, `timestamp`, `path`, `status`) VALUES
(1, 'DEEP-PAN', 'small', 50, '2016-03-07 06:50:42', 'deep-pan.png', 'added'),
(2, 'DEEP-PAN', 'medium', 60, '2016-03-07 06:50:42', 'deep-pan.png', 'added'),
(3, 'DEEP-PAN', 'large', 80, '2016-03-07 06:50:42', 'deep-pan.png', 'added'),
(4, 'CLASSIC-CRUST', 'small', 60, '2016-03-07 06:51:17', 'classic.png', 'added'),
(5, 'CLASSIC-CRUST', 'medium', 75, '2016-03-07 06:51:17', 'classic.png', 'added'),
(6, 'CLASSIC-CRUST', 'large', 90, '2016-03-07 06:51:17', 'classic.png', 'added'),
(7, 'GLUTEN-FREE-BASE', 'small', 70, '2016-03-07 06:52:01', 'gluten-free.png', 'added'),
(8, 'GLUTEN-FREE-BASE', 'medium', 80, '2016-03-07 06:52:01', 'gluten-free.png', 'added'),
(9, 'GLUTEN-FREE-BASE', 'large', 90, '2016-03-07 06:52:01', 'gluten-free.png', 'added'),
(10, 'EDGE', 'small', 45, '2016-03-07 06:52:33', 'the-edge.png', 'added'),
(11, 'EDGE', 'medium', 70, '2016-03-07 06:52:33', 'the-edge.png', 'added'),
(12, 'EDGE', 'large', 80, '2016-03-07 06:52:33', 'the-edge.png', 'added'),
(13, 'CHEESY-CRUST', 'small', 60, '2016-03-07 06:53:08', 'cheesy.png', 'added'),
(14, 'CHEESY-CRUST', 'medium', 80, '2016-03-07 06:53:08', 'cheesy.png', 'added'),
(15, 'CHEESY-CRUST', 'large', 90, '2016-03-07 06:53:08', 'cheesy.png', 'added'),
(16, 'THIN-N-CRISPY', 'small', 60, '2016-03-07 06:53:42', 'thin.png', 'added'),
(17, 'THIN-N-CRISPY', 'medium', 85, '2016-03-07 06:53:42', 'thin.png', 'added'),
(18, 'THIN-N-CRISPY', 'large', 100, '2016-03-07 06:53:42', 'thin.png', 'added');

-- --------------------------------------------------------

--
-- Table structure for table `combo`
--

CREATE TABLE `combo` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `status` text NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `combo`
--

INSERT INTO `combo` (`id`, `tid`, `timestamp`, `sid`, `bid`, `status`, `uid`) VALUES
(1, 6, '2019-11-19 00:47:04', 2, 13, 'semiordered', 42),
(2, 7, '2019-11-19 00:47:52', 0, 4, 'semiordered', 42),
(3, 6, '2019-11-19 16:59:07', 3, 4, 'semiordered', 42);

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `path` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `near_by_places`
--

CREATE TABLE `near_by_places` (
  `id` int(11) NOT NULL,
  `b_name` text NOT NULL,
  `place_name` text NOT NULL,
  `distance` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `isdelivered` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `path` text NOT NULL,
  `size` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`id`, `category`, `name`, `price`, `timestamp`, `path`, `size`, `status`) VALUES
(73, 'nonveg', 'NONVEG-EXTRAVAGANZA', 4, '2019-11-05 00:24:55', 'non-veg-extravaganza.jpg', 'small', 'deleted'),
(74, 'nonveg', 'NONVEG-EXTRAVAGANZA', 10, '2019-11-05 00:24:55', 'non-veg-extravaganza.jpg', 'medium', 'added'),
(75, 'nonveg', 'NONVEG-EXTRAVAGANZA', 13, '2019-11-05 00:24:55', 'non-veg-extravaganza.jpg', 'large', 'deleted'),
(76, 'veg', 'VegExtraVeganza', 10, '2019-11-05 00:24:55', 'vegextraveganza.jpg', 'small', 'deleted'),
(77, 'veg', 'VegExtraVeganza', 18, '2019-11-05 00:24:55', 'vegextraveganza.jpg', 'medium', 'deleted'),
(78, 'veg', 'VegExtraVeganza', 15, '2019-11-05 00:24:55', 'vegextraveganza.jpg', 'large', 'deleted'),
(79, 'veg', 'CLOUD9', 12, '2019-11-05 00:24:55', 'Cloud9.jpg', 'small', 'added'),
(80, 'veg', 'CLOUD9', 12, '2019-11-05 00:24:55', 'Cloud9.jpg', 'medium', 'added'),
(81, 'veg', 'CLOUD9', 14, '2019-11-05 00:24:55', 'Cloud9.jpg', 'large', 'added'),
(82, 'veg', 'CHEFS-VEG-WONDER', 17, '2019-11-05 00:24:55', 'ChefsVegWonderMain9.jpg', 'small', 'added'),
(83, 'veg', 'CHEFS-VEG-WONDER', 15, '2019-11-05 00:24:55', 'ChefsVegWonderMain9.jpg', 'medium', 'added'),
(84, 'veg', 'CHEFS-VEG-WONDER', 14, '2019-11-05 00:24:55', 'ChefsVegWonderMain9.jpg', 'large', 'added'),
(85, 'veg', 'ROMAN-VEG-SUPREME', 12, '2019-11-05 00:24:55', 'RomanVeg.jpg', 'small', 'added'),
(86, 'veg', 'ROMAN-VEG-SUPREME', 15, '2019-11-05 00:24:55', 'RomanVeg.jpg', 'medium', 'added'),
(87, 'veg', 'ROMAN-VEG-SUPREME', 14, '2019-11-05 00:24:55', 'RomanVeg.jpg', 'large', 'added'),
(88, 'veg', 'PEPPY-PANEER', 17, '2019-11-05 00:24:55', 'peppypaneer.png', 'small', 'deleted'),
(89, 'veg', 'PEPPY-PANEER', 19, '2019-11-05 00:24:55', 'peppypaneer.png', 'medium', 'added'),
(90, 'veg', 'PEPPY-PANEER', 19, '2019-11-05 00:24:55', 'peppypaneer.png', 'large', 'added'),
(91, 'veg', '5PEPPER', 17, '2019-11-05 00:24:55', 'five-peppers.png', 'small', 'added'),
(92, 'veg', '5PEPPER', 19, '2019-11-05 00:24:55', 'five-peppers.png', 'medium', 'added'),
(93, 'veg', '5PEPPER', 19, '2019-11-05 00:24:55', 'five-peppers.png', 'large', 'added'),
(94, 'veg', 'VEGGIE-PARADISE', 8, '2019-11-05 00:24:55', 'VeggieParadise.jpg', 'small', 'added'),
(95, 'veg', 'VEGGIE-PARADISE', 17, '2019-11-05 00:24:55', 'VeggieParadise.jpg', 'medium', 'added'),
(96, 'veg', 'VEGGIE-PARADISE', 19, '2019-11-05 00:24:55', 'VeggieParadise.jpg', 'large', 'added'),
(97, 'veg', 'DOUBLE-CHEESE-MARGHERITA', 19, '2019-11-05 00:24:55', 'margherita.png', 'small', 'added'),
(98, 'veg', 'DOUBLE-CHEESE-MARGHERITA', 19, '2019-11-05 00:24:55', 'margherita.png', 'medium', 'added'),
(99, 'veg', 'DOUBLE-CHEESE-MARGHERITA', 19, '2019-11-05 00:24:55', 'margherita.png', 'large', 'added'),
(100, 'veg', 'SPICY-TRIPLE-TANGO', 19, '2019-11-05 00:24:55', 'spicytripletangoMainMenu5.jpg', 'small', 'added'),
(101, 'veg', 'SPICY-TRIPLE-TANGO', 19, '2019-11-05 00:24:55', 'spicytripletangoMainMenu5.jpg', 'medium', 'added'),
(102, 'veg', 'SPICY-TRIPLE-TANGO', 19, '2019-11-05 00:24:55', 'spicytripletangoMainMenu5.jpg', 'large', 'added'),
(103, 'veg', 'COUNTRY-SPECIAL', 12, '2019-11-05 00:24:55', 'Dish7-country-specialA.jpg', 'small', 'added'),
(104, 'veg', 'COUNTRY-SPECIAL', 19, '2019-11-05 00:24:55', 'Dish7-country-specialA.jpg', 'medium', 'added'),
(105, 'veg', 'COUNTRY-SPECIAL', 19, '2019-11-05 00:24:55', 'Dish7-country-specialA.jpg', 'large', 'added'),
(106, 'nonveg', 'NON-VEG-SUPREME', 4, '2019-11-05 00:24:55', 'Non-Veg-Supreme.jpg', 'small', 'added'),
(107, 'nonveg', 'NON-VEG-SUPREME', 19, '2019-11-05 00:24:55', 'Non-Veg-Supreme.jpg', 'medium', 'added'),
(108, 'nonveg', 'NON-VEG-SUPREME', 19, '2019-11-05 00:24:55', 'Non-Veg-Supreme.jpg', 'large', 'added'),
(109, 'nonveg', 'CHICKEN-DOMINATOR', 17, '2019-11-05 00:24:55', 'ChickenDominator10.jpg', 'small', 'added'),
(110, 'nonveg', 'CHICKEN-DOMINATOR', 19, '2019-11-05 00:24:55', 'ChickenDominator10.jpg', 'medium', 'added'),
(111, 'nonveg', 'CHICKEN-DOMINATOR', 19, '2019-11-05 00:24:55', 'ChickenDominator10.jpg', 'large', 'added'),
(112, 'nonveg', 'SEVENTH-HEAVEN', 19, '2019-11-05 00:24:55', 'SeventhHeaven11.jpg', 'small', 'added'),
(113, 'nonveg', 'SEVENTH-HEAVEN', 19, '2019-11-05 00:24:55', 'SeventhHeaven11.jpg', 'medium', 'added'),
(114, 'nonveg', 'SEVENTH-HEAVEN', 19, '2019-11-05 00:24:55', 'SeventhHeaven11.jpg', 'large', 'added'),
(115, 'nonveg', 'FLORENCE-CHICKEN-EXOTICA', 19, '2019-11-05 00:24:55', 'FlorenceChicken3.jpg', 'small', 'added'),
(116, 'nonveg', 'FLORENCE-CHICKEN-EXOTICA', 19, '2019-11-05 00:24:55', 'FlorenceChicken3.jpg', 'medium', 'added'),
(117, 'nonveg', 'FLORENCE-CHICKEN-EXOTICA', 19, '2019-11-05 00:24:55', 'FlorenceChicken3.jpg', 'large', 'added'),
(118, 'nonveg', 'CHICKEN-SALAMI-SPECIAL', 19, '2019-11-05 00:24:55', 'ChickenSalamiSpecial.jpg', 'small', 'added'),
(119, 'nonveg', 'CHICKEN-SALAMI-SPECIAL', 19, '2019-11-05 00:24:55', 'ChickenSalamiSpecial.jpg', 'medium', 'added'),
(120, 'nonveg', 'CHICKEN-SALAMI-SPECIAL', 19, '2019-11-05 00:24:55', 'ChickenSalamiSpecial.jpg', 'large', 'added'),
(121, 'nonveg', 'Chipotle-Chicken', 19, '2019-11-05 00:24:55', 'pizza-guys-chipotle-pizza-Chipotle-copy.png', 'small', 'added'),
(122, 'nonveg', 'Chipotle-Chicken', 19, '2019-11-05 00:24:55', 'pizza-guys-chipotle-pizza-Chipotle-copy.png', 'medium', 'added'),
(123, 'nonveg', 'Chipotle-Chicken', 19, '2019-11-05 00:24:55', 'pizza-guys-chipotle-pizza-Chipotle-copy.png', 'large', 'added'),
(124, 'nonveg', 'Sriracha', 19, '2019-11-05 00:24:55', 'sricha.png', 'small', 'added'),
(125, 'nonveg', 'Sriracha', 19, '2019-11-05 00:24:55', 'sricha.png', 'medium', 'added'),
(126, 'nonveg', 'Sriracha', 19, '2019-11-05 00:24:55', 'sricha.png', 'large', 'added'),
(127, 'nonveg', 'Creamy-Pesto-Chicken', 19, '2019-11-05 00:24:55', 'pizza-guys-creamy-pesto-chicken-pizza-Creamy-pesto-chicken-copy.png', 'small', 'added'),
(128, 'nonveg', 'Creamy-Pesto-Chicken', 19, '2019-11-05 00:24:55', 'pizza-guys-creamy-pesto-chicken-pizza-Creamy-pesto-chicken-copy.png', 'medium', 'added'),
(129, 'nonveg', 'Creamy-Pesto-Chicken', 19, '2019-11-05 00:24:55', 'pizza-guys-creamy-pesto-chicken-pizza-Creamy-pesto-chicken-copy.png', 'large', 'added'),
(130, 'nonveg', 'California-Garlic-Chicken', 19, '2019-11-05 00:24:55', 'pizza-guys-california-garlic-chicken-pizza-California-Garlic-Chicken-copy.png', 'small', 'added'),
(131, 'nonveg', 'California-Garlic-Chicken', 19, '2019-11-05 00:24:55', 'pizza-guys-california-garlic-chicken-pizza-California-Garlic-Chicken-copy.png', 'medium', 'added'),
(132, 'nonveg', 'California-Garlic-Chicken', 19, '2019-11-05 00:24:55', 'pizza-guys-california-garlic-chicken-pizza-California-Garlic-Chicken-copy.png', 'large', 'added'),
(133, 'veg', 'Classic-Vegetarian', 18, '2019-11-05 00:24:55', 'classic.png', 'small', 'added'),
(134, 'veg', 'Classic-Vegetarian', 19, '2019-11-05 00:24:55', 'classic.png', 'medium', 'added'),
(135, 'veg', 'Classic-Vegetarian', 19, '2019-11-05 00:24:55', 'classic.png', 'large', 'added'),
(136, 'veg', 'Texas-Barbeque', 19, '2019-11-05 00:24:55', 'texas.png', 'small', 'added'),
(137, 'veg', 'Texas-Barbeque', 19, '2019-11-05 00:24:55', 'texas.png', 'medium', 'added'),
(138, 'veg', 'Texas-Barbeque', 19, '2019-11-05 00:24:55', 'texas.png', 'large', 'added'),
(139, 'nonveg', 'MexicanTaco', 19, '2019-11-05 00:24:55', 'pizza-guys-mexican-taco-pizza-Mexican-Taco-copy.png', 'small', 'added'),
(140, 'nonveg', 'MexicanTaco', 19, '2019-11-05 00:24:55', 'pizza-guys-mexican-taco-pizza-Mexican-Taco-copy.png', 'medium', 'added'),
(141, 'nonveg', 'MexicanTaco', 19, '2019-11-05 00:24:55', 'pizza-guys-mexican-taco-pizza-Mexican-Taco-copy.png', 'large', 'added'),
(142, 'veg', 'GarlicLovers', 19, '2019-11-05 00:24:55', 'pizza-guys-garlic-lovers-pizza-Garlic-Lovers-copy.png', 'small', 'added'),
(143, 'veg', 'GarlicLovers', 19, '2019-11-05 00:24:55', 'pizza-guys-garlic-lovers-pizza-Garlic-Lovers-copy.png', 'medium', 'added'),
(144, 'veg', 'GarlicLovers', 19, '2019-11-05 00:24:55', 'pizza-guys-garlic-lovers-pizza-Garlic-Lovers-copy.png', 'large', 'added'),
(145, 'veg', 'Veggie Paradise', 5, '2019-11-19 14:53:35', 'veggie-paradise.png', 'small', 'added'),
(146, 'veg', 'Veggie Paradise', 8, '2019-11-19 14:53:35', 'veggie-paradise.png', 'medium', 'added'),
(147, 'veg', 'Veggie Paradise', 10, '2019-11-19 14:53:35', 'veggie-paradise.png', 'large', 'added');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `review` text NOT NULL,
  `pizzaname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `review`, `pizzaname`) VALUES
(1, 'This is as loaded as it gets,folks! There is hot \'n\' spicy chicken,barbeque chicken,ham and keema with tangy black olives,onions,crisp capsicum & delectable mushrooms.Its YUMMY!!!!.', 'NONVEG-EXTRAVAGANZA'),
(2, 'A fully loaded hurricane of tasty vegetables, this pizza is one for all seasons and reasons. Onions,juicy tomatoes, crunchy baby corn, crisp capsicum, hot jalapeno and every vegetarians first love: Paneer! All this on a liquid cheesy sauce base will lift your spirits higher and higher.', 'CLOUD9'),
(3, 'Not just a pizza but also a vegetarian gourmet affair! Our chefs have put together the choicest vegetables to give you a fine dining pizza experience. Bite into a blend of tender Mushrooms, tangy Gherkins, crunchy\r\nBabycorn, Crisp Capsicum, fiery Red Paprika, Paneer and yummy liquid cheesy sauce. ', 'CHEFS-VEG-WONDER'),
(4, 'Romes fresh veggie delight with choicest broccoli, black olive, babycorn and red paprika. Freshly baked & hand-crafted- thin, crispy, buttery crust with wood-fired seasoned pizza sauce and olive oil. Experience true Italian flavors like never before.', 'ROMAN-VEG-SUPREME'),
(5, 'Chunky paneer with crisp capsicum and spicy red pepper - quite a mouthful! Its soft and sweet!!', 'PEPPY-PANEER'),
(6, 'Dominos introduces \"5 Peppers\" an exotic new Pizza. Topped wih red bell pepper, yellow bell pepper, capsicum, red paprika, jalapeno & sprinked with exotic herb', '5PEPPER'),
(7, 'For vegetarians who love their extravagance, we have a combination of 4 premium vegetables and cheese. Juicy Mediterranean black olives, crisp capsicum, fresh baby corn fiery Red Paprika. The Gods would probably drool over this one!', 'VEGGIE-PARADISE'),
(8, 'The ever-popular Margherita - loaded with extra cheese... oodies of it! Its simple.', 'DOUBLE-CHEESE-MARGHERITA'),
(9, 'Get ready for a triple flavor treat! Sweet golden corn mingled with tangy Gherkins and luscious red paprika will make your taste buds do the tango.\r\n', 'SPICY-TRIPLE-TANGO'),
(10, 'For all those with a partiality for veggies, this one\'s loaded - crunchy onions, crisp capsicum and fresh juicy tomatoes. Yum!\r\n', 'COUNTRY-SPECIAL'),
(11, 'This is as loaded as it gets, folkes! There is hot \'n\' spicy chicken with tangy black olives, onions, crisp capsicum & delectable mushrooms.', 'NON-VEG-SUPREME'),
(12, 'This is for some serious, no-nonsense chicken lovers. If you love chicken in every form, this ones for you. We give you smoked Chicken, Double Barbeque chicken, Exotic Chicken Salami, Hot n Spicy Chicken & Zesty Chicken Sausage, all in one pizza with delicious liquid cheesy sauce!', 'CHICKEN-DOMINATOR'),
(13, '7 ingredients: one destination- Heaven! A rich riot of color and flavor, this has got it all: Double Smoked Chicken, Double Barbeque Chicken, Zesty red and yellow bell peppers, juicy jalapenos, onions and liquid cheesy sauce. Indulge away!\r\n', 'SEVENTH-HEAVEN'),
(14, 'Florences exotic taste of Chicken Italian sausage in butter garlic flavor, barbeque chicken and jalapeno. Freshly baked & hand-crafted- thin, crispy, buttery crust with wood-fired seasoned pizza sauce and olive oil. Experience true Italian flavors like never before.', 'FLORENCE-CHICKEN-EXOTICA'),
(15, 'Who doesnt love some cheese and Salami? An all time winning combination of exotic, seasoned chicken salami and mouthwatering cheese. Whats not to love right?', 'CHICKEN-SALAMI-SPECIAL'),
(16, 'Grilled chicken rashers with spicy green & yellow zucchini and red paprika inspired from the historic caf specials of Naples. Freshly baked & hand-crafted- thin, crispy, buttery crust with wood-fired seasoned pizza sauce and olive oil. Experience true Italian flavors like never before.', 'Chipotle-Chicken');

-- --------------------------------------------------------

--
-- Table structure for table `sauce`
--

CREATE TABLE `sauce` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `path` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sauce`
--

INSERT INTO `sauce` (`id`, `name`, `price`, `timestamp`, `path`, `status`) VALUES
(1, 'Pesto', 40, '2016-03-07 07:06:12', 'download.jpg', 'added'),
(2, 'Bechamel', 60, '2016-03-07 07:08:02', 'White-Sauce.jpg', 'added'),
(3, 'Salsa', 60, '2016-03-07 07:08:41', 'download_(1).jpg', 'added'),
(4, 'BBQ-Sauce', 80, '2016-03-07 07:09:42', 'bbq.jpg', 'added'),
(5, 'Hummus', 90, '2016-03-07 07:10:46', 'hummus-225x191.jpg', 'added'),
(6, ' PumpkinPizza-sauce', 90, '2016-03-07 07:11:50', 'images.jpg', 'added'),
(7, ' PepperJelly', 75, '2016-03-07 07:52:06', 'pepper.jpg', 'added'),
(8, 'RomescoSauce', 100, '2016-03-07 07:52:47', 'download_(2).jpg', 'added'),
(9, 'Thai-Chi', 100, '2016-03-07 07:54:32', 'Sweet-Chili-Sauce-.jpg', 'added'),
(10, ' AlfredoSauce', 90, '2016-03-07 07:55:28', 'quick-and-easy-alfredo-sauce_6188-001.jpg', 'added'),
(11, 'WasabiSauce', 60, '2016-03-07 07:57:14', 'was.jpg', 'added');

-- --------------------------------------------------------

--
-- Table structure for table `temp_o`
--

CREATE TABLE `temp_o` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` text NOT NULL,
  `uid` int(11) NOT NULL,
  `type` text NOT NULL,
  `iid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_o`
--

INSERT INTO `temp_o` (`id`, `timestamp`, `status`, `uid`, `type`, `iid`) VALUES
(1, '2019-11-19 00:46:55', 'ordered', 42, 'bread', 13),
(3, '2019-11-19 00:46:58', 'ordered', 42, 'toppings', 6),
(4, '2019-11-19 00:47:01', 'ordered', 42, 'sauce', 2),
(5, '2019-11-19 00:47:07', 'ordered', 42, 'bread', 4),
(7, '2019-11-19 00:47:10', 'ordered', 42, 'toppings', 7),
(8, '2019-11-19 00:47:13', 'ordered', 42, 'sauce', 4),
(9, '2019-11-19 00:47:26', 'ordered', 42, 'bread', 1),
(12, '2019-11-19 00:47:45', 'delivered', 42, 'bread', 4),
(13, '2019-11-19 00:47:47', 'delivered', 42, 'toppings', 7),
(14, '2019-11-19 00:47:53', 'ordered', 42, 'bread', 7),
(22, '2019-11-19 04:27:10', 'added', 36, 'bread', 1),
(23, '2019-11-19 04:27:25', 'added', 36, 'toppings', 5),
(29, '2019-11-19 16:59:21', 'delivered', 42, 'bread', 1),
(30, '2019-11-19 16:59:23', 'delivered', 42, 'toppings', 4),
(31, '2019-11-19 16:59:25', 'delivered', 42, 'toppings', 17),
(32, '2019-11-19 16:59:28', 'delivered', 42, 'sauce', 3),
(33, '2019-11-19 16:59:29', 'delivered', 42, 'sauce', 4);

-- --------------------------------------------------------

--
-- Table structure for table `temp_p`
--

CREATE TABLE `temp_p` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `price` int(11) NOT NULL,
  `size` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_p`
--

INSERT INTO `temp_p` (`id`, `uid`, `name`, `category`, `price`, `size`, `status`) VALUES
(130, 42, 'CLOUD9', 'veg', 12, 'small', 'delivered'),
(131, 42, 'Onions', 'veg', 5, '', 'delivered'),
(142, 36, 'SEVENTH-HEAVEN', 'nonveg', 19, 'small', 'delivered'),
(143, 36, 'Onions', 'veg', 5, '', 'delivered'),
(144, 36, 'Paneer', 'veg', 6, '', 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `toppings`
--

CREATE TABLE `toppings` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `name` text NOT NULL,
  `path` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toppings`
--

INSERT INTO `toppings` (`id`, `category`, `name`, `path`, `timestamp`, `price`, `status`) VALUES
(4, 'veg', 'BlackOlive', 'blackolive.png', '2016-03-07 05:17:21', 5, 'added'),
(5, 'veg', 'Onions', 'customise-pizza-onion.png', '2016-03-07 05:23:13', 1, 'added'),
(6, 'veg', 'Paneer', 'customise-pizza-paneer.png', '2016-03-07 05:24:57', 6, 'added'),
(7, 'veg', 'GoldenCorn', 'customise-pizza-goldenCorn.png', '2016-03-07 05:25:32', 5, 'added'),
(8, 'veg', 'FreshTomato', 'FreshTomato.png', '2016-03-07 05:26:07', 4, 'added'),
(9, 'veg', 'Jalapeno', 'customise-pizza-jalapeno.png', '2016-03-07 05:26:43', 5, 'added'),
(10, 'veg', 'RedPaparica', 'RedPaparica.png', '2016-03-07 05:27:13', 6, 'added'),
(11, 'veg', 'BabyCorn', 'customise-pizza-babyCorn.png', '2016-03-07 05:28:19', 4, 'added'),
(12, 'nonveg', 'BarbequeChicken', 'customise-pizza-barbeque.png', '2016-03-07 05:33:01', 7, 'added'),
(13, 'nonveg', 'Hot-n-Spicy-Chicken', 'hot.png', '2016-03-07 05:33:40', 7, 'added'),
(14, 'nonveg', 'ChunckyChicken', 'customise-pizza-chunky.png', '2016-03-07 05:34:11', 8, 'added'),
(15, 'nonveg', 'ChickenSalami', 'customise-pizza-salami.png', '2016-03-07 05:34:44', 9, 'added'),
(16, 'veg', 'Mushrooms', 'mush.png', '2016-03-07 05:37:56', 6, 'added'),
(17, 'veg', 'CrispCapsicum', 'cap.png', '2016-03-07 05:38:44', 5, 'added');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `emailid` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `confirm_password` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phonenumber` text NOT NULL,
  `city` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `emailid`, `username`, `password`, `confirm_password`, `timestamp`, `phonenumber`, `city`, `address`) VALUES
(5, 'a', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2015-05-31 14:42:13', '9866272529', '', ''),
(19, 'b', 'b', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', '2016-03-07 08:51:24', '12343', 'Hyderabad', 'dfdgds'),
(20, 'me_rishi@yahoo.com', 'rishireddy', '827ad1deae7f0e4de070a6904218b02036d1448b', '827ad1deae7f0e4de070a6904218b02036d1448b', '2016-03-08 05:24:32', '9160757008', 'Hyderabad', '2-2-1146/7/9/A,NewNallakunta'),
(21, 'anoop@gmail.com', 'anoop', 'b39f41981dae37b68aea63ee6ff9c4cc33d75e40', 'b39f41981dae37b68aea63ee6ff9c4cc33d75e40', '2016-03-08 05:27:11', '9948274112', 'Hyderabad', '2-2-1147/7/9A,New Nallakunta'),
(22, 'sandeep@gmail.com', 'sandeep', 'ad9280c159074d9ec90899b584f520606e83d10e', 'ad9280c159074d9ec90899b584f520606e83d10e', '2016-03-08 05:28:18', '9948274112', 'Karimnagar', '2-2-1147/7/9A,New Nallakunta'),
(23, 'vamhi.kolanu@gmail.com', 'rihireddykolanu', '827ad1deae7f0e4de070a6904218b02036d1448b', '827ad1deae7f0e4de070a6904218b02036d1448b', '2016-04-15 13:44:03', '9160757008', 'Hyderabad', 'Nallakunta'),
(24, 'paddhu@gmail.com', 'paddhu', '827ad1deae7f0e4de070a6904218b02036d1448b', '827ad1deae7f0e4de070a6904218b02036d1448b', '2016-04-15 13:47:17', '9969961818', 'Hyderabad', 'nallakunta'),
(25, 'abc@gmail.com', 'abc', 'f68561e30cace9df44714a89891de3a455bdfdc0', 'f68561e30cace9df44714a89891de3a455bdfdc0', '2019-10-19 22:44:24', '6504523656', 'Hyderabad', 'dasjhahs'),
(35, 'admin@gmail.com', 'admin', 'f68561e30cace9df44714a89891de3a455bdfdc0', 'f68561e30cace9df44714a89891de3a455bdfdc0', '2019-10-22 05:07:21', '1234567', 'Hyderabad', 'addd'),
(36, 'sourab@gmail.com', 'rishiadmin', '7352a6c43f01fc92f87ade301ca73915fcf1ed95', '7352a6c43f01fc92f87ade301ca73915fcf1ed95', '2019-10-22 05:18:24', '1234', 'Hyderabad', 'address'),
(37, 'xya@gmail.com', 'xyz', '827ad1deae7f0e4de070a6904218b02036d1448b', '827ad1deae7f0e4de070a6904218b02036d1448b', '2019-10-22 14:52:38', '324234', 'Hyderabad', 'hrweukewh'),
(38, 'rhsdbjh@gmail.com', 'awc', 'e011a1521754d7b5780994ecc770be41f41e2e7f', 'e011a1521754d7b5780994ecc770be41f41e2e7f', '2019-10-22 15:26:45', '4343', 'Hyderabad', 'dasdsa'),
(39, 'gowtham@gmail.com', 'gowtham', '451e39686bd3e0044130b4b145d83070f9405bf6', '451e39686bd3e0044130b4b145d83070f9405bf6', '2019-11-05 00:46:50', '12345', 'Hyderabad', 'texas'),
(40, 'xyz@gmail.com', 'lebron', '5a333cead2ef3d1f021dd3507fa5f75b6f584c85', '5a333cead2ef3d1f021dd3507fa5f75b6f584c85', '2019-11-05 15:02:58', '234', 'Hyderabad', 'asjhm'),
(41, 'davis@gmail.com', 'davis', '0e382076ebf46bc5ba91ab2c5b2bbaf7733c2005', '0e382076ebf46bc5ba91ab2c5b2bbaf7733c2005', '2019-11-05 15:10:10', '857646788', 'Hyderabad', 'chicago'),
(42, 'rishi@gmail.com', 'rish', 'e011a1521754d7b5780994ecc770be41f41e2e7f', 'e011a1521754d7b5780994ecc770be41f41e2e7f', '2019-11-05 17:16:17', '867574467', 'Hyderabad', 'Dallas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breads`
--
ALTER TABLE `breads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `near_by_places`
--
ALTER TABLE `near_by_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sauce`
--
ALTER TABLE `sauce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_o`
--
ALTER TABLE `temp_o`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_p`
--
ALTER TABLE `temp_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toppings`
--
ALTER TABLE `toppings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `breads`
--
ALTER TABLE `breads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `combo`
--
ALTER TABLE `combo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `extras`
--
ALTER TABLE `extras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `near_by_places`
--
ALTER TABLE `near_by_places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sauce`
--
ALTER TABLE `sauce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `temp_o`
--
ALTER TABLE `temp_o`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `temp_p`
--
ALTER TABLE `temp_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `toppings`
--
ALTER TABLE `toppings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
