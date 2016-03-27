<?php

	//header('P3P: CP="CAO PSA OUR"');		Fixes IE problem. Does not work with Safari.
	session_start();

	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/db.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/magicQuotes.inc.php';
	include_once $_SERVER['DOCUMENT_ROOT'].'/Student-Risk-Monitoring-System/res/php/otherHelpers.inc.php';
	
	magicQuotes();

	connect('strims', 'root', 'Martinez');
	
	if(isset($_POST['apply-filter'])) {
		if($_POST['id'] != '') {
			$conditions['id'] = $_POST['id'];
		}
		if($_POST['risk-min'] != '') {
			$conditions['riskMin'] = $_POST['risk-min'];
		}
		if($_POST['risk-max'] != '') {
			$conditions['riskMax'] = $_POST['risk-max'];
		}
		if($_POST['firstname'] != '') {
			$conditions['firstname'] = $_POST['firstname'];
		}
		if($_POST['surname'] != '') {
			$conditions['surname'] = $_POST['surname'];
		}
		if($_POST['mi'] != '') {
			$conditions['mi'] = $_POST['mi'];
		}
		if($_POST['yr-min'] != '') {
			$conditions['yrMin'] = $_POST['yr-min'];
		}
		if($_POST['yr-max'] != '') {
			$conditions['yrMax'] = $_POST['yr-max'];
		}
		if($_POST['course'] != '') {
			$conditions['course'] = $_POST['course'];
		}
		if(count($_POST['gender']) < 2) {
			$conditions['gender'] = $_POST['gender'];
		}
		if($_POST['age-min'] != '') {
			$conditions['ageMin'] = $_POST['age-min'];
		}
		if($_POST['age-max'] != '') {
			$conditions['ageMax'] = $_POST['age-max'];
		}
		if(count($_POST['scholar']) < 2) {
			$conditions['scholar'] = $_POST['scholar'];
		}
		if(count($_POST['dormer']) < 2) {
			$conditions['dormer'] = $_POST['dormer'];
		}
		if(count($_POST['current-status']) < 3) {
			$conditions['currentStatus'] = $_POST['current-status'];
		}
		if($_POST['loaw-record-min'] != '') {
			$conditions['loawRecordMin'] = $_POST['loaw-record-min'];
		}
		if($_POST['loaw-record-max'] != '') {
			$conditions['loawRecordMax'] = $_POST['loaw-record-max'];
		}
		if($_POST['y1s1-min'] != '') {
			$conditions['y1s1Min'] = $_POST['y1s1-min'];
		}
		if($_POST['y1s1-max'] != '') {
			$conditions['y1s1Max'] = $_POST['y1s1-max'];
		}
		if($_POST['y1s2-min'] != '') {
			$conditions['y1s2Min'] = $_POST['y1s2-min'];
		}
		if($_POST['y1s2-max'] != '') {
			$conditions['y1s2Max'] = $_POST['y1s2-max'];
		}
		if($_POST['y2s0-min'] != '') {
			$conditions['y2s0Min'] = $_POST['y2s0-min'];
		}
		if($_POST['y2s0-max'] != '') {
			$conditions['y2s0Max'] = $_POST['y2s0-max'];
		}
		if($_POST['y2s1-min'] != '') {
			$conditions['y2s1Min'] = $_POST['y2s1-min'];
		}
		if($_POST['y2s1-max'] != '') {
			$conditions['y2s1Max'] = $_POST['y2s1-max'];
		}
		if($_POST['y2s2-min'] != '') {
			$conditions['y2s2Min'] = $_POST['y2s2-min'];
		}
		if($_POST['y2s2-max'] != '') {
			$conditions['y2s2Max'] = $_POST['y2s2-max'];
		}
		if($_POST['y3s0-min'] != '') {
			$conditions['y3s0Min'] = $_POST['y3s0-min'];
		}
		if($_POST['y3s0-max'] != '') {
			$conditions['y3s0Max'] = $_POST['y3s0-max'];
		}
		if($_POST['y3s1-min'] != '') {
			$conditions['y3s1Min'] = $_POST['y3s1-min'];
		}
		if($_POST['y3s1-max'] != '') {
			$conditions['y3s1Max'] = $_POST['y3s1-max'];
		}
		if($_POST['y3s2-min'] != '') {
			$conditions['y3s2Min'] = $_POST['y3s2-min'];
		}
		if($_POST['y3s2-max'] != '') {
			$conditions['y3s2Max'] = $_POST['y3s2-max'];
		}
		if($_POST['y4s0-min'] != '') {
			$conditions['y4s0Min'] = $_POST['y4s0-min'];
		}
		if($_POST['y4s0-max'] != '') {
			$conditions['y4s0Max'] = $_POST['y4s0-max'];
		}
		if($_POST['y4s1-min'] != '') {
			$conditions['y4s1Min'] = $_POST['y4s1-min'];
		}
		if($_POST['y4s1-max'] != '') {
			$conditions['y4s1Max'] = $_POST['y4s1-max'];
		}
		if($_POST['y4s2-min'] != '') {
			$conditions['y4s2Min'] = $_POST['y4s2-min'];
		}
		if($_POST['y4s2-max'] != '') {
			$conditions['y4s2Max'] = $_POST['y4s2-max'];
		}
		if($_POST['y5s0-min'] != '') {
			$conditions['y5s0Min'] = $_POST['y5s0-min'];
		}
		if($_POST['y5s0-max'] != '') {
			$conditions['y5s0Max'] = $_POST['y5s0-max'];
		}
		if($_POST['y5s1-min'] != '') {
			$conditions['y5s1Min'] = $_POST['y5s1-min'];
		}
		if($_POST['y5s1-max'] != '') {
			$conditions['y5s1Max'] = $_POST['y5s1-max'];
		}
		if($_POST['y5s2-min'] != '') {
			$conditions['y5s2Min'] = $_POST['y5s2-min'];
		}
		if($_POST['y5s2-max'] != '') {
			$conditions['y5s2Max'] = $_POST['y5s2-max'];
		}
		if(count($_POST['lvl-of-depression']) < 5) {
			$conditions['lvlDepression'] = $_POST['lvl-of-depression'];
		}
		if(count($_POST['lvl-of-anxiety']) < 4) {
			$conditions['lvlAnxiety'] = $_POST['lvl-of-anxiety'];
		}
		if(count($_POST['suicide-behavior']) < 2) {
			$conditions['suicideBehavior'] = $_POST['suicide-behavior'];
		}
		if(count($_POST['suicide-thoughts']) < 3) {
			$conditions['suicideThoughts'] = $_POST['suicide-thoughts'];
		}
		if(count($_POST['bpi-hypochondriasis']) < 2) {
			$conditions['hypochondriasis'] = $_POST['bpi-hypochondriasis'];
		}
		if(count($_POST['bpi-depression']) < 2) {
			$conditions['depression'] = $_POST['bpi-depression'];
		}
		if(count($_POST['bpi-denial']) < 2) {
			$conditions['denial'] = $_POST['bpi-denial'];
		}
		if(count($_POST['bpi-inter-prob']) < 2) {
			$conditions['interProb'] = $_POST['bpi-inter-prob'];
		}
		if(count($_POST['bpi-alienation']) < 2) {
			$conditions['alienation'] = $_POST['bpi-alienation'];
		}
		if(count($_POST['bpi-perse-ideas']) < 2) {
			$conditions['perseIdeas'] = $_POST['bpi-perse-ideas'];
		}
		if(count($_POST['bpi-anxiety']) < 2) {
			$conditions['anxiety'] = $_POST['bpi-anxiety'];
		}
		if(count($_POST['bpi-think-diso']) < 2) {
			$conditions['thinkDiso'] = $_POST['bpi-think-diso'];
		}
		if(count($_POST['bpi-imp-exp']) < 2) {
			$conditions['impExp'] = $_POST['bpi-imp-exp'];
		}
		if(count($_POST['bpi-soc-int']) < 2) {
			$conditions['socInt'] = $_POST['bpi-soc-int'];
		}
		if(count($_POST['bpi-self-dep']) < 2) {
			$conditions['selfDep'] = $_POST['bpi-self-dep'];
		}
		if(count($_POST['bpi-deviation']) < 2) {
			$conditions['deviation'] = $_POST['bpi-deviation'];
		}
		if(count($_POST['mental-disorder']) < 2) {
			$conditions['mentalDisorder'] = $_POST['mental-disorder'];
		}
		if(count($_POST['alcohol-use']) < 3) {
			$conditions['alcoholUse'] = $_POST['alcohol-use'];
		}
		if(count($_POST['drug-use']) < 3) {
			$conditions['drugUse'] = $_POST['drug-use'];
		}
		if(count($_POST['feeling-hopeless']) < 2) {
			$conditions['hopelessness'] = $_POST['feeling-hopeless'];
		}
		if(count($_POST['trauma-abuse']) < 3) {
			$conditions['traumaAbuse'] = $_POST['trauma-abuse'];
		}
		if(count($_POST['physical-illness']) < 2) {
			$conditions['physicalIllness'] = $_POST['physical-illness'];
		}
		if(count($_POST['past-suicidal-acts']) < 2) {
			$conditions['suicidalActs'] = $_POST['past-suicidal-acts'];
		}
		if(count($_POST['family-history-suicide']) < 2) {
			$conditions['familyHistorySuicide'] = $_POST['family-history-suicide'];
		}
		if(count($_POST['family-history-mental']) < 2) {
			$conditions['familyHistoryMental'] = $_POST['family-history-mental'];
		}
		if(count($_POST['stressful-life-events']) < 2) {
			$conditions['stressfulLifeEvent'] = $_POST['stressful-life-events'];
		}
		if(count($_POST['relational-social-loss']) < 2) {
			$conditions['relationalSocialLoss'] = $_POST['relational-social-loss'];
		}
		if(count($_POST['access-lethal-means']) < 3) {
			$conditions['access-LethalMeans'] = $_POST['access-lethal-means'];
		}
		if(count($_POST['disciplinary-cases']) < 2) {
			$conditions['desciplinaryCases'] = $_POST['disciplinary-cases'];
		}
		if(count($_POST['sexual-orientation']) < 3) {
			$conditions['sexualOrientation'] = $_POST['sexual-orientation'];
		}
		if(count($_POST['family-living-situation']) < 7) {
			$conditions['familyLivingSituation'] = $_POST['family-living-situation'];
		}
		if(count($_POST['atmosphere-at-home']) < 4) {
			$conditions['atmosphereAtHome'] = $_POST['atmosephere-at-home'];
		}
		if(count($_POST['parents-marital-status']) < 6) {
			$conditions['parentsMaritalStatus'] = $_POST['parents-marital-status'];
		}
		if(count($_POST['rel-with-father']) < 6) {
			$conditions['relFather'] = $_POST['rel-with-father'];
		}
		if(count($_POST['rel-with-mother']) < 6) {
			$conditions['relMother'] = $_POST['rel-with-mother'];
		}
		if(count($_POST['spiritual-subscale']) < 3) {
			$conditions['spiritualSubscale'] = $_POST['spiritual-subscale'];
		}
		if(count($_POST['god-subscale']) < 3) {
			$conditions['godSubscale'] = $_POST['god-subscale'];
		}
		if(count($_POST['problem-solving']) < 5) {
			$conditions['problemSolving'] = $_POST['problem-solving'];
		}
		if(count($_POST['seeking-social-support']) < 5) {
			$conditions['seekingSocialSupport'] = $_POST['seeking-social-support'];
		}
		if(count($_POST['avoidance']) < 5) {
			$conditions['avoidance'] = $_POST['avoidance'];
		}

		$filterResult = searchProfiles($conditions);
	}

	include 'search-profiles.html.php';
?>