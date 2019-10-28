/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `wp_ewwwio_queue` (
  `attachment_id` bigint(20) unsigned DEFAULT NULL,
  `gallery` varchar(10) DEFAULT NULL,
  `scanned` tinyint(1) NOT NULL DEFAULT '0',
  KEY `attachment_info` (`gallery`(3),`attachment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
