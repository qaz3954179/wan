<?php return array (
  0 => 'CREATE TABLE `xiaozu_pmes` (
  `id` int(20) NOT NULL auto_increment,
  `uid` int(20) default \'0\',
  `username` varchar(100) default NULL,
  `usercontent` text,
  `userimg` varchar(255) default NULL,
  `creattime` int(12) NOT NULL default \'0\',
  `backuid` int(20) NOT NULL default \'0\',
  `backcontent` text,
  `backimg` varchar(255) default NULL,
  `backtime` int(12) NOT NULL default \'0\',
  `backusername` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_pmes`(`id`,`uid`,`username`,`usercontent`,`userimg`,`creattime`,`backuid`,`backcontent`,`backimg`,`backtime`,`backusername`) VALUES(\'22\',\'0\',\'\',\'清明节假期\',\'\',\'1395902985\',\'0\',\'\',\'\',\'0\',\'网站客服\')',
  2 => 'INSERT INTO `xiaozu_pmes`(`id`,`uid`,`username`,`usercontent`,`userimg`,`creattime`,`backuid`,`backcontent`,`backimg`,`backtime`,`backusername`) VALUES(\'20\',\'0\',\'\',\'111\',\'\',\'1395621665\',\'0\',\'\',\'\',\'0\',\'网站客服\')',
  3 => 'INSERT INTO `xiaozu_pmes`(`id`,`uid`,`username`,`usercontent`,`userimg`,`creattime`,`backuid`,`backcontent`,`backimg`,`backtime`,`backusername`) VALUES(\'21\',\'96\',\'112233\',\'12123123123123\',\'\',\'1395902920\',\'0\',\'我知道了\',\'\',\'1395902957\',\'网站客服\')',
  4 => 'INSERT INTO `xiaozu_pmes`(`id`,`uid`,`username`,`usercontent`,`userimg`,`creattime`,`backuid`,`backcontent`,`backimg`,`backtime`,`backusername`) VALUES(\'23\',\'169\',\'tiantian\',\'fdsafdsa\',\'\',\'1396948154\',\'0\',\'xxxxxxxxxxxx\',\'\',\'1401246174\',\'网站客服\')',
  5 => 'INSERT INTO `xiaozu_pmes`(`id`,`uid`,`username`,`usercontent`,`userimg`,`creattime`,`backuid`,`backcontent`,`backimg`,`backtime`,`backusername`) VALUES(\'25\',\'0\',\'\',\'夏天吃什么呢\',\'\',\'1403790787\',\'0\',\'\',\'\',\'0\',\'网站客服\')',
)?>