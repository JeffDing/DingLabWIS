<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
.STYLE1 {
	font-size: 32px;
	font-weight: bold;
	color: #FF0000;
}
-->
</style>

<title>JMA路径预报</title>
<p>
<p><span class="STYLE1">JMA路径预报</span>
<p>
<?php
//header("Content-type: text/html; charset=utf-8"); 
$url = 'http://meiguo.jt371.cn/?__proxy_url=aHR0cDovL3d3dy5qbWEuZ28uanAvanAvdHlwaC8=';  //这儿填页面地址
$info=file_get_contents($url);
preg_match('|<div class="infotable">(.*?)<div id="explain">|s',$info,$a);
preg_match('|</option></select>(.*?)<br clear="all">|s',$info,$b);
$a = str_replace('./?', 'http://zxdl.jt371.cn/?', $a);
//$a = str_replace('./?', 'http://www.jma.go.jp/jp/typh/images/', $a);
$b = str_replace('<option value="a">', ' ', $b);
echo $a[1];
echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
echo $b[1];

?>
  </p>
