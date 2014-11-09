<?php return array (
  0 => 'CREATE TABLE `xiaozu_giftlog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `giftid` int(20) NOT NULL,
  `uid` int(20) NOT NULL,
  `score` int(6) NOT NULL,
  `addtime` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT \'1\',
  `address` varchar(150) DEFAULT NULL,
  `telphone` varchar(15) DEFAULT NULL,
  `contactman` varchar(150) DEFAULT NULL,
  `count` int(2) NOT NULL DEFAULT \'0\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_giftlog`(`id`,`giftid`,`uid`,`score`,`addtime`,`status`,`address`,`telphone`,`contactman`,`count`) VALUES(\'21\',\'4\',\'96\',\'100\',\'1395914701\',\'0\',\'22号楼312室\',\'13333333333\',\'111\',\'1\')',
  2 => 'INSERT INTO `xiaozu_giftlog`(`id`,`giftid`,`uid`,`score`,`addtime`,`status`,`address`,`telphone`,`contactman`,`count`) VALUES(\'22\',\'3\',\'316\',\'100\',\'1401798876\',\'0\',\'fdsafdsafdsa\',\'13540907240\',\'fdsafdsa\',\'1\')',
)?>