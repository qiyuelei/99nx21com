<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<style>.cat li {
	width: 220px;
	float: left;
	margin-right: 10px;
}
</style>
</head>

<body>
<h1>产品目录</h1>
<ul class='cat'>
<li><a href="#" target='_blank'>全部</a></li>
<li><a href="#" target='_blank'>11111</a></li>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["cid"]); ?>" target='_blank'><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

</ul>

</body>
</html>