<?php
	function toHtml($text) {
		return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
	}
	
	function noConnection($message, $error) {
		$errorMessage = $message.' '.$error;
		include 'noConnection.html.php';
		exit();
	}
?>
	