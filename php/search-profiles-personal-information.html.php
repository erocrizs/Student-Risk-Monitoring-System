<!DOCTYPE html>

<li>
	<p class="collapse-trigger">ID Number</p>
	<p class="collapsee indent">
		ID No. starts with:
			<input type="text" name='id' class="form-control" name="id-number" form="filter"/>
	</p>
</li>
<li>
	<p class="collapse-trigger">Risk Count</p>
	<p class="collapsee indent">
		At least:
			<input type="number" name='risk-min' class="form-control" name="risk-min" min="1" step="1" form="filter"/>
		and at most:
			<input type="number" name='risk-max' class="form-control" name="risk-max" min="1" step="1" form="filter"/>
	</p>
</li>
<li>
	<p class="collapse-trigger">Name</p>
	<p class="collapsee indent">
		First name has:
			<input type="text" name='firstname' class="form-control" name="first-name" form="filter"/>
		Last name has:
			<input type="text" name='surname' class="form-control" name="last-name" form="filter"/>
		Middle initial has:
			<input type="text" name='mi' class="form-control" name="middle-initial" form="filter"/>
	</p>
</li>
<li>
	<p class="collapse-trigger">Year Level</p>
	<p class="collapsee indent">
		At least:
			<input type="number" name='yr-min' class="form-control" name="year-level-min" min="1" max="5" step="1" form="filter"/>
		and at most:
			<input type="number" name='yr-max' class="form-control" name="year-level-max" min="1" max="5" step="1" form="filter"/>
	</p>
</li>
<li>
	<p class="collapse-trigger">Course</p>
	<p class="collapsee indent">
		Course has:
			<input type="text" name='course' class="form-control" name="course" form="filter"/>
	</p>
</li>
<li>
	<p class="collapse-trigger">Gender</p>
	<p class="collapsee indent">
		<input type="checkbox" name="gender[]" value="1" form="filter" checked /> Male <br />
		<input type="checkbox" name="gender[]" value="2" form="filter" checked /> Female
	</p>
</li>
<li>
	<p class="collapse-trigger">Birthday</p>
	<p class="collapsee indent">
		Born between:
			<input type="date" name='date-min' class="form-control" name="birthday-min" form="filter" />
		and:
			<input type="date" name='date-max' class="form-control" name="birthday-max" form="filter" />
	</p>
</li>
<li>
	<p class="collapse-trigger">Age</p>
	<p class="collapsee indent">
		At least:
			<input type="number" name='age-min' class="form-control" name="age-min" min="1" step="1" form="filter"/>
		and at most:
			<input type="number" name='age-max' class="form-control" name="age-max" min="1" step="1" form="filter"/>
	</p>
</li>
<li>
	<p class="collapse-trigger">Scholar</p>
	<p class="collapsee indent">
		<input type="checkbox" name="scholar[]" value="1" form="filter" checked /> Scholar <br />
		<input type="checkbox" name="scholar[]" value="2" form="filter" checked /> Non-scholar
	</p>
</li>
<li>
	<p class="collapse-trigger">Dormer</p>
	<p class="collapsee indent">
		<input type="checkbox" name="dormer[]" value="1" form="filter" checked /> Dormer <br />
		<input type="checkbox" name="dormer[]" value="2" form="filter" checked /> Non-dormer
	</p>
</li>
<li>
	<p class="collapse-trigger">Current Status</p>
	<p class="collapsee indent">
		<input type="checkbox" name="current-status[]" value="1" form="filter" checked /> Enrolled <br />
		<input type="checkbox" name="current-status[]" value="2" form="filter" checked /> Underload <br />
		<input type="checkbox" name="current-status[]" value="3" form="filter" checked /> LOA
	</p>
</li>
<li>
	<p class="collapse-trigger">LOA and W count</p>
	<p class="collapsee indent">
		At least:
			<input type="number" name='loaw-record-min' class="form-control" name="loa-w-min" min="1" step="1" form="filter"/>
		and at most:
			<input type="number" name='loaw-record-max' class="form-control" name="loa-w-max" min="1" step="1" form="filter"/>
	</p>
</li>