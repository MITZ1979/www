<?php

	session_start();				//初始化session变量
	include_once("conn/conn.php");	//包含配置文件
	/*查找用户资料*/
	//执行用户查询
	$sqlstrvi="select * from tb_meetting_user where userId=$_SESSION['id']";
	$i_rst = $conn->Execute($sqlstrvi);
	echo $i_rst->fields[1];	//输出查询结果
?>