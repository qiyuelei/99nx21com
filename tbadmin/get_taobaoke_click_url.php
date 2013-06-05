<?php
/*调用实例*/
//http://xxx.com/get_shops.php?pageno=1&pagesize=40&cid=14
header("Content-type: text/html; charset=utf-8");
require_once("config.php"); //引入数据库类文件
//将下载SDK解压后top里的TopClient.php第8行$gatewayUrl的值改为沙箱地址:http://gw.api.tbsandbox.com/router/rest,
//正式环境时需要将该地址设置为:http://gw.api.taobao.com/router/rest
 //print_R($_GET);
$cid = isset($_GET['cid'])?$_GET['cid']:'';
$keyword = isset($_GET['keyword'])?$_GET['keyword']:'';
 //$keyword = "GXG官方旗舰店";
//实例化具体API对应的Request类
$req = new TaobaokeShopsGetRequest;
$req->setFields("user_id,click_url,shop_title,commission_rate,seller_credit,shop_type,auction_count,total_auction");
//$req->setCid($cid);
$req->setKeyword($keyword);
$req->setOnlyMall("true");
//$req->setSortField("commission_rate");//commission_rate，auction_count，total_auction
$req->setSortType("desc");
$req->setPageNo($_GET['pageno']);
$req->setPageSize($_GET['pagesize']);
 
//执行API请求并打印结果
$resp = $c->execute($req);
//print_r($resp);
$num = $resp->total_results;
//$num = 0;
if($num != 0){
$resp = (array)$resp->taobaoke_shops->taobaoke_shop;

//======function
    function encode_json($str) {  
        return urldecode(json_encode(url_encode($str)));      
    }
    function url_encode($str) {  
        if(is_array($str)) {  
            foreach($str as $key=>$value) {  
                $str[urlencode($key)] = url_encode($value);  
            }  
        } else {  
            $str = urlencode($str);  
        }  
        return $str;  
    }
//==============function end

//foreach($resp as $val){
//$val = (array)$val; 
//$arr[]=$val;
//echo $arr = encode_json($val);
//exit;
//echo "<br/>";
//print_r(json_decode($arr)).'<br>';

//}
echo  encode_json($resp);
//echo  encode_json($arr);
}else{
echo "null";
}
?>