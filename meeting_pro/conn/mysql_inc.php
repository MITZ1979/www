<?php
	$db_host='127.0.0.1';
	$db_name='db_test_com';
	$db_user='root';
	$db_pass='123456';
	$port='3306';

	//1.建立连接
	$conn=mysql_connect($db_host, $my_user, $db_pass,  $port, $my_name);
	//2.设置sql语句
	$sql="select * from {$db_table}";
	//3.设置字符编码
	mysql_query($conn, "set names utf8");
	//4.查询
	$result=mysql_query($conn, $sql);
	//5.
	mysql_close($conn);
	?>