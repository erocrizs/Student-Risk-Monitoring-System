<?php

	//header('P3P: CP="CAO PSA OUR"');		Fixes IE problem. Does not work with Safari.
	session_start();

	require_once $_SERVER['DOCUMENT_ROOT'].'/phpexcel/Classes/PHPExcel.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'/phpexcel/Classes/PHPExcel/IOFactory.php';

	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/db.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/magicQuotes.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/otherHelpers.inc.php';
	
	magicQuotes();

	connect('strims', 'root', 'Martinez');

	if(!issetSession('account')) {
		include 'index.php';
		exit();
	}

	if(!empty($_FILES['file']) || issetPost('add')) {
		if(!empty($_FILES['file'])) {
			
		} else if(issetPost('add')) {
			$reportString = array('studentId', 'dateReported', 'reportedFrom', 'receivingOffice', 
							'caseHandler', 'summary', 'riskViolence', 'ideation', 'attempts', 
							'diagnosis', 'psychiatrist', 'medicine', 'action', 'updatesCaseHandler', 
							'updatesOHS', 'visitsPsychCounselor');
			$report = array();
			for($i = 0; count($reportString) > $i; $i++) {
				$report[$reportString[$i]] = getPost($reportString[$i]);
			}
			$addedReport = addReport($report);
		}
	}

	include 'add-reports.html.php';	
?>