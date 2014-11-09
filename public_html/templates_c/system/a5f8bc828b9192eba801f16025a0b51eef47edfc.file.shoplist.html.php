<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 12:12:52
         compiled from "/www/web/www_wanfeng365_com/public_html/module/html5/template/shoplist.html" */ ?>
<?php /*%%SmartyHeaderCode:208094339545ee9c47e74d5-73864863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5f8bc828b9192eba801f16025a0b51eef47edfc' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/module/html5/template/shoplist.html',
      1 => 1414944528,
      2 => 'file',
    ),
    '7001f98e981fd7c19da532596a7ba4028303d5dd' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/templates/newgreen/public/html5.html',
      1 => 1413967614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208094339545ee9c47e74d5-73864863',
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
  'unifunc' => 'content_545ee9c48ecd78_51501366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ee9c48ecd78_51501366')) {function content_545ee9c48ecd78_51501366($_smarty_tpl) {?><!DOCTYPE html>
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
/public/html5/css/shoplist.css">  

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
/public/html5/js/template.min.js"></script>    
 <script>
var can_show = true;
var page = 1;
var catid = 0;
var order = 0;
var myaddress = '<?php echo $_smarty_tpl->tpl_vars['myaddress']->value;?>
';
var search_input = '<?php echo $_smarty_tpl->tpl_vars['search_input']->value;?>
';
$(function(){ 
	if(myaddress == ''){
		 Tmsg('你选择的区域获取便民服务失败，请选择区域');
		  window.location.href=siteurl+"/index.php?controller=html5&action=choice";
	}
 		$('#toolbar .sele>li').bind("click", function() {   
	    $('#toolbar .sele>b').removeClass('se');
     $(this).addClass('se').siblings().removeClass('se');
     $(this).find('b').addClass('se');
      $('#toolbar .sub').addClass('sh');
       var cc = $('#toolbar .sele').find('li').index(this); 
       $('#toolbar .lizd').eq(cc).show().siblings().hide();//('sh'); 
   
      });

 	$('#sorts li').bind("click",function(){
	  $(this).addClass('xz').siblings().removeClass('xz');
	    $('#toolbar').find('.se').removeClass('se');
      $('#toolbar').find('.sh').removeClass('sh'); 
	    $('#toolbar').find('li').eq(2).html('<a>'+$(this).text()+'<b class=""></b></a>');
	    order = $(this).attr('value');
	   $('#supplierlist').html('');
      page = 1;
   	  can_show = true; 
	    shopdata(); 
  });
  $('.lizd li').bind("hover",function(){
	   $(this).addClass('tapclass').siblings().removeClass('tapclass');
  });
  $('#cuisien li').bind('click',function(){
	   $(this).addClass('xz').siblings().removeClass('xz');
	   $('#toolbar').find('.se').removeClass('se');
	   $('#toolbar').find('.sh').removeClass('sh');
	   $('#supplierlist').html('');
	   $('#toolbar').find('li').eq(0).html('<a>'+$(this).text()+'<b class=""></b></a>');
	   catid = $(this).attr('id');//alert(this).
	   can_show = true; 
	   page = 1;
	   shopdata(); 
   });
  
   shopdata();
});
function shopdata(){ 
	   $('#loading').show();
 	   $(".mBxCr").show(); 
 	   var url = siteurl+'/index.php?controller=html5&action=shoplistdata&datatype=json&random=@random@';  
 	    $.ajax({ 
      dataType: "json", 
      data:{page:page,search_input:search_input,order:order,catid:catid}, 
       url: url.replace('@random@', 1+Math.round(Math.random()*1000)),  
       success: function(content) {    
       	 if(content.error == false) 
      	{ 

      		  if(content.msg.length > 0){

      		  		var cc = $('.clkitm').length;

      		     $.each(content.msg, function(i,val){     
 		                var htmls = template.render('shoplist', {list:val}); 
                   $('#supplierlist').append(htmls); 
                   $('.clkitm').eq(Number(i)+Number(cc)).fadeIn(); 
               });  
               page = Number(page+1);  
               $(".mBxCr").hide(); 
               $('#loading').hide();
      		  }else{ 
      		      can_show ==  false; 
      		      if(page == 1){ 
      		      	 error($('#supplierlist'),'未查找到满足条件的数据'); 
      		      	 $(".mBxCr").hide(); 
      		      }else{ 
      		        $('#loadtip').text('数据加载完毕'); 
      		      }
      		      $('#loading').hide();

      		  }

      	}else{ 
      			 can_show ==  false; 
    	       error($('#supplierlist'),content.msg); 
    	       $('#loading').hide();
      	}  
      	 
	     }, 
       error: function(content) {  
        	can_show ==  false; 
    	    error($('#supplierlist'),'店铺数据为空'); 
    	    $('#loading').hide();
	     }

     });   

}
$(window).scroll(function(){   //滚动获取数据 
	if(can_show == true && $(".mBxCr").is(":hidden") == true){ 
	 
    if ($(document).height() - $(this).scrollTop() - $(this).height()<100){
    	 
    	 shopdata();   
    	}
  } 
});

</script>
<script id="shoplist" type="text/html">   

 	 <li class="clkitm <^%if(list.opentype != 2&&list.opentype !=3){%^>disabled<^%}%^>" data-supplierid="<^%=list.id%^>" style="display:none;"  > 
 <^%if(list.opentype != 2&&list.opentype !=3){%^>
 	 <a href="#">
 	<^%}else{%^>
 	   <a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/index.php?controller=html5&action=shop&id=<^%=list.id%^>">
 <^%}%^>
        <img class="scrollLoading"  src="<^%=list.shoplogo%^>" alt="" >

        <h3><strong><^%=list.shopname%^></strong></h3> 
        <div class="qisong">
                <p><^%=list.limitcost%^>&nbsp;元起送</p>
                <p>配送费&nbsp;<^%=list.pscost%^>&nbsp;元</p> 
        </div>

        <div class="address">配送时间:<^%=list.starttime%^></div> 
        
        
         <^%if(list.gzdata != ''){%^>
        <div class="shanbqs"> <^%=list.gzdata%^> </div>
        <^%}%^>
        <^%if(list.opentype != 2&&list.opentype !=3){%^>
        	 <div style="position:absolute;position: absolute;background-color: gray;height: 20px;width: 50px;right: 20px;margin-top: -60px;color: #ffffff;text-align: center;line-height: 20px;">休息中</div>
        	<^%}else{%^>
        <div style="position:absolute;position: absolute;background-color: red;height: 20px;width: 50px;right: 20px;margin-top: -60px;color: #ffffff;text-align: center;line-height: 20px;">营业中</div>
      <^%}%^>
      
       </a>

    </li> 

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
	 
<div id="hallist"> 
  	<header><div class="return"></div><a href="javascript:void(0);" id="cityname" class="cityaa colred"></a><?php echo $_smarty_tpl->tpl_vars['mapname']->value;?>
&nbsp;·&nbsp;商户列表<div class="ico" style="background:none; width:80px;"><a style="padding:0;background:none;" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/html5/choice">切换地址</a></div></header> 
    <div id="toolbar"> 
    	<ul class="sele"> 
    		<li class=""><a>全部商品<b class=""></b></a></li>  
    		<li class=""><a>默认排序<b class=""></b></a></li> 
    	</ul>

    	<div class="sub"> 

    		<ul id="cuisien" class="lizd" style="display:none;"> 
    			    <li id="0" class="xz"><a>全部商品</a></li>  
    			    <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['caipin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
    			     <li id="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"><a><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</a></li>
    			     <?php } ?>
    	 </ul>
 
     	 <ul id="sorts" class="lizd" style="display:none;"><li value="0" class="xz">默认排序</li><li value="1">价格最低</li><li value="2">价格最高</li></ul>

     	 

      </div>

    </div>

  

  <div class="container">

  	<section>

  		<ul id="supplierlist" class="branch-list">  

  			 

     </ul>

     <div class="mBxCr" style="display: hidden;"><span class="more" id="loadtip">加载更多</span></div>

    </section>


   
  	<footer>
  		<nav>
  			<ul>
  				<li id="homeindex"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/html5/index"),$_smarty_tpl);?>
">首页</a></li>
  	    	<li id="footerorderlist"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/html5/order"),$_smarty_tpl);?>
">订单</a></li>
  	    	<li id="favorate"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/html5/collect"),$_smarty_tpl);?>
">收藏</a></li>
  	    	<li id="opinion"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/html5/ask"),$_smarty_tpl);?>
">意见反馈</a></li>
  	    </ul>
  	  </nav>
  	  <p>Copyright © 2011-2014 Powered by <font id="sitetitle"></font></p>
  	</footer>
  	
  </div>
   
</div> 
 <script>
 	$(function(){  
 	   $('#loading').hide(); 
  });
  </script>
</body>
</html>
 <?php }} ?>