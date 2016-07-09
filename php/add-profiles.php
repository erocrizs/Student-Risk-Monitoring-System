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
			if($_FILES['file']['name']) {
				if($_FILES['file']['error'] == UPLOAD_ERR_OK) {
					$fileType = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
					if($fileType != "xlsx") {
						$_POST['upload'] = 'type';
						include 'add-profiles.html.php';
						exit();
					}

					header('Content-Type: text/html; charset=UTF-8');
					set_time_limit(0);

					//$uploads_dir = getcwd().'/res/uploads/upload.xlsx';
					$uploads_dir = 'C:\xampp\htdocs\Student-Risk-Monitoring-System/res/uploads/upload.xlsx';
					move_uploaded_file($_FILES['file']['tmp_name'], $uploads_dir);

					$phpExcelReader = PHPExcel_IOFactory::createReader('Excel2007');
					$phpExcelReader->setReadDataOnly(true);
					$phpExcel = $phpExcelReader->load($uploads_dir);
					$phpExcel->setActiveSheetIndex(0);
					$phpExcelRowIterator = $phpExcel->getActiveSheet()->getRowIterator();

					$profileDetails = array('id', 'yr', 'course', 'surname', 'firstname', 'mi', 'gender', 'birthday', 'mobile', 'email', 'scholar', 'dormer', 'currentStatus', 'loawRecord', 
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

					$addedProfiles = 0;
					foreach($phpExcelRowIterator as $row) {
						if($row->getRowIndex() < 3)
							continue;
						$rowIndex = $row->getRowIndex();

						$profile = array();
						$phpExcelCellIterator = $row->getCellIterator();
						$phpExcelCellIterator->setIterateOnlyExistingCells(false);
						$index = 0;
						foreach($phpExcelCellIterator as $cell) {
							if($cell->getColumn() == 'A') {
								if($cell->getValue() == '')
									continue;
							}
							$cellColumn = $cell->getColumn();
							if($cellColumn == 'A' || $cellColumn == 'C' || $cellColumn == 'D' || $cellColumn == 'E' || $cellColumn == 'F' || $cellColumn == 'I' || $cellColumn == 'J') {
								$profile[$profileDetails[$index]] = parseValue($cell->getValue());
							} else if($cellColumn == 'H') {
								$profile[$profileDetails[$index]] = parseString($cell->getValue());
							} else {
								$profile[$profileDetails[$index]] = parseNumber($cell->getValue());
							}
							$index++;
						}
						setPost('upload', addProfile($profile));	// TODO: Detect if there are collision of ID numbers
						if(getPost('upload') == 'success') {
							$addedProfiles++;
						}
					}
					
					setPost('upload', 'success');
				}
			}
		} else if(issetPost('add')) {
			$profileString = array('id', 'course', 'surname', 'firstname', 'mi', 'mobile', 'email');
			$profileNull = array('birthday');
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
				$profile[$profileString[$i]] = getPost($profileString[$i]);
			}
			for($i = 0; count($profileNull) > $i; $i++) {
				$profile[$profileNull[$i]] = parseString(getPost($profileNull[$i]));
			}
			for($i = 0; count($profileNum) > $i; $i++) {
				$profile[$profileNum[$i]] = parseNumber(getPost($profileNum[$i]));
			}
			$addedProfile = addProfile($profile);
		}
	}

	include 'add-profiles.html.php';
?>