<?php
/*
*   method 方法  包含所有会员相关操作
    管理员/会员  添加/删除/编辑/用户登陆
    用户日志其他相关连的通过  memberclass关联
*/
class method   extends adminbaseclass
{ 
	 function index(){  
	 	       $link = IUrl::creatUrl('member/memberlist');
           $this->refunction('',$link);  
	 }
	 
	 function memberlist(){
	   	$this->checkadminlogin();
	 	 $data['username'] =  trim(IReq::get('username'));
	   $data['email'] =  trim(IReq::get('email'));
	 	 $data['groupid'] =  5;
	 	 $data['phone'] =  trim(IReq::get('phone'));
	 	 //构造查询条件
	 	 $where = '';
	 	 $where =  $this->sqllink($where,'username',$data['username'],'=');
	 	 $where =  $this->sqllink($where,'email',$data['email'],'=');
	 	 $where =  $this->sqllink($where,'group',$data['groupid'],'=');
	 	 $where =  $this->sqllink($where,'phone',$data['phone'],'=');
	 	 $data['where'] = $where;
	 	 
	 	 Mysite::$app->setdata($data); 
	 }
	 function memberlistshop(){
	   $this->checkadminlogin();
	 	 $data['username'] =  trim(IReq::get('username'));
	   $data['email'] =  trim(IReq::get('email'));
	 	 $data['groupid'] = 3;
	 	 $data['phone'] =  trim(IReq::get('phone'));
	 	 //构造查询条件
	 	 $where = '';
	 	 $where =  $this->sqllink($where,'username',$data['username'],'=');
	 	 $where =  $this->sqllink($where,'email',$data['email'],'=');
	 	 $where =  $this->sqllink($where,'group',$data['groupid'],'=');
	 	 $where =  $this->sqllink($where,'phone',$data['phone'],'=');
	 	 $data['where'] = $where;
	 	 
	 	 Mysite::$app->setdata($data);  
	 }
	 //后台添加管理员
	 function saveadmin(){
	 	  $this->checkadminlogin();
	 	    $uid = IReq::get('uid');
		    $username = IReq::get('username');
		    $password = IReq::get('password');
		    $groupid = IReq::get('groupid'); 
		   if(empty($uid))
		   {
		   	  if(empty($username)) $this->message('管理员帐号不能为空'); 
		   	  if(empty($username)) $this->message('管理员密码不能为空'); 
		   	  $testinfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."admin where username='".$username."' ");  
		   	  if(!empty($testinfo)) $this->message('管理员帐号名称重复添加失败'); 
		   	 	$arr['username'] = $username; 
	     	  $arr['password'] = md5($password);  
	     	  $arr['time'] = time();   
	     	  $arr['groupid'] = $groupid;   
	     	  $this->mysql->insert(Mysite::$app->config['tablepre'].'admin',$arr);  
		   }else{
		   	  $testinfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."admin where username='".$username."' ");  
		   	  if(empty($testinfo)) $this->message('编辑帐号失败无此帐号'); 
		   	  if(!empty($password)){ 
		   	     $arr['password'] = md5($password); 
		   	  }
		   	  $arr['groupid'] = $groupid;   
		   	  $this->mysql->update(Mysite::$app->config['tablepre'].'admin',$arr,"uid='".$uid."'");	 
		   }
		   $this->success('操作成功');
		  // $this->json(array('error'=>false));
	 }
	 //后台删除管理管理员
	 function deladmin(){
	 	 $this->checkadminlogin();
	    $uid = intval(IReq::get('id'));	 
		  if(empty($uid))  $this->message('用户ID不能为空'); 
		  if($uid  == 1) $this->message('初始化管理员不可删除，请修改此帐号密码');
	    $this->mysql->delete(Mysite::$app->config['tablepre'].'admin',"uid = '$uid'");   
	    $this->success('操作成功');
	 } 
	 //后台保存会员
	 function savemember()
   {
   	  $this->checkadminlogin();
	  	$uid = intval(IReq::get('uid'));
		  $data['username'] = IReq::get('username');
	 	  $data['password'] = IReq::get('password');
	  	$data['phone'] = IReq::get('phone');
	  	$data['address'] = IReq::get('address');
	   	$data['email'] = IReq::get('email');
		  $data['group'] = IReq::get('group');
	  	$data['score'] = IReq::get('score');
	  	$data['cost'] = IReq::get('cost'); 
		  if(!IValidate::email($data['email'])) $this->message('油箱格式错误');
		  if(!IValidate::phone($data['phone'])) $this->message('联系电话格式错误');
		  if(empty($data['username'])) $this->message('用户名不能为空');
		  if(empty($uid))
	    {
	    	  if($this->memberCls->regester($data['email'],$data['username'],$data['password'],$data['phone'],$data['group'],'','',$data['cost'],$data['score']))
	    	  {
	    	  	$this->success('操作成功'); 
	    	  }else{
	    	  	$this->message($this->memberCls->ero());
	    	  }  
	    }else{
	      if($this->memberCls->modify($data,$uid))
	      {
	      	 $this->success('操作成功'); 
	      }else{
	    	 	$this->message($this->memberCls->ero());
	      }
			  
	    }
	    $this->success('操作成功'); 
   }
   //后台删除会员
   function delmember()
 	{
 		$this->checkadminlogin();
		 $uid = intval(IReq::get('id'));	 
		 if(empty($uid))  $this->message('会员ID不能为空'); 
	     
	   /*删除相关店铺**/ 
     /*用户直接相关部分*/
    $this->mysql->delete(Mysite::$app->config['tablepre'].'member',"uid = '$uid'"); 
    $this->mysql->delete(Mysite::$app->config['tablepre'].'oauth',"uid = '$uid'");
    $this->mysql->delete(Mysite::$app->config['tablepre'].'giftlog',"uid = '$uid'"); 
    $this->mysql->delete(Mysite::$app->config['tablepre'].'address',"userid = '$uid'"); 
    $this->mysql->delete(Mysite::$app->config['tablepre'].'comment',"uid = '$uid'");  
    $this->mysql->delete(Mysite::$app->config['tablepre'].'collect',"uid = '$uid'");  
    $this->mysql->delete(Mysite::$app->config['tablepre'].'card',"uid = '$uid'");  
    $this->mysql->delete(Mysite::$app->config['tablepre'].'ask',"uid = '$uid'");  
    $this->mysql->delete(Mysite::$app->config['tablepre'].'juan',"uid = '$uid'");  
    $this->mysql->delete(Mysite::$app->config['tablepre'].'memberlog',"userid = '$uid'");  
    $testinfo = $this->mysql->select_one("select id from ".Mysite::$app->config['tablepre']."shop where uid='".$uid."' "); 
	  if(!empty($testinfo))
	  {
	     $this->mysql->delete(Mysite::$app->config['tablepre'].'shop',"id = '".$testinfo['id']."'");   
	     $this->mysql->delete(Mysite::$app->config['tablepre'].'shopfast',"shopid = '".$testinfo['id']."'");  
	     $this->mysql->delete(Mysite::$app->config['tablepre'].'shopattr',"shopid = '".$testinfo['id']."'");  
	     $this->mysql->delete(Mysite::$app->config['tablepre'].'shopsearch',"shopid = '".$testinfo['id']."'");  
	     $this->mysql->delete(Mysite::$app->config['tablepre'].'areatoadd',"shopid = '".$testinfo['id']."'");  
	     $this->mysql->delete(Mysite::$app->config['tablepre'].'areashop',"shopid = '".$testinfo['id']."'");  
	     
	     $this->mysql->delete(Mysite::$app->config['tablepre'].'goods',"shopid = '".$testinfo['id']."'");  
	     $this->mysql->delete(Mysite::$app->config['tablepre'].'goodstype',"shopid = '".$testinfo['id']."'");  
	     $this->mysql->delete(Mysite::$app->config['tablepre'].'order',"shopid = '".$testinfo['id']."'");  
	     $this->mysql->delete(Mysite::$app->config['tablepre'].'orderdet',"shopid = '".$testinfo['id']."'");  
	     $this->mysql->delete(Mysite::$app->config['tablepre'].'searkey'," type=1 and goid = '".$testinfo['id']."'");  
	     $this->mysql->delete(Mysite::$app->config['tablepre'].'rule',"shopid = '".$testinfo['id']."'");  
   }  
	   $this->success('操作成功'); 
	 }
	 //后台保存会员组
	 function savegroup(){
	 	  $this->checkadminlogin();
	    	$id = intval(IReq::get('id'));	  
	 	    $data['name'] = IReq::get('name');
	 	    $type = IReq::get('type');
	 	    if(empty($data['name']))  $this->message('会员组名不能为空'); 
	 	    $data['type'] = $type == 1?'admin':'font';
	 	    if(empty($id)){
	 	    	 $testinfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."group where name='".$data['name']."' ");  
		   	   if(!empty($testinfo)) $this->message('会员组名称重复'); 
		       $this->mysql->insert(Mysite::$app->config['tablepre'].'group',$data);  
	 	    }else{
	 	    	 $this->mysql->update(Mysite::$app->config['tablepre'].'group',$data,"id='".$id."'");	
	 	    }
	 	  $this->success('操作成功'); 
	 }
	 //后台删除会员组
	 function delgroup(){
	 	  $this->checkadminlogin();
	     $uid = intval(IReq::get('id'));	 
		  if(empty($uid))  $this->message('会员ID不能为空'); 
		  if(in_array($uid,array(1,2,3,4,5))) $this->message('系统会员组不可删除');
	    $this->mysql->delete(Mysite::$app->config['tablepre'].'group',"id = '$uid'");   
	    $this->success('操作成功'); 
	 } 
	 //后台管理员登出
	 function adminloginout(){
	 	 ICookie::clear('adminname'); 
	    ICookie::clear('adminpwd');  
	    ICookie::clear('adminuid');  
	    ICookie::clear('adminshopid'); 
      $link = IUrl::creatUrl('member/adminlogin');
      $this->refunction('',$link); 
	 } 
	function adminmodify(){
		$this->checkadminlogin();
	  $oldpwd = trim(IReq::get('oldpwd'));
		$pwd  = trim(IReq::get('pwd'));
		if(empty($oldpwd))
		{
			 $this->message('旧密码不能为空');
		}
		if(empty($pwd))
		{
			 $this->message('新密码不能为空');
		}
		if($this->admin['password'] != md5($oldpwd))
		{
			 $this->message('旧密码错误');
		}
		 $arr['password'] = md5($pwd);
		 $this->mysql->update(Mysite::$app->config['tablepre'].'admin',$arr,"uid='".$this->admin['uid']."'");	 
		 $this->success('操作成功');
	} 
	         
  function membergrade(){
    	$this->checkadminlogin();
    	$configs = new config('membergrade.php',hopedir);   
	    $data['membergrade'] = $configs->getInfo();
	    
      Mysite::$app->setdata($data); 
  }
  function savemembergrade(){
  	$gradename =   IFilter::act(IReq::get('gradename')); 
  	$from =   IFilter::act(IReq::get('from')); 
  	$to =   IFilter::act(IReq::get('to')); 
  	if(!is_array($gradename)) $this->message('登记名称不是数组');
  	if(count($gradename) != count($from)){
  	    $this->message('等级名称个数和起始积分个数不相等');
  	}
  	if(count($gradename) != count($to)){
  		 $this->message('等级名称个数和结束积分个数不相等');
  	}
  	$newarray = array();
  	foreach($gradename as $key=>$value){
  	   $temp['gradename'] = $value;
  	   $temp['from'] = $from[$key];
  	   $temp['to'] = $to[$key];
  	   $newarray[] = $temp;
  	}
  	 
  	
  	$configData = var_export($newarray,true);
		$configStr = "<?php return {$configData}?>"; 
		$fileObj   = new IFile(hopedir.'/config/membergrade.php','w+'); 
		$fileObj->write($configStr);
   
	  $this->success('操作成功');
  }
   function gradeinstro(){
   	 
  	 $configs = new config('membergrade.php',hopedir);   
	   $data['membergrade'] = $configs->getInfo();
	   
	   //总长度900px;
	   
	   $data['perlong'] = intval(900/(count($data['membergrade'])));
	    
	   
      Mysite::$app->setdata($data); 
     
	 }
  
  
}



?>