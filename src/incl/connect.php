<?php
	$conn_error = 'Could not connect to the database';
	
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';

	$mysql_database = 'jupu';

	if(@!mysql_connect($mysql_host, $mysql_user, $mysql_pass)||!mysql_select_db($mysql_database)){
		$mysql_host = 'jupucouk.ipagemysql.com';
		$mysql_user = 'hgat';
		$mysql_pass = 'haruhI!';
		if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass)||!mysql_select_db($mysql_database)){
			die($conn_error);
		}
	}
?>