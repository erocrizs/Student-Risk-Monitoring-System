<?php
	session_start();

	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/db.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/magicQuotes.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/otherHelpers.inc.php';
	
	magicQuotes();

	if(issetPost('logout')) {
		$_SESSION['account'] = NULL;
		//setSession('account', NULL);
	}

	connect('strims', 'root', 'Martinez');

	if(issetPost('username') || issetPost('password')) {
		$account = login(getPost('username'), getPost('password'));
		if($account != NULL) {
			setSession('account', $account);
			//$_SESSION['account'] = $account;
			include 'home.html.php';
			exit();
		} else {
			setPost('invalid', true);
		}
	}

	if(issetSession('account')) {
		include 'home.html.php';
		exit();
	}

	include 'index.html.php';
?>