<?php
	$db_server="localhost";
	$db_user="root";
	$db_password="";
	$db_database="radnja2";
	
	mysql_connect($db_server, $db_user, $db_password) or die(mysql_error());
	mysql_select_db($db_database) or die(mysql_error());
	mysql_query("SET NAMES utf8") or die(mysql_error());
?>