<?php
	function logout(){
		if(confirm("确认你个要退出登录吗？")) //输出选着框，用户可以单击"确认" 或取消 按钮
		{
			//润过用户确认退出，则打开login.php页面
			window.open('logout.php', '_parent', '', false);
		}else
		return false;
	} 
