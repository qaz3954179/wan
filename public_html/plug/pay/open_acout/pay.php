<?php 
if(Mysite::$app->config['open_acout'] != 1){
 $this->error('网站未启用账户余额支付');
}
if($userid == 0){
 $this->error('未登录账号不可使用余额支付');
}
if($this->memberinfo['cost'] < $orderinfo['allcost']){
 $this->error('账号余额不足支付此订单');
}
//更新用户数据
$this->mysql->update(Mysite::$app->config['tablepre'].'member','`cost`=`cost`-'.$orderinfo['allcost'],"uid ='".$this->memberinfo['uid']."' ");
//更新订单数据 
$orderdata['paystatus'] = 1;
$this->mysql->update(Mysite::$app->config['tablepre'].'order',$orderdata,"id ='".$orderid."' ");

$accost = $this->memberinfo['cost']-$orderinfo['allcost'];
$this->memberCls->addlog($this->memberinfo['uid'],2,2,$orderinfo['allcost'],'余额支付订单','支付订单'.$orderinfo['dno'].'帐号金额减少'.$orderinfo['allcost'].'元', $accost);
 
$link = IUrl::creatUrl('site/waitpay/orderid/'.$orderid); 
$this->success('支付订单'.$orderinfo['dno'].'成功',$link);  

?>