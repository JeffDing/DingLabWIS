<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>��������Ԥ��</title>

<p>
<?php
//header("Content-type: text/html; charset=utf-8"); 
$url = 'http://www.weather.gov.cn/publish/bulletin/elongating.html';  //�����ҳ���ַ
$info=file_get_contents($url);
preg_match('|<!--starttext-->(.*?)<!--endtext-->|s',$info,$a);
$a = str_replace("/publish/", 'http://www.nmc.cn/publish/', $a);
echo $a[1];

?>