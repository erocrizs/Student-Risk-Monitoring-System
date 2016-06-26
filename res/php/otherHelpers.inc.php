<?php
	function toHtml($text) {
		return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
	}

	function noConnection() {
		include 'noConnection.php';
		exit();
	}

	function setPost($index, $value) {
		$_POST[$index] = $value;
	}

	function getPost($index) {
		if(isset($_POST[$index])) {
			return $_POST[$index];
		}
		return '';
	}

	function issetPost($index) {
		return isset($_POST[$index]);
	}

	function setGet($index, $value) {
		$_Get[$index] = $value;
	}

	function getGet($index) {
		if(isset($_GET[$index])) {
			return $_GET[$index];
		}
		return '';
	}

	function issetGet($index) {
		return isset($_GET[$index]);
	}

	function setSession($index, $value) {
		$_SESSION[$index] = $value;
	}

	function getSession($index) {
		if(isset($_SESSION[$index])) {
			return $_SESSION[$index];
		}
		return '';
	}

	function issetSession($index) {
		return isset($_SESSION[$index]);
	}
?>
	