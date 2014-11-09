<?php return array (
  0 => 'CREATE TABLE `xiaozu_address` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `otherphone` varchar(15) DEFAULT NULL,
  `contactname` varchar(50) DEFAULT NULL,
  `default` int(1) NOT NULL DEFAULT \'1\',
  `areaid1` int(20) NOT NULL DEFAULT \'0\' COMMENT \'区域1ID\',
  `areaid2` int(20) NOT NULL DEFAULT \'0\' COMMENT \'区域2ID\',
  `areaid3` int(20) NOT NULL DEFAULT \'0\' COMMENT \'区域3ID\',
  `sex` smallint(1) NOT NULL DEFAULT \'0\' COMMENT \'0女性 1男性\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'16\',\'2\',\'赵大小\',\'4楼3号4\',\'1354048820\',\'\',\'dsa\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  2 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'15\',\'2\',\'赵大小\',\'地址2fdsa333\',\'13540907240\',\'\',\'着大也\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  3 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'11\',\'4\',\'jjk119\',\'你好反对撒发的\',\'1354456655\',\'\',\'着了\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  4 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'10\',\'4\',\'jjk119\',\'反对撒反对撒\',\'13540907240\',\'\',\'xxxabc\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  5 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'17\',\'8\',\'px2010\',\'郑州时尚广场1125室\',\'18538129330\',\'15225225\',\'李培欣\',\'1\',\'0\',\'0\',\'0\',\'0\')',
  6 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'9\',\'4\',\'jjk119\',\'fdsafdsa\',\'13540907240\',\'\',\'你好\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  7 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'12\',\'4\',\'jjk119\',\'测试地址啊\',\'13540907240\',\'\',\'要求\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  8 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'13\',\'4\',\'jjk119\',\'测试地址2\',\'13540907240\',\'\',\'你大爷\',\'1\',\'0\',\'0\',\'0\',\'0\')',
  9 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'18\',\'2\',\'赵大小\',\'罗湖区光合大厦3楼4号\',\'13540907240\',\'13540907240\',\'范德萨\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  10 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'19\',\'2\',\'赵大小\',\'罗湖区光合大厦信息4\',\'13540907240\',\'13540907240\',\'范德萨\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  11 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'20\',\'2\',\'赵大小\',\'南山区da河区sdfsa\',\'13540907240\',\'13540907240\',\'xx\',\'1\',\'0\',\'0\',\'0\',\'0\')',
  12 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'21\',\'21\',\'appregi\',\'金水区光合大厦时尚party送达33\',\'13540907240\',\'\',\'你好\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  13 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'22\',\'21\',\'appregi\',\'金水区光合大厦时尚party3楼4好\',\'13540907240\',\'\',\'大爷\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  14 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'23\',\'21\',\'appregi\',\'fdsafjdlskajfdscccc\',\'13240907240\',\'\',\'\',\'1\',\'0\',\'0\',\'0\',\'0\')',
  15 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'24\',\'26\',\'laiyi\',\'荣和山水美地\',\'1867773798\',\'\',\'\',\'1\',\'0\',\'0\',\'0\',\'0\')',
  16 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'25\',\'27\',\'123456\',\'擦擦擦\',\'13625895006\',\'\',\'\',\'1\',\'0\',\'0\',\'0\',\'0\')',
  17 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'26\',\'31\',\'yonon\',\'娄底职院国贸360广场202\',\'12345675678\',\'\',\'阿毛\',\'1\',\'0\',\'0\',\'0\',\'0\')',
  18 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'27\',\'34\',\'880880\',\'金水区汉飞金沙国际\',\'18538129338\',\'\',\'\',\'1\',\'0\',\'0\',\'0\',\'0\')',
  19 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'28\',\'34\',\'880880\',\'咔咔咔咔咔咔墨迹\',\'15858855885\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  20 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'29\',\'34\',\'880880\',\'咔咔咔咔咔咔墨迹\',\'15858855885\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  21 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'30\',\'36\',\'louyang13\',\'娄底职院七栋往前飞我\',\'15573832268\',\'\',\'问过个人\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  22 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'31\',\'39\',\'614022669\',\'河南新乡红旗区\',\'12345678901\',\'\',\'\',\'1\',\'0\',\'0\',\'0\',\'0\')',
  23 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'32\',\'43\',\'jhw4048\',\'金水区汉飞金沙国际12号楼\',\'18888888888\',\'\',\'店小二\',\'1\',\'0\',\'0\',\'0\',\'0\')',
  24 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'33\',\'59\',\'2355512990\',\'金水区汉飞金沙国际国贸360广场\',\'13877776666\',\'\',\'uu\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  25 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'34\',\'29\',\'shangjia001\',\'22号楼312室\',\'18538129330\',\'\',\'李培欣\',\'0\',\'1\',\'29\',\'0\',\'0\')',
  26 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'35\',\'73\',\'testwaimairen\',\'郑州大学宿舍区22号楼312室\',\'13888888888\',\'\',\'外卖人\',\'1\',\'3\',\'9\',\'0\',\'0\')',
  27 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'36\',\'74\',\'iliya\',\'荣和山水美地\',\'18677816813\',\'\',\'赖毅\',\'1\',\'1\',\'33\',\'0\',\'0\')',
  28 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'37\',\'80\',\'459783705\',\'3412\',\'18215617030\',\'\',\'rqw\',\'1\',\'1\',\'32\',\'0\',\'0\')',
  29 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'39\',\'92\',\'fengdengjin\',\'sfsdfe3wfed\',\'1351481214\',\'\',\'yj\',\'1\',\'1\',\'31\',\'0\',\'0\')',
  30 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'40\',\'29\',\'shangjia001\',\'112室\',\'18535858558\',\'\',\'李俊良\',\'0\',\'1\',\'29\',\'23\',\'0\')',
  31 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'41\',\'96\',\'112233\',\'22号楼312室\',\'13333333333\',\'\',\'111\',\'1\',\'1\',\'29\',\'0\',\'0\')',
  32 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'42\',\'95\',\'jht888\',\'嗖嗖路18号1东3单元3楼16号\',\'13438135038\',\'\',\'张先生\',\'1\',\'2\',\'4\',\'0\',\'0\')',
  33 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'80\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  34 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'79\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  35 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'78\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  36 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'74\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  37 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'75\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  38 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'76\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  39 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'73\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  40 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'72\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  41 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'77\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  42 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'70\',\'90\',\'qwert\',\'qwery\',\'123456\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  43 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'81\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  44 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'82\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  45 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'83\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  46 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'84\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  47 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'85\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  48 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'86\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  49 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'87\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  50 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'88\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  51 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'89\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  52 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'90\',\'90\',\'qwert\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\')',
  53 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'91\',\'90\',\'qwert\',\'qwertyu\',\'13873074739\',\'\',\'\',\'1\',\'0\',\'0\',\'0\',\'0\')',
  54 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'92\',\'29\',\'shangjia001\',\'汉飞金沙国际\',\'18538129360\',\'\',\'\',\'1\',\'0\',\'0\',\'0\',\'0\')',
  55 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'93\',\'176\',\'jxp10\',\'test\',\'18801732927\',\'\',\'test\',\'1\',\'3\',\'53\',\'0\',\'0\')',
  56 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'94\',\'192\',\'anzen\',\'1号1室\',\'15980010207\',\'\',\'anzen\',\'1\',\'3\',\'53\',\'0\',\'0\')',
  57 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'95\',\'184\',\'wang1314\',\'wadad\',\'13589086101\',\'\',\'dawda\',\'1\',\'55\',\'1\',\'32\',\'0\')',
  58 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'96\',\'211\',\'124515151\',\'f ffa f a fa\',\'12345678912\',\'\',\'214141\',\'1\',\'2\',\'4\',\'22\',\'0\')',
  59 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'97\',\'211\',\'124515151\',\'51515515151\',\'12345678912\',\'\',\'12415\',\'0\',\'2\',\'37\',\'0\',\'0\')',
  60 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'98\',\'247\',\'shangod\',\'嘉定路\',\'13917794442\',\'\',\'呢饿\',\'1\',\'2\',\'4\',\'22\',\'0\')',
  61 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'99\',\'256\',\'oVHwxtzQ37apK-loX6hyLQJJ8k38\',\'花了监控\',\'13469881155\',\'\',\'刘德华\',\'1\',\'2\',\'4\',\'22\',\'0\')',
  62 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'101\',\'358\',\'gouwucom\',\'湖南省就呀你R\',\'13469089275\',\'\',\'刘德华\',\'1\',\'2\',\'4\',\'0\',\'0\')',
  63 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'102\',\'10\',\'test1234\',\'大学专区河南财经学院某某学校2fdsa\',\'13540907240\',\'\',\'fdsa\',\'1\',\'0\',\'0\',\'0\',\'0\')',
  64 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'103\',\'390\',\'huage\',\'三河市燕郊镇镇政府\',\'13000008888\',\'\',\'曹\',\'1\',\'0\',\'0\',\'0\',\'0\')',
  65 => 'INSERT INTO `xiaozu_address`(`id`,`userid`,`username`,`address`,`phone`,`otherphone`,`contactname`,`default`,`areaid1`,`areaid2`,`areaid3`,`sex`) VALUES(\'104\',\'386\',\'wj198914\',\'马家堡\',\'13311356544\',\'\',\'a940wda\',\'1\',\'0\',\'0\',\'0\',\'0\')',
)?>