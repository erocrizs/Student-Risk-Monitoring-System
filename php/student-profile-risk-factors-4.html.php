<!DOCTYPE html>

<div class="inline center-align two-col">
	<label for="mental-disorder">Presence of Mental Disorder/Diagnosis: </label>
	<select name="mentalDisorder" id="mental-disorder" form="add-profile-indiv" class="form-control">
		<option value="" <?php echo compare($student['mentalDisorder'], -1) ? "selected='selected'" : '' ?>></option>
		<option value="1" <?php echo compare($student['mentalDisorder'], 1) ? "selected='selected'" : '' ?>>No</option>
		<option value="2" <?php echo compare($student['mentalDisorder'], 2) ? "selected='selected'" : '' ?>>Yes</option>
	</select>
</div>
<div class="two-col">
	<!-- filler -->
</div>