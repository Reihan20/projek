<?php 
require 'functions.php';

if(isset ($_POST ["tekan"])) {

    if ( tambah ($_POST)> 0){
     echo"
     <script>
      alert('data berhasil ditambah');
      document.location.href = 'read.php';
      </script>;
     ";
 } else {
     echo "
     <script>
     alert('data gagal ditambah');
     </script>;
     ";
  }
//   var_dump($_POST);
//   exit;
}
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
    <h1>form tambah</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label>nama:</label>
                <input type="text" name="nama" autocomplete="off">
            </li><br><br>
            <li>
                <label>nisn:</label>
                <input type="text" name="nisn" autocomplete="off">
            </li><br><br>
            <li>
                <label>jurusan:</label>
                <select name="jurusan">
                    <option value="">- Pilih Jurusan -</option>
                    <option value="X RPL">RPL</option>
                    <option value="XI RPL">MM</option>
                    <option value="XII RPL">TKJ</option>
                </select>
            </li><br><br>
            <li>
                <label>gambar:</label>
                <input type="file" name ="gambar">
            </li><br><br>
            <button type="submit" name="tekan">kirim</button>
        </ul>
    </form>
</body>
</html>