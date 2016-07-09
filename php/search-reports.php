<?php

	//header('P3P: CP="CAO PSA OUR"');		Fixes IE problem. Does not work with Safari.
	session_start();

	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/db.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/magicQuotes.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/otherHelpers.inc.php';
	
	magicQuotes();

	connect('strims', 'root', 'Martinez');

	if(isset($_POST['applyFilter'])) {
		$checkEmptyHTML = array('student-id', 'date-reported-min', 'date-reported-max', 'reported-from', 
								'receiving-office', 'case-handler', 'summary-report', 
								'risk-for-violence', 'ideation', 'actual-attempts', 'diagnosis', 
								'psychiatrist', 'medicine', 'course-of-action', 
								'updates-case-handler', 'updates-ohs', 'visits-with-psych-councelor');
		$checkEmpty = array('id', 'dateReportedMin', 'dateReportedMax', 'reportedFrom', 
							'receivingOffice', 'caseHandler', 'summary', 
							'riskViolence', 'ideation', 'attempts', 'diagnosis', 
							'psychiatrist', 'medicine', 'action', 
							'updatesCaseHandler', 'updatesOHS', 'visitsPsychCouncelor');
		$conditions = array();
		for($i = 0; count($checkEmpty) > $i; $i++) {
			if($_POST[$checkEmptyHTML[$i]] != '') {
				$conditions[$checkEmpty[$i]] = $_POST[$checkEmptyHTML[$i]];
			}
		}

		$filterResultTemp = searchReports($conditions);
		if($filterResultTemp != '') {
			$searchResult = $filterResultTemp;
		}
	}

	include 'search-reports.html.php';
?>