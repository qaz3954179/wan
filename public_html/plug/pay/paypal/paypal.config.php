<?php  
 $alipay_config['business']		= ' nbnbnbn';
 $alipay_config['currency_code']			= 'mnmnmnm';
 $alipay_config['input_charset']= strtolower('utf-8');
 $alipay_config['transport'] = 'http';
 $alipay_config['cacert']    = getcwd().'\\cacert.pem';
 $notify_url= 'http://m2.waimairen.com/plug/pay/paypal/notify_url.php';
 $return_url= 'http://m2.waimairen.com/plug/pay/paypal/return_url.php';
 $cancel_return= 'http://m2.waimairen.com/plug/pay/paypal/cancel_return.php';
?>