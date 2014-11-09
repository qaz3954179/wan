<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 11:35:56
         compiled from "/www/web/www_wanfeng365_com/public_html/module/member/template/shoplogin.html" */ ?>
<?php /*%%SmartyHeaderCode:1464144848545ee11c6885c5-79674567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bf7065abc0dfd2f1b903a8f8a658d02b0dbb87c' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/module/member/template/shoplogin.html',
      1 => 1411484372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1464144848545ee11c6885c5-79674567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sitename' => 0,
    'keywords' => 0,
    'description' => 0,
    'metadata' => 0,
    'siteurl' => 0,
    'tempdir' => 0,
    'is_static' => 0,
    'controlname' => 0,
    'allowedcode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_545ee11c77e9b9_43062130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ee11c77e9b9_43062130')) {function content_545ee11c77e9b9_43062130($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>商家登陆-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<?php echo stripslashes($_smarty_tpl->tpl_vars['metadata']->value);?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/favicon.ico" /> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/shangjialogin.css"> 
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquerynew.js" type="text/javascript" language="javascript"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/allj.js" type="text/javascript" language="javascript"></script>
 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/artDialog.js?skin=blue"></script> 
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/template.min.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.lazyload.min.js" type="text/javascript" language="javascript"></script>
  <script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	var controllername= '<?php echo $_smarty_tpl->tpl_vars['controlname']->value;?>
';
</script>
<script>
	$(function(){
		var cilentHeight = document.documentElement.clientHeight;
		var topheight = cilentHeight-50;
		$("#sjfooter").css("top",topheight+"px");

	});
</script>

</head>
<body>

<div id="sjtop">

</div>

<div id="sjloginBg">
	
</div>
<div id="sjlogin">
	<div class="sjlogin_title">
		<!-- <span>商家管理后台登陆系统</span> -->
	</div>
	<div class="sj_cont">
		<div class="sj_cont_left">
			<div class="sj_cont_title">
				<span><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/sjzizhuloginBg1.png" /></span>
			</div>
			<div class="sj_cont_bot">
				<span style=" margin-right:10px; float:left;width:30px; height:30px;">
					<img width="30" height="30" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/welcome.png" />
				</span>
				<span style=" float:left;width:300px; height:30px;">欢迎使用商家自助管理系统后台，请在右边输入用户名和密码登入系统，如账号遇见问题，请联系管理员。</span>
				<div style="clear:both;"></div>
			</div>
		</div>
		
		<div class="sj_cont_right" style="margin-top:10px;">
		<form id="loginForm" method="post" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/shoploginin/datatype/json"),$_smarty_tpl);?>
">
			<div class="js_username">
			<input class="unameinput" placeholder="用户名" type="text" name="uname" id="uname" value="" />
			</div>
			<div class="js_username">
			<input class="upasinput" placeholder="密码"  type="password" name="pwd" id="pwd" value="" />
			</div>
			  <?php if ($_smarty_tpl->tpl_vars['allowedcode']->value==1){?>
				<div class="js_username"style="width:250px; background:none; margin-bottom:0px;">
				<input style="float:left;width:90px;padding-left:10px; " name="Captcha" placeholder="验证码" type="text" name="" value="" />
				<div style="width:95px;float:left; padding-left:5px;"> <img title="点击可更换验证码" onclick="javascript:freshcode();" src="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/getCaptcha"),$_smarty_tpl);?>
" id="captchaimg" style=" width:80px;height:38px;line-height:38px;">
				<a style="position:absolute; color: #cbcbcb;font-size: 12px;padding-top: 10px;padding-left: 5px;" href="javascript:freshcode();" >刷新图片</a> </div>
				<div style="clear:both;"></div>
				<br>
				</div>
			<?php }?>
		<!-- 	
			<input style=" width:15px; margin-top:8px; height;15px;" type="checkbox" value="" name="" checked />
			<span class="remme">记住我</span><br> -->
			<div style="width:221px; margin:0 auto; margin-top:20px; height:40px;">
				<img id="sjloginin" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/sj_login_bg.png" />
			</div>
		</form>
	</div>
		 <script type="text/javascript">
	$('#sjloginin').click(function(){
		
	    subform('<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/useredit"),$_smarty_tpl);?>
',$('#loginForm'));
	})
</script>
	</div>
	
</div>

<div id="sjfooter" >
	
</div>
<div id="sjzztop">
	<span class="topfont"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</a></span>
</div>
<div id="sjzzdibu">
<div style="height:20px;"></div>
	<center><span class="footerfont" style="">@2008-2014 <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
版权所有
</span></center>
</div>
</body>
</html>
<?php }} ?>