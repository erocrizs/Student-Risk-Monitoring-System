<!DOCTYPE html>

<li>
	<p class="collapse-trigger">Feeling of Hopelessness (GAPS)</p>
	<p class="collapsee indent">
		<input type="checkbox" name="hopelessness[]" value="1" form="filter" <?php if(checkedPost('hopelessness', "1")) : ?> checked <?php endif; ?> /> No <br />
		<input type="checkbox" name="hopelessness[]" value="2" form="filter" <?php if(checkedPost('hopelessness', "2")) : ?> checked <?php endif; ?> /> Yes
	</p>
</li>
<li>
	<p class="collapse-trigger">History of Trauma/Abuse (GAPS)</p>
	<p class="collapsee indent">
		<input type="checkbox" name="traumaAbuse[]" value="1" form="filter" <?php if(checkedPost('traumaAbuse', "1")) : ?> checked <?php endif; ?> /> No <br />
		<input type="checkbox" name="traumaAbuse[]" value="2" form="filter" <?php if(checkedPost('traumaAbuse', "2")) : ?> checked <?php endif; ?> /> Not sure<br />
		<input type="checkbox" name="traumaAbuse[]" value="3" form="filter" <?php if(checkedPost('traumaAbuse', "3")) : ?> checked <?php endif; ?> /> Yes
	</p>
</li>
<li>
	<p class="collapse-trigger">Major Physical Illness (from Health Record)</p>
	<p class="collapsee indent">
		<input type="checkbox" name="physicalIllness[]" value="1" form="filter" <?php if(checkedPost('physicalIllness', "1")) : ?> checked <?php endif; ?> /> No <br />
		<input type="checkbox" name="physicalIllness[]" value="2" form="filter" <?php if(checkedPost('physicalIllness', "2")) : ?> checked <?php endif; ?> /> Yes
	</p>
</li>
<li>
	<p class="collapse-trigger">Past Suicidal Acts/Self-Harm</p>
	<p class="collapsee indent">
		<input type="checkbox" name="pastSuicidalActs[]" value="1" form="filter" <?php if(checkedPost('pastSuicidalActs', "1")) : ?> checked <?php endif; ?> /> No <br />
		<input type="checkbox" name="pastSuicidalActs[]" value="2" form="filter" <?php if(checkedPost('pastSuicidalActs', "2")) : ?> checked <?php endif; ?> /> Yes
	</p>
</li>
<li>
	<p class="collapse-trigger">Family History of Suicide</p>
	<p class="collapsee indent">
		<input type="checkbox" name="familyHistorySuicide[]" value="1" form="filter" <?php if(checkedPost('familyHistorySuicide', "1")) : ?> checked <?php endif; ?> /> No <br />
		<input type="checkbox" name="familyHistorySuicide[]" value="2" form="filter" <?php if(checkedPost('familyHistorySuicide', "2")) : ?> checked <?php endif; ?> /> Yes
	</p>
</li>
<li>
	<p class="collapse-trigger">Family History of Mental Health</p>
	<p class="collapsee indent">
		<input type="checkbox" name="familyHistoryMental[]" value="1" form="filter" <?php if(checkedPost('familyHistoryMental', "1")) : ?> checked <?php endif; ?> /> No <br />
		<input type="checkbox" name="familyHistoryMental[]" value="2" form="filter" <?php if(checkedPost('familyHistoryMental', "2")) : ?> checked <?php endif; ?> /> Yes
	</p>
</li>
<li>
	<p class="collapse-trigger">Presence of Stressful Life Events</p>
	<p class="collapsee indent">
		<input type="checkbox" name="stressfulLifeEvents[]" value="1" form="filter" <?php if(checkedPost('stressfulLifeEvents', "1")) : ?> checked <?php endif; ?> /> No <br />
		<input type="checkbox" name="stressfulLifeEvents[]" value="2" form="filter" <?php if(checkedPost('stressfulLifeEvents', "2")) : ?> checked <?php endif; ?> /> Yes
	</p>
</li>
<li>
	<p class="collapse-trigger">Relational or Social Loss</p>
	<p class="collapsee indent">
		<input type="checkbox" name="relationalSocialLoss[]" value="1" form="filter" <?php if(checkedPost('relationalSocialLoss', "1")) : ?> checked <?php endif; ?> /> No <br />
		<input type="checkbox" name="relationalSocialLoss[]" value="2" form="filter" <?php if(checkedPost('relationalSocialLoss', "2")) : ?> checked <?php endif; ?> /> Yes
	</p>
</li>
<li>
	<p class="collapse-trigger">Access to Lethal Means (GAPS)</p>
	<p class="collapsee indent">
		<input type="checkbox" name="accessLethalMeans[]" value="1" form="filter" <?php if(checkedPost('accessLethalMeans', "1")) : ?> checked <?php endif; ?> /> No <br />
		<input type="checkbox" name="accessLethalMeans[]" value="2" form="filter" <?php if(checkedPost('accessLethalMeans', "2")) : ?> checked <?php endif; ?> /> Not sure<br />
		<input type="checkbox" name="accessLethalMeans[]" value="3" form="filter" <?php if(checkedPost('accessLethalMeans', "3")) : ?> checked <?php endif; ?> /> Yes
	</p>
</li>
<li>
	<p class="collapse-trigger">Disciplinary Cases</p>
	<p class="collapsee indent">
		<input type="checkbox" name="disciplinaryCases[]" value="1" form="filter" <?php if(checkedPost('disciplinaryCases', "1")) : ?> checked <?php endif; ?> /> No <br />
		<input type="checkbox" name="disciplinaryCases[]" value="2" form="filter" <?php if(checkedPost('disciplinaryCases', "2")) : ?> checked <?php endif; ?> /> Yes
	</p>
</li>
<li>
	<p class="collapse-trigger">Sexual Orientation (GAPS)</p>
	<p class="collapsee indent">
		<input type="checkbox" name="sexualOrientation[]" value="1" form="filter" <?php if(checkedPost('sexualOrientation', "1")) : ?> checked <?php endif; ?> /> No <br />
		<input type="checkbox" name="sexualOrientation[]" value="2" form="filter" <?php if(checkedPost('sexualOrientation', "2")) : ?> checked <?php endif; ?> /> Not sure<br />
		<input type="checkbox" name="sexualOrientation[]" value="3" form="filter" <?php if(checkedPost('sexualOrientation', "3")) : ?> checked <?php endif; ?> /> Yes
	</p>
</li>