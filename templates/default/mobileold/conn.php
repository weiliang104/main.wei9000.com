?<?php
header("Content-type:text/html;charset=utf-8");
$conn = mysql_connect("localhost","root","2015abcweilang") or die("数据库服务器连接错误".mysql_error());
mysql_select_db("mywind",$conn) or die("数据库连接错误".mysql_error());
mysql_query("set names utf8");
//data_defult_timezone_set("Asin/Shanghai");
?>