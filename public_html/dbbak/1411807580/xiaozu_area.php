<?php return array (
  0 => 'CREATE TABLE `xiaozu_area` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT \'区域名称\',
  `pin` varchar(5) DEFAULT NULL COMMENT \'首字母拼音\',
  `parent_id` int(20) NOT NULL DEFAULT \'0\' COMMENT \'上级区域ID\',
  `orderid` int(20) DEFAULT NULL COMMENT \'排序ID\',
  `imgurl` varchar(255) DEFAULT NULL COMMENT \'一级地址图片地址\',
  `lng` decimal(9,6) NOT NULL DEFAULT \'0.000000\',
  `lat` decimal(9,6) NOT NULL DEFAULT \'0.000000\',
  `show` int(1) DEFAULT \'0\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'77\',\'土桥\',\'tq\',\'74\',\'3\',\'\',\'116.706577\',\'39.867566\',\'1\')',
  2 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'78\',\'华远铭悦\',\'hymy\',\'74\',\'4\',\'\',\'116.703845\',\'39.877996\',\'1\')',
  3 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'79\',\'丰台区\',\'ftq\',\'0\',\'0\',\'/upload/goods/20140920204722631.jpg\',\'116.292435\',\'39.864594\',\'1\')',
  4 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'80\',\'新发地\',\'xfd\',\'79\',\'1\',\'\',\'116.351055\',\'39.820248\',\'1\')',
  5 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'81\',\'马家堡\',\'mjp\',\'79\',\'2\',\'\',\'116.351055\',\'39.820248\',\'1\')',
  6 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'82\',\'西城区\',\'xcq\',\'0\',\'3\',\'/upload/goods/20140921133018755.jpg\',\'0.000000\',\'0.000000\',\'1\')',
  7 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'83\',\'草桥\',\'cq\',\'79\',\'3\',\'\',\'0.000000\',\'0.000000\',\'1\')',
  8 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'84\',\'燕郊开发区\',\'yjkfq\',\'0\',\'1\',\'/upload/goods/20140921143958321.jpg\',\'0.000000\',\'0.000000\',\'0\')',
  9 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'74\',\'通州区\',\'tzq\',\'0\',\'1\',\'/upload/goods/20140920140357418.jpg\',\'116.413527\',\'39.888697\',\'1\')',
  10 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'75\',\'花石匠\',\'hsj\',\'74\',\'1\',\'\',\'116.708238\',\'39.880433\',\'1\')',
  11 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'86\',\'菜户营\',\'chy\',\'79\',\'4\',\'\',\'0.000000\',\'0.000000\',\'1\')',
  12 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'87\',\'丰台科技园区\',\'ftkjy\',\'79\',\'5\',\'\',\'0.000000\',\'0.000000\',\'1\')',
  13 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'72\',\'花石匠\',\'hsj\',\'72\',\'3\',\'/upload/goods/20140920133347567.jpg\',\'0.000000\',\'0.000000\',\'0\')',
  14 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'52\',\'金沙小区\',\'j\',\'48\',\'1\',\'\',\'0.000000\',\'0.000000\',\'0\')',
  15 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'76\',\'家乐福\',\'jlf\',\'74\',\'2\',\'\',\'116.400600\',\'39.903296\',\'1\')',
  16 => 'INSERT INTO `xiaozu_area`(`id`,`name`,`pin`,`parent_id`,`orderid`,`imgurl`,`lng`,`lat`,`show`) VALUES(\'85\',\'风尚国际公寓\',\'fsgjg\',\'84\',\'1\',\'\',\'0.000000\',\'0.000000\',\'1\')',
)?>