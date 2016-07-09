<!DOCTYPE html>

<li>
	<p class="collapse-trigger">1st Year</p>
	<ul class="collapsee">
		<li>
			<p class="collapse-trigger">Sem 1</p>
			<p class="collapsee indent">
				At least:
					<input type="number" name='y1s1Min' class="form-control" min="0" max="4" step="0.01" form="filter" value="php echo $student['loawRecord'] ?>" />
				and at most:
					<input type="number" name='y1s1Max' class="form-control" min="0" max="4" step="0.01" form="filter" value="php echo $student['loawRecord'] ?>" />
			</p>
		</li>
		<li>
			<p class="collapse-trigger">Sem 2</p>
			<p class="collapsee indent">
				At least:
					<input type="number" name='y1s2Min' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y1s2Min') ?>" />
				and at most:
					<input type="number" name='y1s2Max' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y1s2Max') ?>" />
			</p>
		</li>
	</ul>
</li>
<li>
	<p class="collapse-trigger">2nd Year</p>
	<ul class="collapsee">
		<li>
			<p class="collapse-trigger">Sem Int</p>
			<p class="collapsee indent">
				At least:
					<input type="number" name='y2s0Min' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y2s0Min') ?>" />
				and at most:
					<input type="number" name='y2s0Max' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y2s0Max') ?>" />
			</p>
		</li>
		<li>
			<p class="collapse-trigger">Sem 1</p>
			<p class="collapsee indent">
				At least:
					<input type="number" name='y2s1Min' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y2s1Min') ?>" />
				and at most:
					<input type="number" name='y2s1Max' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y2s1Max') ?>" />
			</p>
		</li>
		<li>
			<p class="collapse-trigger">Sem 2</p>
			<p class="collapsee indent">
				At least:
					<input type="number" name='y2s2Min' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y2s2Min') ?>" />
				and at most:
					<input type="number" name='y2s2Max' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y2s2Max') ?>" />
			</p>
		</li>
	</ul>
</li>
<li>
	<p class="collapse-trigger">3rd Year</p>
	<ul class="collapsee">
		<li>
			<p class="collapse-trigger">Sem Int</p>
			<p class="collapsee indent">
				At least:
					<input type="number" name='y3s0Min' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y3s0Min') ?>" />
				and at most:
					<input type="number" name='y3s0Max' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y3s0Max') ?>" />
			</p>
		</li>
		<li>
			<p class="collapse-trigger">Sem 1</p>
			<p class="collapsee indent">
				At least:
					<input type="number" name='y3s1Min' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y3s1Min') ?>" />
				and at most:
					<input type="number" name='y3s1Max' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y3s1Max') ?>" />
			</p>
		</li>
		<li>
			<p class="collapse-trigger">Sem 2</p>
			<p class="collapsee indent">
				At least:
					<input type="number" name='y3s2Min' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y3s2Min') ?>" />
				and at most:
					<input type="number" name='y3s2Max' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y3s2Max') ?>" />
			</p>
		</li>
	</ul>
</li>
<li>
	<p class="collapse-trigger">4th Year</p>
	<ul class="collapsee">
		<li>
			<p class="collapse-trigger">Sem Int</p>
			<p class="collapsee indent">
				At least:
					<input type="number" name='y4s0Min' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y4s0Min') ?>" />
				and at most:
					<input type="number" name='y4s0Max' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y4s0Max') ?>" />
			</p>
		</li>
		<li>
			<p class="collapse-trigger">Sem 1</p>
			<p class="collapsee indent">
				At least:
					<input type="number" name='y4s1Min' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y4s1Min') ?>" />
				and at most:
					<input type="number" name='y4s1Max' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y4s1Max') ?>" />
			</p>
		</li>
		<li>
			<p class="collapse-trigger">Sem 2</p>
			<p class="collapsee indent">
				At least:
					<input type="number" name='y4s2Min' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y4s2Min') ?>" />
				and at most:
					<input type="number" name='y4s2Max' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y4s2Max') ?>" />
			</p>
		</li>
	</ul>
</li>
<li>
	<p class="collapse-trigger">5th Year</p>
	<ul class="collapsee">
		<li>
			<p class="collapse-trigger">Sem Int</p>
			<p class="collapsee indent">
				At least:
					<input type="number" name='y5s0Min' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y5s0Min') ?>" />
				and at most:
					<input type="number" name='y5s0Max' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y5s0Max') ?>" />
			</p>
		</li>
		<li>
			<p class="collapse-trigger">Sem 1</p>
			<p class="collapsee indent">
				At least:
					<input type="number" name='y5s1Min' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y5s1Min') ?>" />
				and at most:
					<input type="number" name='y5s1Max' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y5s1Max') ?>" />
			</p>
		</li>
		<li>
			<p class="collapse-trigger">Sem 2</p>
			<p class="collapsee indent">
				At least:
					<input type="number" name='y5s2Min' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y5s2Min') ?>" />
				and at most:
					<input type="number" name='y5s2Max' class="form-control" min="0" max="4" step="0.01" form="filter" value="<?php getPost('y5s2Max') ?>" />
			</p>
		</li>
	</ul>
</li>