<?php return array (
  0 => 'CREATE TABLE `xiaozu_shopmarket` (
  `shopid` int(20) NOT NULL,
  `is_orderbefore` tinyint(1) NOT NULL default \'0\' COMMENT \'0不支持提前预定，1支持\',
  `delaytime` int(5) NOT NULL default \'0\' COMMENT \'营业时间和下单时间补差\',
  `limitcost` int(3) NOT NULL default \'0\' COMMENT \'起送价格\',
  `limitstro` varchar(255) default NULL COMMENT \'起送说明\',
  `befortime` int(1) NOT NULL default \'0\' COMMENT \'起送提前天数\',
  `sendtype` tinyint(1) NOT NULL default \'0\' COMMENT \'0网站配送，1自行配送\',
  `is_hot` int(1) NOT NULL default \'0\' COMMENT \'热卖\',
  `is_com` int(1) NOT NULL default \'0\' COMMENT \'推荐\',
  `is_new` int(1) NOT NULL COMMENT \'新店\',
  `sendset` text COMMENT \'配送设置序列化数组\',
  `maketime` int(20) NOT NULL,
  UNIQUE KEY `shopid` (`shopid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_shopmarket`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'44\',\'0\',\'0\',\'3\',\'3\',\'0\',\'1\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:1;s:8:\\"psvalue1\\";i:5;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
)?>