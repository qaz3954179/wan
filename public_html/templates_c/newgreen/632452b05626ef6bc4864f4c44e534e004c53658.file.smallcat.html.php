<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 11:19:41
         compiled from "/www/web/www_wanfeng365_com/public_html/templates/newgreen/site/smallcat.html" */ ?>
<?php /*%%SmartyHeaderCode:1145632688545edd4dba0e61-00567178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '632452b05626ef6bc4864f4c44e534e004c53658' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/templates/newgreen/site/smallcat.html',
      1 => 1414600744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1145632688545edd4dba0e61-00567178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cartinfo' => 0,
    'shopid' => 0,
    'ckkey' => 0,
    'items' => 0,
    'itv' => 0,
    'tempcost' => 0,
    'allcost' => 0,
    'siteurl' => 0,
    'tempdir' => 0,
    'limitcost' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_545edd4dcfcfc8_24901663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545edd4dcfcfc8_24901663')) {function content_545edd4dcfcfc8_24901663($_smarty_tpl) {?>

                   	
<div id="gouwuchetoggle">
	<div class="new_cart_show new_cart_top" id="new_cart_top">
                   		 <div class="new_cart_goodsname">商品[<font style="color:#f60;cursor: pointer;" onclick="delshopcart();">清空</font>]</div> 
                   	   <div class="new_cart_goodscount">数量</div>	
                   		 <div class="new_cart_goodscost">单价</div>
  </div>
  <?php $_smarty_tpl->tpl_vars['allcost'] = new Smarty_variable(0, null, 0);?> 
  <?php $_smarty_tpl->tpl_vars['tempcost'] = new Smarty_variable(0, null, 0);?> 
 <?php $_smarty_tpl->tpl_vars['limitcost'] = new Smarty_variable(0, null, 0);?> 
  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['ckkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cartinfo']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['ckkey']->value = $_smarty_tpl->tpl_vars['items']->key;
?>  
   <?php if ($_smarty_tpl->tpl_vars['shopid']->value==$_smarty_tpl->tpl_vars['ckkey']->value){?>  
		  <div class="new_cart_items">

		   <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>
		   
  		   <div class="new_cart_show" id="cartli_<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
"> 
                     	   <div class="new_cart_goodsname"><div class="left_cat_gd"><?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
</div><div class="left_cat_cls"><span onclick="removesupplierdish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
);">×</span></div></div> 
                     	   <div class="new_cart_goodscount">
                     	   	<div class="goodscount_bk">
                     	   	<span class="jian" onclick="removeonedish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1);">-</span><input type="text" id="cart_count<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
" onblur="modifycart(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['count'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
);" value="<?php echo $_smarty_tpl->tpl_vars['itv']->value['count'];?>
" data="<?php echo $_smarty_tpl->tpl_vars['itv']->value['count'];?>
" class="goodsnum_show" value="1"><span class="jia"  onclick="uponedish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1);">+</span>
                     	    </div>
                     	   	
                     	   	</div>	
                     		 <div class="new_cart_goodscost">￥<?php echo $_smarty_tpl->tpl_vars['itv']->value['cost'];?>
</div>
         	</div>
        
		   
		    
		    
		    	    <?php $_smarty_tpl->tpl_vars['tempcost'] = new Smarty_variable($_smarty_tpl->tpl_vars['tempcost']->value+$_smarty_tpl->tpl_vars['itv']->value['cost']*$_smarty_tpl->tpl_vars['itv']->value['count'], null, 0);?> 
		    
		   <?php } ?> 
       </div>
	   
		  <?php if (is_array($_smarty_tpl->tpl_vars['items']->value['cx']['zid'])){?> 
      <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['cx']['zid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>
			 
		   <?php } ?> 
      <?php }?> 
		 
      <?php $_smarty_tpl->tpl_vars['allcost'] = new Smarty_variable($_smarty_tpl->tpl_vars['items']->value['pscost']+$_smarty_tpl->tpl_vars['items']->value['bagcost']+$_smarty_tpl->tpl_vars['items']->value['cx']['surecost'], null, 0);?> 
		
    <?php $_smarty_tpl->tpl_vars['allcost'] = new Smarty_variable($_smarty_tpl->tpl_vars['allcost']->value, null, 0);?>
    
    <?php $_smarty_tpl->tpl_vars['limitcost'] = new Smarty_variable($_smarty_tpl->tpl_vars['items']->value['limitcost'], null, 0);?>
 <?php }?>
  
  
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value['pscost']>0){?>
  <div style="height: 50px;
line-height: 50px;
padding-left: 10px;
font-size:14px;
padding-right: 10px;
border-left: 1px solid #e1e1e1;
border-top: 1px solid #e1e1e1;">
		 <span style="float:left;">配送费</span>
		  <span style="float:right; margin-right:20px;">￥<?php echo $_smarty_tpl->tpl_vars['items']->value['pscost'];?>
</span>
		  </div>
<?php }?>
		   <div style="height: 50px;
line-height: 50px;
padding-left: 10px;font-size:14px;
padding-right: 10px;
border-left: 1px solid #e1e1e1;
border-top: 1px solid #e1e1e1;">
		
		  <span style="float:right; ">共<span style="margin: 0 3px;
color: #FF6900;"><?php echo $_smarty_tpl->tpl_vars['items']->value['count'];?>
</span>份,总计<span style="font-size: 16px;font-weight: bold;
color: #FF6900;">￥<?php echo $_smarty_tpl->tpl_vars['allcost']->value;?>
</span></span>
		  </div>
	   


<div style="clear:both;"> </div>
</div>
<input type="hidden" id="caipincost"  value="<?php echo $_smarty_tpl->tpl_vars['tempcost']->value;?>
">
<input type="hidden" id="cartallcost"  value="<?php echo $_smarty_tpl->tpl_vars['allcost']->value;?>
">
 

<div class="new_cart_bottom" id="new_cat_bottom">
<div onclick="carttoggle();" style="position:absolute; cursor:pointer;" title="点击隐藏或显示购物车"><img  src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/shop/carbg.png" /></div>
<div class="fshetotal" style="display:none;position:absolute;color: #AAAAAA; font-size:14px;margin-left: 80px;margin-top: 10px;"><?php echo $_smarty_tpl->tpl_vars['items']->value['count'];?>
份 ￥<?php echo $_smarty_tpl->tpl_vars['allcost']->value;?>
</div>
	<?php if ($_smarty_tpl->tpl_vars['limitcost']->value<=$_smarty_tpl->tpl_vars['tempcost']->value){?>
	      <div onclick="ajaxdoorder();" class="ajaxorder">去下单</div>
	<?php }else{ ?>
	<div  class="showlimit">差<?php echo $_smarty_tpl->tpl_vars['limitcost']->value-$_smarty_tpl->tpl_vars['tempcost']->value;?>
元起送</div>
	<?php }?>
	</div>

 
<?php }} ?>