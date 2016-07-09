<?php
	function toHtml($text) {
		return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
	}

	function noConnection($error) {
		$error = $error;
		include 'noConnection.php';
		exit();
	}

	function set($array, $index, $value) {
		$array[$index] = $value;
	}

	function get($array, $index) {
		if(isset($array[$index]))
			return $array[$index];
		return '';
	}

	function checked($array, $index, $value) {
		if(!isset($array[$index]))
			return false;
		for($i = 0; count($array[$index]) > $i; $i++) {
			if($array[$index][$i] == $value)
				return true;
		}
		return false;
	}

	function issetPost($index) {
		return isset($_POST[$index]);
	}

	function setPost($index, $value) {
		$_POST[$index] = $value;
	}

	function getPost($index) {
		return get($_POST, $index);
	}

	function checkedPost($index, $value) {
		return checked($_POST, $index, $value);
	}

	function issetGet($index) {
		return isset($_GET[$index]);
	}

	function setGet($index, $value) {
		$_GET[$index] = $value;
	}

	function getGet($index) {
		return get($_GET, $index);
	}

	function checkedGet($index, $value) {
		return checked($_GET, $index, $value);
	}

	function issetSession($index) {
		return isset($_SESSION[$index]);
	}

	function setSession($index, $value) {
		$_SESSION[$index] = $value;
	}

	function getSession($index) {
		return get($_SESSION, $index);
	}

	function checkedSession($index, $value) {
		return checked($_SESSION, $index, $value);
	}

	function compare($value1, $value2) {
		return $value1 == $value2;
	}
?>
	