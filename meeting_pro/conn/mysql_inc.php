<?php
	$db_host='127.0.0.1';
	$db_name='db_test_com';
	$db_user='root';
	$db_pass='123456';
	$port='3306';

	//1.��������
	$conn=mysql_connect($db_host, $my_user, $db_pass,  $port, $my_name);
	//2.����sql���
	$sql="select * from {$db_table}";
	//3.�����ַ�����
	mysql_query($conn, "set names utf8");
	//4.��ѯ
	$result=mysql_query($conn, $sql);
	//5.
	mysql_close($conn);
	?>