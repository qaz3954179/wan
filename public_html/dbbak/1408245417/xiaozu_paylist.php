<?php return array (
  0 => 'CREATE TABLE `xiaozu_paylist` (
  `id` int(5) NOT NULL auto_increment,
  `loginname` varchar(10) NOT NULL,
  `logindesc` varchar(100) NOT NULL,
  `logourl` varchar(255) NOT NULL,
  `addmeta` varchar(255) default NULL COMMENT \'附加meta内容\',
  `temp` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_paylist`(`id`,`loginname`,`logindesc`,`logourl`,`addmeta`,`temp`) VALUES(\'8\',\'alipay\',\'支付宝\',\'http://m2.waimairen.com/plug/pay/alipay/images/alipay.gif\',\'\',\'{\\"partner\\":\\"2088901767028754\\",\\"key\\":\\"qq4hcijgedgp1jh2eui9vim6gmjan8cg\\",\\"seller_email\\":\\"375952873@qq.com\\"}\')',
  2 => 'INSERT INTO `xiaozu_paylist`(`id`,`loginname`,`logindesc`,`logourl`,`addmeta`,`temp`) VALUES(\'9\',\'paypal\',\'paypal\',\'http://m2.waimairen.com/plug/pay/paypal/images/btn_buynowCC_LG.gif\',\'\',\'{\\"business\\":\\"187165099-facilitator@qq.com\\",\\"currency_code\\":\\"HKD\\"}\')',
)?>