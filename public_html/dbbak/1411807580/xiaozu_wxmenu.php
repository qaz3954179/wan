<?php return array (
  0 => 'CREATE TABLE `xiaozu_wxmenu` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL COMMENT \'view表示连接，click事件\',
  `name` varchar(255) NOT NULL COMMENT \'an钮事件名称\',
  `values` text COMMENT \'当type为view时跳转连接，当click为则为内容\',
  `parent_id` int(20) NOT NULL DEFAULT \'0\' COMMENT \'0一级菜单\',
  `sort` int(3) NOT NULL,
  `msgtype` int(1) NOT NULL DEFAULT \'0\' COMMENT \'0:连接1文本2图文\',
  `code` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_wxmenu`(`id`,`type`,`name`,`values`,`parent_id`,`sort`,`msgtype`,`code`) VALUES(\'12\',\'view\',\'在线下单\',\'a:2:{s:7:\\"lj_link\\";s:24:\\"http://m2.waimairen.com/\\";s:8:\\"lj_title\\";s:18:\\"点击进入下单\\";}\',\'0\',\'1\',\'0\',\'cd\')',
  2 => 'INSERT INTO `xiaozu_wxmenu`(`id`,`type`,`name`,`values`,`parent_id`,`sort`,`msgtype`,`code`) VALUES(\'13\',\'click\',\'最新公告\',\'a:2:{i:0;a:4:{s:6:\\"biaoti\\";s:33:\\"欢迎使用外卖人微信订餐\\";s:7:\\"miaoshu\\";s:100:\\"  可以后台自定义菜单，自定义回复，下单成功后自动推送店铺和买家微信  \\";s:6:\\"tupian\\";s:58:\\"http://m2.waimairen.com/upload/goods/20140328195812444.jpg\\";s:7:\\"lianjie\\";s:40:\\"http://m2.waimairen.com/html5/index.html\\";}i:1;a:4:{s:6:\\"biaoti\\";s:6:\\"添加\\";s:7:\\"miaoshu\\";s:4:\\"fdsa\\";s:6:\\"tupian\\";s:58:\\"http://m2.waimairen.com/upload/goods/20140528183706653.jpg\\";s:7:\\"lianjie\\";s:1:\\"#\\";}}\',\'14\',\'0\',\'2\',\'g\')',
  3 => 'INSERT INTO `xiaozu_wxmenu`(`id`,`type`,`name`,`values`,`parent_id`,`sort`,`msgtype`,`code`) VALUES(\'14\',\'view\',\'网站公告\',\'\',\'0\',\'2\',\'0\',\'\')',
  4 => 'INSERT INTO `xiaozu_wxmenu`(`id`,`type`,`name`,`values`,`parent_id`,`sort`,`msgtype`,`code`) VALUES(\'15\',\'click\',\'上期公告\',\'感谢您关注外卖人官方微信
菜单装口袋 店铺随身带
快速订外卖 方便有实在
您可以点击在线订餐选择您所在的地区订餐
也可以查看附近店铺 请您发送您的地理位置
点击左下角的小键盘
点击+
点击位置并发送
1绑定帐号回复:帐号##密码  
2查看最近订单回复:c
3.查看积分回复:j\',\'14\',\'2\',\'1\',\'33\')',
  5 => 'INSERT INTO `xiaozu_wxmenu`(`id`,`type`,`name`,`values`,`parent_id`,`sort`,`msgtype`,`code`) VALUES(\'16\',\'view\',\'帐户信息\',\'\',\'0\',\'3\',\'0\',\'acount\')',
  6 => 'INSERT INTO `xiaozu_wxmenu`(`id`,`type`,`name`,`values`,`parent_id`,`sort`,`msgtype`,`code`) VALUES(\'17\',\'click\',\'我的积分\',\'\',\'16\',\'3\',\'1\',\'j\')',
  7 => 'INSERT INTO `xiaozu_wxmenu`(`id`,`type`,`name`,`values`,`parent_id`,`sort`,`msgtype`,`code`) VALUES(\'18\',\'view\',\'问题反馈\',\'a:2:{s:7:\\"lj_link\\";s:38:\\"http://m2.waimairen.com/html5/ask.html\\";s:8:\\"lj_title\\";s:24:\\"点击进入提交问题\\";}\',\'16\',\'2\',\'0\',\'ask\')',
  8 => 'INSERT INTO `xiaozu_wxmenu`(`id`,`type`,`name`,`values`,`parent_id`,`sort`,`msgtype`,`code`) VALUES(\'19\',\'click\',\'绑订帐号\',\'绑定帐号流程请回复帐号##密码，例如：帐号\\"ak47\\",密码\\"1234\\",直接回复ak47##1234\',\'16\',\'1\',\'1\',\'bang\')',
  9 => 'INSERT INTO `xiaozu_wxmenu`(`id`,`type`,`name`,`values`,`parent_id`,`sort`,`msgtype`,`code`) VALUES(\'21\',\'view\',\'微社区\',\'a:2:{s:7:\\"lj_link\\";s:30:\\"http://wx.wsq.qq.com/211683187\\";s:8:\\"lj_title\\";s:15:\\"进入微社区\\";}\',\'16\',\'0\',\'0\',\'w\')',
  10 => 'INSERT INTO `xiaozu_wxmenu`(`id`,`type`,`name`,`values`,`parent_id`,`sort`,`msgtype`,`code`) VALUES(\'22\',\'view\',\'我的订单\',\'\',\'16\',\'4\',\'0\',\'c\')',
)?>