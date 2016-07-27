<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>JMA报文</title>

</head>
<p>
<p style="font-size:24pt;color:red;text-align:left;font-weight:bold">JMA报文
<p>
<?php
//header("Content-type: text/html; charset=utf-8"); 
$url = 'http://meiguo.jt371.cn/?__proxy_url=aHR0cDovL3d3dy53aXMtam1hLmdvLmpwL2Ntcy93YXJuaW5nLw=='; 
$info=file_get_contents($url);
preg_match('|</span><span style="float:right;font-size:18px;font-weight:bold;">(.*?)</span><div style="clear:both;">|i',$info,$a);
preg_match('|<div class="post_content">(.*?)</div> <!-- end post_content -->|s',$info,$b);
echo  '<p style="font-size:24pt;color:red;text-align:left;font-weight:bold">'.$a[1].'<p>';
echo $b[1];

?>