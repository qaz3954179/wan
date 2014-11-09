<?php return array (
  0 => 'CREATE TABLE `xiaozu_news` (
  `id` int(20) NOT NULL auto_increment,
  `content` text NOT NULL,
  `addtime` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `typeid` int(2) NOT NULL,
  `orderid` int(5) NOT NULL default \'1000\' COMMENT \'1000\',
  `seo_key` varchar(255) default NULL,
  `seo_content` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_news`(`id`,`content`,`addtime`,`title`,`typeid`,`orderid`,`seo_key`,`seo_content`) VALUES(\'1\',\'送货方式\',\'-28800\',\'送货方式\',\'4\',\'0\',\'\',\'\')',
  2 => 'INSERT INTO `xiaozu_news`(`id`,`content`,`addtime`,`title`,`typeid`,`orderid`,`seo_key`,`seo_content`) VALUES(\'2\',\'<em>主营：</em> 中式炒菜，中式快餐，日韩料理，面食点心， <br />
<em class=\\"gray3 \\">送餐方式：</em> 外送<br />
<em class=\\"gray3 \\">地址：</em>郑州市二七区大学路16号<br />
<em class=\\"gray3 \\">配送范围:</em> 郑州大学，财经学院，交通职业学院，服装市场，国贸360广场，兴达通苑，联盛大厦，永和国际，中医院，\',\'1385049600\',\'联系我们\',\'2\',\'0\',\'\',\'\')',
  3 => 'INSERT INTO `xiaozu_news`(`id`,`content`,`addtime`,`title`,`typeid`,`orderid`,`seo_key`,`seo_content`) VALUES(\'3\',\'关于我们\',\'-28800\',\'关于我们\',\'2\',\'0\',\'\',\'\')',
  4 => 'INSERT INTO `xiaozu_news`(`id`,`content`,`addtime`,`title`,`typeid`,`orderid`,`seo_key`,`seo_content`) VALUES(\'4\',\'反对撒\',\'1385049600\',\'订餐方法\',\'3\',\'0\',\'\',\'\')',
  5 => 'INSERT INTO `xiaozu_news`(`id`,`content`,`addtime`,`title`,`typeid`,`orderid`,`seo_key`,`seo_content`) VALUES(\'14\',\'反对撒&nbsp;\',\'1377532800\',\'添加内容\',\'3\',\'0\',\'\',\'\')',
  6 => 'INSERT INTO `xiaozu_news`(`id`,`content`,`addtime`,`title`,`typeid`,`orderid`,`seo_key`,`seo_content`) VALUES(\'15\',\'11\',\'1377532800\',\'添加内容\',\'3\',\'0\',\'\',\'\')',
  7 => 'INSERT INTO `xiaozu_news`(`id`,`content`,`addtime`,`title`,`typeid`,`orderid`,`seo_key`,`seo_content`) VALUES(\'16\',\'1\',\'1384358400\',\'添加内容\',\'2\',\'0\',\'\',\'\')',
  8 => 'INSERT INTO `xiaozu_news`(`id`,`content`,`addtime`,`title`,`typeid`,`orderid`,`seo_key`,`seo_content`) VALUES(\'13\',\'11111\',\'1377446400\',\'常见方式\',\'6\',\'0\',\'\',\'\')',
  9 => 'INSERT INTO `xiaozu_news`(`id`,`content`,`addtime`,`title`,`typeid`,`orderid`,`seo_key`,`seo_content`) VALUES(\'17\',\'<p>范德萨&lt;{$title}&gt;&lt;{$sitename}&gt;</p>
<p>&lt;{$ceshi}&gt;</p>\',\'1384444800\',\'添加内容\',\'2\',\'0\',\'\',\'\')',
  10 => 'INSERT INTO `xiaozu_news`(`id`,`content`,`addtime`,`title`,`typeid`,`orderid`,`seo_key`,`seo_content`) VALUES(\'35\',\'情人节琅东所有餐馆八折优惠\',\'1392739200\',\'情人节八折优惠\',\'6\',\'1\',\'\',\'\')',
  11 => 'INSERT INTO `xiaozu_news`(`id`,`content`,`addtime`,`title`,`typeid`,`orderid`,`seo_key`,`seo_content`) VALUES(\'36\',\'阿斯顿撒大声地\',\'1401033600\',\'问题1\',\'12\',\'0\',\'\',\'\')',
  12 => 'INSERT INTO `xiaozu_news`(`id`,`content`,`addtime`,`title`,`typeid`,`orderid`,`seo_key`,`seo_content`) VALUES(\'37\',\'萨达是而东风完成时非常稳\',\'1401033600\',\'新闻2\',\'12\',\'0\',\'\',\'\')',
)?>