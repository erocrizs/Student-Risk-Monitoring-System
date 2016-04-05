<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Ateneo Strims</title>
		<link href="/Student-Risk-Monitoring-System/res/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/Student-Risk-Monitoring-System/res/css/content.css" rel="stylesheet" />
		
		<script src="/Student-Risk-Monitoring-System/res/js/jquery-2.1.4.min.js"></script>
		<script src="/Student-Risk-Monitoring-System/res/js/bootstrap.min.js"></script>
		<script src="/Student-Risk-Monitoring-System/res/js/search-profiles.js"></script>
	</head>
	
	<body class="full">
		<div id="search-profile">
			<form action="search-profiles.php" method="post" id="filter">
			</form>


			<div class="control-bar inline space-between center-align">
				<button type="submit" form="filter" name="apply-filter" class="btn btn-primary" id="refresh-button"><span class="glyphicon glyphicon-filter"></span> Apply Filter </button>
				<div>
					<button class="btn btn-primary" id="clear-button"><span class="glyphicon glyphicon-repeat"></span> Reset Filter </button>
					<button class="btn btn-primary" id="delete-link"><span class="glyphicon glyphicon-trash"></span> Delete All </button>
				</div>
			</div>

			<div class="main inline">
				<div class="search-section">
					<ul>
						<li>
							<p class="collapse-trigger">Personal Information</p>
							<ul class="collapsee">
								
								<?php include 'search-profiles-personal-information.html.php'; ?>

								<li>
									<p class="collapse-trigger">QPI</p>
									<ul class="collapsee">

										<?php include 'search-profiles-qpi.html.php'; ?>
										
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<p class="collapse-trigger">Risk Factors</p>
							<ul class="collapsee">

								<?php include 'search-profiles-risk-factors-1.html.php'; ?>

								<?php include 'search-profiles-risk-factors-2.html.php'; ?>

								<li>
									<p class="collapse-trigger">Basic Personality Inventory</p>
									<ul class="collapsee">
										
										<?php include 'search-profiles-risk-factors-3.html.php'; ?>

									</ul>
								</li>
								
								<?php include 'search-profiles-risk-factors-4.html.php'; ?>

								<li>
									<p class="collapse-trigger">History of Alcohol and/or Substance Use</p>
									<ul class="collapsee">
										
										<?php include 'search-profiles-risk-factors-5.html.php'; ?>

									</ul>
								</li>
								
								<?php include 'search-profiles-risk-factors-6.html.php'; ?>

							</ul>
						</li>
						<li>
							<p class="collapse-trigger">Protective Factors</p>
							<ul class="collapsee">
								<li>
									<p class="collapse-trigger">Social Support (from PDS) </p>
									<ul class="collapsee">
										
										<?php include 'search-profiles-social-support.html.php'; ?>

									</ul>
								</li>
								<li>
									<p class="collapse-trigger">Spirituality (Spirituality Transcedence Index)</p>
									<ul class="collapsee">
										
										<?php include 'search-profiles-spirituality.html.php'; ?>

									</ul>
								</li>
								<li>
									<p class="collapse-trigger">Coping Skills (Coping Strategies Inventory)</p>
									<ul class="collapsee">
										
										<?php include 'search-profiles-coping-skills.html.php'; ?>

									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="result-section">
						
					<?php include 'profiles-result-table.html.php'; ?>
					
				</div>
			</div>
		</div>
		
		<?php include 'search-profiles-delete.html.php'; ?>

	</body>
</html>