$(function(){ 
	$('body').append('<div id="addload" style="position: absolute; z-index: 1000; left: 30%; top: 30%; opacity: 1; display: none; height: 15px;width: 15px;border-radius: 15px;line-height: 12px;overflow:hidden; background: #ea5413;"></div>'); 
});

//加购物车动画
function cartimg(obj,gid){
	     $("#addload").show(); 
        var pos =$(obj).offset();
       var topval = pos.top;
       $("#addload").css("top", topval + "px"); 
       $("#addload").css("left", pos.left + "px");
        $("#addload").css({'width':'15px','height':'15px'}); 
       var target_ob = $('#total_money').offset();
       var target_top = Number(target_ob.top);
       var target_left = Number(target_ob.left);
       $("#addload").animate({top:target_top,left:target_left, 'width':'0px','height':'0px'});   
       $('#total_count').text(Number($('#total_count').text())+1);
	    	$('#total_money').text(Number($('#total_money').text())+Number($(obj).attr('data-price'))); 
	    	
	    	if(Number($('#total_money').text()) > Number(shoplimitcost)){
	          		 $('#showcha').hide();
	          		 $('#gotocart').show();
	          	}else{
	          	        var checkcost = Number(shoplimitcost)-Number($('#total_money').text());
	          	       $('#showcha').show();
	          		       $('#gotocart').hide();
	          	        $('#showcha').text('差'+checkcost+'起送');
	          	        
	          	}
	    	
	    	
	    	$('#gidli_'+gid).find('.righ_l_b_btn_moren').hide();
	    	$('#gidli_'+gid).find('.righ_l_b_btn_hover').show();
	  //    var typeid = $(obj).attr('typeid');
	  //    $('#typelist'+typeid).show();
	 //     $('#typelist'+typeid).text(Number($('#typelist'+typeid).text())+1);
	    //  $('#gidli_'+gid).addClass('onselect');
	      $('#gshu_'+gid).text(Number($('#gshu_'+gid).text())+1); 
	    	//if($(valse).is(':checked') == true)
} 
function addonedish(gid,tshopid,num,obj){   
	    $('#loading').show();
    	var url= siteurl+'/index.php?controller=site&action=addcart&goods_id='+gid+'&shopid='+tshopid+'&num=1&datatype=json&random=@random@';
      url = url.replace('@random@', 1+Math.round(Math.random()*1000)); 
    	var bk = ajaxback(url,'');
	    if(bk.flag == false){  
	       if($('#total_money').html() != undefined){
	         
	   	 	   cartimg(obj,gid);  
	   	 	   
	   	   }else{// $('#loading').hide();
	   	   	
	   	    	  freshcart();
	   	   }
	    }else{
	    	 Tmsg(bk.content);  
	    } 
	    $('#loading').hide();
}
function uponedish(gid,tshopid,num){ 
	var url= siteurl+'/index.php?controller=site&action=addcart&goods_id='+gid+'&shopid='+tshopid+'&num=1&datatype=json&random=@random@';
      url = url.replace('@random@', 1+Math.round(Math.random()*1000)); 
    	var bk = ajaxback(url,'');
	    if(bk.flag == false){ 
	       freshcart();
	    }else{
	    	Tmsg(bk.content);  
	    }
}
	
function delshopcart(){
	if(confirm('确认清空购物车')){
	var url= siteurl+'/index.php?controller=site&action=clearcart&shopid='+shopid+'&num=1&datatype=json&random=@random@';
      url = url.replace('@random@', 1+Math.round(Math.random()*1000)); 
	var bk = ajaxback(url,'');
	    if(bk.flag == false){ 
	       freshcart();
	    }else{
	    	Tmsg(bk.content);
	    }
  }
  return false;
}
function delbackshop(nowlinke){
	var url= siteurl+'/index.php?controller=site&action=clearcart&shopid='+shopid+'&num=1&datatype=json&random=@random@';
      url = url.replace('@random@', 1+Math.round(Math.random()*1000)); 
	var bk = ajaxback(url,'');
	    if(bk.flag == false){ 
	      window.location.href= nowlinke;// freshcart();
	    }else{
	    	Tmsg(bk.content);
	    }
   
}

function removeonedish(gid,tshopid,num){ 
	   $('#loading').show();
	   url = siteurl+'/index.php?controller=site&action=downcart&goods_id='+gid+'&shopid='+tshopid+'&num=1&datatype=json&random=@random@';
	  	 url = url.replace('@random@', 1+Math.round(Math.random()*1000));
    	var bk = ajaxback(url,'');
	    if(bk.flag == false){ 
	       if($('#total_money').html() != undefined){
	         /*操作分类*/
	         var typeid = $('#gidli_'+gid).attr('typeid'); 
	         var notypenum = Number($('#typelist'+typeid).text()) -1; 
	          $('#typelist'+typeid).text(notypenum);
	         if(notypenum < 1){
	             $('#typelist'+typeid).text(0);
	             $('#typelist'+typeid).hide();
	         } 
	         notypenum = Number($('#total_count').text())-1;
	         $('#total_count').text(notypenum);
	         if(notypenum < 1){
	         	  $('#total_count').text(0);
	         }
	         notypenum = Number($('#total_money').text())-Number($('#gidli_'+gid).attr('data-price')); 
	          $('#total_money').text(notypenum);
	         if(notypenum < 0){
	         	$('#total_money').text(0);
	         }
	         	if(Number($('#total_money').text()) > Number(shoplimitcost)){
	          		  $('#showcha').hide();
	          		 $('#gotocart').show();
	          	}else{
	          	        var checkcost = Number(shoplimitcost)-Number($('#total_money').text());
	          	       $('#showcha').show();
	          		       $('#gotocart').hide();
	          	        $('#showcha').text('差'+checkcost+'起送');
	          	        
	          	}
	          	
	          	
	          	
	          	
	           
	          	      
	         notypenum = Number($('#gshu_'+gid).text()) -1;
	          $('#gshu_'+gid).text(notypenum);
	         if(notypenum < 1){
	         	$('#gshu_'+gid).text(0);
	         	$('#gidli_'+gid).removeClass('onselect');
	         	$('#gidli_'+gid).find('.righ_l_b_btn_hover').hide();
	         	$('#gidli_'+gid).find('.righ_l_b_btn_moren').show();
	         	
	         } 
	   	   }else{ 
	   	    	  freshcart();
	   	   }
	    }else{
	    	Tmsg(bk.content);
	    }
	  $('#loading').hide();
}
 
//删除商品
function removesupplierdish(gid,tshopid){
 
	url = siteurl+'/index.php?controller=site&action=delcartgoods&goods_id='+gid+'&shopid='+tshopid+'&num=1&datatype=json&random=@random@';
	url = url.replace('@random@', 1+Math.round(Math.random()*1000));
	var bk = ajaxback(url,'');
	    if(bk.flag == false){ 
	       freshcart();
	    }else{
	    	Tmsg(bk.content);
	    }
}
//修改购物车数量
function modifycart(gid,oldnum,tshopid){  
	var nowgscount = 	$('#cart_count'+gid).val();
	url = siteurl+'/index.php?controller=site&action=modifycart&goods_id='+gid+'&shopid='+tshopid+'&num='+nowgscount+'&datatype=json&random=@random@';
	url = url.replace('@random@', 1+Math.round(Math.random()*1000));
	var bk = ajaxback(url,'');
	    if(bk.flag == false){ 
	       freshcart();
	    }else{
	    	$('#cart_count'+gid).val(oldnum);
	    	Tmsg(bk.content);
	    }
} 
function freshcart(){
	url = siteurl+'/index.php?controller=app&action=cart&shopid='+shopid+'&datatype=json&random=@random@';
	url = url.replace('@random@', 1+Math.round(Math.random()*1000));
	var bk = ajaxback(url,''); 
	if($('#shocart').html() == undefined){
		 
		initshop(bk);
	}else{
	 
	 freshcartdata(bk);
	 
	}
}
function freshcartdata(datas){ 
	 $('#shocart').html('');
	  if(datas.flag == false){    
    	   //	$('.listcontent').remove();
    	    
    	 	  $.each(datas.content.list, function(i,val){    
    	 	 	  var htmls = template.render('cartlist', {list:val});
    	 	 	  $('#shocart').append(htmls);
    	    }); 
    	    $('#cart_total').text(datas.content.sum);
    	    $('#bagcost').text(datas.content.bagcost);
    	    $('#cxcost').text(datas.content.downcost);
    	     
    	    cartbagcost = datas.content.bagcost;
    	    cxcost =  datas.content.downcost;
          cartsum = datas.content.sum;
          cartpscost = datas.content.pscost; 
          surecost = datas.content.surecost;
           $('.order_btn_right').bind("click", function() {   
      	    	if(checknext ==  false){ 
      	    		checknext = true;
      	     	   addonedish($(this).attr('data-id'),$(this).attr('data-shopid'),1,this);
      	     	   setTimeout("myyanchi()", 500 );
           	  }
      	 	
          }); 
           $('.order_btn_left').bind("click", function() {   
           	  if(checknext ==  false){ 
           	  		checknext = true;
      	     	   removeonedish($(this).attr('data-id'),$(this).attr('data-shopid'),1,this);
      	     	   setTimeout("myyanchi()", 500 );
           	  }
      	 	
          });
     	  
    }else{
  		   
      	//	$('.listcontent').remove();
      	//	$('.colgreen').remove();//移除促销
      		cartbagcost =0;
          cartpscost = 0;
           cartsum = 0;
          cxcost = 0;
          //    carttj();
          $('.cart_gojs').hide();
          $('#nonecart').show();
          $('#cartlist').hide();
          $('#showdet').hide();
          
       
    }
}
function doordershow(){
	var checkid = $('#shocart').find('li').length;
	if(checkid > 0){
		$('#cartcontent').hide();
		$('#makecontent').show();
		$('#jifen').val(0);
		$('#juanid').val(0);
		$('#juancost').val(0);
	}else{
	   Tmsg('购物车无商品');
	}
   
}
function doselectjifen(bili,myscore){
	
	  var oldjifen = Number($('#jifen').val());
	  var myjifen = myscore;
		var jifenbili =bili;
		var rslt = Number(myjifen)/Number(jifenbili); //闄� 
	  var canduihuan = rslt - Math.floor(rslt) > 0?Math.floor(rslt):Math.floor(rslt);//鎬婚〉闈㈡暟閲�
	  var shopcost = surecost;
	 
	  var cancost = Math.ceil(shopcost) > canduihuan ? canduihuan:Math.ceil(shopcost); 
	  
	  var htmlbottom = '';
	  if(jifenbili > 0){ 
	      for(var i=1;i<=cancost;i++){
	      	 var temp_pre = '';
	      	if(oldjifen == i){
	      		temp_pre = 'on';
	      	}
	      	 var jifenall = Number(i)*jifenbili;
	      	 htmlbottom += '<li class="'+temp_pre+'" onclick="selectjifen(\''+i+'\',\'使用'+jifenall+'抵扣'+i+'元\');">抵扣'+i+'元</li>';
	      }
	      if(htmlbottom != ''){
	      	htmlbottom = '<div class="jifenshow"><ul>'+htmlbottom+'</ul></div>  <div style="clear:both;height:20px;"></div>';
	      	$('#popcontent').html(htmlbottom);
	  	 	  $('#mask1').show();
	         $('#popup1').show();
	      }else{
	      	 Tmsg('积分不超过'+bili+'，不能抵扣');
	      }
	      
	      
	      
	  }else{
	    Tmsg('积分不超过'+bili+'，不能抵扣');
	  } 
}
function selectjifen(dikoujin,names){
  $('#jifen').val(dikoujin);
  $('#jifenshuoming').text(names);
   $('#mask1').hide();
	$('#popup1').hide();
}
function selectjuan(juanid,juancost,juanname){
 $('#juanid').val(juanid);
 $('#juancost').val(juancost);
 $('#juanshuoming').text(juanname);
  $('#mask1').hide();
	$('#popup1').hide();
}
function doselectjuan(){
	 var oldjuanid = Number($('#juanid').val());
	if(juanlist.length > 0){
		var htmle = '';
		var checkcost = Number(surecost);
		$.each(juanlist,function(i,field){  
			var juancost = Number(field.limitcost);
			
			   if(checkcost > juancost){
			   	   var temp_pre = oldjuanid == field.id ?'on':'';
			      	htmle +='<li class="'+temp_pre+'" onclick="selectjuan(\''+field.id+'\',\''+field.cost+'\',\''+field.name+'\');">'+field.name+'</li>';
			   	
			   }
		});
		if(htmle == ''){
		  Tmsg('无满足条件的优惠券');
		}else{
			 htmle = '<div class="juanshow"><ul>'+htmle+'</ul></div>  <div style="clear:both;height:20px;"></div>';
	      	$('#popcontent').html(htmle);
	  	 	  $('#mask1').show();
	         $('#popup1').show();
		} 
	}else{
	  Tmsg('您未绑定优惠券');
	  $('#mask1').hide();
	  $('#popup1').hide();
	}
}
function closeout(){ 
	  $('#mask1').hide();
	  $('#popup1').hide(); 
}

function carttj(){
	//alert(cartsum);
	$('#packagingFee').text(cartbagcost);
	$('#fixedDeliveryFee').text(cartpscost);
	var totalFee =Number(cartbagcost)+Number(cartpscost)+Number(cartsum)-Number(cxcost);
	$('#totalFee').text(totalFee);
} 

function  orderSubmit(){
	if($('#username').val() == ''){
	   Tmsg('请录入联系人');
	   return false;
	}
	if($('#mobile').val() == ''){
	   Tmsg('请录入联系人');
	   return false;
	}
	if($('#addressdet').val()  == $('#addressdet').attr('data')){
	  Tmsg('请录入具体地址');
	  return false;
	}
	if($('#DeliveryTime').find("option:selected").val() == 0){
	    Tmsg('请录入联送货时间');
	   return false;
	}
	
	
	
	
	
	$('#loading').show();
	  url = siteurl+'/index.php?controller=app&action=makeorder&datatype=json&random=@random@';
	  url = url.replace('@random@', 1+Math.round(Math.random()*1000));
   $.ajax({         //script定义
            url: url.replace('@random@', 1+Math.round(Math.random()*1000)),
            dataType: "json",
            async:true,
            data:{shopid:shopid,'remark':$('#remark').val(),'username':$('#username').val(),'mobile':$('#mobile').val(),'addressdet':$('#addressdet').val(),'minit':$("#DeliveryTime").find("option:selected").val(),'dikou':$('#jifen').val(),'juanid':$('#juanid').val()},
            success:function(content) { 
            	if(content.error ==  false){
            		window.location.href=  siteurl+'/index.php?controller=app&action=showorder&orderid='+content.msg ;//.html?orderid='+datas.data;
            	}else{//wxsite&action=subshow&orderid=911
            		Tmsg(content.msg);
            	}
             	$('#loading').toggle();
            
            },
            error:function(){
             $('#loading').toggle();
            }
   });     
}
 
 
 


