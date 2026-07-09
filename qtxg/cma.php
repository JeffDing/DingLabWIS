<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>CMA台风报文</title>

</head>
<p>
<p style="font-size:24pt;color:red;text-align:left;font-weight:bold">CMA<p>
<?php
//header("Content-type: text/html; charset=utf-8"); 
$url = 'http://www.nmc.cn/publish/typhoon/message.html';  //这儿填页面地址
$info=file_get_contents($url);
//preg_match('|</span><span style="float:right;font-size:18px;font-weight:bold;">(.*?)</span><div style="clear:both;">|i',$info,$a);
preg_match('|<!--startimage-->(.*?)<!--endtext-->|s',$info,$b);
$b = str_replace("/img/", 'http://www.nmc.cn/img/', $b);
echo $b[1];

?>