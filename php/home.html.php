<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Ateneo Strims</title>
		<link href="/strims/res/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/strims/res/css/styles.css" rel="stylesheet" />
		
		<script src="/strims/res/js/jquery-2.1.4.min.js"></script>
		<script src="/strims/res/js/bootstrap.min.js"></script>
		<script src="/strims/res/js/home.js"></script>
	</head>
	
	<body>
		<header class="navbar-srms inline space-between center-align" role="banner">
			<div class="navbar-header">
				<span class="navbar-brand">ATENEO STUDENT RISK MONITORING SYSTEM</a>
			</div>

			<div class="navbar-logout inline center-align space-between">

				<?php echo $_SESSION["username"] ?> (
				<form action="." method="post">
					<input type="submit" name="log-out" id="log-out-button" class="button-as-link" value="LOG OUT" />
				</form>
				)

			</div>
		</header>
		<div class="container tabs">
			
			<ul class="nav nav-tabs">
			 	<li role="presentation" class="active"><a href="#">Alert Profiles</a></li>
			 	<li role="presentation"><a href="#">Search Profiles</a></li>
			 	<li role="presentation"><a href="#">Search Reports</a></li>
			 	<li role="presentation"><a href="#">Add Profiles</a></li>
			 	<li role="presentation"><a href="#">Add Reports</a></li>
			 	<li role="presentation"><a href="#">Manage Accounts</a></li>
			</ul>
		</div>
		<div class="container software-body">
			<iframe src="alert-profiles.html" class="content embed-responsive-item" id="alert-profile-frame" scrolling="yes" frameBorder="0"></iframe>
			<iframe src="search-profiles.html" class="content embed-responsive-item" id="s-profile-frame" scrolling="no" frameBorder="0"></iframe>
			<iframe src="search-reports.html" class="content embed-responsive-item" id="s-report-frame" scrolling="no" frameBorder="0"></iframe>
			<iframe src="add-profiles.html" class="content embed-responsive-item" id="a-profile-frame" scrolling="yes" frameBorder="0"></iframe>
			<iframe src="add-reports.html" class="content embed-responsive-item" id="a-report-frame" scrolling="no" frameBorder="0"></iframe>
			<iframe src="manage-accounts.html" class="content embed-responsive-item" id="manage-account-frame" scrolling="no" frameBorder="0"></iframe>
		</div>
	</body>
</html>