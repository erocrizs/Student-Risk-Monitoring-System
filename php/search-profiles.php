<?php

	//header('P3P: CP="CAO PSA OUR"');		Fixes IE problem. Does not work with Safari.
	session_start();

	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/db.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/magicQuotes.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/otherHelpers.inc.php';
	
	magicQuotes();

	connect('strims', 'root', 'Martinez');

	if(isset($_POST['apply-filter'])) {
		$checkEmptyHTML = array('id', 'firstname', 'surname', 'mi', 'yr-min', 'yr-max', 'course', 'age-min', 'age-max', 'loaw-record-min', 'loaw-record-max', 
								'y1s1-min', 'y1s1-max', 'y1s2-min', 'y1s2-max', 'y2s0-min', 'y2s0-max', 'y2s1-min', 'y2s1-max', 'y2s2-min', 'y2s2-max', 'y3s0-min', 'y3s0-max', 'y3s1-min', 'y3s1-max', 'y3s2-min', 'y3s2-max', 'y4s0-min', 'y4s0-max', 'y4s1-min', 'y4s1-max', 'y4s2-min', 'y4s2-max', 'y5s0-min', 'y5s0-max', 'y5s1-min', 'y5s1-max', 'y5s2-min', 'y5s2-max', 
								'risk-min', 'risk-max');
		$checkEmpty = array('id', 'firstname', 'surname', 'mi', 'yrMin', 'yrMax', 'course', 'ageMin', 'ageMax', 'loawRecordMin', 'loawRecordMax', 
							'y1s1Min', 'y1s1Max', 'y1s2Min', 'y1s2Max', 'y2s0Min', 'y2s0Max', 'y2s1Min', 'y2s1Max', 'y2s2Min', 'y2s2Max', 'y3s0Min', 'y3s0Max', 'y3s1Min', 'y3s1Max', 'y3s2Min', 'y3s2Max', 'y4s0Min', 'y4s0Max', 'y4s1Min', 'y4s1Max', 'y4s2Min', 'y4s2Max', 'y5s0Min', 'y5s0Max', 'y5s1Min', 'y5s1Max', 'y5s2Min', 'y5s2Max', 
							'riskMin', 'riskMax');
		$checkNumHTML = array('gender', 'scholar', 'dormer', 'current-status', 
							'family-living-situation', 'atmosphere-at-home', 'parents-marital-status', 'rel-with-father', 'rel-with-mother', 
							'spiritual-subscale', 'god-subscale', 
							'problem-solving', 'seeking-social-support', 'avoidance', 
							'lvl-of-depression', 'lvl-of-anxiety', 
							'suicide-behavior', 'suicidal-thoughts', 
							'bpi-hypochondriasis', 'bpi-depression', 'bpi-denial', 'bpi-inter-prob', 'bpi-alienation', 'bpi-perse-ideas', 'bpi-anxiety', 'bpi-think-diso', 'bpi-imp-exp', 'bpi-soc-int', 'bpi-self-dep', 'bpi-deviation', 
							'mental-disorder', 
							'alcohol-use', 'drug-use', 
							'feeling-hopeless', 'trauma-abuse', 'physical-illness', 'past-suicidal-acts', 'family-history-suicide', 'family-history-mental', 'stressful-life-events', 'relational-social-loss', 'access-lethal-means', 'disciplinary-cases', 'sexual-orientation');
		$checkNum = array('gender', 'scholar', 'dormer', 'currentStatus', 
							'familyLivingSituation', 'atmosphereAtHome', 'parentsMaritalStatus', 'relFather', 'relMother', 
							'spiritualSubscale', 'godSubscale', 
							'problemSolving', 'seekingSocialSupport', 'avoidance', 
							'lvlDepression', 'lvlAnxiety', 
							'suicideBehavior', 'suicidalThoughts', 
							'hypochondriasis', 'depression', 'denial', 'interpersonalProblems', 'alienation', 'persecutoryIdeas', 'anxiety', 'thinkingDisorder', 'impulseExpression', 'socialIntroversion', 'selfDepreciation', 'deviation', 
							'mentalDisorder', 
							'alcoholUse', 'drugUse', 
							'hopelessness', 'traumaAbuse', 'physicalIllness', 'pastSuicideActs', 'familyHistorySuicide', 'familyHistoryMental', 'stressfulLifeEvent', 'relationalSocialLoss', 'accessLethalMeans', 'disciplinaryCases', 'sexualOrientation');
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
			if($_POST[$checkEmptyHTML[$i]] != '') {
				$conditions[$checkEmpty[$i]] = $_POST[$checkEmptyHTML[$i]];
			}
		}
		for($i = 0; count($checkNum) > $i; $i++) {
			if(!isset($_POST[$checkNumHTML[$i]])) {
				$conditions[$checkNum[$i]] = '('.structDelim(array(-1), '', $checkNum[$i]).')';
			}
			else if(count($_POST[$checkNumHTML[$i]]) < $checkNums[$i]) {
				$conditions[$checkNum[$i]] = '('.structDelim($_POST[$checkNumHTML[$i]], ' or ', $checkNum[$i]).')';
			}
		}
		$filterResultTemp = searchProfiles($conditions);
		if($filterResultTemp != '') {
			$searchResult = $filterResultTemp;
		}
	}

	include 'search-profiles.html.php';
?>