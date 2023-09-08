<?php 
// $_get
$mahasiswa = [
    [
        "nama"=> "Intan Rahmawati", 
"nrp" => "094565432",
 "email" =>  "Rahmawatiintannuraini@gmail.com",
"jurusan" => "Rekayasa Perangkat lunak",
"gambar" => "rabbit1.jpg"
    ],
    [
        "nrp" => "096436728",
    "nama"=> "Irma Dianasari", 
 "email" =>  "irma@gmail.com",
"jurusan" => "Informatika",
"gambar" => "rabbit2.jpg"

    ]
];


?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
       <li>
        <a href="belajar2.php?nama=<?= $mhs["nama"];?>&nrp= <?= $mhs["nrp"]; ?>&email= <?= $mhs["email"]; ?>&jurusan= <?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    <?php endforeach; ?>
    <ul>
    </body>
</html>