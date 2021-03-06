<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Ateneo Strims</title>
		<link href="/Student-Risk-Monitoring-System/res/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/Student-Risk-Monitoring-System/res/css/styles.css" rel="stylesheet" />
		
		<script src="/Student-Risk-Monitoring-System/res/js/jquery-2.1.4.min.js"></script>
		<script src="/Student-Risk-Monitoring-System/res/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<div class="panel panel-primary login-panel">
			<div class="panel-heading">
				<h3 class="panel-title">Student Risk Monitoring System</h3>
			</div>
			<div class="panel-body">
				<form action="." method="post">
					<input type="text" name ="username" class="form-control" placeholder="Username" value="<?php echo getPost('username'); ?>" />
					<input type="password" name = "password" class="form-control" placeholder="Password" value="<?php echo getPost('password'); ?>" />
					<div>
						<input type="submit" name="log-in" class="btn btn-primary login-button" value="Log In"></input>
						<?php if(issetPost('invalid')) { ?>
								<span class="credential-warning">Invalid credentials.</span>
						<?php } ?>
						<?php echo getSession('account'); ?>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>