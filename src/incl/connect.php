<?php
require 'settings.php'; //loads our $mysql_ vars (as well as a lot of unneeded stuff)

$conn_error = 'Could not connect to the database';

if(@!mysql_connect($mysql_host, $mysql_user, $mysql_pass)||!mysql_select_db($mysql_database)){

if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass)||!mysql_select_db($mysql_database)){

die($connerror);

}

}
?>