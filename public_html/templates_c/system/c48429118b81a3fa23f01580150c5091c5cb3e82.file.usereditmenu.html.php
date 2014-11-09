<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 11:18:13
         compiled from "/www/web/www_wanfeng365_com/public_html/templates/newgreen/shop/usereditmenu.html" */ ?>
<?php /*%%SmartyHeaderCode:1049652696545edcf5a8abc1-09942852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c48429118b81a3fa23f01580150c5091c5cb3e82' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/templates/newgreen/shop/usereditmenu.html',
      1 => 1413272792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1049652696545edcf5a8abc1-09942852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlshort' => 0,
    'siteurl' => 0,
    'tempdir' => 0,
    'shopinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_545edcf5b0ebc8_13083278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545edcf5b0ebc8_13083278')) {function content_545edcf5b0ebc8_13083278($_smarty_tpl) {?> <div class="waimaiset"> 
	<div class="jbset <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='shop/useredit'){?> onset<?php }?>" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/useredit"),$_smarty_tpl);?>
');">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/jbBg.png" /><span>基本设置</span>
                </div>
                <?php if (empty($_smarty_tpl->tpl_vars['shopinfo']->value['shoptype'])){?>
                <div  class="jbset <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='shop/usershopfast'){?> onset<?php }?>" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/usershopfast"),$_smarty_tpl);?>
');" >
                	<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/wmset.png" /><span>配送设置</span>
                </div>
                <?php }else{ ?>
                <div  class="jbset <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='shop/usershopmarket'){?> onset<?php }?>"   onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/usershopmarket"),$_smarty_tpl);?>
')">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/wmset.png" /><span>超市市场</span>
                </div>
                
                <?php }?> 
                <div class="jbset <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='shop/usershopinstro'){?> onset<?php }?>" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/usershopinstro"),$_smarty_tpl);?>
');">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/dianpujieshao.png" /><span>店铺介绍</span>
                </div>
                <div class="jbset <?php if ($_smarty_tpl->tpl_vars['urlshort']->value=='shop/usershopnotice'){?> onset<?php }?>" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/usershopnotice"),$_smarty_tpl);?>
');">
                	<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/gonggao.png" /><span>店铺公告</span>
                </div>
              </div>
<script>       	
				$(function(){
					$(".waimaiset .jbset").click(function(){
						$(this).css('background','#ec7501').siblings().css('background','');
						
					});	
					
				});
 </script>
       	 
       		 <?php }} ?>