<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?php echo ($array["id"]); ?>
	<?php echo ($array["name"]); ?>
<?php if(is_array($array2)): $i = 0; $__LIST__ = $array2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
<?php echo ($array2["2"]); ?>
<hr/>
<?php echo ($website_url); ?>	

</body>
</html>