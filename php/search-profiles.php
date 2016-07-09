<?php

	//header('P3P: CP="CAO PSA OUR"');		Fixes IE problem. Does not work with Safari.
	session_start();

	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/db.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/magicQuotes.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/otherHelpers.inc.php';
	
	magicQuotes();

	connect('strims', 'root', 'Martinez');

	if(!issetSession('account')) {
		include 'index.php';
		exit();
	}

	if(issetPost('applyFilter')) {
		$checkEmpty = array('id', 'firstname', 'surname', 'mi', 'yrMin', 'yrMax', 'course', 'dateMin', 'dateMax', 'ageMin', 'ageMax', 'loawRecordMin', 'loawRecordMax', 
							'y1s1Min', 'y1s1Max', 'y1s2Min', 'y1s2Max', 'y2s0Min', 'y2s0Max', 'y2s1Min', 'y2s1Max', 'y2s2Min', 'y2s2Max', 'y3s0Min', 'y3s0Max', 'y3s1Min', 'y3s1Max', 'y3s2Min', 'y3s2Max', 'y4s0Min', 'y4s0Max', 'y4s1Min', 'y4s1Max', 'y4s2Min', 'y4s2Max', 'y5s0Min', 'y5s0Max', 'y5s1Min', 'y5s1Max', 'y5s2Min', 'y5s2Max', 
							'riskMin', 'riskMax');
		$checkNum = array('gender', 'scholar', 'dormer', 'currentStatus', 
							'familyLivingSituation', 'atmosphereAtHome', 'parentsMaritalStatus', 'relFather', 'relMother', 
							'spiritualSubscale', 'godSubscale', 
							'problemSolving', 'seekingSocialSupport', 'avoidance', 
							'lvlDepression', 'lvlAnxiety', 
							'suicideBehavior', 'suicidalThoughts', 
							'hypochondriasis', 'depression', 'denial', 'interpersonalProblems', 'alienation', 'persecutoryIdeas', 'anxiety', 'thinkingDisorder', 'impulseExpression', 'socialIntroversion', 'selfDepreciation', 'deviation', 
							'mentalDisorder', 
							'alcoholUse', 'drugUse', 
							'hopelessness', 'traumaAbuse', 'physicalIllness', 'pastSuicidalActs', 'familyHistorySuicide', 'familyHistoryMental', 'stressfulLifeEvents', 'relationalSocialLoss', 'accessLethalMeans', 'disciplinaryCases', 'sexualOrientation');
		$checkNums = array(2, 2, 2, 3, 
							7, 4, 6, 6, 6, 
							3, 3, 
							5, 5, 5, 
							5, 4, 
							2, 3, 
							2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 
							2, 
							3, 3, 
							2, 3, 2, 2, 2, 2, 2, 2, 3, 2, 3);

		$conditions = array();
		for($i = 0; count($checkEmpty) > $i; $i++) {
			$check = $checkEmpty[$i];
			$post = getPost($check);
			if($post != '')
				$conditions[$check] = $post;
		}
		for($i = 0; count($checkNum) > $i; $i++) {
			$check = $checkNum[$i];
			if(issetPost($check) && count(getPost($check)) < $checkNums[$i]) {
				$conditions[$check] = '('.structDelim(getPost($check), ' or ', $check).')';
			}
		}
		$searchResult = searchProfiles($conditions);
	}

	include 'search-profiles.html.php';
?>