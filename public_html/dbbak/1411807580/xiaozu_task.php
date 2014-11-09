<?php return array (
  0 => 'CREATE TABLE `xiaozu_task` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `taskname` varchar(100) NOT NULL,
  `tasktype` int(1) NOT NULL,
  `taskusertype` int(1) NOT NULL,
  `tasklimit` text NOT NULL,
  `start_id` int(20) NOT NULL,
  `end_id` int(20) NOT NULL,
  `content` text NOT NULL,
  `status` int(1) NOT NULL,
  `othercontent` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_task`(`id`,`taskname`,`tasktype`,`taskusertype`,`tasklimit`,`start_id`,`end_id`,`content`,`status`,`othercontent`) VALUES(\'22\',\'xxx\',\'2\',\'2\',\'13540907240\',\'0\',\'0\',\'fdsafdsafdsaxxxxxx\',\'0\',\'群发短信指定对象:13540907240\')',
  2 => 'INSERT INTO `xiaozu_task`(`id`,`taskname`,`tasktype`,`taskusertype`,`tasklimit`,`start_id`,`end_id`,`content`,`status`,`othercontent`) VALUES(\'23\',\'fdsa\',\'2\',\'2\',\'fdsafdsa\',\'0\',\'0\',\'fdsafdsafdsaxxxxxxxxxx\',\'0\',\'群发短信指定对象:fdsafdsa\')',
  3 => 'INSERT INTO `xiaozu_task`(`id`,`taskname`,`tasktype`,`taskusertype`,`tasklimit`,`start_id`,`end_id`,`content`,`status`,`othercontent`) VALUES(\'24\',\'135xxx\',\'2\',\'2\',\'13540907240\',\'0\',\'0\',\'你范德萨发的撒发的时间里卡机范德萨\',\'0\',\'群发短信指定对象:13540907240\')',
  4 => 'INSERT INTO `xiaozu_task`(`id`,`taskname`,`tasktype`,`taskusertype`,`tasklimit`,`start_id`,`end_id`,`content`,`status`,`othercontent`) VALUES(\'25\',\'fdsa\',\'2\',\'2\',\'13540907240\',\'0\',\'0\',\'fdsafdsa[饿了]\',\'0\',\'群发短信指定对象:13540907240\')',
  5 => 'INSERT INTO `xiaozu_task`(`id`,`taskname`,`tasktype`,`taskusertype`,`tasklimit`,`start_id`,`end_id`,`content`,`status`,`othercontent`) VALUES(\'26\',\'fdsa\',\'2\',\'2\',\'13540907240\',\'0\',\'0\',\'fdsafdsafdsa[饿了]\',\'0\',\'群发短信指定对象:13540907240\')',
  6 => 'INSERT INTO `xiaozu_task`(`id`,`taskname`,`tasktype`,`taskusertype`,`tasklimit`,`start_id`,`end_id`,`content`,`status`,`othercontent`) VALUES(\'27\',\'eter\',\'2\',\'1\',\' and usertype  = \\\'0\\\' \',\'0\',\'0\',\'drhfrfgjn<br />\',\'0\',\'群发短信根据条件：普通会员\')',
  7 => 'INSERT INTO `xiaozu_task`(`id`,`taskname`,`tasktype`,`taskusertype`,`tasklimit`,`start_id`,`end_id`,`content`,`status`,`othercontent`) VALUES(\'28\',\'test111\',\'1\',\'2\',\'jhw4048wxm@163.com\',\'0\',\'0\',\'test哈哈哈\',\'2\',\'群发邮件指定对象:jhw4048wxm@163.com\')',
  8 => 'INSERT INTO `xiaozu_task`(`id`,`taskname`,`tasktype`,`taskusertype`,`tasklimit`,`start_id`,`end_id`,`content`,`status`,`othercontent`) VALUES(\'32\',\'下订单\',\'1\',\'2\',\'493639658@qq.com,18611145657@qq.com\',\'0\',\'0\',\'做不出好\',\'2\',\'群发邮件指定对象:493639658@qq.com,18611145657@qq.com\')',
  9 => 'INSERT INTO `xiaozu_task`(`id`,`taskname`,`tasktype`,`taskusertype`,`tasklimit`,`start_id`,`end_id`,`content`,`status`,`othercontent`) VALUES(\'31\',\'六一儿童节快乐\',\'1\',\'1\',\' and usertype  = \\\'0\\\' \',\'31\',\'0\',\'去去去去清城\',\'1\',\'群发邮件根据条件：普通会员\')',
)?>