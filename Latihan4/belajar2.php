<?php
// $mahasiswa = [[  "Intan Rahmawati", "094565432", 
// "Rahmawatiintannuraini@gmail.com", "Rekayasa Perangkat Lunak"],
// ["Bintang Rizky Attala Rafi", "096436728", "RizkyRafi@gmail.com",
// "Multi Media"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
"gambar" => "rabbit3.jpg"

    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1> Daftar Mahasiswa</h1>
<?php foreach($mahasiswa as $mhs ) :?>
    <ul>
        <li>
            <img src="img/rabbit3.jpg">
        </li>
        <li>Nama : <?=  $mhs["nama"]; ?> </li>
        <li>NRP : <?=  $mhs["nrp"]; ?> </li>
        <li>Email : <?=  $mhs["email"]; ?> </li>
        <li>Jurusan : <?=  $mhs["jurusan"]; ?> </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>