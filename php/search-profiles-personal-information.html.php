<!DOCTYPE html>

<li>
	<p class="collapse-trigger">ID Number</p>
	<p class="collapsee indent">
		ID No. starts with: 
			<input type="text" name='id' class="form-control" form="filter" value="<?php echo getPost('id'); ?>" />
	</p>
</li>
<li>
	<p class="collapse-trigger">Risk Count</p>
	<p class="collapsee indent">
		At least:
			<input type="number" name='riskMin' class="form-control" min="1" step="1" form="filter" value="<?php echo getPost('riskMin'); ?>" />
		and at most:
			<input type="number" name='riskMax' class="form-control" min="1" step="1" form="filter" value="<?php echo getPost('riskMax'); ?>" />
	</p>
</li>
<li>
	<p class="collapse-trigger">Name</p>
	<p class="collapsee indent">
		First name has:
			<input type="text" name='firstname' class="form-control" form="filter" value="<?php echo getPost('firstname'); ?>" />
		Last name has:
			<input type="text" name='surname' class="form-control" form="filter" value="<?php echo getPost('surname'); ?>" />
		Middle initial has:
			<input type="text" name='mi' class="form-control" form="filter" value="<?php echo getPost('mi'); ?>" />
	</p>
</li>
<li>
	<p class="collapse-trigger">Year Level</p>
	<p class="collapsee indent">
		At least:
			<input type="number" name='yrMin' class="form-control" min="1" max="5" step="1" form="filter" value="<?php echo getPost('yrMin'); ?>" />
		and at most:
			<input type="number" name='yrMax' class="form-control" min="1" max="5" step="1" form="filter" value="<?php echo getPost('yrMax'); ?>" />
	</p>
</li>
<li>
	<p class="collapse-trigger">Course</p>
	<p class="collapsee indent">
		Course has:
			<input type="text" name='course' class="form-control" form="filter" value="<?php echo getPost('course'); ?>" />
	</p>
</li>
<li>
	<p class="collapse-trigger">Gender</p>
	<p class="collapsee indent">
		<input type="checkbox" name="gender[]" value="1" form="filter" <?php if(checkedPost('gender', "1")) : ?> checked <?php endif; ?> /> Male <br />
		<input type="checkbox" name="gender[]" value="2" form="filter" <?php if(checkedPost('gender', "2")) : ?> checked <?php endif; ?> /> Female
	</p>
</li>
<li>
	<p class="collapse-trigger">Birthday</p>
	<p class="collapsee indent">
		Born between:
			<input type="date" name='dateMin' class="form-control" form="filter" value="<?php echo getPost('dateMin'); ?>" />
		and:
			<input type="date" name='dateMax' class="form-control" form="filter" value="<?php echo getPost('dateMax'); ?>" />
	</p>
</li>
<li>
	<p class="collapse-trigger">Age</p>
	<p class="collapsee indent">
		At least:
			<input type="number" name='ageMin' class="form-control" min="1" step="1" form="filter" value="<?php echo getPost('ageMin'); ?>" />
		and at most:
			<input type="number" name='ageMax' class="form-control" min="1" step="1" form="filter" value="<?php echo getPost('ageMax'); ?>" />
	</p>
</li>
<li>
	<p class="collapse-trigger">Scholar</p>
	<p class="collapsee indent">
		<input type="checkbox" name="scholar[]" value="1" form="filter" <?php if(checkedPost('scholar', "1")) : ?> checked <?php endif; ?> /> Scholar <br />
		<input type="checkbox" name="scholar[]" value="2" form="filter" <?php if(checkedPost('scholar', "2")) : ?> checked <?php endif; ?> /> Non-scholar
	</p>
</li>
<li>
	<p class="collapse-trigger">Dormer</p>
	<p class="collapsee indent">
		<input type="checkbox" name="dormer[]" value="1" form="filter" <?php if(checkedPost('dormer', "1")) : ?> checked <?php endif; ?> /> Dormer <br />
		<input type="checkbox" name="dormer[]" value="2" form="filter" <?php if(checkedPost('dormer', "2")) : ?> checked <?php endif; ?> /> Non-dormer
	</p>
</li>
<li>
	<p class="collapse-trigger">Current Status</p>
	<p class="collapsee indent">
		<input type="checkbox" name="currentStatus[]" value="1" form="filter" <?php if(checkedPost('currentStatus', "1")) : ?> checked <?php endif; ?> /> Enrolled <br />
		<input type="checkbox" name="currentStatus[]" value="2" form="filter" <?php if(checkedPost('currentStatus', "2")) : ?> checked <?php endif; ?> /> Underload <br />
		<input type="checkbox" name="currentStatus[]" value="3" form="filter" <?php if(checkedPost('currentStatus', "3")) : ?> checked <?php endif; ?> /> LOA
	</p>
</li>
<li>
	<p class="collapse-trigger">LOA and W count</p>
	<p class="collapsee indent">
		At least:
			<input type="number" name='loawRecordMin' class="form-control" min="1" step="1" form="filter" value="<?php echo getPost('loawRecordMin'); ?>" />
		and at most:
			<input type="number" name='loawRecordMax' class="form-control" min="1" step="1" form="filter" value="<?php echo getPost('loawRecordMax'); ?>" />
	</p>
</li>