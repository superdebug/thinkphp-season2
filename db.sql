
CREATE TABLE IF NOT EXISTS `ar_admin` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(30) NOT NULL,
  `ad_password` varchar(32) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;