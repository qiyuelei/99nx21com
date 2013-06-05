<?php
/*调用实例*/

header("Content-type: text/html; charset=utf-8");
require_once("config.php"); //引入数据库类文件
//将下载SDK解压后top里的TopClient.php第8行$gatewayUrl的值改为沙箱地址:http://gw.api.tbsandbox.com/router/rest,
//正式环境时需要将该地址设置为:http://gw.api.taobao.com/router/rest
 

 
//实例化具体API对应的Request类
$req = new ShopcatsListGetRequest;
$req->setFields("cid,parent_cid,name,is_parent");
 
//执行API请求并打印结果
$resp = $c->execute($req);
$resp = (array)$resp;
$resp = (array) $resp; 
$resp = (array) $resp['shop_cats']; 
$resp = (array) $resp['shop_cat']; 
//$resp = xmlToArr($req);
//echo "result:";
//print_r($resp);
//$resp = array($resp);

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
foreach($resp as $val){
$val = (array)$val; 
//$val = array($val);
//print_r($val);
$arr[] = $val;
//echo $val->cid."==>".$val->is_parent."==>".$val->name."==>".$val->parent_cid."<br/>";
//$db->query("INSERT tb_shopcats(id,cid,parent_cid,name) VALUES ('','$val->cid','$val->parent_cid','$val->name')");
}
//print_r($arr);
echo encode_json($arr);
/*实例化类：*/
//$db=new mysql("localhost","root","","nx76com","conn","utf8");
//$db->query("INSERT tb_shopcats(id,cid,parent_cid,name) VALUES ('','14','0','新类目')");
//echo $db->insert_id();
//echo $db->mysql_server(1);       //取得mysql服务器信息，可独立使用
//print_r($db->databases());       //以数组形式返回主机中所有数据库名
//$db->show_databases();           //查看mysql服务器上所有数据库，无需任何参数，可独立使用
//$db->show_tables("nx76com");        //查看数据库中所有，参数数据库名请与实例化的类相同
//$db->create_database("gougou");  //创建数据库，可独立使用

?>