<?php 

require 'function.php';

// ambil data di URL 
$id = $_GET["id"];

// query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan apa belum
if( isset($_POST["submit"]) ) {

    // cek data apakah berhasil diubah
    if( ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
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
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h2>Ubah Data Mahasiswa</h2>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
        <li>
                <label for="nrp">NRP = </label>
                <input type="text" name="nrp"
                required value="<?= $mhs["nrp"]?>">
            </li>
            <li>
                <label for="nama">Nama = </label>
                <input type="text" name="nama" value="<?= $mhs["nama"]?>">
            </li>
            
            <li>
                <label for="email">Email = </label>
                <input type="text" name="email" value="<?= $mhs["email"]?>">
            </li>
            <li>
                <label for="jurusan">Jurusan = </label>
                <input type="text" name="jurusan" value="<?= $mhs["jurusan"]?>">
            </li>
            <li>
                <label for="gambar">Gambar = </label>
                <input type="text" name="gambar" value="<?= $mhs["gambar"]?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah data</button>
            </li>
        </ul>
    </form>


</body>
</html>