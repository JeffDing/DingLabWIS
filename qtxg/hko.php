<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<META http-equiv="Content-Type" content="text/html; CHARSET=utf-8">
<title>香港气象台预报</title>

<p>
<p style="font-size:24pt;color:red;text-align:left;font-weight:bold">香港天文台 台风位置<p>
<?php
//header("Content-type: text/html; charset=utf-8"); 
$url = 'http://gb.weather.gov.hk/textonly/v2/tc/tcpc.htm?_uc.htm';  //这儿填页面地址
$info=file_get_contents($url);
//preg_match('|</span><span style="float:right;font-size:18px;font-weight:bold;">(.*?)</span><div style="clear:both;">|i',$info,$a);
preg_match('|</h1>(.*?)<hr>|s',$info,$b);
echo  $b[1];
?>