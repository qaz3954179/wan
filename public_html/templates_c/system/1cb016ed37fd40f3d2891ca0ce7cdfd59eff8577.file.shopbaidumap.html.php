<?php /* Smarty version Smarty-3.1.10, created on 2014-11-09 12:42:31
         compiled from "/www/web/www_wanfeng365_com/public_html/module/area/template/shopbaidumap.html" */ ?>
<?php /*%%SmartyHeaderCode:246793376545ef0b7d45da6-88865738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cb016ed37fd40f3d2891ca0ce7cdfd59eff8577' => 
    array (
      0 => '/www/web/www_wanfeng365_com/public_html/module/area/template/shopbaidumap.html',
      1 => 1411484372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246793376545ef0b7d45da6-88865738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteurl' => 0,
    'tempdir' => 0,
    'baidumapkey' => 0,
    'dlat' => 0,
    'dlng' => 0,
    'cityname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_545ef0b7de5f57_83666416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545ef0b7de5f57_83666416')) {function content_545ef0b7de5f57_83666416($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml"><head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta http-equiv="Content-Language" content="zh-CN"> 
<meta content="all" name="robots"> 
<meta name="description" content=""> 
<meta content="" name="keywords"> 
<title>百度地图</title> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/admin.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/map.css"> 
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquerynew.js" type="text/javascript" language="javascript"></script>  
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo $_smarty_tpl->tpl_vars['baidumapkey']->value;?>
"></script>
<style>
	.searchkuang{position:absolute;left:50px;z-index:2000;top:20px;;width:290px;}
	 .showsearch{clear:both;width:280px;background-color:#fff}
	 .showsearch li{padding:3px 3px 3px 3px;border-bottom:2px solid gray;}
	 .showsearch li.on{font-weight:bold;border-bottom:2px solid #f60;}
	</style>
</head>
<script>
	$('.showsearch li').live("click", function() {   
	     $(this).addClass('on').siblings().removeClass('on'); 
	     if($(this).attr('address') != undefined){
	     	 var newpoint = new BMap.Point($(this).attr('lng'), $(this).attr('lat')); 
	     	  map.centerAndZoom(newpoint, map.getZoom());
	     	  marker.setPosition(newpoint);  
	     	  var temp_link = savemapurl.replace('@lat@', $(this).attr('lat')).replace('@lng@', $(this).attr('lng'));
	 	     var contentc = '<p class="infoAddress">'+$(this).attr('address')+'</p><a href="#" class="mapBtns" onclick="mapsetlink(\''+temp_link+'\');">提交保存地址</a>';
	       var NewinfoWindow = new BMap.InfoWindow(contentc);  
	        map.openInfoWindow(NewinfoWindow,newpoint); 
	     }
  });
  $('#searchvalue').live("click",function(){
  	if($(this).val() ==  $(this).attr('placeholder')){
  		$(this).val('');
  	} 
  });
  function mapsetlink(bojlink){ 
  	
  	 
     var url = bojlink; 
	 $.ajax({
     type: 'get',
     async:false,
     data:{},
     url: url.replace('@random@', 1+Math.round(Math.random()*1000)), 
     dataType: 'json',success: function(content) {  
     	if(content.error == false){
     		alert('保存成功');
     	   parent.closemydilog();// alert('提交成功');//diasucces('操作成功','');
     	}else{
     		if(content.error == true)
     		{
     			alert(content.msg);//diaerror(content.msg); 
     		}else{
     			alert(content); 
     		}
     	} 
		},
    error: function(content) { 
    	alert('数据获取失败'); 
	  }
   });   
   
 // return false; */
   // alert('提价保存');
 }
    
</script>
<body style="background:none;width:870px;height:550px;">
	<div class="searchkuang">
		<input type="hidden"  name="cityCode" id="cityCode" value="">
		<input type="hidden"  name="cityname" id="cityname" value="">
		 <div> <input type="text" id="searchvalue" name="searchvalue" value="录入搜索地址" placeholder="录入搜索地址" style="float:left;width:200px;line-height:25px;height:25px;"><a href="#" class="mapBtns" onclick="dosearchcity();">提交搜索</a> </div>
		 <div class="showsearch" style="background-color:#fff;" >
		   <ul id="backdatali">  
		   	</ul>	
		 	
		 </div>
 </div>
  <div id="SearchAddmap">
	
	
	
	
	</div> 
 <script type="text/javascript">
 
 	
var siteurl = '<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
';

var savemapurl = '<?php echo FUNC_function(array('type'=>'url','link'=>"/area/savemapshoplocation/lat/@lat@/lng/@lng@/random/@random@/datatype/json"),$_smarty_tpl);?>
';  
// 百度地图API功能 
var map = new BMap.Map("SearchAddmap");
/*首先判断 坐标*/
var point = null;
var myIcon1 = new BMap.Icon(siteurl+"/upload/map/pepole.png", new BMap.Size(30,30));  

var  marker = null;
/*当城市为一级目录 时直接搜索城市名*/
 
	
	 var temp_linksss = savemapurl.replace('@lat@','<?php echo $_smarty_tpl->tpl_vars['dlat']->value;?>
').replace('@lng@', <?php echo $_smarty_tpl->tpl_vars['dlng']->value;?>
);
	 	//   alert(temp_link);
	 
	 	 var content = '<p class="infoAddress"><?php echo $_smarty_tpl->tpl_vars['cityname']->value;?>
</p><a href="#" class="mapBtns" onclick="mapsetlink(\''+temp_linksss+'\');">提交保存地址</a>';
	
		point = new BMap.Point(<?php echo $_smarty_tpl->tpl_vars['dlng']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['dlat']->value;?>
);  
		marker = new BMap.Marker(point,{icon:myIcon1}); 
	  infoWindow = new BMap.InfoWindow(content);
	  	map.addOverlay(marker);
	  	 map.openInfoWindow(infoWindow,point);
	  	 map.centerAndZoom(point, 15);
	 $.getScript('http://api.map.baidu.com/geocoder/v2/?ak=<?php echo $_smarty_tpl->tpl_vars['baidumapkey']->value;?>
&callback=renderReverse&location='+<?php echo $_smarty_tpl->tpl_vars['dlat']->value;?>
+','+<?php echo $_smarty_tpl->tpl_vars['dlng']->value;?>
+'&output=json&pois=1');   
	
 
 
//加载缩放级别
map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL}));  //右上角，仅包含平移和缩放按钮
map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT, type: BMAP_NAVIGATION_CONTROL_PAN}));  //左下角，仅包含平移按钮
map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_BOTTOM_RIGHT, type: BMAP_NAVIGATION_CONTROL_ZOOM}));  //右下角，仅包含缩放按钮
function showLocation(datas){ 
	/*  showLocation&&showLocation({"status":0,"result":{"location":{"lng":113.70801125038,"lat":34.797406405145},"precise":0,"confidence":16,"level":"\u533a\u53bf"}})*/
	if(datas.status == 0){
		point = new BMap.Point(datas.result.location.lng, datas.result.location.lat);  
		marker = new BMap.Marker(point,{icon:myIcon1}); 
	  infoWindow = new BMap.InfoWindow('');
	  	map.addOverlay(marker);
	  //	 map.openInfoWindow(infoWindow,point);
	  	 map.centerAndZoom(point, 15);
	  $.getScript('http://api.map.baidu.com/geocoder/v2/?ak=<?php echo $_smarty_tpl->tpl_vars['baidumapkey']->value;?>
&callback=renderReverse&location='+datas.result.location.lat+','+datas.result.location.lng+'&output=json&pois=1');  
	}else{
	   alert(datas.message);
	} 
} 
map.addEventListener("click",function(e){
	//点击监听事件 
	 var newpoint = new BMap.Point(e.point.lng, e.point.lat); 
	 map.centerAndZoom(newpoint, map.getZoom());
	 marker.setPosition(new BMap.Point(e.point.lng, e.point.lat));  
	 $.getScript('http://api.map.baidu.com/geocoder/v2/?ak=<?php echo $_smarty_tpl->tpl_vars['baidumapkey']->value;?>
&callback=renderReverse&location='+e.point.lat+','+e.point.lng+'&output=json&pois=1');   
});
//移动左标
function renderReverse(datas){
	 if(datas.status == 0){  
	 	 var newpoint = new BMap.Point(datas.result.location.lng, datas.result.location.lat); 
	 	 
	 	   var temp_link = savemapurl.replace('@lat@',datas.result.location.lat).replace('@lng@', datas.result.location.lng);
	 	//   alert(temp_link);
	 
	 	 var contentc = '<p class="infoAddress">'+datas.result.formatted_address+'</p><a href="#" class="mapBtns" onclick="mapsetlink(\''+temp_link+'\');">提交保存地址</a>';
	 	 
	   var NewinfoWindow = new BMap.InfoWindow(contentc);  
	   map.openInfoWindow(NewinfoWindow,newpoint); 
	   $('#cityCode').val(datas.result.cityCode); 
	   $('#cityname').val(datas.result.addressComponent.city);
	   //addressComponent":{"city
	 }else{
	 	 alert(datas.message);
	 } 
}
//在输入框中 输入地址 在相似城市区域内查找 内容
function dosearchcity(){
	//searchvalue" value="录入搜索地址" placeholder="录入搜索地址"
	 
	   var searchvalue = $('#searchvalue').val();
	  if($('#searchvalue').val() ==  $('#searchvalue').attr('placeholder')){
	    $('#backdatali').html('<li>请录入查询条件</li>');
	    return false;
	  }
	  if(searchvalue == ''){
	  	$('#backdatali').html('<li>请录入查询条件</li>');
	  	return false;
	  }   
		//  $.getScript('http://api.map.baidu.com/place/v2/suggestion?query='+searchvalue+'&region='+citycode+'&output=json&ak=<?php echo $_smarty_tpl->tpl_vars['baidumapkey']->value;?>
'); 
		  var url = siteurl+'/index.php?controller=site&action=mapjson&random=@random@'; 
	    $.ajax({
         type: 'post',
         async:false, 
         data:{'searchvalue':searchvalue,'citycode':'','cityname':$('#cityname').val()},
         url: url.replace('@random@', 1+Math.round(Math.random()*1000)), 
         dataType: 'json',success: function(content) {    
         	if(content.status == 0){
         		   var  resultobj = content.results;
         		   $('#backdatali').html('');
         		   
         		    $.each(resultobj, function(i,val){  
         		    	$('#backdatali').append('<li address="'+val.address+'" lat="'+val.location.lat+'" lng="'+val.location.lng+'" >'+val.name+'</li>'); 
         		    });  
         		//result
         	}else{
         	$('#backdatali').html('<li>'+content.message+'</li>');
         	}
          
	    	},
        error: function(content) { 
        	$('#backdatali').html('<li>获取数据失败</li>');
	      }
      });  
		   
	 
	
	
}

//检索  附近  坐标   
 
</script>
 
</body>
</html><?php }} ?>