<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	function close(){
		echo "long";
		echo "<script>window.close();</script>";
	}
	public function sql(){
		if($_REQUEST['add']){
		$_REQUEST['title'] = strip_tags($_REQUEST['title']);
		$_REQUEST['seo_title'] = $_REQUEST['title'];
		$_REQUEST['cid'] = 0;
		$_REQUEST['tag'] = 1;
		$_REQUEST['like'] = rand(100,1500);
		$_REQUEST['fav'] = rand(100,1500);
		//print_r($_REQUEST);
		$Goods = $this->db_Goods();
		$list = $Goods->data($_REQUEST)->add();
		if($list){
		$this->success("添加成功","/thinkadmin.php/index/close");
		}else{
		$this->error('添加失败',"/thinkadmin.php/index/close");
		}
		}
	}
	public function index(){
		//print_r($_POST);
	$url = isset($_POST['url'])?$_POST['url']:'';
	$parse_arr = parse_url($url);
	$output = '';
	parse_str($parse_arr['query'], $output);
	//print_r($output);
	$num_iid = $output['id'];
	$this->assign('url',$url);
	$this->display('Index:goods');
	}
	public function coupon(){
		//print_r($_REQUEST);
		//if($_POST['sub_cha']){
				//print_r($_POST);
				foreach($_POST as $k=>$v){
					if($v != '' && $k !='sub_cha'){
					$data .= "&".$k."=".$v;
					if($k == 'PageNo'){
						$v = $v + 1;
					}
					$data_next .= "&".$k."=".$v;
				}}
				//echo $data;
				$url = "http://www.nx76.com/tbadmin/get_items_coupon.php?".$data;
				//echo $url_next = $data_next;
				$output = $this->fetch($url);
				$list = json_decode($output,true);
				//print_r($list);
	if($_REQUEST['addgood']){
		$this->fn_AddGood($list);
	}
	foreach($_REQUEST as $k => $v){
	$this->assign($k,$v);
	}
	$this->assign('list',$list);
	$this->display('Index:item');
	}
//	}
    public function shopcats(){
    	$url = "http://99.nx21.com/tbadmin/get_shopcats.php";
	$output = $this->fetch($url);
	$list = json_decode($output,true);
	//print_r($list);
	$this->assign('list',$list);
	$this->display('Index:shopcat');
	//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

	 	function fetch($url){
 		// 1. 初始化
		$ch = curl_init();
		// 2. 设置选项，包括URL
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		// 3. 执行并获取HTML文档内容
		$output = curl_exec($ch);
		// 4. 释放curl句柄
		curl_close($ch);
		return $output;
 		}

	public function fn_AddGood($list){
		$list['title'] = strip_tags($list['title']);
		$list['seo_title'] = $list['title'];
		$list['cid'] = 0;
		$list['tag'] = 1;
		$list['like'] = rand(100,1500);
		$list['fav'] = rand(100,1500);
		//print_r($_REQUEST);
		$Goods = $this->db_Goods();

		if($Goods->data($list)->add()){
			echo "添加成功";
		}else{
			$map['num_iid'] = $list['num_iid'];
			if($Goods->data($list)->where($map)->save()){
				echo "更新成功";
			}
		}
	}

		function db_Goods(){
	 		return  M('Goods');
	 	}
}
