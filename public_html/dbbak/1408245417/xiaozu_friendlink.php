<?php return array (
  0 => 'CREATE TABLE `xiaozu_friendlink` (
  `id` int(20) NOT NULL auto_increment,
  `type` smallint(1) NOT NULL default \'1\',
  `typevalue` varchar(255) default NULL,
  `linkurl` varchar(255) default NULL,
  `title` varchar(255) default NULL,
  `orderid` int(10) default \'99\',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8',
)?>