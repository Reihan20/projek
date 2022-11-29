<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="functions.php" method="POST" enctype="multipart/form-data"> 
        <label for="">Nisn :</label>
        <input type="text" name="nisn">
        <br><br>
        <label for="">Nama :</label>
        <input type="text" name="nama">
        <br><br>
        <label for="">Jurusan :</label>
        <select name="jurusan">
            <option value="">- Pilih Kelas -</option>
            <option value="X RPL">RPL</option>
            <option value="XI RPL">MM</option>
            <option value="XII RPL">TKJ</option>
        </select>
        <br><br>
        <label for="">Email :</label>
        <input type="email" name="email ">
        <br><br>
        <label for="">Foto :</label>
        <input type="file" name="foto">
        <br><br>
        <button type="submit">SIMPAN</button>
    </form>
</body>
</html>