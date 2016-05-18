<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<META http-equiv=Content-Type content="text/html; charset=gb2312">

<?php
$right_pwd="tfb111111";
$pd="0";
if($_POST['form_pwd']==$right_pwd)
{
$url = 'http://meiguo.jt371.cn/?__proxy_url=aHR0cDovLzE5OS45LjIuMTQzL2FyY2hkYXQvc2VjdG9ycy8=';  //这儿填页面地址
$info=file_get_contents($url);
$info = str_replace('<img src=".', '<a href="http://meiguo.jt371.cn', $info);
$info = str_replace('<a href=".', '<a href="http://meiguo.jt371.cn', $info);
echo $info;
}
else
{
	if($pd="0");
	{
    $pd="1";
    echo "当前FTP目录：Index of /archdat/sectors";
    echo "<div id=\"formDiv\"><form name=\"f1\" method=\"post\" action=\"\">";
    echo "请输入密码：";
    echo "<input type=password name=form_pwd>";
    echo "<input type=submit value=\"提交密码\"></form></div>";
	return false;
	}
	if($pd="1");
	{
	echo "<script>alert('请输入密码！')</script>";
    echo "暂不开放，内部使用！";
    echo "<div id=\"formDiv\"><form name=\"f1\" method=\"post\" action=\"\">";
    echo "请输入密码：";
    echo "<input type=password name=form_pwd>";
    echo "<input type=submit value=\"提交密码\"></form></div>";
	}
}
?>
<title>archdat-D丶L气象资料站</title>
