<!DOCTYPE html>

<li>
	<p class="collapse-trigger">Family Living Situation</p>
	<p class="collapsee indent">
		<input type="checkbox" name="familyLivingSituation[]" value="1" form="filter" <?php if(checkedPost('familyLivingSituation', "1")) : ?> checked <?php endif; ?> /> Parents living together <br />
		<input type="checkbox" name="familyLivingSituation[]" value="2" form="filter" <?php if(checkedPost('familyLivingSituation', "2")) : ?> checked <?php endif; ?> /> Parent/s working away from home <br />
		<input type="checkbox" name="familyLivingSituation[]" value="3" form="filter" <?php if(checkedPost('familyLivingSituation', "3")) : ?> checked <?php endif; ?> /> Living with extended family <br />
		<input type="checkbox" name="familyLivingSituation[]" value="4" form="filter" <?php if(checkedPost('familyLivingSituation', "4")) : ?> checked <?php endif; ?> /> One deceased parent <br />
		<input type="checkbox" name="familyLivingSituation[]" value="5" form="filter" <?php if(checkedPost('familyLivingSituation', "5")) : ?> checked <?php endif; ?> /> Single parent <br />
		<input type="checkbox" name="familyLivingSituation[]" value="6" form="filter" <?php if(checkedPost('familyLivingSituation', "6")) : ?> checked <?php endif; ?> /> Separated/divorced/annulled <br />
		<input type="checkbox" name="familyLivingSituation[]" value="0" form="filter" <?php if(checkedPost('familyLivingSituation', "7")) : ?> checked <?php endif; ?> /> Others
	</p>
</li>
<li>
	<p class="collapse-trigger">Atmosphere at Home</p>
	<p class="collapsee indent">
		<input type="checkbox" name="atmosphereAtHome[]" value="1" form="filter" <?php if(checkedPost('atmosphereAtHome', "1")) : ?> checked <?php endif; ?> /> Supportive and encouraging<br />
		<input type="checkbox" name="atmosphereAtHome[]" value="2" form="filter" <?php if(checkedPost('atmosphereAtHome', "2")) : ?> checked <?php endif; ?> /> Generally good<br />
		<input type="checkbox" name="atmosphereAtHome[]" value="3" form="filter" <?php if(checkedPost('atmosphereAtHome', "3")) : ?> checked <?php endif; ?> /> Slightly stressful <br />
		<input type="checkbox" name="atmosphereAtHome[]" value="4" form="filter" <?php if(checkedPost('atmosphereAtHome', "4")) : ?> checked <?php endif; ?> /> Conflicted
	</p>
</li>
<li>
	<p class="collapse-trigger">Parents' Marital Status</p>
	<p class="collapsee indent">
		<input type="checkbox" name="parentsMaritalStatus[]" value="1" form="filter" <?php if(checkedPost('parentsMaritalStatus', "1")) : ?> checked <?php endif; ?> /> Very fulfilling and supportive<br />
		<input type="checkbox" name="parentsMaritalStatus[]" value="2" form="filter" <?php if(checkedPost('parentsMaritalStatus', "2")) : ?> checked <?php endif; ?> /> Fulfilling and supportive<br />
		<input type="checkbox" name="parentsMaritalStatus[]" value="3" form="filter" <?php if(checkedPost('parentsMaritalStatus', "3")) : ?> checked <?php endif; ?> /> Somewhat fulfilling and supportive <br />
		<input type="checkbox" name="parentsMaritalStatus[]" value="4" form="filter" <?php if(checkedPost('parentsMaritalStatus', "4")) : ?> checked <?php endif; ?> /> Neutral<br />
		<input type="checkbox" name="parentsMaritalStatus[]" value="5" form="filter" <?php if(checkedPost('parentsMaritalStatus', "5")) : ?> checked <?php endif; ?> /> Not fulfilling or supportive<br />
		<input type="checkbox" name="parentsMaritalStatus[]" value="0" form="filter" <?php if(checkedPost('parentsMaritalStatus', "6")) : ?> checked <?php endif; ?> /> Not applicable
	</p>
</li>
<li>
	<p class="collapse-trigger">Relationship with Father</p>
	<p class="collapsee indent">
		<input type="checkbox" name="relFather[]" value="1" form="filter" <?php if(checkedPost('relFather', "1")) : ?> checked <?php endif; ?> /> Very fulfilling and supportive<br />
		<input type="checkbox" name="relFather[]" value="2" form="filter" <?php if(checkedPost('relFather', "2")) : ?> checked <?php endif; ?> /> Fulfilling and supportive<br />
		<input type="checkbox" name="relFather[]" value="3" form="filter" <?php if(checkedPost('relFather', "3")) : ?> checked <?php endif; ?> /> Somewhat fulfilling and supportive <br />
		<input type="checkbox" name="relFather[]" value="4" form="filter" <?php if(checkedPost('relFather', "4")) : ?> checked <?php endif; ?> /> Neutral<br />
		<input type="checkbox" name="relFather[]" value="5" form="filter" <?php if(checkedPost('relFather', "5")) : ?> checked <?php endif; ?> /> Not fulfilling or supportive<br />
		<input type="checkbox" name="relFather[]" value="0" form="filter" <?php if(checkedPost('relFather', "6")) : ?> checked <?php endif; ?> /> Not applicable
	</p>
</li>
<li>
	<p class="collapse-trigger">Relationship with Mother</p>
	<p class="collapsee indent">
		<input type="checkbox" name="relMother[]" value="1" form="filter" <?php if(checkedPost('relMother', "1")) : ?> checked <?php endif; ?> /> Very fulfilling and supportive<br />
		<input type="checkbox" name="relMother[]" value="2" form="filter" <?php if(checkedPost('relMother', "2")) : ?> checked <?php endif; ?> /> Fulfilling and supportive<br />
		<input type="checkbox" name="relMother[]" value="3" form="filter" <?php if(checkedPost('relMother', "3")) : ?> checked <?php endif; ?> /> Somewhat fulfilling and supportive <br />
		<input type="checkbox" name="relMother[]" value="4" form="filter" <?php if(checkedPost('relMother', "4")) : ?> checked <?php endif; ?> /> Neutral<br />
		<input type="checkbox" name="relMother[]" value="5" form="filter" <?php if(checkedPost('relMother', "5")) : ?> checked <?php endif; ?> /> Not fulfilling or supportive<br />
		<input type="checkbox" name="relMother[]" value="0" form="filter" <?php if(checkedPost('relMother', "6")) : ?> checked <?php endif; ?> /> Not applicable
	</p>
</li>