<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 14:16:29
         compiled from "/www/web/www_wanfeng365_com/public_html/module/html5/template/choice.html" */ ?>
<?php /*%%SmartyHeaderCode:695508797545f06bd015658-13576546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3e7c7ab1c8f98ec735805d8a5faddb921d8b910' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/module/html5/template/choice.html',
      1 => 1411484372,
      2 => 'file',
    ),
    '7001f98e981fd7c19da532596a7ba4028303d5dd' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/templates/newgreen/public/html5.html',
      1 => 1413967614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '695508797545f06bd015658-13576546',
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
  'unifunc' => 'content_545f06bd115a29_96608175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545f06bd115a29_96608175')) {function content_545f06bd115a29_96608175($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/www/web/www_wanfeng365_com/public_html/lib/Smarty/libs/plugins/function.load_data.php';
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
 
<style>

	.prer03 li p {

width: 87.5%;

border-bottom: 1px solid #dcdcdc;

margin: 0px auto;

padding: 15px;

line-height: 20px;

position: relative;

}

.ftnBd {

font-weight: bold;

}

 

.city-select {

background: url(images/li_selected.png) right no-repeat;

background-size: 18px 18px;

} 

</style>


	<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/js/jquery.js"></script> 
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/js/public.js"></script>  
   <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/js/swipe.js"></script> 
 
 

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
	 
<div id="hallist"> 
  	<header><div class="return"></div>选择城市</header> 
  <div class="container" style="padding-top:0px;background:none;margin-top:0px;background:#fff;"> 
  	<section> 
         <ul class="prer03" id="prer03">  
         	 <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"area",'fileds'=>"*",'where'=>"parent_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'limit'=>"100"),$_smarty_tpl);?>
 
         	 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
             <li class="clkitm"   ><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/html5/choice/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
" ><p   class="city-select" code="102"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</p></a></li>
             <?php } ?>
          </ul> 
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