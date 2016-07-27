<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>台风路径预报图2</title>

<p>
<?php
//header("Content-type: text/html; charset=utf-8"); 
$url = 'http://www.nmc.cn/publish/typhoon/probability-img2.html';  //这儿填页面地址
$b = '<script>document.getElementById("zoom_pic").click();</script>';
$a=file_get_contents($url);
echo $a,$b;

?>