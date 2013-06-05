<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {

public function Tencent_weibo(){
import('ORG.Tencent.Tencent');
OAuth::init(C('appid'), C('appkey'));
Tencent::$debug = C('debug');
//打开session
session_start();
//header('Content-Type: text/html; charset=utf-8');

if ($_SESSION['t_access_token'] || ($_SESSION['t_openid'] && $_SESSION['t_openkey'])) {//用户已授权
    //echo '<pre><h3>已授权</h3>用户信息：<br>';
    //获取用户信息
    $r = Tencent::api('user/info');
   // print_r(json_decode($r, true));
    //echo '</pre>';
    //龙发布测试微博
   // if($_REQUEST['t_weibo_add']){
    $params = array(
        'content' => '我现在测试一条微博3344433',
       // 'pic_url' => 'http://openmat.gtimg.com/opentapp/233/100710466_75_1369195133.png'
    );
    $r = Tencent::api('t/add', $params, 'POST');
   // $r = Tencent::api('t/add_pic_url', $params, 'POST');
   // echo $r;
    //}
    // 部分接口的调用示例
    /**
     * 发表图片微博
     * pic参数后跟图片的路径,以表单形式上传的为 : $_FILES['pic']['tmp_name']
     * 服务器目录下的文件为: dirname(__FILE__).'/logo.png'
     * /
    $params = array(
        'content' => '测试发表一条图片微博'
    );
    $multi = array('pic' => dirname(__FILE__).'/logo.png');
    $r = Tencent::api('t/add_pic', $params, 'POST', $multi);
    echo $r;

    /**
     * 发表图片微博
     * 如果图片地址为网络上的一个可用链接
     * 则使用add_pic_url接口
     * /
    $params = array(
        'content' => '以链接形式发表一条图片微博',
        'pic_url' => 'http://mat1.gtimg.com/www/iskin960/qqcomlogo.png'
    );
    $r = Tencent::api('t/add_pic_url', $params, 'POST');
    echo $r;
    */
} else {//未授权
    $callback = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];//回调url
    if ($_GET['code']) {//已获得code
        $code = $_GET['code'];
        $openid = $_GET['openid'];
        $openkey = $_GET['openkey'];
        //获取授权token
        $url = OAuth::getAccessToken($code, $callback);
        $r = Http::request($url);
        parse_str($r, $out);
        //存储授权数据
        if ($out['access_token']) {
            $_SESSION['t_access_token'] = $out['access_token'];
            $_SESSION['t_refresh_token'] = $out['refresh_token'];
            $_SESSION['t_expire_in'] = $out['expires_in'];
            $_SESSION['t_code'] = $code;
            $_SESSION['t_openid'] = $openid;
            $_SESSION['t_openkey'] = $openkey;

            //验证授权
            $r = OAuth::checkOAuthValid();
            if ($r) {
                header('Location: ' . $callback);//刷新页面
            } else {
                exit('<h3>授权失败,请重试</h3>');
            }
        } else {
            exit($r);
        }
    } else {//获取授权code
        if ($_GET['openid'] && $_GET['openkey']){//应用频道
            $_SESSION['t_openid'] = $_GET['openid'];
            $_SESSION['t_openkey'] = $_GET['openkey'];
            //验证授权
            $r = OAuth::checkOAuthValid();
            if ($r) {
                header('Location: ' . $callback);//刷新页面
            } else {
                exit('<h3>授权失败,请重试</h3>');
            }
        } else{
            $url = OAuth::getAuthorizeURL($callback);
            header('Location: ' . $url);
        }
    }
}
	}
	public function share(){
		//echo "share";
	//$url = "http://share.v.t.qq.com/index.php?c=share&a=index&title=多买多送哦~~神速大！！！如果你已绝望，请务必抓好这跟稻草，枯木逢春，雨后竹笋，用";
	//$url = "http://www.baidu.com";
	//	echo $this->fetch($url);
	//	$this->display('Index:share');
	//header("Location: $url");
	}
	public function cid(){
	echo $url = __APP__."/index/index/".$_REQUEST['_URL_'][0]."/".$_REQUEST['_URL_'][1];
	//header("Location: $url");
//print_r($_REQUEST);
	}
    public function index(){
    //	print_r($_REQUEST);
   $coupon_price =  $this->fn_coupon_price($_REQUEST['cid']);
//	$cid = isset($_REQUEST['cid'])?$_REQUEST['cid']:'0';


	$pf = isset($_REQUEST['pf'])?$_REQUEST['pf']:'qzone';  
	$tag = isset($_REQUEST['tag'])?$_REQUEST['tag']:array('egt',0);
	$this->assign('TMP',TMP);
	$this->assign('pf',$pf);

	switch ($_REQUEST['pf'])
{
case tapp:
$this->Tencent_weibo();
  break;
case pengyou:
$qq_user = $this->fn_qq_user($_REQUEST['openid'],$_REQUEST['openkey'],$_REQUEST['pf'],$_REQUEST['pfkey']);
  break;
case qzone:
$qq_user = $this->fn_qq_user($_REQUEST['openid'],$_REQUEST['openkey'],$_REQUEST['pf'],$_REQUEST['pfkey']);
  break;
default:

}

//	if($_REQUEST['pf']){$qq_user = $this->fn_qq_user($_REQUEST['openid'],$_REQUEST['openkey'],$_REQUEST['pf'],$_REQUEST['pfkey']);}
	$Goods = $this->db_Goods();
	$map= array(
		tag => $tag,
		//cid => $cid,
		coupon_price => $coupon_price,
	);
//	print_r($map);
	$list = $Goods->where($map)->order('score desc')->limit(10)->select();
//	print_r($list);
	$this->assign('list',$list);
	$this->assign('openid',$_REQUEST['openid']);

	$this->display('Index:index');
    }
	function fn_qq_user($openid,$openkey,$pf){
		import('ORG.Qq.OpenApiV3');
	//import("@.ORG.Qq.OpenApiV3");       //导入类

	// 应用基本信息
	$appid = 100710466;
	$appkey = 'da65d5e3b7a192696b08d8ce30b6a099';

	// OpenAPI的服务器IP
	// 最新的API服务器地址请参考wiki文档: http://wiki.open.qq.com/wiki/API3.0%E6%96%87%E6%A1%A3
	$server_name = '119.147.19.43';

	// 用户的OpenID/OpenKey
	// $openid = 'E098C1E975A2459E534B48FB3224CFB6';
	// $openkey = '05219DB6D7C04CA0B3F01A51D32635E3';
	$openid = $openid;
	$openkey = $openkey;

	// 所要访问的平台, pf的其他取值参考wiki文档: http://wiki.open.qq.com/wiki/API3.0%E6%96%87%E6%A1%A3
	//$pf = 'qzone';
	$pf = $pf;


	$sdk = new OpenApiV3($appid, $appkey);
	$sdk->setServerName($server_name);

	$ret = $this->get_user_info($sdk, $openid, $openkey, $pf, $_REQUEST['pfkey']);
	$ret['openid'] = $openid;
	$ret['openkey'] = $openkey;
	$ret['pfkey'] = $_REQUEST['pfkey'];
	$ret['pf'] = $pf;
	//print_r("===========================\n");
	//print_r($ret);
	$User = $this->db_User();
	$ins_id = $User->data($ret)->add();
	if($ins_id == ''){
	$map['pfkey'] = $_REQUEST['pfkey'];
	$User->data($ret)->where($map)->save();
	}
	return $ret;

	/**
	 * 获取好友资料
 *
 * @param object $sdk OpenApiV3 Object
 * @param string $openid openid
 * @param string $openkey openkey
 * @param string $pf 平台
 * @return array 好友资料数组
 */

	}
	function get_user_info($sdk, $openid, $openkey, $pf){
		$params = array(
			'openid' => $openid,
			'openkey' => $openkey,
			'pf' => $pf,
		);
		$script_name = '/v3/user/get_info';
		return $sdk->api($script_name, $params,'post');
	}

	function fn_coupon_price($cid){
	switch ($cid){
	case 1:
	$coupon_price = array('between','9,10');
	 break;
	case 2:
	$coupon_price = array('between','10,30');
	  break;
	case 3:
	$coupon_price = array('between','30,50');
	  break;
	case 4:
	$coupon_price = array('between','50,100000000000');
	  break;
	default:
	$coupon_price = array('between','0,10000000000000000');
	}
	return $coupon_price;
	}
	//fetch
	function fetch($url){
		$i = 1;
		if($i == 2){
		$f = new SaeFetchurl();
		$output = $f->fetch($url);
		}else{
 		// 1. 初始化
		 $ch = curl_init();
		//2. 设置选项，包括URL
		//$user_agent = "Baiduspider+(+http://www.baidu.com/search/spider.htm)";//这里模拟的是百度蜘蛛
		//$user_agent = "Google: Mozilla/5.0+(compatible;+Googlebot/2.1;++ http://www.google.com/bot.html)";//这里模拟的是百度蜘蛛
		curl_setopt($ch, CURLOPT_URL, $url);
		//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		//curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		//curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
		//curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
		//3. 执行并获取HTML文档内容
		 $output = curl_exec($ch);
		//4. 释放curl句柄
		 curl_close($ch);
		 }
		return $output;
 		}

		function db_Goods(){
	 		return  M('Goods');
	 	}
		function db_User(){
	 		return  M('User');
	 	}
}
