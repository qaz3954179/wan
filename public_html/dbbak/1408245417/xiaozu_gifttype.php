<?php return array (
  0 => 'CREATE TABLE `xiaozu_gifttype` (
  `id` int(3) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `orderid` int(5) NOT NULL default \'0\',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_gifttype`(`id`,`name`,`orderid`) VALUES(\'1\',\'礼品\',\'3\')',
  2 => 'INSERT INTO `xiaozu_gifttype`(`id`,`name`,`orderid`) VALUES(\'3\',\'玩具\',\'0\')',
)?>