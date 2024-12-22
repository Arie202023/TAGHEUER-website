/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 5.7.23-log 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `tbl_news` (
	`news_id` int (10),
	`news_title` varchar (150),
	`news_desc` varchar (765),
	`news_image` blob 
); 
insert into `tbl_news` (`news_id`, `news_title`, `news_desc`, `news_image`) values('1','Adrian Dairo','The materials used in the product is good.','TAGHEUERLOGO.png\r\n');
insert into `tbl_news` (`news_id`, `news_title`, `news_desc`, `news_image`) values('2','Junrie Gupo','The materials used in the product is good.','mix4.png\r\n');
insert into `tbl_news` (`news_id`, `news_title`, `news_desc`, `news_image`) values('3','Jordan Dela Cruz','The product is luxurious ','news_img3.jpg');
