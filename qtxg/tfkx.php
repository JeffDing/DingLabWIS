<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv=refresh content="5">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title>台风快讯</title>
</head>
<p>

<?php
//header("Content-type: text/html; charset=utf-8"); 
$url = 'http://www.nmc.cn/publish/typhoon/typhoon_new.html'; 
$info=file_get_contents($url);
preg_match('|<!--starttext-->(.*?)<!--endtext-->|s',$info,$b);
$b = str_replace("/img/", 'http://www.nmc.cn/img/', $b);
echo $b[1];

?>