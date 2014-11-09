<?php return array (
  0 => 'CREATE TABLE `xiaozu_gift` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `market_cost` decimal(5,2) NOT NULL,
  `score` int(7) NOT NULL DEFAULT \'0\',
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `typeid` int(10) NOT NULL DEFAULT \'0\',
  `sell_count` int(5) NOT NULL DEFAULT \'0\' COMMENT \'销售数量\',
  `stock` int(6) NOT NULL DEFAULT \'0\' COMMENT \'库存\',
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_gift`(`id`,`market_cost`,`score`,`title`,`content`,`typeid`,`sell_count`,`stock`,`img`) VALUES(\'3\',\'120.00\',\'100\',\'阿拉德毛绒公仔\',\'321\',\'3\',\'4\',\'102\',\'/upload/goods/20140322003855537.jpg\')',
  2 => 'INSERT INTO `xiaozu_gift`(`id`,`market_cost`,`score`,`title`,`content`,`typeid`,`sell_count`,`stock`,`img`) VALUES(\'4\',\'20.00\',\'100\',\'添加图片礼品\',\'反对撒反对撒\',\'3\',\'4\',\'1\',\'/upload/goods/20130905012719312.jpg\')',
  3 => 'INSERT INTO `xiaozu_gift`(`id`,`market_cost`,`score`,`title`,`content`,`typeid`,`sell_count`,`stock`,`img`) VALUES(\'8\',\'999.99\',\'2000\',\'CF决战手表\',\'<span style=\\"color:#f4363d;font-family:微软雅黑, 宋体;font-size:15px;\\">使命召唤，分秒必争！决战时刻，兄弟们战起来！野性/疯狂/勇往直前!你犀利的眼神在夜光表盘中呈现，双机芯是你的智慧，强大锂电池引燃充满爆发力的身躯，天生的运动能手，两地时间/秒表计时/定时闹钟手到擒来，德国表带下隐藏的是你那颗不甘平静的心。专注爆头，决战巅峰！</span>\',\'3\',\'10\',\'200\',\'/upload/goods/20140322003326426.jpg\')',
  4 => 'INSERT INTO `xiaozu_gift`(`id`,`market_cost`,`score`,`title`,`content`,`typeid`,`sell_count`,`stock`,`img`) VALUES(\'9\',\'80.00\',\'1000\',\'专业游戏鼠标\',\'<span style=\\"color:#f4363d;font-family:微软雅黑, 宋体;font-size:15px;\\">强势来袭,鼠标史上的超越，百元以内，唯一可开关发光灯的鼠标，超高性价比，拉风熔岩裂纹呼吸灯，6种颜色呼吸变换，约每5秒变换一次，并有鼠标垫送，机会只一次哦，赶紧抢！</span>\',\'3\',\'50\',\'200\',\'/upload/goods/20140322003558242.gif\')',
)?>