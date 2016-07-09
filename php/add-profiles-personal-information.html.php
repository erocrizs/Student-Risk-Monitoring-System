<!DOCTYPE html>

<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="id-num">ID Number: </label>
		<input type="text" name="id" id="id-num" class="form-control" required="required"/>
	</div>
	<div class="inline center-align three-col">
		<label for="year-lvl">Year Level: </label>
		<input type="text" name="yr" id="yr-lvl" class="form-control" />
	</div>
	<div class="inline center-align three-col">
		<label for="course">Course: </label>
		<input type="text" name="course" id="course" class="form-control" />
	</div>
</div>

<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="last-name">Surname: </label>
		<input type="text" name="surname" id="last-name" class="form-control" />
	</div>
	<div class="inline center-align three-col">
		<label for="first-name">First Name: </label>
		<input type="text" name="firstname" id="first-name" class="form-control" />
	</div>
	<div class="inline center-align three-col">
		<label for="mi-name">MI: </label>
		<input type="text" name="mi" id="mi-name" class="form-control" />
	</div>
</div>

<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="gender">Gender: </label>
		<select name="gender" id="gender" form="add-profile-indiv" class="form-control">
			<option value="" selected="selected"></option>
			<option value="1">Male</option>
			<option value="2">Female</option>
		</select>
	</div>
	<div class="inline center-align three-col">
		<label for="birthday">Birthday: </label>
		<input type="date" name="birthday" id="birthday" class="form-control" />
	</div>
	<div class="three-col">
		<!-- filler -->
	</div>
</div>

<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="mobile-number">Mobile: </label>
		<input type="tel" name="mobile" id="mobile-number" class="form-control" />
	</div>
	<div class="inline center-align three-col">
		<label for="email-address">Email: </label>
		<input type="email" name="email" id="email-address" class="form-control" />
	</div>
	<div class="three-col">
		<!-- filler -->
	</div>
</div>

<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="scholar">Scholar: </label>
		<select name="scholar" id="scholar" form="add-profile-indiv" class="form-control">
			<option value="" selected="selected"></option>
			<option value="1">Yes</option>
			<option value="2">No</option>
		</select>
	</div>
	<div class="inline center-align three-col">
		<label for="dormer">Dormer: </label>
		<select name="dormer" id="dormer" form="add-profile-indiv" class="form-control">
			<option value="" selected="selected"></option>
			<option value="1">Yes</option>
			<option value="2">No</option>
		</select>
	</div>
	<div class="three-col">
		<!-- filler -->
	</div>
</div>

<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="current-status">Current Status: </label>
		<select name="currentStatus" id="scholar" form="add-profile-indiv" class="form-control">
			<option value="" selected="selected"></option>
			<option value="1">Enrolled</option>
			<option value="2">Underload</option>
			<option value="3">LOA</option>
		</select>
	</div>
	<div class="inline center-align three-col">
		<label for="loa-w-record">LOA/W Records: </label>
		<input type="number" name="loawRecord" id="loa-w-record" class="form-control" step="1" min="0"/>
	</div>
	<div class="three-col">
		<!-- filler -->
	</div>
</div>