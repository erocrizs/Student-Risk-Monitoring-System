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
					<input type="text" name ="username" class="form-control" placeholder="Username" />
					<input type="password" name = "password" class="form-control" placeholder="Password" />
					<div>
						<input type="submit" class="btn btn-primary login-button" value="Log In"></input>
						<?php 	global $type; 
								if(isset($_POST["username"]) && !isset($_SESSION['type'])) { ?>
									<span class="credential-warning">Invalid credentials.</span>
						<?php } ?>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>