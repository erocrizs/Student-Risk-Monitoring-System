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
		$profile = array('id'=>parseInput($_POST['id-num']), 
						'yr'=>parseInput($_POST['yr-lvl']), 
						'course'=>parseInput($_POST['course']), 
						'surname'=>parseInput($_POST['last-name']), 
						'firstname'=>parseInput($_POST['first-name']), 
						'mi'=>parseInput($_POST['mi-name']), 
						'gender'=>parseInput($_POST['gender']), 
						'birthday'=>parseInput($_POST['birthday']), 
						'mobile'=>parseInput($_POST['mobile-number']), 
						'email'=>parseInput($_POST['email-address']), 
						'scholar'=>parseInput($_POST['scholar']), 
						'dormer'=>parseInput($_POST['dormer']), 
						'currentStatus'=>parseInput($_POST['current-status']), 
						'loawRecord'=>parseInput($_POST['loa-w-record']), 

						'y1s1'=>parseInput($_POST['y1-s1']), 
						'y1s2'=>parseInput($_POST['y1-s2']), 
						'y2s0'=>parseInput($_POST['y2-s0']), 
						'y2s1'=>parseInput($_POST['y2-s1']), 
						'y2s2'=>parseInput($_POST['y2-s2']),  
						'y3s0'=>parseInput($_POST['y3-s0']), 
						'y3s1'=>parseInput($_POST['y3-s1']), 
						'y3s2'=>parseInput($_POST['y3-s2']),  
						'y4s0'=>parseInput($_POST['y4-s0']), 
						'y4s1'=>parseInput($_POST['y4-s1']), 
						'y4s2'=>parseInput($_POST['y4-s2']),  
						'y5s0'=>parseInput($_POST['y5-s0']), 
						'y5s1'=>parseInput($_POST['y5-s1']), 
						'y5s2'=>parseInput($_POST['y5-s2']), 

						'familyLivingSituation'=>parseInput($_POST['family-living-situation']), 
						'atmosphereAtHome'=>parseInput($_POST['atmosphere-at-home']), 
						'parentsMaritalStatus'=>parseInput($_POST['parents-marital-status']), 
						'relFather'=>parseInput($_POST['rel-with-father']), 
						'relMother'=>parseInput($_POST['rel-with-mother']), 

						'spiritualSubscale'=>parseInput($_POST['spiritual-subscale']), 
						'godSubscale'=>parseInput($_POST['god-subscale']), 

						'problemSolving'=>parseInput($_POST['problem-solving']), 
						'seekingSocialSupport'=>parseInput($_POST['seeking-social-support']), 
						'avoidance'=>parseInput($_POST['avoidance']), 

						'lvlDepression'=>parseInput($_POST['lvl-of-depression']), 
						'lvlAnxiety'=>parseInput($_POST['lvl-of-anxiety']), 

						'suicidalBehavior'=>parseInput($_POST['suicidal-behavior']), 
						'suicidalThoughts'=>parseInput($_POST['suicidal-thoughts']), 

						'hypochondriasis'=>parseInput($_POST['bpi-hypochondriasis']), 
						'depression'=>parseInput($_POST['bpi-depression']), 
						'denial'=>parseInput($_POST['bpi-denial']), 
						'interProblems'=>parseInput($_POST['bpi-inter-problems']), 
						'alienation'=>parseInput($_POST['bpi-alienation']), 
						'perseIdeas'=>parseInput($_POST['bpi-perse-ideas']), 
						'anxiety'=>parseInput($_POST['bpi-anxiety']), 
						'thinkingDisorder'=>parseInput($_POST['bpi-thinking-disorder']), 
						'impulseExp'=>parseInput($_POST['bpi-impulse-exp']), 
						'socialIntroversion'=>parseInput($_POST['bpi-social-introversion']), 
						'selfDepreciation'=>parseInput($_POST['bpi-self-depreciation']), 
						'deviation'=>parseInput($_POST['bpi-deviation']), 

						'mentalDisorder'=>parseInput($_POST['mental-disorder']), 

						'alcoholUse'=>parseInput($_POST['alcohol-use']), 
						'drugUse'=>parseInput($_POST['drug-use']), 

						'hopelessness'=>parseInput($_POST['feeling-hopeless']), 
						'traumaAbuse'=>parseInput($_POST['trauma-abuse']), 
						'physicalIllness'=>parseInput($_POST['physical-illness']), 
						'pastSuicidalActs'=>parseInput($_POST['past-suicidal-acts']), 
						'familyHistorySuicide'=>parseInput($_POST['family-history-suicide']), 
						'familyHistoryMental'=>parseInput($_POST['family-history-mental']), 
						'stressfulLifeEvents'=>parseInput($_POST['stressful-life-events']), 
						'relationalSocialLoss'=>parseInput($_POST['relational-social-loss']), 
						'accessLethalMeans'=>parseInput($_POST['access-lethal-means']), 
						'disciplinaryCases'=>parseInput($_POST['disciplinary-cases']), 
						'sexualOrientation'=>parseInput($_POST['sexual-orientation']));
		$_POST['add'] = addProfile($profile);
	}

	include 'add-profiles.html.php';
?>