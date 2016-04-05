<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Ateneo Strims</title>
		<link href="/Student-Risk-Monitoring-System/res/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/Student-Risk-Monitoring-System/res/css/content.css" rel="stylesheet" />
		
		<script src="/Student-Risk-Monitoring-System/res/js/jquery-2.1.4.min.js"></script>
		<script src="/Student-Risk-Monitoring-System/res/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<div class="padded-side alert-profile">
			<div class="inline space-between center-align" id="alert-bar">
				<h3>Students at Risk</h3>
				<a href='alert-profiles.php'> <button class="btn btn-primary" id="refresh-button"><span class="glyphicon glyphicon-refresh"></span> Refresh</button></a>
			</div>
			<form action="?" method="get" target="_blank">

				<?php include 'profiles-result-table.html.php'; ?>
				
			</form>
		</div>
	</body>
</html>