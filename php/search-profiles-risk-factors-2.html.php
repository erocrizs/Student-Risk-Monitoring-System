<!DOCTYPE html>

<li>
	<p class="collapse-trigger">Suicidal Behavior</p>
	<ul class="collapsee">
		<li>
			<p class="collapse-trigger">Suicide Behavior Questionaire</p>
			<p class="collapsee indent">
				<input type="checkbox" name="suicideBehavior[]" value="1" form="filter" <?php if(checkedPost('suicideBehavior', '1')) : ?> checked <?php endif; ?> /> Minimal/Mild <br />
				<input type="checkbox" name="suicideBehavior[]" value="2" form="filter" <?php if(checkedPost('suicideBehavior', '2')) : ?> checked <?php endif; ?> /> Positively screed
			</p>
		</li>
		<li>
			<p class="collapse-trigger">Suicide Thoughts</p>
			<p class="collapsee indent">
				<input type="checkbox" name="suicidalThoughts[]" value="1" form="filter" <?php if(checkedPost('suicidalThoughts', '1')) : ?> checked <?php endif; ?> /> No <br />
				<input type="checkbox" name="suicidalThoughts[]" value="2" form="filter" <?php if(checkedPost('suicidalThoughts', '2')) : ?> checked <?php endif; ?> /> Sometimes <br />
				<input type="checkbox" name="suicidalThoughts[]" value="3" form="filter" <?php if(checkedPost('suicidalThoughts', '3')) : ?> checked <?php endif; ?> /> Yes
			</p>
		</li>
	</ul>
</li>