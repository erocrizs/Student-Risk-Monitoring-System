<!DOCTYPE html>

<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="spiritual-subscale">Spiritual subscale: </label>
		<select name="spiritualSubscale" id="spiritual-subscale" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['spiritualSubscale'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['spiritualSubscale'], 1) ? "selected='selected'" : '' ?>>High</option>
			<option value="2" <?php echo compare($student['spiritualSubscale'], 2) ? "selected='selected'" : '' ?>>Moderate</option>
			<option value="3" <?php echo compare($student['spiritualSubscale'], 3) ? "selected='selected'" : '' ?>>Low</option>
		</select>
	</div>
	<div class="inline center-align two-col">
		<label for="god-subscale">God subscale: </label>
		<select name="godSubscale" id="god-subscale" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['godSubscale'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['godSubscale'], 1) ? "selected='selected'" : '' ?>>High</option>
			<option value="2" <?php echo compare($student['godSubscale'], 2) ? "selected='selected'" : '' ?>>Moderate</option>
			<option value="3" <?php echo compare($student['godSubscale'], 3) ? "selected='selected'" : '' ?>>Low</option>
		</select>
	</div>
</div>