<!DOCTYPE html>

<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="bpi-hypochondriasis">Hypo-chondriasis: </label>
		<select name="hypochondriasis" id="bpi-hypochondriasis" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['hypochondriasis'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['hypochondriasis'], 1) ? "selected='selected'" : '' ?>>Low</option>
			<option value="2" <?php echo compare($student['hypochondriasis'], 2) ? "selected='selected'" : '' ?>>High</option>
		</select>
	</div>
	<div class="inline center-align three-col">
		<label for="bpi-depression">Depression: </label>
		<select name="depression" id="bpi-depression" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['depression'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['depression'], 1) ? "selected='selected'" : '' ?>>Low</option>
			<option value="2" <?php echo compare($student['depression'], 2) ? "selected='selected'" : '' ?>>High</option>
		</select>
	</div>
	<div class="inline center-align three-col">
		<label for="bpi-denial">Denial: </label>
		<select name="denial" id="bpi-denial" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['denial'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['denial'], 1) ? "selected='selected'" : '' ?>>Low</option>
			<option value="2" <?php echo compare($student['denial'], 2) ? "selected='selected'" : '' ?>>High</option>
		</select>
	</div>
</div>
<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="bpi-inter-problems">Interpersonal problems: </label>
		<select name="interpersonalProblems" id="bpi-inter-problems" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['interpersonalProblems'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['interpersonalProblems'], 1) ? "selected='selected'" : '' ?>>Low</option>
			<option value="2" <?php echo compare($student['interpersonalProblems'], 2) ? "selected='selected'" : '' ?>>High</option>
		</select>
	</div>
	<div class="inline center-align three-col">
		<label for="bpi-alienation">Alienation: </label>
		<select name="alienation" id="bpi-alienation" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['alienation'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['alienation'], 1) ? "selected='selected'" : '' ?>>Low</option>
			<option value="2" <?php echo compare($student['alienation'], 2) ? "selected='selected'" : '' ?>>High</option>
		</select>
	</div>
	<div class="inline center-align three-col">
		<label for="bpi-perse-ideas">Persecutory ideas: </label>
		<select name="persecutoryIdeas" id="bpi-perse-ideas" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['persecutoryIdeas'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['persecutoryIdeas'], 1) ? "selected='selected'" : '' ?>>Low</option>
			<option value="2" <?php echo compare($student['persecutoryIdeas'], 2) ? "selected='selected'" : '' ?>>High</option>
		</select>
	</div>
</div>
<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="bpi-anxiety">Anxiety: </label>
		<select name="anxiety" id="bpi-anxiety" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['anxiety'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['anxiety'], 1) ? "selected='selected'" : '' ?>>Low</option>
			<option value="2" <?php echo compare($student['anxiety'], 2) ? "selected='selected'" : '' ?>>High</option>
		</select>
	</div>
	<div class="inline center-align three-col">
		<label for="bpi-thinking-disorder">Thinking disorder: </label>
		<select name="thinkingDisorder" id="bpi-thinking-disorder" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['thinkingDisorder'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['thinkingDisorder'], 1) ? "selected='selected'" : '' ?>>Low</option>
			<option value="2" <?php echo compare($student['thinkingDisorder'], 2) ? "selected='selected'" : '' ?>>High</option>
		</select>
	</div>
	<div class="inline center-align three-col">
		<label for="bpi-impulse-exp">Impulse expression: </label>
		<select name="impulseExpression" id="bpi-impulse-exp" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['impulseExpression'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['impulseExpression'], 1) ? "selected='selected'" : '' ?>>Low</option>
			<option value="2" <?php echo compare($student['impulseExpression'], 2) ? "selected='selected'" : '' ?>>High</option>
		</select>
	</div>
</div>
<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="bpi-social-introversion">Social introversion: </label>
		<select name="socialIntroversion" id="bpi-social-introversion" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['socialIntroversion'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['socialIntroversion'], 1) ? "selected='selected'" : '' ?>>Low</option>
			<option value="2" <?php echo compare($student['socialIntroversion'], 2) ? "selected='selected'" : '' ?>>High</option>
		</select>
	</div>
	<div class="inline center-align three-col">
		<label for="bpi-self-depreciation">Self depreciation: </label>
		<select name="selfDepreciation" id="bpi-self-depreciation" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['selfDepreciation'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['selfDepreciation'], 1) ? "selected='selected'" : '' ?>>Low</option>
			<option value="2" <?php echo compare($student['selfDepreciation'], 2) ? "selected='selected'" : '' ?>>High</option>
		</select>
	</div>
	<div class="inline center-align three-col">
		<label for="bpi-deviation">Deviation: </label>
		<select name="deviation" id="bpi-deviation" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['deviation'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['deviation'], 1) ? "selected='selected'" : '' ?>>Low</option>
			<option value="2" <?php echo compare($student['deviation'], 2) ? "selected='selected'" : '' ?>>High</option>
		</select>
	</div>
</div>