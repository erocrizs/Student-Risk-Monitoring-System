<!DOCTYPE html>

<div class="dim-screen">
	<div class="center-prompt panel panel-danger">
		<div class="panel-heading">
			<h3 class="panel-title"><span class="glyphicon glyphicon-exclamation-sign"></span> Are you sure you want to delete all these profile?</h3>
		</div>
		<div class="panel-body">
			<p>This action will be irreversible.</p>
			<form action="." method="post" id="delete" target="_blank">
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