<!DOCTYPE html>

<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="suicideBehavior">Suicide Behaviors Questionaire - Revised: </label>
		<select name="suicide-behavior" id="suicide-behavior-q" form="add-profile-indiv" class="form-control">
			<option value="" selected="<?php echo checkedPost('suicideBehavior', -1) ? 'selected' : '' ?>"></option>
			<option value="1">None</option>
			<option value="2">Mild</option>
			<option value="3">Moderate</option>
			<option value="4">Moderately severe</option>
			<option value="5">Severe</option>
		</select>
	</div>
	<div class="inline center-align two-col">
		<label for="suicidalThoughts">Suicidal Thoughts (GAPS): </label>
		<select name="suicidal-thoughts" id="suicidal-thoughts" form="add-profile-indiv" class="form-control">
			<option value="" selected="selected"></option>
			<option value="1">No</option>
			<option value="2">Sometimes</option>
			<option value="3">Yes</option>
		</select>
	</div>
</div>