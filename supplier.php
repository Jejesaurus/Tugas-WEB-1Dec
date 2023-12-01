<?php
require 'functions.php';
$barang = query("select * from supplier");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Daftar Barang</h1>
    <table border="1" cellpadding="5">
        <tr>
            <th>No.</th>
            <th>ID. Supplier</th>
            <th>Nama Supplier</th>
            <th>No Telp</th>
            <th>Alamat</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach($barang as $brg){?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $brg['id_supplier'];?></td>
            <td><?= $brg['nama_supplier'];?></td>
            <td><?= $brg['no_telp'];?></td>
            <td><?= $brg['alamat'];?></td>
        </tr>
        <?php $i++;?>
        <?php }?>
    </table>

    <br><button><a href="tambah_supplier.php">Tambah Supplier</a></button>
</body>
</html>
