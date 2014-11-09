<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 12:13:05
         compiled from "/www/web/www_wanfeng365_com/public_html/module/html5/template/shop.html" */ ?>
<?php /*%%SmartyHeaderCode:1358011381545ee9d1aeba61-48011185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27d70a3a3aee8238bc0750403446f52da21c1f86' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/module/html5/template/shop.html',
      1 => 1414605534,
      2 => 'file',
    ),
    '7001f98e981fd7c19da532596a7ba4028303d5dd' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/templates/newgreen/public/html5.html',
      1 => 1413967614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1358011381545ee9d1aeba61-48011185',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'siteurl' => 0,
    'is_static' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_545ee9d1cb23d9_28016203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ee9d1cb23d9_28016203')) {function content_545ee9d1cb23d9_28016203($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/www/web/www_wanfeng365_com/public_html/lib/Smarty/libs/plugins/function.load_data.php';
?><!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
	<title><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title> 
	 
	<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/css/public.css">   
  <link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/css/index.css">   
 
<link rel="stylesheet"  href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/css/goodslist.css">   

	<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/js/jquery.js"></script> 
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/js/public.js"></script>  
   <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/js/swipe.js"></script> 
 
 	<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/html5/js/cart.js"></script> 
 <script>
 	$(function(){ 
 		$('.sortbox li').bind("click", function() {   
	    $(this).addClass('hv').siblings().removeClass('hv');
	    var typeid = $(this).attr('dataid');
	     if(typeid !== undefined){ 
	        $.each($('#scrollLoading').find('li'), function(i,val){  
	      	  if($(val).attr('data-categoryid') == typeid){
	      	   $(val).show();
	         	}else{
	      	   $(val).hide();
	         	} 
          });   
	     }
    });
    $('.sortbox li').eq(0).trigger('click');
     
    $('.imgdiv_gd').bind("click", function() {  
    	
    	 
	$('body').append('<div id="mask" style="" ></div>'); //鍒涘缓閬収灞
	$('body').append('<div class="popup w580" style="display:none;"><div class="popup-hd"><a id="closex" title="图片展示" class="closex closegb" href="javascript:void(0);"><span>图片展示</span></a></div><div style="text-align:right;position: absolute;margin-left:10px;"><input id="alertbox-OK" class="inputBtn05 closegb" type="button" value="关闭"></div><p id="alertbox-msg" class="position02"><img src="'+$(this).find('img').eq(0).attr('src')+'" style="height:280px;width:280px;"></p></div>');
  $('.popup').slideToggle();
 
    	
    	 
    });
    $('#addShopping').bind("click",function(){ 
    	window.location.href=siteurl+"/index.php?controller=html5&action=buycart&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
";
    });
    freshcart();
 	});
 	var shopid = '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';
 	var shoplimitcost = '<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['limitcost'];?>
';
 	</script>

<script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
</script>
 <script type="text/javascript" name="baidu-tc-cerfication" src="http://apps.bdimg.com/cloudaapi/lightapp.js#eb0a315369c4f60074e72f7079c87fb8"></script><script type="text/javascript">window.bd && bd._qdc && bd._qdc.init({app_id: 'fb7bfde77727fd99a32117ab'});</script>
</head>
<body> 
	<div id="loading" style="display: block;"><div class="loadingbox"><section class="ffffbox"><div class="loadingpice"></div></section></div></div>
	 
 <div id="takeout"> 
  	<header><div class="return"></div><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/index.php?controller=html5&action=shopshow&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>
</a></header> 
  	<div class="wm-container"> 
  		<div style="display:block;" id="shopinfo"> 
  		</div> 
  		   <section>

  		   	   <div class="sortbox" style="height:905px;"> 
  		   	   	    <ul> 
  		   	   	    	  <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"goodstype",'where'=>"shopid='".((string)$_smarty_tpl->tpl_vars['id']->value)."'",'fileds'=>"*",'limit'=>"20"),$_smarty_tpl);?>
  
  		   	   	    	  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
                       <li id="cp_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" dataid="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</li>
                       <?php } ?>
                       
  		   	   	    </ul> 
  		   	   </div>

  		   	   <div class="listbox" id="scrollLoading"  style="height:905px;">

  		   	   	   <ul class="mVer w100w" style="display: -webkit-box;">  
  		   	   	   	<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
  		   	   	   	<?php echo smarty_function_load_data(array('assign'=>"menulist",'table'=>"goods",'where'=>"shopid='".((string)$_smarty_tpl->tpl_vars['id']->value)."' and typeid='".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."'",'fileds'=>"*",'limit'=>"100"),$_smarty_tpl);?>
  
  		   	   	      	<?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menulist']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>
  		   	   	   	    <li class="mBxMid clkitm"  id="gid_<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
" data-shopid="<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
" data-categoryid="<?php echo $_smarty_tpl->tpl_vars['itv']->value['typeid'];?>
" data-categoryname="<?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
" data-supplierdishid="<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
" data-supplierdishname="<?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
" data-packagingfee="<?php echo $_smarty_tpl->tpl_vars['itv']->value['bagcost'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['itv']->value['cost'];?>
" data-recipe="<?php echo $_smarty_tpl->tpl_vars['itv']->value['instro'];?>
" buydata="0">
 
  		   	   	   		<div class="mBxCm listnumber" style="">

  		   	   	   			<span class="listshu mBxCm">0</span>

  		   	   	   		</div>
                    <div class="imgdiv_gd"> 
  		   	   	   			<?php if (!empty($_smarty_tpl->tpl_vars['itv']->value['img'])){?>
  		   	   	   		    	<img class="scrollLoading" alt="" src="<?php echo $_smarty_tpl->tpl_vars['itv']->value['img'];?>
">  
  		   	   	   		   <?php }?>
  		   	   	   		</div> 
  		   	   	   		<div class="mFlex1">

  		   	   	   			<h3><strong><?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
</strong></h3>

  		   	   	   			<div><span><?php echo $_smarty_tpl->tpl_vars['itv']->value['cost'];?>
</span>元/份</div>

  		   	   	   		</div>

  		   	   	   		<div class="showbtn"><a onclick="removeonedish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1); "></a><span id="quantity">0</span><a onclick="addonedish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1,this); "></a></div>
                    </li>  
                    <?php } ?>
  		   	   	   	<?php } ?>
  		   	   	   	
  		   	   	   	
  		   	   	   	
  		   	   	   	

  		   	   	  </ul>

  		   	   </div> 
  		  </section>


  
 </div> 
  </div> 
  <footer><div><div class="pie"><span id="buy-DishCaiCount">0</span>个商品，<span id="buy-paycount">0.00</span>元 <span id="shoplimitcost"></span></div><div id="addShopping"><b></b>选好了</div></div></footer>
 

</div> 
 <script>
 	$(function(){  
 	   $('#loading').hide(); 
  });
  </script>
</body>
</html>
 <?php }} ?>