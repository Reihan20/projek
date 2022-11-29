<?php 
require 'functions.php';

$hasil= query ("SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>daftar murid</h1>
    <a href="tambah.php">tambah data siswa</a>
    <table border="1" cellspacing="0" cellpading="4">
        <tr>
            <td>Id       </td>            
            <td>Nisn     </td>
            <td>Nama     </td>
            <td>Jurusan  </td>
            <td>Gambar   </td>
            <td>Aksi     </td>
        </tr>
        <?php $i=1;?>
        <?php foreach($hasil as $cetak){?>
        <tr>
        <td><?=$i;?></td>            
            <td><?= $cetak ['nisn']?></td>
            <td><?= $cetak ['nama']?></td>
            <td><?= $cetak ['jurusan']?></td>
            <td><img src="img/<?=$cetak['gambar'] ?>" width="100"></td>
            <td>
                <a href = "ubah.php?idaja=<?= $cetak['id']; ?>">ubah</a>
                <a href = "hapus.php?id=<?= $cetak['id']?>"
                onclick=" return confirm ('yakin mau hapus?')">hapus</a>
            </td>
        </tr>
        <?php $i++;?>
        <?php }?>
    </table>
</body>
</html>