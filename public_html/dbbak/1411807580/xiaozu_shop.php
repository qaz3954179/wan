<?php return array (
  0 => 'CREATE TABLE `xiaozu_shop` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL COMMENT \'用户ID\',
  `shortname` varchar(10) DEFAULT NULL COMMENT \'店铺短地址\',
  `shopname` varchar(150) NOT NULL COMMENT \'店铺名称\',
  `shoplogo` varchar(150) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL COMMENT \'联系电话\',
  `address` varchar(150) DEFAULT NULL COMMENT \'联系地址\',
  `point` int(10) NOT NULL DEFAULT \'5\' COMMENT \'评分\',
  `cx_info` text COMMENT \'促销信息\',
  `intr_info` text COMMENT \'介绍信息\',
  `notice_info` text COMMENT \'公告信息\',
  `starttime` varchar(100) DEFAULT NULL COMMENT \'营业时间\',
  `is_open` int(1) NOT NULL DEFAULT \'0\' COMMENT \'是否营业\',
  `is_pass` int(1) NOT NULL DEFAULT \'0\' COMMENT \'是否通过审核\',
  `is_recom` int(1) NOT NULL DEFAULT \'0\' COMMENT \'是否是推荐店铺\',
  `maphone` varchar(12) DEFAULT NULL,
  `addtime` int(12) DEFAULT NULL,
  `pointcount` int(5) NOT NULL DEFAULT \'0\',
  `yjin` int(3) NOT NULL DEFAULT \'0\' COMMENT \'佣金比例当为0时调用网站设置\',
  `lat` decimal(9,6) NOT NULL DEFAULT \'0.000000\' COMMENT \'地图左坐标\',
  `lng` decimal(9,6) NOT NULL DEFAULT \'0.000000\' COMMENT \'地图右坐标\',
  `shopbacklogo` varchar(255) DEFAULT NULL COMMENT \'商家默认背景图片\',
  `sort` int(20) NOT NULL DEFAULT \'999\' COMMENT \'排序\',
  `email` varchar(50) DEFAULT NULL,
  `areaid1` int(20) NOT NULL DEFAULT \'0\',
  `areaid2` int(20) NOT NULL DEFAULT \'0\',
  `areaid3` int(20) NOT NULL DEFAULT \'0\',
  `otherlink` varchar(255) DEFAULT NULL COMMENT \'其他链接地址\',
  `endtime` int(11) NOT NULL DEFAULT \'0\',
  `IMEI` varchar(255) DEFAULT NULL,
  `shoptype` int(2) NOT NULL DEFAULT \'0\',
  `noticetype` varchar(100) DEFAULT NULL,
  `machine_code` varchar(255) DEFAULT NULL,
  `mKey` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'9\',\'13\',\'wsf\',\'张亮麻辣烫\',\'/upload/user/20140921115558718.jpg\',\'13552543051\',\'丰台区新发地市场\',\'3\',\'\',\'<p><b style=\\"color:#eb6100;line-height:23px;\\"><span style=\\"font-size:18px;\\">1、首次订购用户，万丰网站客服会跟您进行电话确认，请确保证您的电话畅通，以便送货员能及时联系上您。2、请提前1天预定。</span></b></p>\',\'<b style=\\"color:#eb6100;line-height:23px;\\"><span style=\\"font-size:18px;\\">1、首次订购用户，万丰网站客服会跟您进行电话确认，请确保证您的电话畅通，以便送货员能及时联系上您。2、请提前1天预定。</span></b>\',\'8:00-12:30|13:00-23:59\',\'1\',\'1\',\'1\',\'\',\'0\',\'29\',\'0\',\'39.831400\',\'116.350724\',\'\',\'0\',\'wanfengshucai@163.com\',\'3\',\'7\',\'0\',\'\',\'1476779839\',\'\',\'0\',\'1,2\',\'\',\'\')',
  2 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'58\',\'391\',\'synn\',\'三元牛奶\',\'/upload/user/20140926224545420.jpg\',\'13366452695\',\'大兴区瀛海镇瀛昌路8号\',\'5\',\'\',\'<p>三元牛奶，品质保证</p>\',\'<p>三元牛奶，品质保证</p>\',\'8:00-12:00|13:00-22:00\',\'1\',\'1\',\'1\',\'\',\'\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'1162747215@qq.com\',\'0\',\'0\',\'0\',\'\',\'1443278171\',\'\',\'0\',\'1,2,3\',\'\',\'\')',
  3 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'11\',\'29\',\'zaizai\',\'仔仔超市\',\'/upload/user/20140921120317636.jpg\',\'18538129330\',\'新发地北门\',\'0\',\'\',\'<b style=\\"color:#eb6100;line-height:23px;\\"><span style=\\"font-size:18px;\\">1、首次订购用户，万丰网站客服会跟您进行电话确认，请确保证您的电话畅通，以便送货员能及时联系上您。2、请提前1天预定。</span></b>\',\'<span style=\\"color:#eb6100;line-height:23px;font-family:&quot;Helvetica Neue&quot;, Arial, &quot;Microsoft Yahei&quot;, sans-serif;font-size:14px;\\"><b><span style=\\"font-size:18px;\\">1、首次订购用户，万丰网站客服会跟您进行电话确认，请确保证您的电话畅通，以便送货员能及时联系上您。2、请提前1天预定。</span></b></span>\',\'05:00-23:59\',\'1\',\'1\',\'0\',\'\',\'0\',\'0\',\'0\',\'39.829571\',\'116.349774\',\'\',\'1\',\'565656@qq.com\',\'2\',\'4\',\'0\',\'\',\'1430204044\',\'\',\'0\',\'\',\'\',\'\')',
  4 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'12\',\'30\',\'yinxin\',\'怡心调料\',\'/upload/user/20140921102051437.jpg\',\'18538129330\',\'北京市通州区土桥华远铭悦小区\',\'0\',\'\',\'\',\'<span style=\\"color:#eb6100;font-family:\\\'Helvetica Neue\\\', Arial, \\\'Microsoft Yahei\\\', sans-serif;font-size:14px;line-height:23px;\\"><b><span style=\\"font-size:18px;\\">1、首次订购用户，万丰网站客服会跟您进行电话确认，请确保证您的电话畅通，以便送货员能及时联系上您。2、为了及时送达，大家请提前1天预定。</span></b></span>\',\'05:00-23:59\',\'1\',\'1\',\'0\',\'\',\'0\',\'0\',\'6\',\'39.858849\',\'116.380053\',\'\',\'2\',\'65656@qq.com\',\'2\',\'4\',\'0\',\'\',\'2147483647\',\'0\',\'0\',\'1,2,3\',\'\',\'\')',
  5 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'13\',\'32\',\'xiaoqi\',\'小柒生活超市\',\'/upload/user/20140921121544797.jpg\',\'18538129330\',\'新发地西大门\',\'0\',\'\',\'\',\'&lt;span style=&quot;color:#eb6100;font-family:&#039;Helvetica Neue&#039;, Arial, &#039;Microsoft Yahei&#039;, sans-serif;font-size:14px;line-height:23px;&quot;&gt;1、本店推荐您在“外卖人”订餐——饭点较忙，电话常占线，本店优先配送网上订单。2、首次订餐用户，饿了么客服会跟您进行电话确认，请确保证您的电话畅通，以便送餐员能及时联系上您。3、外卖制作+配送都需要消耗时间，为了能及时用餐，希望大家提前半小时以上预定，避开高峰拥堵。饿了么全国客服电话：4000181567&lt;/span&gt;\',\'08:00-11:00|11:00-23:59\',\'1\',\'1\',\'0\',\'\',\'0\',\'0\',\'9\',\'39.815890\',\'116.344809\',\'\',\'3\',\'565665@qq.com\',\'2\',\'4\',\'0\',\'\',\'1442808644\',\'\',\'0\',\'\',\'\',\'\')',
  6 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'14\',\'33\',\'wzxkc\',\'味珍香快餐\',\'/upload/user/20140921122707179.jpg\',\'185252522525\',\'新发地桥北\',\'0\',\'\',\'味珍香快餐欢迎您！\',\'味珍香快餐欢迎您！\',\'08:00-09:30|09:30-23:59\',\'1\',\'1\',\'0\',\'\',\'0\',\'0\',\'0\',\'39.814567\',\'116.351906\',\'\',\'4\',\'567554@qq.com\',\'2\',\'4\',\'0\',\'\',\'1432284464\',\'0\',\'0\',\'1,3\',\'\',\'\')',
  7 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'15\',\'35\',\'yqtzs\',\'三元牛奶\',\'/upload/user/20140926230518997.jpg\',\'18538129330\',\'新发地西大门\',\'5\',\'we90违法额骨灰盒分i恶搞和强化岗位供&amp;nbsp;&lt;img src=&quot;/upload/shop/20131215011931339.jpg&quot; title=&quot;阿娥否认我 &quot; alt=&quot;阿娥否认我 &quot; /&gt;\',\'泉涌桶装水\',\'<p align=\\"center\\"><span style=\\"color:#a21935;font-size:10.5pt;\\"><img alt=\\"\\" src=\\"/upload/goods/20140926233226479.jpg\\" /></span></p>
<p align=\\"center\\"><span style=\\"color:#a21935;font-size:10.5pt;\\"><span style=\\"color:#e53333;\\">温 馨 提 示</span></span></p>
<p><span style=\\"color:#a21935;font-size:10.5pt;\\"><span style=\\"color:#e53333;\\">1：我们每月25日至月底收取当月的整月奶费（小红帽用户除外）。您每次交费时应向送奶员索要《三元食品股份有限公司送奶到户专用收据》，并至少保留一个月，以作为日后处理相关事宜的重要凭证。</span></span></p>
<p><span style=\\"color:#a21935;font-size:10.5pt;\\"><span style=\\"color:#e53333;\\">2：您外出旅行或者需要停奶时，最好提前两天通知奶站（拨打奶箱.收据上的奶站电话或者在奶箱里留张纸条），让送奶员有足够的时间调整订货和送奶。</span></span></p>
<p><span style=\\"color:#a21935;font-size:10.5pt;\\"><span style=\\"color:#e53333;\\">3：你想更换品种时，最好从下月1号开始变更，避免结账时产生误差。</span></span></p>
<p><span style=\\"color:#a21935;font-size:10.5pt;\\"><span style=\\"color:#e53333;\\">4：您确认牛奶送到您家的时间后，应及时取奶饮用或置如冰箱保存，避免因高温或过低温度导致牛奶变质或冻奶。</span></span></p>
<p><span style=\\"color:#a21935;font-size:10.5pt;\\"><span style=\\"color:#e53333;\\">5：鲜牛奶可直接饮用，如果您需要加热，可将鲜牛奶倒入锅中或将 奶瓶放入热水中加热，温度以80度左右为宜，温度过高容易导致营养成分流失。请勿将奶瓶放入微波炉中加热。</span></span></p>
<p><span style=\\"color:#a21935;font-size:10.5pt;\\"><span style=\\"color:#e53333;\\">6：请您及时将空瓶放回奶箱或交给送奶员。请勿将瓶盖、吸管等杂物塞入瓶内，造成生产的不便。</span><br />
</span></p>\',\'08:00-12:50|13:00-23:50\',\'1\',\'1\',\'0\',\'\',\'0\',\'13\',\'0\',\'39.819087\',\'116.351998\',\'\',\'5\',\'565665@qq.com\',\'2\',\'4\',\'0\',\'\',\'1923962851\',\'\',\'0\',\'\',\'\',\'\')',
  8 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'16\',\'41\',\'wzxsjg\',\'味珍香舌尖馆\',\'/upload/user/20140921123046679.jpg\',\'18538129330\',\'新发地桥西\',\'0\',\'\',\'味珍香舌尖馆，半成品菜到您家！\',\'味珍香舌尖馆，半成品菜到您家！\',\'06:00-11:00|11:00-23:59\',\'1\',\'1\',\'0\',\'18608380838\',\'1387379616\',\'0\',\'0\',\'39.831400\',\'116.350724\',\'\',\'6\',\'5565665@qq.com\',\'2\',\'4\',\'0\',\'\',\'1943177908\',\'\',\'0\',\'\',\'\',\'\')',
  9 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'17\',\'42\',\'cdss\',\'蔬菜王国\',\'/upload/user/20140921125346911.jpg\',\'185368129330\',\'新发地西大门\',\'0\',\'\',\'蔬菜王国欢迎您！\',\'蔬菜王国欢迎您！\',\'07:00-12:00|12:00-23:59\',\'1\',\'1\',\'0\',\'18683818925\',\'1387418943\',\'0\',\'0\',\'39.812551\',\'116.346818\',\'\',\'7\',\'656565@qq.com\',\'2\',\'4\',\'0\',\'\',\'1943177667\',\'\',\'0\',\'\',\'\',\'\')',
  10 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'18\',\'44\',\'sdxss\',\'开元酒水\',\'/upload/user/20140921130817314.jpg\',\'18538123000\',\'新发地西大门\',\'0\',\'\',\'\',\'\',\'07:00-23:30\',\'1\',\'1\',\'0\',\'\',\'0\',\'0\',\'0\',\'39.829571\',\'116.349774\',\'\',\'8\',\'375952873@qq.com\',\'2\',\'4\',\'0\',\'\',\'1923964961\',\'\',\'0\',\'\',\'\',\'\')',
  11 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'19\',\'47\',\'jhws\',\'马家堡调料\',\'/upload/shop/20140305103848485.jpg\',\'88888888\',\'马家堡128号\',\'0\',\'\',\'\',\'\',\'08:00-23:30\',\'1\',\'1\',\'0\',\'1888888888\',\'1388316445\',\'0\',\'0\',\'39.858849\',\'116.380053\',\'\',\'9\',\'565665@qq.com\',\'2\',\'4\',\'0\',\'\',\'1923964810\',\'\',\'0\',\'\',\'\',\'\')',
  12 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'20\',\'46\',\'sssaas\',\'地佰益北京\',\'/upload/user/20140921131606903.jpg\',\'18838133177\',\'新发地西大门\',\'0\',\'\',\'\',\'\',\'07:00-23:59\',\'1\',\'1\',\'0\',\'18838133177\',\'1388320861\',\'0\',\'0\',\'39.815814\',\'116.351536\',\'\',\'11\',\'5565656@qq.com\',\'2\',\'4\',\'0\',\'\',\'1923964604\',\'\',\'0\',\'\',\'\',\'\')',
  13 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'21\',\'48\',\'hdcggg\',\'乐逗休闲食品\',\'/upload/user/20140921132336560.jpg\',\'18538129330\',\'新发地西大门\',\'0\',\'\',\'\',\'\',\'07:00-23:59\',\'1\',\'1\',\'1\',\'13721099858\',\'1388400915\',\'0\',\'5\',\'39.831400\',\'116.350724\',\'\',\'12\',\'4455454@qq.com\',\'3\',\'11\',\'0\',\'\',\'1463105038\',\'\',\'0\',\'\',\'\',\'\')',
  14 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'29\',\'86\',\'xxx33\',\'吉阿婆麻辣烫\',\'/upload/shop/20140414204019688.jpg\',\'13544907240\',\'fdsafdsafds\',\'5\',\'\',\'\',\'\',\'12:00-19:00\',\'1\',\'1\',\'0\',\'13544907240\',\'1395040609\',\'0\',\'0\',\'39.829571\',\'116.349774\',\'\',\'13\',\'fdsafdsaxxx@qq.com\',\'55\',\'59\',\'0\',\'\',\'1481440733\',\'\',\'0\',\'\',\'\',\'\')',
  15 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'50\',\'346\',\'678\',\'人不理肉包\',\'\',\'13838384380\',\'二七区阳光公寓\',\'5\',\'\',\'\',\'\',\'08:00-12:00\',\'0\',\'1\',\'0\',\'13838384380\',\'1402406918\',\'0\',\'0\',\'34.731871\',\'113.632251\',\'\',\'999\',\'678@qq.com\',\'2\',\'4\',\'0\',\'\',\'1433942918\',\'\',\'0\',\'\',\'\',\'\')',
  16 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'25\',\'61\',\'wnchen\',\'味捷外卖\',\'/upload/shop/20140305101714696.jpg\',\'18538129330\',\'新发地西大门\',\'0\',\'\',\'\',\'\',\'07:00-23:59\',\'1\',\'1\',\'0\',\'\',\'0\',\'0\',\'0\',\'39.831400\',\'116.350724\',\'\',\'999\',\'5255665@qq.com\',\'2\',\'4\',\'0\',\'\',\'1923963511\',\'\',\'0\',\'\',\'\',\'\')',
  17 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'26\',\'74\',\'wjbbb\',\'温加堡披萨\',\'/upload/shop/20140305101215421.jpg\',\'18538129330\',\'郑州市金水区沙口路汉飞金沙国际20号楼1908室\',\'5\',\'\',\'\',\'\',\'07:00-23:59\',\'1\',\'1\',\'0\',\'\',\'\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'56565656@qq.com\',\'2\',\'4\',\'0\',\'\',\'1439345479\',\'\',\'0\',\'\',\'\',\'\')',
  18 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'27\',\'76\',\'fssgbf\',\'釜山石锅拌饭\',\'/upload/shop/20140414202905357.jpg\',\'18538129330\',\'釜山的撒订单\',\'5\',\'ffsdfsdfff\',\'fsdfsf\',\'fsdfsdfsdf\',\'08:00-24:00\',\'1\',\'1\',\'1\',\'\',\'\',\'0\',\'10\',\'0.000000\',\'0.000000\',\'\',\'999\',\'1014656201@qq.com\',\'55\',\'59\',\'0\',\'\',\'2084709868\',\'\',\'0\',\'\',\'\',\'\')',
  19 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'28\',\'12\',\'guomu\',\'果木吃货店\',\'/upload/shop/20140414202653305.jpg\',\'18538129930\',\'撒的撒的撒的撒的\',\'5\',\'\',\'\',\'\',\'07:00-23:50\',\'1\',\'1\',\'0\',\'15252525525\',\'1394679912\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'6565@qq.com\',\'55\',\'59\',\'0\',\'\',\'2147483647\',\'\',\'0\',\'\',\'\',\'\')',
  20 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'30\',\'96\',\'lanbai\',\'蓝白快餐\',\'/upload/shop/20140327150438587.jpg\',\'15858585858\',\'南大街22号\',\'5\',\'\',\'蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐&lt;br /&gt;\',\'蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐蓝白快餐vvv&lt;br /&gt;\',\'9:00-20:00|9:00-20:00\',\'1\',\'1\',\'1\',\'13333333333\',\'1395902477\',\'3\',\'0\',\'0.000000\',\'0.000000\',\'\',\'1\',\'hainaspc@qq.com\',\'55\',\'59\',\'0\',\'\',\'1927782826\',\'\',\'0\',\'\',\'\',\'\')',
  21 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'39\',\'206\',\'\',\'互联网普及\',\'\',\'\',\'互联网普及互联网普及\',\'5\',\'\',\'\',\'\',\'\',\'0\',\'1\',\'0\',\'18538125220\',\'1397538347\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'\',\'0\',\'0\',\'0\',\'\',\'1429074365\',\'\',\'0\',\'\',\'\',\'\')',
  22 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'32\',\'177\',\'zzcs\',\'仔仔超市燕郊店\',\'/upload/user/20140921144136656.jpg\',\'13616955985\',\'风尚国际公寓\',\'5\',\'\',\'haha\',\'\',\'08:00 -12:30|12:40-23:30\',\'1\',\'1\',\'0\',\'13616955985\',\'1397048578\',\'0\',\'0\',\'39.947984\',\'116.818888\',\'\',\'5\',\'yangqijob@gmail.com\',\'55\',\'59\',\'0\',\'\',\'2147483647\',\'\',\'0\',\'\',\'\',\'\')',
  23 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'33\',\'178\',\'cxiangy\',\'川香苑小店\',\'/upload/shop/20140414203316620.jpg\',\'18525125552\',\'dsadsadsad\',\'5\',\'\',\'\',\'\',\'07:00-23:50\',\'1\',\'1\',\'0\',\'18538129330\',\'1397048619\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'375952875@qq.com\',\'55\',\'59\',\'0\',\'\',\'1483427679\',\'\',\'0\',\'\',\'\',\'\')',
  24 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'34\',\'179\',\'\',\'杨浦3\',\'\',\'\',\'\',\'5\',\'\',\'\',\'\',\'\',\'0\',\'1\',\'0\',\'13393023151\',\'1397048732\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'741915257@qq.com\',\'0\',\'0\',\'0\',\'\',\'0\',\'\',\'0\',\'\',\'\',\'\')',
  25 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'35\',\'183\',\'\',\'开店测试\',\'\',\'\',\'\',\'5\',\'\',\'\',\'\',\'\',\'0\',\'1\',\'1\',\'15216702114\',\'1397112407\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'1339302315@qq.com\',\'0\',\'0\',\'0\',\'\',\'1483428078\',\'\',\'0\',\'\',\'\',\'\')',
  26 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'36\',\'191\',\'wayde\',\'比诺外卖\',\'/upload/shop/20140414202408585.jpg\',\'18538129330\',\'上李文曾花园\',\'5\',\'\',\'你就将建军节\',\'哈哈哈哈\',\'10:00-12:00|13:00-16:00\',\'1\',\'1\',\'1\',\'18650007352\',\'1397231629\',\'0\',\'10\',\'39.946583\',\'116.388746\',\'\',\'1\',\'937726272@qq.com\',\'3\',\'53\',\'0\',\'\',\'1399219682\',\'\',\'0\',\'\',\'\',\'\')',
  27 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'37\',\'204\',\'test0001\',\'味道故事三店\',\'/upload/shop/20140414202515713.jpg\',\'18888888888\',\'123456\',\'5\',\'\',\'\',\'\',\'08:00-22:00\',\'1\',\'1\',\'0\',\'18888888888\',\'1397433852\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'jhw4048w@163.com\',\'55\',\'59\',\'0\',\'\',\'1930911968\',\'\',\'0\',\'\',\'\',\'\')',
  28 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'40\',\'218\',\'1234324\',\'上海旗舰店\',\'\',\'1515153\',\'122313\',\'5\',\'\',\'\',\'\',\'09:00-14:00|15:00-22:00\',\'1\',\'1\',\'1\',\'13777777777\',\'1398757833\',\'0\',\'8\',\'0.000000\',\'0.000000\',\'\',\'999\',\'465465@QQ.COM\',\'55\',\'59\',\'0\',\'\',\'1407397998\',\'\',\'0\',\'\',\'\',\'\')',
  29 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'41\',\'255\',\'sxxc\',\'沙县小吃街\',\'\',\'87447781\',\'风格的风格\',\'5\',\'\',\'\',\'\',\'11:00-13:00|16:00-23:00\',\'1\',\'1\',\'0\',\'\',\'\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'927190838@qq.com\',\'55\',\'59\',\'0\',\'\',\'1431000436\',\'\',\'0\',\'\',\'\',\'\')',
  30 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'42\',\'262\',\'\',\'泉城酒店\',\'\',\'\',\'\',\'5\',\'\',\'\',\'\',\'\',\'0\',\'1\',\'0\',\'15053110222\',\'1400238254\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'15001100@qq.com\',\'0\',\'0\',\'0\',\'\',\'2147483647\',\'\',\'0\',\'\',\'\',\'\')',
  31 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'43\',\'2\',\'\',\'面食点\',\'\',\'\',\'\',\'5\',\'\',\'\',\'\',\'12:00-23:00\',\'1\',\'1\',\'0\',\'\',\'\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'\',\'0\',\'0\',\'0\',\'\',\'1401093000\',\'\',\'0\',\'\',\'\',\'\')',
  32 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'44\',\'271\',\'abcccss\',\'便利200\',\'\',\'13542928654\',\'反对撒反对撒反对啊\',\'5\',\'\',\'xxxxxxxxxxx\',\'我想有个更成的名字\',\'08:00-19:40\',\'1\',\'1\',\'0\',\'13542156541\',\'1400581034\',\'0\',\'0\',\'34.750085\',\'113.652374\',\'\',\'999\',\'yangxiaodong@qq.com\',\'2\',\'4\',\'22\',\'\',\'1432117034\',\'\',\'1\',\'\',\'\',\'\')',
  33 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'45\',\'280\',\'\',\'冯绍峰固定\',\'\',\'\',\'258963147\',\'5\',\'\',\'\',\'\',\'\',\'0\',\'1\',\'0\',\'15933978976\',\'1400844195\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'\',\'0\',\'0\',\'0\',\'\',\'0\',\'\',\'0\',\'\',\'\',\'\')',
  34 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'46\',\'288\',\'jkjk\',\'好店没的说\',\'/upload/user/20140605210219289.jpg\',\'15679167710\',\'紫阳大道101号\',\'5\',\'\',\'\',\'\',\'0:01-23:00|12:00-22:00\',\'1\',\'1\',\'0\',\'15679167712\',\'1401103064\',\'0\',\'0\',\'34.769559\',\'113.657420\',\'\',\'999\',\'15679167710@qq.com\',\'55\',\'1\',\'0\',\'\',\'1402837051\',\'0\',\'0\',\'3\',\'\',\'\')',
  35 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'57\',\'388\',\'runxin08\',\'润新水产\',\'/upload/user/20140921102839745.jpg\',\'13888888888\',\'新发地水产厅\',\'5\',\'\',\'润新水产\',\'润新水产新店开业\',\'8:00-12:00|12:10-23:59\',\'1\',\'1\',\'1\',\'\',\'\',\'0\',\'0\',\'39.818045\',\'116.339172\',\'\',\'2\',\'51454545845@qq.com\',\'0\',\'0\',\'0\',\'\',\'1442767215\',\'0\',\'0\',\'1,2,3\',\'\',\'\')',
  36 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'48\',\'342\',\'gqjfii\',\'广庆鸡饭\',\'/upload/user/20140709221738134.jpg\',\'07707688888\',\'阿萨德大飒飒的阿什顿\',\'3\',\'慢20减5元\',\'\',\'\',\'08:00-23:59\',\'1\',\'1\',\'0\',\'1241243\',\'1402316671\',\'2\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'458585051@qq.com\',\'2\',\'4\',\'0\',\'\',\'1551795581\',\'\',\'0\',\'\',\'\',\'\')',
  37 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'49\',\'343\',\'123\',\'test\',\'\',\'13812345678\',\'沙县小吃\',\'5\',\'\',\'\',\'\',\'00:01-23:59\',\'1\',\'1\',\'1\',\'13812345678\',\'1402334306\',\'0\',\'0\',\'34.763491\',\'113.659778\',\'\',\'999\',\'1231@163.com\',\'3\',\'12\',\'0\',\'\',\'1403025896\',\'\',\'0\',\'\',\'\',\'\')',
  38 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'51\',\'359\',\'\',\'rainlotus\',\'\',\'\',\'rainlotusrainlotus\',\'5\',\'\',\'\',\'\',\'\',\'0\',\'0\',\'0\',\'18652005896\',\'1402989365\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'\',\'0\',\'0\',\'0\',\'\',\'0\',\'\',\'0\',\'\',\'\',\'\')',
  39 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'52\',\'371\',\'food\',\'小渝鲜川菜馆\',\'/upload/user/20140709221620421.jpg\',\'051082826877\',\'无锡市崇安区新生路文渊坊\',\'5\',\'\',\'\',\'\',\'09:30-23:59|17:00-02:00\',\'1\',\'1\',\'0\',\'18688508593\',\'1403540892\',\'0\',\'0\',\'31.579752\',\'120.308195\',\'\',\'999\',\'w8w8w2@126.com\',\'2\',\'4\',\'0\',\'http://www.dianping.com/shop/16817176\',\'2147483647\',\'0\',\'0\',\'1,2,3\',\'\',\'\')',
  40 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'53\',\'376\',\'sdsad\',\'百味注意\',\'/upload/user/20140709220959101.jpg\',\'18538129330\',\'撒的撒撒的撒\',\'5\',\'\',\'\',\'&lt;span style=\\\\&quot;color:#eb6100;font-family:\\\\&#039;Helvetica Neue\\\\&#039;, Arial, \\\\&#039;Microsoft Yahei\\\\&#039;, sans-serif;font-size:14px;line-height:23px;background-color:rgba(0, 0, 0, 0.298039);\\\\&quot;&gt;1、本店推荐您在“外卖人”订餐——饭点较忙，电话常占线，本店优先配送网上订单。&lt;/span&gt;\',\'8:00-23:59\',\'1\',\'1\',\'0\',\'18538152554\',\'1403773463\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'565656@qq.com\',\'2\',\'0\',\'0\',\'\',\'2147483647\',\'\',\'0\',\'\',\'\',\'\')',
  41 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'56\',\'387\',\'\',\'润新水产01\',\'\',\'\',\'\',\'5\',\'\',\'\',\'\',\'\',\'0\',\'1\',\'0\',\'\',\'\',\'0\',\'0\',\'0.000000\',\'0.000000\',\'\',\'999\',\'\',\'0\',\'0\',\'0\',\'\',\'1442765990\',\'\',\'1\',\'\',\'\',\'\')',
  42 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'54\',\'384\',\'wfsc\',\'万丰蔬菜\',\'/upload/user/20140920203015572.jpg\',\'13552543051\',\'丰台区新发地市场\',\'5\',\'\',\'<span style=\\"color:#eb6100;font-family:\\\'Helvetica Neue\\\', Arial, \\\'Microsoft Yahei\\\', sans-serif;font-size:18px;line-height:23px;orphans:2;widows:2;\\">新发地蔬菜直接到户，响应政府号召，减少流通环节，平抑菜价，保障城市菜篮子！&nbsp;</span>\',\'<span style=\\"color:#eb6100;font-family:\\\'Helvetica Neue\\\', Arial, \\\'Microsoft Yahei\\\', sans-serif;font-size:18px;line-height:23px;orphans:2;widows:2;\\">新发地蔬菜直接到户，响应政府号召，减少流通环节，平抑菜价，保障城市菜篮子！&nbsp;</span>\',\'8:00-12:00|13:00-23:59\',\'1\',\'1\',\'0\',\'13552543051\',\'1411215486\',\'0\',\'0\',\'39.820248\',\'116.351055\',\'\',\'19\',\'wanfengshucai@163.com\',\'0\',\'0\',\'0\',\'\',\'1441976503\',\'w3r2ertr5yr5\',\'0\',\'1,2,3\',\'\',\'\')',
  43 => 'INSERT INTO `xiaozu_shop`(`id`,`uid`,`shortname`,`shopname`,`shoplogo`,`phone`,`address`,`point`,`cx_info`,`intr_info`,`notice_info`,`starttime`,`is_open`,`is_pass`,`is_recom`,`maphone`,`addtime`,`pointcount`,`yjin`,`lat`,`lng`,`shopbacklogo`,`sort`,`email`,`areaid1`,`areaid2`,`areaid3`,`otherlink`,`endtime`,`IMEI`,`shoptype`,`noticetype`,`machine_code`,`mKey`) VALUES(\'55\',\'385\',\'runxin\',\'润新水产\',\'/upload/user/20140921002925274.jpg\',\'13381211577\',\'新发地水产市场\',\'5\',\'\',\'润新\',\'新鲜\',\'0:10-12:00|13:00-23:59\',\'1\',\'1\',\'1\',\'18911088995\',\'1411222561\',\'0\',\'0\',\'39.820248\',\'116.351055\',\'\',\'999\',\'runxinshuichan@163.com\',\'0\',\'0\',\'0\',\'\',\'1442766973\',\'0\',\'1\',\'1,2,3\',\'\',\'\')',
)?>