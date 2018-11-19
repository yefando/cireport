<body>

	<table border="1">
		<thead><tr>
			<th>No</th>
			<th>Title</th>
			<th>Description</th>
		</tr>
	</thead>

	<?php
	$no = 1; 
	foreach($data_items as $hasil){ 
		?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $hasil->title ?></td>
			<td><?php echo $hasil->description ?></td>
		</tr>

	<?php } ?>

</table>
</body>
<p class="mb-0 text-right">CREATED BY</p>
<footer class="blockquote-footer text-right">IsmetMA</footer>