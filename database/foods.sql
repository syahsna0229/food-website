SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `foods` (
    `foods_id`int(11) NOT NULL,
    `name`varchar(255) NOT NULL,
    `picture`varchar(255) NOT NULL,
    `quantity`int(10) NOT NULL,
    `price` double(10,2) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `foods` (`foods_id`,`name`,`picture`,`quantity`,`price`) VALUES
(1,'Spicy Chicken Burger','./image/food-4.png',50,13.66),
(2,'Smoked Beef Burger','./image/food-7.png',50,14.66),
(3,'Siracha Prawn Burger','./image/prawn.png',50,16.99),
(4,'BeetMushroom Burger','./image/vege.jpg',40,10.40),
(5,'BBQ Lamb Burger','./image/lab.jpg',60,13.66);


ALTER TABLE `foods`
ADD PRIMARY KEY (`foods_id`)

ALTER TABLE `foods`
MODIFY `foods_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;


