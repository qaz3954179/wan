<?php return array (
  0 => 'CREATE TABLE `xiaozu_menu` (
  `name` varchar(100) NOT NULL COMMENT \'操作名称\',
  `cnname` varchar(200) NOT NULL,
  `moduleid` int(20) NOT NULL,
  `group` int(20) NOT NULL,
  `id` int(5) default \'0\'
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'memberlist\',\'会员列表\',\'2\',\'4\',\'0\')',
  2 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addmember\',\'添加会员\',\'2\',\'4\',\'1\')',
  3 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'scoreset\',\'积分设置\',\'16\',\'1\',\'4\')',
  4 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'juanlist\',\'优惠券列表\',\'16\',\'1\',\'2\')',
  5 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addjuan\',\'添加优惠券\',\'16\',\'1\',\'3\')',
  6 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'shop\',\'店铺销量分析\',\'18\',\'6\',\'0\')',
  7 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'orderyjin\',\'商家结算\',\'5\',\'6\',\'0\')',
  8 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'newslist\',\'新闻列表\',\'7\',\'6\',\'0\')',
  9 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addcard\',\'添加充值卡\',\'16\',\'1\',\'1\')',
  10 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'cardlist\',\'充值卡列表\',\'16\',\'1\',\'0\')',
  11 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'singlelist\',\'单页列表\',\'12\',\'1\',\'0\')',
  12 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'pmsglist\',\'私信列表\',\'11\',\'1\',\'1\')',
  13 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'asklist\',\'后台留言列表\',\'11\',\'1\',\'0\')',
  14 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'adminpsset\',\'网站配送设置\',\'10\',\'1\',\'2\')',
  15 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addarealist\',\'后台添加购区域\',\'10\',\'1\',\'1\')',
  16 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'adminarealist\',\'后台区域列表\',\'10\',\'1\',\'0\')',
  17 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'errlog\',\'错误日志\',\'17\',\'1\',\'8\')',
  18 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'cleartpl\',\'清理缓存\',\'17\',\'1\',\'7\')',
  19 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'basedata\',\'备份数据\',\'17\',\'1\',\'5\')',
  20 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'memberlist\',\'会员列表\',\'2\',\'4\',\'0\')',
  21 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addmember\',\'添加会员\',\'2\',\'4\',\'1\')',
  22 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'rebkdata\',\'还原数据\',\'17\',\'1\',\'6\')',
  23 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'smsset\',\'短信设置\',\'17\',\'1\',\'4\')',
  24 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'emailset\',\'邮箱设置\',\'17\',\'1\',\'3\')',
  25 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'loginlist\',\'第三方登陆\',\'17\',\'1\',\'1\')',
  26 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'othertpl\',\'短信/邮件模板设置\',\'17\',\'1\',\'2\')',
  27 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'paylist\',\'支付接口列表\',\'17\',\'1\',\'0\')',
  28 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'giftlog\',\'礼品兑换记录\',\'8\',\'1\',\'2\')',
  29 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'gifttype\',\'礼品类型\',\'8\',\'1\',\'1\')',
  30 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'giftlist\',\'礼品列表\',\'8\',\'1\',\'0\')',
  31 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'newslist\',\'新闻列表\',\'7\',\'1\',\'0\')',
  32 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'newstype\',\'新闻分类\',\'7\',\'1\',\'1\')',
  33 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'wxuser\',\'微信用户\',\'6\',\'1\',\'3\')',
  34 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'wxback\',\'微信自动回复\',\'6\',\'1\',\'2\')',
  35 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'wxmenu\',\'微信菜单\',\'6\',\'1\',\'1\')',
  36 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'adminfastfoods\',\'后台快速下单\',\'5\',\'1\',\'7\')',
  37 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'wxset\',\'微信基本设置\',\'6\',\'1\',\'0\')',
  38 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'beizhulist\',\'订单备注\',\'5\',\'1\',\'5\')',
  39 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'ordercomment\',\'订单评价列表\',\'5\',\'1\',\'6\')',
  40 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'orderyjin\',\'商家结算\',\'5\',\'1\',\'4\')',
  41 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'ordertotal\',\'订单统计\',\'5\',\'1\',\'3\')',
  42 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'drawbacklog\',\'退款申请处理\',\'5\',\'1\',\'2\')',
  43 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'ordertoday\',\'当天订单处理\',\'5\',\'1\',\'1\')',
  44 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'shop\',\'店铺销量分析\',\'18\',\'6\',\'0\')',
  45 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'orderyjin\',\'商家结算\',\'5\',\'6\',\'0\')',
  46 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'newslist\',\'新闻列表\',\'7\',\'6\',\'0\')',
  47 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'user\',\'会员购买数据\',\'18\',\'1\',\'3\')',
  48 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'orderlist\',\'所有订单\',\'5\',\'1\',\'0\')',
  49 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'goods\',\'商品销量分析\',\'18\',\'1\',\'2\')',
  50 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'area\',\'地区销量分析\',\'18\',\'1\',\'0\')',
  51 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'shop\',\'店铺销量分析\',\'18\',\'1\',\'1\')',
  52 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'goodssign\',\'促销商品标签\',\'3\',\'1\',\'4\')',
  53 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'shoptype\',\'后台模型\',\'3\',\'1\',\'3\')',
  54 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addshop\',\'后台添加店铺\',\'3\',\'1\',\'2\')',
  55 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'adminshopwati\',\'后台待审核商家\',\'3\',\'1\',\'1\')',
  56 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'adminshoplist\',\'后台商家列表\',\'3\',\'1\',\'0\')',
  57 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'membergrade\',\'会员成长等级\',\'2\',\'1\',\'7\')',
  58 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'grouplist\',\'会员分组\',\'2\',\'1\',\'6\')',
  59 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addgroup\',\'添加会员分组\',\'2\',\'1\',\'5\')',
  60 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addmember\',\'添加会员\',\'2\',\'1\',\'4\')',
  61 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'memberlistshop\',\'商家会员列表\',\'2\',\'1\',\'3\')',
  62 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'memberlist\',\'普通会员列表\',\'2\',\'1\',\'2\')',
  63 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addadmin\',\'添加管理员\',\'2\',\'1\',\'1\')',
  64 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'adminlist\',\'管理员列表\',\'2\',\'1\',\'0\')',
  65 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'limitset\',\'后台菜单管理\',\'1\',\'1\',\'8\')',
  66 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'modullist\',\'模块管理\',\'1\',\'1\',\'7\')',
  67 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'footinfo\',\'网站底部\',\'1\',\'1\',\'6\')',
  68 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'toplink\',\'网站导航\',\'1\',\'1\',\'5\')',
  69 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'sitebk\',\'网站水印\',\'1\',\'1\',\'4\')',
  70 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'tempset\',\'模板设置\',\'1\',\'1\',\'3\')',
  71 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'otherset\',\'网站限制\',\'1\',\'1\',\'2\')',
  72 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'siteset\',\'网站设置\',\'1\',\'1\',\'1\')',
  73 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'index\',\'网站信息\',\'1\',\'1\',\'0\')',
  74 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'prensentjuan\',\'赠送卷设置\',\'16\',\'1\',\'5\')',
  75 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'sendtasklist\',\'群发任务\',\'16\',\'1\',\'6\')',
  76 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'sendtask\',\'发布群发任务\',\'16\',\'1\',\'7\')',
  77 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'advlist\',\'广告列表\',\'14\',\'1\',\'0\')',
  78 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'advtype\',\'广告类型\',\'14\',\'1\',\'1\')',
)?>