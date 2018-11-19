<html>
<head>
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
	<title>Tambah Surat</title>
</head>
<body>
	<h1>Tambah Surat Baru</h1>
	<div class="container">
		<form action="<?= base_url("surat/tambahaksi") ?>" method="post">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input  class="form-control"type="text" name="nama">
			</div>
			<div class="form-group">
				<label for="jenis_kelamin">jenis kelamin</label>
				<input class="form-control"type="text" name="jenis_kelamin">
			</div>
			<div class="form-group">
				<label for="tempat_lahir">tempat lahir</label>
				<input class="form-control"type="text" name="tempat_lahir">
			</div>
			<div class="form-group">
				<label for="tanggal_lahir">tanggal lahir</label>
				<input placeholder="masukkan tanggal Akhir" type="text" class="form-control datepicker" name="tanggal_lahir">
			</div>
			<div class="form-group">
				<label for="keterangan">keterangan</label>
				<input class="form-control"type="text" name="keterangan">
			</div>
			<div class="form-group">
				<label for="tandatangan">tanda tangan</label>
				<input class="form-control"type="text" name="tandatangan">
			</div>
			<div class="form-group">
				<button name="submit" type="submit">Simpan Surat</button>
			</div>

		</form>
	</div>
	<!--  jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->


	<!-- Bootstrap Date-Picker Plugin -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

	<script type="text/javascript">
		$(function(){
			$(".datepicker").datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
				todayHighlight: true,
			});
		});
	</script>
</body>
</html>