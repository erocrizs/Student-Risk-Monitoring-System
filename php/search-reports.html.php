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
		<div id="search-report">
			<form action="search-reports.php" method="post" id="filter">
			</form>


			<div class="control-bar inline space-between center-align">
				<button type="submit" form="filter" name="applyFilter" class="btn btn-primary" id="refresh-button"><span class="glyphicon glyphicon-filter"></span> Apply Filter </button>
				<div>
					<button class="btn btn-primary" id="clear-button"><span class="glyphicon glyphicon-repeat"></span> Reset Filter </button>
					<button class="btn btn-primary" id="delete-link"><span class="glyphicon glyphicon-trash"></span> Delete All </button>
				</div>
			</div>

			<div class="main inline">
				<div class="search-section">
					<ul>
						<li>
							<p class="collapse-trigger">Student ID</p>
							<p class="collapsee indent">
								ID No. starts with:
								<input type="text" class="form-control" name="studentId" form="filter" />
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Date Reported</p>
							<p class="collapsee indent">
								Reported between:
								<input type="date" class="form-control" name="dateReportedMin" form="filter" />
								and:
								<input type="date" class="form-control" name="dateReportedMax" form="filter" />
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Reported From</p>
							<p class="collapsee indent">
								Contains:
								<input type="text" class="form-control" name="reportedFrom" form="filter" />
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Receiving Office</p>
							<p class="collapsee indent">
								Contains:
								<input type="text" class="form-control" name="receivingOffice" form="filter" />
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Case Handler</p>
							<p class="collapsee indent">
								Contains:
								<input type="text" class="form-control" name="caseHandler" form="filter" />
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Summary of Report</p>
							<p class="collapsee indent">
								Contains:
								<textarea name="summary" id="summary-report" class="form-control" form="filter" rows="5"></textarea>
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Risk for Violence</p>
							<p class="collapsee indent">
								Contains:
								<input type="text" class="form-control" name="riskViolence" form="filter" />
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Ideation</p>
							<p class="collapsee indent">
								Contains:
								<input type="text" class="form-control" name="ideation" form="filter" />
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Actual Attempts</p>
							<p class="collapsee indent">
								Contains:
								<input type="text" class="form-control" name="attempts" form="filter" />
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Diagnosis</p>
							<p class="collapsee indent">
								Contains:
								<input type="text" class="form-control" name="diagnosis" form="filter" />
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Psychiatrist</p>
							<p class="collapsee indent">
								Contains:
								<input type="text" class="form-control" name="psychiatrist" form="filter" />
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Medicine</p>
							<p class="collapsee indent">
								Contains:
								<input type="text" class="form-control" name="medicine" form="filter" />
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Course of Action</p>
							<p class="collapsee indent">
								Contains:
								<input type="text" class="form-control" name="action" form="filter" />
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Updates by Case Handlers</p>
							<p class="collapsee indent">
								Contains:
								<input type="text" class="form-control" name="updatesCaseHandler" form="filter" />
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Updates from OHS</p>
							<p class="collapsee indent">
								Contains:
								<input type="text" class="form-control" name="updatesOHS" form="filter" />
							</p>
						</li>
						<li>
							<p class="collapse-trigger">Visits with the Psychologist or Councelor</p>
							<p class="collapsee indent">
								Contains:
								<input type="text" class="form-control" name="visitsPsychCounselor" form="filter" />
							</p>
						</li>
					</ul>
				</div>

				<div class="result-section">
					
					<?php include 'reports-result-table.html.php'; ?>

				</div>
			</div>
		</div>
		<div class="dim-screen">
			<div class="center-prompt panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-exclamation-sign"></span> Are you sure you want to delete all these profile?</h3>
				</div>
				<div class="panel-body">
					<p>This action will be irreversible.</p>
					<form action="?" method="post" id="delete" target="_blank">
						<div class="inline space-around center-align">
							<div>
								<button id="delete-profile" type="submit" class="btn btn-danger" >Delete Profiles</button>
								<button id="cancel-delete" type="button" class="btn btn-primary">Cancel</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>