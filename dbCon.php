<?php
/*mysql_connect("localhost", "root","");
mysql_select_db("dantri");
mysql_query("SET NAMES 'utf8'");*/
$mysqli = new mysqli("localhost", "root","", "newlands");
$mysqli->set_charset("utf8");
if(mysqli_connect_errno()){
	echo "Loi key noi database: ".mysqli_connect_err();
	exit();
}

?>