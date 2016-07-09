<!DOCTYPE html>

<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="alcohol-use">Alcohol use: </label>
		<select name="alcoholUse" id="alcohol-use" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['alcoholUse'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['alcoholUse'], 1) ? "selected='selected'" : '' ?>>No</option>
			<option value="2" <?php echo compare($student['alcoholUse'], 2) ? "selected='selected'" : '' ?>>Sometimes</option>
			<option value="3" <?php echo compare($student['alcoholUse'], 3) ? "selected='selected'" : '' ?>>Yes</option>
		</select>
	</div>
	<div class="inline center-align two-col">
		<label for="drug-use">Drug use: </label>
		<select name="drugUse" id="drug-use" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['drugUse'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['drugUse'], 1) ? "selected='selected'" : '' ?>>No</option>
			<option value="2" <?php echo compare($student['drugUse'], 2) ? "selected='selected'" : '' ?>>Yes</option>
		</select>
	</div>
</div>