<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 11:18:12
         compiled from "/www/web/www_wanfeng365_com/public_html/module/system/adminpage/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1111304489545edcf49339e9-30292032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bcebd70c31c25912ae955e361630806c334dc03' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/module/system/adminpage/index.html',
      1 => 1411867932,
      2 => 'file',
    ),
    '0090b3e9b7414e35c4a9173af0a742c60690dc90' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/templates/adminpage/public/admin.html',
      1 => 1414599780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1111304489545edcf49339e9-30292032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'siteurl' => 0,
    'is_static' => 0,
    'admininfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_545edcf4ae8452_20897490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545edcf4ae8452_20897490')) {function content_545edcf4ae8452_20897490($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/web/www_wanfeng365_com/public_html/lib/Smarty/libs/plugins/modifier.date_format.php';
?> <html xmlns="http://www.w3.org/1999/xhtml"><head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta http-equiv="Content-Language" content="zh-CN"> 
<meta content="all" name="robots"> 
<meta name="description" content=""> 
<meta content="" name="keywords"> 
<title>后台管理中心 </title>  
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/admin1.css"> 
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/public.js" type="text/javascript" language="javascript"></script>
 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/artDialog.js?skin=blue"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/template.min.js" type="text/javascript" language="javascript"></script>

 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/js/kindeditor/kindeditor.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/datepicker/WdatePicker.js" type="text/javascript" language="javascript"></script> 
 
<script>
	var menu = null;
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	if(screen.width > 1359){
		
		$('.newtop').css('width',screen.width);
		$('.newmain').css('width',screen.width);
		$('.newfoot').css('width',screen.width);
	}  
</script> 
</head> 
<body> 
<div id="cat_zhe" class="cart_zhe" style="display:none;"></div>
<div id="cat_tj" class="cart_out_cat" style="display:none;"> 数据提交中..</div>
<div class="newtop">
	  <div class="newadddiv">
	  <div class="newlogo">
	  	  <div class="imglogo"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/logo.png"> </a></div>
	  </div>
	  <div class="newtopnav">
	  	 <ul>
	  	  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tempdir']->value)."/public/admin_module.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
	  	 	<ul>
	  	
	  </div>
	</div>
</div> 
<div style="clear:both;"></div>
<div class="newmain">
	<!-- 提示导航-->
   <div class="top_nav">
	    <div class="nav2 datainfo">
	    	<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
  
	    </div>
	    <div class="nav2 positioninfo" id="positionname2">
	    	网站首页
	    </div>
	    <div class="nav2 orderinfo">
	    	您有今天有0 个订单待审核
	    </div>
   </div>
   <!-- 主内容区-->
   <div class="newmain_all">
   	 <!-- 主内左区-->
   	 <div class="left_content">
   	 	   <!-- 主内左区用户信息-->
   	 	   <div class="userinfo">
   	 	   	   <div class="user_area">
   	 	   	   	      <div class="user_name">
   	 	   	   	      	<?php echo $_smarty_tpl->tpl_vars['admininfo']->value['username'];?>

   	 	   	   	      </div>
   	 	   	   	      <div class="content_url">
   	 	   	   	      	 <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/adminloginout"),$_smarty_tpl);?>
" class="out">退出</a> 
   	 	   	   	      	 <a onclick="modifypwd();" href="#">修改密码</a>
   	 	   	   	      </div>
   	 	   	  </div>
   	 	   	  <div class="now_name" id="nowactioninfo">
   	 	   	    	网站首页
   	 	   	    </div>
   	 	   </div>
   	 	   <!-- 主内左区导航条-->
   	 	    <div class="left_nav">
   	 	    	  <ul> 
   	 	    	  	
   	 	    	  	
   	 	    	  	 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tempdir']->value)."/public/admin_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   	 	    	 
   	 	    	     <li style="text-align:center;"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
" style="color:#0076cf;" target="_blank">返回网站首页</a></li>
   	 	    	  </ul>
   	 	    </div>
   	 	    <div class="left_navend">
   	 	    </div>
   	 	    <!-- 主内左区天气预报-->
   	 	    <div class="weather" id="weatherinfo" style="display:none;">
   	 	    	 <div class="todayweacher">
   	 	    	      <div class="weacher_left">
   	 	    	      	 <div id="wtoday_img"> </div>
   	 	    	      	 <div><span id="wcity" style="padding-right:5px;"></span><span id="wqihou"></span></div>
   	 	    	      </div>
   	 	    	      <div class="weacher_right" id="wwendu">
   	 	    	      	 
   	 	    	      </div>	 
   	 	    	 </div>
   	 	    	 <div style="clear:both;">
   	 	    	 	   <div class="tom">
   	 	    	 	   	    <div id="tom_1" class="tom_img"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_day"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_wendu"></div>
   	 	    	 	   	
   	 	    	 	   	</div>
   	 	    	 	   <div class="tom">
   	 	    	 	   	    <div id="tom_tom" class="tom_img"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_tday"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_twendu"></div>
   	 	    	 	   	</div>
   	 	    	 </div>
   	 	    </div>
   	 	     
   	  </div>
   	  
 
 
  
 
 
 <div class="right_content">
	<div class="show_content_m">
   	        	 <div class="show_content_m_ti">
   	        	 	   <div class="showtop_t" id="positionname">网站信息</div>
   	        	 </div>
   	        	 <div class="show_content_m_t2">
   	        	 	
   	        	 	 
</div>
</div>
</div> 
   <div class="right_content">
   	  	
   	  	
   	  	  <div class="showpart_1">
   	        <div class="show_content_m">
   	        	 
   	        	 <div class="show_content_m_t2">
   	        	 	    <div class="part_main_1">
   	        	 	    	  <ul>
   	        	 	    	  	<li>
   	        	 	    	  		<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/order/module/orderlist"),$_smarty_tpl);?>
">
	  	 	  	                      <div><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/kj1.jpg"></div>
	  	 	  	                     <div class="libtitle">最新订单</div>
	  	 	  	                </a> 
   	        	 	    	  	</li>
   	        	 	    	  	<li>
   	        	 	    	  		<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/shop/module/adminshoplist"),$_smarty_tpl);?>
">
	  	 	  	                      <div><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/kj2.jpg"></div>
	  	 	  	                     <div class="libtitle">店铺管理</div>
	  	 	  	                </a> 
   	        	 	    	  	</li>
   	        	 	    	  	<li>
   	        	 	    	  		<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/area/module/adminarealist"),$_smarty_tpl);?>
">
	  	 	  	                      <div><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/kj3.jpg"></div>
	  	 	  	                     <div class="libtitle">配送区域</div>
	  	 	  	                </a> 
   	        	 	    	  	</li>
   	        	 	    	  	<li>
   	        	 	    	  		<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/news/module/addnews"),$_smarty_tpl);?>
">
	  	 	  	                      <div><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/kj4.jpg"></div>
	  	 	  	                     <div class="libtitle">添加新闻</div>
	  	 	  	                </a> 
   	        	 	    	  	</li>
   	        	 	    	  	<li>
   	        	 	    	  		<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/order/module/orderyjin"),$_smarty_tpl);?>
">
	  	 	  	                      <div><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/kj5.jpg"></div>
	  	 	  	                     <div class="libtitle">商家结算</div>
	  	 	  	                </a> 
   	        	 	    	  	</li>
   	        	 	    	  	<li>
   	        	 	    	  		<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/card/module/sendtasklist"),$_smarty_tpl);?>
">
	  	 	  	                      <div><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/kj6.jpg"></div>
	  	 	  	                     <div class="libtitle">短信群发</div>
	  	 	  	                </a> 
   	        	 	    	  	</li>
   	        	 	    	  	<li>
   	        	 	    	  		<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/loginlist"),$_smarty_tpl);?>
">
	  	 	  	                      <div><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/kj7.jpg"></div>
	  	 	  	                     <div class="libtitle">接口管理</div>
	  	 	  	                </a> 
   	        	 	    	  	</li>
   	        	 	    	  	 
   	        	 	    	  </ul>
   	        	    	</div>
   	        	 </div>
   	        	 <div class="show_content_m_t3">
   	        	 </div>
   	        	 
   	        </div>
   	       <!-- show_content_m结束-->
   	        
   	      </div>
   	      <!-- 第一部分结束-->
   	      <!-- 第二部分开始-->
   	      <div class="showpart_2">
   	      	 <div class="smallpart">
   	      	 	   <div class="small_top"> 系统信息 </div>
   	      	 	   <div class="small_content">
   	      	 	   	<table width="100%" border="0" cellspacing="0" cellpadding="0">
   	      	 	   		<tr>
   	      	 	   			  <td class="tdcls1">服务器当前时间</td><td class="tdcls2"><?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
</td>
   	      	 	   		</tr>
   	      	 	   		<tr>
   	      	 	   			  <td class="tdcls1">PHP版本</td><td class="tdcls2"><?php echo phpversion();?>
</td>
   	      	 	   		</tr>
   	      	 	   		<tr>
   	      	 	   			  <td class="tdcls1">官方网站地址：</td><td class="tdcls2">#</td>
   	      	 	   		</tr>
   	      	 	   		<tr>
   	      	 	   			  <td class="tdcls1">版权所有：</td><td class="tdcls2">万丰时代</td>
   	      	 	   		</tr>
   	      	 	   	</table>
   	      	 	   	<div style="width:530px;height:110px; padding:15px 0px; text-align:center; margin:0 auto;">
						<a target="_blank" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/order/module/ordertoday"),$_smarty_tpl);?>
"><img style="margin-right:50px;"  width="180"  src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/orderquickSystem.png" />
						</a>
						<a target="_blank" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/order/module/adminfastfoods"),$_smarty_tpl);?>
"><img width="180"  src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/kefudaikeSystem.png" />
						</a>
					</div>
   	      	 	   	</div>
   	      	</div>
   	      	<style>
   	      		.tdcls1{line-height:45px;}
   	      		.tdcls3{width:50%;font-weight:bold;text-align:right;line-height:45px;}
   	      		.ac{border-right: 1px solid #e5e5e5;}
   	      		.tdcls3 a{width:100px;color:#0076cf;padding-left:10px;padding-right:10px;}
   	      		</style>
   	      	<div class="smallpart">
   	      		   <div class="small_top"> 数据统计 </div>
   	      		   <div class="small_content">
   	      		   		<table width="100%" border="0" cellspacing="0" cellpadding="0">
   	      	 	   		    <tr>
   	      	 	   			  <td class="tdcls3 ac">	今日总订单<a ><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['dayallorder'];?>
</a></td><td class="tdcls3">已上线商家<a ><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['onlineshop'];?>
</a></td>
   	      	 	   		</tr>
   	      	 	   		<tr>
   	      	 	   			  <td class="tdcls3 ac">今日待审核订单<a ><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['dayworder'];?>
</a></td><td class="tdcls3">待审核商家<a ><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['wshop'];?>
</a></td>
   	      	 	   		</tr>
   	      	 	   		<tr>
   	      	 	   			  <td class="tdcls3 ac">今日已审核订单<a ><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['dayporder'];?>
</a></td><td class="tdcls3">会员总数<a ><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['pmember'];?>
</a></td>
   	      	 	   		</tr>
   	      	 	   		<tr>
   	      	 	   			  <td class="tdcls3 ac">本月已完成订单<a ><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['monthallorder'];?>
</a></td><td class="tdcls3">商城订单<a ><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['market'];?>
</a></td>
   	      	 	   		</tr>
   	      	 	   			<tr>
   	      	 	   			  <td class="tdcls3 ac">已完成订单总量<a ><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['allorder'];?>
</a></td><td class="tdcls3">商品数量<a ><?php echo $_smarty_tpl->tpl_vars['tjdata']->value['marketg'];?>
</a></td>
   	      	 	   		</tr>
   	      	 	   	 




   	      	 	   	  </table> 
   	      		   	</div>
   	      	</div>
   	      





   	      	
   	      </div>
   	      <!-- 第二部分结束-->
   	  </div>
   	  <!-- right_content 结束-->
   	  
   </div>
   <!-- newmain_all 结束-->
</div>	
<script>
	$(function(){ 
	 $('.right_content').eq(0).hide();
	 $('.show_content_m_t3').hide();
	});
	</script>
<!--newmain 结束-->

   	        	 	
               <div class="show_content_m_t3">
   	        	 </div>
   	        	 
   	       </div>
   	       <!-- show_content_m结束-->


   	  </div>
   	  <!-- right_content 结束-->
   	  
   </div>
   <!-- newmain_all 结束-->
</div>	
	
<!--newmain 结束-->
















<div style="clear:both;"></div>
<div class="newfoot">
	
	  版权所有北京万丰时代科技有限公司</div>	
<script>
$(function(){ 
 $('.show_page a').wrap('<li></li>');
 $('.show_page').find('.current').eq(0).parent().css({'background':'#f60'}); 
});
   
</script>
</body>
</html>





<?php }} ?>