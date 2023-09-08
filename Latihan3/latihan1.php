<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0
// $hari1 ="senin";
// $hari2 ="selasa";

// Membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo  "<br>";
// print_r($bulan);
// echo  "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1 [0];
// echo  "<br>";
// echo $bulan [1];

// Menampilkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
var_dump($hari);
?>