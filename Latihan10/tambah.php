<?php 

require 'function.php';
// cek apakah tombol submit sudah ditekan apa belum
if( isset($_POST["submit"]) ) {
    

    // cek data apakah berhasil ditambahkan
    if( tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Tambah data mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
        <li>
                <label for="nrp">NRP = </label>
                <input type="text" name="nrp"
                required>
            </li>
            <li>
                <label for="nama">Nama = </label>
                <input type="text" name="nama">
            </li>
            
            <li>
                <label for="email">Email = </label>
                <input type="text" name="email">
            </li>
            <li>
                <label for="jurusan">Jurusan = </label>
                <input type="text" name="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar = </label>
                <input type="file" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambahkan data</button>
            </li>
        </ul>
    </form>


</body>
</html>