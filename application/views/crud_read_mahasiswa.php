<html>
<head>
    <title>Demo CRUD</title>
</head>
<body>
    <h2>Demo CRUD dengan Metode query()</h2>
    <p><a href="mahasiswa/create">Tambah</a></p>
    <table border="1">
        <tr>
            <th width="80">Nim</th>
            <th width="120">Nama</th>   
            <th width="100">Alamat</th>
            <th width="100">Opsi</th>
        </tr>
 
        <?php
            foreach($rows as $row) {
        ?>   
        <tr>
            <td><?php echo $row->nim; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->alamat; ?></td>
            <td align="center"><a href="mahasiswa/update/<?php echo $row->nim; ?>">Ubah</a>
            <a href="mahasiswa/delete/<?php echo $row->nim; ?>">Hapus</a></td>
        </tr>
        <?php
            }
        ?>
 
    </table>
 
</body>
</html>