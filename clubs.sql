-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 29, 2016 at 09:42 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `testDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `category`, `phone`, `city`, `address`, `latitude`, `longitude`) VALUES
(1, 'Ayden Kitchen & Bar', 'Bars', '3069542590', 'Saskatoon', '265 3rd Avenue S', '52.1257144', '-106.6636301'),
(2, 'Earls Kitchen + Bar', 'Cocktail Bars', '3066644060', 'Saskatoon', '610 2nd Avenue North', '52.1371002', '-106.6593018'),
(3, 'The Yard & Flagon Pub', 'Pubs', '3066538883', 'Saskatoon', '718 Broadway Ave', '52.1182594', '-106.6572876'),
(4, 'The Hollows', 'Cocktail Bars', '3066521505', 'Saskatoon', '334 Avenue C S', '52.1248245', '-106.6733246'),
(5, 'The Ivy Dining & Lounge', 'Cocktail Bars', '3063844444', 'Saskatoon', '301 Ontario Avenue', '52.1325325', '-106.6661003'),
(6, 'The Woods Alehouse', 'Lounges', '3066525883', 'Saskatoon', '148 2nd Avenue N', '52.1297899', '-106.6630114'),
(7, 'Foxy''s Lounge & Eatery', 'Sports Bars', '3069554130', 'Saskatoon', '821 Central Ave', '52.1368408', '-106.5988159'),
(8, 'Flint', 'Lounges', '3066512255', 'Saskatoon', '259 2nd Ave S', '52.1261787', '-106.6656036'),
(9, 'The Rook and Raven Pub', 'Pubs', '3066652220', 'Saskatoon', '154 2nd Ave S', '52.1276512', '-106.6637802'),
(10, 'Spadina Freehouse', 'Pubs', '3066681000', 'Saskatoon', '608 Spadina Cres E', '52.1266899', '-106.6590805'),
(11, 'Winston''s English Pub & Grill', 'Pubs', '3063747468', 'Saskatoon', '243 21st Street E', '52.12666', '-106.66348'),
(12, 'Hudsons Canada''s Pub - Saskatoon', 'Sports Bars', '3069740944', 'Saskatoon', '21st Street East', '52.12617139', '-106.6607855'),
(13, 'Capanna Pizzeria', 'Wine Bars', '3069520202', 'Saskatoon', '101A 20th Street E', '52.1257729', '-106.6668284'),
(14, 'Congress Beer House', 'Pubs', '3069746717', 'Saskatoon', '215 2nd Avenue South', '52.1271823', '-106.6646279'),
(15, 'Amigos Cantina', 'Bars', '3066524912', 'Saskatoon', '632 10th Street E', '52.11754503', '-106.6542335'),
(16, 'O''shea''s Irish Pub', 'Pubs', '3063847444', 'Saskatoon', '222 2nd Ave S', '52.1258316', '-106.6650009'),
(17, 'Shark Club Saskatoon', 'Sports Bars', '3064774771', 'Saskatoon', '310 Circle Drive West', '52.1580873', '-106.673601'),
(18, 'Capitol Music Club', 'Bars', '3062440772', 'Saskatoon', '244 1st Avenue N', '52.131436', '-106.6642484'),
(19, 'Buds On Broadway', 'Pubs', '3062444155', 'Saskatoon', '817 Broadway Avenue', '52.1174493', '-106.6565551'),
(20, 'Bell ''n Whistle Bar & Bistro', 'Bars', '3069314411', 'Saskatoon', '243 - 2nd Avenue S', '52.1264237', '-106.6649847'),
(21, 'Original Joe''s Restaurant & Bar', 'Pubs', '3069790718', 'Saskatoon', '1515 8th St E', '52.114994', '-106.6347885'),
(22, 'Mano''s Restaurant & Lounge', 'Lounges', '3069555555', 'Saskatoon', '200-1820 8th St E', '52.1145744', '-106.6286926'),
(23, 'Original Joe''s', 'Bars', '3069542515', 'Saskatoon', '839  51st Street E', '52.172842', '-106.649429'),
(24, 'Una Pizza + Wine', 'Wine Bars', '3069780116', 'Saskatoon', '707 Broadway Avenue', '52.11857', '-106.65622'),
(25, 'Drift Vista Lounge', 'Lounges', '3066532256', 'Saskatoon', '339 Avenue A South', '52.1246986', '-106.6709976'),
(26, 'Redzone', 'Sports Bars', '3069786514', 'Saskatoon', '106 Circle Drive West', '52.1587715', '-106.6718369'),
(27, 'Coachman', 'Pubs', '3063738885', 'Saskatoon', '2325 Preston Avenue S', '52.1012077', '-106.622467'),
(28, 'Steps Lounge', 'Lounges', '3066675300', 'Saskatoon', '90 22nd Street East', '52.1296692', '-106.6656799'),
(29, 'Spadina Free House', 'Bars', '3066681000', 'Saskatoon', '608 Spadina Crescent E', '52.1266899', '-106.6590805'),
(30, 'Bridges Ale House & Eatery', 'Sports Bars', '3063826060', 'Saskatoon', '2415 22nd Street W', '52.129097', '-106.70755'),
(31, 'Fox And Hounds Pub', 'Pubs', '3066642233', 'Saskatoon', '7 Assiniboine Drive', '52.15980882', '-106.6455971'),
(32, 'Sports On Tap', 'Sports Bars', '3066838921', 'Saskatoon', '2606 Lorne Avenue', '52.09732732', '-106.6719171'),
(33, 'Clark''s Crossing Brew Pub', 'Pubs', '3063846633', 'Saskatoon', '3030 Diefenbaker Dr', '52.1318092', '-106.7280426'),
(34, 'Manchesters Bar & Nite Club', 'Pubs', '3061231234', 'Saskatoon', 'Saskatoon, SK', '52.14415645', '-106.6709358'),
(35, 'Diva''s Club', 'Dance Clubs', '3066650100', 'Saskatoon', '220 3rd Avenue S', '52.126564', '-106.6627731'),
(36, 'Fionn MacCool''s', 'Pubs', '3069312555', 'Saskatoon', '355 2nd Avenue', '52.12499974', '-106.6659034'),
(37, 'Jax Nite Club', 'Dance Clubs', '3069344444', 'Saskatoon', '302 Pacific Avenue', '52.1325607', '-106.666832'),
(38, 'Outlaws Country Rock Bar', 'Bars', '3069780808', 'Saskatoon', '710 Idylwyld Drive N', '52.1369767', '-106.6701019'),
(39, 'Browns Socialhouse', 'Bars', '3063822942', 'Saskatoon', '214 Stonebridge Boulevard', '52.13032683', '-106.65905'),
(40, 'Stovins Lounge', 'Lounges', '3066836948', 'Saskatoon', '601 Spadina Crescent', '52.12603', '-106.6581497'),
(41, 'Red Zone Premium Sports Bar', 'Sports Bars', '3069786514', 'Saskatoon', '106 Circle Drive W', '52.1587715', '-106.6718369'),
(42, 'Beily''s Ultralounge', 'Lounges', '3063743344', 'Saskatoon', '2404 8th Street E', '52.1143608', '-106.6191101'),
(43, 'Finns Irish Pub', 'Irish Pub', '3066676065', 'Saskatoon', '924 Spadina Crescent E', '52.13145', '-106.65306'),
(44, 'Tequila', 'Bars', '3066682582', 'Saskatoon', '1201 Alberta Avenue', '52.144001', '-106.6682816'),
(45, 'Colonial Pub & Grill', 'Pubs', '3063438881', 'Saskatoon', '1301 8th Street E', '52.1146201673221', '-106.637851148844'),
(46, 'Zervos Tavern', 'Lounges', '3066656565', 'Saskatoon', '1605 33rd Street W', '52.14358', '-106.69471'),
(47, 'J T''s Bar & Grill', 'Bars', '3069559393', 'Saskatoon', '205E-3929 8th St E', '52.1148148', '-106.6675339'),
(48, 'Ufondue & Stonegrill Restaurant', 'Bars', '3069556118', 'Saskatoon', '613 8th Street E', '52.1148173', '-106.6556891'),
(49, 'Canadian Bowling Center', 'Lounges', '3063842400', 'Saskatoon', '217 Fairmont Drive', '52.12571', '-106.72203'),
(50, 'The Copper Mug', 'Pubs', '3066514111', 'Saskatoon', '1301 8th Street E', '52.1152496', '-106.6378632'),
(51, 'Chilis Bar & Grill', 'Bars', '3066534547', 'Saskatoon', '1730 Preston Ave', '52.1481781', '-106.6212921'),
(52, 'The Sutherland Bar', 'Dance Clubs', '3063748873', 'Saskatoon', '810 Central Avenue', '52.1372126', '-106.599267'),
(53, 'Rock Sugar', 'Dance Clubs', '3069556667', 'Saskatoon', '3110 8th Street E', '52.11409', '-106.60903'),
(54, 'Bugsys Bar', 'Lounges', '3069757000', 'Saskatoon', 'Saskatoon, SK S7K', '52.16061', '-106.64339'),
(55, 'The Public House Grill Bar', 'Bars', '3069544525', 'Saskatoon', '3730 Diefenbaker Drive', '52.13759', '-106.74333'),
(56, 'The Twisted Tartan', 'Pubs', '3064777000', 'Saskatoon', 'C1-3510 8th Street E', '52.1144851', '-106.5968387'),
(57, 'The Canadian Brewhouse', 'Sports Bars', '3069788747', 'Saskatoon', '3150 Preston Avenue', '52.0852966', '-106.6228485'),
(58, 'Whiskey Jacks', 'Lounges', '3063734440', 'Saskatoon', '3929 8th Street E', '52.1148507', '-106.5891899'),
(59, 'Centro Office Lounge', 'Lounges', '3062412414', 'Saskatoon', '111 23 Street E', '52.130455', '-106.6644669'),
(60, 'StaQatto Piano Bar', 'Bars', '3062448877', 'Saskatoon', '416 21st Street E', '52.1265737', '-106.6602384');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;