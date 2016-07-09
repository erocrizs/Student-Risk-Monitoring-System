<!DOCTYPE html>

<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="problem-solving">Problem solving: </label>
		<select name="problemSolving" id="problem-solving" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['problemSolving'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['problemSolving'], 1) ? "selected='selected'" : '' ?>>Very high</option>
			<option value="2" <?php echo compare($student['problemSolving'], 2) ? "selected='selected'" : '' ?>>High</option>
			<option value="3" <?php echo compare($student['problemSolving'], 3) ? "selected='selected'" : '' ?>>Average</option>
			<option value="4" <?php echo compare($student['problemSolving'], 4) ? "selected='selected'" : '' ?>>Low</option>
			<option value="5" <?php echo compare($student['problemSolving'], 5) ? "selected='selected'" : '' ?>>Very low</option>
		</select>
	</div>
	<div class="inline center-align two-col">
		<label for="seeking-social-support">Seeking social support: </label>
		<select name="seekingSocialSupport" id="seeking-social-support" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['seekingSocialSupport'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['seekingSocialSupport'], 1) ? "selected='selected'" : '' ?>>Very high</option>
			<option value="2" <?php echo compare($student['seekingSocialSupport'], 2) ? "selected='selected'" : '' ?>>High</option>
			<option value="3" <?php echo compare($student['seekingSocialSupport'], 3) ? "selected='selected'" : '' ?>>Average</option>
			<option value="4" <?php echo compare($student['seekingSocialSupport'], 4) ? "selected='selected'" : '' ?>>Low</option>
			<option value="5" <?php echo compare($student['seekingSocialSupport'], 5) ? "selected='selected'" : '' ?>>Very low</option>
		</select>
	</div>
</div>
<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="avoidance">Avoidance: </label>
		<select name="avoidance" id="avoidance" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['avoidance'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['avoidance'], 1) ? "selected='selected'" : '' ?>>Very low</option>
			<option value="2" <?php echo compare($student['avoidance'], 2) ? "selected='selected'" : '' ?>>Low</option>
			<option value="3" <?php echo compare($student['avoidance'], 3) ? "selected='selected'" : '' ?>>Average</option>
			<option value="4" <?php echo compare($student['avoidance'], 4) ? "selected='selected'" : '' ?>>High</option>
			<option value="5" <?php echo compare($student['avoidance'], 5) ? "selected='selected'" : '' ?>>Very high</option>
		</select>
	</div>
	<div class="two-col">
		<!-- filler -->
	</div>
</div>