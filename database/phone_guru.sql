-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_mrp` double(10,2) NOT NULL,
  `item_saving` double(10,2) NOT NULL,
  `item_stars` int(11) NOT NULL,
  `item_desc1` varchar(1000) NOT NULL,
  `item_desc2` varchar(1000) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_mrp`, `item_saving`, `item_stars`, `item_desc1`, `item_desc2`, `item_register`) VALUES
(1, 'Samsung', 'Samsung Galaxy S6 edge', 152.00, './assets/products/1.png', 162.00, 10.00, 4, 'Crafted from glass and metal, the Samsung Galaxy S6 Edge is a revolutionary smartphone that comes with a Quad HD Super AMOLED display, 16 MP camera and lightning-fast 64-bit, octa-core processor. Its curved design lets you access notifications and control different functions easily.', 'Watch your favorite movie or play your favorite game on this smartphone as it is equipped with a 13 cm (5.1) Quad HD Super AMOLED display, which produces a pixel resolution of 2560 x 1440 and has a pixel density of 577ppi. The edge of the phone gives you quick access to your notifications and other functions.', NOW()), -- NOW()
(2, 'Redmi', 'Redmi 2', 102.00, './assets/products/2.png', 120.00, 18.00, 4, 'Looking for a performance-oriented, pocket-friendly smartphone? Look no further as Xiaomi brings to you this Redmi Note 2. With 50% more processing power than its predecessor, this Note 2 from Redmi will change the way you multitask.', 'Powered by a 64-bit Cortex-A53 processor and 2 GB, the Redmi 2 delivers fast and efficient performance. You can expect up to 30% faster browsing speed and 50% higher CPU performance than the previous Cortex-A7 processor. With the Adreno 306 GPU, you get desktop-grade graphics that support DirectX and FlexRender for flawless 3D gaming. With 4G LTE support, enjoy super fast surfing and streaming with download speeds of up to 150 Mbps. The 4G Dual SIM with standby lets you enjoy the benefits of two phones', NOW()),
(3, 'Redmi', 'Redmi 2A', 110.00, './assets/products/3.png', 115.00, 5.00, 5, 'Xiaomi Redmi 2A has 4.7" (11.94 cm) display, 8 MP camera, 2200 mAh battery. It has a IPS LCD Screen with a resolution of HD (720 x 1280 pixels).', 'The Xiaomi Redmi 2A takes the smartphone world back to where it started with the Redmi 1s. It is just a pretty looking standard sized smartphone with the main attraction, as usual, being its unbelievable price. Another major draw of this Lollipop powered phone is the support for 4G LTE networks. ', NOW()),
(4, 'Redmi', 'Redmi Note', 140.00, './assets/products/4.png', 148.00, 8.00, 3, 'A 5.5-inch phablet with a shockingly low price tag and specifications that are more typical of phones in an altogether different league, such as an octa-core MediaTek processor, 720x1280-pixel resolution and 2GB of RAM.', ' It’s no surprise that the Xiaomi Redmi Note did very well in benchmark tests, and was up to every task we threw at it except heavy gaming and HD video playback. Given the trend towards larger screens, this phone is sure to be in high demand, and anyone who can actually get their hands on one will be quite happy.', NOW()),
(5, 'Redmi', 'Redmi 4A ', 128.00, './assets/products/5.png', 140.00, 12.00, 4, '13MP primary camera with 5-elements lens, f/2.2 aperture, PDAF, high dynamic range (HDR), panaroma, 1080p full HD video recording and 5MP front facing camera. 12.7 centimeters (5-inch) IPS capacitive touchscreen with 1280 x 720 pixels resolution and 296 ppi pixel density.', 'Android v6.0.1 Marshmallow Miui 8 operating system with 1.4GHz Cortex A53 64-bit Qualcomm snapdragon 425 quad core processor, 2GB RAM, 16GB internal memory expandable up to 128GB and primary SIM can support 4G calls and data while the secondary SIM can support 2G calls only', NOW()),
(6, 'Redmi', 'Redmi Note 5 Pro', 149.00, './assets/products/6.png', 170.00, 21.00, 5, 'Redmi Note 5 Pro features 5.99-inch touchscreen display with a resolution of 1080 x 2160 pixels. There is a usual selfie camera, earpiece, and sensors on the top edge of the display. Its curves make it seamless to hold the phone on the go.', 'This is the first phone to feature Qualcomm Snapdragon 636 SoC, which offers plenty of power for gaming and heavy apps. You can choose between either 4GB or 6GB of RAM but the storage is the same, at 64GB. Camera performance is also good. The Note 5 Pro features a Portrait mode too for the front and rear camera, which works well. Battery life is also very good, as the phone easily lasts for an entire day on a single charge and fast charging is also supported although you will have to buy a fast charger separately.', NOW()),
(7, 'Redmi', 'Redmi 5', 119.00, './assets/products/10.png', 131.00, 12.00, 4, 'This super stylish handset boasts of a 5.70-inch touchscreen display screen along with a resolution of 720 pixels by 1440 pixels at a PPI of 282 pixels per inch. Xiaomi Redmi 5 is powered by 1.8GHz octa-core Qualcomm Snapdragon 450 processor and is available in 2GB RAM.', 'The dual SIM (GSM and GSM) smartphone also accepts Nano-SIM and Nano-SIM. Wi-Fi, GPS, Bluetooth, USB OTG, FM, 3G, and 4G are the major connectivity options in the phone. To make more irresistible, the sensors on the phone include a Proximity sensor, Accelerometer, Ambient light sensor and Gyroscope.', NOW()),
(8, 'Samsung', 'Samsung Galaxy S6', 172.00, './assets/products/11.png', 184.00, 12.00, 5, 'The Samsung Galaxy S6 is a smartphone that was tested with the Android 6.0. 1 operating system. This model weighs 4.9 ounces, has a 5.1-inch touch screen display, 16-megapixel main camera, and 5-megapixel selfie camera. It comes with 3GB of RAM.', 'Video quality is based on the judgments of trained panelists who viewed recorded video images shot at the highest quality setting available (1080 max.) in multiple lighting conditions.', NOW()),
(9, 'Samsung', 'Samsung Galaxy S7', 184.00, './assets/products/12.png', 190.00, 6.00, 4, 'Samsung\'s brand new Galaxy S7 is a subtle improvement over its predecessor on the outside, but a whole new beast on the inside. Powered by the Exynos 8890 SoC, this phone can blaze through absolutely anything you throw at it, with power to spare. The camera is absolutely amazing, especially in low light.', ' This is a pragmatic phone, compared to its sibling the Galaxy S7 Edge, and is better value for money if you don\'t want to show off. However, with competition at an all-time high, you can also get most of its features and functions for one third this price.', NOW()),
(10, 'Apple', 'Apple iPhone 10', 700.00, './assets/products/13.png', 732.00, 32.00, 5, 'Apple\'s aim with the iPhone X was to create an iPhone that\'s all display, blurring the line between physical object and experience. The 5.8-inch front screen melts into a highly polished curved-edge stainless steel band encircling a durable all-glass body available in two pearlescent finishes: Space Gray and Silver. Both feature a black front panel.', 'The edge-to-edge top-to-bottom Super Retina display adopts OLED technology for true-to-life colors, deep blacks, and a million-to-one contrast ratio. It features a 2436 x 1125 resolution and 458 pixels per inch. It supports HDR, wide color, 3D Touch, and True Tone for adjusting the white balance of the display to match the ambient lighting.', NOW()),
(11, 'Apple', 'Apple iPhone 6S', 430.00, './assets/products/14.png', 446.00, 16.00, 5, 'Apple iPhone 6s smartphone. The Apple iPhone 6s is a smartphone that was tested with the iOS 10.1. 1 operating system. This model weighs 5 ounces, has a 4.7 inch touch screen display, 12-megapixel main camera, and 5-megapixel selfie camera.', 'Video quality is based on the judgments of trained panelists who viewed recorded video images shot at the highest quality setting available (1080 max.) in multiple lighting conditions.', NOW()),
(12, 'Apple', 'Apple iPhone 7', 380.00, './assets/products/15.png', 400.00, 20.00, 4, 'Apple iPhone 7 smartphone was launched in September 2016. The phone comes with a 4.70-inch touchscreen display with a resolution of 750x1334 pixels at a pixel density of 326 pixels per inch (ppi) and an aspect ratio of 16:9. Apple iPhone 7 is powered by a 2.34GHz quad-core Apple A10 Fusion processor.', 'Apple iPhone 7 based on iOS 10 and packs 32GB of inbuilt storage. The Apple iPhone 7 is a single SIM (GSM) smartphone that accepts a Nano-SIM card. The Apple iPhone 7 measures 138.30 x 67.10 x 7.10mm (height x width x thickness) and weighs 138.00 grams. It was launched in Black, Gold, Jet Black, Matte Black, Red, Rose Gold, and Silver colours', NOW());

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
--
-- Dumping data for table `user`
--

-- INSERT INTO `user` (`user_id`, `c_name`, `mail`, `mobile`, `username`, `pass`) VALUES
-- (1, 'Rajkaran', 'rajkaran1612@gmail.com', 7506557557, 'rajj', 'rr');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);


-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;