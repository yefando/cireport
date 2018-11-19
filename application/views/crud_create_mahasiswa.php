<html>
<head>
    <title>Demo CRUD Mahasiswa</title>
</head>
<body>
    <h2>Demo CRUD dengan Metode query()</h2>
    <p><strong>Tambah Data</strong></p>
 
    <form action="create" method="post">
        <?php echo $model->labels['nim']; ?><br/>
        <input type="text" name="nim" size="10" maxlength="10"/><br/><br/>
        <?php echo $model->labels['nama']; ?><br/>
        <input type="text" name="nama" size="30" maxlength="25"/><br/><br/>
        <?php echo $model->labels['alamat']; ?><br/>
        <textarea name="alamat"></textarea><br/><br/>
        <input type="submit" name="btnSubmit" value="Simpan"/>
        <input type="button" value="Batal" onclick="javascript:history.go(-1);"/>
    </form>
</body>
</html>