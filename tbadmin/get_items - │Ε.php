<?php
/*调用实例*/
//http://xxx.com/get_shops.php?pageno=1&pagesize=40&cid=14
header("Content-type: text/html; charset=utf-8");
require_once("config.php"); //引入数据库类文件
//将下载SDK解压后top里的TopClient.php第8行$gatewayUrl的值改为沙箱地址:http://gw.api.tbsandbox.com/router/rest,
//正式环境时需要将该地址设置为:http://gw.api.taobao.com/router/rest
 //$_GET[cid] = 14;
 // if($_GET['cid']){
 // $cid = $_GET['cid'];
 // }else{
 // $cid = 0;
 // }
 //print_R($_GET);
$cid = isset($_GET['cid'])?$_GET['cid']:'';
$keyword = isset($_GET['keyword'])?$_GET['keyword']:'';
//实例化具体API对应的Request类
$req = new TaobaokeItemsGetRequest;
$req->setFields("num_iid,title,nick,pic_url,price,click_url,commission,commission_rate,commission_num,commission_volume,shop_click_url,seller_credit_score,item_location,volume");
$req->setCid($cid);
$req->setKeyword($keyword);
$req->setStart_price($start_price);
$req->setEnd_price($end_price);
$req->setNick($nick);
$req->setAuto_send($auto_send);
$req->setArea($area);
$req->setStart_credit($start_credit);
$req->setEnd_credit($end_credit);
$req->setSort($sort);
$req->setGuarantee($guarantee);
$req->setStart_commissionRate($start_commissionRate);
$req->setEnd_commissionRate($end_commissionRate);
$req->setStart_commissionNum($start_commissionNum);
$req->setEnd_commissionNum($end_commissionNum);
$req->setStart_totalnum($start_totalnum);
$req->setKeyword($keyword);
$req->setKeyword($keyword);
$req->setKeyword($keyword);
$req->setPageNo($_GET['pageno']);
$req->setPageSize($_GET['pagesize']);
 
//执行API请求并打印结果
$resp = $c->execute($req);
print_r($resp);
$num = $resp->total_results;
//$num = 0;
//if($num != 0){
//$resp = (array)$resp->taobaoke_shops;
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

// foreach($resp['taobaoke_shop'] as $val){
// $val = (array)$val; 
// $arr[]=$val;
//echo $arr = encode_json($val);
//exit;
//echo "<br/>";
//print_r(json_decode($arr)).'<br>';

// }
// echo  encode_json($arr);
// }else{
// echo "null";
// }
?>