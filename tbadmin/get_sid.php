<?php
/*调用实例*/
//http://xxx.com/get_shops.php?pageno=1&pagesize=40&cid=14
header("Content-type: text/html; charset=utf-8");
require_once("config.php"); //引入数据库类文件
//将下载SDK解压后top里的TopClient.php第8行$gatewayUrl的值改为沙箱地址:http://gw.api.tbsandbox.com/router/rest,
//正式环境时需要将该地址设置为:http://gw.api.taobao.com/router/rest
 //$_GET[cid] = 14;
 //$_GET['nick'] = '万利达官方旗舰店';
 if($_GET['nick']){
 $nick= $_GET['nick'];
 }else{
 $nick = '万利达官方旗舰店';
 }
 //echo $nick;
//实例化具体API对应的Request类
$req = new ShopGetRequest;
$req->setFields("sid,cid,title,nick,desc,pic_path,created,modified");
$req->setNick($nick);
 
//执行API请求并打印结果
$resp = $c->execute($req);
//print_r($resp);
$num = $resp->total_results;
$num = 1;
if($num != 0){
$resp = (array)$resp->shop;
//print_r($resp);
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

// foreach($resp as $val){
// $val = (array)$val; 
// $arr[]=$val;
//echo $arr = encode_json($val);
//exit;
//echo "<br/>";
//print_r(json_decode($arr)).'<br>';

//}
echo  encode_json($resp);
}else{
echo "null";
}
?>