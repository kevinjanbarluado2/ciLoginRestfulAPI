Create Database Tables
**************
To store user’s account information, a table needs to be created in the database. The following SQL creates a users table with some basic fields in MySQL database.

CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
 `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL,
 `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive ',
 PRIMARY KEY (`id`)


CREATE TABLE `keys` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL,
 `key` varchar(40) NOT NULL,
 `level` int(2) NOT NULL,
 `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
 `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
 `ip_addresses` text,
 `date_created` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

