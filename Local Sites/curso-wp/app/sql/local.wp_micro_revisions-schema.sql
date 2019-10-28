/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_micro_revisions` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_action` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `data_size` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `settings` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `preferences` longtext COLLATE utf8mb4_unicode_520_ci,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
