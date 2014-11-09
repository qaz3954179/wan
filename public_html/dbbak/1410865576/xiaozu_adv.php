<?php return array (
  0 => 'CREATE TABLE `xiaozu_adv` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT \'广告标题\',
  `advtype` varchar(10) NOT NULL COMMENT \'广告类型code\',
  `img` varchar(255) DEFAULT NULL COMMENT \'图片地址\',
  `linkurl` varchar(255) DEFAULT NULL COMMENT \'超链接\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`) VALUES(\'14\',\'3\',\'market\',\'/upload/goods/20131224155149106.jpg\',\'3\')',
  2 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`) VALUES(\'4\',\'轮播图片2\',\'lunbo\',\'/upload/goods/20140709212120694.jpg\',\'#\')',
  3 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`) VALUES(\'5\',\'4\',\'lunbo\',\'/upload/goods/20140709212145180.jpg\',\'#\')',
  4 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`) VALUES(\'8\',\'中间2\',\'other1\',\'/upload/goods/20140825192531948.png\',\'http://m2.waimairen.com/site/newstype/id/12\')',
  5 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`) VALUES(\'7\',\'热卖链接\',\'other1\',\'/upload/goods/20140709212803896.png\',\'#\')',
  6 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`) VALUES(\'9\',\'中间3\',\'other1\',\'/upload/goods/20140709212819695.png\',\'#\')',
  7 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`) VALUES(\'10\',\'中间4\',\'other1\',\'/upload/goods/20140709212839726.png\',\'http://m2.waimairen.com/news/16\')',
  8 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`) VALUES(\'11\',\'中间5\',\'other1\',\'/upload/goods/20140709212904638.png\',\'http://m2.waimairen.com/news/4\')',
  9 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`) VALUES(\'12\',\'123\',\'xx\',\'/upload/goods/20131211125219870.jpg\',\'.\')',
  10 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`) VALUES(\'15\',\'11\',\'market\',\'/upload/goods/20140520212303392.jpg\',\'#\')',
  11 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`) VALUES(\'16\',\'ce0010\',\'market\',\'/upload/goods/20140520212316550.jpg\',\'#\')',
  12 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`) VALUES(\'18\',\'3\',\'html5lunbo\',\'/upload/goods/20140524153253342.png\',\'#\')',
  13 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`) VALUES(\'22\',\'hss\',\'html5lunbo\',\'/upload/goods/20140524153331790.jpg\',\'#\')',
  14 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`) VALUES(\'23\',\'2\',\'lunbo\',\'/upload/goods/20140709212246866.jpg\',\'http://www.waimairen.com/\')',
)?>