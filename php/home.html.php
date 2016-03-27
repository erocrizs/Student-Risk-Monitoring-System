<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Ateneo Strims</title>
		<link href="/Student-Risk-Monitoring-System/res/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/Student-Risk-Monitoring-System/res/css/styles.css" rel="stylesheet" />
		
		<script src="/Student-Risk-Monitoring-System/res/js/jquery-2.1.4.min.js"></script>
		<script src="/Student-Risk-Monitoring-System/res/js/bootstrap.min.js"></script>
		<script src="/Student-Risk-Monitoring-System/res/js/home.js"></script>
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
			 	<?php if($_SESSION['type'] == 'admin') { ?>
				 	<li role="presentation"><a href="#">Add Profiles</a></li>
				 	<li role="presentation"><a href="#">Add Reports</a></li>
				 	<li role="presentation"><a href="#">Manage Accounts</a></li>
			 	<?php } ?>
			</ul>
		</div>
		<div class="container software-body">
			<iframe src="alert-profiles.html" class="content embed-responsive-item" id="alert-profile-frame" scrolling="yes" frameBorder="0"></iframe>
			<iframe src="search-profiles.php" class="content embed-responsive-item" id="s-profile-frame" scrolling="no" frameBorder="0"></iframe>
			<iframe src="search-reports.html" class="content embed-responsive-item" id="s-report-frame" scrolling="no" frameBorder="0"></iframe>
			<?php if($_SESSION['type'] == 'admin') { ?>
				<iframe src="add-profiles.php" class="content embed-responsive-item" id="a-profile-frame" scrolling="yes" frameBorder="0"></iframe>
				<iframe src="add-reports.html" class="content embed-responsive-item" id="a-report-frame" scrolling="no" frameBorder="0"></iframe>
				<iframe src="manage-accounts.html" class="content embed-responsive-item" id="manage-account-frame" scrolling="no" frameBorder="0"></iframe>
			<?php } ?>
		</div>
	</body>
</html>