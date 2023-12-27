-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: 27 ديسمبر 2023 الساعة 18:58
-- إصدار الخادم: 10.4.32-MariaDB
=======
-- Generation Time: Dec 27, 2023 at 08:11 PM
-- Server version: 10.4.32-MariaDB
>>>>>>> 81f837f9661c50b150d1d32f36a559d5dc91828e
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- بنية الجدول `contacts`
--

CREATE TABLE `contacts` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `projectName` varchar(40) NOT NULL,
  `details` varchar(40) NOT NULL,
  `comment` varchar(40) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `contacts`
--

INSERT INTO `contacts` (`id`, `firstName`, `lastName`, `email`, `projectName`, `details`, `comment`, `reg_date`) VALUES
(1, 'Heba', 'Adel', 'hebaadelali78@gmail.com', 'ujh', '55', '66', '2023-12-24 15:32:40'),
(2, 'mai', 'Adel', 'hebaadelali78@gmail.com', 'lalaland', 'hellooo', 'woooo', '2023-12-24 15:33:42'),
(3, 'heba', 'maher', 'heba@gmail.com', 'country house', 'house in the countryside', '300 sq feet', '2023-12-25 19:02:21'),
(7, 'nour', 'ayman', 'nourayman644@gmail.com', '12', '0', '0', '2023-12-26 23:08:23');

-- --------------------------------------------------------

--
-- بنية الجدول `projects`
--

CREATE TABLE `projects` (
  `id` int(6) UNSIGNED NOT NULL DEFAULT 0,
  `image` varchar(500) DEFAULT NULL,
  `img2` varchar(30) NOT NULL DEFAULT 'imgs/10.jpg',
  `img3` varchar(30) NOT NULL DEFAULT 'imgs/10.jpg',
  `img4` varchar(30) NOT NULL DEFAULT 'imgs/10.jpg',
  `title` varchar(30) DEFAULT NULL,
  `architect` varchar(30) NOT NULL DEFAULT 'Frank Lloyd Wright',
  `description` varchar(2000) DEFAULT NULL,
  `category` varchar(50) NOT NULL DEFAULT 'Mansion',
  `price_range` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `projects`
--

INSERT INTO `projects` (`id`, `image`, `img2`, `img3`, `img4`, `title`, `architect`, `description`, `category`, `price_range`) VALUES
(1, 'imgs/7.jpg', 'imgs/4.jpg', 'imgs/3.jpg', 'imgs/25.jpeg', 'S RESIDENCE', 'Raffaello Rosselli', 'This new 1400 sq.m. 3 storey residence located on a fairly sloped 4100 sq.m. site overlooks Johannesburg East.  The design was conceptualised as stacked and intersecting perforated ‘boxes’.The entire edifice is covered with an aluminum shell, punctuated at specific intervals to permit the ingress of natural light into the internal spaces, as deemed necessary. Travertine stone represents the primary finishing material for both the walls and floors, internally and externally. Additionally, a new suspended swimming pool terrace is added to the existing patio space, extending around the east. The structure is designed to open up towards the south to capitalize on the scenic valley views.', 'Palace', '1000$-2000$'),
(2, 'imgs/9.jpg', 'imgs/2.webp', 'imgs/8.jpg', 'imgs/4.jpg', 'SANDTON RESIDENCE', 'Norman Foster', 'This remarkable property, situated in Sandhurst and enveloped by large, ancient trees, sets a new standard in luxury boutique residential living by blending artistic, abstract, sculptural design.The entire edifice is covered with an aluminum shell, punctuated at specific intervals to permit the ingress of natural light into the internal spaces, as deemed necessary. Travertine stone represents the primary finishing material for both the walls and floors, internally and externally. Additionally, a new suspended swimming pool terrace is added to the existing patio space, extending around the east. The structure is designed to open up towards the south to capitalize on the scenic valley views.', 'Mansion', '4000$-6000$'),
(3, 'imgs/11.jpg', 'imgs/20.jpg', 'imgs/25.jpeg', 'imgs/26.webp', 'YP Vineyards', 'Alvar Aaltou', 'The YP Vineyards project constitutes an exciting addition and alteration endeavor situated in the Devon Valley of Stellenbosch. The primary aim of the project revolves around the conversion of the pre-existing traditional farmhouse into a contemporary minimalist dwelling. The entire edifice is covered with an aluminum shell, punctuated at specific intervals to permit the ingress of natural light into the internal spaces, as deemed necessary.\r\n\r\nTravertine stone represents the primary finishing material for both the walls and floors, internally and externally. Additionally, a new suspended swimming pool terrace is added to the existing patio space, extending around the east. The structure is designed to open up towards the south to capitalize on the scenic valley views.', 'Single-Family', '2500$-4000$'),
(4, 'imgs/14.jpeg', 'imgs/22.jpg', 'imgs/23.jpeg', 'imgs/25.jpeg', 'WONDER RESIDENCE', 'Pascale Sablan', 'Residence Wonder is a high-end private residence, situated on the slopes of Mooikloof Estate in Pretoria was designed as an oasis for luxury contemporary living.\r\n\r\nThe building mainly consists over three levels with the approach from basement level, cut into the site.  natural stone, off-shutter concrete and cutting edge perforated screens are all carefully incorporated throughout the design.\r\nThe idea of hanging gardens form a big part of the overall aesthetic of Wonder Residence and were used mainly to soften the building and blend it in to the natural environment.', 'Single-family', '2500$-4000$'),
(5, 'imgs/15.jpeg', 'imgs/11.jpg', 'imgs/12.jpg', 'imgs/13.jpg', 'MOOIKLOOF HEIGHTS', 'Mike Riscica', 'East of Tswane in Gauteng, South Africa is the spectacular Mooikloof Heights home which is situated on a north sloping 15000sq.m. site.\r\nThe home is approached from the north where it is completely transparent, but as the driveway curves around the west side it becomes a collection of stacked, rusted boxes without any openings.\r\nDue to the size of the site, the house could be stretched to extend to nearly 85m from east to west:  The north elevation is totally glazed across the three storeys with deeply recessed glazing to create sun control.', 'Mansion', '2500$-4000$'),
(6, 'imgs/19.jpg', 'imgs/16.jpeg', 'imgs/17.jpeg', 'imgs/18.jpeg', 'BLAIR ATHOLL', 'Koray Duman', 'Designed by Werner van der Meulen of Nico van der Meulen Architects, House in Blair Atholl, a double storey home boasts nearly 750 m² under roof and is surrounded by serenity and tranquility.\r\n\r\nFree from high boundary walls and electric  fencing which is customary to most luxurious houses in Johannesburg, this design is different. With unrestricted views of the countryside, the expansiveness of this home is certain to catch your attention as you approach the house.\r\n\r\nThe brief called for a contemporary, practical home that encouraged outdoor living with an emphasis on entertaining. The design is just that, a modern family home that is spacious and uncluttered from unnecessary decorative elements. This was certainly a Form-Follow-Function approach.', 'Villa', '1000$-2800$'),
(7, 'imgs/s1.jpg', 'imgs/s3.jpg', 'imgs/s2.jpg', 'imgs/s4.jpg', 'LATM RESIDENCE', 'Helena Lucas Vieira', 'LATM residence is a contemporary farmhouse located in a respected equestrian estate on the outskirts of Johannesburg.   The form-giving was based on two axis, with the datum creating the entrance that established a protective north-facing courtyard, serving as primary entertainment space.\r\n\r\nThe service spaces were lined up on the west of the site, shielding the building from the harsh western sun, whilst the rest of the building opens and dissolves towards the north.  Honesty of materiality and structure were kept as the base rule throughout the project, leaving all major structural elements and materials exposed and kept to their natural state.', 'Mansion', '3500$-5000$'),
(9, 'imgs/s6.jpg', 'imgs/s7.jpg', 'imgs/s5.jpg', 'imgs/s4.jpg', 'STACKS MOUNTAIN HOUSE', 'Lora Teagarden', 'Our first Irish project is located in the county of Kerry which overlooks the Stacks Mountain range and unveils a contemporary response to the traditional cottage typology found in this region.\r\n\r\nThis project rises from the ground with a strong but elegant off-shutter concrete assembly that serves as a permeable base, anchoring the design to its site. The first storey structure with its pitched roofs are entirely clad in bronze aluminium, and features openings and perforations cut-in as required throughout, to enhance the light quality on the inside.\r\n\r\nThis project is a good example of a humble-sized house with a big personality.', 'Mansion', '4500$-6000$'),
(10, 'imgs/20.jpg', 'imgs/111.jpeg', 'imgs/222.jpeg', 'imgs/333.jpeg', 'FORREST ROAD HOUSE', 'James Garrett Jr.', 'The light-filled unique eco-friendly home designed by Nico van der Meulen Architects is situated in Inanda, with views of the Sandton skyline to the north.\r\n\r\nThe stand is 1511 sq.m. and the house faces 15° east of north.\r\n\r\nApproaching the home, the first view is of the cantilevered porte cochere screen of floating steel tubes with double sliding garage doors clad in dark limestone to blend with the wall.\r\nAlthough the spa, pool and water feature are three separate bodies of water, the effect created was that it is one interconnected system flowing into each other.', 'Single-Family', '4500$-6000$'),
(11, 'imgs/s3.jpg', 'imgs/s2.jpg', 'imgs/s5.jpg', 'imgs/s6.jpg', 'HOUSE MOT', 'Sanne van der Burgh', 'Residence Mot is designed to be a compact, contemporary family home in the coalfield town of Secunda, Mpumalanga.  The open plan design of the living space spills out onto the exterior terraces allowing for a seamless transition.  The swimming pool area becomes a sanctuary and key feature of the covered patio, with an integrated boma and fire pit ideal for entertaining.\r\n\r\nExposed cantilevered concrete fins form a strong architectural narrative on the first storey screening harsh solar exposure of the west.  Balcony planters are introduced to soften the brutality of the concrete, whilst aluminium screens add necessary privacy to bathroom areas.', 'Mansion', '4500$-6000$'),
(3435, '11.jpg', '15.jpeg', '16.jpeg', '17.jpeg', 'hgrgre', 'egreg', 'egvergr', 'egtergtre', '1000$-2000$');

-- --------------------------------------------------------

--
-- بنية الجدول `register`
--

CREATE TABLE `register` (
  `Name` varchar(60) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `register`
--

INSERT INTO `register` (`Name`, `email`, `password`) VALUES
('heba', 'hebaadelali78@gmail.com', ''),
('heba', 'heba@gmail.com', '123'),
('heba', 'heba@gmail.com', '1233'),
('heba', 'hebaabdelali78@gmail.com', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `name`, `role`, `image_path`, `description`) VALUES
(1, 'nour ayman', 'project manager', 'imgs/nour_ayman.jpg', 'nour ayman'),
(2, 'heba maher', 'Admin', 'imgs/hm.jpg', 'heba maher'),
(3, 'Heba Adel', 'Web Developer', 'imgs/b.png', 'heba adel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
