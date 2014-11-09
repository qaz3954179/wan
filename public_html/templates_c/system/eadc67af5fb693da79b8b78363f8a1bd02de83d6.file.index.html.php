<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 12:09:25
         compiled from "/www/web/www_wanfeng365_com/public_html/module/html5/template/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1027483671545ee8f581f658-84165014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eadc67af5fb693da79b8b78363f8a1bd02de83d6' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/module/html5/template/index.html',
      1 => 1415368614,
      2 => 'file',
    ),
    '7001f98e981fd7c19da532596a7ba4028303d5dd' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/templates/newgreen/public/html5.html',
      1 => 1413967614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1027483671545ee8f581f658-84165014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'siteurl' => 0,
    'is_static' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_545ee8f594bb76_82841144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ee8f594bb76_82841144')) {function content_545ee8f594bb76_82841144($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/www/web/www_wanfeng365_com/public_html/lib/Smarty/libs/plugins/function.load_data.php';
?><!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<title><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title> 
	 
	<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/css/public.css">   
  <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/css/index.css">   
 

	<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/js/jquery.js"></script> 
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/js/public.js"></script>  
   <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/js/swipe.js"></script> 
 
   <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/js/pos.js"></script> 
 <script>
 	$(function(){ 
 	      var bullets = document.getElementById('abdcd').getElementsByTagName('span');
 	      var slider =  Swipe(document.getElementById('slider'), {
           auto: 3000,
           continuous: true,
           callback: function(pos) { 
              var i = bullets.length;
              while (i--) {
                bullets[i].className = ' ';
              }
              bullets[pos].className = 'on'; 
           }
        });  
}); 
</script>

<script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
</script>
 <script type="text/javascript" name="baidu-tc-cerfication" src="http://apps.bdimg.com/cloudaapi/lightapp.js#eb0a315369c4f60074e72f7079c87fb8"></script><script type="text/javascript">window.bd && bd._qdc && bd._qdc.init({app_id: 'fb7bfde77727fd99a32117ab'});</script>
</head>
<body> 
	<div id="loading" style="display: block;"><div class="loadingbox"><section class="ffffbox"><div class="loadingpice"></div></section></div></div>
	 
<div id="index">
  	 <header><img src="<?php echo $_smarty_tpl->tpl_vars['html5logo']->value;?>
" style="height:25px;margin-top: 5px;" id="sitelogo"></header>
  	<div class="container">
  		<section> 
  			<section id="slider" class="swipe" style="visibility: visible;">
  				<div class="swipe-wrap">
  				  <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"adv",'fileds'=>"*",'limit'=>"5",'where'=>"advtype='html5lunbo'"),$_smarty_tpl);?>
 
  				  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
  				   <div class="wrap" ><img src="<?php echo $_smarty_tpl->tpl_vars['items']->value['img'];?>
" width="100%" alt=""></div>
  				  <?php } ?>
  				</div>
  			 <div class="bgboxgo">
  						<div class="botton-box mBxCm" id="abdcd">
  							 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
  							    <span class="on"></span>
  							 <?php } ?>
  					 </div>
  				</div>
  			</section>
  			
  			<section class="search mShadowBm">
  				<div class="cont">
  					<a id="cityname" class="select"></a>
  					<form id="searchForm" action="search.html">
  						<div class="inputPp">
  							<input type="text" id="supplierName" name="supplierName" class="inp" placeholder="输入小区名/楼宇名/餐厅名">
  						</div>
  				  </form>
  				</div>
  			</section>
  			
  			<nav class="clearfix">
  				<ul>
  					<li class="n1 clkitm" id="waiMai"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/html5/shoplist"),$_smarty_tpl);?>
"><strong>下订单</strong><p>周边商家</p></a></li>
  					<li class="n2 clkitm" id="tangShi"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/html5/member"),$_smarty_tpl);?>
"><strong>我的订单</strong><p>我的账户信息</p></a></li>
  					<li class="n3 clkitm" id="dingTai"> <a href="#"><strong>社区服务</strong><p>敬请期待</p></a></li>
  					<li class="n4 clkitm" id="paiDui"><a href="#"><strong>礼品中心</strong><p>积分兑换</p></a></li> 
  				</ul>
  			</nav>
  	</section>

   
  	<footer>
  		<nav>
  			<ul>
  				<li id="homeindex"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/html5/index"),$_smarty_tpl);?>
">首页</a></li>
  	    	<li id="footerorderlist"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/html5/order"),$_smarty_tpl);?>
">订单</a></li>
  	    	<li id="favorate"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/html5/collect"),$_smarty_tpl);?>
">收藏</a></li>
  	    	<li id="opinion"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/html5/ask"),$_smarty_tpl);?>
">意见反馈</a></li>
  	    </ul>
  	  </nav>
  	  <p>Copyright © 2011-2014 Powered by <font id="sitetitle"></font></p>
  	</footer>
  	
  </div>
   
</div> 
 <script>
 	$(function(){  
 	   $('#loading').hide(); 
  });
  </script>
</body>
</html>
 <?php }} ?>