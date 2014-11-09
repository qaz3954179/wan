<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 13:54:48
         compiled from "/www/web/www_wanfeng365_com/public_html/templates/newgreen/site/news.html" */ ?>
<?php /*%%SmartyHeaderCode:1613932346545f01a8f31735-62053878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67353e4fe091ab80eed3f3820ee4bcaad4fe457f' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/templates/newgreen/site/news.html',
      1 => 1414600744,
      2 => 'file',
    ),
    '09253d36e82fac255f206628c179bc87c4b86a02' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/templates/newgreen/public/site.html',
      1 => 1414818496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1613932346545f01a8f31735-62053878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'sitename' => 0,
    'keywords' => 0,
    'description' => 0,
    'metadata' => 0,
    'siteurl' => 0,
    'is_static' => 0,
    'controlname' => 0,
    'member' => 0,
    'sitelogo' => 0,
    'footlink' => 0,
    'items' => 0,
    'sitebk' => 0,
    'mapname' => 0,
    'shopsearch' => 0,
    'toplink' => 0,
    'beian' => 0,
    'footerdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_545f01a945eb74_29885682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545f01a945eb74_29885682')) {function content_545f01a945eb74_29885682($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/www/web/www_wanfeng365_com/public_html/lib/Smarty/libs/plugins/function.load_data.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['info']->value['seo_key'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['info']->value['seo_content'];?>
" />
<?php echo stripslashes($_smarty_tpl->tpl_vars['metadata']->value);?>

<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/favicon.ico" /> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/shouye.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/common.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/server.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/news.css">
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
 	$(function() { 
$("img").lazyload({ 
effect : "fadeIn" 
}); 
}); 

 	</script>


 <script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	var controllername= '<?php echo $_smarty_tpl->tpl_vars['controlname']->value;?>
';
</script>

<!--[if lte IE 6]>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a'); 
    </script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/ie6.js" type="text/javascript"></script>
<![endif]--> 
</head> 
<body> 
<div id="toTop" style="left: 1212.5px; display: none;"></div>




<div class="top">
	 <div class="top_a">
	 	  <div class="top_a_show">
	 	  	<div class="top_a_show_l">
	 	  		  <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/index"),$_smarty_tpl);?>
" class=""><span class="topmcbck"></span> <div style="padding-left:25px;"><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</div></a>
	 	  	</div>
	 	  	<div class="top_a_show_r">
	 	  		<?php if (empty($_smarty_tpl->tpl_vars['member']->value['uid'])){?>
	 	  		 <div class="top_a_show_span"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/regester"),$_smarty_tpl);?>
">注册</a></div>
	 	  		 <div class="top_a_show_span">|</div>
	 	  		 <div class="top_a_show_span"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/login"),$_smarty_tpl);?>
">登陆</a></div>
	 	  		 <div class="top_a_show_span">|</div>
	 	  		 	 <a href="#">  <div class="sina"></div> </a>
	 	  		 <a href="#">  <div class="qq"></div> </a>
	 	  		 <?php }else{ ?>
	 	  		  <div class="top_a_show_span"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/loginout"),$_smarty_tpl);?>
">退出登陆</a></div>
	 	  		 <div class="top_a_show_span">|</div>
	 	  		  <div class="top_a_show_span"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/usersorder"),$_smarty_tpl);?>
">个人中心</a></div>
	 	  		 <div class="top_a_show_span">|</div>
	 	  		  <div class="top_a_show_span"><?php echo $_smarty_tpl->tpl_vars['member']->value['username'];?>
</div> 
	 	  		 <?php }?>
	 	  	
	 	  		
	 	  		 
	 	  		 
	 	  	</div>
	 	  </div>
  </div>
	 <div class="top1">
	 	 <div class="top1_show">
	 	 	
	 	  <div class="top1_logo"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['sitelogo']->value;?>
"></a></div>
	 	  <div class="top1_menu">
	 	     <ul>
	 	     	<?php if (!empty($_smarty_tpl->tpl_vars['footlink']->value)){?>
	 	     	<?php $_smarty_tpl->tpl_vars['footlink'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['footlink']->value), null, 0);?>
	 	     		<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['footlink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?> 
			          <li class="active_li" data="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeurl'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['typename'];?>
</a> </li>
			      <?php } ?>
	 	     <?php }?>
	 	     	</ul>	
	 	  	
	 	  </div>
	 	   
	 	   
	 	   
	 	 </div>
	 </div>
	
</div> 



<!--  -->

  
<div class="main-b "> 
<div class="main hc_content"> 
	
	<div class="sub_lf"> 
	      <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"newstype",'where'=>"displaytype=1 and parent_id=0",'fileds'=>"*",'limit'=>10,'orderby'=>"orderid asc"),$_smarty_tpl);?>
 
	         <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['mykey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['mykey']->value = $_smarty_tpl->tpl_vars['items']->key;
?>    
	      <h1><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</h1>
	     <ul class="ul1">
	     	  <?php if ($_smarty_tpl->tpl_vars['items']->value['type']==2){?>
	     	      <?php echo smarty_function_load_data(array('assign'=>"list2",'table'=>"newstype",'fileds'=>"*",'where'=>"parent_id=".((string)$_smarty_tpl->tpl_vars['items']->value['id']),'limit'=>20),$_smarty_tpl);?>
 
	     	       <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list2']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>    
	              <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/newstype/id/".((string)$_smarty_tpl->tpl_vars['itv']->value['id'])),$_smarty_tpl);?>
"  <?php if ($_smarty_tpl->tpl_vars['info']->value['typeid']==$_smarty_tpl->tpl_vars['itv']->value['id']){?>class="current"<?php }?>  ><?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
</a></li> 
	             <?php } ?> 
	     	      
	     	      
	     	  <?php }else{ ?>
	  		      <?php echo smarty_function_load_data(array('assign'=>"list2",'table'=>"news",'fileds'=>"id,title,typeid",'where'=>"typeid=".((string)$_smarty_tpl->tpl_vars['items']->value['id']),'limit'=>20),$_smarty_tpl);?>
 
            	  <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list2']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>    
	              <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/news/id/".((string)$_smarty_tpl->tpl_vars['itv']->value['id'])),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['info']->value['id']==$_smarty_tpl->tpl_vars['itv']->value['id']){?>class="current"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['itv']->value['title'];?>
</a></li> 
	             <?php } ?> 
	         <?php }?>
	   
	       </ul>
	    <?php } ?>       
	 
	</div>
	 
    <!--mainContent begin-->
      <div class="mainContent">
        	<div class="navTips">
            	<h1 class="ti"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</h1>
        	</div>
            
            <div class="textContent">
            	
            	
            	
            	<?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['info']->value['content']);?>

                
                
                
           </div>
        </div>
    <!--mainContent end-->
    <div class="clear"></div>
  </div> 
	
</div>
 

<div id="footer">
	
<div class="hc_btm_div">
		<div class="hc_btm_contact" style="margin-bottom:20px;">
		   <?php if (!empty($_smarty_tpl->tpl_vars['toplink']->value)){?>
	 	      <?php $_smarty_tpl->tpl_vars['toplink'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['toplink']->value), null, 0);?>
		  	  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['toplink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?> 
			         <a href="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['typename'];?>
</a> | 
			    <?php } ?>
			<?php }?>

		</div>
		<div class="hc_btm_info">@2014-2018 <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['beian']->value;?>
<?php echo stripslashes($_smarty_tpl->tpl_vars['footerdata']->value);?>
</div>
	</div>	
	
	
 </div> 
<div style="position: absolute; top: -1970px; left: -1970px;"> 
</div>  
</body>
</html>





<?php }} ?>