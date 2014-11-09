<?php return array (
  0 => 'CREATE TABLE `xiaozu_otherlogin` (
  `id` int(5) NOT NULL auto_increment,
  `loginname` varchar(10) NOT NULL,
  `logindesc` varchar(100) NOT NULL,
  `logourl` varchar(255) NOT NULL,
  `addmeta` varchar(255) default NULL COMMENT \'附加meta内容\',
  `temp` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_otherlogin`(`id`,`loginname`,`logindesc`,`logourl`,`addmeta`,`temp`) VALUES(\'1\',\'qq\',\'QQ登录接口\',\'http://m2.waimairen.com/plug/login/qq/images/qqb.png\',\'\',\'{\\"appid\\":\\"101098104\\",\\"appkey\\":\\"ee956fec4ec2c74c90644c8a1ec123f8\\",\\"callback\\":\\"http://m2.waimairen.com/member/otherlogin/logintype/qq\\",\\"storageType\\":\\"file\\",\\"host\\":\\"localhost\\",\\"user\\":\\"root\\",\\"password\\":\\"root\\",\\"database\\":\\"test\\",\\"scope\\":\\"get_user_info\\",\\"errorReport\\":false}\')',
  2 => 'INSERT INTO `xiaozu_otherlogin`(`id`,`loginname`,`logindesc`,`logourl`,`addmeta`,`temp`) VALUES(\'4\',\'sina\',\'新浪登陆接口\',\'http://m2.waimairen.com/plug/login/sina/images/loginbtn_03.png\',\'\',\'{\\"appid\\":\\"333\\",\\"appkey\\":\\"333\\",\\"callback\\":\\"http://m2.waimairen.com/member/otherlogin/logintype/sina\\"}\')',
)?>