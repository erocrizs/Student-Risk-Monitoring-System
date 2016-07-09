<!DOCTYPE html>

<li>
	<p class="collapse-trigger">Problem Solving</p>
	<p class="collapsee indent">
		<input type="checkbox" name="problemSolving[]" value="1" form="filter" <?php if(checkedPost('problemSolving', "1")) : ?> checked <?php endif; ?> /> Very high<br />
		<input type="checkbox" name="problemSolving[]" value="2" form="filter" <?php if(checkedPost('problemSolving', "2")) : ?> checked <?php endif; ?> /> High<br />
		<input type="checkbox" name="problemSolving[]" value="3" form="filter" <?php if(checkedPost('problemSolving', "3")) : ?> checked <?php endif; ?> /> Average <br />
		<input type="checkbox" name="problemSolving[]" value="4" form="filter" <?php if(checkedPost('problemSolving', "4")) : ?> checked <?php endif; ?> /> Low<br />
		<input type="checkbox" name="problemSolving[]" value="5" form="filter" <?php if(checkedPost('problemSolving', "5")) : ?> checked <?php endif; ?> /> Very low
	</p> 
</li>
<li>
	<p class="collapse-trigger">Seeking Social Support</p>
	<p class="collapsee indent">
		<input type="checkbox" name="seekingSocialSupport[]" value="1" form="filter" <?php if(checkedPost('seekingSocialSupport', "1")) : ?> checked <?php endif; ?> /> Very high<br />
		<input type="checkbox" name="seekingSocialSupport[]" value="2" form="filter" <?php if(checkedPost('seekingSocialSupport', "2")) : ?> checked <?php endif; ?> /> High<br />
		<input type="checkbox" name="seekingSocialSupport[]" value="3" form="filter" <?php if(checkedPost('seekingSocialSupport', "3")) : ?> checked <?php endif; ?> /> Average <br />
		<input type="checkbox" name="seekingSocialSupport[]" value="4" form="filter" <?php if(checkedPost('seekingSocialSupport', "4")) : ?> checked <?php endif; ?> /> Low<br />
		<input type="checkbox" name="seekingSocialSupport[]" value="5" form="filter" <?php if(checkedPost('seekingSocialSupport', "5")) : ?> checked <?php endif; ?> /> Very low
	</p> 
</li>
<li>
	<p class="collapse-trigger">Avoidance</p>
	<p class="collapsee indent">
		<input type="checkbox" name="avoidance[]" value="1" form="filter" <?php if(checkedPost('avoidance', "1")) : ?> checked <?php endif; ?> /> Very low<br />
		<input type="checkbox" name="avoidance[]" value="2" form="filter" <?php if(checkedPost('avoidance', "2")) : ?> checked <?php endif; ?> /> Low<br />
		<input type="checkbox" name="avoidance[]" value="3" form="filter" <?php if(checkedPost('avoidance', "3")) : ?> checked <?php endif; ?> /> Average <br />
		<input type="checkbox" name="avoidance[]" value="4" form="filter" <?php if(checkedPost('avoidance', "4")) : ?> checked <?php endif; ?> /> High<br />
		<input type="checkbox" name="avoidance[]" value="5" form="filter" <?php if(checkedPost('avoidance', "5")) : ?> checked <?php endif; ?> /> Very high
	</p>
</li>