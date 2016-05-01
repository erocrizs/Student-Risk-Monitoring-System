<!DOCTYPE html>

<form action="?" method="post" target="_blank" id="link-table">
	<table class="table table-hover">
		<thead>
			<th>Student</th>
			<th>Date</th>
			<th>Reported From</th>
			<th>Receiving Office</th>
		</thead>
		<tbody>
			<?php if(isset($searchResult)) : ?>
				<?php while($row = $searchResult->fetch()) : ?>
					<tr>
						<td><input type="submit" class="btn" value=<?php echo $row['id']; ?> form="link-table"/></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['from']; ?></td>
						<td><?php echo $row['office']; ?></td>
					</tr>
				<?php endwhile; ?>
			<?php endif; ?>
		</tbody>
	</table>
</form>