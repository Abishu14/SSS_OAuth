<!--Create App ID and App secret from the facebook developers page -->
<?php

	session_start();
	require_once "Facebook/autoload.php";
	$FB = new \Facebook\Facebook([
	        'app_id' => '2135054230148629',
			'app_secret' =>'520e01846b4a5c0e06e594693cfe417b',
			'default_graph_version' => 'v3.0'
	
	]);
	$helper = $FB->getRedirectLoginHelper();
?>