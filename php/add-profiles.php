<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/db.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/magicQuotes.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/otherHelpers.inc.php';
	
	magicQuotes();
	
	//header('P3P: CP="CAO PSA OUR"');		Fixes IE problem. Does not work with Safari.
	session_start();

	include 'add-profiles.html.php';
?>