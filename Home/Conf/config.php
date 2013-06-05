<?php
$arr1 = array(
	//'配置项'=>'配置值'
	'URL_MODEL'      		=> 0,
	'URL_CASE_INSENSITIVE'  => true,
//	'HTML_CACHE_ON'      	=> false,
	'ERROR_MESSAGE'      	=> '页面错误!请稍后再试~~',
	//'SHOW_ERROR_MSG'      	=> true,
	'appid'      	=> 100710466,
	'appkey'      	=> 'da65d5e3b7a192696b08d8ce30b6a099',
	'debug'      	=> false,
	'TMPL_L_DELIM'=>'<{',
	'TMPL_R_DELIM'=>'}>',

   // 'empty:index'=>array('{:Index}_{:404}',0)
);
//$arr2 = include '../../DbLink.conf.php';
$arr2 = include 'DbLink.conf.php';
return array_merge($arr1,$arr2);

?>
