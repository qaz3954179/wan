<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 12:23:17
         compiled from "/www/web/www_wanfeng365_com/public_html/module/card/adminpage/juanlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1654712647545eec350e22f7-90206449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb3e9faab9252f8ee2c1c120abf4016770a9805d' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/module/card/adminpage/juanlist.html',
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
  'nocache_hash' => '1654712647545eec350e22f7-90206449',
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
  'unifunc' => 'content_545eec352b5062_29055526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545eec352b5062_29055526')) {function content_545eec352b5062_29055526($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/web/www_wanfeng365_com/public_html/lib/Smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_load_data')) include '/www/web/www_wanfeng365_com/public_html/lib/Smarty/libs/plugins/function.load_data.php';
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
   	        	 	   <div class="showtop_t" id="positionname">优惠券列表</div>
   	        	 </div>
   	        	 <div class="show_content_m_t2">
   	        	 	
   	        	 	
    <div style="width:auto;overflow-x:hidden;overflow-y:auto">

      	    <div class="search">


            <div class="search_content">

            	 <form method="post" name="form1" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/card/module/juanlist"),$_smarty_tpl);?>
">

            	  <label>优惠劵限制金额：</label>
            	   <input type="text" name="searchvalue" value="<?php echo $_smarty_tpl->tpl_vars['searchvalue']->value;?>
" style="width:30px;">元
            	   <select name="orderstatus">
            	   	  <option value="all">选择优惠劵状态</option>
			   		 	  	  <option value="1" <?php if ($_smarty_tpl->tpl_vars['orderstatus']->value=='1'){?>selected<?php }?>>未使用</option>
			   		 	  	  <option value="2" <?php if ($_smarty_tpl->tpl_vars['orderstatus']->value=='2'){?>selected<?php }?>>已绑定未使用</option>
			   		 	      <option value="3" <?php if ($_smarty_tpl->tpl_vars['orderstatus']->value=='3'){?>selected<?php }?>>已使用</option>
			   		 	  	  <option value="3" <?php if ($_smarty_tpl->tpl_vars['orderstatus']->value=='3'){?>selected<?php }?>>失效</option>
            	  </select>
            	  ,生成时间
            	   从<input class="Wdate datefmt" type="text" name="starttime" id="starttime" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['starttime']->value,"%Y-%m-%d");?>
"  onFocus="WdatePicker({isShowClear:false,readOnly:true});" />
			   		 	  到<input class="Wdate datefmt" type="text" name="endtime" id="endtime" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['endtime']->value,"%Y-%m-%d");?>
"  onFocus="WdatePicker({isShowClear:false,readOnly:true});" />


            	    <input type="submit" value="提交查询" class="button">
            	 </form>
            </div>

      	</div>


           <div class="tags">



          <div id="tagscontent">

            <div id="con_one_1">

              <div class="table_td" style="margin-top:10px;">

              <form method="post" action="" onsubmit="return remind();" id="delform">

                  <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">

                    <thead>

                      <tr>

                        <th width="60px"><input type="checkbox" id="chkall" name="chkall" onclick="checkall()"></th>

                        <th align="center">id</th>
                         <th align="center">卡号</th>
                        <th align="center">卡号密码</th>
                        <th align="center">最低限制金额</th>
                        <th align="center">优惠金额</th>
                         <th align="center">使用者</th>
                         <th align="center">状态</th>
                        <th align="center">操作</th>

                      </tr>

                    </thead>

                     <tbody>
                      <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"juan",'showpage'=>"true",'fileds'=>"*",'where'=>((string)$_smarty_tpl->tpl_vars['where']->value)),$_smarty_tpl);?>

                      <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
                      <tr class="s_out" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td align="center" ><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"></td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
</td>
                        <td align="center"> <?php echo $_smarty_tpl->tpl_vars['items']->value['card'];?>
 </td>
                        <td align="center" ><?php echo $_smarty_tpl->tpl_vars['items']->value['card_password'];?>
</td>
                         <td align="center"><?php echo $_smarty_tpl->tpl_vars['items']->value['limitcost'];?>
元</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['items']->value['cost'];?>
元</td>
                        <td align="center"><?php if (empty($_smarty_tpl->tpl_vars['items']->value['username'])){?>未绑定用户<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['items']->value['username'];?>
<?php }?></td>
                        <td align="center">
                        	        <?php if ($_smarty_tpl->tpl_vars['items']->value['status']==0){?><?php if ($_smarty_tpl->tpl_vars['items']->value['endtime']>$_smarty_tpl->tpl_vars['nowtime']->value){?> 未使用<?php }else{ ?>已失效<?php }?><?php }else{ ?>

                        	        <?php echo $_smarty_tpl->tpl_vars['statustype']->value[$_smarty_tpl->tpl_vars['items']->value['status']];?>


                        	        <?php }?>



                         </td>
                        <td align="center">
                        	<a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/card/module/deljuan/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/datatype/json"),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/del.jpg"></a></td>
                      </tr>
                       <?php } ?>

                    </tbody>

                  </table>

                <div class="blank20"></div>


                </form>

                <div class="page_newc">
                 	      <div class="select_page"><a href="#" onclick="checkword(true);">全选</a>/<a href="#" onclick="checkword(false);">取消</a>
                 	     <a onclick="return remindall(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/card/module/deljuan/datatype/json"),$_smarty_tpl);?>
" class="delurl">删除</a>
                 	     <a  onclick="outchoice(this);" href="#"  data="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/card/module/outjuan"),$_smarty_tpl);?>
" class="delurl">导出选择项</a>
                 	     <a  href="<?php echo $_smarty_tpl->tpl_vars['outlink']->value;?>
" target="_blank" class="delurl">导出查询结果</a></div>
                       <div class="show_page"><ul><?php echo $_smarty_tpl->tpl_vars['list']->value['pagecontent'];?>
</ul></div>
                 </div>

                <div class="blank20"></div>

              </div>

            </div>

          </div>

        </div>


  </div>

</div>

   	        	 	
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