<?php return array (
  0 => 'CREATE TABLE `xiaozu_extendco` (
  `id` int(20) NOT NULL auto_increment,
  `userid` int(20) default NULL,
  `username` varchar(200) NOT NULL,
  `userlog` varchar(255) NOT NULL,
  `comid` int(20) NOT NULL,
  `addtime` int(12) NOT NULL,
  `content` text,
  `parent_id` int(20) default \'0\',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8',
)?>