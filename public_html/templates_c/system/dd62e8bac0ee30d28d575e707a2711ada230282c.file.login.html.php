<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 12:09:50
         compiled from "/www/web/www_wanfeng365_com/public_html/module/html5/template/login.html" */ ?>
<?php /*%%SmartyHeaderCode:161146582545ee90e2082c1-37355219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd62e8bac0ee30d28d575e707a2711ada230282c' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/module/html5/template/login.html',
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
  'nocache_hash' => '161146582545ee90e2082c1-37355219',
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
  'unifunc' => 'content_545ee90e2e1425_27361763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ee90e2e1425_27361763')) {function content_545ee90e2e1425_27361763($_smarty_tpl) {?><!DOCTYPE html>
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
 
<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/css/member.css">   

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
 	$(function(){
 	$('#logSubmit').click(function(){ 
 		var checkuname = $('#logEmailOrPhone').val();
 		if(checkuname != ''){
 		  
  	 	$('#loading').toggle(); 
  	  	var info = {'uname':$('#logEmailOrPhone').val(),'pwd':$('#logPassword').val(),'logintype':'html5'}; 
  	 	  var  url = siteurl+'/index.php?controller=member&action=login&datatype=json&random=@random@' 
  	 	   $.ajax({ 
             url: url.replace('@random@', 1+Math.round(Math.random()*1000)), 
            dataType: "json", 
            data:info, 
            success:function(content) {  
            	$('#loading').toggle(); 
            	if(content.msg ==  false){
            		 window.location.href= siteurl+'/index.php?controller=html5&action=member';
            	}else{ 
            	   Tmsg(content.msg);
              }
            	
            }, 
            error:function(){ 
            	$('#loading').toggle();

            } 
         });  
    }else{
    	Tmsg('用户帐号不能为空');
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
	 
 <div id="hallist">

  	<header><div class="return"></div>用户登陆</header>  
  <div class="container" style="padding-top:0px;background:none;margin-top:0px;"> 

	    <div class="wrap"> 

	    	<section class="muli" style="display: block;">

	    		<div class="colfff">

	    			<div class="widCen warp01">

	    				<input type="text" class="inputInp" placeholder="输入帐号名/邮箱" id="logEmailOrPhone" name="emailOrPhone">

	    				<input type="password" class="inputInp" placeholder="请输入密码" id="logPassword" name="password" autocomplete="off" required="required">

	    			</div>

	    		</div>

	    		<div class="borBm01"><input type="BUTTON" class="inputBtn" value="登录" id="logSubmit"></div></section> 

	  </div> 

	    <section class="login_r widCen"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/html5/reg"),$_smarty_tpl);?>
"><span>免费注册</span><span>&gt;&gt;</span></a><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/html5/forgot"),$_smarty_tpl);?>
">忘记密码？</a></section> 


   
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