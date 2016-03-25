<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/db.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/magicQuotes.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/otherHelpers.inc.php';
	
	magicQuotes();
	
	session_start();

	if(isset($_POST["log-out"])) {
		$_SESSION["username"] = NULL;
	}

	$type = "";
	connect('strims', 'root', 'Martinez');

	if(isset($_POST["username"])) {
		$_SESSION["username"] = $_POST["username"];
		$_SESSION["password"] = $_POST["password"];
	}

	if(isset($_SESSION["username"])) {
		login($_SESSION["username"], $_SESSION["password"], $type);
		if($type != "") {
			include 'home.html.php';
			exit();
		}
	}

	include 'index.html.php';
?>