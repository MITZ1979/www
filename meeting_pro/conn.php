<?php
/**
	数据库连接文件
*/


$tmppath = substr(__FILE__,0, 23); //substr 截取字符取字符串长度，有复数和整数，整数从前取负数从最后一个字符串取
$newpath=$tmppath."db\db_meeting.mdb"; //数据库路径
include "adodb/adodb.inc.php";	//载入adodb类库文件
$conn=ADONewConnection('access');//建立accessl连接
$conn->Pconnect("Driver={Microsoft Access Driver (*.mdb)}; Dbq=$newpath");
$conn->execute("set names utf8");
?>

