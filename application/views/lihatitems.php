<html>
<head>
	<meta charset="UTF-8">
	<title>Items</title>
</head>

<body>
	<a href="<?= base_url("items/tambah") ?>">Tambah</a>
	<table border="1">
		<thead><tr>
			<th>No</th>
			<th>Title</th>
			<th>Description</th>
			<th>Action</th>
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
			<td>
				<a href="<?= base_url(); ?>items/edit/<?= $hasil->id ?>" >Edit</a>
				<a href="<?= base_url(); ?>items/hapus/<?= $hasil->id ?>">Hapus</a>
			</td>
		</tr>

	<?php } ?>

</table>
<a href="<?= site_url('items/printPDF') ?>" class="btn btn-primary" target="_blank"> Cetak </a>
</body>
</html>