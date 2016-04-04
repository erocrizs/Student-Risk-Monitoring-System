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
	
	if(!empty($_FILES['file'])) {
		if($_FILES['file']['name']) {
			if(!$_FILES['file']['error']) {
				$file = $_FILES['file']['name'];
				$fileType = pathinfo($file, PATHINFO_EXTENSION);
				if($fileType != "xlsx") {
					$_POST['upload'] = 'type';
					include 'add-profiles.html.php';
					exit();
				}

				header('Content-Type: text/html; charset=UTF-8');
				set_time_limit(0);

				/*$phpExcelReader = PHPExcel_IOFactory::createReader('Excel2007');
				$phpExcel = $phpExcelReader->load(sys_get_temp_dir().'\\'.$file);
				$phpExcel->setActiveSheetIndex(0);
				for($row = 3; 103 >= $row; $row++) {
					$id = $phpExcel->getCellbyColumnAndRow(1, $row);
					if($id == "")
						continue;
				}*/
				$_POST['upload'] = 'success';
			}
		}
	}
	else if(isset($_POST['add'])) {
		$profileStringHTML = array('id-num', 'course', 'last-name', 'first-name', 'mi-name', 'mobile-number', 'email-address');
		$profileString = array('id', 'course', 'surname', 'firstname', 'mi', 'mobile', 'email');
		$profileNullHTML = array('birthday');
		$profileNull = array('birthday');
		$profileNumHTML = array('yr-lvl', 'gender', 'scholar', 'dormer', 'current-status', 'loa-w-record', 
								'y1-s1', 'y1-s2', 'y2-s0', 'y2-s1', 'y2-s2', 'y3-s0', 'y3-s1', 'y3-s2', 'y4-s0', 'y4-s1', 'y4-s2', 'y5-s0', 'y5-s1', 'y5-s2', 
								'family-living-situation', 'atmosphere-at-home', 'parents-marital-status', 'rel-with-father', 'rel-with-mother', 
								'spiritual-subscale', 'god-subscale', 
								'problem-solving', 'seeking-social-support', 'avoidance', 
								'lvl-of-depression', 'lvl-of-anxiety', 
								'suicide-behavior', 'suicidal-thoughts', 
								'bpi-hypochondriasis', 'bpi-depression', 'bpi-denial', 'bpi-inter-problems', 'bpi-alienation', 'bpi-perse-ideas', 'bpi-anxiety', 'bpi-thinking-disorder', 'bpi-impulse-exp', 'bpi-social-introversion', 'bpi-self-depreciation', 'bpi-deviation', 
								'mental-disorder', 
								'alcohol-use', 'drug-use', 
								'feeling-hopeless', 'trauma-abuse', 'physical-illness', 'past-suicidal-acts', 'family-history-suicide', 'family-history-mental', 'stressful-life-events', 'relational-social-loss', 'access-lethal-means', 'disciplinary-cases', 'sexual-orientation');
		$profileNum = array('yr', 'gender', 'scholar', 'dormer', 'currentStatus', 'loawRecord', 
							'y1s1', 'y1s2', 'y2s0', 'y2s1', 'y2s2', 'y3s0', 'y3s1', 'y3s2', 'y4s0', 'y4s1', 'y4s2', 'y5s0', 'y5s1', 'y5s2', 
							'familyLivingSituation', 'atmosphereAtHome', 'parentsMaritalStatus', 'relFather', 'relMother', 
							'spiritualSubscale', 'godSubscale', 
							'problemSolving', 'seekingSocialSupport', 'avoidance', 
							'lvlDepression', 'lvlAnxiety', 
							'suicideBehavior', 'suicidalThoughts', 
							'hypochondriasis', 'depression', 'denial', 'interProblems', 'alienation', 'perseIdeas', 'anxiety', 'thinkingDisorder', 'impulseExp', 'socialIntroversion', 'selfDepreciation', 'deviation', 
							'mentalDisorder', 
							'alcoholUse', 'drugUse', 
							'hopelessness', 'traumaAbuse', 'physicalIllness', 'pastSuicidalActs', 'familyHistorySuicide', 'familyHistoryMental', 'stressfulLifeEvents', 'relationalSocialLoss', 'accessLethalMeans', 'disciplinaryCases', 'sexualOrientation');
		$profile = array();
		for($i = 0; count($profileString) > $i; $i++) {
			$profile[$profileString[$i]] = $_POST[$profileStringHTML[$i]];
		}
		for($i = 0; count($profileNull) > $i; $i++) {
			$profile[$profileNull[$i]] = parseString($_POST[$profileNullHTML[$i]]);
		}
		for($i = 0; count($profileNum) > $i; $i++) {
			$profile[$profileNum[$i]] = parseNumber($_POST[$profileNumHTML[$i]]);
		}
		$_POST['add'] = addProfile($profile);
	}

	include 'add-profiles.html.php';
?>