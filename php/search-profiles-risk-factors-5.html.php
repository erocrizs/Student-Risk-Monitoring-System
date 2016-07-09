<!DOCTYPE html>

<li>
	<p class="collapse-trigger">Alcohol use</p>
	<p class="collapsee indent">
		<input type="checkbox" name="alcoholUse[]" value="1" form="filter" <?php if(checkedPost('alcoholUse', "1")) : ?> checked <?php endif; ?> /> No <br />
		<input type="checkbox" name="alcoholUse[]" value="2" form="filter" <?php if(checkedPost('alcoholUse', "2")) : ?> checked <?php endif; ?> /> Sometimes <br />
		<input type="checkbox" name="alcoholUse[]" value="3" form="filter" <?php if(checkedPost('alcoholUse', "3")) : ?> checked <?php endif; ?> /> Yes
	</p>
</li>
<li>
	<p class="collapse-trigger">Drug use</p>
	<p class="collapsee indent">
		<input type="checkbox" name="drugUse[]" value="1" form="filter" <?php if(checkedPost('drugUse', "1")) : ?> checked <?php endif; ?> /> No <br />
		<input type="checkbox" name="drugUse[]" value="2" form="filter" <?php if(checkedPost('drugUse', "2")) : ?> checked <?php endif; ?> /> Not Sure <br />
		<input type="checkbox" name="drugUse[]" value="3" form="filter" <?php if(checkedPost('drugUse', "3")) : ?> checked <?php endif; ?> /> Yes
	</p>
</li>