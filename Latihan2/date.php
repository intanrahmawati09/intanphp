<?php 
// Date 
// Untuk menampilkan tanggal dengan format tertentu
// echo date ("l, d-M-Y);

// Time 
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
echo date("1", time()+60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0,0,)
// jam, menit, detik, bulan, tanggal, tahun
// echo date ("l", mltime (0,0,0,0,25,1985));


// strtotime
echo date("1", strtime("25 Aug 1985"));
?>