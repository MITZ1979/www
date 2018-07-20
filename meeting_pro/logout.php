<?php
	session_start();	//开启SESSIONz支持
	session_destory();	//销毁SESSION；
	//回到首页
	echo "<script>alert(\'用户已经安全退出！\');locaction=(\"index.php\");</script>";
?>