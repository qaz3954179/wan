<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 11:24:46
         compiled from "/www/web/www_wanfeng365_com/public_html/templates/newgreen/site/waitpay.html" */ ?>
<?php /*%%SmartyHeaderCode:668095512545ede7e1a3787-85550563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4557c84ed6888c4ae04e57e31dc603beed64f1a' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/templates/newgreen/site/waitpay.html',
      1 => 1414601778,
      2 => 'file',
    ),
    '09253d36e82fac255f206628c179bc87c4b86a02' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/templates/newgreen/public/site.html',
      1 => 1414818496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '668095512545ede7e1a3787-85550563',
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
  'unifunc' => 'content_545ede7e480471_21960505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ede7e480471_21960505')) {function content_545ede7e480471_21960505($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/web/www_wanfeng365_com/public_html/lib/Smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 下单成功提示-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
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

<div class="mmbg" <?php if (!empty($_smarty_tpl->tpl_vars['sitebk']->value)){?>style="background:url(<?php echo $_smarty_tpl->tpl_vars['sitebk']->value;?>
) repeat;"<?php }?>></div> 

<!-- <div class="mmbg" <?php if (!empty($_smarty_tpl->tpl_vars['sitebk']->value)){?>style="background:#ffffff;"<?php }?>></div>  -->

  <div class="top2">
	  	 <div class="top2_content">
	  	 	  <div class="hc_addr">
					   <div class="hc_addr_change"><span class="hc_change"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/guide"),$_smarty_tpl);?>
">[更改地址]</a> </span><span class="hc_address">地址：<a style="color:#000;" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['mapname']->value)===null||$tmp==='' ? '' : $tmp);?>
</a></span></div>
				  </div>
				  <div class="hc_search">
					<div class="hc_search_left"></div>
					<div class="hc_search_midd"><input id="search_input" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shopsearch']->value)===null||$tmp==='' ? '搜索店铺' : $tmp);?>
" text="搜索店铺" onfocus="cls(this)" onblur="res(this)"   onkeyprese="pre(this)" type="text6" onkeydown="if(event.keyCode==13)search();" style="padding:0;padding-left:30px;;margin-bottom:0;margin-top:1px;width: 280px;height: 47px;line-height:47px; outline:none;border:0;"  ></div>
					<div class="hc_searching"></div>
					<div class="clear"></div>
					<script type="text/javascript">
						$('.hc_searching').click(function(){
							search();
						})
						
						function search()
						{
							var name = $('#search_input').val();
							if(name != '' && name != $('#search_input').attr('text')) 
							{
								var url = siteurl+'/index.php?controller=site&action=index&shopsearch='+name; 
								location.href=url;
							}
						}
						function cls(obj)
						{
							if($(obj).attr('text') == $(obj).val())
							{
								$(obj).val('');
								$('#search_input').css('color','#000');
							}  
						}
						function res(obj)
						{
							if($(obj).val() == '')
							{
								$('#search_input').css('color','#666');
								$(obj).val($(obj).attr('text'));
							}
						}
						$(document).ready(function(){
							$('#search_input').css('color','#666');
						});
					</script>
				</div>
				  
	  	 	</div>
	 </div>


<div id="content">
	<form id="loginForm" method="post">
<div class="hc_content">
		<div class="hc_login">
			<div class="hc_login_head"><span class="hc_login_head_span">下单成功提示</span></div>
			<div class="hc_login_content">
					<div class="showorder">
						 <table width="100%"  border="0">
              <tr>
                <td width="10%" class="tdname">订单编号：</td>
                <td width="13%" ><?php echo $_smarty_tpl->tpl_vars['orderinfo']->value['dno'];?>
[]</td>
                <td width="7%" class="tdname">下单时间</td>
                <td width="20%"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderinfo']->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
 </td>
                <td width="7%" class="tdname">配送时间</td>
                <td width="33%"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderinfo']->value['posttime'],"%Y-%m-%d %H:%M:%S");?>
</td>
              </tr>
                	 
              <tr>
                <td class="tdname">店铺名</td>
                <td><?php echo $_smarty_tpl->tpl_vars['orderinfo']->value['shopname'];?>
</td>
                <td class="tdname">店铺电话</td>
                <td><?php echo $_smarty_tpl->tpl_vars['orderinfo']->value['shopphone'];?>
</td>
                <td class="tdname">店铺地址</td>
                <td><?php echo $_smarty_tpl->tpl_vars['orderinfo']->value['shopaddress'];?>
</td>
              </tr>
              <tr>
                <td class="tdname">下单联系人</td>
                <td><?php echo $_smarty_tpl->tpl_vars['orderinfo']->value['buyername'];?>
</td>
                <td class="tdname">联系电话 </td>
                <td><?php echo $_smarty_tpl->tpl_vars['orderinfo']->value['buyerphone'];?>
</td>
                <td class="tdname">配送地址</td>
                <td><?php echo $_smarty_tpl->tpl_vars['orderinfo']->value['buyeraddress'];?>
</td>
              </tr>
              <tr>
              	<td class="tdname">优惠</td>
                <td style="color:#ff7800;"> <?php echo $_smarty_tpl->tpl_vars['orderinfo']->value['yhjcost']+$_smarty_tpl->tpl_vars['orderinfo']->value['cxcost'];?>
元</td>
                <td class="tdname">配送费用</td>
                <td style="color:#ff7800;"><?php echo $_smarty_tpl->tpl_vars['orderinfo']->value['shopps'];?>
元</td>
                <td class="tdname">订单总价</td>
                <td  style="color:#ff7800;"><?php echo $_smarty_tpl->tpl_vars['orderinfo']->value['allcost'];?>
元</td> 
                
              </tr> 
              <tr>
              	<td class="tdname">备注</td>
                <td colspan="3" class="tdname"><?php echo $_smarty_tpl->tpl_vars['orderinfo']->value['content'];?>
</td>
                <td class="tdname">使用积分</td>
                <td><?php echo $_smarty_tpl->tpl_vars['orderinfo']->value['scoredown'];?>
</td>
              </tr>
              <tr>
                <td colspan="4" class="tdname">商品名</td><td class="tdname">商品数量</td><td class="tdname">小计</td>
              </tr>
              <?php  $_smarty_tpl->tpl_vars['itmes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itmes']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderdetlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itmes']->key => $_smarty_tpl->tpl_vars['itmes']->value){
$_smarty_tpl->tpl_vars['itmes']->_loop = true;
?>
              <tr class="detail">
                <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['itmes']->value['goodsname'];?>
<?php if ($_smarty_tpl->tpl_vars['itmes']->value['is_send']==1){?><font color=red>[赠品]</font><?php }?><?php if ($_smarty_tpl->tpl_vars['itmes']->value['shopid']==0){?><font color=red>[商城]</font><?php }?></td>
                <td><?php echo $_smarty_tpl->tpl_vars['itmes']->value['goodscount'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['itmes']->value['goodscost']*$_smarty_tpl->tpl_vars['itmes']->value['goodscount'];?>
元</td>
              </tr>
              <?php } ?>
               
              <tr>
                <td colspan="4">&nbsp;</td>
                <td class="tdname">商品总价</td>
                <td style="color:#ff7800;"><?php echo $_smarty_tpl->tpl_vars['orderinfo']->value['shopcost'];?>
元</td>
              </tr>
              
              <tr>
              	<td class="tdname">支付方式</td>
                <td height="42"><?php echo $_smarty_tpl->tpl_vars['paytypearr']->value[$_smarty_tpl->tpl_vars['orderinfo']->value['paytype']];?>
</td>
                <td class="tdname">订单状态</td>
                 <td height="42" ><?php echo $_smarty_tpl->tpl_vars['buyerstatus']->value[$_smarty_tpl->tpl_vars['orderinfo']->value['status']];?>
</td>
                 <td class="tdname">支付状态</td>
                 <td height="42"><?php if (empty($_smarty_tpl->tpl_vars['orderinfo']->value['paystatus'])){?>未支付<?php }else{ ?>已支付<?php }?></td>
              </tr>
              <tr>
                <td colspan="6" align=center style="font-weight:bold; color:#e50012;"> 恭喜你，订单下单成功</td>
                 
              </tr>
              <?php if ($_smarty_tpl->tpl_vars['orderinfo']->value['paytype']!='outpay'&&$_smarty_tpl->tpl_vars['orderinfo']->value['status']<2&&$_smarty_tpl->tpl_vars['orderinfo']->value['paystatus']==0){?>
              
               <?php if ($_smarty_tpl->tpl_vars['orderinfo']->value['paytype']=='open_acout'){?>
               <tr style="border:none;">
              	 <td class="tdname">支付密码</td>
                 <td height="50" colspan="5"><input type="password" name="passinput" id="passinput" value=""></td>
               </tr>
               <?php }?>
              
               <tr style="border:none;">
              	 <td class="tdname">&nbsp;</td>
                 <td height="50" colspan="5"><div class="login-button hc_login_btn_div " style="margin-top:5px;">提交支付</div></td>
               </tr>
              <?php }?>
              
              
            </table>
					</div>
				<div class="clear"></div>
			</div>

		</div>



	</div>
</form>

<script type="text/javascript">
	 <?php if ($_smarty_tpl->tpl_vars['orderinfo']->value['paytype']=='open_acout'){?>
	 $('.login-button').click(function(){
	//
	var tempurl = '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/gotopay/orderid/".((string)$_smarty_tpl->tpl_vars['orderinfo']->value['id'])."/paypwd/@paypwd@/"),$_smarty_tpl);?>
';
	var url = tempurl.replace('@paypwd@', $('#passinput').val());  
	window.open(url);  
   })
	 <?php }else{ ?>
$('.login-button').click(function(){
	//
	var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/gotopay/orderid/".((string)$_smarty_tpl->tpl_vars['orderinfo']->value['id'])),$_smarty_tpl);?>
';
	window.open(url);  
})
<?php }?>

</script></div> 
 

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