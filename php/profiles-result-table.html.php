<!DOCTYPE html>

<form action="student-profile.php" method="get" target="_blank" id="link-table">
	<table class="table table-hover">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Yr</th>
			<th>Course</th>
			<th>Sex</th>
			<th>Age</th>
			<?php if(getSession('account')['risk'] >= 1) : ?>
				<th>Risks</th>
			<?php endif ?>
		</thead>
		<tbody>
			<?php if(isset($searchResult)) : ?>
				<?php while($row = $searchResult->fetch()) : ?>
					<tr>
						<td><input type="submit" name='id' class="btn" value="<?php echo $row['id']; ?>"></td>
						<td><?php echo $row['surname'];
								if($row['surname'] != '') : echo ', '; endif;
								echo $row['firstname'];
								if($row['firstname'] != '') : echo ' '; endif;
								echo $row['mi'];
								if($row['mi'] != '') : echo '.'; endif; ?></td>
						<td><?php echo $row['yr']; ?></td>
						<td><?php echo $row['course']; ?></td>
						<td><?php if($row['gender'] == 1) : echo 'Male';
									elseif($row['gender'] == 2) : echo 'Female'; endif; ?></td>
						<td><?php echo $row['age']; ?></td>
						<?php if(getSession('account')['risk'] >= 1) : ?>
							<td><?php echo $row['risk'] ?></td>
						<?php endif; ?>
					</tr>
				<?php endwhile; ?>
			<?php endif; ?>
		</tbody>
	</table>
</form>