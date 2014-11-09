<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 11:39:59
         compiled from "/www/web/www_wanfeng365_com/public_html/module/area/adminpage/adminpsset.html" */ ?>
<?php /*%%SmartyHeaderCode:21026299545ee20f1d5c55-61975229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97880bb18f7cca3041018c986b39e54146451ece' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/module/area/adminpage/adminpsset.html',
      1 => 1411484372,
      2 => 'file',
    ),
    '0090b3e9b7414e35c4a9173af0a742c60690dc90' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/templates/adminpage/public/admin.html',
      1 => 1414599780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21026299545ee20f1d5c55-61975229',
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
  'unifunc' => 'content_545ee20f417871_52441199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ee20f417871_52441199')) {function content_545ee20f417871_52441199($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/web/www_wanfeng365_com/public_html/lib/Smarty/libs/plugins/modifier.date_format.php';
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

<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/plugins/iframeTools.js"></script>
 
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
   	        	 	   <div class="showtop_t" id="positionname">网站配送设置</div>
   	        	 </div>
   	        	 <div class="show_content_m_t2">
   	        	 	
   	        	 	
 <div style="width:auto;overflow-x:hidden;overflow-y:auto"> 
          <div class="tags">
          	<?php $_smarty_tpl->tpl_vars['pssetinfo'] = new Smarty_variable(array(), null, 0);?>
           <?php if (!empty($_smarty_tpl->tpl_vars['psset']->value)){?>
	 	           <?php $_smarty_tpl->tpl_vars['pssetinfo'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['psset']->value), null, 0);?>
	 	       <?php }?>
          <div id="tagscontent">
            <form method="post" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/area/module/savepsset/datatype/json"),$_smarty_tpl);?>
" onsubmit="return subform('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/area/module/adminpsset"),$_smarty_tpl);?>
',this);">
              <div>
                <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">
                  <tbody>
                  	 <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="ffffff">
                      <td class="left">是否开启网站配送</td>
                      <td><input type="checkbox" name="opensitesend"  value="1" <?php if ($_smarty_tpl->tpl_vars['opensitesend']->value==1){?>checked<?php }?> > 勾选后保存开启 </td>
                    </tr> 
                     <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="ffffff">
                      <td class="left">店铺是否可自行设置配送费</td>
                      <td><input type="checkbox" name="openshopsend"  value="1" <?php if ($_smarty_tpl->tpl_vars['openshopsend']->value==1){?>checked<?php }?> > 勾选后保存允许 </td>
                    </tr> 
                    <?php if ($_smarty_tpl->tpl_vars['opensitesend']->value==1){?>
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="ffffff">
                      <td class="left">选择地区选择方式</td>
                      <td><input type="radio" name="locationtype"  value="1" <?php if (isset($_smarty_tpl->tpl_vars['pssetinfo']->value['locationtype'])&&$_smarty_tpl->tpl_vars['pssetinfo']->value['locationtype']==1){?>checked<?php }?> >百度地图 <input type="radio" name="locationtype"  value="2" <?php if (isset($_smarty_tpl->tpl_vars['pssetinfo']->value['locationtype'])&&$_smarty_tpl->tpl_vars['pssetinfo']->value['locationtype']==2){?>checked<?php }?>>文字 </td>
                    </tr> 
                    
                    <tr onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="ffffff">
                      <td class="left">设置配送方式</td>
                      <td>
                      	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['mykey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pestypearr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['mykey']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
                      	   <input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['mykey']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['mykey']->value==$_smarty_tpl->tpl_vars['pssetinfo']->value['pstype']){?>checked<?php }?> name="pstype" <?php if ($_smarty_tpl->tpl_vars['pssetinfo']->value['locationtype']==1){?> <?php if (in_array($_smarty_tpl->tpl_vars['mykey']->value,array(2))){?>disabled<?php }?> <?php }else{ ?> <?php if (in_array($_smarty_tpl->tpl_vars['mykey']->value,array(4))){?>disabled<?php }?> <?php }?> > <?php echo $_smarty_tpl->tpl_vars['items']->value;?>

                      	<?php } ?> 
                      </td>
                    </tr> 
                    <tr id="allps" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="ffffff" <?php if (isset($_smarty_tpl->tpl_vars['pssetinfo']->value['pstype'])&&$_smarty_tpl->tpl_vars['pssetinfo']->value['pstype']==1){?><?php }else{ ?>style="display:none;"<?php }?>>
                      <td class="left">统一配送费</td>
                      <td><input type="text" name="allpay"   value="<?php echo $_smarty_tpl->tpl_vars['pssetinfo']->value['psvalue1'];?>
" class="skey" style="width:50px;" >元</td>
                    </tr> 
                     <tr id="mapay1" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="ffffff" <?php if (isset($_smarty_tpl->tpl_vars['pssetinfo']->value['pstype'])&&$_smarty_tpl->tpl_vars['pssetinfo']->value['pstype']==4){?><?php }else{ ?>style="display:none;"<?php }?>>
                      <td class="left">1公里内配送费</td>
                      <td><input type="text" name="mapay1"   value="<?php echo $_smarty_tpl->tpl_vars['pssetinfo']->value['psvalue1'];?>
" class="skey" style="width:50px;" >元</td>
                    </tr> 
                     <tr id="mapay2" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="ffffff" <?php if (isset($_smarty_tpl->tpl_vars['pssetinfo']->value['pstype'])&&$_smarty_tpl->tpl_vars['pssetinfo']->value['pstype']==4){?><?php }else{ ?>style="display:none;"<?php }?>>
                      <td class="left">3公里内配送费</td>
                      <td><input type="text" name="mapay2"   value="<?php echo $_smarty_tpl->tpl_vars['pssetinfo']->value['psvalue2'];?>
" class="skey" style="width:50px;" >元</td>
                    </tr> 
                     <tr id="mapay3" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="ffffff" <?php if (isset($_smarty_tpl->tpl_vars['pssetinfo']->value['pstype'])&&$_smarty_tpl->tpl_vars['pssetinfo']->value['pstype']==4){?><?php }else{ ?>style="display:none;"<?php }?>>
                      <td class="left">6公里内配送费</td>
                      <td><input type="text" name="mapay3"  value="<?php echo $_smarty_tpl->tpl_vars['pssetinfo']->value['psvalue3'];?>
" class="skey" style="width:50px;" >元</td>
                    </tr> 
                      <tr id="caipay1" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="ffffff" <?php if (isset($_smarty_tpl->tpl_vars['pssetinfo']->value['pstype'])&&$_smarty_tpl->tpl_vars['pssetinfo']->value['pstype']==5){?><?php }else{ ?>style="display:none;"<?php }?>>
                      <td class="left">基本费</td>
                      <td><input type="text" name="caipay1"  value="<?php echo $_smarty_tpl->tpl_vars['pssetinfo']->value['psvalue1'];?>
" class="skey" style="width:50px;" >元</td>
                    </tr> 
                       <tr id="caipay2" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="ffffff" <?php if (isset($_smarty_tpl->tpl_vars['pssetinfo']->value['pstype'])&&$_smarty_tpl->tpl_vars['pssetinfo']->value['pstype']==5){?><?php }else{ ?>style="display:none;"<?php }?>>
                      <td class="left">自增</td>
                      <td><input type="text" name="caipay2"  value="<?php echo $_smarty_tpl->tpl_vars['pssetinfo']->value['psvalue2'];?>
" class="skey" style="width:50px;" >元</td>
                    </tr> 
                    <?php }?>
                    
                  
                  </tbody> 
                </table>
              </div>
              <div class="blank20"></div> 
               <input type="submit" value="确认提交" class="button">  
            </form>
          </div>
        </div>
        <div class="blank20"></div> 
      
      </div>
      <div class="clear"></div>
    </div>
    
    
    
  </div> 
<script>
 $("input[name='locationtype']").live("click", function() {   
 	   var checkvalue = $("input[name='locationtype']:checked").val();
 	   $("input[name='pstype']").attr('checked',false);
 	   $("input[name='pstype']").attr('disabled',false);
 	   if(checkvalue == 1){
 	   	$("input[name='pstype']").eq(1).attr('disabled',true); 
 	   }else{
 	   	$("input[name='pstype']").eq(3).attr('disabled',true);
 	   }
 	    
 });
 $("input[name='pstype']").live("click", function() { 
 	  var checkvalue =  $("input[name='pstype']:checked").val();
 	  $('#allps').hide();
 	  $('#mapay1').hide();
 	 	$('#mapay2').hide();
 	  $('#mapay3').hide();
 	  $('#caipay1').hide();
 	 	$('#caipay2').hide();
 	  if(checkvalue ==  1){
 	  	$('#allps').show();
 	  }else if(checkvalue == 4){
 	  	$('#mapay1').show();
 	  	$('#mapay2').show();
 	  	$('#mapay3').show();
 	  }else if(checkvalue == 5){
 	  	$('#caipay1').show();
 	  	$('#caipay2').show();
 	  }else{
 	  }
 });
 
 
 
 //
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