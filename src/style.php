<?php
header("Content-type: text/css; charset: UTF-8");
?>

body {
	text-align: center;
	background-image: url(img/half-life.jpg);
	background-size: 100%;
}

div#container {
	width: 900px;
	margin: 0 auto;
	text-align: center;
}

div#login {
	width: 287px;
	height: 110px;
	background-image: url(img/login.png);
}

div#login:hover {
	background-image: url(img/login_dark.png);
}

div#register {
	width: 287px;
	height: 110px;
	background-image: url(img/register.png);
}

div#register:hover {
	background-image: url(img/register_dark.png);
}

div#preload {
	position: fixed;
	top: -99999px;
	left: -99999px;
}

table {
	margin: 0 auto;
}
