<!DOCTYPE html>

<li>
	<p class="collapse-trigger">Spiritual subscale</p>
	<p class="collapsee indent">
		<input type="checkbox" name="spiritualSubscale[]" value="1" form="filter" <?php if(checkedPost('spiritualSubscale', "1")) : ?> checked <?php endif; ?> /> High<br />
		<input type="checkbox" name="spiritualSubscale[]" value="2" form="filter" <?php if(checkedPost('spiritualSubscale', "2")) : ?> checked <?php endif; ?> /> Moderate<br />
		<input type="checkbox" name="spiritualSubscale[]" value="3" form="filter" <?php if(checkedPost('spiritualSubscale', "3")) : ?> checked <?php endif; ?> /> Low
	</p>
</li>
<li>
	<p class="collapse-trigger">God subscale</p>
	<p class="collapsee indent">
		<input type="checkbox" name="godSubscale[]" value="1" form="filter" <?php if(checkedPost('godSubscale', "1")) : ?> checked <?php endif; ?> /> High<br />
		<input type="checkbox" name="godSubscale[]" value="2" form="filter" <?php if(checkedPost('godSubscale', "2")) : ?> checked <?php endif; ?> /> Moderate<br />
		<input type="checkbox" name="godSubscale[]" value="3" form="filter" <?php if(checkedPost('godSubscale', "3")) : ?> checked <?php endif; ?> /> Low
	</p>
</li>