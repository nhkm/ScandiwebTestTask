create database test;

use test;

CREATE TABLE `products` (
  `id` int(11) NOT NULL auto_increment,
  `sku` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(7) NOT NULL,
  `size` varchar(100) ,
  `weight` varchar(100) ,
  `dimension` varchar(100) ,
  PRIMARY KEY  (`id`)
);