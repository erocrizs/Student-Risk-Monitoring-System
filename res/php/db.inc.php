<?php 

	function connect($database_name, $username, $password) {
		global $pdo;
		try {
			$pdo = new PDO('mysql:host=localhost;dbname='.$database_name, $username, $password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->exec('set names "ascii"');
		} catch(PDOException $e) {
			noConnection("Unable to connect to the database server.", $e->getMessage());
		}
	}

	function login($username, $password) {
		global $pdo;
		try {
			$sql = "select * from account left join accounttype on account.id = accounttype.account_id left join type on accounttype.type_id = type.id where binary username = :username and binary password = :password;";
			$s = $pdo->prepare($sql);
			$s->bindValue(":username", $username);
			$s->bindValue(":password", $password);
			$s->execute();
		} catch(PDOException $e) {
			return 'connection';
		}

		return $s->fetch()['type'];
	}

	function addProfile($profile) {
		global $pdo;
		try {
			$sql = "select count(*) as count from student where id = :id";
			$s = $pdo->prepare($sql);
			$s->bindValue(":id", $profile['id']);
			$s->execute();
		} catch(PDOException $e) {
			return '';
		}
		if($s->fetch()['count']>0) {
			return 'id';
		}

		$attributesPersonal = array('id', 'yr', 'course', 'surname', 'firstname', 'mi', 'gender', 'birthday', 'mobile', 'email', 'scholar', 'dormer', 'currentStatus', 'loawRecord');
		$attributesQPI = array('y1s1', 'y1s2', 'y2s0', 'y2s1', 'y2s2', 'y3s0', 'y3s1', 'y3s2', 'y4s0', 'y4s1', 'y4s2', 'y5s0', 'y5s1', 'y5s2');
		$attributesFactors = array('familyLivingSituation', 'atmosphereAtHome', 'parentsMaritalStatus', 'relFather', 'relMother', 
							'spiritualSubscale', 'godSubscale', 
							'problemSolving', 'seekingSocialSupport', 'avoidance', 
							'lvlDepression', 'lvlAnxiety', 
							'suicideBehavior', 'suicidalThoughts', 
							'hypochondriasis', 'depression', 'denial', 'interProblems', 'alienation', 'perseIdeas', 'anxiety', 'thinkingDisorder', 'impulseExp', 'socialIntroversion', 'selfDepreciation', 'deviation', 
							'mentalDisorder', 
							'alcoholUse', 'drugUse', 
							'hopelessness', 'traumaAbuse', 'physicalIllness', 'pastSuicidalActs', 'familyHistorySuicide', 'familyHistoryMental', 'stressfulLifeEvents', 'relationalSocialLoss', 'accessLethalMeans', 'disciplinaryCases', 'sexualOrientation');
		$attributesFactorsRisk = array(4, 3, 4, 4, 4, 
								3, 3, 
								4, 4, 4, 
								3, 3, 
								2, 2, 
								2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 
								2, 
								3, 3, 
								2, 2, 2, 2, 2, 2, 2, 2, 3, 2, 2);
		$risk = 0;
		for($i = 0; count($attributesFactors) > $i; $i++) {
			if($profile[$attributesFactors[$i]] >= $attributesFactorsRisk[$i]) {
				$risk++;
			}
		}
		for($i = 0; count($attributesQPI) > $i; $i++) {
			if($profile[$attributesQPI[$i]] >= 0 and $profile[$attributesQPI[$i]] < 2.0) {
				$risk++;
			}
		}

		try {
			$sql = "insert into student values (
					:id, :yr, :course, :surname, :firstname, :mi, :gender, :birthday, :mobile, :email, :scholar, :dormer, :currentStatus, :loawRecord, 
					:y1s1, :y1s2, :y2s0, :y2s1, :y2s2, :y3s0, :y3s1, :y3s2, :y4s0, :y4s1, :y4s2, :y5s0, :y5s1, :y5s2, 
					:familyLivingSituation, :atmosphereAtHome, :parentsMaritalStatus, :relFather, :relMother, 
					:spiritualSubscale, :godSubscale, 
					:problemSolving, :seekingSocialSupport, :avoidance, 
					:lvlDepression, :lvlAnxiety, 
					:suicideBehavior, :suicidalThoughts, 
					:hypochondriasis, :depression, :denial, :interProblems, :alienation, :perseIdeas, :anxiety, :thinkingDisorder, :impulseExp, :socialIntroversion, :selfDepreciation, :deviation, 
					:mentalDisorder, 
					:alcoholUse, :drugUse, 
					:hopelessness, :traumaAbuse, :physicalIllness, :pastSuicidalActs, :familyHistorySuicide, :familyHistoryMental, :stressfulLifeEvents, :relationalSocialLoss, :accessLethalMeans, :disciplinaryCases, :sexualOrientation, 
					:risk
					)";
			$s = $pdo->prepare($sql);
			for($i = 0; count($attributesPersonal) > $i; $i++) {
				$s->bindValue(":".$attributesPersonal[$i], $profile[$attributesPersonal[$i]]);
			}
			for($i = 0; count($attributesQPI) > $i; $i++) {
				$s->bindValue(":".$attributesQPI[$i], $profile[$attributesQPI[$i]]);
			}
			for($i = 0; count($attributesFactors) > $i; $i++) {
				$s->bindValue(":".$attributesFactors[$i], $profile[$attributesFactors[$i]]);
			}
			$s->bindValue(":risk", $risk);
			$s->execute();
		} catch(PDOException $e) {
			echo $e->getMessage();
			return '';
		}
		return 'success';
	}

	function parseString($string) {
		if($string == '')
			return 'null';
		return $string;
	}

	function parseNumber($num) {
		if($num == '')
			return -1;
		return $num;
	}

	function structDelim($conditions, $delim) {
		if(count($conditions) > 0) {
			$return = $conditions[0];
			for($i = 1; count($conditions) > $i; $i++) {
				$return .= $delim.$conditions[$i];
			}
			return $return;
		}
		return 'NULL';
	}

	function searchProfiles($conditions) {
		global $pdo;
		try {
			//... SQL STATEMENTS
			$sql = "select * from student";
			if(count($conditions) > 0) {
				$sql .= " where";
				$checkSet = array('id', 'firstname', 'surname', 'mi', 'course');
				$checkMinMax = array('yrMin', 'yrMax', 'ageMin', 'ageMax', 'loawRecordMin', 'loawRecordMax', 
							'y1s1Min', 'y1s1Max', 'y1s2Min', 'y1s2Max', 'y2s0Min', 'y2s0Max', 'y2s1Min', 'y2s1Max', 'y2s2Min', 'y2s2Max', 'y3s0Min', 'y3s0Max', 'y3s1Min', 'y3s1Max', 'y3s2Min', 'y3s2Max', 'y4s0Min', 'y4s0Max', 'y4s1Min', 'y4s1Max', 'y4s2Min', 'y4s2Max', 'y5s0Min', 'y5s0Max', 'y5s1Min', 'y5s1Max', 'y5s2Min', 'y5s2Max', 
							'riskMin', 'riskMax');
				$checkArray = array('gender', 'scholar', 'dormer', 'currentStatus', 
							'familyLivingSituation', 'atmosphereAtHome', 'parentsMaritalStatus', 'relFather', 'relMother', 
							'spiritualSubscale', 'godSubscale', 
							'problemSolving', 'seekingSocialSupport', 'avoidance', 
							'lvlDepression', 'lvlAnxiety', 
							'suicideBehavior', 'suicidalThoughts', 
							'hypochondriasis', 'depression', 'denial', 'interpersonalProblems', 'alienation', 'persecutoryIdeas', 'anxiety', 'thinkingDisorder', 'impulseExpression', 'socialIntroversion', 'selfDeprication', 'deviation', 
							'mentalDisorder', 
							'alcoholUse', 'drugUse', 
							'hopelessness', 'traumaAbuse', 'physicalIllness', 'pastSuicideActs', 'familyHistorySuicide', 'familyHistoryMental', 'stressfulLifeEvent', 'relationalSocialLoss', 'accessLethalMeans', 'disciplinaryCases', 'sexualOrientation');
				$condition = array();
				$index = 0;
				for($i = 0; count($checkSet) > $i; $i++) {
					if(isset($conditions[$checkSet[$i]])) {
						$condition[$index++] = $checkSet[$i].' = :'.$checkSet[$i];
					}
				}
				for($i = 0; count($checkMinMax) > $i; $i++) {
					if(isset($conditions[$checkMinMax[$i]])) {
						$condition[$index++] = substr($checkMinMax[$i], -3).' >= :'.$checkMinMax[$i];
					}
					$i++;
					if(isset($conditions[$checkMinMax[$i++]])) {
						$condition[$index++] = substr($checkMinMax[$i], -3).' <= :'.$checkMinMax[$i];
					}
				}
				for($i = 0; count($checkArray) > $i; $i++) {
					if(isset($conditions[$checkArray[$i]])) {
						$condition[$index++] = $conditions[$checkArray[$i]];
					}
				}

				/*
				if(isset($conditions['id'])) {
					$condition[$index++] = 'id = :id';
				}
				if(isset($conditions['riskMin'])) {
					$condition[$index++] = 'risk >= :riskMin';
				}
				if(isset($conditions['riskMax'])) {
					$condition[$index++] = 'risk <= :riskMax';
				}
				if(isset($conditions['firstname'])) {
					$condition[$index++] = 'firstname = :firstname';
				}
				if(isset($condtions['surname'])) {
					$condition[$index++] = 'surname = :surname';
				}
				if(isset($conditions['mi'])) {
					$condition[$index++] = 'mi = :mi';
				}
				if(isset($conditions['yrMin'])) {
					$condition[$index++] = 'yr >= :yrMin';
				}
				if(isset($conditions['yrMax'])) {
					$condition[$index++] = 'yr <= :yrMax';
				}
				if(isset($conditions['course'])) {
					$condition[$index++] = 'course = :course';
				}
				if(isset($conditions['gender'])) {

				}
				if(isset($conditions['ageMin'])) { 
					$condition[$index++] = 'age >= :ageMin';
				}
				if(isset($conditions['ageMax'])) {
					$condition[$index++] = 'age <= :ageMax';
				}
				if(isset($conditions['scholar'])) {

				}
				if(isset($conditions['dormer'])) {

				}
				if(isset($conditions['currentStatus'])) {

				}
				if(isset($conditions['loawRecordMin'])) {
					$condition[$index++] = 'records_of_loa_w >= :loawRecordMin';
				}
				if(isset($conditions['loawRecordMax'])) {
					$condition[$index++] = 'records_of_loa_w <= :loawRecordMax';
				}
				if(isset($conditions['y1s1Min'])) {
					$condition[$index++] = 'qpi_y1_s1 >= :y1s1Min';
				}
				if(isset($conditions['y1s1Max'])) {
					$condition[$index++] = 'qpi_y1_s1 <= :y1s1Max';
				}
				if(isset($conditions['y1s2Min'])) {
					$condition[$index++] = 'qpi_y1_s2 >= :y1s2Min';
				}
				if(isset($conditions['y1s2Max'])) {
					$condition[$index++] = 'qpi_y1_s2 <= :y1s2Max';
				}
				if(isset($conditions['y2s0Min'])) {
					$condition[$index++] = 'qpi_y2_s0 >= :y2s0Min';
				}
				if(isset($conditions['y2s0Max'])) {
					$condition[$index++] = 'qpi_y2_s0 <= :y2s0Max';
				}
				if(isset($conditions['y2s1Min'])) {
					$condition[$index++] = 'qpi_y2_s1 >= :y2s1Min';
				}
				if(isset($conditions['y2s1Max'])) {
					$condition[$index++] = 'qpi_y2_s1 <= :y2s1Max';
				}
				if(isset($conditions['y2s2Min'])) {
					$condition[$index++] = 'qpi_y2_s2 >= :y2s2Min';
				}
				if(isset($conditions['y2s2Max'])) {
					$condition[$index++] = 'qpi_y2_s2 <= :y2s2Max';
				}
				if(isset($conditions['y3s0Min'])) {
					$condition[$index++] = 'qpi_y3_s0 >= :y3s0Min';
				}
				if(isset($conditions['y3s0Max'])) {
					$condition[$index++] = 'qpi_y3_s0 <= :y3s0Max';
				}
				if(isset($conditions['y3s1Min'])) {
					$condition[$index++] = 'qpi_y3_s1 >= :y3s1Min';
				}
				if(isset($conditions['y3s1Max'])) {
					$condition[$index++] = 'qpi_y3_s1 <= :y3s1Max';
				}
				if(isset($conditions['y3s2Min'])) {
					$condition[$index++] = 'qpi_y3_s2 >= :y3s2Min';
				}
				if(isset($conditions['y3s2Max'])) {
					$condition[$index++] = 'qpi_y3_s2 <= :y3s2Max';
				}
				if(isset($conditions['y4s0Min'])) {
					$condition[$index++] = 'qpi_y4_s0 >= :y4s0Min';
				}
				if(isset($conditions['y4s0Max'])) {
					$condition[$index++] = 'qpi_y4_s0 <= :y4s0Max';
				}
				if(isset($conditions['y4s1Min'])) {
					$condition[$index++] = 'qpi_y4_s1 >= :y4s1Min';
				}
				if(isset($conditions['y4s1Max'])) {
					$condition[$index++] = 'qpi_y4_s1 <= :y4s1Max';
				}
				if(isset($conditions['y4s2Min'])) {
					$condition[$index++] = 'qpi_y4_s2 >= :y4s2Min';
				}
				if(isset($conditions['y4s2Max'])) {
					$condition[$index++] = 'qpi_y4_s2 <= :y4s2Max';
				}
				if(isset($conditions['y5s0Min'])) {
					$condition[$index++] = 'qpi_y5_s0 >= :y5s0Min';
				}
				if(isset($conditions['y5s0Max'])) {
					$condition[$index++] = 'qpi_y5_s0 <= :y5s0Max';
				}
				if(isset($conditions['y5s1Min'])) {
					$condition[$index++] = 'qpi_y5_s1 >= :y5s1Min';
				}
				if(isset($conditions['y5s1Max'])) {
					$condition[$index++] = 'qpi_y5_s1 <= :y5s1Max';
				}
				if(isset($conditions['y5s2Min'])) {
					$condition[$index++] = 'qpi_y5_s2 >= :y5s2Min';
				}
				if(isset($conditions['y5s2Max'])) {
					$condition[$index++] = 'qpi_y5_s2 <= :y5s2Max';
				}
				if(isset($conditions['lvlDepression'])) {

				}
				if(isset($conditions['lvlAnxiety'])) {

				}
				if(isset($conditions['suicideBehavior'])) {

				}
				if(isset($conditions['suicideThoughts'])) {

				}
				if(isset($conditions['hypochondriasis'])) {

				}
				if(isset($conditions['depression'])) {

				}
				if(isset($conditions['denial'])) {

				}
				if(isset($conditions['interProb'])) {

				}
				if(isset($conditions['alienation'])) {

				}
				if(isset($conditions['perseIdeas'])) {

				}
				if(isset($conditions['anxiety'])) {

				}
				if(isset($conditions['thinkDiso'])) {

				}
				if(isset($conditions['impExp'])) {

				}
				if(isset($conditions['socInt'])) {

				}
				if(isset($conditions['selfDep'])) {

				}
				if(isset($conditions['deviation'])) {

				}
				if(isset($conditions['mentalDisorder'])) {

				}
				if(isset($conditions['alcoholUse'])) {

				}
				if(isset($conditions['drugUse'])) {

				}
				if(isset($conditions['hopelessness'])) {

				}
				if(isset($conditions['traumaAbuse'])) {

				}
				if(isset($conditions['physicalIllness'])) {

				}
				if(isset($conditions['pastSuicidalActs'])) {

				}
				if(isset($conditions['familyHistorySuicide'])) {

				}
				if(isset($conditions['familyHistoryMental'])) {

				}
				if(isset($conditions['stressfulLifeEvent'])) {

				}
				if(isset($conditions['relationalSocialLoss'])) {

				}
				if(isset($conditions['accessLethalMeans'])) {

				}
				if(isset($conditions['disciplinaryCases'])) {

				}
				if(isset($conditions['sexualOrientation'])) {

				}
				if(isset($conditions['familyLivingSituation'])) {

				}
				if(isset($conditions['atmosphereAtHome'])) {

				}
				if(isset($conditions['parentsMaritalStatus'])) {

				}
				if(isset($conditions['relFather'])) {

				}
				if(isset($conditions['relMother'])) {

				}
				if(isset($conditions['spiritualSubscale'])) {

				}
				if(isset($conditions['godSubscale'])) {

				}
				if(isset($conditions['problemSolving'])) {

				}
				if(isset($conditions['seekingSocialSupport'])) {

				}
				if(isset($conditions['avoidance'])) {

				}
				*/
				$sql .= " ".structDelim($condition, " and ");
				echo $sql;
			}
			
			$s = $pdo->prepare($sql);
			//... BIND VALUES
			//$s->execute();
		} catch(PDOException $e) {
			return '';
		}
	}
?>