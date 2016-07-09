<!DOCTYPE html>

<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="id-num">ID Number: </label>
		<input type="text" name="id" id="id-num" class="form-control" required="required" value="<?php echo $student['id'] ?>"/>
	</div>
	<div class="inline center-align three-col">
		<label for="year-lvl">Year Level: </label>
		<input type="text" name="yr" id="yr-lvl" class="form-control" value="<?php echo $student['yr'] ?>"/>
	</div>
	<div class="inline center-align three-col">
		<label for="course">Course: </label>
		<input type="text" name="course" id="course" class="form-control" value="<?php echo $student['course'] ?>"/>
	</div>
</div>

<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="last-name">Surname: </label>
		<input type="text" name="surname" id="last-name" class="form-control" value="<?php echo $student['surname'] ?>"/>
	</div>
	<div class="inline center-align three-col">
		<label for="first-name">First Name: </label>
		<input type="text" name="firstname" id="first-name" class="form-control" value="<?php echo $student['firstname'] ?>"/>
	</div>
	<div class="inline center-align three-col">
		<label for="mi-name">MI: </label>
		<input type="text" name="mi" id="mi-name" class="form-control" value="<?php echo $student['mi'] ?>"/>
	</div>
</div>

<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="gender">Gender: </label>
		<select name="gender" id="gender" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['scholar'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['scholar'], 1) ? "selected='selected'" : '' ?>>Male</option>
			<option value="2" <?php echo compare($student['scholar'], 2) ? "selected='selected'" : '' ?>>Female</option>
		</select>
	</div>
	<div class="inline center-align three-col">
		<label for="birthday">Birthday: </label>
		<?php echo date('m/d/Y', strtotime($student['birthday'])) ?>
		<input type="date" name="birthday" id="birthday" class="form-control" value="<?php echo date('m/d/Y', strtotime($student['birthday'])) ?>"/>
	</div>
	<div class="three-col">
		<!-- filler -->
	</div>
</div>

<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="mobile">Mobile: </label>
		<input type="tel" name="mobile" id="mobile-number" class="form-control" value="<?php echo $student['mobile'] ?>"/>
	</div>
	<div class="inline center-align three-col">
		<label for="email">Email: </label>
		<input type="email" name="email" id="email-address" class="form-control" value="<?php echo $student['email'] ?>"/>
	</div>
	<div class="three-col">
		<!-- filler -->
	</div>
</div>

<div class="inline space-between entry-row">
	<div class="inline center-align three-col">
		<label for="scholar">Scholar: </label>
		<select name="scholar" id="scholar" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['scholar'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['scholar'], 1) ? "selected='selected'" : '' ?>>Yes</option>
			<option value="2" <?php echo compare($student['scholar'], 2) ? "selected='selected'" : '' ?>>No</option>
		</select>
	</div>
	<div class="inline center-align three-col">
		<label for="dormer">Dormer: </label>
		<select name="dormer" id="dormer" form="add-profile-indiv" class="form-control">
			<option value="" <?php echo compare($student['scholar'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['scholar'], 1) ? "selected='selected'" : '' ?>>Yes</option>
			<option value="2" <?php echo compare($student['scholar'], 2) ? "selected='selected'" : '' ?>>No</option>
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
			<option value="" <?php echo compare($student['scholar'], -1) ? "selected='selected'" : '' ?>></option>
			<option value="1" <?php echo compare($student['scholar'], 1) ? "selected='selected'" : '' ?>>Enrolled</option>
			<option value="2" <?php echo compare($student['scholar'], 2) ? "selected='selected'" : '' ?>>Underload</option>
			<option value="3" <?php echo compare($student['scholar'], 3) ? "selected='selected'" : '' ?>>LOA</option>
		</select>
	</div>
	<div class="inline center-align three-col">
		<label for="loawRecord">LOA/W Records: </label>
		<input type="number" name="loa-w-record" id="loa-w-record" class="form-control" step="1" min="0" value="<?php echo $student['loawRecord'] ?>"/>
	</div>
	<div class="three-col">
		<!-- filler -->
	</div>
</div>