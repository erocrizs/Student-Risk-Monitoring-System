<!DOCTYPE html>

<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="feeling-hopeless">Feeling of hopelessness (GAPS): </label>
		<select name="hopelessness" id="feeling-hopeless" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['hopelessness'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['hopelessness'], 1) ? "selected='selected'" : '' ?>>No</option>
			<option value="2" <?php echo compare($student['hopelessness'], 2) ? "selected='selected'" : '' ?>>Sometimes</option>
			<option value="3" <?php echo compare($student['hopelessness'], 3) ? "selected='selected'" : '' ?>>Yes</option>
		</select>
	</div>
	<div class="inline center-align two-col">
		<label for="trauma-abuse">History of trauma or abuse (GAPS): </label>
		<select name="traumaAbuse" id="trauma-abuse" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['traumaAbuse'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['traumaAbuse'], 1) ? "selected='selected'" : '' ?>>No</option>
			<option value="2" <?php echo compare($student['traumaAbuse'], 2) ? "selected='selected'" : '' ?>>Not sure</option>
			<option value="3" <?php echo compare($student['traumaAbuse'], 3) ? "selected='selected'" : '' ?>>Yes</option>
		</select>
	</div>
</div>
<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="physical-illness">Major physical illness (Health Record): </label>
		<select name="physicalIllness" id="physical-illness" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['physicalIllness'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['physicalIllness'], 1) ? "selected='selected'" : '' ?>>No</option>
			<option value="2" <?php echo compare($student['physicalIllness'], 2) ? "selected='selected'" : '' ?>>Yes</option>
		</select>
	</div>
	<div class="inline center-align two-col">
		<label for="past-suicidal-acts">Past suicidal acts/self-harm: </label>
		<select name="pastSuicidalActs" id="past-suicidal-acts" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['pastSuicidalActs'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['pastSuicidalActs'], 1) ? "selected='selected'" : '' ?>>No</option>
			<option value="2" <?php echo compare($student['pastSuicidalActs'], 2) ? "selected='selected'" : '' ?>>Yes</option>
		</select>
	</div>
</div>
<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="family-history-suicide">Family history of suicide: </label>
		<select name="familyHistorySuicide" id="family-history-suicide" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['familyHistorySuicide'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['familyHistorySuicide'], 1) ? "selected='selected'" : '' ?>>No</option>
			<option value="2" <?php echo compare($student['familyHistorySuicide'], 2) ? "selected='selected'" : '' ?>>Yes</option>
		</select>
	</div>
	<div class="inline center-align two-col">
		<label for="family-history-mental">Family history of mental health: </label>
		<select name="familyHistoryMental" id="family-history-mental" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['familyHistoryMental'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['familyHistoryMental'], 1) ? "selected='selected'" : '' ?>>No</option>
			<option value="2" <?php echo compare($student['familyHistoryMental'], 2) ? "selected='selected'" : '' ?>>Yes</option>
		</select>
	</div>
</div>
<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="stressful-life-events">Presence of stressful life events: </label>
		<select name="stressfulLifeEvents" id="stressful-life-events" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['stressfulLifeEvents'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['stressfulLifeEvents'], 1) ? "selected='selected'" : '' ?>>No</option>
			<option value="2" <?php echo compare($student['stressfulLifeEvents'], 2) ? "selected='selected'" : '' ?>>Yes</option>
		</select>
	</div>
	<div class="inline center-align two-col">
		<label for="relational-social-loss">Relational or social loss: </label>
		<select name="relationalSocialLoss" id="relational-social-loss" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['relationalSocialLoss'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['relationalSocialLoss'], 1) ? "selected='selected'" : '' ?>>No</option>
			<option value="2" <?php echo compare($student['relationalSocialLoss'], 2) ? "selected='selected'" : '' ?>>Yes</option>
		</select>
	</div>
</div>
<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="access-lethal-means">Access to lethal means (GAPS): </label>
		<select name="accessLethalMeans" id="access-lethal-means" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['accessLethalMeans'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['accessLethalMeans'], 1) ? "selected='selected'" : '' ?>>No</option>
			<option value="2" <?php echo compare($student['accessLethalMeans'], 2) ? "selected='selected'" : '' ?>>Not sure</option>
			<option value="3" <?php echo compare($student['accessLethalMeans'], 3) ? "selected='selected'" : '' ?>>Yes</option>
		</select>
	</div>
	<div class="inline center-align two-col">
		<label for="disciplinary-cases">Disciplinary cases: </label>
		<select name="disciplinaryCases" id="disciplinary-cases" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['disciplinaryCases'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['disciplinaryCases'], 1) ? "selected='selected'" : '' ?>>No</option>
			<option value="2" <?php echo compare($student['disciplinaryCases'], 2) ? "selected='selected'" : '' ?>>Yes</option>
		</select>
	</div>
</div>
<div class="inline space-between entry-row">
	<div class="inline center-align two-col">
		<label for="sexual-orientation">Sexual orientation (GAPS): </label>
		<select name="sexualOrientation" id="sexual-orientation" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['sexualOrientation'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['sexualOrientation'], 1) ? "selected='selected'" : '' ?>>No</option>
			<option value="2" <?php echo compare($student['sexualOrientation'], 2) ? "selected='selected'" : '' ?>>Not sure</option>
			<option value="3" <?php echo compare($student['sexualOrientation'], 3) ? "selected='selected'" : '' ?>>Yes</option>
		</select>
	</div>
	<div class="two-col">
		<!-- filler -->
	</div>
</div>