<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Ateneo Strims</title>
		<link href="/Student-Risk-Monitoring-System/res/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/Student-Risk-Monitoring-System/res/css/content.css" rel="stylesheet" />
		
		<script src="/Student-Risk-Monitoring-System/res/js/jquery-2.1.4.min.js"></script>
		<script src="/Student-Risk-Monitoring-System/res/js/bootstrap.min.js"></script>
		<script src="/Student-Risk-Monitoring-System/res/js/student-profile.js"></script>
	</head>
	
	<body class="container">
		<?php print_r($student); ?>
		<!-- Add Individually Section -->
		<div class="add-indiv">
			<div class="profile-header inline space-between center-align">
				<?php include 'student-profile-header.html.php'; ?>
				<a href="#" id="delete-link">Delete Profile</a>
			</div>
			<!-- Statuses --
				<span class="error-msg">Edit failed. Please try again.</span>
				
				<span class="success-msg">Profile edited successfully.</span>
			<!---->
			<hr />
			<form action="student-profile.php" method="post" id="add-profile-indiv">
				<h4>Personal Information</h4>
				<div class="padded-side">

					<?php include 'student-profile-personal-information.html.php'; ?>

					<br />
					<label>QPI</label>
					<div class="padded-side">
						
						<?php include 'student-profile-qpi.html.php'; ?>

					</div>
				</div>
				<br />

				<h4>Protective Factors</h4>
				<div class="padded-side">

					<label>Social Support (from PDS)</label>
					<div class="padded-side">
						
						<?php include 'student-profile-social-support.html.php'; ?>
					</div>
					<br />

					<label>Spirituality (Spirituality Transcedence Index)</label>
					<div class="padded-side">
							
						<?php include 'student-profile-spirituality.html.php'; ?>

					</div>
					<br />


					<label>Coping Skills (Coping Strategies Inventory)</label>
					<div class="padded-side">

						<?php include 'student-profile-coping-skills.html.php'; ?>

					</div>
					<br />

				</div>
				<br />

				<h4>Risk Factors</h4>
				<div class="padded-side">
					
					<?php include 'student-profile-risk-factors-1.html.php'; ?>

					<br />
					<label>Suicidal Behaviour</label>
					<div class="padded-side">
							
						<?php include 'student-profile-risk-factors-2.html.php'; ?>

					</div>

					<br />
					<label>Basic Personality Inventory</label>
					<div class="padded-side">
						
						<?php include 'student-profile-risk-factors-3.html.php'; ?>

					</div>

					<br />
					<div class="inline space-between entry-row">
						
						<?php include 'student-profile-risk-factors-4.html.php'; ?>

					</div>

					<br />
					<label>History of Alcohol and/or Substance Abuse</label>
					<div class="padded-side">
						
						<?php include 'student-profile-risk-factors-5.html.php'; ?>

					</div>

					<br />
					
					<?php include 'student-profile-risk-factors-6.html.php'; ?>

				</div>
				<br />

			<br />
			<!-- <form action="student-profile.php" method="get" id="submit-profile-indiv"> -->
				<!-- <input type="hidden" name='id' value=<?php echo $student['id'] ?> id="id-profile"> -->
				<div class="inline space-around">
					<input type="submit" class="btn btn-primary" value="update" id="add-profile" />
				</div>
			<!-- </form> -->
			<br />
			</form>
			
		</div>
		
		<?php include 'student-profile-delete.html.php'; ?>

	</body>
</html>