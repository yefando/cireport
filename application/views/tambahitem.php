<html>
<head>
	<meta charset="UTF-8">
	<title>Tambah Item</title>
</head>
<body>
	<form action="<?= base_url("items/tambahaksi") ?>" method="post">
		<tr>
			<label for="">Title</label>
			<input type="text" name="title">
		</tr>
		<tr>
			<label for="">Description</label>
			<input type="text" name="description">
		</tr>
		<tr>
			<button name="submit">Simpan</button>
		</tr>

	</form>
</body>
</html>