<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<META http-equiv=Content-Type content="text/html; charset=utf-8">

<?php
$right_pwd="tfb111111";
$pd="0";
if($_POST['form_pwd']==$right_pwd)
{
$url = 'http://meiguo.jt371.cn/?__proxy_url=aHR0cDovL2Z0cC5lbWMubmNlcC5ub2FhLmdvdi93ZDIwdnh0L2h3cmYtaW5pdC9kZWNrcy8=';  //�����ҳ���ַ
$info=file_get_contents($url);
$info = str_replace('<a href=".', '<a href="http://meiguo.jt371.cn', $info);
echo $info;
}
else
{
	if($pd="0");
	{
    $pd="1";
    echo "��ǰFTPĿ¼��Index of /wd20vxt/hwrf-init/decks";
    echo "<div id=\"formDiv\"><form name=\"f1\" method=\"post\" action=\"\">";
    echo "���������룺";
    echo "<input type=password name=form_pwd>";
    echo "<input type=submit value=\"�ύ����\"></form></div>";
	return false;
	}
	if($pd="1");
	{
	echo "<script>alert('���������룡')</script>";
    echo "�ݲ����ţ��ڲ�ʹ�ã�";
    echo "<div id=\"formDiv\"><form name=\"f1\" method=\"post\" action=\"\">";
    echo "���������룺";
    echo "<input type=password name=form_pwd>";
    echo "<input type=submit value=\"�ύ����\"></form></div>";
	}
}
?>
<title>wd20vxt-DؼL��������վ</title>
