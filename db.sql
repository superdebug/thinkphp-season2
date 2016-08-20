CREATE TABLE IF NOT EXISTS `ar_category` (
  `cate_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(20) NOT NULL,
  `cate_ename` varchar(20) NOT NULL,
  `cate_pic` varchar(200) NOT NULL,
  `cate_keywords` varchar(200) NOT NULL,
  `cate_desc` text NOT NULL,
  `cate_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0封面 1列表 2产品',
  `parentid` smallint(5) DEFAULT '0' COMMENT '父分类,无限极分类核心,默认为0，即没有父类',
  `cate_content` text NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;