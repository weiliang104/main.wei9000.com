?<?php
header("Content-type:text/html;charset=utf-8");
$conn = mysql_connect("localhost","root","2015abcweilang") or die("���ݿ���������Ӵ���".mysql_error());
mysql_select_db("mywind",$conn) or die("���ݿ����Ӵ���".mysql_error());
mysql_query("set names utf8");
//data_defult_timezone_set("Asin/Shanghai");
?>