<?php
//---------------------------------------------------------
//�Ƹ�ͨAPP���յ��Ƹ�ͨ��֧���ɹ�֪ͨ��ͨ���˽ӿڲ�ѯ��������ϸ�����
//��ȷ��֪ͨ�ǴӲƸ�ͨ����ģ�û�б��۸Ĺ���
//---------------------------------------------------------

require_once ("../classes/NotifyQueryRequest.class.php");
require_once ("tenpay_config.php");


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
	// �Ѿ�֧���Ƹ�ͨapp������
	echo "֧���ɹ���Ӧ�ö����ţ�" . $Response->getParameter("out_trade_no") . "<br/>";
	// �Ƹ�ͨapp�����Ŷ�Ӧ�ĲƸ�ͨ������
	echo "�Ƹ�ͨ������:" . $Response->getParameter("transaction_id") . "<br/>";
	// ֧������λ����
	echo "֧�����:" . $Response->getParameter("total_fee") . "<br/>";
	// ֧�����ʱ��,��ʽΪyyyymmddhhmmss,��20091227091010
	echo "֧�����ʱ��:" . $Response->getParameter("time_end") . "<br/>";
	
	
	
}else {// δ����֧�������ߵ����쳣������ó�ʱ�������쳣
	
	
	echo "֧��״̬˵��:" . $Response->getPayInfo() . "<br/>";
}

?>
