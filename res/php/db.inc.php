<?php 

	function connect($database_name, $username, $password) {
		global $pdo;
		try {
			$pdo = new PDO('mysql:host=localhost;dbname='.$database_name, $username, $password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->exec('set names "ascii"');
		} catch(PDOException $e) {
			include 'index.php';
			exit();
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
		if($s->fetch()['count'] > 0) {
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

	function structDelim($conditions, $delim, $att = '') {
		if(count($conditions) > 0) {
			if($att == '') {
				return implode($delim, $conditions);
			} else
				return $att.' = '.implode($delim.$att.' = ', $conditions);
		}
		return 'NULL';
	}

	function searchProfiles($conditions) {
		global $pdo;
		$sql = "select id, surname, firstname, mi, ifnull(nullif(yr, -1), '') yr,  course, gender, ifnull(nullif(timestampdiff(year, birthday, curdate()), 0), '') age, risk from student";
		if(count($conditions) > 0) {
			$sql .= " where ";
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
			for($i = 0; count($checkSet) > $i; $i++) {
				if(isset($conditions[$checkSet[$i]])) {
					$condition[] = $checkSet[$i].' = :'.$checkSet[$i];
				}
			}
			for($i = 0; count($checkMinMax) > $i; $i++) {
				$att = substr($checkMinMax[$i], 0, 	strlen($checkMinMax[$i]) - 3);
				if(isset($conditions[$checkMinMax[$i]])) {
					$condition[] = $att.' >= :'.$checkMinMax[$i];
				}
				if(isset($conditions[$checkMinMax[$i++]])) {
					$condition[] = $att.' <= :'.$checkMinMax[$i];
				}
			}
			for($i = 0; count($checkArray) > $i; $i++) {
				if(isset($conditions[$checkArray[$i]])) {
					$condition[] = $conditions[$checkArray[$i]];
				}
			}
			$sql .= structDelim($condition, ' and ');
		}
	
		try {
			$s = $pdo->prepare($sql);
			if(count($conditions) > 0) {
				foreach($checkSet as $check) {
					if(isset($conditions[$check])) {
						$s->bindValue(':'.$check, $conditions[$check]);
					}
				}
				foreach($checkMinMax as $minMax) {
					if(isset($conditions[$minMax])) {
						$s->bindValue(':'.$minMax, $conditions[$minMax]);
					}
				}
			}
			$s->execute();
			return $s;
		} catch(PDOException $e) {
			return '';
		}
	}

	function searchRiskProfiles() {
		global $pdo;

		$sql = "select id, surname, firstname, mi, ifnull(nullif(yr, -1), '') yr,  course, gender, ifnull(nullif(timestampdiff(year, birthday, curdate()), 0), '') age, risk from student where risk > 5";
		
		try {
			$s = $pdo->prepare($sql);
			$s->execute();
			return $s;
		} catch(PDOException $e) {
			return '';
		}
	}
?>