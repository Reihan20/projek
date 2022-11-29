<?php 
require 'functions.php';

$id = $_GET ["idaja"]; 


$siswa = query ("SELECT * FROM siswa WHERE id = $id")[0];
// var_dump($siswa);
// exit;


if (isset($_POST['submit'])) {
    // var_dump($_POST);
    // exit;
    if (ubah($_POST)>0) {
        echo"
            <script>
            alert('data berhasil diubah');
            document.location.href = 'read.php';
            </script>;
     ";
    } else {
        echo "
            <script>
            alert('data gagal diubah');
            </script>;
     ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            display:block;
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $siswa["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?php echo $siswa["gambar"]; ?>">
        <li>
            <label for="nisn">Nisn</label>
            <input type="text" name="nisn" id="nisn" value="<?php echo $siswa["nisn"]; ?>">
        </li>
        <li>
            <label for="nama">Nama</label>
            <input type="text" name="nama" value="<?php echo $siswa["nama"]; ?>">
        </li>
        <li>
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" value="<?php echo $siswa["jurusan"]; ?>">
        </li>  
        <li>
            <label for="gambar">Gambar</label><br>
            <img src="img/<?php echo $siswa["gambar"]; ?>" width="70"><br>
            <input type="file" name="gambar" id="gambar" value="<?php echo $siswa["gambar"]; ?>">
        </li>  

        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>