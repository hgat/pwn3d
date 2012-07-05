<?php
require 'incl/init.php';
$title = 'Home';
require 'template/header.php';
?>

<iframe allowtransparency="true" frameborder="no" height="600" scrolling="auto" src="http://www.facebook.com/plugins/registration.php?
client_id=343340389075728&
redirect_uri=http://hgat.co.uk/register_store.php?&
fields=[
{"name":"name"},
{"name":"email"},
{"name":"password"},
{"name":"gender"},
{"name":"birthday"},
{"name":"captcha"}
]"
scrolling="auto"
frameborder="no"
style="border: none;"
width="500"
height="600">
</iframe>

<?php
require 'template/footer.php';
?>