<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'db_sekolah');

function query($query)
{
    global $koneksi;
    $hasil = mysqli_query($koneksi,$query);
    $kotakbesar=[];
    while ($kotakkecil = mysqli_fetch_assoc($hasil)){
        $kotakbesar [] = $kotakkecil;
    }
    return $kotakbesar;
}

function tambah ($post){
    global $koneksi;

    $nama = htmlspecialchars($post['nama']);
    $nisn = $post['nisn'];
    $jurusan = $post['jurusan'];
    // $gambar =$post['gambar'];

    $gambar = upload ();
    if (!$gambar) {
        return false;
    }
    
    $sql = "INSERT INTO siswa VALUES (
        '','$nisn','$nama','$jurusan','$gambar')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);

   }

   function upload() {
        $namaFile = $_FILES ["gambar"]["name"];
        $ukuranFile = $_FILES["gambar"]["size"];
        $error = $_FILES ["gambar"]["error"];
        $tmpName = $_FILES ["gambar"]["tmp_name"];

        if ( $error === 4 ) {
            echo "<script>
                    alert ('pilih gambar dahulu');
                  </script>";
                  return false;
        }    
        $ektensiValid = ['jpg', 'jpeg', 'png'];
        $ektensigambar = explode ('.', $namaFile);
        $ektensigambar = strtolower (end($ektensigambar));

        if (!in_array($ektensigambar, $ektensiValid)) {
            echo "<script>
                    alert ('file  yang diupload bukan gambar');
                 </script>";
                 return false;
        }
        if ($ukuranFile > 2000000) {
            echo "<script>
                    alert ('maaf ukuran file terlalu besar');
                 </script>";
                 return false;
        }
        
        $namafileBaru = uniqid();
        $namafileBaru .= '.';
        $namafileBaru .= $ektensigambar;

        move_uploaded_file ($tmpName, 'img/' . $namafileBaru);
        return $namafileBaru;
    }

        function hapus($id){
          global $koneksi;
          mysqli_query ($koneksi,"DELETE FROM siswa WHERE id =$id");

          return mysqli_affected_rows($koneksi);
        }

        function ubah ($post) {
            global $koneksi;

            $id = htmlspecialchars($post["id"]);
            $nama = htmlspecialchars($post["nama"]);
            $nisn = htmlspecialchars($post["nisn"]);
            $jurusan = htmlspecialchars($post["jurusan"]);
            $gambarLama = htmlspecialchars($post["gambarLama"]);

            if ( $_FILES ["gambar"]["error"] === 4) {
                $gambar = $gambarLama;
            } else {
                $gambar = upload();
            }

            $sql = "UPDATE siswa SET
                    nisn = '$nisn',
                    nama = '$nama',
                    jurusan = '$jurusan',
                    gambar = '$gambar'
                    
                    WHERE id = $id";
            mysqli_query ($koneksi, $sql);
            return mysqli_affected_rows($koneksi);

        }
    


?>