<?php

//---------------------------------------------------------
//֧���ɹ��ص�����,�Ƹ�ͨ��̨���ô˵�ַ
//---------------------------------------------------------
$hopedir = '../../../';
$config = $hopedir."config/hopeconfig.php";   
$cfg = include($config);  
	
require_once("alipay.config.php");
require_once ("../classes/PayResponse.class.php");
require_once ("tenpay_config.php");


/* ����֧�����������Ӧ����֧����ת�ӿ�Ϊ�첽���أ��û��ڲƸ�ͨ���֧���󣬲Ƹ�ͨͨ���ص�return_url��notify_url��Ƹ�ͨAPP����֧������� */
$resHandler = new PayResponse($key);
//��ȡ֪ͨid:֧�����֪ͨid��֧���ɹ�����֪ͨid��Ҫ��ȡ������ϸ������ô�ID����֪ͨ��֤�ӿڡ�
echo $resHandler->getNotifyId();

// ��֪�Ƹ�֪ͨͨ���ͳɹ����粻�������д���ᵼ�²Ƹ�ͨ��ͣ��֪ͨ�Ƹ�ͨapp������ͣ����òƸ�ͨapp��notify_url����֪ͨ
$resHandler->acknowledgeSuccess();
// ��ʼ֪ͨ��֤�����巽����ο�notify_query.php�Ľ���

require_once ("../classes/NotifyQueryRequest.class.php"); 

/* ��ʼ��֪ͨ��֤����:�Ƹ�ͨAPP���յ��Ƹ�ͨ��֧���ɹ�֪ͨ��ͨ���˽ӿڲ�ѯ��������ϸ�������ȷ��֪ͨ�ǴӲƸ�ͨ����ģ�û�б��۸Ĺ��� */
// ������ɳ��������:��ʽ����������Ϊfalse
$noqHandler = new NotifyQueryRequest($key);

// ������ɳ�������У���ʽ����������Ϊfalse
$noqHandler->setInSandBox(true);
//----------------------------------------
//��������ҵ��������Ʋο�����ƽ̨sdk�ĵ�-PHP
//----------------------------------------
// ���òƸ�ͨApp-id: �Ƹ�ͨAppע��ʱ���ɲƸ�ͨ����
$noqHandler->setAppid($appid);	

// ����֪ͨid:֧�����֪ͨid��֧���ɹ�����֪ͨid��Ҫ��ȡ������ϸ������ô�ID����֪ͨ��֤�ӿڡ�
$noqHandler->setParameter("notify_id", "GamplMcX9Zl0E6shwd8p5c548DHnJWh7ZKkwCocL40j3Qwj6QkJZiOq5H-Ll2tYNRmP2K-NUga4=");          
// ************************************end*******************************

// �������󣬲���ȡ���ض���
$Response = $noqHandler->send();

// ********************���·���ҵ��������Ʋο�����ƽ̨sdk�ĵ�-PHP*************************
if($Response->isPayed()) {// �Ѿ�֧��
	
	
	$out_trade_no = $Response->getParameter("out_trade_no");
	$total_fee = $Response->getParameter("total_fee")
	
	$lnk = mysql_connect($cfg['dbhost'], $cfg['dbuser'], $cfg['dbpw']) or die ('Not connected : ' . mysql_error()); 
   $version = mysql_get_server_info(); 
   if($version > '4.1' && $cfg['dbcharset']) {
				mysql_query("SET NAMES '".$cfg['dbcharset']."'");
   } 
   if($version > '5.0') {
				mysql_query("SET sql_mode=''");
   } 
   if(!@mysql_select_db($cfg['dbname'])){ 
				if(@mysql_error()) {
					echo '���ݿ�����ʧ��';exit;
				} else {
					mysql_select_db($cfg['dbname']);
	      }
   }
   $info =  mysql_query("SELECT * from `".$cfg['tablepre']."onlinelog` where id = ".$out_trade_no." ");
   $backinfog = mysql_fetch_assoc($info);
   
   if(!empty($backinfog)){
    		if($backinfog['status'] == 0){
    			$checkcost = $backinfog['cost']*100;
    			if($checkcost == $total_fee){
    			 if($backinfog['type'] == 'order'){
    			 	//���´�״̬Ϊ1
    			 	//���¶���
    			 	 mysql_query("UPDATE  `".$cfg['tablepre']."onlinelog` SET  `status` =  1 where `id`=".$out_trade_no." ");  
    			 	 mysql_query("UPDATE  `".$cfg['tablepre']."order` SET  `paystatus` =  1 where `id`=".$backinfog['upid']."");  
    		   }elseif($backinfog['type'] == 'acount'){
    		  	 mysql_query("UPDATE  `".$cfg['tablepre']."onlinelog` SET  `status` =  1 where `id`=".$out_trade_no." ");  
    		  	 mysql_query("UPDATE  `".$cfg['tablepre']."member` SET  `cost` =  `cost`+".$backinfog['cost']." where `uid`=".$backinfog['upid']."");  
    		  	  $info =  mysql_query("SELECT * from `".$cfg['tablepre']."member` where uid = ".$backinfog['upid']." ");
              $memberinfo = mysql_fetch_assoc($info);
              $dotime = time(); 
    		  		mysql_query("INSERT INTO `".$cfg['tablepre']."memberlog` (`id` ,`userid` ,`type` ,`addtype` ,`result` ,`addtime` ,`content` ,`title` ,`acount` )VALUES (NULL , '".$memberinfo['uid']."', '2', '1', '".$backinfog['cost']."', '".$dotime."', '���߳�ֵ', 'ʹ��֧�������߳�ֵ".$backinfog['cost']."Ԫ', '".$memberinfo['cost']."');");


    			 }
    			}
    		}
    		// id  type  upid  cost  status  addtime 
   }
   mysql_close($lnk);   
   
   
   
	/*
	// �Ѿ�֧���Ƹ�ͨapp������
	echo "֧���ɹ���Ӧ�ö����ţ�" . $Response->getParameter("out_trade_no") . "<br/>";
	// �Ƹ�ͨapp�����Ŷ�Ӧ�ĲƸ�ͨ������
	echo "�Ƹ�ͨ������:" . $Response->getParameter("transaction_id") . "<br/>";
	// ֧������λ����
	echo "֧�����:" . $Response->getParameter("total_fee") . "<br/>";
	// ֧�����ʱ��,��ʽΪyyyymmddhhmmss,��20091227091010
	echo "֧�����ʱ��:" . $Response->getParameter("time_end") . "<br/>";
	*/
	
	
	
}else {// δ����֧�������ߵ����쳣������ó�ʱ�������쳣
	
	
	//echo "֧��״̬˵��:" . $Response->getPayInfo() . "<br/>";
}



?>