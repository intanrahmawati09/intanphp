<?php
function salam($waktu = "Datang", $nama= "Admin"){
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi","Intan Rahmawati"); ?></h1>
</body>
</html>