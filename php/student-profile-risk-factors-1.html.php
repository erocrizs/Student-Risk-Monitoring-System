<!DOCTYPE html>

<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="lvl-of-depression">Level of depression: </label>
		<select name="lvlDepression" id="lvl-of-depression" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['lvlDepression'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['lvlDepression'], 1) ? "selected='selected'" : '' ?>>None</option>
			<option value="2" <?php echo compare($student['lvlDepression'], 2) ? "selected='selected'" : '' ?>>Mild</option>
			<option value="3" <?php echo compare($student['lvlDepression'], 3) ? "selected='selected'" : '' ?>>Moderate</option>
			<option value="4" <?php echo compare($student['lvlDepression'], 4) ? "selected='selected'" : '' ?>>Moderately severe</option>
			<option value="5" <?php echo compare($student['lvlDepression'], 5) ? "selected='selected'" : '' ?>>Severe</option>
		</select>
	</div>
	<div class="inline center-align two-col">
		<label for="lvl-of-anxiety">Level of anxiety: </label>
		<select name="lvlAnxiety" id="lvl-of-anxiety" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['lvlAnxiety'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['lvlAnxiety'], 1) ? "selected='selected'" : '' ?>>Minimal</option>
			<option value="2" <?php echo compare($student['lvlAnxiety'], 2) ? "selected='selected'" : '' ?>>Mild</option>
			<option value="3" <?php echo compare($student['lvlAnxiety'], 3) ? "selected='selected'" : '' ?>>Moderate</option>
			<option value="4" <?php echo compare($student['lvlAnxiety'], 4) ? "selected='selected'" : '' ?>>Severe</option>
		</select>
	</div>
</div>