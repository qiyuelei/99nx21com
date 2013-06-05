<?php
// 本类由系统自动生成，仅供测试用途
class EmptyAction extends Action {
    public function index(){
	$url = "/index.php/?m=index&a=index".$_REQUEST['_URL_'][0];
		//echo $url = __APP__."/index/index/".$_REQUEST['_URL_'][0]."/".$_REQUEST['_URL_'][1];
	header("Location: $url");
//print_r($_REQUEST);
			//print_r($_REQUEST);
	 	}
		
	public function _empty($name){
	header("Content-Type: text/html;charset=utf-8");
	//	echo "空操作";
		//print_r($_REQUEST);
		$url = __APP__."/index/index/".$_REQUEST['_URL_'][0]."/".$_REQUEST['_URL_'][1];
		header("Location: $url"); 
        }
}