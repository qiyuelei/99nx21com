<?
	require_once 'lib/function.php';
	require_once 'page.Class.php';
/*  接收get参数,此部分不需修改  */

	$num_iid=$_GET['num_iid'];
	$cid = !($_GET['cid'])?'0':intval($_GET['cid']);
	$parent_cid = !($_GET['parent_cid'])?'0':intval($_GET['parent_cid']);	   
  	$keyword = $_GET['keyword'];
  	$start_price= !($_GET['start_price'])?'0.01':intval($_GET['start_price']);
  	$end_price= !($_GET['end_price'])?'99999999':intval($_GET['start_price']);
  	$auto_send = $_GET['auto_send'];
  	$area = $_GET['area'];
  	$start_credit= !($_GET['start_credit'])?'1heart':$_GET['start_credit'];
  	$end_credit= !($_GET['end_credit'])?'5goldencrown':$_GET['end_credit'];	  
  	$sort = $_GET['sort'];
	$guarantee =$_GET['guarantee'];
	$start_commissionRate= !($_GET['start_commissionRate'])?'150':intval($_GET['start_commissionRate']);
  	$end_commissionRate= !($_GET['end_commissionRate'])?'5000':intval($_GET['end_commissionRate']);
  	$start_commissionNum= !($_GET['start_commissionNum'])?'0':intval($_GET['start_commissionNum']);
  	$end_commissionNum= !($_GET['end_commissionNum'])?'99999999':intval($_GET['end_commissionNum']);
  	$page_no = !($_GET['page'])?'1':intval($_GET['page']);
  	$page_size = !($_GET['page_size'])?'10':intval($_GET['page_size']);
	
/*  以下配置参数根据情况进行修改  */	
	
	//false为正式测试环境,true为测试环境
	$testMode = 'false';

	if ($testMode=='true'){
	   $url = 'http://gw.api.tbsandbox.com/router/rest?';  //沙箱环境提交URL
	$appKey = 'test';  
 $appSecret = 'test'; 	
  $userNick = 'sandbox_c_2'; //沙箱环境可选昵称	 	

	/* 沙箱环境可选昵称
	
	 B商家测试账号(商城卖家)： 
	  alipublic00 alipublic01 alipublic02 alipublic03 alipublic04 alipublic05 alipublic06 
	  alipublic07 alipublic08 alipublic09 alipublic10 alipublic11 alipublic12 alipublic13 
	  alipublic14 alipublic15 alipublic16 alipublic17 alipublic18 alipublic19 alipublic20 
	  alipublic21 alipublic22 alipublic23 alipublic24 alipublic25 alipublic26 alipublic27 
	  alipublic28 alipublic29 
	
	 C商家测试账号(淘宝卖家)： 
	  sandbox_c_1 sandbox_c_2 sandbox_c_3 sandbox_c_4 sandbox_c_5 sandbox_c_6 sandbox_c_7 
	  sandbox_c_8 sandbox_c_9 sandbox_c_10 sandbox_c_11 sandbox_c_12 sandbox_c_13 sandbox_c_14 
	  sandbox_c_15 sandbox_c_16 sandbox_c_17 sandbox_c_18 sandbox_c_19 sandbox_c_20 sandbox_c_21 
	  sandbox_c_22 sandbox_c_23 sandbox_c_24 sandbox_c_25 sandbox_c_16 sandbox_c_27 sandbox_c_28 
	  sandbox_c_29 sandbox_c_30 
	*/
	
	}else if($testMode=='false'){
	   $url = 'http://gw.api.taobao.com/router/rest?';  //正式环境提交URL
	$appKey = '21360207'; //填写自己申请的AppKey
 $appSecret = '95d84c29db89ae25e71015ca2a4d486e'; //填写自己申请的$appSecret
  $userNick = 'globallong8'; //淘宝昵称		
	}		

?>