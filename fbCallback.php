<?php
    require_once "config.php";
	
	$redirectURL ="http://localhost/OAuth2.0/login.php/fb-callback.php/";
	$permission = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permission);
	echo $loginURL;
	?>
