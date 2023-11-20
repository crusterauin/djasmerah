<?php

include_once('classes.php');

$materi->setMateri($_GET['materi']);
$materiPilihan = ${$_GET['materi']};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nilai.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quando&display=swap" rel="stylesheet">
    <title>DjasMerah</title>
</head>
<body>
    <nav>
        <div class="navbar">
            <a class="logoJudul" href=beranda.php>
                <img class="logo" src="aset/logoDjasMerah.png" alt="Logo DjasMerah">
                <p class="judul">DjasMerah</p>
            </a>
        </div>
    </nav>
    <p class="selesai">Quiz Selesai</p>
    <div class="hasilNilai">
        <p class="nilaiKamu">Nilai Kamu :</p>
        <p class="nilai"><?php echo $skor;?>/3</p>
        <p class="nilaiKamu">Selamat! Tetap semangat belajar hal lain, ya!</p>
    </div>
    <div class="pilihan">
        <a href="beranda.php">
            <p>Menu Utama</p>
        </a>
        <a href="materi.php?materi=<?php echo $materi->getMateri();?>">
            <p>Ulangi Materi</p>
        </a>
    </div>
    <div class="oleh">
        <p>Oleh Faturrohman Fairuz Zaki dan Firdy Dwi Aryani</p>
    </div>
</body>
</html>