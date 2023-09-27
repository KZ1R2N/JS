-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 12:09 AM
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
-- Database: `rajib`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_info`
--

CREATE TABLE `food_info` (
  `food_name` varchar(255) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `rating` decimal(3,1) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_info`
--

INSERT INTO `food_info` (`food_name`, `restaurant_name`, `price`, `rating`, `description`) VALUES
('BBQ Giant Meal', 'BFC', 1460.00, 4.5, '4 pcs Chicken ,French fries (L),Coleslaw (S),2 Buns ,2 bottles soft drinks (250ml)'),
('Burger', 'Chillox,Mirpur-1(opposite of eidgah math)', 280.00, 3.5, 'Bun,Patty,Lettuce,Tomato,Pickle,Chedder Cheese,Cucumber,Oninon.'),
('Cheese Mountain', 'Cheese Factory', 250.00, 4.0, 'Milk Powder, Chicken, Capsicum, Mushroom, Mozzarella Cheese, Secret Pasta Sauce.'),
('Cheese n BBQ Chicken Pizza', 'Cheese Factory', 560.00, 4.0, 'Full of Chicken Blended in BBQ Flavored Sauce, Imported Mozzarella, Cheese decorated with Green Capsicum & Black Olive.'),
('Cheesy chicken Box', 'Fire and forks', 255.00, 3.5, '1:1 Cheesy chicken served with own made sauce'),
('Chicken and fries meal', 'KFC', 789.00, 4.0, '4 pcs hot and crispy chicken, 1 Medium fries and 2 pepsi'),
('Chicken lollipop', 'Pizza Burg', 175.00, 3.5, 'Decorated with garden salad and a cup of secret sauce'),
('Chicken Steak', 'Roadside kitchen', 349.00, 3.5, '1:1 served with potato wedges and garlic mushroom'),
('Chicken Tenders', 'Kudos', 239.00, 4.0, 'Prepared with chicken, Masala and spices'),
('Chicken Tenders', 'The Hub Rooftop', 575.00, 4.0, 'Breaded chicken tenders, coleslaw, fries, plum sauce, pickles'),
('Chicken Wings', 'The Hub Rooftop', 325.00, 4.5, 'BBQ, buffalo, Cajun dry rub, honey garlic,   lemon pepper, butter parm, spicy Thai, sweet sriracha'),
('Classic Burger', 'The Hub Rooftop', 290.00, 4.0, 'Lettuce, tomato, pickles, special sauce'),
('Etalia Meatball', 'The Etalia', 350.00, 3.0, 'Prepared with fresh dough,Topped with freshly cubed Chicken'),
('French Fries', 'Burger King', 209.00, 3.5, 'Deep fried thinly cut potato chips'),
('Fried Chicken', 'Burger King ', 299.00, 3.5, '2 Pcs. Tender & Juicy chicken, Fried until crispy outside'),
('Masala Chicken Tikka', 'Pizza Hut', 899.00, 3.5, 'Chicken Tikka, Capsicum, Tomato, Green Chili'),
('Oven baked pasta', 'YellowKnife', 360.00, 4.0, '1:2 prepared with chicken'),
('Pasta Basta', 'YellowKnife', 380.00, 3.0, '1:2 Prepared with beef'),
('Pizza', 'Pizza Burg', 325.00, 4.0, 'Spicy chicken ball, diced onion,Green chili,cheese, Marinara sauce'),
('Smoky chicken sandwich', 'Kudos', 210.00, 3.0, 'Hot, smoky and cheesy sandwich'),
('Spiced Tandoori Chicken', 'Pizza Hut', 799.00, 4.0, 'Chicken Tandoori, Capsicum, Onion, Green Chili, Sweet corn'),
('Strips and Rice combo ', 'KFC', 519.00, 4.0, 'Get a full rice bowl with 3 boneless chicken strips'),
('T-Bone steak', 'Fire and forks', 1665.00, 4.5, '350gm- Grass fed angus beef, @ regular side and sauce'),
('Tartar Chicken Burger', 'Burger King', 299.00, 3.5, 'Delicious Burger with chicken patty and inside sauce'),
('Thrift Combo', 'BFC', 2238.00, 4.0, 'Total 6pc Chicken, 3 serves french fries, 3 Bun, 3 coleslaw salad and 3 drinks.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_info`
--
ALTER TABLE `food_info`
  ADD PRIMARY KEY (`food_name`,`restaurant_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
