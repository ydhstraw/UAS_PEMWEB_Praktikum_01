-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 07:39 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `room` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `id_user`, `id_hotel`, `name`, `email`, `room`, `price`, `phone_number`, `check_in`, `check_out`) VALUES
(1, 2, 6, 'Norbertus Dewa Rucci', 'norbertus@gmail.com', 1, 1200000, '0123456789', '2021-06-01', '2021-06-03'),
(2, 5, 7, 'Yudhistira Aremaputra Wardhana', 'yudhistira.wardhana@gmail.com', 3, 9801000, '089636839401', '2021-06-10', '2021-06-12'),
(3, 6, 1, 'Arcriles', 'arcrilest@outlook.com', 1, 65098000, '3254900', '2021-06-10', '2021-06-30'),
(4, 8, 1, 'Islatoen', 'isla@gmail.com', 3, 19529400, '0896767323', '2021-06-13', '2021-06-15'),
(5, 3, 1, 'Norbertus Dewa Rucci', 'norbertus@gmail.com', 1, 6509800, '0123456', '2021-06-08', '2021-06-10'),
(7, 3, 1, 'Norbertus Dewa Rucci', 'norbertus@gmail.com', 1, 6509800, '0123456', '2021-06-08', '2021-06-10'),
(8, 8, 2, 'Arya', 'arya@gmail.com', 5, 32605560, '08786736437', '2021-06-11', '2021-06-17');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `rating` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `image_link` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `rating`, `room`, `price`, `location`, `image_link`, `description`) VALUES
(1, 'Hotel Indonesia', 5, 17, 3254900, 'Jakarta', 'hotels/hotel indonesia.jpg', 'An 11-minute walk from Sudirman train station, this ritzy hotel is 2.1 km from the National Museum of Indonesia and 4 km from Istiqlal Mosque.\r\nSophisticated rooms with floor-to-ceiling windows offer free Wi-Fi, flat-screen TVs and iPod docks, as well as safes, and tea and coffeemaking facilities. Suites overlook the Bundaran HI roundabout and have separate sitting rooms. Upgraded suites add dining rooms and butler service.\r\nParking is free. Amenities include a chic restaurant and a lounge serving afternoon tea, plus a German brewhouse and a deli. Other perks consist of a rooftop pool with a cafe and skyline views, plus a gym and a spa.'),
(2, 'Sari Pacific Jakarta', 4, 31, 1086852, 'Jakarta', 'hotels/sari pacific jakarta.jpg', 'Set in a shopping and business area, this upscale hotel is 1 km from both the Gondangdia train station and the National Museum of Indonesia.\r\nThe basic rooms include flat-screens, minibars and free Wi-Fi, plus safes, and tea and coffeemakers. Upgraded rooms include living rooms and floor-to-ceiling windows with city views. Suites add kitchenettes; upgraded suites add balconies.\r\nAmenities include 2 restaurants, a deli, and a lounge with live entertainment. There\'s also a fitness center, an outdoor pool and a pool bar, plus a spa with a steam room and a sauna. Other amenities include a salon and event space.'),
(3, 'Arimbi Pejaten Suites', 3, 14, 385000, 'Jakarta', 'hotels/arimbi pejaten suites.jpg', 'Wait'),
(4, 'The Trans Luxury Hotel', 4, 16, 1495000, 'Bandung', 'hotels/the trans luxury hotel.jpeg', 'Across the street from the Trans Studio Mall Bandung, this polished hotel is 2 km from Cikudapateuh train station and 4 km from dining and shopping along lively Braga Street.\r\nGenteel rooms offer free Wi-Fi, flat-screen TVs and sitting areas, plus floor-to-ceiling windows. Suites add separate living areas, dining tables and butler service; some include whirlpool tubs and kitchenettes.\r\nThere\'s an opulent lobby bar, a buffet restaurant and a sleek rooftop restaurant with city views. Other amenities include a spa, a gym and an outdoor pool with a swim-up bar. Parking and breakfast are available.'),
(5, 'Aston Pasteur', 4, 23, 634800, 'Bandung', 'hotels/Aston Pasteur.jpg', 'This modern hotel is 3 km from Husein Sastranegara International Airport and 2 km from Paris Van Java mall.\r\n\r\nUpscale rooms with floor-to-ceiling windows feature free Wi-Fi, flat-screen TVs and minibars, as well as tea and coffeemaking facilities. Suites add living areas. Room service is available.\r\n\r\nBreakfast (fee) is offered in a chic international restaurant. There\'s an outdoor pool with a hot tub and a separate kids\' area. Other amenities include a rooftop lounge and a gym, plus a ballroom and 8 meeting rooms.'),
(6, 'eL Hotel Royale Bandung', 4, 31, 600000, 'Bandung', 'hotels/el hotel royale bandung.jpg', 'In Downtown, this refined, art deco-inspired hotel is a 5-minute walk from the chic cafes and boutiques of Braga Street, a 12-minute walk from Stasiun Bandung train station and 6 km from Husein Sastranegara Intenational Airport.\r\n\r\nSophisticated rooms come with free Wi-Fi, flat-screen TVs, and tea and coffeemaking facilities. Upgraded rooms add sitting areas, safes and kitchenettes with microwaves.\r\n\r\nBreakfast, parking and an airport shuttle are free. Other amenities include a business center, a fitness center, a spa, and an outdoor pool with a hot tub. There\'s also an elegant restaurant, a casual cafe and an open-air, poolside sports bar.'),
(7, 'Hotel Tentrem Yogyakarta', 5, 35, 1633500, 'Yogyakarta', 'hotels/hotel tentrem jogja.jpg', 'Among shops and restaurants, this lavish hotel is 2.9 km from the markets on buzzy Jalan Malioboro, and 5 km from Keraton Ngayogyakarta Hadiningrat palace.\r\nPlush, modern rooms offer free Wi-Fi and flat-screen TVs, plus minibars, and tea and coffeemakers. Upgraded rooms have balconies; studios and 1- to 2-bedroom suites add living areas and/or whirlpool tubs. An upgraded suite offers a kitchenette, a powder room and 24/7 butler service.\r\nA breakfast buffet and parking are complimentary. Other amenities include 2 upscale restaurants and a polished lounge, plus an outdoor pool with a poolside bar. There’s also a spa, a gym and a boutique.'),
(8, 'Grand Inna Malioboro', 4, 23, 492500, 'Yogyakarta', 'hotels/grand inna malioboro.jpg', 'This stately hotel is 2 km from 18th-century Kraton Ngayogyakarta Hadiningrat palace, 5 km from shopping at Ambarrukmo Plaza and a 15-minute walk from Fort Vredeburg Museum, a former colonial fortress.\r\nThe elegant rooms and suites feature free Wi-Fi, flat-screen TVs and minifridges. Room service is also available.\r\nAmenities include 3 restaurants and a lounge, as well as a spa, an outdoor pool with a terrace, and 18 meeting rooms.'),
(9, 'Puri Artha Hotel Yogyakarta', 3, 51, 569447, 'Yogyakarta', 'hotels/Puri-Artha-Hotel jogja.jpg', 'This laid-back hotel is 3 km from both the Jalan Malioboro street market and the Lempuyangan train station, and 6 km from the Keraton Ngayogyakarta Hadiningrat palace.\r\nRelaxed rooms with Asian and Balinese-style decor offer terraces, satellite TV and free Wi-Fi, plus minibars. Upgraded quarters add refined wood furnishings and/or 4-poster beds, while suites have dining/living areas. Room service is available.\r\nFreebies include parking, a breakfast buffet and afternoon tea with snacks. Other amenities consist of an international restaurant and a bar featuring wood-paneled ceilings, in addition to an outdoor pool, a spa and 4 meeting rooms.'),
(10, 'The Apurva Kempinski Bali', 5, 23, 3321934, 'Bali', 'hotels/arpuva kempinski bali.jpg', 'Set beside a beach on the Indian Ocean, this upscale luxury hotel on lush, landscaped grounds is 6 km from Museum Pasifika Bali, 11 km from Garuda Wisnu Kencana Cultural Park and 15 km from Ngurah Rai International Airport.\r\nWarm, polished rooms have free Wi-Fi, flat-screen TVs and balconies, plus tea and coffeemakers, and safes. Suites add living areas, ocean views and/or private pools. Luxe 1- to 3-bedroom villas offer dining rooms, kitchenettes and/or butler service.\r\nDining options include a sophisticated rooftop restaurant, a deli and a poolside bar. There\'s also an outdoor pool, a spa and meeting/event space. Valet parking is available.'),
(11, 'Grand Inna Kuta', 2, 47, 545468, 'Bali', 'hotels/grand inna bali.jpg', 'This modern oceanfront hotel, set along Kuta Beach, is 2 km from the discos of Legian Road and 5 km from the shops of Seminyak.\r\nThe upscale rooms and suites come with flat-screen TVs, free Wi-Fi, and tea and coffeemaking facilities. Some have terraces or balconies, direct pool access or sea views. Suites add sitting rooms, while family rooms add bunk beds.\r\nFreebies include a breakfast buffet and parking. Additional amenities include an open-air restaurant, an airy cafe, 2 bars (1 by a pool) and 3 pools. There\'s also a tennis court and a spa, along with beach access. Surf lessons and bike rentals are available.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birth_day` date NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `image_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `password`, `birth_day`, `phone_number`, `image_link`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin1234', '2021-06-06', '00000000', ''),
(2, 'admin', 'admin', 'admin@gmail.com', 'c93ccd78b2076528346216b3b2f701e6', '2021-06-01', '0123456', ''),
(3, 'customer', 'norbertus', 'norbertus@gmail.com', '360d66d9c87f4a651007bfd6c043fbac', '2021-06-05', '12345678', 'users/Swaq Face.jpg'),
(6, 'customer', 'Arcriles', 'arcrilest@outlook.com', 'd9601faf11fcd1ea6b621c55dfe04033', '2021-06-10', '08991666693', 'users/default_avatar.png'),
(7, 'customer', 'Isla', 'isla@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2021-05-30', '08696969', 'users/paimon.jpg'),
(8, 'customer', 'Yudhis', 'yudhistira@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2021-05-30', '0896723627', 'users/SC_P_Higuchi_Madoka_SSR02.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
