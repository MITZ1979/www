<?php
	session_start();
	//加载数据库连接文件
	include_once(../src/conn/mysql_conn.inc.php);
	if (empty($_POST["username"]) or empty($_POST["pass"])){
		echo "<script>alert('用户名和密码不能为空');history.go(-1);</script>"
	}else{
		$username=$_POST["username"];
		$pass=$_POST["pass"];
		
		//判断登陆名是否存在
		$sqltest="select * from tb_user where userName='$username'";
		//执行查寻操作
		$testres=$conn->Execute($sqltest);	
		if (!$testres->EOF) {
			$sqlstr="select * from tb_user where userName={$username} and userPassword={$pass}";
			
		}

	}