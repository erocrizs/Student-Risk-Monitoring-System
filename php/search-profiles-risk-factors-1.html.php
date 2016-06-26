<!DOCTYPE html>

<li>
	<p class="collapse-trigger">Level of Depression</p>
	<p class="collapsee indent">
		<input type="checkbox" name="lvlDepression[]" value="1" form="filter" <?php if(checkedPost('lvlDepression', '1')) : ?> checked <?php endif; ?> /> None <br />
		<input type="checkbox" name="lvlDepression[]" value="2" form="filter" <?php if(checkedPost('lvlDepression', '2')) : ?> checked <?php endif; ?> /> Mild <br />
		<input type="checkbox" name="lvlDepression[]" value="3" form="filter" <?php if(checkedPost('lvlDepression', '3')) : ?> checked <?php endif; ?> /> Moderate <br />
		<input type="checkbox" name="lvlDepression[]" value="4" form="filter" <?php if(checkedPost('lvlDepression', '4')) : ?> checked <?php endif; ?> /> Moderately sever <br />
		<input type="checkbox" name="lvlDepression[]" value="5" form="filter" <?php if(checkedPost('lvlDepression', '5')) : ?> checked <?php endif; ?> /> Sever
	</p>
</li>
<li>
	<p class="collapse-trigger">Level of Anxiety</p>
	<p class="collapsee indent">
		<input type="checkbox" name="lvlAnxiety[]" value="1" form="filter" <?php if(checkedPost('lvlAnxiety', '1')) : ?> checked <?php endif; ?> /> Minimal <br />
		<input type="checkbox" name="lvlAnxiety[]" value="2" form="filter" <?php if(checkedPost('lvlAnxiety', '2')) : ?> checked <?php endif; ?> /> Mild <br />
		<input type="checkbox" name="lvlAnxiety[]" value="3" form="filter" <?php if(checkedPost('lvlAnxiety', '3')) : ?> checked <?php endif; ?> /> Moderate <br />
		<input type="checkbox" name="lvlAnxiety[]" value="4" form="filter" <?php if(checkedPost('lvlAnxiety', '4')) : ?> checked <?php endif; ?> /> Sever
	</p>
</li>