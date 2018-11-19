<html>
<head>
	<meta charset="UTF-8">
	<title>Tambah Item</title>
</head>
<body>
	<?php foreach($items as $key){ ?>
	<form action="<?= base_url("items/editaksi") ?>" method="post">
		<tr>
			<label for="">Title</label>
			<input type="hidden" name="id" value="<?= $key->id ?>">
			<input type="text" name="title" value="<?= $key->title ?>">
		</tr>
		<tr>
			<label for="">Description</label>
			<input type="text" name="description" value="<?= $key->description ?>">
		</tr>
		<tr>
			<button name="submit">Simpan</button>
		</tr>

	</form>
<?php }?>
</body>
</html>