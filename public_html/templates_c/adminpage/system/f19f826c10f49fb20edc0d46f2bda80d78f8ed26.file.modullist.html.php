<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 11:18:35
         compiled from "/www/web/www_wanfeng365_com/public_html/module/system/adminpage/modullist.html" */ ?>
<?php /*%%SmartyHeaderCode:1401280777545edd0b0e5c73-00969866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f19f826c10f49fb20edc0d46f2bda80d78f8ed26' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/module/system/adminpage/modullist.html',
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
  'nocache_hash' => '1401280777545edd0b0e5c73-00969866',
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
  'unifunc' => 'content_545edd0b268c02_68488852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545edd0b268c02_68488852')) {function content_545edd0b268c02_68488852($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/www/web/www_wanfeng365_com/public_html/lib/Smarty/libs/plugins/modifier.date_format.php';
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
   	        	 	   <div class="showtop_t" id="positionname">模块管理</div>
   	        	 </div>
   	        	 <div class="show_content_m_t2">
   	        	 	
   	        	 	
   	        	 	
      <div style="width:auto;overflow-x:hidden;overflow-y:auto"> 
      	 
           <div class="tags">  
          <div id="tagscontent">

            <div id="con_one_1">

              <div class="table_td"  >

              <form method="post" action="" onsubmit="return remind();"  id="delform">

                  <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">

                    <thead>

                      <tr>

                        <th width="60px"><input type="checkbox" id="chkall" name="chkall" onclick="checkall()"></th>

                        <th align="center">文件名</th>

                        <th align="center">中文说明</th> 
                         <th align="center">上级模块</th> 
                        <th align="center">是否安装</th>  
                       
                        <th align="center">操作</th>

                      </tr>

                    </thead> 

                     <tbody>
                      <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"module",'showpage'=>"true",'orderby'=>"id asc"),$_smarty_tpl);?>
 
                      <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?> 
                      <tr class="s_out" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff"> 
                        <td align="center" ><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"></td> 
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</td> 
                        <td align="center"> <?php echo $_smarty_tpl->tpl_vars['items']->value['cnname'];?>
 </td> 
                         <td align="center"> <?php if ($_smarty_tpl->tpl_vars['items']->value['parent_id']==0){?>主模块<?php }else{ ?> <?php echo smarty_function_load_data(array('assign'=>"parent",'table'=>"module",'type'=>"one",'where'=>"id ='".((string)$_smarty_tpl->tpl_vars['items']->value['parent_id'])."'"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['parent']->value['cnname'];?>
 <?php }?> </td>  
                         <td align="center"><?php if ($_smarty_tpl->tpl_vars['items']->value['install']==1){?>已安装<?php }else{ ?>未安装<?php }?></td> 
                        <td align="center"> 
                        	<a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/system/module/delmodule/id/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."/datatype/json"),$_smarty_tpl);?>
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
                 	     <div class="select_page">
                 	        <a onclick="addmodule();" href="javascript:;" class="delurl">添加新模块</a> 
                 	     	</div>
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
 <script>
 	   function addmodule(){
 	    var optionhtml = '';
 	     <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?> 
 	     <?php if ($_smarty_tpl->tpl_vars['items']->value['parent_id']==0){?>
 	     optionhtml +='<option value="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</option>';
 	     <?php }?>
 	      <?php } ?> 
 	    var	htmls = '<form method="post" id="doshwoform" action="#" style="text-align:center;"><table>';
        	htmls += '<tbody><tr>';
         	htmls += '<td height="30px">文件名:</td>';
         	htmls += '<td> <input type="text" name="name" value="" style="width:100px;"></td></tr>';
         	htmls += '<tr><td height="30px">模块中文名:</td><td> <input type="text" name="cnname" value="" style="width:100px;"></td></tr>';
         	htmls += '<tr><td height="30px">是否是主模块:</td><td> <input type="radio" name="is_man" value="1"  >主模块<input type="radio" name="is_man" value="2"  >子模块</td></tr>';
         	htmls += '<tr style="" id="showsubt" height="30px"><td height="20px">选择上级模块:</td><td><select name="parent_id">'+optionhtml+'</select></td></tr>';
        	htmls += '</tbody></table> ';
          htmls += '<input type="hidden" value="" name="shopid"> ';
         	htmls += '<input type="button" value="确认提交" class="button" id="dosetclosetime" ></form>';
          art.dialog({
             id: 'testID3',
              title:'新增加模块',
               content: htmls
          });
     }
     
  $("input[name='is_man']").live("click", function() {   
  	var objvalue =   $("input[name='is_man']:checked").val();
  	if(objvalue == "1"){
  		 $('#showsubt').hide();
  	}else{
  		$('#showsubt').show();
  	}
  }); 
$('#dosetclosetime').live('click',function(){ 

	$.post('<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/system/module/savemodule/datatype/json"),$_smarty_tpl);?>
', {'name':$('input[name="name"]').val(),'cnname':$('input[name="cnname"]').val(),'is_main':$("input[name='is_man']:checked").val(),'parent_id':$("select[name='parent_id']").find("option:selected").val()} ,function (data, textStatus){  
			if(data.error == false){
     		diasucces('操作成功','');
     	}else{
     		if(data.error == true)
     		{
     			diaerror(data.msg); 
     		}else{
     			diaerror(data); 
     		}
     	} 
	 }, 'json'); 
});
 </script>

   	        	 	
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