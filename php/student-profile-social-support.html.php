<!DOCTYPE html>

<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="family-living-situation">Family living situation: </label>
		<select name="familyLivingSituation" id="family-living-situation" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['familyLivingSituation'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['familyLivingSituation'], 1) ? "selected='selected'" : '' ?>>Parents living together</option>
			<option value="2" <?php echo compare($student['familyLivingSituation'], 2) ? "selected='selected'" : '' ?>>Parent/s working away from home</option>
			<option value="3" <?php echo compare($student['familyLivingSituation'], 3) ? "selected='selected'" : '' ?>>Living with extended family</option>
			<option value="4" <?php echo compare($student['familyLivingSituation'], 4) ? "selected='selected'" : '' ?>>One deceased parent</option>
			<option value="5" <?php echo compare($student['familyLivingSituation'], 5) ? "selected='selected'" : '' ?>>Single parent</option>
			<option value="6" <?php echo compare($student['familyLivingSituation'], 6) ? "selected='selected'" : '' ?>>Separated/divorced/annulled</option>
			<option value="0" <?php echo compare($student['familyLivingSituation'], 0) ? "selected='selected'" : '' ?>>Others</option>
		</select>
	</div>
	<div class="inline center-align two-col">
		<label for="atmosphere-at-home">Atmosphere at home: </label>
		<select name="atmosphereAtHome" id="atmosphere-at-home" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['atmosphereAtHome'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['atmosphereAtHome'], 1) ? "selected='selected'" : '' ?>>Supportive and encouraging</option>
			<option value="2" <?php echo compare($student['atmosphereAtHome'], 2) ? "selected='selected'" : '' ?>>Generally good</option>
			<option value="3" <?php echo compare($student['atmosphereAtHome'], 3) ? "selected='selected'" : '' ?>>Slightly stressful</option>
			<option value="4" <?php echo compare($student['atmosphereAtHome'], 4) ? "selected='selected'" : '' ?>>Conflicted</option>
		</select>
	</div>
</div>

<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="parental-marital-status">Parents' marital status: </label>
		<select name="parentsMaritalStatus" id="parental-marital-status" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['parentsMaritalStatus'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['parentsMaritalStatus'], 1) ? "selected='selected'" : '' ?>>Very fulfilling and supportive</option>
			<option value="2" <?php echo compare($student['parentsMaritalStatus'], 2) ? "selected='selected'" : '' ?>>Fulfilling and supportive</option>
			<option value="3" <?php echo compare($student['parentsMaritalStatus'], 3) ? "selected='selected'" : '' ?>>Somewhat fulfilling and supportive</option>
			<option value="4" <?php echo compare($student['parentsMaritalStatus'], 4) ? "selected='selected'" : '' ?>>Neutral</option>
			<option value="5" <?php echo compare($student['parentsMaritalStatus'], 5) ? "selected='selected'" : '' ?>>Not fulfilling or supportive</option>
			<option value="0" <?php echo compare($student['parentsMaritalStatus'], 0) ? "selected='selected'" : '' ?>>Not applicable</option>
		</select>
	</div>
	<div class="inline center-align two-col">
		<label for="rel-with-father">Relationship with father: </label>
		<select name="relFather" id="rel-with-father" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['relFather'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['relFather'], 1) ? "selected='selected'" : '' ?>>Very fulfilling and supportive</option>
			<option value="2" <?php echo compare($student['relFather'], 2) ? "selected='selected'" : '' ?>>Fulfilling and supportive</option>
			<option value="3" <?php echo compare($student['relFather'], 3) ? "selected='selected'" : '' ?>>Somewhat fulfilling and supportive</option>
			<option value="4" <?php echo compare($student['relFather'], 4) ? "selected='selected'" : '' ?>>Neutral</option>
			<option value="5" <?php echo compare($student['relFather'], 5) ? "selected='selected'" : '' ?>>Not fulfilling or supportive</option>
			<option value="0" <?php echo compare($student['relFather'], 0) ? "selected='selected'" : '' ?>>Not applicable</option>
		</select>
	</div>
</div>
<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="rel-with-mother">Relationship with mother: </label>
		<select name="relMother" id="rel-with-mother" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['relMother'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['relMother'], 1) ? "selected='selected'" : '' ?>>Very fulfilling and supportive</option>
			<option value="2" <?php echo compare($student['relMother'], 2) ? "selected='selected'" : '' ?>>Fulfilling and supportive</option>
			<option value="3" <?php echo compare($student['relMother'], 3) ? "selected='selected'" : '' ?>>Somewhat fulfilling and supportive</option>
			<option value="4" <?php echo compare($student['relMother'], 4) ? "selected='selected'" : '' ?>>Neutral</option>
			<option value="5" <?php echo compare($student['relMother'], 5) ? "selected='selected'" : '' ?>>Not fulfilling or supportive</option>
			<option value="0" <?php echo compare($student['relMother'], 0) ? "selected='selected'" : '' ?>>Not applicable</option>
		</select>
	</div>
	<div class="inline center-align two-col">
		<!-- filler -->
	</div>
</div>