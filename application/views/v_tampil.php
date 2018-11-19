<html>
<head>
	<meta charset="UTF-8">
	<title>Lihat Barang</title>
</head>
<body>
	<a href="<?= base_url("crud/tambah") ?>">Tambah Data</a>

<table border="1">
	<tr>
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Harga Barang</th>
		<th>Aksi</th>
	</tr>

<?php foreach ($data as $barang) {?>
        <tr>
            <td><?php echo $barang['kode_barang']; ?></td>
            <td><?php echo $barang['nama_barang']; ?></td>
            <td><?php echo $barang['harga']; ?></td>
            <td><a href="<?php echo base_url()."index.php/helloworld/edit_data/".$mahasiswa['no_induk']; ?>">Edit</td>
            <td><a href="<?php echo base_url()."index.php/helloworld/delete_data/".$mahasiswa['no_induk']; ?>">Delete</td>
        </tr>
        <?php } ?>

</table>
</body>
</html>