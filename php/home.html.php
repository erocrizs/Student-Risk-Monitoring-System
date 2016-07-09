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
			<?php echo getSession('account')['username'] ?> (
				<form action="." method="post">
					<input type="submit" name="logout" id="log-out-button" class="button-as-link" value="LOG OUT" />
				</form>
			)

			</div>
		</header>
		<div class="container tabs">
			
			<ul class="nav nav-tabs">
			 	<li role="presentation" class="active"><a>Alert Profiles</a></li>
			 	<li role="presentation"><a>Search Profiles</a></li>
			 	<li role="presentation"><a>Search Reports</a></li>
			 	<?php if(getSession('account')['type'] == 'admin') : ?>
				 	<li role="presentation"><a>Add Profiles</a></li>
				 	<li role="presentation"><a>Add Reports</a></li>
				 	<li role="presentation"><a>Manage Accounts</a></li>
			 	<?php endif; ?>
			</ul>
		</div>
		<div class="container software-body">
			<iframe src="alert-profiles.php" class="content embed-responsive-item" id="alert-profile-frame" scrolling="yes" frameBorder="0"></iframe>
			<iframe src="search-profiles.php" class="content embed-responsive-item" id="s-profile-frame" scrolling="no" frameBorder="0"></iframe>
			<iframe src="search-reports.php" class="content embed-responsive-item" id="s-report-frame" scrolling="no" frameBorder="0"></iframe>
			<?php if(getSession('account')['type'] == 'admin') : ?>
				<iframe src="add-profiles.php" class="content embed-responsive-item" id="a-profile-frame" scrolling="yes" frameBorder="0"></iframe>
				<iframe src="add-reports.php" class="content embed-responsive-item" id="a-report-frame" scrolling="no" frameBorder="0"></iframe>
				<iframe src="manage-accounts.php" class="content embed-responsive-item" id="manage-account-frame" scrolling="no" frameBorder="0"></iframe>
			<?php endif; ?>
		</div>
	</body>
</html>