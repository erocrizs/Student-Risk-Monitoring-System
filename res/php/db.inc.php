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
			$sql = "select * from account where binary username = :username and binary password = :password;";
			$s = $pdo->prepare($sql);
			$s->bindValue(":username", $username);
			$s->bindValue(":password", $password);
			$s->execute();
		} catch(PDOException $e) {
			noConnection("Unable to login.", $e->getMessage());
		}

		while($account = $s->fetch()) {
			$_SESSION['type'] = $account['type'];
		}
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

		try {
			$sql = "insert into student values (
					:id, :yr, :course, :surname, :firstname, :mi, :gender, :birthday, :mobile, :email, :scholar, :dormer, :currentStatus, :loawRecord, 
					:y1s1, :y1s2, :y2s0, :y2s1, :y2s2, :y3s0, :y3s1, :y3s2, :y4s0, :y4s1, :y4s2, :y5s0, :y5s1, :y5s2, 
					:familyLivingSituation, :atmosphereAtHome, :parentsMaritalStatus, :relFather, :relMother, 
					:spiritualSubscale, :godSubscale, 
					:problemSolving, :seekingSocialSupport, :avoidance, 
					:lvlDepression, :lvlAnxiety, 
					:suicidalBehavior, :suicidalThoughts, 
					:hypochondriasis, :depression, :denial, :interProblems, :alienation, :perseIdeas, :anxiety, :thinkingDisorder, :impulseExp, :socialIntroversion, :selfDepreciation, :deviation, 
					:mentalDisorder, 
					:alcoholUse, :drugUse, 
					:hopelessness, :traumaAbuse, :physicalIllness, :pastSuicidalActs, :familyHistorySuicide, :familyHistoryMental, :stressfulLifeEvents, :relationalSocialLoss, :accessLethalMeans, :disciplinaryCases, :sexualOrientation
					)";
			$s = $pdo->prepare($sql);
			$s->bindValue(":id", $profile["id"]);
			$s->bindValue(":yr", $profile["yr"]);
			$s->bindValue(":course", $profile["course"]);
			$s->bindValue(":surname", $profile["surname"]);
			$s->bindValue(":firstname", $profile["firstname"]);
			$s->bindValue(":mi", $profile["mi"]);
			$s->bindValue(":gender", $profile["gender"]);
			$s->bindValue(":birthday", $profile["birthday"]);
			$s->bindValue(":mobile", $profile["mobile"]);
			$s->bindValue(":email", $profile["email"]);
			$s->bindValue(":scholar", $profile["scholar"]);
			$s->bindValue(":dormer", $profile["dormer"]);
			$s->bindValue(":currentStatus", $profile["currentStatus"]);
			$s->bindValue(":loawRecord", $profile["loawRecord"]);

			$s->bindValue(":y1s1", $profile["y1s1"]);
			$s->bindValue(":y1s2", $profile["y1s2"]);
			$s->bindValue(":y2s0", $profile["y2s0"]);
			$s->bindValue(":y2s1", $profile["y2s1"]);
			$s->bindValue(":y2s2", $profile["y2s2"]);
			$s->bindValue(":y3s0", $profile["y3s0"]);
			$s->bindValue(":y3s1", $profile["y3s1"]);
			$s->bindValue(":y3s2", $profile["y3s2"]);
			$s->bindValue(":y4s0", $profile["y4s0"]);
			$s->bindValue(":y4s1", $profile["y4s1"]);
			$s->bindValue(":y4s2", $profile["y4s2"]);
			$s->bindValue(":y5s0", $profile["y5s0"]);
			$s->bindValue(":y5s1", $profile["y5s1"]);
			$s->bindValue(":y5s2", $profile["y5s2"]);

			$s->bindValue(":familyLivingSituation", $profile["familyLivingSituation"]);
			$s->bindValue(":atmosphereAtHome", $profile["atmosphereAtHome"]);
			$s->bindValue(":parentsMaritalStatus", $profile["parentsMaritalStatus"]);
			$s->bindValue(":relFather", $profile["relFather"]);
			$s->bindValue(":relMother", $profile["relMother"]);

			$s->bindValue(":spiritualSubscale", $profile["spiritualSubscale"]);
			$s->bindValue(":godSubscale", $profile["godSubscale"]);

			$s->bindValue(":problemSolving", $profile["problemSolving"]);
			$s->bindValue(":seekingSocialSupport", $profile["seekingSocialSupport"]);
			$s->bindValue(":avoidance", $profile["avoidance"]);

			$s->bindValue(":lvlDepression", $profile["lvlDepression"]);
			$s->bindValue(":lvlAnxiety", $profile["lvlAnxiety"]);

			$s->bindValue(":suicidalBehavior", $profile["suicidalBehavior"]);
			$s->bindValue(":suicidalThoughts", $profile["suicidalThoughts"]);

			$s->bindValue(":hypochondriasis", $profile["hypochondriasis"]);
			$s->bindValue(":depression", $profile["depression"]);
			$s->bindValue(":denial", $profile["denial"]);
			$s->bindValue(":interProblems", $profile["interProblems"]);
			$s->bindValue(":alienation", $profile["alienation"]);
			$s->bindValue(":perseIdeas", $profile["perseIdeas"]);
			$s->bindValue(":anxiety", $profile["anxiety"]);
			$s->bindValue(":thinkingDisorder", $profile["thinkingDisorder"]);
			$s->bindValue(":impulseExp", $profile["impulseExp"]);
			$s->bindValue(":socialIntroversion", $profile["socialIntroversion"]);
			$s->bindValue(":selfDepreciation", $profile["selfDepreciation"]);
			$s->bindValue(":deviation", $profile["deviation"]);

			$s->bindValue(":mentalDisorder", $profile["mentalDisorder"]);

			$s->bindValue(":alcoholUse", $profile["alcoholUse"]);
			$s->bindValue(":drugUse", $profile["drugUse"]);

			$s->bindValue(":hopelessness", $profile["hopelessness"]);
			$s->bindValue(":traumaAbuse", $profile["traumaAbuse"]);
			$s->bindValue(":physicalIllness", $profile["physicalIllness"]);
			$s->bindValue(":pastSuicidalActs", $profile["pastSuicidalActs"]);
			$s->bindValue(":familyHistorySuicide", $profile["familyHistorySuicide"]);
			$s->bindValue(":familyHistoryMental", $profile["familyHistoryMental"]);
			$s->bindValue(":stressfulLifeEvents", $profile["stressfulLifeEvents"]);
			$s->bindValue(":relationalSocialLoss", $profile["relationalSocialLoss"]);
			$s->bindValue(":accessLethalMeans", $profile["accessLethalMeans"]);
			$s->bindValue(":disciplinaryCases", $profile["disciplinaryCases"]);
			$s->bindValue(":sexualOrientation", $profile["sexualOrientation"]);
			$s->execute();
		} catch(PDOException $e) {
			echo $e->getMessage();
			return '';
		}
		return 'success';
	}

	function parseInput($string) {
		if($string == '')
			return 'null';
		return $string;
	}

	function structDelim($conditions, $delim) {
		$return = $conditions[0];
		for($i = 1; count($conditions); $i++) {
			$return .= $delim.$conditions[$i];
		}
	}

	function searchProfiles($conditions) {
		
	}
?>