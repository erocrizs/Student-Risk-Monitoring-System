<!DOCTYPE html>

<li>
	<p class="collapse-trigger">Presence of Mental Disorder/Diagnosis</p>
	<p class="collapsee indent">
		<input type="checkbox" name="mentalDisorder[]" value="1" form="filter" <?php if(checkedPost('mentalDisorder', "1")) : ?> checked <?php endif; ?> /> No <br />
		<input type="checkbox" name="mentalDisorder[]" value="2" form="filter" <?php if(checkedPost('mentalDisorder', "2")) : ?> checked <?php endif; ?> /> Yes
	</p>
</li>