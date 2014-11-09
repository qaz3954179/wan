<?php return array (
  0 => 'CREATE TABLE `xiaozu_excomment` (
  `id` int(20) NOT NULL auto_increment,
  `userid` int(20) NOT NULL COMMENT \'用户ID\',
  `username` varchar(255) NOT NULL,
  `userlog` varchar(255) NOT NULL,
  `addtime` int(12) NOT NULL COMMENT \'评价时间\',
  `score` int(1) NOT NULL default \'0\' COMMENT \'评分\',
  `comtype` int(1) NOT NULL COMMENT \'1网站 2订单   \',
  `scoreto` varchar(255) default \'0\' COMMENT \'评价对象\',
  `shopid` int(20) NOT NULL default \'0\' COMMENT \'店铺ID\',
  `content` text COMMENT \'内容\',
  `comacout` int(5) NOT NULL default \'0\' COMMENT \'被回复次数\',
  `orderid` int(20) default \'0\' COMMENT \'订单ID\',
  `imgurl` varchar(255) default NULL,
  `orderctime` int(12) default \'0\' COMMENT \'订单消费时间\',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8',
)?>