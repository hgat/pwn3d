<?php
require 'settings.php'; //end-user defined variables
require 'connect.php'; //DB stuff

/* Include testing files */
if(file_exists('testing.php')){
	include 'testing.php'; //overrides any variables for testing
}
?>