-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 03:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `rev_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `result` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`id`, `food_id`, `rev_id`, `user_id`, `result`) VALUES
(40, 4, 2, '8', 'dislike'),
(42, 4, 4, '8', 'like'),
(67, 4, 1, '8', 'like'),
(70, 4, 2, '10', 'dislike'),
(76, 4, 4, '10', 'like');

-- --------------------------------------------------------

--
-- Table structure for table `food_info`
--

CREATE TABLE `food_info` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `location` varchar(300) NOT NULL,
  `type` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `rating` decimal(3,1) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_info`
--

INSERT INTO `food_info` (`food_id`, `food_name`, `restaurant_name`, `image`, `location`, `type`, `catagory`, `price`, `rating`, `description`) VALUES
(1, 'BBQ Giant Meal', 'BFC', 'bbq-meal.jpg', '', 'Combo Meal', 'Main Course', 1460.00, 4.5, '4 pcs Chicken ,French fries (L),Coleslaw (S),2 Buns ,2 bottles soft drinks (250ml)'),
(2, 'Burger', 'Chillox,Mirpur-1', 'burger.jpg', '', 'Burgers', 'Burgers', 280.00, 3.5, 'Bun,Patty,Lettuce,Tomato,Pickle,Chedder Cheese,Cucumber,Oninon.'),
(3, 'Cheese Mountain', 'Cheese Factory', 'cheese-mountain.jpg', '', 'Pasta', 'Pasta & Noodles', 250.00, 4.0, 'Milk Powder, Chicken, Capsicum, Mushroom, Mozzarella Cheese, Secret Pasta Sauce.'),
(4, 'Cheese n BBQ Chicken Pizza', 'Cheese Factory', 'bbq pizza.jpg', '', 'Pizza', 'Pizza', 560.00, 4.0, 'Full of Chicken Blended in BBQ Flavored Sauce, Imported Mozzarella, Cheese decorated with Green Capsicum & Black Olive.'),
(5, 'Cheesy chicken Box', 'Fire and forks', 'chicken-box.jpg', '', 'Chicken', 'Main Course', 255.00, 3.5, '1:1 Cheesy chicken served with own made sauce'),
(6, 'Chicken and fries meal', 'KFC', 'kfc-chicken.jpg', '', 'Combo Meal', 'Main Course', 789.00, 4.0, '4 pcs hot and crispy chicken, 1 Medium fries and 2 pepsi'),
(7, 'Chicken lollipop', 'Pizza Burg', 'chicken-lollipop.jpg', '', 'Chicken', 'Sides', 175.00, 3.5, 'Decorated with garden salad and a cup of secret sauce'),
(8, 'Chicken Steak', 'Roadside kitchen', 'chicken-steak.jpg', '', 'Steak', 'Main Course', 349.00, 3.5, '1:1 served with potato wedges and garlic mushroom'),
(9, 'Chicken Tenders', 'Kudos', 'chicken-tenders.jpg', '', 'Chicken', 'Appetizers', 239.00, 3.2, 'Prepared with chicken, Masala and spices'),
(10, 'Chicken Tenders', 'The Hub Rooftop', 'chicken-tender.jpg', '', 'Chicken', 'Appetizers', 575.00, 4.0, 'Breaded chicken tenders, coleslaw, fries, plum sauce, pickles'),
(11, 'Chicken Wings', 'The Hub Rooftop', 'chicken-wings.jpg', '', 'Chicken', 'Appetizers', 325.00, 4.5, 'BBQ, buffalo, Cajun dry rub, honey garlic,   lemon pepper, butter parm, spicy Thai, sweet sriracha'),
(12, 'Classic Burger', 'The Hub Rooftop', 'classic-burger.jpg', '', 'Burgers', 'Burgers', 290.00, 4.0, 'Lettuce, tomato, pickles, special sauce'),
(13, 'Etalia Meatball', 'The Etalia', 'meatball.jpg', '', 'Pizza', 'Pizza', 350.00, 4.3, 'Prepared with fresh dough, Topped with freshly cubed Chicken'),
(14, 'French Fries', 'Burger King', 'french fries.jpg', '', 'Fries', 'Sides', 209.00, 4.0, 'Deep fried thinly cut potato chips'),
(15, 'Fried Chicken', 'Burger King ', 'fried-chicken.jpg', '', 'Chicken', 'Appetizers', 299.00, 3.5, '2 Pcs. Tender & Juicy chicken, Fried until crispy outside'),
(16, 'Masala Chicken Tikka', 'Pizza Hut', 'tikka-pizza.jpg', '', 'Pizza', 'Pizza', 899.00, 3.5, 'Chicken Tikka, Capsicum, Tomato, Green Chili'),
(17, 'Oven baked pasta', 'YellowKnife', 'oven-baked.jpg', '', 'Pasta', 'Pasta & Noodles', 360.00, 4.0, '1:2 prepared with chicken'),
(18, 'Pasta Basta', 'YellowKnife', 'pasta-basta.jpg', '', 'Pasta', 'Pasta & Noodles', 380.00, 3.0, '1:2 Prepared with beef'),
(19, 'Pizza', 'Pizza Burg', 'pizza-burg.jpg', '', 'Pizza', 'Pizza', 325.00, 4.0, 'Spicy chicken ball, diced onion,Green chili,cheese, Marinara sauce'),
(20, 'Smoky chicken sandwich', 'Kudos', 'chicken-sandwich.jpg', '', 'Sandwich', 'Sandwitch', 210.00, 3.0, 'Hot, smoky and cheesy sandwich'),
(21, 'Spiced Tandoori Chicken', 'Pizza Hut', 'tandori-pizza.jpg', '', 'Pizza', 'Pizza', 799.00, 4.0, 'Chicken Tandoori, Capsicum, Onion, Green Chili, Sweet corn'),
(22, 'Strips and Rice combo ', 'KFC', 'fried-rice.jpg', '', 'Combo Meal', 'Main Course', 519.00, 4.0, 'Get a full rice bowl with 3 boneless chicken strips'),
(23, 'T-Bone steak', 'Fire and forks', 't-bone.jpg', '', 'Steak', 'Main Course', 1665.00, 4.5, '350gm- Grass fed angus beef, @ regular side and sauce'),
(24, 'Tartar Chicken Burger', 'Burger King', 'chicken-burger.jpg', '', 'Burgers', 'Burgers', 299.00, 3.5, 'Delicious Burger with chicken patty and inside sauce'),
(25, 'Thrift Combo', 'BFC', 'chicken-fries.jpg', '', 'Combo Meal', 'Main Course', 2238.00, 4.1, 'Total 6pc Chicken, 3 serves french fries, 3 Bun, 3 coleslaw salad and 3 drinks.');

-- --------------------------------------------------------

--
-- Table structure for table `food_review`
--

CREATE TABLE `food_review` (
  `rev_id` int(11) NOT NULL,
  `rev_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `rating` float DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_review`
--

INSERT INTO `food_review` (`rev_id`, `rev_name`, `email`, `username`, `user_id`, `food_id`, `rating`, `comment`, `date`) VALUES
(1, 'Medha R', 'medha12@gmail.com', 'medha12', 7, 4, 4, 'quality was good but quantity was not satisfied.', ''),
(2, 'afia', 'afiajahin.p25@gmail.com', 'afia123', 3, 4, 4, 'too spicy', ''),
(3, 'faruk', 'faruk@gmail.com', 'faruk123', 2, 13, 4, 'good but need more chicken', ''),
(4, 'ratun', 'ratun@gmail.com', 'ratun123', 4, 4, 4, 'good but need more juicy', ''),
(5, 'rajib', 'rajib@gmail.com', 'rajib123', 0, 14, 3, 'not so good. Need more masala ', ''),
(6, 'abid', 'abid@gmail.com', 'abid123', 0, 13, 4, 'piece was so small. have to make better quantity', ''),
(7, 'jui', 'jui@gmail.com', 'jui123', 0, 10, 5, 'good', ''),
(8, 'rafi', 'rafi@gmail.com', 'rafi', 0, 12, 4, 'need more meat and sausage', ''),
(9, 'Alina', 'alina@gmail.com', 'alina123', 0, 3, 5, 'Best one i tried ever', ''),
(10, 'Eshal', 'eshal@gmail.com', 'eshal123', 0, 6, 4, 'quality have to make better', ''),
(11, 'adiba', 'adiba@gmail.com', 'adiba123', 0, 1, 4, 'taste was good but quantity was not satisfied', ''),
(12, 'semim', 'semim@gmail.com', 'semim123', 0, 14, 3, 'good', ''),
(13, 'oishi', 'oishi@gmail.com', 'oishi123', 0, 11, 3, 'average basis on price', ''),
(14, 'fiza', 'fiza@gmail.com', 'fiza123', 0, 9, 4, 'too spicy but overall good', ''),
(15, 'adit', 'adit@gmail.com', 'adit123', 0, 2, 5, 'Best', ''),
(69, 'Medha R', 'medha12@gmail.com', 'medha12', 7, 4, 5, 'Very tasty', 'Sunday, 24/09/2023 02:52 AM'),
(70, 'Medha R', 'medha12@gmail.com', 'medha12', 7, 4, 4, 'Good', 'Sunday, 24/09/2023 10:15 AM'),
(73, 'Afia Jahin', 'afiajahin.p25@gmail.com', 'afia1234', 3, 4, 3, 'very good', 'Sunday, 24/09/2023 10:37 AM'),
(74, 'Antu Dabichi', 'antu@gmail.com', 'Davinci', 8, 4, 4, 'asdgf', 'Tuesday, 26/09/2023 06:23 AM'),
(75, 'Antu Dabichi', 'antu@gmail.com', 'Davinci', 8, 4, 5, 'rtrt', 'Tuesday, 26/09/2023 06:23 AM'),
(76, 'Antu Dabichi', 'antu@gmail.com', 'Davinci', 8, 13, 2, 'this is shitty', 'Tuesday, 26/09/2023 04:49 PM');

-- --------------------------------------------------------

--
-- Table structure for table `forkers`
--

CREATE TABLE `forkers` (
  `reviewers` int(20) NOT NULL,
  `forker` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forkers`
--

INSERT INTO `forkers` (`reviewers`, `forker`) VALUES
(3, 9),
(7, 9),
(7, 10);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `youtube` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `email`, `username`, `image`, `firstname`, `lastname`, `address`, `contact`, `password`, `youtube`, `instagram`, `facebook`, `twitter`) VALUES
(1, 'afia@gmail.com', 'a', '', 'Afia', 'Jahin', 'Rupnogor', '01754346749', '$2y$10$GZttvm6eLq/HoOGJwA43d.oAr0LFZ2pX4lxjgZXBvaAuWrbsZtpBi', '', '', '', ''),
(2, 'afia25@gmail.com', 'b', '', 'Afia', 'Jahin', 'Rupnogor', '01754346749', '$2y$10$N8.M5NagY3QwVM3SjbZNBephTWqAG5dRVTXaFblDBfh2Ylml2Fd0S', '', '', '', ''),
(3, 'afiajahin.p25@gmail.com', 'afia1234', '', 'Afia', 'Jahin', 'Rupnogor', '01754346749', '$2y$10$sDEFrmxV2YbDlTRsC2IOj.A8f29amuqeQNszhNJqCab3ocXopMjU6', 'www.youtube.com', 'www.instagram.com', '', 'www.twitter.com'),
(4, 'ratun@gmail.com', 'ratun123', '', 'kazi', 'ratun', 'mirpur 2', '01736537766', '$2y$10$PIwN4LpY4s2JHHFb/Ycwr.lWWg1/OUKxxZqgaD0Fdj7hnSTwkhr6S', '', '', '', ''),
(5, 'afiajah.p25@gmail.com', 'd', '', 'Afia', 'Jahin', 'Rupnogor', '01754346749', '$2y$10$vDiPxifBBW.Q7nZILPLRFOnd0X7tvn87w1XD0nc/7TNx8x54mVOvy', '', '', '', ''),
(6, 'afi@gmail.com', 'c', '', 'Afia', 'Jahin', 'Rupnogor', '01754346749', '$2y$10$MI0TkiggEnS07zut7rdBg.4T/rg8IEr.CiBbxSzPOjFLQvD0m5qlC', '', '', '', ''),
(7, 'medha12@gmail.com', 'medha12', 'faceless-woman-icon-image-vector-14391791 (1).jpg', 'Medha', 'R', 'Mirpur', '01754129456', '$2y$10$ci.ZrbFRKPDegpPVxj07ROz4038wlzoLSy4EnToQwOKa2AMSzQx3y', '', '', '', ''),
(8, 'antu@gmail.com', 'Davinci', '', 'Antu', 'Dabichi', 'National Housing, Mirpur 2, Dhaka', '01736537768', '$2y$10$PEtLECxV/BVNHiYwIookVOo3ZmFVBYaaXoy1/fL1zgTtlkTEtl7E.', '', '', '', ''),
(9, 'antu1@gmail.com', 'an2', '', 'aa', 'ff', 'asd', '01736537755', '$2y$10$4m/iBM8fqIK/GCawo0cWH.Guli8h7lfu9MEUfqYdRDQVBLkwzuzJ2', '', '', '', ''),
(10, 'ratun12@gmail.com', 'ratun2', '', 'kazi', 'rifat', 'asdf', '01736537755', '$2y$10$AmnzXAUpYtG.mF82SlUn7.IYB6wuKXe4K5A.bjmeHozwLdrOBu6lC', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rev_id` (`rev_id`,`user_id`);

--
-- Indexes for table `food_info`
--
ALTER TABLE `food_info`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `food_review`
--
ALTER TABLE `food_review`
  ADD PRIMARY KEY (`rev_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `food_info`
--
ALTER TABLE `food_info`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `food_review`
--
ALTER TABLE `food_review`
  MODIFY `rev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
