<?php 
$mahasiswa = [
    ["intan nur aini", "043040023", "teknik informatike", "rahmawatiintannuraini@unpas.ac.id"],
    ["meilisya tri uthari", "043040024", "teknik informatike", "meilisyatriutari@unpas.ac.id@unpas.ac.id"]
];

?>
<!DOCTYPE html>
<html>
<head>
    <title> daftar mahasiswa</title>
</head>
<body>

<h1>daftar mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li> Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>





</body>
</html>

