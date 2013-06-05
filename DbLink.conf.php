<?php
$f=1;
if($f == 1){
return array(
	//'配置项'=>'配置值'
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_NAME' => '99nx21com',
	'DB_USER' => 'root',
	'DB_PWD' => 'admin86',
	'DB_PORT' => '3306',
	'DB_PREFIX' => 'tb_',
	'DB_CHARSET' => 'utf8',
);

}else{
return array(
	//'配置项'=>'配置值'
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_NAME' => '99',
	'DB_USER' => 'root',
	'DB_PWD' => '',
	'DB_PORT' => '3306',
	'DB_PREFIX' => 'tb_',
	'DB_CHARSET' => 'utf8',
);
}
?>
