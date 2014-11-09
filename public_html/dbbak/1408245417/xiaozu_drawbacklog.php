<?php return array (
  0 => 'CREATE TABLE `xiaozu_drawbacklog` (
  `id` int(20) NOT NULL auto_increment,
  `uid` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `orderid` int(20) NOT NULL,
  `content` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `contactname` varchar(100) NOT NULL,
  `status` int(1) default \'0\',
  `addtime` int(12) default NULL,
  `cost` decimal(6,2) default \'0.00\',
  `bkcontent` varchar(255) default NULL COMMENT \'回复说明\',
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8',
)?>