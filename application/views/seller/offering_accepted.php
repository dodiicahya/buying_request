<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Image</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $i=1; ?>
		<?php foreach ($alldata as $key => $value): ?>			
			<?php $img = json_decode($value->image_product); ?>			
			<?php foreach ($img as $key => $images): ?>				
			<tr>
				<td><?php echo $i++; ?></td>
				<td><img src="<?php echo $images->path.'/'.$images->filename; ?>" alt=""></td>
				<td><?php echo $value->respond_description; ?></td>
				<td><a href="" title="">Detail</a></td>
			</tr>
			<?php endforeach ?>
		<?php endforeach ?>
	</tbody>
</table>