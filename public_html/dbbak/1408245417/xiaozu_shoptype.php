<?php return array (
  0 => 'CREATE TABLE `xiaozu_shoptype` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(250) NOT NULL COMMENT \'分类名\',
  `type` varchar(100) default NULL COMMENT \'checkbox多选，radio单选，img图片，input输入框\',
  `parent_id` int(20) NOT NULL default \'0\' COMMENT \'0表示导航明，1值\',
  `cattype` int(1) NOT NULL default \'1\' COMMENT \'1外卖2订台3其他\',
  `is_search` int(1) NOT NULL default \'0\' COMMENT \'0不是搜索关键字1搜索关键字\',
  `is_main` int(1) NOT NULL default \'0\' COMMENT \'是否展示在店铺列表 0否1是\',
  `is_admin` int(1) NOT NULL default \'0\' COMMENT \'设置类型0店铺1后台\',
  `instro` varchar(255) default NULL COMMENT \'简单介绍\',
  `orderid` int(10) NOT NULL default \'0\' COMMENT \'排序ID\',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'51\',\'商品分类\',\'checkbox\',\'0\',\'0\',\'1\',\'1\',\'0\',\'\',\'1\')',
  2 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'76\',\'2\',\'0\',\'67\',\'0\',\'0\',\'0\',\'0\',\'\',\'0\')',
  3 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'75\',\'西餐\',\'0\',\'51\',\'0\',\'0\',\'0\',\'0\',\'\',\'0\')',
  4 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'57\',\'外买配送时间\',\'input\',\'0\',\'0\',\'0\',\'1\',\'0\',\'\',\'2\')',
  5 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'58\',\'10分钟\',\'0\',\'57\',\'0\',\'0\',\'0\',\'0\',\'\',\'0\')',
  6 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'59\',\'店铺图标\',\'img\',\'0\',\'0\',\'0\',\'1\',\'1\',\'\',\'0\')',
  7 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'60\',\'/upload/goods/20140614190450621.png\',\'0\',\'59\',\'0\',\'0\',\'0\',\'0\',\'限时配送\',\'0\')',
  8 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'61\',\'/upload/goods/20140614190459687.png\',\'0\',\'59\',\'0\',\'0\',\'0\',\'0\',\'满10元送可乐\',\'0\')',
  9 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'62\',\'/upload/goods/20140614190507505.png\',\'0\',\'59\',\'0\',\'0\',\'0\',\'0\',\'满10元减2元\',\'0\')',
  10 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'63\',\'/upload/goods/20140614190515292.png\',\'0\',\'59\',\'0\',\'0\',\'0\',\'0\',\'最新入驻商家\',\'0\')',
  11 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'67\',\'超市\',\'radio\',\'0\',\'1\',\'0\',\'0\',\'0\',\'\',\'0\')',
  12 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'68\',\'1\',\'0\',\'67\',\'0\',\'0\',\'0\',\'0\',\'\',\'0\')',
  13 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'74\',\'川菜\',\'0\',\'51\',\'0\',\'0\',\'0\',\'0\',\'\',\'0\')',
  14 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'73\',\'炒菜\',\'0\',\'51\',\'0\',\'0\',\'0\',\'0\',\'\',\'0\')',
  15 => 'INSERT INTO `xiaozu_shoptype`(`id`,`name`,`type`,`parent_id`,`cattype`,`is_search`,`is_main`,`is_admin`,`instro`,`orderid`) VALUES(\'72\',\'快餐\',\'0\',\'51\',\'0\',\'0\',\'0\',\'0\',\'\',\'0\')',
)?>