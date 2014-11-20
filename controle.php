<?php
	$_GET['key'] = (isset($_GET['key']) ? $_GET['key'].'/' : 'index');
	$key = $_GET['key'];
	$url = explode('/', $key);

	$archive = $url[0];
	$single = ($url[1] == NULL) ? 'home' : $url[1];

	function __autoload ( $file ) {
		require_once('app/models/'.$file.'.php');
	}

	require_once('system/controller.php');
	require_once('system/model.php');

	require_once('app/controllers/'.$archive.'Controller.php');
	$app = new $archive();
	$app->$single();