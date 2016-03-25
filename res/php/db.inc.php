<?php 
	function connect($database_name, $username, $password) {
		global $pdo;
		try {
			$pdo = new PDO('mysql:host=localhost;dbname='.$database_name, $username, $password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->exec('set names "utf8"');
		} catch(PDOException $e) {
			noConnection("Unable to connect to the database server.", $e->getMessage());
		}
	}

	function login($username, $password, $type) {
		global $type, $pdo;
		try {
			$sql = "select type from account where binary username = :username and binary password = :password;";
			$s = $pdo->prepare($sql);
			$s->bindValue(":username", $username);
			$s->bindValue(":password", $password);
			$s->execute();
		} catch(PDOException $e) {
			noConnection("Unable to fetch student information.", $e->getMessage());
		}

		while($account = $s->fetch()) {
			$type = $account['type'];
		}
	}
?>