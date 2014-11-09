<?php return array (
  0 => 'CREATE TABLE `xiaozu_shopfast` (
  `shopid` int(20) NOT NULL,
  `is_orderbefore` tinyint(1) NOT NULL DEFAULT \'0\' COMMENT \'0不支持提前预定，1支持\',
  `delaytime` int(5) NOT NULL DEFAULT \'0\' COMMENT \'营业时间和下单时间补差\',
  `limitcost` int(3) NOT NULL DEFAULT \'0\' COMMENT \'起送价格\',
  `limitstro` varchar(255) DEFAULT NULL COMMENT \'起送说明\',
  `befortime` int(1) NOT NULL DEFAULT \'0\' COMMENT \'起送提前天数\',
  `personcost` int(5) NOT NULL DEFAULT \'0\' COMMENT \'人均消费价格\',
  `sendtype` tinyint(1) NOT NULL DEFAULT \'0\' COMMENT \'0网站配送，1自行配送\',
  `is_hot` int(1) NOT NULL DEFAULT \'0\' COMMENT \'热卖\',
  `is_com` int(1) NOT NULL DEFAULT \'0\' COMMENT \'推荐\',
  `is_new` int(1) NOT NULL COMMENT \'新店\',
  `sendset` text,
  `maketime` int(6) NOT NULL DEFAULT \'0\',
  UNIQUE KEY `shopid` (`shopid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'11\',\'1\',\'1\',\'0\',\'\',\'1\',\'0\',\'0\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:0;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  2 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'12\',\'1\',\'1\',\'0\',\'\',\'1\',\'0\',\'0\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:0;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  3 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'13\',\'1\',\'1\',\'0\',\'\',\'1\',\'0\',\'0\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:0;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  4 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'14\',\'1\',\'1\',\'0\',\'\',\'1\',\'0\',\'1\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:1;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  5 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'15\',\'1\',\'1\',\'0\',\'\',\'365\',\'0\',\'0\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:0;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  6 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'16\',\'1\',\'1\',\'0\',\'\',\'1\',\'0\',\'1\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:1;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  7 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'17\',\'1\',\'1\',\'0\',\'\',\'1\',\'0\',\'1\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:0;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  8 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'18\',\'1\',\'1\',\'0\',\'\',\'1\',\'0\',\'1\',\'1\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:0;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  9 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'19\',\'1\',\'1\',\'0\',\'\',\'1\',\'0\',\'0\',\'1\',\'1\',\'0\',\'a:4:{s:6:\\"pstype\\";i:0;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  10 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'20\',\'1\',\'1\',\'0\',\'\',\'1\',\'0\',\'1\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:0;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  11 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'21\',\'1\',\'1\',\'0\',\'\',\'1\',\'0\',\'1\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:0;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  12 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'29\',\'0\',\'0\',\'0\',\'\',\'0\',\'0\',\'1\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:1;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  13 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'50\',\'0\',\'0\',\'0\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\',\'0\',\'\',\'0\')',
  14 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'25\',\'1\',\'1\',\'0\',\'\',\'1\',\'0\',\'1\',\'0\',\'0\',\'0\',\'\',\'0\')',
  15 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'30\',\'0\',\'0\',\'10\',\'满10元起送\',\'0\',\'0\',\'1\',\'1\',\'1\',\'1\',\'\',\'0\')',
  16 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'27\',\'1\',\'0\',\'0\',\'\',\'30\',\'0\',\'0\',\'0\',\'0\',\'0\',\'\',\'0\')',
  17 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'26\',\'1\',\'0\',\'0\',\'\',\'1\',\'0\',\'1\',\'0\',\'0\',\'0\',\'\',\'0\')',
  18 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'39\',\'0\',\'0\',\'0\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\',\'0\',\'\',\'0\')',
  19 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'32\',\'1\',\'0\',\'0\',\'\',\'2\',\'0\',\'1\',\'0\',\'0\',\'0\',\'\',\'0\')',
  20 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'37\',\'0\',\'0\',\'0\',\'\',\'0\',\'0\',\'1\',\'0\',\'0\',\'0\',\'\',\'0\')',
  21 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'36\',\'1\',\'0\',\'0\',\'\',\'1\',\'9\',\'1\',\'0\',\'0\',\'0\',\'\',\'0\')',
  22 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'28\',\'1\',\'0\',\'0\',\'\',\'2\',\'0\',\'1\',\'0\',\'0\',\'0\',\'\',\'0\')',
  23 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'33\',\'1\',\'0\',\'0\',\'\',\'2\',\'0\',\'0\',\'0\',\'0\',\'0\',\'\',\'0\')',
  24 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'40\',\'1\',\'0\',\'8\',\'\',\'3\',\'10\',\'0\',\'1\',\'1\',\'1\',\'\',\'0\')',
  25 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'41\',\'1\',\'0\',\'15\',\'大哥大\',\'0\',\'8\',\'0\',\'0\',\'0\',\'0\',\'\',\'0\')',
  26 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'9\',\'1\',\'0\',\'10\',\'\',\'0\',\'0\',\'1\',\'0\',\'0\',\'1\',\'a:4:{s:6:\\"pstype\\";i:1;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  27 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'46\',\'0\',\'0\',\'0\',\'\',\'0\',\'0\',\'1\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:3;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  28 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'43\',\'0\',\'0\',\'0\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\',\'0\',\'\',\'0\')',
  29 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'49\',\'0\',\'0\',\'0\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\',\'0\',\'\',\'0\')',
  30 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'48\',\'1\',\'0\',\'10\',\'阿萨德的撒\',\'1\',\'0\',\'1\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:1;s:8:\\"psvalue1\\";i:2;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  31 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'52\',\'1\',\'0\',\'30\',\'\',\'0\',\'0\',\'1\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:0;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
  32 => 'INSERT INTO `xiaozu_shopfast`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`personcost`,`sendtype`,`is_hot`,`is_com`,`is_new`,`sendset`,`maketime`) VALUES(\'53\',\'1\',\'0\',\'0\',\'\',\'1\',\'0\',\'1\',\'0\',\'0\',\'0\',\'a:4:{s:6:\\"pstype\\";i:1;s:8:\\"psvalue1\\";i:0;s:8:\\"psvalue2\\";i:0;s:8:\\"psvalue3\\";i:0;}\',\'0\')',
)?>