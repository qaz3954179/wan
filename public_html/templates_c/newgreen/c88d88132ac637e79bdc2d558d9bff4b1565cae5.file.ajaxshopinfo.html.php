<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 11:19:24
         compiled from "/www/web/www_wanfeng365_com/public_html/templates/newgreen/site/ajaxshopinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:759972839545edd3c1ed343-68506293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c88d88132ac637e79bdc2d558d9bff4b1565cae5' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/templates/newgreen/site/ajaxshopinfo.html',
      1 => 1414600744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '759972839545edd3c1ed343-68506293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shopinfo' => 0,
    'attr' => 0,
    'items' => 0,
    'itv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_545edd3c29b6f9_16194557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545edd3c29b6f9_16194557')) {function content_545edd3c29b6f9_16194557($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/www/web/www_wanfeng365_com/public_html/lib/Smarty/libs/plugins/modifier.truncate.php';
?>	<div class="hc_popups_div">
	<div class="hc_popups" id="ShopView_<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
">
		<div class="hc_popups_head"> 
			<h3><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>
</h3>
			<span class="hc_popups_font hc_popups_font_head"> 
			   <div style="width:290px;word-wrap:break-word;float:right;margin-right:20px;"><font color="blue">公告:</font><?php echo smarty_modifier_truncate(htmlspecialchars_decode($_smarty_tpl->tpl_vars['shopinfo']->value['notice_info']),60);?>
</div> <br>
			 </span>
			<p style="clear:both;"><span class="hc_popups_font">起送价：</span><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['limitcost'];?>
 元</p> 
			<p><span class="hc_popups_font">地址：</span><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['address'];?>
</p>
			<p><span class="hc_popups_font">电话：</span><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['phone'];?>
</p>
			<p><span class="hc_popups_font">营业时间：</span><font style="color:#f60;"><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['starttime'];?>
</font></p>
			<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
			<p style="clear:both;">
				<span class="hc_popups_font"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
:</span>	 
				 <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shopinfo']->value['attrdet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>
				 <?php if ($_smarty_tpl->tpl_vars['itv']->value['firstattr']==$_smarty_tpl->tpl_vars['items']->value['id']){?>
				  <?php if ($_smarty_tpl->tpl_vars['items']->value['type']=='img'){?>
				    <img src="<?php echo $_smarty_tpl->tpl_vars['itv']->value['value'];?>
">
				  <?php }else{ ?>
				     <?php echo $_smarty_tpl->tpl_vars['itv']->value['value'];?>

				     <?php }?>
				 <?php }?>
				    
				 <?php } ?>
			 </p>
			<?php } ?>
			 
			
			 
		</div>
		<div class="hc_popups_sanjiao"></div>
	</div>

</div><?php }} ?>