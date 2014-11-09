<?php return array (
  0 => 'CREATE TABLE `xiaozu_wxback` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `msgtype` int(1) NOT NULL DEFAULT \'1\',
  `values` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_wxback`(`id`,`code`,`msgtype`,`values`) VALUES(\'3\',\'a\',\'3\',\'a:1:{i:0;a:4:{s:6:\\"biaoti\\";s:23:\\"4月1号愚人节快乐\\";s:7:\\"miaoshu\\";s:327:\\"       本服务协议双方分别为深圳市网生活信息技术有限公司旗下网站“外卖人”（以下简称“外卖人”）与“外卖人”网站用户，本服务协议具有合同效力。用户必须为具备完全民事行为能力的自然人，或者是具有合法经营资格的实体组织。
       \\";s:6:\\"tupian\\";s:58:\\"http://m2.waimairen.com/upload/goods/20140328195812444.jpg\\";s:7:\\"lianjie\\";s:63:\\"http://m2.waimairen.com/index.php?controller=html5&action=index\\";}}\')',
  2 => 'INSERT INTO `xiaozu_wxback`(`id`,`code`,`msgtype`,`values`) VALUES(\'4\',\'x\',\'1\',\'a:2:{s:8:\\"lj_title\\";s:12:\\"我要下单\\";s:7:\\"lj_link\\";s:23:\\"http://m2.waimairen.com\\";}\')',
  3 => 'INSERT INTO `xiaozu_wxback`(`id`,`code`,`msgtype`,`values`) VALUES(\'5\',\'3\',\'2\',\'我想有个更长的名字测试你好啊啊\')',
  4 => 'INSERT INTO `xiaozu_wxback`(`id`,`code`,`msgtype`,`values`) VALUES(\'6\',\'subscribe\',\'2\',\'感谢您关注外卖人官方微信
菜单装口袋  店铺随身带
快速订外卖  方便有实在
您可以点击在线订餐选择您所在的地区订餐
也可以查看附近店铺 请您发送您的地理位置
点击左下角的小键盘
点击+
点击位置并发送
1绑定帐号回复:帐号##密码  
2查看最近订单回复:c
3.查看积分回复:j\')',
)?>