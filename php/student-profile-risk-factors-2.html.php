<!DOCTYPE html>

<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="suicidal-behavior-q">Suicidal Behaviors Questionaire - Revised: </label>
		<select name="suicideBehavior" id="suicidal-behavoir-q" form="add-profile-indiv" class="form-control">
			<option value=""<?php echo compare($student['suicideBehavior'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1"<?php echo compare($student['suicideBehavior'], 1) ? "selected='selected'" : '' ?>>None</option>
			<option value="2"<?php echo compare($student['suicideBehavior'], 2) ? "selected='selected'" : '' ?>>Mild</option>
			<option value="3"<?php echo compare($student['suicideBehavior'], 3) ? "selected='selected'" : '' ?>>Moderate</option>
			<option value="4"<?php echo compare($student['suicideBehavior'], 4) ? "selected='selected'" : '' ?>>Moderately severe</option>
			<option value="5"<?php echo compare($student['suicideBehavior'], 5) ? "selected='selected'" : '' ?>>Severe</option>
		</select>
	</div>
	<div class="inline center-align two-col">
		<label for="suicidal-thoughts">Suicidal Thoughts (GAPS): </label>
		<select name="suicidalThoughts" id="suicidal-thoughts" form="add-profile-indiv" class="form-control">
			<option value=""<?php echo compare($student['suicidalThoughts'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1"<?php echo compare($student['suicidalThoughts'], 1) ? "selected='selected'" : '' ?>>No</option>
			<option value="2"<?php echo compare($student['suicidalThoughts'], 2) ? "selected='selected'" : '' ?>>Sometimes</option>
			<option value="3"<?php echo compare($student['suicidalThoughts'], 3) ? "selected='selected'" : '' ?>>Yes</option>
		</select>
	</div>
</div>