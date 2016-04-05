<!DOCTYPE html>

<table class="table table-hover">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Yr</th>
		<th>Course</th>
		<th>Sex</th>
		<th>Age</th>
		<th>Risks</th>
	</thead>
	<tbody>
		<?php if(isset($filterResult)) : ?>
			<?php while($row = $filterResult->fetch()) : ?>
				<tr>
					<td><input type="submit" class="btn" value=<?php echo $row['id']; ?> form="link-table"/></td>
					<td><?php echo $row['surname'];
							if($row['surname'] != '') : echo ', '; endif;
							echo $row['firstname'];
							if($row['firstname'] != '') : echo ' '; endif;
							echo $row['mi'];
							if($row['mi'] != '') : echo '.'; endif; ?></td>
					<td><?php echo $row['yr']; ?></td>
					<td><?php echo $row['course']; ?></td>
					<td><?php if($row['gender'] == 1)  : echo 'Male';
								elseif($row['gender'] == 2) : echo 'Female'; endif; ?></td>
					<td><?php echo $row['age']; ?></td>
					<td><?php echo $row['risk']; ?></td>
				</tr>
			<?php endwhile; ?>
		<?php endif; ?>
	</tbody>
</table>