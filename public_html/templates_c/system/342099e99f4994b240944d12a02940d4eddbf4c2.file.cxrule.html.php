<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 11:51:59
         compiled from "/www/web/www_wanfeng365_com/public_html/module/shop/template/cxrule.html" */ ?>
<?php /*%%SmartyHeaderCode:1703190812545ee4df411851-76929012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '342099e99f4994b240944d12a02940d4eddbf4c2' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/module/shop/template/cxrule.html',
      1 => 1411484372,
      2 => 'file',
    ),
    '8e44f60395a51cf2ebf955e79e0cb35c9be638fb' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/templates/newgreen/public/shopcenter.html',
      1 => 1413272970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1703190812545ee4df411851-76929012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'sitename' => 0,
    'keywords' => 0,
    'description' => 0,
    'siteurl' => 0,
    'adminshopid' => 0,
    'shopinfo' => 0,
    'toplink' => 0,
    'items' => 0,
    'beian' => 0,
    'footerdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_545ee4df66cb89_25409652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ee4df66cb89_25409652')) {function content_545ee4df66cb89_25409652($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/www/web/www_wanfeng365_com/public_html/lib/Smarty/libs/plugins/function.load_data.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/web/www_wanfeng365_com/public_html/lib/Smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 商家管理中心-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />  
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/css/commom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/css/shangjiaAdmin.css" />

<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquerynew.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/allj.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/artDialog.js?skin=blue"></script>

 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/plugins/iframeTools.js"></script>
 <script>
  	  var mynomenu='basecx';
  </script> 

<script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
"; 
</script>
<!--[if lte IE 6]>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
        $('#footer').css('display','none');
    </script>
<![endif]--> 
</head>
<body> 
<?php echo smarty_function_load_data(array('assign'=>"shopinfo",'table'=>"shop",'where'=>"`id`=".((string)$_smarty_tpl->tpl_vars['adminshopid']->value),'type'=>"one"),$_smarty_tpl);?>
 
<div style="position: fixed;top: 0;left: 0;right: 0;bottom: 0;z-index: -1;background:url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/background.png);"></div>
<!---header start--->
	<div class="header">
    	<div class="top">
        	<div class="topLeft fl">
            	<ul class="fr">
                	<li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/useredit"),$_smarty_tpl);?>
">店铺管理</a></li> 
                    <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/shoporderlist"),$_smarty_tpl);?>
">订单管理</a></li>
                    <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/fastfood"),$_smarty_tpl);?>
">快速下单</a></li>
                </ul>
                 <div class="cl"></div>
            </div>
            <div class="topRight fr">
            	
                    <span  style="color: #c7c7c7;font-size: 14px;padding: 5px;" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/member/base"),$_smarty_tpl);?>
');" class="curbtn">会员中心 </span>
                    <span class="username curbtn" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/member/loginout"),$_smarty_tpl);?>
');">退出<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/usernameBg.png" /></span>
                 
                
            </div>
            <div class="cl"></div>
            
            
            <div class="shangjiaTop">
            	<div class="sjgl">
                	
                </div>
            	
            </div>
        </div>
    	
    </div>
    <!---header end--->
    <script>
	$(function(){
		var clientWidth = document.body.clientWidth;
		/*alert(clientWidth);*/
		if( clientWidth<=1347 ){
			
			$(".content").css("width","1240px");
			$(".conleft").removeClass("content_left");
			
		}
	});
</script>
 <!------以上是公共的头部部分------->
 
  <!---content start--->
	<div class="content">
   	 	<!---content left start--->
		<div class="conleft content_left fl">
        	<div class="nav">
            	<ul>
                	<li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/useredit"),$_smarty_tpl);?>
');" data="baseset"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/dpsz.png" /></div><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/useredit"),$_smarty_tpl);?>
">店铺设置</a></li>
                    <li onclick="openlink('<?php if (empty($_smarty_tpl->tpl_vars['shopinfo']->value['shoptype'])){?><?php echo FUNC_function(array('type'=>'url','link'=>"/shop/goodslist"),$_smarty_tpl);?>
<?php }else{ ?><?php echo FUNC_function(array('type'=>'url','link'=>"/shop/marketgoodslist"),$_smarty_tpl);?>
<?php }?>');" data="basemenu"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/cdgl.png" /></div><a href="<?php if (empty($_smarty_tpl->tpl_vars['shopinfo']->value['shoptype'])){?><?php echo FUNC_function(array('type'=>'url','link'=>"/shop/goodslist"),$_smarty_tpl);?>
<?php }else{ ?><?php echo FUNC_function(array('type'=>'url','link'=>"/shop/marketgoodslist"),$_smarty_tpl);?>
<?php }?>">商品管理</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/order/shoporderlist"),$_smarty_tpl);?>
');" data="baseorder"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/ddgl.png" /></div><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/shoporderlist"),$_smarty_tpl);?>
">订单管理</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/order/shoptotal"),$_smarty_tpl);?>
');" data="baseordertj"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/ddtj.png" /></div><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/order/shoptotal"),$_smarty_tpl);?>
">订单统计</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/area/setshoparea"),$_smarty_tpl);?>
');" data="basearea"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/psqy.png" /></div><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/area/setshoparea"),$_smarty_tpl);?>
">配送区域</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/cxrule"),$_smarty_tpl);?>
');"  data="basecx"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/xxgz.png" /></div><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/cxrule"),$_smarty_tpl);?>
">促销规则</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/ask/shopask"),$_smarty_tpl);?>
');" data="baseask"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/lygl.png" /></div><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/ask/shopask"),$_smarty_tpl);?>
">留言评价</a></li>
                    
                    
                </ul>
               
            </div>
        </div>	
       <!---content left end---> 
       
       
       
       
       
           
 
 
 
  <!---content right start---> 
        <div class="conWaiSet fr">
        	
            <div class="shopSetTop">
            	<span>促销规则列表</span>
            </div>
            
            <div class="cxruleset">
            	<div class="cxrule_btn">
                 
                    <div class="cxruleButton" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/addcxrule"),$_smarty_tpl);?>
');"></div>
                </div>
                
                  <div class="cl"></div>
            </div>
             <div class="cl"></div>
                       
                <form action="" method="post">
                 <div class="caidanSet">
        			
                    
                
                	<div class="div_orderList">
                    	
                        <div class="cxrule_show">
                    
                        <div class="cxrule_show_goodli">
                            <div class="cxrule_goodname">
                                <span>促销名称</span>
                            </div>
                            <div class="cxrule_shuoming">
                                 <span>规则说明</span>
                            </div>
                            <div class="cxrule_pri">
                                 <span>开始时间</span>
                            </div>
                            <div class="cxrule_d">
                                 <span>结束时间</span>
                            </div>
                            <div class="cxrule_day_num">
                                 <span>状态</span>
                            </div>
                             <div class="cxrule_cz">
                                 <span>操作</span>
                            </div>
                        </div>
                        
                        <div class="cl"></div>
                        
                        
                    	<div class="cxrule_list	">
                       		 
                          	 <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"rule",'fileds'=>"*",'limit'=>"100",'where'=>"shopid = ".((string)$_smarty_tpl->tpl_vars['shopinfo']->value['id'])),$_smarty_tpl);?>
 
                <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>  
                          
                          <div class="cxrule_goodlist">
                            <div class="cxrule_name">
                                <span><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</span>
                            </div>
                            <div class="cxrule_sm">
                                 <span id="showrule_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" data=""></span>
                            </div>
                            <div class="cxrule_price">
                                 <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['starttime'],"%Y-%m-%d");?>
</span>
                            </div>
                            <div class="cxrule_dbf">
                                 <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['items']->value['endtime'],"%Y-%m-%d");?>
</span>
                            </div>
                            <div class="cxrule_dayNum">
                                 <span> <?php if ($_smarty_tpl->tpl_vars['items']->value['status']==1){?>开启中<?php }else{ ?>未开启<?php }?></span>
                            </div>
                             <div class="cxrule_caozuo">
                                 <span style=" background:#27a9e3; padding:8px; color:#fff;"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/addcxrule/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
">编辑</a></span>
                                  <span style=" background:#ec7501; padding:8px; color:#fff;"><a onclick="return remind(this);"href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/delcxrule/cxid/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/datatype/json"),$_smarty_tpl);?>
"> 删除</a></span>
                            </div>
                          </div>
                    
                        
                        
                     <?php } ?> 
                      
                      
                    </div>
                        <div class="cl"></div>
                        
                        
                    </div>
                    	
                        
                        
                        
                    </div>
                    
       			 </div>
                 
                 
              </form>  
                
                
        </div>
        <div class="cl"></div>
        
        
       
        
        
        <!---content right end---> 
 
 
 
 
 
 
 
 
 
 
 
 
 
  
<script>
	var alllist = <?php echo json_encode($_smarty_tpl->tpl_vars['list']->value['list']);?>
;
$(function(){  
	$.each(alllist,function(i,field){ 
		var showcontent = '';
		
		if(field.limitcontent > 0){
			showcontent += '订单总价大于'+field.limitcontent+'元';
		}else{
			showcontent +='所有订单';
		} 
		if(field.limittype ==  2){
			showcontent ='每周(星期'+field.limittime+'),'+showcontent;
		} 
		if(field.limittype == 3){
			showcontent ='每天在'+field.limittime+'时间段，'+showcontent;
		}
		if(field.controltype ==  1){
			showcontent +='赠送:'+field.presenttitle+'库存还剩'+field.controlcontent+'件';
		}
		if(field.controltype ==  2){
			showcontent +='优惠:'+field.controlcontent+'元';
		}
		if(field.controltype ==  3){
			var times = field.controlcontent*0.1;
			showcontent +='折扣:'+times+'折';
		}
		if(field.controltype ==  4){
			showcontent +='免配送费';
		}
		 
		
		 $('#showrule_'+field.id).text(showcontent);
	});
	
});
	
	
	
	
	
	
</script>
 
       
       
       
       
       
       
       
       </div>
    



<!------以下是公共的底部部分------->

    <div class="footer">
    	<div class="foot1">
        <center>
        	<div class="db">
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
         
            </div></center>
            <div class="cl"></div>
        </div>
        <div class="foot2">
        	<p>@2008-2012 <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['beian']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['footerdata']->value);?>
</p>
        </div>
    </div>
 
 <script>
                	
				$(function(){
					 
			  	if("undefined" != typeof mynomenu){
					   var allobj = $('.nav').find('li');
					  $.each(allobj, function(i, newobj) {
					  	if($(this).attr('data') == mynomenu){
					  	   $(this).addClass('on');
					  	 }
					  	//alert($(this).attr('data'));
					   	  
					  });
				 	}
					$(".nav ul li").click(function(){
					    	$(this).addClass('on').siblings().removeClass('on');
						
					});	 
				});
				function openlink(newlinkes){
					window.location.href=newlinkes;
				}
</script> 
  
</body>
</html><?php }} ?>