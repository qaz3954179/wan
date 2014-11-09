<?php return array (
  0 => 'CREATE TABLE `xiaozu_ask` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `shopid` int(20) NOT NULL DEFAULT \'0\' COMMENT \'当为网站留言时此值为0\',
  `content` varchar(250) NOT NULL,
  `addtime` int(11) NOT NULL,
  `typeid` int(2) NOT NULL,
  `replycontent` varchar(250) DEFAULT NULL,
  `replytime` int(11) NOT NULL DEFAULT \'0\',
  `replyname` varchar(255) DEFAULT NULL COMMENT \'回复者\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=204 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'21\',\'0\',\'0\',\'fdsa\',\'1384066401\',\'3\',\'范德萨\',\'1384067126\',\'\')',
  2 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'22\',\'0\',\'0\',\'fdsa\',\'1384069018\',\'3\',\'\',\'0\',\'\')',
  3 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'20\',\'0\',\'0\',\'范德萨\',\'1384066391\',\'3\',\'\',\'0\',\'\')',
  4 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'40\',\'0\',\'0\',\'的\',\'1384069105\',\'3\',\'\',\'0\',\'\')',
  5 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'39\',\'0\',\'0\',\'成\',\'1384069103\',\'3\',\'\',\'0\',\'\')',
  6 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'38\',\'0\',\'0\',\'吧\',\'1384069101\',\'3\',\'\',\'0\',\'\')',
  7 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'37\',\'0\',\'0\',\'啊\',\'1384069099\',\'3\',\'\',\'0\',\'\')',
  8 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'36\',\'0\',\'0\',\'下\',\'1384069098\',\'3\',\'\',\'0\',\'\')',
  9 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'35\',\'0\',\'0\',\'范德萨\',\'1384069096\',\'3\',\'\',\'0\',\'\')',
  10 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'25\',\'0\',\'0\',\'我想评论\',\'1384069040\',\'3\',\'\',\'0\',\'\')',
  11 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'26\',\'0\',\'0\',\'我评论\',\'1384069046\',\'3\',\'\',\'0\',\'\')',
  12 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'27\',\'0\',\'0\',\'范德萨\',\'1384069049\',\'3\',\'\',\'0\',\'\')',
  13 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'28\',\'0\',\'0\',\'多条评论AJAX\',\'1384069061\',\'3\',\'\',\'0\',\'\')',
  14 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'29\',\'0\',\'0\',\'whatdo\',\'1384069068\',\'3\',\'\',\'0\',\'\')',
  15 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'30\',\'0\',\'0\',\'增加评论\',\'1384069074\',\'3\',\'\',\'0\',\'\')',
  16 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'31\',\'0\',\'0\',\'我想评论\',\'1384069079\',\'3\',\'\',\'0\',\'\')',
  17 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'32\',\'0\',\'0\',\'范德萨\',\'1384069081\',\'3\',\'\',\'0\',\'\')',
  18 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'33\',\'0\',\'0\',\'你好啊 啊 啊啊啊啊啊\',\'1384069087\',\'3\',\'\',\'0\',\'\')',
  19 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'34\',\'0\',\'0\',\'范德萨\',\'1384069093\',\'3\',\'\',\'0\',\'\')',
  20 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'24\',\'0\',\'0\',\'我要评论\',\'1384069034\',\'3\',\'\',\'0\',\'\')',
  21 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'23\',\'0\',\'0\',\'测试发布\',\'1384069028\',\'3\',\'\',\'0\',\'\')',
  22 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'41\',\'0\',\'0\',\'吧\',\'1384069114\',\'3\',\'\',\'0\',\'\')',
  23 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'42\',\'0\',\'0\',\'是\',\'1384069116\',\'3\',\'\',\'0\',\'\')',
  24 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'43\',\'0\',\'0\',\'啊\',\'1384069118\',\'3\',\'\',\'0\',\'\')',
  25 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'44\',\'0\',\'0\',\'钱\',\'1384069119\',\'3\',\'\',\'0\',\'\')',
  26 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'45\',\'0\',\'0\',\'我\',\'1384069121\',\'3\',\'\',\'0\',\'\')',
  27 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'46\',\'0\',\'0\',\'饿\',\'1384069123\',\'3\',\'\',\'0\',\'\')',
  28 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'47\',\'0\',\'0\',\'让\',\'1384069130\',\'3\',\'\',\'0\',\'\')',
  29 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'48\',\'0\',\'0\',\'啊\',\'1384069133\',\'3\',\'\',\'0\',\'\')',
  30 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'49\',\'0\',\'0\',\'是\',\'1384069135\',\'3\',\'\',\'0\',\'\')',
  31 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'50\',\'0\',\'0\',\'的\',\'1384069137\',\'3\',\'\',\'0\',\'\')',
  32 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'51\',\'0\',\'0\',\'发\',\'1384069139\',\'3\',\'\',\'0\',\'\')',
  33 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'52\',\'0\',\'0\',\'个\',\'1384069146\',\'3\',\'\',\'0\',\'\')',
  34 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'53\',\'0\',\'0\',\'在\',\'1384069148\',\'3\',\'\',\'0\',\'\')',
  35 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'54\',\'0\',\'0\',\'下\',\'1384069153\',\'3\',\'\',\'0\',\'\')',
  36 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'55\',\'0\',\'0\',\'成\',\'1384069159\',\'3\',\'\',\'0\',\'\')',
  37 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'56\',\'0\',\'0\',\'吧\',\'1384069162\',\'3\',\'\',\'0\',\'\')',
  38 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'57\',\'0\',\'0\',\'v\',\'1384069164\',\'3\',\'\',\'0\',\'\')',
  39 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'58\',\'0\',\'0\',\'吧\',\'1384069167\',\'3\',\'测试我要回复\',\'1384073620\',\'\')',
  40 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'59\',\'0\',\'0\',\'111\',\'1384073772\',\'3\',\'\',\'0\',\'\')',
  41 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'60\',\'0\',\'0\',\'865656\',\'1384086304\',\'3\',\'\',\'0\',\'\')',
  42 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'61\',\'0\',\'6\',\'22\',\'1384086308\',\'3\',\'\',\'0\',\'\')',
  43 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'62\',\'2\',\'6\',\'fdsa\',\'1384159079\',\'3\',\'fdsa\',\'1384400254\',\'fdsafdsafdsaf\')',
  44 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'63\',\'2\',\'6\',\'添加test\',\'1384159087\',\'3\',\'fdsa \',\'1384400124\',\'fdsafdsafdsaf\')',
  45 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'64\',\'2\',\'0\',\'fdsa\',\'1384159103\',\'3\',\'\',\'0\',\'\')',
  46 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'65\',\'2\',\'6\',\'fdsa\',\'1384159114\',\'3\',\'fdsa\',\'1384400152\',\'fdsafdsafdsaf\')',
  47 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'66\',\'2\',\'6\',\'fdsafdsafdsa\',\'1384159169\',\'3\',\'\',\'0\',\'\')',
  48 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'67\',\'2\',\'6\',\'测试翻页\',\'1384159176\',\'3\',\'\',\'0\',\'\')',
  49 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'69\',\'2\',\'6\',\'测试翻页4\',\'1384159181\',\'3\',\'范德萨\',\'1384399839\',\'fdsafdsafdsaf\')',
  50 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'70\',\'2\',\'6\',\'测试翻页5\',\'1384159184\',\'3\',\'\',\'0\',\'\')',
  51 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'71\',\'2\',\'6\',\'测试翻页6\',\'1384159189\',\'3\',\'fdsa\',\'1384400325\',\'fdsafdsafdsaf\')',
  52 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'72\',\'2\',\'6\',\'测试翻页7\',\'1384159194\',\'3\',\'\',\'0\',\'\')',
  53 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'73\',\'2\',\'6\',\'测试翻页8\',\'1384159198\',\'3\',\'\',\'0\',\'\')',
  54 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'74\',\'2\',\'6\',\'测试翻页9\',\'1384159202\',\'3\',\'\',\'0\',\'\')',
  55 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'75\',\'2\',\'6\',\'测试翻页91\',\'1384159207\',\'3\',\'\',\'0\',\'\')',
  56 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'76\',\'2\',\'6\',\'测试翻页913\',\'1384159208\',\'3\',\'\',\'0\',\'\')',
  57 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'77\',\'2\',\'6\',\'测试翻页9134\',\'1384159211\',\'3\',\'\',\'0\',\'\')',
  58 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'78\',\'2\',\'6\',\'测试翻页91345\',\'1384159212\',\'3\',\'\',\'0\',\'\')',
  59 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'79\',\'2\',\'6\',\'测试翻页913456\',\'1384159214\',\'3\',\'\',\'0\',\'\')',
  60 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'80\',\'2\',\'6\',\'测试翻页9134567\',\'1384159218\',\'3\',\'嘻嘻嘻嘻嘻嘻嘻嘻嘻嘻嘻嘻\',\'1384399626\',\'fdsafdsafdsaf\')',
  61 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'81\',\'2\',\'6\',\'测试翻页91345671\',\'1384159226\',\'3\',\'\',\'0\',\'\')',
  62 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'82\',\'2\',\'6\',\'测试翻页913456712\',\'1384159227\',\'3\',\'\',\'0\',\'\')',
  63 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'83\',\'2\',\'6\',\'测试翻页9134567123\',\'1384159229\',\'3\',\'范德萨好啊后会发搜狐奋斗isa好范德萨  \',\'1384399377\',\'fdsafdsafdsaf\')',
  64 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'84\',\'2\',\'6\',\'测试翻页91345671234\',\'1384159230\',\'3\',\'嘻嘻嘻想嘻嘻嘻嘻嘻嘻想\',\'1384399395\',\'fdsafdsafdsaf\')',
  65 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'85\',\'2\',\'6\',\'测试翻页913456712345\',\'1384159231\',\'3\',\'fdsa\',\'1384400318\',\'fdsafdsafdsaf\')',
  66 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'86\',\'2\',\'6\',\'测试翻页9134567123456\',\'1384159233\',\'3\',\'fdsa\',\'1384400278\',\'fdsafdsafdsaf\')',
  67 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'87\',\'2\',\'6\',\'测试翻页91345671234567\',\'1384159234\',\'3\',\'fdsa\',\'1384400288\',\'fdsafdsafdsaf\')',
  68 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'88\',\'2\',\'6\',\'测试翻页913456712345678\',\'1384159239\',\'3\',\'fdsa\',\'1384400283\',\'fdsafdsafdsaf\')',
  69 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'89\',\'2\',\'6\',\'测试翻页9134567123456789\',\'1384159243\',\'3\',\'sdfafdsa\',\'1384399281\',\'fdsafdsafdsaf\')',
  70 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'91\',\'2\',\'6\',\'我要留言\',\'1384159411\',\'3\',\'范德萨\',\'1384394614\',\'fdsafdsafdsaf\')',
  71 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'92\',\'0\',\'6\',\'fdsafdsa\',\'1384159633\',\'3\',\'范德萨范德萨\',\'1384394596\',\'fdsafdsafdsaf\')',
  72 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'93\',\'2\',\'6\',\'范德萨\',\'1384160631\',\'3\',\'你好\',\'1384394558\',\'fdsafdsafdsaf\')',
  73 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'94\',\'2\',\'6\',\'fdsa\',\'1384162649\',\'3\',\'fdsafdsafdsa\',\'1384394321\',\'\')',
  74 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'95\',\'2\',\'6\',\'xxxx\',\'1384162653\',\'3\',\'dsfsafdsafdsafdsa\',\'1384394440\',\'\')',
  75 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'96\',\'2\',\'6\',\'我想咨询\',\'1384162660\',\'3\',\'回复我想咨询\',\'1384394456\',\'\')',
  76 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'97\',\'2\',\'6\',\'测试\',\'1384394822\',\'3\',\'想嘻嘻嘻嘻嘻嘻想\',\'1384394830\',\'fdsafdsafdsaf\')',
  77 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'98\',\'2\',\'6\',\'1\',\'1384394950\',\'3\',\'fdsa\',\'1384400273\',\'fdsafdsafdsaf\')',
  78 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'99\',\'2\',\'6\',\'3\',\'1384394952\',\'3\',\'\',\'0\',\'\')',
  79 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'100\',\'2\',\'6\',\'2\',\'1384394953\',\'3\',\'\',\'0\',\'\')',
  80 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'101\',\'2\',\'6\',\'3\',\'1384394954\',\'3\',\'\',\'0\',\'\')',
  81 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'102\',\'2\',\'6\',\'4\',\'1384394955\',\'3\',\'\',\'0\',\'\')',
  82 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'103\',\'2\',\'6\',\'7\',\'1384394957\',\'3\',\'\',\'0\',\'\')',
  83 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'104\',\'2\',\'6\',\'9\',\'1384394959\',\'3\',\'\',\'0\',\'\')',
  84 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'105\',\'2\',\'6\',\'10\',\'1384394962\',\'3\',\'\',\'0\',\'\')',
  85 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'113\',\'2\',\'0\',\'fdsa\',\'1384776997\',\'3\',\'\',\'0\',\'\')',
  86 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'114\',\'2\',\'0\',\'xxx\',\'1384777000\',\'3\',\'\',\'0\',\'\')',
  87 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'115\',\'0\',\'0\',\'fdsa\',\'1384996177\',\'3\',\'\',\'0\',\'\')',
  88 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'116\',\'0\',\'0\',\'zzzzzzzzzzzz\',\'1384996182\',\'3\',\'\',\'0\',\'\')',
  89 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'117\',\'2\',\'0\',\'nihaoa\',\'1385631313\',\'3\',\'\',\'0\',\'\')',
  90 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'118\',\'0\',\'0\',\'sadfdsa\',\'1385632908\',\'3\',\'\',\'0\',\'\')',
  91 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'119\',\'2\',\'0\',\'可能会\',\'1385785750\',\'3\',\'\',\'0\',\'\')',
  92 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'120\',\'2\',\'0\',\'策略\',\'1385785802\',\'3\',\'\',\'0\',\'\')',
  93 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'121\',\'2\',\'0\',\'ghj\',\'1385806803\',\'3\',\'\',\'0\',\'\')',
  94 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'122\',\'0\',\'0\',\'测试\',\'1385878617\',\'3\',\'\',\'0\',\'\')',
  95 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'123\',\'0\',\'0\',\'测试\',\'1385878635\',\'3\',\'\',\'0\',\'\')',
  96 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'124\',\'0\',\'0\',\'Ddf\',\'1386090272\',\'3\',\'\',\'0\',\'\')',
  97 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'125\',\'0\',\'0\',\'Ddf\',\'1386090274\',\'3\',\'\',\'0\',\'\')',
  98 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'126\',\'0\',\'0\',\'3\',\'1386126012\',\'3\',\'\',\'0\',\'\')',
  99 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'127\',\'0\',\'0\',\'v各环节哈呢\',\'1386343328\',\'3\',\'\',\'0\',\'\')',
  100 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'128\',\'21\',\'21\',\'fdsafdsafdsafdsafdsa\',\'1386382795\',\'3\',\'\',\'0\',\'\')',
  101 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'129\',\'21\',\'21\',\'fdsafdsafdsafdsafdsa\',\'1386382796\',\'3\',\'\',\'0\',\'\')',
  102 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'130\',\'21\',\'0\',\'fdsafdsafdsafdsafdsa\',\'1386382918\',\'5\',\'\',\'0\',\'\')',
  103 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'131\',\'21\',\'0\',\'fdsafdsafdsafdsafdsa\',\'1386382920\',\'5\',\'\',\'0\',\'\')',
  104 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'132\',\'21\',\'0\',\'dsafdsafdsa\',\'1386396138\',\'5\',\'\',\'0\',\'\')',
  105 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'133\',\'21\',\'0\',\'THISISATEST\',\'1386396174\',\'5\',\'\',\'0\',\'\')',
  106 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'134\',\'0\',\'0\',\'再重新注册\',\'1386555153\',\'3\',\'\',\'0\',\'\')',
  107 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'135\',\'21\',\'0\',\'Hhjhhg
HHGFFFFFVHJNMBBB\',\'1386601778\',\'5\',\'\',\'0\',\'\')',
  108 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'136\',\'21\',\'0\',\'afdafdsa\',\'1386635581\',\'3\',\'\',\'0\',\'\')',
  109 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'137\',\'0\',\'0\',\'<script\',\'1386637890\',\'3\',\'\',\'0\',\'\')',
  110 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'138\',\'43\',\'9\',\'test\',\'1388142315\',\'3\',\'\',\'0\',\'\')',
  111 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'139\',\'29\',\'0\',\'外卖人网上订餐系统官方网站www.waimairen.com\',\'1388487487\',\'3\',\'\',\'0\',\'\')',
  112 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'140\',\'49\',\'0\',\'还行\',\'1388563116\',\'3\',\'\',\'0\',\'\')',
  113 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'141\',\'49\',\'0\',\'头像为什么不能自己改\',\'1388565501\',\'3\',\'\',\'0\',\'\')',
  114 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'142\',\'0\',\'0\',\'啊露露\',\'1389057360\',\'3\',\'\',\'0\',\'\')',
  115 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'143\',\'0\',\'0\',\'000\',\'1389327109\',\'3\',\'\',\'0\',\'\')',
  116 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'144\',\'0\',\'0\',\'435345345\',\'1390176803\',\'3\',\'\',\'0\',\'\')',
  117 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'193\',\'0\',\'0\',\'avdadsvasdads\',\'1401589225\',\'5\',\'\',\'0\',\'\')',
  118 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'146\',\'0\',\'0\',\'345345\',\'1390176808\',\'3\',\'\',\'0\',\'\')',
  119 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'147\',\'0\',\'0\',\'345345\',\'1390176810\',\'3\',\'\',\'0\',\'\')',
  120 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'148\',\'0\',\'0\',\'345345\',\'1390176811\',\'3\',\'\',\'0\',\'\')',
  121 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'149\',\'0\',\'0\',\'345345\',\'1390176813\',\'3\',\'\',\'0\',\'\')',
  122 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'150\',\'0\',\'0\',\'34534\',\'1390176814\',\'3\',\'\',\'0\',\'\')',
  123 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'151\',\'0\',\'0\',\'345345345345\',\'1390176816\',\'3\',\'\',\'0\',\'\')',
  124 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'152\',\'0\',\'0\',\'34534534535\',\'1390176819\',\'3\',\'\',\'0\',\'\')',
  125 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'153\',\'0\',\'0\',\'35444444445\',\'1390176822\',\'3\',\'\',\'0\',\'\')',
  126 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'154\',\'8\',\'9\',\'不错\',\'1392795517\',\'3\',\'\',\'0\',\'\')',
  127 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'155\',\'8\',\'9\',\'留言能看到？\',\'1392795743\',\'3\',\'\',\'0\',\'\')',
  128 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'156\',\'0\',\'0\',\'20\',\'1393520703\',\'3\',\'\',\'0\',\'\')',
  129 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'194\',\'0\',\'0\',\'avdadsvasdads\',\'1401589231\',\'5\',\'\',\'0\',\'\')',
  130 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'160\',\'0\',\'0\',\'dsfa\',\'1395285923\',\'3\',\'\',\'0\',\'\')',
  131 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'196\',\'0\',\'48\',\'asadsdas是飞洒地方的飞洒\',\'1402643839\',\'3\',\'\',\'0\',\'\')',
  132 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'162\',\'0\',\'0\',\'fdsafdsafdsa\',\'1395382919\',\'3\',\'\',\'0\',\'\')',
  133 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'163\',\'0\',\'0\',\'fdsafdsa\',\'1395382981\',\'3\',\'\',\'0\',\'\')',
  134 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'197\',\'0\',\'48\',\'asdaDSASAFD\',\'1402643846\',\'3\',\'\',\'0\',\'\')',
  135 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'165\',\'0\',\'0\',\'反对撒\',\'1395383233\',\'3\',\'\',\'0\',\'\')',
  136 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'195\',\'0\',\'0\',\'啊啊啊\',\'1402241310\',\'5\',\'\',\'0\',\'\')',
  137 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'167\',\'2\',\'0\',\'gghjjjj\',\'1396072457\',\'3\',\'\',\'0\',\'\')',
  138 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'168\',\'2\',\'0\',\'gghjjjj\',\'1396072532\',\'3\',\'\',\'0\',\'\')',
  139 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'169\',\'29\',\'0\',\'空间看看你们\',\'1396321223\',\'5\',\'\',\'0\',\'\')',
  140 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'170\',\'0\',\'0\',\'1111\',\'1396663425\',\'3\',\'\',\'0\',\'\')',
  141 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'172\',\'43\',\'0\',\'123456\',\'1396999398\',\'3\',\'\',\'0\',\'\')',
  142 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'174\',\'186\',\'0\',\'RYRY\',\'1397131797\',\'3\',\'\',\'0\',\'\')',
  143 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'176\',\'0\',\'0\',\'dfsafdsa\',\'1398930394\',\'3\',\'\',\'0\',\'\')',
  144 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'199\',\'0\',\'9\',\'dsadsa\',\'1403157518\',\'3\',\'\',\'0\',\'\')',
  145 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'183\',\'0\',\'0\',\'fsdfds\',\'1400576434\',\'5\',\'\',\'0\',\'\')',
  146 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'184\',\'0\',\'0\',\'fds\',\'1400576437\',\'5\',\'\',\'0\',\'\')',
  147 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'185\',\'0\',\'9\',\'fdsa\',\'1400578307\',\'3\',\'\',\'0\',\'\')',
  148 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'186\',\'0\',\'9\',\'xxxxx\',\'1400578310\',\'3\',\'\',\'0\',\'\')',
  149 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'187\',\'0\',\'9\',\'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\',\'1400578315\',\'3\',\'\',\'0\',\'\')',
  150 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'198\',\'0\',\'48\',\'SADDSFSDF\',\'1402643851\',\'3\',\'\',\'0\',\'\')',
  151 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'190\',\'0\',\'14\',\'发反反复复反反复复反反复复\',\'1400845481\',\'3\',\'\',\'0\',\'\')',
  152 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'192\',\'292\',\'9\',\'111111\',\'1401118977\',\'3\',\'\',\'0\',\'\')',
  153 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'200\',\'0\',\'9\',\'fdsa\',\'1403773393\',\'3\',\'\',\'0\',\'\')',
  154 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'201\',\'0\',\'0\',\'就会感觉好\',\'1407726749\',\'5\',\'\',\'0\',\'\')',
  155 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'202\',\'0\',\'0\',\'sad\',\'1408966166\',\'5\',\'\',\'0\',\'\')',
  156 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`) VALUES(\'203\',\'0\',\'0\',\'fuck\',\'1410858958\',\'5\',\'\',\'0\',\'\')',
)?>