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
	
	<body class="container">

		<!-- Add By File Section -->
		<div class="add-by-file">
			<h3>Upload a Spreadsheet (.xlsx) File</h3>
			<p>
				You can add multiple profiles at once by uploading a spreadsheet (.xlsx) file. Choose the spreadsheet file
				that contains the profile details you want to add and then upload.
			</p>

			<div class="inline space-between">
				<form action="?" method="post" >
					<div class="inline">
						<input type="file" class="btn btn-primary" name="xls-file" id="choose-file" />
						<input type="submit" class="btn btn-primary" value="Upload File" id="upload-file" />
					</div>
				</form>
				<a href="#"><button class="btn btn-primary">Download Template</button></a>
			</div>

			<div class="status">

				<!-- Statuses --
					<span class="error-msg">Upload failed. Please try again.</span>

					<span class="error-msg">Interpretation Error. Make sure the excel file is following the template properly.</span>
					
					<span class="success-msg">Uploaded file successfully. N new profiles added to the database.</span>
				<!---->

			</div>
		</div>

		<hr />

		<!-- Add Individually Section -->
		<div class="add-indiv">
			<h3>Add a Student Profile</h3>
			
			<!-- Statuses -->

			<?php if(isset($_POST['submit'])) {
				if($_POST['submit'] == 'success') { ?>
					<span class="success-msg">Profile added successfully.</span>
				<?php }
				elseif($_POST['submit'] == 'id') { ?>
					<span class="error-msg">The ID number has already been taken.</span>
				<?php }
				else { ?>
					<span class="error-msg">Adding failed. Please try again.</span>
				<?php }
			} ?>

			<!---->

			<form action="?" method="post" id="add-profile-indiv">
				<h4>Personal Information</h4>
				<div class="padded-side">

					<?php include 'add-profiles-personal-information.html.php' ?>

					<br />
					<label>QPI</label>
					<div class="padded-side">
						
						<?php include 'add-profiles-qpi.html.php' ?>

					</div>
				</div>
				<br />

				<h4>Protective Factors</h4>
				<div class="padded-side">

					<label>Social Support (from PDS)</label>
					<div class="padded-side">
						
						<?php include 'add-profiles-social-support.html.php' ?>

					</div>
					<br />

					<label>Spirituality (Spirituality Transcendence Index)</label>
					<div class="padded-side">
						
						<?php include 'add-profiles-spirituality.html.php' ?>

					</div>
					<br />

					<label>Coping Skills (Coping Strategies Inventory)</label>
					<div class="padded-side">
						
						<?php include 'add-profiles-coping-skills.html.php' ?>

					</div>
					<br />

				</div>
				<br />

				<h4>Risk Factors</h4>
				<div class="padded-side">
					
					<?php include 'add-profiles-risk-factors-1.html.php' ?>

					<br />
					<label>Suicidal Behaviour</label>
					<div class="padded-side">
						
						<?php include 'add-profiles-risk-factors-2.html.php' ?>

					</div>

					<br />
					<label>Basic Personality Inventory</label>
					<div class="padded-side">
						
						<?php include 'add-profiles-risk-factors-3.html.php' ?>

					</div>

					<br />
					
					<?php include 'add-profiles-risk-factors-4.html.php' ?>

					<br />
					<label>History of Alcohol and/or Substance Abuse</label>
					<div class="padded-side">
						
						<?php include 'add-profiles-risk-factors-5.html.php' ?>

					</div>

					<br />
					
					<?php include 'add-profiles-risk-factors-6.html.php' ?>

				</div>
				<br />

				<br />
				<div class="inline space-around">
					<input type="submit" name = "submit" class="btn btn-primary" value="Add Profile" id="add-profile" />
				</div>
				<br />
			</form>
		</div>
	</body>
</html>