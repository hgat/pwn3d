<?php
require 'incl/init.php';
$title = 'Home';
require 'template/header.php';
?>

<div id="preload">
	<img src="img/login_dark.png" />
	<img src="img/register_dark.png" />
</div>

<table>
	<tr>
		<td>
			<a href="#">
				<div id="login"></div>
			</a>
		</td>
		<td>
			<a href="register.php">
				<div id="register"></div>
			</a>
		</td>
	</tr>
</table>

<img src="img/logo.png" id="logo" />

<?php require 'template/footer.php'; ?>