-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 07:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prebuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `admin_email`, `role`, `status`) VALUES
(1, 'admin', 'admin@123', 'admin@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` char(50) NOT NULL,
  `brand_logo` text NOT NULL,
  `brand_img` varchar(256) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `delete_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_logo`, `brand_img`, `status`, `delete_status`) VALUES
(2, 'Samsung', 'http://localhost/pre/storage/uploads/Brand/Img1682478911.png', 'Img1682478911.png', 1, 1),
(3, 'LG', 'http://localhost/pre/storage/uploads/Brand/Img1682478964.jpg', 'Img1682478964.jpg', 1, 1),
(4, 'Godrej', 'http://localhost/pre/storage/uploads/Brand/Img1682478976.png', 'Img1682478976.png', 1, 1),
(5, 'PHILIPS', 'http://localhost/pre/storage/uploads/Brand/Img1682478985.png', 'Img1682478985.png', 1, 1),
(6, 'HP', 'http://localhost/pre/storage/uploads/Brand/Img1682478997.png', 'Img1682478997.png', 1, 1),
(7, 'SONY', 'http://localhost/pre/storage/uploads/Brand/Img1682479013.jpg', 'Img1682479013.jpg', 1, 1),
(8, 'Vivo', 'http://localhost/pre/storage/uploads/Brand/Img1682479570.png', 'Img1682479570.png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` char(50) NOT NULL,
  `title` varchar(256) NOT NULL,
  `category_img` varchar(100) NOT NULL,
  `cat_cover_img` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `img_name` text NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `title`, `category_img`, `cat_cover_img`, `status`, `img_name`, `delete_status`) VALUES
(3, 'Home Appliance', 'home-appliance', 'http://localhost/pre/storage/uploads/Category/cat1682395652.png', '', 1, 'cat1682395652.png', 1),
(4, 'Kitchen Appliance', 'kitchen-appliance', 'http://localhost/pre/storage/uploads/Category/cat1682395637.png', '', 1, 'cat1682395637.png', 1),
(5, 'Mobile and Tablets', 'mobile-and-tablets', 'http://localhost/pre/storage/uploads/Category/cat1682395665.png', '', 1, 'cat1682395665.png', 1),
(6, 'Computers and Laptop', 'computers-and-laptop', 'http://localhost/pre/storage/uploads/Category/cat1682395678.png', '', 1, 'cat1682395678.png', 1),
(7, 'Personal Care', 'personal-care', 'http://localhost/pre/storage/uploads/Category/cat1682395694.png', '', 1, 'cat1682395694.png', 1),
(9, 'Car Accessories', 'car-accessories', 'http://localhost/pre/storage/uploads/Category/cat1682395762.png', '', 1, 'cat1682395762.png', 1),
(13, 'Bike Accessories', 'bike-ccessories', 'http://localhost/pre/storage/uploads/Category/cat1682395811.png', '', 1, 'cat1682395811.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city_details`
--

CREATE TABLE `city_details` (
  `city_detail_id` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `area` text NOT NULL,
  `city` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `city_details`
--

INSERT INTO `city_details` (`city_detail_id`, `pincode`, `area`, `city`, `status`) VALUES
(5, 382120, 'Abasana', 'Ahmedabad', 1),
(6, 382220, 'Adroda', 'Ahmedabad', 1),
(7, 382460, 'Adval', 'Ahmedabad', 1),
(8, 380001, 'Akru', 'Ahmedabad', 1),
(10, 363610, 'Alampur', 'Ahmedabad', 1),
(11, 382255, 'Alau', 'Ahmedabad', 1),
(12, 387810, 'Ambaliara', 'Ahmedabad', 1),
(13, 382250, 'Zinzar', 'Ahmedabad', 1),
(15, 382150, 'Zezra', 'Ahmedabad', 1),
(16, 380006, 'Ambawadi', 'Ahmedabad', 1),
(19, 382430, 'Zanu', 'Ahmedabad', 1),
(21, 382210, 'Vishalpur', 'Ahmedabad', 1),
(22, 380015, 'Ambawadi Vistar', 'Ahmedabad', 1),
(23, 382170, 'Virochannagar	', 'Ahmedabad', 1),
(24, 382463, 'Ambli', 'Ahmedabad', 1),
(25, 382265, 'Virdi', 'Ahmedabad', 1),
(26, 380026, 'Amraiwadi', 'Ahmedabad', 1),
(28, 380007, 'Anandnagar	', 'Ahmedabad', 1),
(29, 382130, 'Vinzuvada', 'Ahmedabad', 1),
(30, 382115, 'Andej', 'Ahmedabad', 1),
(32, 382445, 'Vinzol', 'Ahmedabad', 1),
(33, 382110, 'Vinchhiya	', 'Ahmedabad', 1),
(36, 382230, 'Arnej', 'Ahmedabad', 1),
(38, 380051, 'Vejalpur', 'Ahmedabad', 1),
(41, 382330, 'Vehlal', 'Ahmedabad', 1),
(42, 380016, 'Asarwa Chakla', 'Ahmedabad', 1),
(44, 380024, 'Asarwa Ext south', 'Ahmedabad', 1),
(46, 382140, 'Ashoknagar	', 'Ahmedabad', 1),
(47, 382440, 'Vatva', 'Ahmedabad', 1),
(49, 380009, 'Ashram Road	', 'Ahmedabad', 1),
(50, 382418, 'Vastral', 'Ahmedabad', 1),
(51, 382427, 'Aslali', 'Ahmedabad', 1),
(52, 382213, 'Vasna chacharvadi', 'Ahmedabad', 1),
(55, 382465, 'Badanpur', 'Ahmedabad', 1),
(57, 380008, 'Vasisthnagar', 'Ahmedabad', 1),
(58, 382276, 'Badarkha', 'Ahmedabad', 1),
(59, 382425, 'Vasai', 'Ahmedabad', 1),
(71, 382240, 'Baldana', 'Ahmedabad', 1),
(72, 382449, 'Vanch', 'Ahmedabad', 1),
(73, 382145, 'Balsasan', 'Ahmedabad', 1),
(80, 382450, 'Valhia', 'Ahmedabad', 1),
(84, 382455, 'Bavaliary', 'Ahmedabad', 1),
(85, 382433, 'Vadod', 'Ahmedabad', 1),
(90, 380013, 'Vadaj', 'Ahmedabad', 1),
(91, 380022, 'Behrampura	', 'Ahmedabad', 1),
(95, 380060, 'Bhadaj', 'Ahmedabad', 1),
(101, 380028, 'Bhairavnath Road', 'Ahmedabad', 1),
(117, 380054, 'Bodakdev	', 'Ahmedabad', 1),
(120, 380058, 'Bopal', 'Ahmedabad', 1),
(123, 380004, 'Cantonment', 'Ahmedabad', 1),
(124, 382260, 'Chaloda', 'Ahmedabad', 1),
(128, 382481, 'Chandlodia', 'Ahmedabad', 1),
(145, 380019, 'D Cabin', 'Ahmedabad', 1),
(164, 382435, 'Dhamatvan', 'Ahmedabad', 1),
(174, 382470, 'Digvijaynagar', 'Ahmedabad', 1),
(190, 380027, 'Gandhi Ashram', 'Ahmedabad', 1),
(198, 380061, 'Ghatlodia	', 'Ahmedabad', 1),
(201, 380050, 'Ghodasar	', 'Ahmedabad', 1),
(209, 380021, 'Gomtipur', 'Ahmedabad', 1),
(220, 382405, 'Gyaspur', 'Ahmedabad', 1),
(231, 382443, 'Isanpur', 'Ahmedabad', 1),
(246, 382426, 'Jetalpur', 'Ahmedabad', 1),
(251, 380055, 'Juhapura', 'Ahmedabad', 1),
(255, 380005, 'Kabir Chowk', 'Ahmedabad', 1),
(291, 382421, 'Khodiyar', 'Ahmedabad', 1),
(292, 382350, 'Khodiyarnagar', 'Ahmedabad', 1),
(304, 382345, 'Krishnanagar', 'Ahmedabad', 1),
(306, 382340, 'Kubernagar', 'Ahmedabad', 1),
(338, 380052, 'Memnagar', 'Ahmedabad', 1),
(352, 380002, 'N C market', 'Ahmedabad', 1),
(375, 380014, 'Navjivan', 'Ahmedabad', 1),
(415, 380023, 'Rakhial', 'Ahmedabad', 1),
(422, 382480, 'Ranip', 'Ahmedabad', 1),
(448, 382451, 'Salangpur - hanuman', 'Ahmedabad', 1),
(457, 380018, 'Saraspur', 'Ahmedabad', 1),
(458, 382475, 'Sardarnagar', 'Ahmedabad', 1),
(485, 380023, 'Sukhrampura', 'Ahmedabad', 1),
(492, 380059, 'Thaltej', 'Ahmedabad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` int(11) NOT NULL,
  `coupon_name` varchar(256) NOT NULL,
  `coupon_type` int(15) NOT NULL COMMENT '1->percentage,2->amount',
  `coupon_amount_per` varchar(156) NOT NULL,
  `coupon_startdate` varchar(156) NOT NULL,
  `coupon_enddate` varchar(156) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0->inactive,1->active,2->expire',
  `created_at` varchar(156) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `coupon_name`, `coupon_type`, `coupon_amount_per`, `coupon_startdate`, `coupon_enddate`, `status`, `created_at`) VALUES
(1, 'C100', 2, '100', '2023-04-28', '2023-05-28', 1, '2023-04-28 08:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `homeslider`
--

CREATE TABLE `homeslider` (
  `slider_id` int(11) NOT NULL,
  `slider_path` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `slider_alt` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `homeslider`
--

INSERT INTO `homeslider` (`slider_id`, `slider_path`, `status`, `slider_alt`) VALUES
(4, 'http://localhost/pre/storage/uploads/slider/Img1682636801.jpg', 1, 'Main-slider'),
(5, 'http://localhost/pre/storage/uploads/slider/Img1682750098.jpg', 1, 'sathitech'),
(6, 'http://localhost/pre/storage/uploads/slider/Img1682750221.jpg', 1, 'about'),
(7, 'http://localhost/pre/storage/uploads/slider/Img1682750274.png', 1, 'about2');

-- --------------------------------------------------------

--
-- Table structure for table `o_seller`
--

CREATE TABLE `o_seller` (
  `o_seller_id` int(11) NOT NULL,
  `o_seller_rid` varchar(20) NOT NULL,
  `o_seller_name` char(50) NOT NULL,
  `o_seller_email` varchar(50) NOT NULL,
  `o_seller_contact` bigint(10) NOT NULL,
  `o_seller_alt` bigint(10) NOT NULL,
  `o_seller_store` varchar(50) NOT NULL,
  `o_seller_add1` text NOT NULL,
  `o_seller_add2` text NOT NULL,
  `o_seller_city` char(20) NOT NULL,
  `o_seller_landmark` char(30) NOT NULL,
  `o_seller_pincode` int(6) NOT NULL,
  `o_seller_category` text NOT NULL,
  `o_seller_brand` text NOT NULL,
  `o_seller_status` tinyint(4) NOT NULL,
  `o_seller_payment_status` tinyint(4) NOT NULL DEFAULT 0,
  `o_seller_deal_setup_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1->selleractive,0->sellerinactive,2->notpayment,3->paymentdone,4->dealsnotset,5->dealsset'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `o_seller`
--

INSERT INTO `o_seller` (`o_seller_id`, `o_seller_rid`, `o_seller_name`, `o_seller_email`, `o_seller_contact`, `o_seller_alt`, `o_seller_store`, `o_seller_add1`, `o_seller_add2`, `o_seller_city`, `o_seller_landmark`, `o_seller_pincode`, `o_seller_category`, `o_seller_brand`, `o_seller_status`, `o_seller_payment_status`, `o_seller_deal_setup_status`, `status`) VALUES
(1, '7817001', 'krati pandey', 'krati.preeminence@gmail.com', 9165942918, 9098404834, 'Preeminence Technologies', '37/4a saket nagar', 'near AIIMS', 'Bhopal', 'AIIMS', 782022, '[\"2\",\"4\",\"7\"]', '[\"2\",\"3\",\"4\"]', 1, 1, 0, 1),
(2, '4617001', 'Brijendra sharma', 'brijendra.mastery@gmail.com', 9165942918, 9098404834, 'Preeminence Software', '37/4a saket nagar', 'near AIIMS', 'bhopal', 'Madhya Pradesh', 462024, '[\"4\",\"7\"]', '[\"2\",\"4\"]', 1, 1, 1, 1),
(4, '4617003', 'Jethalal Gada', 'preeminencesoftare@gmail.com', 9165942918, 9165942918, 'Gada Electronics', '311, 2nd floor, sunny place, MP nagar zone 1', '', 'bhopal', 'DB CIty mall', 462021, '[\"4\",\"5\",\"9\"]', '[\"2\",\"3\",\"4\"]', 1, 1, 1, 1),
(5, '4618005', 'preeminence software', 'brijendra.mastery@gmail.com', 7554257011, 755458745, 'prtcgr', 'Bharat Bhavan', 'Arera Hills, Board Colony, Bhopal', 'bhopal', 'cm house', 462021, '[\"4\",\"8\",\"10\"]', '[\"2\",\"3\",\"4\"]', 1, 0, 0, 1),
(6, '4618006', 'shubham', 'shubhamshrivastava21@gmail.com', 9584144994, 9558444945, 'store', 'shastri', 'nagar', 'bhopal', 'temple', 462026, '[\"4\",\"5\",\"6\"]', '[\"2\",\"3\",\"4\"]', 1, 1, 1, 1),
(7, '3818007', 'Yash mehta', '261yash007@gmail.com', 7600751509, 0, 'Yash Electronics', 'fsfksdkf;lf;lk', 'sd;flsd;fksd;flkdsf', 'Bhopal', 's;sflksk;lsdkf', 382424, '[\"4\",\"7\",\"9\"]', '[\"4\",\"5\",\"6\",\"7\"]', 1, 0, 0, 1),
(8, '4618008', 'ashish tiwari', 'ashish.preeminence@gmail.com', 7509575564, 1324567890, 'ashish electricals', '282, ashoka garden', 'near bharat talkies', 'Bhopal', 'Kali mandir', 462021, '[\"5\",\"9\",\"13\"]', '[\"2\",\"4\",\"7\"]', 1, 1, 1, 1),
(9, '4623009', 'Brijendra sharma', 'ashish.tech1010@gmail.com', 9165942918, 9876543210, 'isc', 'h.no.107 sardar patel nagar bharat takize bhopal', 'address2', 'Bina', 'petrol pump', 462001, '[\"4\",\"5\",\"7\",\"9\",\"13\"]', '[\"2\"]', 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pack_id` int(11) NOT NULL,
  `pack_name` varchar(50) NOT NULL,
  `pack_price` int(11) NOT NULL,
  `pack_deal` int(11) NOT NULL,
  `pack_speci` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pack_id`, `pack_name`, `pack_price`, `pack_deal`, `pack_speci`, `status`) VALUES
(2, 'CUSTOMIZED PACK', 150, 1, 'Add Slots @150/- per slot', 1),
(3, 'LITE PACK', 599, 5, 'Add Slots @150/- per slot', 1),
(4, 'STANDARD PACK', 999, 10, 'Add Slots @150/- per slot', 1),
(5, 'PREMIUM PACK', 1599, 20, 'Add Slots @150/- per slot', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prebuy_deals`
--

CREATE TABLE `prebuy_deals` (
  `deal_id` int(11) NOT NULL,
  `deal_s_id` varchar(50) NOT NULL,
  `dealOwnerId` int(11) NOT NULL,
  `deal_model_number` varchar(150) NOT NULL,
  `deal_mrp` int(11) NOT NULL,
  `deal_discount` int(11) NOT NULL,
  `deal_discount_per` text NOT NULL,
  `deal_offer_image` varchar(100) NOT NULL,
  `deal_offer_title` varchar(50) NOT NULL,
  `deal_offer_desc` text NOT NULL,
  `deal_emi` text NOT NULL,
  `deal_warranty` text NOT NULL,
  `deal_exchange` text NOT NULL,
  `deal_status` int(11) NOT NULL DEFAULT 0,
  `deal_date` datetime NOT NULL,
  `exp_date` varchar(156) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `prebuy_deals`
--

INSERT INTO `prebuy_deals` (`deal_id`, `deal_s_id`, `dealOwnerId`, `deal_model_number`, `deal_mrp`, `deal_discount`, `deal_discount_per`, `deal_offer_image`, `deal_offer_title`, `deal_offer_desc`, `deal_emi`, `deal_warranty`, `deal_exchange`, `deal_status`, `deal_date`, `exp_date`, `status`) VALUES
(5, 'DL18ID01', 2, 'R D GD 1822 EW 2.2', 14900, 13745, '7.75168', 'r-d-gd-1822-ew-2-2-2-godrej-original-imafygffvjbfjmzh.jpeg', 'get upto 10% extra discount', 'get a scratch card and get discount mentioned in card', 'No', '1200 per year for extended warranty', 'Available only if manufacturing defeect', 1, '0000-00-00 00:00:00', '', 1),
(10, 'DL18ID02', 4, 'R D GD 1822 EW 2.2', 14900, 13625, '8.557046979865772', 'r-d-gd-1822-ew-2-2-2-godrej-original-imafygffvjbfjmzh.jpeg', 'get upto 10% extra discount', 'get a scratch card and get discount mentioned in card', 'No', '1200 per year for extended warranty', 'Available only if manufacturing defeect', 1, '0000-00-00 00:00:00', '', 1),
(11, 'DL18ID11', 6, 'Samsung Galaxy On Nx', 15000, 13333, '11.113333333333333', 'tab1.jpeg', 'extra discount in master card', 'get 20% discount by using sbi card', 'sssss', 'fffffffffffffffffffffffff', 'dddddddddddddv  dd', 1, '0000-00-00 00:00:00', '', 1),
(12, 'DL18ID12', 2, 'Samsung Galaxy Note 8 (Maple Gold, 64 GB)  (6 GB RAM)', 55000, 48000, '12.727272727272727', '', 'get upto 10% extra discount', 'get a scratch card and get discount mentioned in card', '4000 per month', '1200 per year for extended warranty', 'Available only if manufacturing defeect', 1, '0000-00-00 00:00:00', '', 1),
(13, 'DL18ID13', 1, 'Samsung Galaxy Note 8 (Maple Gold, 64 GB)  (6 GB RAM)', 52000, 47500, '8.653846153846153', '', 'get upto 10% extra discount', 'get a scratch card and get discount mentioned in card', 'No', '1200 per year for extended warranty', 'Available only if manufacturing defeect', 1, '0000-00-00 00:00:00', '', 1),
(14, 'DL18ID14', 2, 'P70221', 1800, 1425, '20.833333333333332', '', 'get upto 10% extra discount', 'get a scratch card and get discount mentioned in card', 'No', '1200 per year for extended warranty', 'Available only if manufacturing defeect', 1, '0000-00-00 00:00:00', '', 1),
(15, 'DL18ID15', 4, 'Straightener ', 1500, 750, '50', '', 'get upto 10% extra discount', 'get a scratch card and get discount mentioned in card', 'No', '1200 per year for extended warranty', 'Available only if manufacturing defeect', 2, '0000-00-00 00:00:00', '', 1),
(16, 'DL18ID16', 8, ' Galaxy S7 ', 40000, 1000, '97.5%', 'http://localhost/pre/storage/uploads/OfferImage/Img1682632368.png', 'title', 'descr', 'yes', 'desc', 'yes', 0, '2023-04-28 00:00:00', '2023-05-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_cat` char(50) NOT NULL,
  `product_subcat` text NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `vendor_id` int(11) NOT NULL DEFAULT 0 COMMENT '0->admin',
  `product_model` varchar(200) NOT NULL,
  `product_brand` char(20) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_OS` varchar(50) NOT NULL,
  `product_storage` varchar(50) NOT NULL,
  `product_sdc` text NOT NULL,
  `product_ldc` text NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `img_name` varchar(256) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `product_mrp` varchar(156) NOT NULL,
  `product_price` varchar(156) NOT NULL,
  `coupon_id` int(11) NOT NULL DEFAULT 0 COMMENT '0->no-coupon'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_cat`, `product_subcat`, `product_name`, `title`, `vendor_id`, `product_model`, `product_brand`, `product_size`, `product_OS`, `product_storage`, `product_sdc`, `product_ldc`, `product_img`, `img_name`, `status`, `product_mrp`, `product_price`, `coupon_id`) VALUES
(2, '3', '[\"Refrigerators\"]', 'Godrej 182 L Direct Cool Single Door Refrigerator', '', 0, 'R D GD 1822 EW 2.2', 'Godrej', '182 Liter', 'Semi Automatic', '182 Liter', 'Lettuce leaves for your daily salad intake, fresh fruits for glowing skin, and moisture-rich veggies for your everyday cooking - store all your favourite and most-used veggies and greens conveniently.', 'Keep your week-long veggies, fruits and other groceries deliciously fresh in the Godrej RD 1822 single-door refrigerator. Keep your week-long veggies, fruits and other groceries deliciously fresh in the Godrej RD 1822 single-door refrigerator.Keep your week-long veggies, fruits and other groceries deliciously fresh in the Godrej RD 1822 single-door refrigerator. Keep your week-long veggies, fruits and other groceries deliciously fresh in the Godrej RD 1822 single-door refrigerator.', 'r-d-gd-1822-ew-2-2-2-godrej-original-imafygffvjbfjmzh.jpeg', '', 1, '', '', 0),
(3, '5', '[\"Mobile Phones\"]', 'Samsung Galaxy S7 (Gold Platinum, 32 GB)  (4 GB RAM)', '', 0, ' Galaxy S7 ', 'Samsung', '32 GB, 4GB RAM', 'ANDROID', '32 GB', 'The phone sports a metal and glass build thatâ€™s worthy of a flagship-grade device like the Samsung Galaxy S7. The company has used a special process to create a seamless body that is water and dust resistant.', ' QHD - Immersive Viewing Experience The Samsung Galaxy S7 sports a compact display with a resolution of 2560x1440 pixels. It also sports a Super AMOLED panel that not only offers vibrant colours and high contrast levels, but also helps improve battery life.', 'samsung-galaxy-s7-na-original-imaegmjszvhghyzc.jpeg', '', 1, '', '', 0),
(4, '5', '[\"Mobile Phones\"]', 'Samsung Galaxy On Nxt (Gold, 64 GB)  (3 GB RAM)', '', 0, 'Samsung Galaxy On Nx', 'Samsung', '(Gold, 64 GB)  (3 GB RAM)', 'ANROID', '(Gold, 64 GB)  (3 GB RAM)', ' Flaunt your style with the Samsung Galaxy On Nxt. Featuring a drool-worthy body and impressive features, this smartphone is built to perform. Talk to your mom, chat with your friends, browse the Internet - stay connected the way that suits you best - this smartphone is powerful enough to keep up with your busy lifestyle.', 'The On Nxt is a performance beast, thanks to the powerful 1.6 GHz, octa-core processor thatâ€™s aided by an impressive amount of RAM (3 GB). Furthermore, it has 64 GB of internal memory, so you can store loads of photos, videos, apps and more.', 'sony-xperia-xa-na-original-imaekfupmcg6zc7f.jpeg', '', 1, '', '', 0),
(5, '3', '[\"Refrigerators\"]', 'Samsung 192 L Direct Cool Single Door Refrigerator  (Sangneri Red,)', '', 0, ' RR19M1723RY/HL', 'Samsung', '192 L', 'MACHINE', '192 L', ' This product does not require installation. The features of the product are presented in the user manual that comes with it. Hence, the manufacturer does not provide on-site installation or demo for the product. In case of any queries about the installation or the features of product, kindly call us at 1800 208 9898 or (080) 49400000 for assistance.', ' Parts: Plastic / Glassware / Bulb / Tube Any accessories external to the product Product is not used according to the instructions given in the instructions manual Defects caused by improper use as determined by the company personnel Modification or alteration of any nature made in the electrical circuitry or physical construction of the set', 'R1.jpeg', '', 1, '', '', 0),
(6, '3', '[\"Washing Machine\"]', 'LG 6 kg Fully Automatic Front Load Washing Machine White ', '', 0, ' (FH0B8NDL22)', 'LG', '6 KG', 'MACHINE', '6 KG', ' We highly recommend that you get the product installed by the brand/Flipkart authorized service engineers to prevent the warranty from getting void. To avoid any physical damage to the product while unboxing, please ensure that only an authorised Flipkart delivery/service executive or brand personnel opens the packaging. Seller', ' Give your clothes the perfect wash and the perfect care with the LG 6 kg fully-automatic front load washing machine. With advanced features and a well-thought-out design, this washing machine breathes life into your clothes. ', 'MA1.jpeg', '', 1, '', '', 0),
(7, '4', '[\"Iron\"]', 'Philips GC1903 Steam Iron', '', 0, ' GC1903', 'PHILIPS', '2', 'IRON', '2', 'The Philips Steam Iron features a linished soleplate and steam dispenser so you can de-wrinkle your formal shirt and trousers in a few minutes before an important business meeting.', 'This Philips Iron is designed to give you a smooth and quick ironing experience. It features an ergonomically designed handle for easy gripping. The ironâ€™s pointed tip and 180-degree swivel cord make ironing shirts and formal trousers easy.', 'IR.jpeg', '', 1, '', '', 0),
(8, '4', '[\"Mixer Grinder\"]', 'Philips HL1632 500 W Juicer Mixer Grinder  (Blue, 3 Jars)', '', 0, 'HL1632 500 W', 'PHILIPS', '500 W', 'GRINDER', '500 W', 'The all-in-one juicer-mixer-grinder from Philips promises you a hassle-free cooking experience. The juicer-mixer-grinder ensures maximum juice output and superior processing performance.', 'The juicer-mixer-grinder comes with 3 jars: a Chutney jar, a blender jar and a multi-purpose jar. The reverse spiral sieve allows maximum extraction and the unique micro mesh filter squeezes out maximum pulp from fruits, so that you can make a heavy helping of juice in a single cycle.', 'MXR.jpeg', '', 1, '', '', 0),
(9, '6', '[\"Laptop\"]', 'HP 15 Pentium Quad Core - (4 GB/1 TB HDD/DOS)  Laptop', '', 0, '15Q-BU009TU', 'HP', '(15.6 inch, Black, 2.1 kg)', 'WINDOWS 10', '4 GB DDR3 RAM', 'Get extended warranty for 1 Year for your product by Jeeves Consumer Services. Extended warranty covers everything covered by the brand warranty along with free pickup and drop at your door step', 'Get extended warranty for 1 Year for your product by Jeeves Consumer Services. Extended warranty covers everything covered by the brand warranty along with free pickup and drop at your door step', 'LAP.jpeg', '', 1, '', '', 0),
(10, '', '[\"Laptop\"]', 'HP Atom Quad Core Laptop ', '', 0, ' x2 210', '', ' (10.1 inch, SIlver, 1.139 kg)', 'Windows 10 Home', '(2 GB/32 GB EMMC Storage', 'I usually don\'t write reviews coz subjective opinion doesn\'t reflect much about the product. Everyone has a use case and some might/might not find the product up to their standards.', 'Anyway, this is an excellent device for the price. Good built quality, surprisingly good screen (just a tad low on brightness), excellent battery life and good audio. I don\'t know if one can ask more from a Convertible ultraportable. Hihly recommend.', 'LAP1.jpeg', '', 1, '', '', 0),
(11, '7', '[\"Hair Drier\"]', 'Philips Kerashine gift set for silky smooth hair', '', 0, ' HP8646/10 ', 'PHILIPS', ' 18 (W) x 65 (L) mm', ' Ion Technology', ' Temperature Range: 210&deg', ' Whenever you are going for a party or an event, you may want your hair to look stylish. Running to a parlour every now and then could be a tiring task. And, in the process your hair might also lose its shape and style. So bring home this shine set from Philips and get the perfect salon-style hair right from the comfort of your home. ', 'This shine set is a specially designed pack that consists of a hair straightener and a hair dryer.', 'HAIR.jpeg', '', 1, '', '', 0),
(12, '7', '[\"Hair Straightner\"]', 'Philips  Hair Straightener', '', 0, 'HP 8303/06', 'PHILIPS', ' 19 x 85 mm', ' Hair Straightner', ' 110 - 240 V', ' Straighten and style any type of hair with 210 degree Celsius temperature. Infused ceramic plates for gorgeous sheen, smooth edges and perfect straight hair.', 'Look presentable in no time as plates heat up quickly. Swivel cord to reduce entanglement. Worldwide voltage adaptability.', 'HAIR1.jpeg', '', 1, '', '', 0),
(13, '9', '[\"Smart LED TV\"]', 'Samsung Basic Smart 100cm (40 inch) Full HD LED TV  ', '', 0, '(40M5100)', 'Samsung', '40 inch', 'Android/iOS/Windows', '2', ' Warranty does not cover Any external accessories (such as battery, cable, etc.) Damage caused to the product due to improper installation by customer Normal wear and tear to magnetic heads, audio, video, laser pick-ups and tv picture tubes, panel', 'Damages caused to the product by accident, lightening, ingress of water, fire, dropping or excessive shock Any damage caused due to tampering of the product by an unauthorized agent, liability for loss of data, recorded images or business opportunity loss.', 'TV1.jpeg', '', 1, '', '', 0),
(14, '9', '[\"QLED TV\"]', 'Samsung Q Series  Ultra HD (4K) Curved QLED Smart TV', '', 0, '  (55Q8C)', 'Samsung', '138cm (55 inch)', 'Android/iOS/Windows', '2', ' Flipkart will facilitate Installation & Demo at time of your convenience from an brand authorized service engineer Flipkart will communicate the day and time slot of the scheduled Installation & Demo through a SMS and the same information will also be available in your order details page', 'The service engineer will install your new TV, either on wall mount or on table top The wall mount will be provided free of cost and is available along with the Box (If not, please request the service technician to provide the same) The Installation & Demo service will be provided free of cost', 'TV2.jpeg', '', 1, '', '', 0),
(15, '9', '[\"Curved TV\"]', 'Samsung Ultra HD (4K) Curved LED Smart TV  ', '', 0, '(49KS7500)', 'Samsung', '123cm (49 inch) ', 'Android/iOS/Windows', '2', 'To avoid any physical damage to the product while unboxing, please ensure that only an authorised Flipkart delivery/service executive or brand personnel opens the packaging.', 'Movies are more enjoyable and video games are more immersive on this Samsung 123 cm (49) Ultra HD (4K) smart TV. Its curved design offers a comfortable viewing angle, whether youâ€™re sitting right in front of it or lying down on a bean bag in a corner of the room.', 'TV3.jpeg', '', 1, '', '', 0),
(16, '9', '[\"Home theaters\"]', 'Philips  Home Cinema  (DVD Player)', '', 0, 'HTD5550', 'PHILIPS', ' 94 5.1 ', 'STEREO', '6.1', 'Dolby Digital 5.1 Other Audio Features Total Power RMS at 10% THD: 1000 W, Equalizer Settings: Movie, Music, Original, News, Gaming, Sound Enhancement: Double Bass Sound, Center Speaker Drivers: 3 inch Full Range Woofer, Center Speaker Frequency Range: 150 - 20000 Hz, Drivers per Satellite Speaker: 3 inch Full Range Woofer, Satellite Speaker Frequency Range: 150 - 20000 Hz', 'Drivers per Rear Tallboy Speaker: 3 inch Full Range Woofer, Rear Tallboy Speaker Frequency Range: 150 - 20000 Hz, Subwoofer Type: Passive, Subwoofer Driver: 8 inch Woofer, Subwoofer Frequency Range: 20 - 150 Hz, Audio File Format: MP3, WMA, Karaoke Playback Standard Functions: Echo Level Control, Mic Volume Control, Pitch Control, MP3 Bit Rates: 32 - 320 kbps', 'HOMET1.jpeg', '', 1, '', '', 0),
(17, '9', '[\"Curved TV\"]', 'LG  Full HD LED TV  ', '', 0, '(43LJ523T)', 'LG', ' (43 inch 108cm)', 'Android/iOS/Windows', '2', ' To avoid any physical damage to the product while unboxing, please ensure that only an authorised Flipkart delivery/service executive or brand personnel opens the packaging. Seller', 'The LG 43LJ617T TV is equipped with an IPS panel that offers wide viewing angles. This is pretty important for any TV as it allows multiple people to watch content with no loss in quality from almost any corner of a room. To top it off, the panel also offers better colours and clarity.', 'TV4.jpeg', '', 1, '', '', 0),
(18, '9', '[\"QLED TV\"]', 'LG Ultra HD (4K) LED Smart TV  ', '', 0, '(55UJ632T)', 'LG', ' 139cm (55 inch)', 'Android/iOS/Windows', '2', 'The LG 55UJ632T smart TV comes with a 4K resolution of 3840 x 2160 pixels. This, combined with the relatively compact 139 cm (55 inch) display, means that you are going to enjoy crisp and detailed images.', 'With this TV, you get the Active HDR feature, which can optimise HDR10 and HLG content. As a result , you get striking colours that are closer to what you see in real life.', 'TV5.jpeg', '', 1, '', '', 0),
(19, '9', '[\"Smart LED TV\"]', 'LG  HD Ready LED Smart TV  ', '', 0, '(32LJ573D)', 'LG', '80cm (32 inch)', 'Android/iOS/Windows', '2', 'The LG 32LJ573D comes with an IPS panel that offers wide viewing angles. This is pretty important for any TV as it allows multiple people to watch content with virtually no loss in image quality. Furthermore, LG says that the panel also offers better colours and clarity.', 'The LG 32LJ573D smart TV comes with LGâ€™s WebOS and allows you to download apps like Netflix, YouTube and more. There is also a quick access feature called Single Click Access that lets you quickly access your favourite content.', 'TV6.jpeg', '', 1, '', '', 0),
(20, '7', '[\"Hair Straightner\"]', 'Four Star Four Temperature Settings', '', 0, 'Straightener ', 'PHILIPS', '38 (W) x 90 (L) mm', 'Straightener ', '2', ' This hair straightener from Kemei gives you salon-like sleek and straight hair without having to put them through blow-drying, that in many instances,', 'The device also shuts off automatically when the plates are heated to the desired temperature. Specifications', 'HAIR2.jpeg', '', 1, '', '', 0),
(21, '7', '[\"Hair Drier\"]', 'Philips Hair Dryer  (Purple)', '', 0, 'HP8100/46 ', 'PHILIPS', ' 1.5 m', 'Dryer', '2', 'Do you wish to blow-dry your hair quickly and safely, and get beautiful results? This powerful and compactly designed hair dryer from Philips will help you accomplish the same.', 'Utilizing 1000 watts of power, this powerful hair dryer generates gentle drying power and the optimum level of airflow to give you beautiful results with your hair.', 'hair3.jpeg', '', 1, '', '', 0),
(22, '6', '[\"Mini Laptop\"]', 'Acer Switch One Atom Quad Core ', '', 0, 'SW110-1CT', 'SONY', '(10.1 inch,', 'Windows 10 Home', '2 GB/32 GB EMMC Storage', 'Donot buy this piece of junk. The first impression was fine but the product itself is dodgy. My device has a faulty keyboard where the key presses are not working properly.', 'I requested Flipkart for a replacement and they want to schedule a technician to visit and verify the issue. This on the second day of product use. I have an Acer laptop for which the hard disc had to replaced after 20 days.', 'lap2.jpeg', '', 1, '', '', 0),
(23, '6', '[\"Laptop\"]', 'HP 15 Core i3 6th Gen - ()  Laptop  )', '', 0, '15Q-BU007TU', 'Samsung', '(15.6 inch, Black, 2.1 kg', '', '4 GB/1 TB HDD/DOS', 'Every one commenting about laptop perfomance But i am telling you #Wheather its better to buy a Laptop Online or local market', 'You are entering in Lottery system.  By luck if you get a defect laptop. Then hole process to get a new one approx 1month process.', 'lap3.jpeg', '', 1, '', '', 0),
(24, '5', '[\"Tablets\"]', 'Tab    with Wi-Fi+3G Tablet  (Black)', '', 0, 'P70221', 'Samsung', '7 inch', 'ANDROID', '16 GB', ' Calling tablet See the bigger picture on the magnificent 17.87cm (7) TFT screen of the all new Canvas Tab P70221', ' Designed for a snug fit in your hands, the calling tablet brings long-distance conversations to life with Wi Fi & 3G connectivity. ', 'tab1.jpeg', '', 1, '', '', 0),
(25, '5', '[\"Tablets\"]', 'Tab  ', '', 0, '1122555T', 'Samsung', '9.7 inch', 'ANDROID', '16 GB', 'Indian Market lacking with budget 10 inch Tablet. This is what I looking for. Sound quality is at par. PlZ upgrade Tablet with 4gb ram, 64gb internal with atleast 7000mAh battery..', 'best brand ,best price , best product , although little bulky and lags on camera front , but that did not bother for the price and performance ,always look for the best deals which I have got even Indian brands are not available for that price', 'samsung-sm-t819yzdeins-original-imaerx8zwqtwdsru.jpeg', '', 1, '', '', 0),
(26, '3', '[\"Refrigerators\"]', 'Samsung 253 L Frost Free Double Door Refrigerator ', '', 0, ' RT28M3022S8-HL', 'Samsung', '253 L', 'MACHINE', '253L', ' We highly recommend that you get the product installed by the brand/Flipkart authorized service engineers to prevent the warranty from getting void', ' Youâ€™ll be impressed by this double door Samsung refrigeratorâ€™s sleek form, but whatâ€™ll make you fall in love with it is its performance. It makes ice faster and features an all-round cooling system which helps maintain an even temperature throughout the fridge.', 'R2.jpeg', '', 1, '', '', 0),
(27, '3', '[\"Washing Machine\"]', 'Samsung  Fully Automatic Front Load Washing Machine White', '', 0, '  (WW65M206L0W/TL)', 'Samsung', '6.5 kg', 'MACHINE', '6.5 kg', ' To avoid any physical damage to the product while unboxing, please ensure that only an authorised Flipkart delivery/service executive or brand personnel opens the packaging.', ' Meet the Samsung WW65M206L0W/TL washing machine - the appliance that makes doing laundry a piece of cake. Equipped with features like anti-limescale heater and a diamond drum, this washing machine ensures durability and damage-free clothes.', 'ma2.jpeg', '', 1, '', '', 0),
(28, '4', '[\"Iron\"]', 'Philips  Mixer Grinder  (Black, 3 Jars)', '', 0, ' HL7756/00', 'PHILIPS', '750 W', '', '750 W', ' Newly designed powerful Turbo motor for continuous grinding - 750W Turbo motor that gives you the grinding experience even with tough ingredients like Black whole gram (dal) for preparing tasty Vadas and Dosas.', ' The coupler is made of tougher plastic material for firm engagement between the jars and the body which ensures continuous grinding performance; while you focus on your cooking', 'mixer.jpeg', '', 1, '', '', 0),
(29, '4', '[\"Iron\"]', 'Philips Steam Iron  (Green)', '', 0, ' GC1010', 'PHILIPS', '2', 'iron', '2', 'This steam iron from Philips is designed with a speed shaped aluminium soleplate, making it easy for you to iron clothes quickly.', 'The iron has an indicator light that goes off when the iron has reached the required temperature, letting you know when you can use it on your clothes', 'iron.jpeg', '', 1, '', '', 0),
(30, '5', '[\"Mobile Phones\"]', 'mobile phones', '', 0, 'Samsung Galaxy Note 8 (Maple Gold, 64 GB)  (6 GB RAM)', 'Samsung', '64 gb, 6gb ram', 'Android', '64gb', 'Samsung Galaxy Note 8 is an Android Smartphone Designed, Developed and Marketed by Samsung Electronics', '1 Year Manufacturer Warranty for Device and 6 Months Manufacturer Warranty for In-box Accessories Including Batteries from the Date of Purchase.', 'samsung-galaxy-note-8-sm-n950f-original-imafffj7e42ym2zj.jpeg', '', 1, '', '', 0),
(31, '9', '[\"LED TV\"]', 'samsung led tv 32 inches UA32FH4003', '', 0, 'UA32FH4003ARMXL', 'Samsung', '32 inches (81 cms)', 'NA', 'NA', 'lksdjfsldkfj', 'sdlkfjsdlkfjsd', 'ac.jpg', '', 1, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(256) NOT NULL DEFAULT '1',
  `craete_date` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `product_img_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_img_path` varchar(100) NOT NULL,
  `img_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller_branch`
--

CREATE TABLE `seller_branch` (
  `seller_branch_id` int(11) NOT NULL,
  `sellerb_rid` varchar(250) NOT NULL,
  `sellerb_name` varchar(250) NOT NULL,
  `sellerb_email` varchar(50) NOT NULL,
  `sellerb_contact` bigint(10) NOT NULL,
  `sellerb_alt` text NOT NULL,
  `sellerb_store` varchar(50) NOT NULL,
  `sellerb_add1` text NOT NULL,
  `sellerb_add2` text NOT NULL,
  `sellerb_city` char(50) NOT NULL,
  `sellerb_landmark` varchar(50) NOT NULL,
  `sellerb_pincode` int(6) NOT NULL,
  `sellerb_cat` varchar(250) NOT NULL,
  `sellerb_brand` varchar(250) NOT NULL,
  `sellerb_status` tinyint(4) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `seller_branch`
--

INSERT INTO `seller_branch` (`seller_branch_id`, `sellerb_rid`, `sellerb_name`, `sellerb_email`, `sellerb_contact`, `sellerb_alt`, `sellerb_store`, `sellerb_add1`, `sellerb_add2`, `sellerb_city`, `sellerb_landmark`, `sellerb_pincode`, `sellerb_cat`, `sellerb_brand`, `sellerb_status`, `status`) VALUES
(3, '4617003', 'Tipendra Gada', 'tappu@gmail.com', 1234567890, '9876543210', 'Tappu Electronics', 'ddjhkjhjk', 'hhkjhk h kj h , jkh kj hkhj', 'Bhopal', 'Water Tank', 462021, '[\"4\",\"5\",\"6\",\"7\"]', '[\"3\",\"4\"]', 1, 1),
(4, '4617003', 'Daya jethalal gada', 'dayaj@gmail.com', 7558004851, '1234567890', 'Daya Electronics', '311, 2nd floor, sunny place, MP nagar zone 1', 'sder,t r,t sdfdsfdsf', 'bhopal', 'Madhya Pradesh', 462021, '[\"4\",\"5\",\"6\",\"7\",\"10\"]', '[\"2\",\"3\",\"4\"]', 1, 1),
(5, '4618008', 'Shubham Tiwari', 'at89341@gmail.com', 7509575564, '', 'Tiwari elecronics', '34/7A, nihatpura', 'bhanpur, bhopal', 'bhopal', 'bhanpur bridge', 462015, '[\"5\",\"6\",\"7\"]', '[\"4\",\"5\",\"6\"]', 1, 1),
(6, '4618008', 'Kuldeep tiwari', 'preeminencesoftare@gmail.com', 9165942918, '9876543210', 'Tiwari Electronics & Electronics', '311, 2nd floor, sunny place, MP nagar zone 1', 'Near DB  City Mall', 'BHOPAL', 'Madhya Pradesh', 461131, '[\"5\",\"6\"]', '[\"3\",\"4\"]', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller_branch_schedule`
--

CREATE TABLE `seller_branch_schedule` (
  `seller_b_s_id` int(11) NOT NULL,
  `seller_branch_id` int(11) NOT NULL,
  `seller_brid` varchar(50) NOT NULL,
  `monO` text NOT NULL,
  `monC` text NOT NULL,
  `tueO` text NOT NULL,
  `tueC` text NOT NULL,
  `wedO` text NOT NULL,
  `wedC` text NOT NULL,
  `thuO` text NOT NULL,
  `thuC` text NOT NULL,
  `friO` text NOT NULL,
  `friC` text NOT NULL,
  `satO` text NOT NULL,
  `satC` text NOT NULL,
  `sunO` text NOT NULL,
  `sunC` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `seller_branch_schedule`
--

INSERT INTO `seller_branch_schedule` (`seller_b_s_id`, `seller_branch_id`, `seller_brid`, `monO`, `monC`, `tueO`, `tueC`, `wedO`, `wedC`, `thuO`, `thuC`, `friO`, `friC`, `satO`, `satC`, `sunO`, `sunC`, `status`) VALUES
(3, 3, '4617003', '11 AM', '10 pm', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(4, 4, '4617003', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', 'OFF', 'OFF', 1),
(5, 0, '4618008', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', 'OFF', 'OFF', 1),
(6, 5, '4618008', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', 'OFF', 'OFF', 1),
(7, 6, '4618008', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', 'OFF', 'OFF', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller_enquiry`
--

CREATE TABLE `seller_enquiry` (
  `seller_enq_id` int(11) NOT NULL,
  `seller_name` char(50) NOT NULL,
  `seller_contact` bigint(11) NOT NULL,
  `seller_alt_contact` bigint(20) NOT NULL,
  `seller_store` varchar(100) NOT NULL,
  `seller_email` varchar(50) NOT NULL,
  `seller_pincode` int(11) NOT NULL,
  `seller_city` char(50) NOT NULL,
  `seller_category` text NOT NULL,
  `other-cat` varchar(250) NOT NULL,
  `seller_enq_status` tinyint(4) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `seller_enquiry`
--

INSERT INTO `seller_enquiry` (`seller_enq_id`, `seller_name`, `seller_contact`, `seller_alt_contact`, `seller_store`, `seller_email`, `seller_pincode`, `seller_city`, `seller_category`, `other-cat`, `seller_enq_status`, `status`) VALUES
(6, 'Yash mehta', 7600751509, 0, 'Yash Electronics', '261yash007@gmail.com', 382424, 'Bhopal', '[\"3\",\"4\",\"7\",\"9\"]', '', 1, 1),
(8, 'Jethalal Gada', 9165942918, 9165942918, 'Gada Electronics', 'preeminencesoftare@gmail.com', 462021, 'bhopal', '[\"3\",\"4\",\"5\",\"9\"]', '', 1, 1),
(9, 'Hemant Sharma', 8120672119, 9165942918, 'Sharma Electricals', 'hemant.preeminence@gmail.com', 462024, 'bhopal', '[\"3\",\"4\",\"5\",\"6\",\"7\",\"9\"]', '', 0, 1),
(10, 'preeminence software', 7554257011, 755458745, 'prtcgr', 'brijendra.mastery@gmail.com', 462021, 'bhopal', '[\"3\",\"4\",\"8\"]', 'hello', 1, 1),
(11, 'kamlesh', 9165942918, 9098404832, 'kamlesh electicals', 'preeminencesoftare@gmail.com', 462021, 'bhopal', '[\"3\",\"4\",\"5\",\"6\",\"7\",\"9\"]', '', 0, 1),
(12, 'shubham', 9584144994, 9558444945, 'store', 'shubhamshrivastava21@gmail.com', 462026, 'bhopal', '[\"3\",\"4\",\"5\",\"6\"]', 'clothes', 1, 1),
(13, 'prashant chaurasia', 8604695474, 9990482885, 'abc', 'prashantabhi26@gmail.com', 462003, 'bhopal', '[\"3\",\"4\",\"5\"]', '', 1, 1),
(14, 'Brijendra sharma', 9165942918, 9876543210, 'isc', 'ashish.tech1010@gmail.com', 462021, 'bhopal', '[\"4\",\"5\",\"7\",\"9\",\"13\"]', 'bluetooth speaker', 0, 1),
(15, 'ashish tiwari', 7509575564, 1324567890, 'ashish electricals', 'ashish.preeminence@gmail.com', 462021, 'Bhopal', '[\"5\",\"9\",\"13\"]', 'Chargers & screen guards', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller_package_detail`
--

CREATE TABLE `seller_package_detail` (
  `seller_package_detail_id` int(11) NOT NULL,
  `seller_rid` varchar(250) NOT NULL,
  `package_id` int(11) NOT NULL,
  `payment_amount` int(11) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `payment_date` date NOT NULL,
  `number_of_deals` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `seller_package_detail`
--

INSERT INTO `seller_package_detail` (`seller_package_detail_id`, `seller_rid`, `package_id`, `payment_amount`, `payment_mode`, `payment_date`, `number_of_deals`, `status`) VALUES
(6, '4617001', 4, 999, 'paytm', '2018-01-08', 10, 1),
(7, '7817001', 4, 999, 'cheque', '2018-01-10', 10, 1),
(8, '418006', 3, 599, 'netbanking', '2018-01-17', 5, 1),
(9, '4618008', 5, 1599, 'cash', '2018-02-09', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller_schedule`
--

CREATE TABLE `seller_schedule` (
  `seller_schedule_id` int(11) NOT NULL,
  `seller_oid` int(11) NOT NULL,
  `seller_rid` int(11) NOT NULL,
  `monO` text NOT NULL,
  `monC` text NOT NULL,
  `tueO` text NOT NULL,
  `tueC` text NOT NULL,
  `wedO` text NOT NULL,
  `wedC` text NOT NULL,
  `thuO` text NOT NULL,
  `thuC` text NOT NULL,
  `friO` text NOT NULL,
  `friC` text NOT NULL,
  `satO` text NOT NULL,
  `satC` text NOT NULL,
  `sunO` text NOT NULL,
  `sunC` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `seller_schedule`
--

INSERT INTO `seller_schedule` (`seller_schedule_id`, `seller_oid`, `seller_rid`, `monO`, `monC`, `tueO`, `tueC`, `wedO`, `wedC`, `thuO`, `thuC`, `friO`, `friC`, `satO`, `satC`, `sunO`, `sunC`, `status`) VALUES
(1, 4, 4617003, '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', 'OFF', 'OFF', 1),
(2, 5, 4618005, '10.30 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', '11 AM', '8.30 PM', 'OFF', 'OFF', 1),
(3, 6, 418006, '8 am', '6 pm', 'off', 'off', '8 am', '6 pm', '8 am', 'off', '8 am', '6 pm', '8 am', '6 pm', '8 am', '3 pm', 1),
(4, 7, 4618006, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(5, 7, 3818007, '9 am', '10 pm', '9 am', '10 pm', '9 am', '10 pm', '9 am', '10 pm', '9 am', '10 pm', '9 am', '10 pm', 'off', 'off', 1),
(6, 8, 4618008, '', '8.30 PM', '9 AM', '8.30 PM', '9 AM', '8.30 PM', '9 AM', '8.30 PM', '9 AM', '8.30 PM', '9 AM', '8.30 PM', 'OFF', 'OFF', 1),
(7, 9, 4623009, '10am', '8pm', '10am', '8pm', '10am', '8pm', '10am', '8pm', '10am', '8pm', '10am', '8pm', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_name` varchar(50) NOT NULL,
  `title` varchar(256) NOT NULL,
  `subcat_img` text NOT NULL,
  `img_name` varchar(256) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `cat_id`, `subcat_name`, `title`, `subcat_img`, `img_name`, `status`) VALUES
(103, 9, 'LCD TV', 'lcd tv', 'http://localhost/pre/storage/uploads/Subcat/Img1682741174.png', 'Img1682741174.png', 1),
(104, 9, 'LED TV', 'led tv', '/images/uploads/television.png', '', 1),
(105, 9, 'COLOR TV', 'color tv', '/images/uploads/television.png', '', 1),
(106, 9, 'Audio speaker', 'audio speaker', '/images/uploads/music-player.png', '', 1),
(107, 9, 'Home theater', 'home theater', '/images/uploads/music-player.png', '', 1),
(108, 9, 'DVD and BlueRay player', 'dvd and blueray player', '/images/uploads/music-player.png', '', 1),
(109, 9, 'DTH and ST top box', 'dth and st top box', '/images/uploads/music-player.png', '', 1),
(110, 9, 'Bluetooth speaker', 'bluetooth speaker', '/images/uploads/music-player.png', '', 1),
(111, 9, 'Gamming consoles', 'gamming consoles', '/images/uploads/music-player.png', '', 1),
(112, 9, 'Game titles', 'game titles', '/images/uploads/music-player.png', '', 1),
(113, 9, 'MP3 Player Portable', 'mp3 player portable', '/images/uploads/music-player.png', '', 1),
(114, 9, 'Gamming accessories', 'gamming accessories', '/images/uploads/music-player.png', '', 1),
(115, 9, 'Projectors', 'projectors', '/images/uploads/music-player.png', '', 1),
(116, 5, 'Mobile Phones', 'mobile phones', '/images/uploads/photo-camera.png', '', 1),
(117, 5, 'Tablets', 'tablets', '/images/uploads/music-player.png', '', 1),
(118, 5, 'Headphones and earphones', 'headphones and earphones', '/images/uploads/photo-camera.png', '', 1),
(119, 5, 'Power bank', 'power bank', '/images/uploads/photo-camera.png', '', 1),
(120, 5, 'Smart watches', 'smart watches', '/images/uploads/photo-camera.png', '', 1),
(121, 5, 'Mobile and tab accessories', 'mobile and tab accessories', '/images/uploads/photo-camera.png', '', 1),
(122, 3, 'Air conditioners', 'air conditioners', '/images/uploads/refrigerator.png', '', 1),
(123, 3, 'Refrigerators', 'refrigerators', '/images/uploads/refrigerator.png', '', 1),
(124, 3, 'washing machines', 'washing machines', '/images/uploads/wash1.png', '', 1),
(125, 3, 'fans', 'fans', '/images/uploads/photo-camera.png', '', 1),
(126, 3, 'Water purifiers', 'water purifiers', '/images/uploads/wash1.png', '', 1),
(127, 3, 'Ro systems', 'ro systems', '/images/uploads/wash1.png', '', 1),
(128, 3, 'Air coolers', 'air coolers', '/images/uploads/wash1.png', '', 1),
(129, 3, 'Irons', 'irons', '/images/uploads/television.png', '', 1),
(130, 3, 'Inverters', 'inverters', '/images/uploads/wash1.png', '', 1),
(131, 3, 'Stabilizers', 'stabilizers', '/images/uploads/wash1.png', '', 1),
(132, 3, 'Vaccum clearners', 'vaccum clearners', '/images/uploads/refrigerator.png', '', 1),
(133, 3, 'water dispenser', 'water dispenser', '/images/uploads/television.png', '', 1),
(134, 3, 'Air purifier', 'air purifier', '/images/uploads/refrigerator.png', '', 1),
(135, 3, 'Gysers', 'gysers', '/images/uploads/fridge.png', '', 1),
(136, 3, 'Room heater', 'room heater', '/images/uploads/music-player.png', '', 1),
(137, 3, 'Ata makers', 'ata makers', '/images/uploads/photo-camera.png', '', 1),
(138, 4, 'JMG', 'jmg', '/images/uploads/music-player.png', '', 1),
(139, 4, 'Microwave ovens', 'microwave ovens', '/images/uploads/music-player.png', '', 1),
(140, 4, 'pressure cooker', 'pressure cooker', '/images/uploads/music-player.png', '', 1),
(141, 4, 'induction cooker', 'induction cooker', '/images/uploads/television.png', '', 1),
(142, 4, 'Gas stove', 'gas stove', '/images/uploads/television.png', '', 1),
(143, 4, 'Blender', 'blender', '/images/uploads/photo-camera.png', '', 1),
(144, 4, 'sandwich maker', 'sandwich maker', '/images/uploads/fridge.png', '', 1),
(145, 4, 'chopper', 'chopper', '/images/uploads/wash1.png', '', 1),
(146, 4, 'chimney', 'chimney', '/images/uploads/refrigerator.png', '', 1),
(147, 4, 'griller and toaster', 'griller and toaster', '/images/uploads/music-player.png', '', 1),
(148, 4, 'OTG', 'otg', '/images/uploads/fridge.png', '', 1),
(149, 4, 'electric rice cooker', 'electric rice cooker', '/images/uploads/refrigerator.png', '', 1),
(150, 4, 'food processor', 'food processor', '/images/uploads/fridge.png', '', 1),
(151, 4, 'electric kettle', 'electric kettle', '/images/uploads/refrigerator.png', '', 1),
(152, 4, 'coffee makers', 'coffee makers', '/images/uploads/refrigerator.png', '', 1),
(153, 4, 'electric fryer', 'electric fryer', '/images/uploads/music-player.png', '', 1),
(154, 4, 'dish washers', 'dish washers', '/images/uploads/refrigerator.png', '', 1),
(155, 6, 'Laptops', 'laptops', '/images/uploads/television.png', '', 1),
(156, 6, 'Desktops', 'desktops', '/images/uploads/television.png', '', 1),
(157, 6, 'Monitor screens', 'monitor screens', '/images/uploads/television.png', '', 1),
(158, 6, 'Printers', 'printers', '/images/uploads/television.png', '', 1),
(159, 6, 'Hard drives', 'hard drives', '/images/uploads/television.png', '', 1),
(160, 6, 'Memory cards', 'memory cards', '/images/uploads/wash1.png', '', 1),
(161, 6, 'Pendrives', 'pendrives', '/images/uploads/photo-camera.png', '', 1),
(162, 6, 'Printer cartridge', 'printer cartridge', '/images/uploads/wash1.png', '', 1),
(163, 6, 'Laptop charger', 'laptop charger', '/images/uploads/television.png', '', 1),
(164, 6, 'Laptop battery', 'laptop battery', '/images/uploads/television.png', '', 1),
(165, 6, 'Routers', 'routers', '/images/uploads/television.png', '', 1),
(166, 6, 'Mouses', 'mouses', '/images/uploads/television.png', '', 1),
(167, 6, 'Keyboard', 'keyboard', '/images/uploads/television.png', '', 1),
(168, 6, 'POS hardware', 'pos hardware', '/images/uploads/television.png', '', 1),
(169, 7, 'Trimmer', 'trimmer', '/images/uploads/refrigerator.png', '', 1),
(170, 7, 'Shaver', 'shaver', '/images/uploads/refrigerator.png', '', 1),
(171, 7, 'Hair dryers', 'hair dryers', '/images/uploads/music-player.png', '', 1),
(172, 7, 'Straightners', 'straightners', '/images/uploads/refrigerator.png', '', 1),
(173, 7, 'Epilator', 'epilator', '/images/uploads/wash1.png', '', 1),
(174, 7, 'electric masager', 'electric masager', '/images/uploads/music-player.png', '', 1),
(175, 7, 'weighting scale', 'weighting scale', '/images/uploads/wash1.png', '', 1),
(176, 7, 'Health care devices', 'health care devices', '/images/uploads/refrigerator.png', '', 1),
(177, 7, 'smartbands', 'smartbands', '/images/uploads/music-player.png', '', 1),
(178, 7, 'Bicycles', 'bicycles', '/images/uploads/music-player.png', '', 1),
(179, 7, 'Gym equipments', 'gym equipments', '/images/uploads/television.png', '', 1),
(180, 7, 'Diet and nutrition', 'diet and nutrition', '/images/uploads/photo-camera.png', '', 1),
(181, 13, 'Digital SLR', 'digital slr', '/images/uploads/photo-camera.png', '', 1),
(182, 13, 'point and shoot cameras', 'point and shoot cameras', '/images/uploads/photo-camera.png', '', 1),
(183, 13, 'camcorders', 'camcorders', '/images/uploads/photo-camera.png', '', 1),
(184, 13, 'Lances', 'lances', '/images/uploads/photo-camera.png', '', 1),
(186, 9, 'Interior&Extenal', 'interior&extenal', 'http://localhost/pre/storage/uploads/Category/Img1682401526.png', 'Img1682401526.png', 1),
(187, 9, 'interior', 'interior', 'http://localhost/pre/storage/uploads/Subcat/Img1682401868.png', 'Img1682401868.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `usermobile` bigint(10) NOT NULL,
  `useremail` varchar(60) NOT NULL,
  `userpwd` varchar(20) NOT NULL,
  `token` varchar(100) NOT NULL,
  `user_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `user_type` int(11) NOT NULL DEFAULT 0 COMMENT '0->user,1->guest'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `usermobile`, `useremail`, `userpwd`, `token`, `user_status`, `status`, `user_type`) VALUES
(2, 'Brijendra Sharma', 9165942918, 'brijendra.mastery@gmail.com', 'brij@789', '95629', 0, 1, 0),
(3, 'prashant1990', 9990482885, 'prashantabhi26@gmail.com', '9990482885', '52402', 0, 1, 0),
(4, 'rishi', 9584144994, 'shubhamshrivastava21@gmail.com', '95841444994', '33815', 1, 1, 0),
(5, 'sonali', 1234567890, 'sonalij859@gmail.com', '1234', '72746', 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `city_details`
--
ALTER TABLE `city_details`
  ADD PRIMARY KEY (`city_detail_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `homeslider`
--
ALTER TABLE `homeslider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `o_seller`
--
ALTER TABLE `o_seller`
  ADD PRIMARY KEY (`o_seller_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `prebuy_deals`
--
ALTER TABLE `prebuy_deals`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`product_img_id`);

--
-- Indexes for table `seller_branch`
--
ALTER TABLE `seller_branch`
  ADD PRIMARY KEY (`seller_branch_id`);

--
-- Indexes for table `seller_branch_schedule`
--
ALTER TABLE `seller_branch_schedule`
  ADD PRIMARY KEY (`seller_b_s_id`);

--
-- Indexes for table `seller_enquiry`
--
ALTER TABLE `seller_enquiry`
  ADD PRIMARY KEY (`seller_enq_id`);

--
-- Indexes for table `seller_package_detail`
--
ALTER TABLE `seller_package_detail`
  ADD PRIMARY KEY (`seller_package_detail_id`);

--
-- Indexes for table `seller_schedule`
--
ALTER TABLE `seller_schedule`
  ADD PRIMARY KEY (`seller_schedule_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `city_details`
--
ALTER TABLE `city_details`
  MODIFY `city_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=493;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homeslider`
--
ALTER TABLE `homeslider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `o_seller`
--
ALTER TABLE `o_seller`
  MODIFY `o_seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prebuy_deals`
--
ALTER TABLE `prebuy_deals`
  MODIFY `deal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `product_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `seller_branch`
--
ALTER TABLE `seller_branch`
  MODIFY `seller_branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seller_branch_schedule`
--
ALTER TABLE `seller_branch_schedule`
  MODIFY `seller_b_s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seller_enquiry`
--
ALTER TABLE `seller_enquiry`
  MODIFY `seller_enq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `seller_package_detail`
--
ALTER TABLE `seller_package_detail`
  MODIFY `seller_package_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seller_schedule`
--
ALTER TABLE `seller_schedule`
  MODIFY `seller_schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
